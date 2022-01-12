<?php 
    require "config.php";
    require "includes/header.php";
    $timerSorteio = timerSorteio();
?>

            <div class="container-fluid main-section" id="rolagem1">


            <nav class="navbar navbar-expand-lg somecelular" style="position: fixed; z-index:9999; width:100%; ">
                <div class="container navcontainer">
                    <div class="row" style="width: 100%">
                        <div class="collapse navbar-collapse" id="navbarsExample08">
                            
                            <div class="col-lg-12 col-md-12 text-center">
                                <ul class="list-inline mx-auto justify-content-center">
                                    <li class="list-inline-item active">
                                        <a class="nav-link link-scroll" href="javascript:void(0)" data-target="rolagem1">Home <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="nav-link link-scroll" href="javascript:void(0)" data-target="rolagem2">Cadastre-se</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="nav-link link-scroll" href="javascript:void(0)" data-target="rolagem3">Como participar</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="nav-link link-scroll" href="javascript:void(0)" data-target="rolagem4">Prêmios</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="nav-link link-scroll" href="javascript:void(0)" data-target="rolagem5">Parceiros</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="nav-link link-scroll" href="javascript:void(0)" data-target="rolagem6">FAQ</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="nav-link link-scroll" href="javascript:void(0)" data-target="rolagem7">Regulamento</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="nav-link link-scroll" target="_blank" href="https://api.whatsapp.com/send?phone=5511995101025&amp;text=Ola, tenho duvidas..." data-target="rolagem7">Whatsapp</a>
                                    </li>
                                    <!-- <li class="list-inline-item">
                                        <a class="nav-link link-scroll" target="_blank" href="https://www.drogariasantamarta.com.br" data-target="rolagem7">Compre Agora</a>
                                    </li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </nav>

            <nav class="navbar somepc" style="position: fixed; z-index:9999; width:100%;">

                <div class="container navcontainer">
                    <div class="row text-center" style="width: 100%; height: 60px !important; position: relative !important;">
                        <button class="navbar-toggler text-center" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation" style="width: 100%">
                            <span class="cormenu"><i class="fa fa-bars"></i></span>
                        </button>
                    </div>
                    <div class="row" style="width: 100%">
                        <div class="collapse navbar-collapse" id="navbarsExample09">
                            
                            <div class="col-lg-12 col-md-12 text-center">
                                <ul class="list-inline mx-auto justify-content-center">
                                    <li class="list-inline-item active w-100">
                                        <a class="nav-link link-scroll" href="javascript:void(0)" data-target="rolagem1">Home <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="list-inline-item w-100">
                                        <a class="nav-link link-scroll" href="javascript:void(0)" data-target="rolagem2">Cadastre-se</a>
                                    </li>
                                    <li class="list-inline-item w-100">
                                        <a class="nav-link link-scroll" href="javascript:void(0)" data-target="rolagem3">Como participar</a>
                                    </li>
                                    <li class="list-inline-item w-100">
                                        <a class="nav-link link-scroll" href="javascript:void(0)" data-target="rolagem4">Prêmios</a>
                                    </li>
                                    <li class="list-inline-item w-100">
                                        <a class="nav-link link-scroll" href="javascript:void(0)" data-target="rolagem5">Parceiros</a>
                                    </li>
                                    <li class="list-inline-item w-100">
                                        <a class="nav-link link-scroll" href="javascript:void(0)" data-target="rolagem6">FAQ</a>
                                    </li>
                                    <li class="list-inline-item w-100">
                                        <a class="nav-link link-scroll" href="javascript:void(0)" data-target="rolagem7">Regulamento</a>
                                    </li>
                                    <li class="list-inline-item w-100">
                                        <a class="nav-link link-scroll" target="_blank" href="https://api.whatsapp.com/send?phone=5511995101025&amp;text=Ola, tenho duvidas..." data-target="rolagem7">Whatsapp</a>
                                    </li>
                                    <!-- <li class="list-inline-item">
                                        <a class="nav-link link-scroll" target="_blank" href="https://www.drogariasantamarta.com.br" data-target="rolagem7">Compre Agora</a>
                                    </li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </nav>


            <div class="container somecelular" style="position: relative;">
                <div class="row ">
                    <div class=" banner col-md-12" > 

                        <div class="bloco1-absoluto" >
                            <div class="bloco1-absoluto-interno">
                                    <div style=" width:32%;  float:left; padding:10px; padding-right:0; padding-top:14px">
                                        <h6 style="color: #fff; font-weight: 600; font-size: 13px; text-transform:uppercase; margin-bottom:0px">Confira seus cupons ou </h6><a href="#rolagem2" style="font-size:13px; color:#fff; text-decoration:underline">cadastre-se aqui.</a> 
                                    </div>
                                    <div class="form1">
                                        <form  method="POST" action="controlers/login.php">
                                            <div style=" width:45%; float:left; padding-top:10px; padding-right:5px ">
                                                    <input type="text"  style="border:0; max-width:100%; width:100%; border-radius:2px; padding-left:4px; color:#772A8C; font-size:12px;  height:28px" placeholder="Seu CPF" name="cpf" id="cpf" maxlength="11" class="cpf" required>
                                                    <input type="password"  style="border:0; max-width:100%; width:100%; border-radius:2px; padding-left:4px; margin-top:3px; font-size:12px; height:28px; color:#772A8C" placeholder="Senha" id="senha" name="senha" maxlength="8" required>
                                            </div>
                                            <div style=" width:23%;  float:left; padding-top:10px; padding-right:10px ">
                                                    <button type="submit" style="color:#FFF; height:59px; border-radius:5px; font-size:16px; font-weight:600; background-color:#E2004A; border:0; max-width:100%; width:100%;" name="entrar" id="entrar">Entrar</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="hide form2">
                                        <form  method="POST" action="controlers/esqueci_senha.php">
                                            <div style=" width:45%; float:left; padding-top:10px; padding-right:5px ">
                                                    <label for="" style="color: #fff; font-size: 10px">Um email sera enviado para você.</label>
                                                    <input type="text"  style="border:0; max-width:100%; width:100%; border-radius:2px; padding-left:4px; color:#772A8C; font-size:12px;  height:28px" placeholder="Seu CPF" name="cpf" id="cpf" maxlength="11" class="cpf" required>
                                            </div>
                                            <div style=" width:23%;  float:left; padding-top:10px; padding-right:10px ">
                                                    <button type="submit" style="color:#FFF; height:59px; border-radius:5px; font-size:16px; font-weight:600; background-color:#E2004A; border:0; max-width:100%; width:100%;" name="entrar" id="entrar">Enviar</button>
                                            </div>
                                        </form>
                                    </div>

                            </div>
                            <div style="width: 100%; color:#FFF; font-size:11px; text-align:right; padding-top:4px">
                                <a class="hide loginentrar" href="javascript:void(0);" style="color:#FFF; text-decoration:underline">Entrar</a>
                                <a class="esqueci_senha" href="javascript:void(0);" style="color:#FFF; text-decoration:underline">Esqueci minha senha</a>
                            </div>     
                        </div>
                            
                            <img src="img/topo.png" style="max-width: 100%" >


                            <div class="bloco2-absoluto">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <h6 style="color: #fff; font-weight: 600; margin-left: -5px">Próximo sorteio</h6>
                                    </div>
                                    <div class="col-lg-8">
                                        <div style="width: 32%; float: left;">
                                            <div style="margin-bottom: 3px;width: 100%; background-color: #fff; height: 30px; border-radius: 3px ; text-align: center; font-weight: bold; font-family: Tahoma;padding-top: 4px ">
                                                <?php echo $timerSorteio['dias'];?>
                                            </div>
                                            <center><p style="color: #fff;font-size: 12px;font-weight: 700">Dias</p></center>
                                        </div>
                                        <div style="width: 1%; float: left">.</div>
                                        <div style="width: 32%; float: left;">
                                        <div style="margin-bottom: 3px;width: 100%; background-color: #fff; height: 30px; border-radius: 3px ; text-align: center; font-weight: bold; font-family: Tahoma;padding-top: 4px ">
                                            <?php echo $timerSorteio['horas'];?>
                                            </div>
                                            <center><p style="color: #fff;font-size: 12px;font-weight: 700">Horas</p></center>
                                        </div>
                                        <div style="width: 1%; float: left">.</div>

                                        <div style="width: 32%; float: left;">
                                        <div style="margin-bottom: 3px;width: 100%; background-color: #fff; height: 30px; border-radius: 3px ; text-align: center; font-weight: bold; font-family: Tahoma;padding-top: 4px ">
                                            <?php echo $timerSorteio['minutos'];?>
                                            </div>
                                            <center><p style="color: #fff;font-size: 12px;font-weight: 700">Minutos</p></center>
                                        </div>
                                    </div>
                                    <div class="col-md-12 text-center">
                                    <center><p class="text-center" style="color: #fff;font-size: 12px;font-weight: 700;">O resultado será divulgado dia 03/01/22</p></center>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>  
                </div>  
            </div>    

            <div class="container main-section-c somepc" style="position: relative;">
                <div class="row ">
                    <div class=" banner col-md-12" > 
                            
                            <div class="row bloco2-absoluto-c">
                                <div class="col-md-12 text-center">
                                    <h6 style="color: #fff; font-weight: 600; margin-left: -5px">Próximo sorteio</h6>
                                </div>
                                <div class="col-lg-8">
                                    <div style="width: 32%; float: left;">
                                        <div style="margin-bottom: 3px;width: 100%; background-color: #fff; height: 30px; border-radius: 3px ; text-align: center; font-weight: bold; font-family: Tahoma; ">
                                            <?php echo $timerSorteio['dias'];?>
                                        </div>
                                        <center><span style="color: #fff;font-size: 12px;font-weight: 700">Dias</></center>
                                    </div>
                                    <div style="width: 1%; float: left">.</div>
                                    <div style="width: 32%; float: left;">
                                    <div style="margin-bottom: 3px;width: 100%; background-color: #fff; height: 30px; border-radius: 3px ; text-align: center; font-weight: bold; font-family: Tahoma; ">
                                        <?php echo $timerSorteio['horas'];?>
                                        </div>
                                        <center><span style="color: #fff;font-size: 12px;font-weight: 700">Horas</span></center>
                                    </div>
                                    <div style="width: 1%; float: left">.</div>

                                    <div style="width: 32%; float: left;">
                                    <div style="margin-bottom: 3px;width: 100%; background-color: #fff; height: 30px; border-radius: 3px ; text-align: center; font-weight: bold; font-family: Tahoma; ">
                                        <?php echo $timerSorteio['minutos'];?>
                                        </div>
                                        <center><span style="color: #fff;font-size: 12px;font-weight: 700; margin-top: 0">Minutos</span></center>
                                    </div>
                                </div>
                                <div class="col-md-12 mt-1 pb-2">
                                    <button style="color:#FFF; height:30px; border-radius:5px; font-size:16px; font-weight:600; background-color:#E2004A; border:0; max-width:100%; width:100%;" type="button">SAIBA MAIS</button>
                                </div>
                            </div>

                        <img src="img/titulo-santa-marta.png" style="max-width: 100%" >
                        <div class="row bloco1-absoluto-interno-c" >
                            <div class='col-md-12'>
                                <div class="form1">
                                    <form  method="POST" action="controlers/login.php">
                                        <div class="form-group text-center pt-3">
                                            <h6 style="color: #fff; font-weight: 600; font-size: 13px; text-transform:uppercase; margin-bottom:0px">Confira seus cupons ou <a href="#rolagem2" style="font-size:13px; color:#fff; text-decoration:underline"> cadastre-se aqui.</a></h6>
                                        </div>
                                        <div class="form-group">
                                            <input type="text"  placeholder="Seu CPF" name="cpf" id="cpf" maxlength="11" class="cpf form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Senha" id="senha" name="senha" maxlength="8" required>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" style="color:#FFF; height:59px; border-radius:5px; font-size:16px; font-weight:600; background-color:#E2004A; border:0; max-width:100%; width:100%;" name="entrar" id="entrar">Enviar</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="form2 hide">
                                    <form  method="POST" action="controlers/esqueci_senha.php">
                                        <div class="form-group text-center pt-3">
                                            <h6 style="color: #fff; font-weight: 600; font-size: 13px; text-transform:uppercase; margin-bottom:0px">Confira seus cupons ou <a href="#rolagem2" style="font-size:13px; color:#fff; text-decoration:underline"> cadastre-se aqui.</a></h6>
                                        </div>
                                        <div class="form-group">
                                            <h6 style="color: #fff; font-weight: 600; font-size: 13px; margin-bottom:0px">Estaremos enviando a senha para o email registrado neste CPF</h6>
                                        </div>
                                        <div class="form-group">
                                            <input type="text"  placeholder="Seu CPF" name="cpf" id="cpf" maxlength="11" class="cpf form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" style="color:#FFF; height:59px; border-radius:5px; font-size:16px; font-weight:600; background-color:#E2004A; border:0; max-width:100%; width:100%;" name="entrar" id="entrar">Enviar</button>
                                        </div>
                                    </form>
                                </div>
                                
                                <div style="width: 100%; color:#FFF; font-size:16px; text-align:right; padding-top:4px; padding-bottom:4px; text-align: center">
                                    <a class="hide loginentrar" href="javascript:void(0);" style="color:#FFF; text-decoration:underline">Entrar</a>
                                    <a class="esqueci_senha" href="javascript:void(0);" style="color:#FFF; text-decoration:underline">Esqueci minha senha</a>
                                </div>     
                            </div>
                            </div>
                        </div>


                    </div>

            </div>  
        </div>    

            <div class='container-fluid purple espaco-entre-div'>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-12 col-xs-12 text-center">
                            <img src="img/sorteio-todo-mes.png">
                        </div>
                        <div class="col-lg-8 col-md-12 col-xs-12">
                            <div class="row text-center">
                                <div class="col-lg-12 col-md-12 col-xs-12"><p style="color: white"> A cada R$ 50,00 em compras de produtos participantes, concorra a<br>  carros zero km, motos, celulares, notebooks e dezenas de outros prêmios. </p></div>
                                <div class="col-lg-6 col-md-12 col-xs-12">
                                    <img src="img/icone-compre-50-reais.png" class="mr-7">
                                    <img src="img/icone-realize-cadastro.png" >
                                </div>
                                <div class="col-lg-6 col-md-12 col-xs-12">
                                    <img src="img/icone-obtenha-numero.png" class="mr-7">
                                    <img src="img/icone-participe-sorteio.png" >
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>

            <div class='container-fluid claro espaco-entre-div'>
                <div class="container">
                    <div class="row" >
                        <div class="col-lg-4 col-md-12 col-xs-12 text-center">
                            <img src="img/numero_da_sorte.png" style="width: 70%;">
                        </div>
                        <div class="col-lg-4 col-md-12 col-xs-12">
                            <div class="row text-center">
                                <div class="col-lg-12 col-md-8 col-xs-8"><p style="color: #772A8C; font-size: 18px"> Comprando produtos com a <b>etiqueta laranja das marcas parceiras</b>, você ganha <b>número da sorte em dobro.</b> </p></div>
                                <div class="col-lg-6 col-md-12 col-xs-12">
                                    <a href="https://www.drogariasantamarta.com.br/busca?fq=H:356" target="_blank" class="submit wdtotal" style="background-color:#E2004A; font-size: 18px">Conferir Ofertas</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-xs-12 text-center">
                            <img src="img/mulher_numero_da_sorte.png" style="width: 100%; margin-bottom: -90px;">  
                        </div>
                    </div>
                </div>
            </div>

            
            <form id="contact_form" action="controlers/salva.php" method="POST" >
            <div class="container-fluid cadastro espaco-entre-div" id="rolagem2">
                <div class="container">
                    <div class="row ">
                        <div class="col-lg-12 col-md-12 col-xs-12 text-center">
                            
                                <h2 style="color: #772A8C; ">Cadastro</h2>
                                <h6 class="texto-qb">Se você já se cadastrou aqui no site da promoção Aniversário Santa Marta,
                                    utilize o mesmo login e senha para<br> acessar seus números da sorte. Caso ainda não
                                    tenha se cadastrado, basta preencher os campos abaixo.
                                </h6>
                                
                        </div>
                        

                        <div class="col-lg-12">
                            <div class="row">
                                    <div class="col-sm-6 col-md-6 col-lg-6 float-right">
                                            <input  id="name" class="input form-control" name="name" type="text" placeholder="Nome completo*" required/>
                                            <input  id="email" class="input form-control" name="email" type="email" placeholder="E-mail válido*" size="30" required/>
                                            <input  name="cep" class="input form-control cep" type="text" id="cep" value="" placeholder="CEP*" size="10" maxlength="9" onblur="pesquisacep(this.value);" required/>
                                            <input  id="bairro" class="input form-control" name="bairro" type="text" placeholder="Bairro*" size="30" required/>
                                            <input  id="uf" class="input form-control" name="uf" type="text" placeholder="Estado*" size="30" required/>
                                            <input  id="password" class="input form-control" name="password" type="password" placeholder="Senha de acesso(minímo 6 caracteres)*" size="30" maxlength="20" minlength="6" required/>
                                    </div>
                                    <div class=" col-sm-6 col-md-6 col-lg-6 align-self-end">
                                            <input  id="cpf" class="input form-control cpf"  name="cpf" type="text" placeholder="CPF*" required/>
                                            <input  id="confirm_email" class="input form-control" name="confirm_email" type="email" placeholder="Digite e-mail novamente*" size="30" required/>
                                            <input  id="end" class="input form-control" name="end" type="text" placeholder="Endereço*" size="30" required/>
                                            <input  id="cid" class="input form-control" name="cid" type="text" placeholder="Cidade*" size="30" required/>
                                            <input  id="tel" class="input form-control whats" name="telefone" type="text" placeholder="Telefone*" size="30" maxlength="15" required/>
                                            <input  id="confirm_password" class="input form-control" name="confirm_password" type="password" placeholder="Confirmar senha*" size="30" maxlength="20" minlength="6"  required/>
                                    </div>
                            </div>
                                 
                               
                        </div>
                       
                        
                        <div class="col-lg-12 text-center">
                            <button type="submit" class="submit wdtotal">Finalizar</button>
                        </div>
                    
                    </div>
                </div>
              
            </div>
            </form>

            <div class="container-fluid participar espaco-entre-div" id="rolagem3">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12 ">
                            <h2 style="color: #772A8C" class="text-center">Como participar</h2>
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <p><img src="img/icone-seta-roxa.png"> 
                                    Ao realizar a compra nos canais de vendas:<br /><br />
                                    
                                    •	Lojas Físicas – qualquer uma das unidades de Goiás e Distrito Federal;<br />
                                    •	Site Santa Marta – <a href="www.drogariasantamarta.com.br" target="_blanck" >www.drogariasantamarta.com.br</a><br />
                                    •	Ligue Santa (Central de Vendas): 4008-6600 (capitais e regiões metropolitanas) e 0300-313-6600 (demais localidades);<br />
                                    •	Aplicativo Drogaria Santa Marta.<br />
                                    
                                    <p>Obs: Não serão válidos para a promoção compras realizadas nos canais Rappi, iFood e Uber Eats.</p>

                                </p>
                                <p><img src="img/icone-seta-roxa.png"> Esse cadastro poderá ser feito a partir de
                                <strong>23 de agosto de 2021.</strong>
                                </p>
                                <p><img src="img/icone-seta-roxa.png"> Após ativação do cadastro, não será necessário realizar um novo. Ou seja, todas as compras serão registradas automaticamente, bem como o número da sorte.
                                </p>
                                <p><img src="img/icone-seta-roxa.png"> Os números da sorte são zerados a cada sorteio.
                                </p>
                                <p><img src="img/icone-seta-roxa.png"> Caso queira consultar seus números da sorte, basta realizar seu <strong>Login.</strong> 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class='container-fluid premios espaco-entre-div' id="rolagem4">
                <div class="container">

                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <h2 style="color: white" class="text-center">Prêmios</h2>
                            <h3 style="color: #C5D7D9" class="text-center">Mais de <span style="font-weight: 800;">R$ 350 mil</span> em prêmios</h3>
                        </div>
                        <div class="row mt-5">
                                <div class="col-sm-3 col-md-4 col-lg-3 text-center">
                                    <img src="img/carro.png" class="maxh" >
                                    <div class="text-center branca">
                                        <h1>4</h1>
                                        <h5>Carros</h5>                                        
                                    </div>
                                </div>

                                <div class="col-sm-3 col-md-4 col-lg-3 text-center">
                                    <img src="img/moto.png" class="maxh">
                                    <div class="text-center branca">
                                        <h1>4</h1>
                                        <h5>Motos</h5>                                        
                                    </div>
                                </div>

                                <div class="col-sm-3 col-md-4 col-lg-3 text-center">
                                    <img src="img/notebook.png" class="maxh">
                                    <div class="text-center branca">
                                        <h1>8</h1>
                                        <h5>Notebooks</h5>                                        
                                    </div>
                                </div>

                                <div class="col-sm-3 col-md-4 col-lg-3 text-center">
                                    <img src="img/smartphone.png" class="maxh">
                                    <div class="text-center branca">
                                        <h1>8</h1>
                                        <h5>Smartphones</h5>                                        
                                    </div>
                                </div>


                        </div>
                        <div class="row mt-2">
                                <div class="col-sm-3 col-md-4 col-lg-3 text-center">
                                    <img src="img/televisao.png" class="maxh">
                                    <div class="text-center branca">
                                        <h1>8</h1>
                                        <h5>TVs</h5>                                        
                                    </div>
                                </div>

                                <div class="col-sm-3 col-md-4 col-lg-3 text-center">
                                    <img src="img/bicicleta.png" class="maxh">
                                    <div class="text-center branca">
                                        <h1>8</h1>
                                        <h5>Bicicletas</h5>                                        
                                    </div>
                                </div>

                                <div class="col-sm-3 col-md-4 col-lg-3 text-center">
                                    <img src="img/air-fryer.png" class="maxh">
                                    <div class="text-center branca">
                                        <h1>8</h1>
                                        <h5>Air Fryers</h5>                                        
                                    </div>
                                </div>

                                <div class="col-sm-3 col-md-4 col-lg-3 text-center">
                                    <img src="img/vale-compras.png" class="maxh">
                                    <div class="text-center branca">
                                        <h1><b> 4</b></h1>
                                        <h5 style="margin-bottom: 0;">Vale-compras</h5>                                        
                                        <h6>no valor de R$ 300.00</h6>                                        
                                    </div>
                                </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12 mt-5">
                                <p style="color: white" class="text-center">
                                    A cada mês serão sorteados 1 carro, 1 moto, 2 notebooks, 2 smartphones, 2 TVs,
                                    2 air fryers<br> e 1 vale-compra, totalizando 52 prêmios até dezembro. <br>
                                    <a href="https://www.drogariasantamarta.com.br" target="_blank" class="submit wdtotal" style="background-color:#E2004A; font-size: 18px">Comprar Agora</a>
                                </p>
                            </div>
                        </div>
                    </div>
            </div>

            <div class="container-fluid ganhadores espaco-entre-div" id="rolagem6">
                <div class="container">
                        <!-- Section APP Screen 1 -->
                        <div id="section-appscreen1">
                            <div class="container appscreen1">
                                <div class="row">
                                    <div class="owl-carousel owl-theme">
                                        <!-- Item -->
                                        <div class="item">
                                            <img class="img-fluid" src="img/ganhador-carro.png" alt="Appcraft">
                                        </div>
                                        <!-- /.Item -->
                                        <!-- Item -->
                                        <div class="item">
                                            <img class="img-fluid" src="img/ganhador-bicicleta.png" alt="Appcraft">
                                        </div>
                                        <!-- /.Item -->
                                        <!-- Item -->
                                        <div class="item">
                                            <img class="img-fluid" src="img/ganhador-notebook.png" alt="Appcraft">
                                        </div>
                                        <!-- /.Item -->
                                        <!-- Item -->
                                        <div class="item">
                                            <img class="img-fluid" src="img/ganhador-televisao.png" alt="Appcraft">
                                        </div>
                                        <!-- /.Item -->
                                        <!-- Item -->
                                        <div class="item">
                                            <img class="img-fluid" src="img/ganhador-iphone.png" alt="Appcraft">
                                        </div>
                                        <!-- /.Item -->
                                        <!-- Item -->
                                        <div class="item">
                                            <img class="img-fluid" src="img/ganhador-airfryer.png" alt="Appcraft">
                                        </div>
                                        <!-- /.Item -->
                                        <!-- Item -->
                                        <div class="item">
                                            <img class="img-fluid" src="img/ganhador-vale-presente.png" alt="Appcraft">
                                        </div>
                                        <!-- /.Item -->
                                    </div>
                                    <!-- Add Pagination -->
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="panel rosa mb-1">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseA" aria-expanded="true" aria-controls="collapseA">
                                    <h3><img src="img/icone-seta-roxa.png"> Sorteio 1 - <b>Setembro</b></h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;29/09/2021 
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseA" class="panel-collapse collapse" role="tabpanel" data-parent="#accordion" aria-labelledby="headingOne">
                                <div class="rosinha">
                                <img src="img/ganhadores.png">
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="panel rosa mb-1">
                            <div class="panel-heading" role="tab" id="headingFour">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseB" aria-expanded="false" aria-controls="collapseB">
                                    <h3><img src="img/icone-seta-roxa.png"> Sorteio 2 - <b>Outubro</b></h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;30/10/2021
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseB" class="panel-collapse collapse" role="tabpanel" data-parent="#accordion" aria-labelledby="headingFour">
                                <div class="rosinha">
                                <img src="img/ganhadores_out.png">
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="panel rosa mb-1">
                            <div class="panel-heading" role="tab" id="headingFive">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseC" aria-expanded="false" aria-controls="collapseC">
                                    <h3><img src="img/icone-seta-roxa.png"> Sorteio 3 - <b>Novembro</b></h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;27/11/2021&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseC" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive"  data-parent="#accordion">
                                <div class="rosinha">
                                <img src="img/sorteio3.png">
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="panel rosa mb-1">
                            <div class="panel-heading" role="tab" id="headingFive">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseD" aria-expanded="false" aria-controls="collapseD">
                                    <h3><img src="img/icone-seta-roxa.png"> Sorteio 4 - <b>Dezembro</b></h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;29/12/2021&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseD" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive"  data-parent="#accordion">
                                <div class="rosinha">
                                <img src="img/sorteio4.png">
                                </div>
                            </div>
                        </div>


                    </div>
                </div><!-- panel-group -->
            </div>

            <div class="container-fluid parceiros espaco-entre-div " id="rolagem5">
                <div class="container">

                    <div class="row text-center">
                        <div class="col-sm-11 col-md-11 col-lg-11">
                            <h2 style="color: #772A8C; margin-bottom:8px !important">Parceiros</h2>
                            <h3 style="margin-bottom: 30px !important;">Para uma grande promoção, grandes parceiros</h3>
                        </div>
                    </div>
                    <div class=" row">
                            <img src="img/Logos/logo-abbott.png" class="p-2">
                            <img src="img/Logos/logo-athaia.png" class="p-2">
                            <img src="img/Logos/logo-bayer.png" class="p-2">
                            <img src="img/Logos/logo-catarinense.png" class="p-2">
                            <img src="img/Logos/logo-cifarma.png" class="p-2">
                            <img src="img/Logos/logo-cimed.png" class="p-2">
                            <img src="img/Logos/logo-colgate.png" class="p-2">
                            <img src="img/Logos/logo-danone.png" class="p-2"> 
                            <img src="img/Logos/logo-ems.png" class="p-2">
                            <img src="img/Logos/logo-freeco.png" class="p-2">
                            <img src="img/Logos/logo-geolab.png" class="p-2">
                            <img src="img/Logos/logo-hypera.png" class="p-2">
                            <img src="img/Logos/logo-johnson.png" class="p-2">
                            <img src="img/Logos/logo-loreal.png" class="p-2">
                            <img src="img/Logos/logo-neo-quimica.png" class="p-2">
                            <img src="img/Logos/logo-nestle.png" class="p-2" >
                            <img src="img/Logos/logo-ontex.png"class="p-2">
                            <img src="img/Logos/logo-peg.png" class="p-2">
                            <img src="img/Logos/logo-pierre-fabre.png" class="p-2">
                            <img src="img/Logos/logo-piracanjuba.png" class="p-2">
                            <img src="img/Logos/logo-sanofi.png" class="p-2">
                            <img src="img/Logos/logo-unilever.png" class="p-2">                            
                            <img src="img/Logos/logo-3m.png" class="p-2">
                            <img src="img/Logos/logo-accumed.png" class="p-2">
                            <img src="img/Logos/logo-anjinhos-baby.png" class="p-2">
                            <img src="img/Logos/logo-avene.png" class="p-2">
                            <img src="img/Logos/logo-belliz.png" class="p-2">
                            <img src="img/Logos/logo-bic.png" class="p-2">
                            <img src="img/Logos/logo-bio-extratus.png" class="p-2">
                            <img src="img/Logos/logo-blowtex.png" class="p-2"> 
                            <img src="img/Logos/logo-bravir.png" class="p-2">
                            <img src="img/Logos/logo-capricho.png" class="p-2">
                            <img src="img/Logos/logo-cless.png" class="p-2">
                            <img src="img/Logos/logo-coty.png" class="p-2">
                            <img src="img/Logos/logo-cremer.png" class="p-2">
                            <img src="img/Logos/logo-crhon-do-brasil.png" class="p-2">
                            <img src="img/Logos/logo-dana.png" class="p-2">
                            <img src="img/Logos/logo-darrow.png" class="p-2" >
                            <img src="img/Logos/logo-demazon.png"class="p-2">
                            <img src="img/Logos/logo-dentalclean.png" class="p-2">
                            <img src="img/Logos/logo-dkt.png" class="p-2">
                            <img src="img/Logos/logo-essity.png" class="p-2">
                            <img src="img/Logos/logo-farmax.png" class="p-2">
                            <img src="img/Logos/logo-feelclean.png" class="p-2">
                            <img src="img/Logos/logo-fini.png" class="p-2">
                            <img src="img/Logos/logo-frutabella.png" class="p-2">
                            <img src="img/Logos/logo-galderma.png" class="p-2">
                            <img src="img/Logos/logo-genoma.png" class="p-2">
                            <img src="img/Logos/logo-hillo.png" class="p-2">
                            <img src="img/Logos/logo-kestal.png" class="p-2">
                            <img src="img/Logos/logo-kibon.png" class="p-2">
                            <img src="img/Logos/logo-kimberly-clark.png" class="p-2"> 
                            <img src="img/Logos/logo-kley.png" class="p-2">
                            <img src="img/Logos/logo-kuka.png" class="p-2">
                            <img src="img/Logos/logo-lillo.png" class="p-2">
                            <img src="img/Logos/logo-lolly.png" class="p-2">
                            <img src="img/Logos/logo-megalabs.png" class="p-2">
                            <img src="img/Logos/logo-mentos.png" class="p-2">
                            <img src="img/Logos/logo-mili.png" class="p-2">
                            <img src="img/Logos/logo-mondelez.png" class="p-2" >
                            <img src="img/Logos/logo-mucambo.png"class="p-2">
                            <img src="img/Logos/logo-nivea.png" class="p-2">
                            <img src="img/Logos/logo-nutriex.png" class="p-2">
                            <img src="img/Logos/logo-omron.png" class="p-2">
                            <img src="img/Logos/logo-pharma.png" class="p-2">
                            <img src="img/Logos/logo-phisalia.png" class="p-2">
                            <img src="img/Logos/logo-pinati.png" class="p-2">
                            <img src="img/Logos/logo-profuse.png" class="p-2">
                            <img src="img/Logos/logo-rayovac.png" class="p-2">
                            <img src="img/Logos/logo-santher.png" class="p-2" >
                            <img src="img/Logos/logo-sc-johnson.png"class="p-2">
                            <img src="img/Logos/logo-scooby-doo.png" class="p-2">
                            <img src="img/Logos/logo-semina.png" class="p-2">
                            <img src="img/Logos/logo-soffie.png" class="p-2">
                            <img src="img/Logos/logo-tec-bel.png" class="p-2">
                            <img src="img/Logos/logo-unicharm.png" class="p-2">
                            <img src="img/Logos/Boiron-removebg-preview.png" class="p-2" >
                            <img src="img/Logos/FDC-2-removebg-preview.png"class="p-2">
                            <img src="img/Logos/FQM-removebg-preview.png" class="p-2">
                            <img src="img/Logos/GSK-removebg-preview.png" class="p-2">
                            <img src="img/Logos/Kolene-removebg-preview.png" class="p-2">
                            <img src="img/Logos/Neutrox-removebg-preview.png" class="p-2">
                            <img src="img/Logos/Tracta-removebg-preview.png" class="p-2">
                            <img src="img/Logos/Zambon-removebg-preview.png" class="p-2">
                    </div>
                </div>
            </div>

            <div class="container-fluid faq espaco-entre-div" id="rolagem6">
                <div class="container text-center">
                            <h2 style="color: #772A8C">FAQ</h2>
                </div>
                <div class="container">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                        <div class="panel panel-default mb-1">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        1. Quais são os canais de compra da promoção?
                                        <i class="fa fa-plus-circle float-right" aria-hidden="true"></i>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" data-parent="#accordion" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    <p>
                                        Hoje contamos com diversos canais, e todos eles farão parte da nossa promoção.<br>
                                        <strong>- LOJAS FÍSICAS:</strong> qualquer uma das unidades de Goiás e do Distrito Federal;<br>
                                        <strong>- E-COMMERCE:</strong> www.drogariasantamarta.com.br;<br>
                                        <strong>- LIG SANTA MARTA(CENTRAL DE VENDAS):</strong> 4002-6600 (capitais e regiões metropolitanas)
                                        e 0300-313-6600 (demais localidades).<br>
                                        <strong>- Aplicativo Drogaria Santa Marta</strong><br>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default mb-1">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        2. Qual é a mecânica da promoção?
                                        <i class="fa fa-plus-circle float-right" aria-hidden="true"></i>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" data-parent="#accordion" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    
                                
                                    <p></p>Ao realizar compras de R$50,00 ou mais, dentro do mesmo
