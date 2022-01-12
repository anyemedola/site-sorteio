<?php

$dataHoje = date("Y-m-d");
$token_recebido = '';
$array_pontos = '';
$erro = '';
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://webapi.drogariasantamarta.com.br:31443/api/login');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);


$headers = array();
$headers[] = 'Accept: application/json';
$headers[] = 'user: ZUM';
$headers[] = 'password: 651f5ac7d94c430a848bbf099e21155f';
$headers[] = 'Content-Type: application/json';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);



$result = curl_exec($ch);
if (curl_errno($ch)) {
    $erro = 'Erro:' . curl_error($ch);
} else {
    $x = (json_decode($result, true));
    // print_r($x);
    // echo '<br><br>';
    $token_recebido = $x['data']['tokenaccess'];  
    
}
curl_close($ch);



if(!empty($token_recebido)){
    
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, 'https://webapi.drogariasantamarta.com.br:31443/api/custom/aniversario.pontuacao/consultar?cpfcnpj='.$cpfCliente.'&datainicial='.$dataInicio.'&datafinal='.$dataFinal.'&tokenaccess='.$token_recebido);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    
    $headers = array();
    $headers[] = 'Accept: application/json';
    $headers[] = 'Content-Type: application/json';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    
    $result = curl_exec($ch);
    if (curl_errno($ch)) {
        $erro =  'Erro:' . curl_error($ch);
    } else {

       
        $array_pontos = (json_decode($result, true));
        //print_r($array_pontos);
        
        if (!empty($array_pontos)) {
            
            for ($i=0; $i < count($array_pontos); $i++) { 

                //echo $i.'<br>';

                    $loja = $array_pontos[$i]['loja'];
                    $datavenda = $array_pontos[$i]['datavenda'];
                    $nfce = $array_pontos[$i]['nfce'];
                    $cpfcnpj = $array_pontos[$i]['cpfcnpj'];
                    $valorpremiado = $array_pontos[$i]['valorpremiado'];
                    $valorvenda = $array_pontos[$i]['valorvenda'];
                    $pontuacao = $array_pontos[$i]['pontuacao'];  
                
                $sel = $db->select("SELECT id FROM vendas_recebidas WHERE nfce='$nfce' AND id_usuario='$id_logado' LIMIT 1");
                if(!$db->rows($sel)){

                   $insert = $db->select("INSERT INTO vendas_recebidas (loja, datavenda, nfce, cpfcnpj, valorpremiado, valorvenda, pontuacao, id_usuario) VALUES ('$loja', '$datavenda', '$nfce', '$cpfcnpj', '$valorpremiado', '$valorvenda', '$pontuacao', '$id_logado')");
                   $id_venda = $db->last_id($insert); 

                    if($pontuacao>0){

                        $x = 1;
                        while($x<=$pontuacao){

                            $insert = $db->select("INSERT INTO cupons_gerados (id_venda, data_geracao, id_usuario) VALUES ('$id_venda', '$dataHoje', '$id_logado')");         
                            $x++;        

                        }

                    }
                

                }

            }

        }
        



    }
    curl_close($ch);
 
     
 
 
 }
 


?>