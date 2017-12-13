<!DOCTYPE html>
<html>

<head lang="pt-br">
    <meta charset="utf-8" />
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="<?php echo base_url('assets/_css/estilo.css') ?>" />
    <link rel="stylesheet" href="<?php echo base_url('assets/_bootstrap/css/bootstrap.min.css') ?>" />
    <script type="text/javascript" src="<?php echo base_url('assets/_javascript/testevocacional.js') ?>"></script>

</head>

<body>
    <header>

        <div class="titulo"><h2>Teste Vocacional <span class="label label-primary"></span></h2></div>
<!--
        <form class="form-inline" method="get">
            <div class="form-group">
                <label class="sr-only" for="exampleInputEmail3">Email </label>
                <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
            </div>
            <div class="form-group">
                <label class="sr-only" for="exampleInputPassword3">Senha</label>
                <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Password">
            </div>
            <div class="checkbox">
                <label>
      <input type="checkbox"> Lembre-se
    </label>
            </div>
            <button type="submit" class="btn btn-default">Entrar</button>
            <a href="cadastrar.html" class="btn btn-default active" role="button">Cadastrar</a>

        </form>
-->


        <nav id="menu">
            <ul class="nav nav-pills">
                <li role="presentation"><a href="<?php echo base_url('principal'); ?>">HOME</a></li>
                <li role="presentation" class="active"><a href="<?php echo base_url(); ?>">TESTE VOCACIONAL</a></li>

            </ul>

        </nav>



    </header>

    <section>

        <!--<form action="<? //php echo base_url("/"); ?>" id="form-vocacional" method="post"> -->
                   
                   <div class="row">
                       <div class="container" style="max-width: 500px !important; margin: 0 auto;">
                           <div class="col-sm-12">
                              <div class="alert alert-danger" role="alert">
                                    <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                                    <?php echo validation_errors(); ?>
                               </div>
                           </div>
                       </div>
                   </div>
                       
                    <?php $attributes = array('name' => 'formVocacional','id' => 'formTesteVocacional');?>
                    <?php echo form_open('PrincipalController/validate', $attributes); ?>
                    
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group" style="font-size: 17px; color: red;">
                                    <?php  echo form_label('Quando penso em uma profissão o mais importante para mim é: ','profissao'); ?>
                                </div>
                                <div class="form-group">
                                    <?php 
                                    echo form_label('Obter um bom retorno financeiro e ser bem sucedido.','profissao'); 
                                    echo form_radio('profissao', 'financeiro', false, 'id="teste"');
                                    ?>
                                </div>
                                <div class="form-group">
                                    <?php 
                                    echo form_label('Trabalhar em algo que esteja em evidência no mercado.','profissao'); 
                                    echo form_radio('profissao', 'mercado', false);
                                    ?>
                                </div>
                                <div class="form-group">
                                    <?php 
                                    echo form_label('Fazer algo que gosto, independente do retorno financeiro.','profissao'); 
                                    echo form_radio('profissao', 'gosto', false);
                                    ?>
                                </div>
                                <div class="form-group">
                                    <?php 
                                    echo form_label('Ser muito bem sucedido financeiramente.','profissao'); 
                                    echo form_radio('profissao', 'sucedido', false);
                                    ?>
                                </div>
                                <div class="form-group">
                                    <?php 
                                    echo form_label('Poder atuar em minha comunidade.','profissao'); 
                                    echo form_radio('profissao', 'comunidade', false);
                                    ?>
                                </div>
                            </div>
                        </div>
                        
                        <!-- referente ao 2 grupo do form-->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group" style="font-size: 17px; color: red;">
                                    <?php  echo form_label('Das viagens abaixo, qual seria considerada por você como a viagem perfeita? ','viagem'); 
                                    ?>
                                </div>
                                <div class="form-group">
                                    <?php 
                                    echo form_label('Conhecer os castelos antigos da Europa e visitar os museus.','viagem'); 
                                    echo form_radio('viagem', 'europa', false);
                                    ?>
                                </div>
                                <div class="form-group">
                                    <?php 
                                    echo form_label('Surf e aventuras radicais na Austrália.','viagem');
                                    echo form_radio('viagem', 'australia', false);
                                    ?>
                                </div>
                                <div class="form-group">
                                    <?php 
                                    echo form_label('Compras e conforto, viajando pelos Estados Unidos.','viagem');
                                    echo form_radio('viagem', 'estadosunidos', false);
                                    ?>
                                </div>
                                <div class="form-group">
                                    <?php 
                                        echo form_label('Conhecer as particularidades da cultura asiática no Japão.','viagem');
                                        echo form_radio('viagem', 'japao', false);
                                    ?>
                                </div>
                                <div class="form-group">
                                    <?php 
                                        echo form_label('Descansar com a família em uma ilha paradisíaca.','viagem'); 
                                        echo form_radio('viagem', 'ilha', false);
                                    ?>
                                </div>
                            </div>
                        </div>
                        
                        <!-- referente ao 3 grupo do form-->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group" style="font-size: 17px; color: red;">
                                    <?php  echo form_label('A pessoa da sua família que você mais admira: ','familia_admira'); 
                                    
                                    ?>
                                </div>
                                <div class="form-group">
                                    <?php 
                                    echo form_label('Estudou bastante e possui uma posição de destaque no mercado de trabalho.','familia_admira'); 
                                    echo form_radio('familia_admira', 'posicao', false);
                                    ?>
                                </div>
                                <div class="form-group">
                                    <?php 
                                    echo form_label('É aventureira e viaja bastante.','familia_admira');
                                    echo form_radio('familia_admira', 'aventureiro', false);
                                    ?>
                                </div>
                                <div class="form-group">
                                    <?php 
                                    echo form_label('Curte a vida e está sempre descobrindo coisas novas.','familia_admira');
                                    echo form_radio('familia_admira', 'descontraido', false);
                                    ?>
                                </div>
                                <div class="form-group">
                                    <?php 
                                        echo form_label('É bastante criativa e está sempre com novidades.','familia_admira');
                                        echo form_radio('familia_admira', 'criativo', false);
                                    ?>
                                </div>
                                <div class="form-group">
                                    <?php 
                                        echo form_label('Se dedica a algum trabalho de ajuda ao próximo.','familia_admira'); 
                                        echo form_radio('familia_admira', 'ajuda_proximo', false);
                                    ?>
                                </div>
                            </div>
                        </div>
                        
                        <!-- referente ao 4 grupo do form-->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group" style="font-size: 17px; color: red;">
                                    <?php  echo form_label('Se eu tivesse que montar uma empresa hoje, esta empresa seria: ','empresa'); ?>
                                </div>
                                <div class="form-group">
                                    <?php 
                                    echo form_label('Uma empresa baseada em algo de meu interesse pessoal como um passatempo ou atividade que pratico.','empresa'); 
                                    echo form_radio('empresa', 'passatempo', false);
                                    ?>
                                </div>
                                <div class="form-group">
                                    <?php 
                                    echo form_label('Uma empresa direcionada as tendências atuais do mercado independentemente da área de atividade.','empresa');
                                    echo form_radio('empresa', 'tendencia_mercado', false);
                                    ?>
                                </div>
                                <div class="form-group">
                                    <?php 
                                    echo form_label('Uma empresa familiar onde eu pudesse trabalhar perto de meus amigos e familiares.','empresa');
                                    echo form_radio('empresa', 'empresa_familiar', false);
                                    ?>
                                </div>
                                <div class="form-group">
                                    <?php 
                                        echo form_label('Uma empresa tradicional, com produtos ou serviços conservadores e de fácil comercialização.','empresa');
                                        echo form_radio('empresa', 'empresa_tradicional', false);
                                    ?>
                                </div>
                                <div class="form-group">
                                    <?php 
                                        echo form_label('Uma empresa criativa onde eu pudesse arriscar e desenvolver novas ideias.','empresa'); 
                                        echo form_radio('empresa', 'criativa', false);
                                    ?>
                                </div>
                            </div>
                        </div>
                        
                        
                        <!-- referente ao 5 grupo do form-->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group" style="font-size: 17px; color: red;">
                                    <?php  echo form_label('Qual país abaixo você desejaria conhecer? ','pais'); ?>
                                </div>
                                <div class="form-group">
                                    <?php 
                                    echo form_label('Egito','pais'); 
                                    echo form_radio('pais', 'egito', false);
                                    ?>
                                </div>
                                <div class="form-group">
                                    <?php 
                                    echo form_label('Israel','pais');
                                    echo form_radio('pais', 'israel', false);
                                    ?>
                                </div>
                                <div class="form-group">
                                    <?php 
                                    echo form_label('Nova Zelandia','pais');
                                    echo form_radio('pais', 'nova_zelandia', false);
                                    ?>
                                </div>
                                <div class="form-group">
                                    <?php 
                                        echo form_label('Tailândia','pais');
                                        echo form_radio('pais', 'tailandia', false);
                                    ?>
                                </div>
                                <div class="form-group">
                                    <?php 
                                        echo form_label('Africa do Sul','pais'); 
                                        echo form_radio('pais', 'africa_sul', false);
                                    ?>
                                </div>
                            </div>
                        </div>
                        
                        
                        <!-- referente ao 6 grupo do form-->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group" style="font-size: 17px; color: red;">
                                    <?php  echo form_label('Qual dos esportes abaixo você mais se identifica? ','esporte'); ?>
                                </div>
                                <div class="form-group">
                                    <?php 
                                    echo form_label('Futebol','esporte'); 
                                    echo form_radio('esporte', 'futebol', false);
                                    ?>
                                </div>
                                <div class="form-group">
                                    <?php 
                                    echo form_label('Lutas','esporte');
                                    echo form_radio('esporte', 'luta', false);
                                    ?>
                                </div>
                                <div class="form-group">
                                    <?php 
                                    echo form_label('Natação','esporte');
                                    echo form_radio('esporte', 'natacao', false);
                                    ?>
                                </div>
                                <div class="form-group">
                                    <?php 
                                        echo form_label('Tenis','esporte');
                                        echo form_radio('esporte', 'tenis', false);
                                    ?>
                                </div>
                                <div class="form-group">
                                    <?php 
                                        echo form_label('Não gosto de nenhum','esporte'); 
                                        echo form_radio('esporte', 'nenhum', false);
                                    ?>
                                </div>
                            </div>
                        </div>
                        
                        
                        <!-- referente ao 7 grupo do form-->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group" style="font-size: 17px; color: red;">
                                    <?php  echo form_label('Em um ambiente onde você não conhece ninguém, você costuma: ','ambiente'); ?>
                                </div>
                                <div class="form-group">
                                    <?php 
                                    echo form_label('Ficar em um lugar isolado.','ambiente'); 
                                    echo form_radio('ambiente', 'isolado', false);
                                    ?>
                                </div>
                                <div class="form-group">
                                    <?php 
                                    echo form_label('Conversar com alguém que possa lhe introduzir a um grupo.','ambiente');
                                    echo form_radio('ambiente', 'conversa', false);
                                    ?>
                                </div>
                                <div class="form-group">
                                    <?php 
                                    echo form_label('Curtir sozinho.','ambiente');
                                    echo form_radio('ambiente', 'sozinho', false);
                                    ?>
                                </div>
                                <div class="form-group">
                                    <?php 
                                        echo form_label('Se socializar e conquistar amigos.','ambiente');
                                        echo form_radio('ambiente', 'socializa', false);
                                    ?>
                                </div>
                                <div class="form-group">
                                    <?php 
                                        echo form_label('Se sentir incomodado por estar sozinho e vai embora.','ambiente'); 
                                        echo form_radio('ambiente', 'incomodado', false);
                                    ?>
                                </div>
                            </div>
                        </div>
                        
                        <!-- referente ao 8 grupo do form-->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group" style="font-size: 17px; color: red;">
                                    <?php  echo form_label('Em quais destes ambientes você se sente mais a vontade?','local'); ?>
                                </div>
                                <div class="form-group">
                                    <?php 
                                    echo form_label('Em um hospital.','local'); 
                                    echo form_radio('local', 'hospital', false);
                                    ?>
                                </div>
                                <div class="form-group">
                                    <?php 
                                    echo form_label('Em centros esportivos.','local');
                                    echo form_radio('local', 'esportivo', false);
                                    ?>
                                </div>
                                <div class="form-group">
                                    <?php 
                                    echo form_label('Em uma floresta.','local');
                                    echo form_radio('local', 'floresta', false);
                                    ?>
                                </div>
                                <div class="form-group">
                                    <?php 
                                        echo form_label('Em shoppings.','local');
                                        echo form_radio('local', 'shopping', false);
                                    ?>
                                </div>
                                <div class="form-group">
                                    <?php 
                                        echo form_label('Em lugares isolados.','local'); 
                                        echo form_radio('local', 'isolado', false);
                                    ?>
                                </div>
                            </div>
                        </div>
                        
                        
                        <!-- referente ao 9 grupo do form-->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group" style="font-size: 17px; color: red;">
                                    <?php  echo form_label('Dentre estas personalidades, a que mais admiro é:','pessoa'); ?>
                                </div>
                                <div class="form-group">
                                    <?php 
                                    echo form_label('Bill Gates','pessoa'); 
                                    echo form_radio('pessoa', 'bill_gates', false);
                                    ?>
                                </div>
                                <div class="form-group">
                                    <?php 
                                    echo form_label('Steve Jobs','pessoa');
                                    echo form_radio('pessoa', 'steve_jobs', false);
                                    ?>
                                </div>
                                <div class="form-group">
                                    <?php 
                                    echo form_label('Ronaldo','pessoa');
                                    echo form_radio('pessoa', 'ronaldo', false);
                                    ?>
                                </div>
                                <div class="form-group">
                                    <?php 
                                        echo form_label('Angelina Jolie','pessoa');
                                        echo form_radio('pessoa', 'angelina_jolie', false);
                                    ?>
                                </div>
                                <div class="form-group">
                                    <?php 
                                        echo form_label('Madre Tereza','pessoa'); 
                                        echo form_radio('pessoa', 'madre_tereza', false);
                                    ?>
                                </div>
                            </div>
                        </div>
                        
                        
                        
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="col-sm-12" style="margin-left: 350px;">
                                    <?php 
                                        echo form_submit('enviar','Confirma', array('class' => 'btn-primary btn-lg', 'id' => 'submit'));
                                    ?>
                                </div>
                            </div>
                        </div>
                        
                        <!-- referente se quer ver ou nao os cursos-->
                        <?php 
                        
                        $data = array(
                            'name'          => 'cursos',
                            'value'         => 'cursos',
                            'checked'       => FALSE,
                            'style'         => 'margin:10px'
                        );
                        
                        echo form_checkbox($data);
                        echo form_label('Caso NAO deseje visualizar os cursos!','cursos');
                        
                        ?>
                        
                    </div>
                    
                    <br/> <br/>
                    <?php echo form_close(); ?>
                    

         
        <?php $this->load->view('cursos');?>
       
       
        <br/>
    </section>
    
    <script src="<?php echo base_url('assets/_jquery/jquery.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/_bootstrap/js/bootstrap.min.js') ?>"></script>
</body>

</html>