cupom fiscal e informar seu CPF, em produtos de higiene, beleza e perfumaria, que participam da promoção, terá direito a 01 número da sorte. MEDICAMENTOS NÃO poderão ser objetos da promoção.
As compras poderão ser feitas nas lojas físicas da Drogaria Santa Marta; bem como pelo seu site www.drogariasantamarta.com.br; no Ligue (Tele vendas), sendo 4002-6600 para capitais e regiões metropolitanas ou 0300-3136600 para demais localidades; e também pelo Aplicativo Drogaria Santa Marta.</p>

<p>Cada múltiplo de R$50,00 dentro do mesmo cupom fiscal, dará ao mesmo o direito de receber mais 01 (um) número da sorte para participação em cada sorteio, (exemplo: mínimo de R$50,00) equivale a 01 número da sorte em cada sorteio; mínimo de R$100,00 dentro do mesmo cupom fiscal equivale a 02 (dois) números da sorte em cada sorteio; mínimo de R$150,00 dentro do mesmo cupom fiscal equivale a 03 números da sorte em cada sorteio e assim por diante.
Independente do meio pelo qual as compras sejam realizadas, não será permitido acumular ou somar diferentes comprovantes fiscais de compras com a finalidade de alcançar o valor mínimo de R$50,00 para participar desta Promoção. Os valores excedentes a R$50,00 que não forem suficientes para completarem seus múltiplos serão desconsiderados, não sendo mantido como saldo para participações futuras.
Não é permitido o fracionamento do valor da nota fiscal em nenhuma hipótese. Cada cupom fiscal é válido apenas para o valor total que foi emitido na referida nota.</p>
<p>Alguns produtos terão sinalização (etiqueta de preço alaranjada), e, para estes, a pontuação será dobrada. Se no cupom fiscal houver produtos definidos como de pontuação dobrada, o participante terá o direito de receber a quantidade dobrada de números da sorte, (sendo que esses números valerão apenas para o sorteio vigente, e não para todos os sorteios). Caso o consumidor realize a compra de 01 (um) produto das marcas participantes e aderentes da promoção dentro do valor estabelecido, no mesmo cupom fiscal, terá direito a mais 01 número da sorte de participação, ou seja, na compra de 02 produtos das marcas participantes e aderentes da promoção, terá direito a mais 02 números da sorte de participação em cada sorteio, e assim por diante, desde que satisfeita à condição descrita acima.
Neste caso, a cada R$50,00 contendo 01 produto das marcas participantes e patrocinadoras da promoção (etiqueta de preço alaranjada), o participante receberá 02 números da sorte para participar em cada sorteio. Ou seja, caso a compra seja no valor de R$100,00 contendo 02 produtos das marcas participantes e patrocinadoras da promoção, ele receberá 04 números da sorte, sendo 02 da compra no valor de R$ 100,00 e 02 números da sorte a mais, por ter comprado 02 produtos participantes da promoção.</p>

    
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default mb-1">
                            <div class="panel-heading" role="tab" id="headingThree">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        3. Qual é o período da promoção?
                                        <i class="fa fa-plus-circle float-right" aria-hidden="true"></i>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" data-parent="#accordion" aria-labelledby="headingThree">
                                <div class="panel-body">
                                    <p>A promoção tem seu início no dia 23 de agosto de 2021 e se encerra no dia 31 de dezembro de 2021, data da última apuração.
