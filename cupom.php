<?php
require "config.php";
require "includes/session.php";
require "includes/header.php";

$total = 0;
$select = $db->select("SELECT COUNT(*) AS total FROM cupons_gerados WHERE id_usuario='$id_logado'");
$line = $db->expand($select);
$total = $line['total'];

?>




            <div class="container-fluid main-section" id="rolagem1">


            <nav class="navbar navbar-expand-lg somecelular" style="position: fixed; z-index:9999; width:100%; ">
                <div class="container navcontainer">
                    <div class="row" style="width: 100%">
                        <div class="collapse navbar-collapse" id="navbarsExample09">
                            
                            <div class="col-lg-12 col-md-12 text-center">
                                <ul class="list-inline mx-auto justify-content-center">
                                <ul class="list-inline mx-auto ">
                                    <li class="list-inline-item active float-left">
                                        <a class="nav-link link-scroll" href="javascript:void(0)" data-target="rolagem1">Bem vindo, <b><?php echo $logado?></b> <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="list-inline-item ">
                                        <a class="nav-link link-scroll" href="javascript:void(0)" data-target="rolagem7"><span style="color:transparent;">-</span></a>
                                    </li>
                                    <li class="list-inline-item float-right">
                                        <a class="nav-link link-scroll" href="logout" data-target="rolagem7">Sair</a>
                                    </li>
                                </ul>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </nav>


            <nav class="navbar somepc" style="position: fixed; z-index:9999; width:100%;">

                <div class="container navcontainer">
                    <div class="row text-center" style="width: 100%; height: 60px !important; position: relative !important;">
                        <button class="navbar-toggler text-center" type="button" data-toggle="collapse" data-target="#navbarsExample08" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation" style="width: 100%">
                            <span class="cormenu"><i class="fa fa-bars"></i></span>
                        </button>
                    </div>
                    <div class="row" style="width: 100%">
                        <div class="collapse navbar-collapse" id="navbarsExample08">
                            
                            <div class="col-lg-12 col-md-12 text-center">
                                <ul class="list-inline mx-auto justify-content-center">
                                    <li class="list-inline-item active w-100">
                                        <a class="nav-link link-scroll" href="javascript:void(0)" data-target="rolagem1">Bem vindo, <b><?php echo $logado?></b> <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="list-inline-item w-100">
                                        <a class="nav-link link-scroll" href="logout" data-target="rolagem7">Sair</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </nav>





            
            <div class="container-fluid espaco-entre-div" id="rolagem2">
                <div class="container">
                    <div class="row ">
                        <div class="col-lg-12 col-md-12 col-xs-12 text-center banner">
                        </div>
                        <div class="col-lg-12">
                            <div class="row">
                                    <div class=" col-sm-12 col-md-12 col-lg-12 text-center">
                                        <a href="meus-dados" class="submit large p-5 mrpc-5" style="color: white;"><img src="img/edit-regular.svg" style="width:6%;"> Meus Dados</a>
                                        <a href="cupom.php" class="submit large p-5 mlpc-5" style="color: white;"><img src="img/folder-regular.svg" style="width:6%;"> Meus Cupons</a>
                                    </div>
                            </div>
                                 
                               
                        </div>                    
                    </div>
                </div>
              
            </div>
            
            <div class="container-fluid">
                <div class="container cupons" style="background-color:white;">
                    <h3 style="color: #772A8C;font-weight: 800;">Cupons Cadastrados</h3>
                    <p>Você possui <span style="color: #772A8C; font-weight: 800;"><?php echo $total; ?></span> cupons gerados</p>
                    <hr>
                    <?php 
                        $sel = $db->select("SELECT * FROM cupons_gerados WHERE id_usuario='$id_logado' ORDER BY id_cupom DESC");
                        if($db->rows($sel)){
                            while($line = $db->expand($sel)){
                    ?>
                 
                        <div class="container lista">
                            <div class="row p-4" style="border: solid lightgray; border-radius: 15px;">
                            <div class="col-md-3 p-3">
                                    <p style="font-weight: 800;">NÚMERO DA SORTE</p>
                                    <p style="color: #772A8C;font-weight: 800;"><?php echo NumeroSorte($line['num_gerado']); ?></p>
                                </div>
                                <div class="col-md-2 p-3">
                                    <p style="font-weight: 800;">DATA</p>
                                    <p><img src="img/clock.png"> <?php echo data_mysql_para_user($line['data_geracao']); ?></p>
                                </div>
                                
                                <div class="col-md-3 p-3">
                                    <p style="font-weight: 800;">STATUS</p>
                                    <p style="color: #8DA632;"><img src="img/check.png"> <?php echo ValidarSorteio($line['data_geracao']);?></p>
                                </div>
                                <div class="col-md-4 p-3">
                                    <p style="font-weight: 800;">VÁLIDO PARA SORTEIO</p>
                                    <p><img src="img/clock.png"> <?php echo ValidoSorteio($line['data_geracao']); ?></p>
                                </div>
                            </div>
                        </div>

                    <?php
                         }
                        }  else {  
                    ?>
                    
                    
                        <p style="font-weight: 800;"><br>- NENHUM NÚMERO ENCONTRADO!</p>                                
                    
                    
                    <?php
                         }                    
                    ?>
                        
                 

                    

                    
                </div>
            </div>


            <br><br><br><br><br>
            </div>
    </body>

    <?php require "includes/footer.php";?>