A participação vai até o dia 27 de dezembro de 2021.</p>

                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default mb-1">
                            <div class="panel-heading" role="tab" id="headingFour">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        4. Quais são os prêmios da promoção?
                                        <i class="fa fa-plus-circle float-right" aria-hidden="true"></i>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" data-parent="#accordion" aria-labelledby="headingFour">
                                <div class="panel-body">
                                    <p>A cada mês serão sorteados:</p>
                                   <p> 1 Carro zero km - Fiat Mobi Completo ano 2021-modelo 2022 no valor de R$ 55.350,00 cada</p>
                                    <p>1 Moto zero km - Honda 160c Start ano 2021-modelo 2022 no valor de R$ 13.000,00 cada</p>
                                    <p>2 Notebook - Lenovo S145 no valor de de R$ 3.500,00 cada</p>
                                    <p>2 Smartphones - Apple Iphone SE/2 no valor de R$ 2.500,00 cada</p>
                                    <p>2 Televisores - Panasonic 50'' no valor de R$ 2.000,00 cada</p>
                                    <p>2 Bicicletas - Caloi Aro 26 no valore de R$ 1.000,00 cada</p>
                                    <p>2 Air Fryer - Philco Saúde no valor de R$ 400,00 cada</p>
                                    <p>1 Vale-compras no valor de R$ 300,00 cada</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default mb-1">
                            <div class="panel-heading" role="tab" id="headingFive">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        5. Quais são os produtos participantes?
                                        <i class="fa fa-plus-circle float-right" aria-hidden="true"></i>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive"  data-parent="#accordion">
                                <div class="panel-body">
                                   <p>Participam da promoção, produtos de higiene, beleza e perfumaria.</p>
                                    <p>Não participam da promoção, medicamentos, vacinas, testes rápidos. (Conforme proibição do artigo 10, do Decreto nº 70.951/72);
                                    Fórmulas infantis para lactentes, fórmulas infantis de segmentos para lactentes, fórmulas de nutrientes apresentadas ou indicadas para recém nascido de alto risco, mamadeiras, bico, chupetas e protetores de mamilo. (Conforme proibição prevista no artigo 4º da Lei nº 11.265/06).
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default mb-1">
                            <div class="panel-heading" role="tab" id="headingSix">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        6. Como participar da promoção?
                                        <i class="fa fa-plus-circle float-right" aria-hidden="true"></i>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseSix" class="panel-collapse collapse " role="tabpanel" aria-labelledby="headingSix" data-parent="#accordion">
                                <div class="panel-body">
                                  <p> Para participar da promoção, durante o período de participação, o cliente deverá acessar o site da promoção através do endereço <a href="www.drogariasantamarta.com.br/aniversario">www.drogariasantamarta.com.br/aniversario</a>, utilizar a opção “Cadastro”, informando obrigatoriamente os seguintes dados: Nome, data de nascimento, endereço completo, número do CPF, telefone, e-mail e criar uma senha de acesso de uso pessoal e intransferível.<br>
Depois de devidamente cadastrado, o consumidor que realizar compras de <strong>R$50,00</strong> ou mais, dentro do mesmo cupom fiscal e informar seu CPF, em produtos de higiene, beleza e perfumaria, que participam da promoção, terá direito a 01 número da sorte.</p>

                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default mb-1">
                            <div class="panel-heading" role="tab" id="headingFourteen">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFourteen" aria-expanded="false" aria-controls="collapseFourteen">
                                        7. Preciso informar meu CPF no momento da compra?
                                        <i class="fa fa-plus-circle float-right" aria-hidden="true"></i>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseFourteen" class="panel-collapse collapse " role="tabpanel" aria-labelledby="headingFourteen" data-parent="#accordion">
                                <div class="panel-body">
                                  <p> Para participar da campanha o cliente deve:<br><br>

Cliente Fidelidade <br>
Necessário informar que é fidelidade em algum momento do atendimento, assim o sistema vincula o CPF automaticamente. E se o mesmo estiver dentro das regras da promoção vai gerar número da sorte.
<br><br>
Cliente Conveniado<br>
Obrigatório informar o CPF no caixa e na impressão o CPF constará no cupom fiscal.
<br><br>
O cliente quer participar da promoção mas não quer eu o CPF saia no cupom.<br>
Necessário realizar sua adesão no Clube Fidelidade Santa Marta.
<br><br>
O cliente quer participar da promoção e não quer aderir como Fidelidade.<br>
Necessário informar seu CPF no caixa, e na impressão o CPF do cliente constará no cupom fiscal. 
<br><br>
O cadastro no site da promoção deve ser realizado em que momento?<br>
Para participar da promoção o cliente deverá realizar seu cadastro no site da promoção. Este cadastro poderá ocorrer antes ou depois da primeira compra, não havendo necessidade de fazê-lo novamente. 
<br><br>
OBS: O sistema só vincula o número da sorte ao cliente através do CPF. E para garantir o resgate dos seus números da sorte, o cliente terá que realizar o seu cadastro no site da promoção. Para acompanhar seu histórico de números da sorte basta acessar o site na área do cliente. 
</p>

                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default mb-1">
                            <div class="panel-heading" role="tab" id="headingSeven">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                        8. Quem pode se cadastrar?
                                        <i class="fa fa-plus-circle float-right" aria-hidden="true"></i>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseSeven" class="panel-collapse collapse" data-parent="#accordion" role="tabpanel" aria-labelledby="headingSeven">
                                <div class="panel-body">
                                    <p>• Pessoas físicas.</p>
                                    <p>• Com idade igual ou superior a 18 anos.</p>
                                    <p>• Residentes e domiciliadas no território nacional.</p>
                                    <p>• Que cumpram as condições de participação ora estabelecidas.</p>
                                    <p>• Atenção: não poderão participar funcionários diretos ou indiretos e seus familiares diretos com relação de parentesco em primeiro grau.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default mb-1">
                            <div class="panel-heading" role="tab" id="headingEight">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                        9. Posso acumular valores de compras separadas?
                                        <i class="fa fa-plus-circle float-right" aria-hidden="true"></i>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseEight" class="panel-collapse collapse" role="tabpanel" data-parent="#accordion" aria-labelledby="headingEight">
                                <div class="panel-body">
                                   <p> Não.   Não é permitido o fracionamento do valor da nota fiscal em nenhuma hipótese. Cada cupom fiscal é válido apenas para o valor total que foi emitido na referida nota.</p>

<p>Não serão considerados para fins de participação os valores contidos nos comprovantes referentes ao frete em caso de compras realizadas através do site <a href="www.drogariasantamarta.com.br">www.drogariasantamarta.com.br</a> ou aplicativo Drogaria Santa Marta.</p>

                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default mb-1">
                            <div class="panel-heading" role="tab" id="headingNine">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                        10. Devo apresentar o comprovante fiscal?
                                        <i class="fa fa-plus-circle float-right" aria-hidden="true"></i>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseNine" class="panel-collapse collapse" role="tabpanel" data-parent="#accordion" aria-labelledby="headingNine">
                                <div class="panel-body">
                                  <p>Os números da sorte serão gerados automaticamente após a compra dos produtos participantes da promoção e que se encaixem nas regras estabelecidas. Você pode consultar seu extrato de número da sorte na área do cliente, no site da campanha.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default mb-1">
                            <div class="panel-heading" role="tab" id="headingTen">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                        11. Como recebo o meu número da sorte(número para sorteio)?
                                        <i class="fa fa-plus-circle float-right" aria-hidden="true"></i>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTen" class="panel-collapse collapse" role="tabpanel" data-parent="#accordion" aria-labelledby="headingTen">
                                <div class="panel-body">
                                    <p>Seu número da sorte estará disponível no site da promoção, na área do cliente. Você não receberá, mas, poderá consultar no momento em que desejar (após se cadastrar no site da campanha).</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default mb-1">
                            <div class="panel-heading" role="tab" id="headingEleven">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                                        12. Existe algum limite para participação?
                                        <i class="fa fa-plus-circle float-right" aria-hidden="true"></i>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseEleven" class="panel-collapse collapse" role="tabpanel" data-parent="#accordion" aria-labelledby="headingEleven">
                                <div class="panel-body">
                                    <p>Não.  Quanto mais você comprar, mais chances terá de ganhar!</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default mb-1">
                            <div class="panel-heading" role="tab" id="headingDoze">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseDoze" aria-expanded="false" aria-controls="collapseDoze">
                                        13. Qual é o calendário de sorteios?
                                        <i class="fa fa-plus-circle float-right" aria-hidden="true"></i>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseDoze" class="panel-collapse collapse" role="tabpanel" data-parent="#accordion" aria-labelledby="headingDoze">
                                <div class="panel-body">
                                    <p>DATA PRIMEIRO SORTEIO: 29/09/2021<br>
DATA DA APURAÇÃO: 01/10/2021 17:00</p>

<p>DATA DO SEGUNDO SORTEIO: 30/10/2021<br>
DATA DA APURAÇÃO: 03/11/2021 17:00</p>

<p>DATA DO TERCEIRO SORTEIO: 27/11/2021<br>
DATA DA APURAÇÃO: 29/11/2021 17:00</p>

<p>DATA DO QUARTO SORTEIO: 29/12/2021<br>
DATA DA APURAÇÃO: 03/01/2022 17:00</p>

                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default mb-1">
                            <div class="panel-heading" role="tab" id="headingTreze">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTreze" aria-expanded="false" aria-controls="collapseTreze">
                                        14. Qual é a validade dos números da sorte?
                                        <i class="fa fa-plus-circle float-right" aria-hidden="true"></i>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTreze" class="panel-collapse collapse" role="tabpanel" data-parent="#accordion" aria-labelledby="headingTreze">
                                <div class="panel-body">
                                    <p>Os números da sorte terão validade determinada para cada sorteio, conforme exemplificado abaixo:</p>

<p>Para o primeiro sorteio, serão válidos os números da sorte gerados entre 23/08/2021 08:00 a 26/09/2021 23:59.</p>

<p>Para o segundo sorteio, serão válidos os números da sorte gerados entre 27/09/2021 00:00 a 27/10/2021 23:59.</p>

<p>Para o terceiro sorteio, serão válidos os números da sorte gerados entre 28/10/2021 00:00 a 25/11/2021 23:59.</p>

<p>Para o quarto sorteio, serão válidos os números da sorte gerados entre 26/11/2021 00:00 a 27/12/2021 23:59.</p>

                                </div>
                            </div>
                        </div>


                    </div>
                </div><!-- panel-group -->
            </div>
        

            <div class="container-fluid regulamento espaco-entre-div" id="rolagem7">
            <div class="container text-center">
                            <h2 style="color: #772A8C; margin-bottom:8px !important">Regulamento</h2>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12 align-self-end" style="padding-top: 20px">
                            <iframe frameborder="0" id="iframepdf" src="Regulamento_04102021.pdf#toolbar=0&navpanes=0" style="width: 100%; height: 500px;"></iframe>
                        </div>
                        
                        
                    </div>
                </div>
            </div>
            
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <br />
                        <a href="https://www.drogariasantamarta.com.br" style="background-color:#772A8C; color: white; padding: 7px 20px; text-align: center; text-decoration: none; font-size: 22px; margin: 4px 2px; border: none; border-radius: 10px; margin-top: 20px; margin-bottom:20px">Voltar para a página de compras</a>
                        <br /><br />
                    </div>
                </div>
            </div>
            
            <div class="container-fluid footer">
                <div class="container">

                    <div class="row text-center">
                        <div class="col-sm-12 col-md-12 col-lg-12 align-self-end" style="padding-top: 10px; padding-bottom: 10px;">
                            <p style="color: white; font-size: 12px;"><img src="img/logo-santa-marta.png" style="margin-right: 20px;">© Copyright. Todos os direitos reservados. | CERTIFICADO DE AUTORIZAÇÃO SECAP/ME N. ° 04.014481/2021</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div id="popup" class="popup">
            <img src="img/drogariasantamarta_resultado_sorteio_out_2021.png" style="width:100%" alt="popup">
            <div>
                <button id="close">Sair</button>
            </div>
            </div> -->

            <style>@keyframes example {0%   {bottom: 20px;} 25%  {bottom: 40px;} 50%  {bottom: 20px;} 75%  {bottom: 40px;} 100% {bottom: 20px;}}   
.whatsapp { background-color: #4dc247; height: 50px; width: 50px; position: fixed; left: 30px; bottom: 20px; border-radius: 50%; font-size: 28px; box-shadow: 2px 2px 6px rgba(0,0,0,0.4); line-height: 51px; color: #FFF; text-align: center; z-index: 10000000; animation-name: example; animation-duration: 4s; animation-iteration-count: infinite;}</style>
<a target="_blank" href="https://api.whatsapp.com/send?phone=5511995101025&amp;text=Ola, tenho duvidas..."><div class="whatsapp"><i class="fa fa-whatsapp"></i></div></a>
<?php 
    require "includes/footer.php";

?>