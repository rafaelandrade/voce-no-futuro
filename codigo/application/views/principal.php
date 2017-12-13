
<!DOCTYPE html>
<html>

<head lang="pt-br">
    <meta charset="utf-8" />
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="<?php echo base_url('assets/_css/estilo.css') ?>" />
    <link rel="stylesheet" href="<?php echo base_url('assets/_bootstrap/css/bootstrap.min.css') ?>" />
</head>

<body>
    <header>

        <div class="titulo"><h2>Hypermedia Adaptativo <span class="label label-primary"></span></h2></div>

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
                <li role="presentation" class="active"><a href="<?php echo base_url(); ?>">HOME</a></li>
                <li role="presentation"><a href="<?php echo base_url('Principal/testeVocacional'); ?>">TESTE VOCACIONAL</a></li>
            </ul>
        </nav>
   


    </header>

    <section>
      
       <?php 
        
        //parte responsavel por receber a contagem de cada elemento selecionado na outra pagina
            $a = 0;
            $b = 0;
            $c = 0;
            $d = 0;
            $e = 0;
        
            if (isset($_POST['profissao'])) {
                if($_POST['profissao'] == 'financeiro')
                    $a++;
                if($_POST['profissao'] == 'mercado')
                    $b++;
                if($_POST['profissao'] == 'gosto')
                    $c++;
                if($_POST['profissao'] == 'sucedido')
                    $d++;
                if($_POST['profissao'] == 'comunidade')
                    $e++;   
                //var_dump("escolheu " . $_POST['profissao']);
                //$cont++;
            }
            if(isset($_POST['viagem'])){
               if($_POST['viagem'] == 'europa')
                    $a++;
                if($_POST['viagem'] == 'australia')
                    $b++;
                if($_POST['viagem'] == 'estadosunidos')
                    $c++;
                if($_POST['viagem'] == 'japao')
                    $d++;
                if($_POST['viagem'] == 'ilha')
                    $e++;  
            }
            if(isset($_POST['familia_admira'])){
               if($_POST['familia_admira'] == 'posicao')
                    $a++;
                if($_POST['familia_admira'] == 'aventureiro')
                    $b++;
                if($_POST['familia_admira'] == 'descontraido')
                    $c++;
                if($_POST['familia_admira'] == 'criativo')
                    $d++;
                if($_POST['familia_admira'] == 'ajuda_proximo')
                    $e++;  
            }
            if(isset($_POST['empresa'])){
               if($_POST['empresa'] == 'passatempo')
                    $a++;
                if($_POST['empresa'] == 'tendencia_mercado')
                    $b++;
                if($_POST['empresa'] == 'empresa_familiar')
                    $c++;
                if($_POST['empresa'] == 'empresa_tradicional')
                    $d++;
                if($_POST['empresa'] == 'criativa')
                    $e++;  
            }
            if(isset($_POST['pais'])){
               if($_POST['pais'] == 'egito')
                    $a++;
                if($_POST['pais'] == 'israel')
                    $b++;
                if($_POST['pais'] == 'nova_zelandia')
                    $c++;
                if($_POST['pais'] == 'tailandia')
                    $d++;
                if($_POST['pais'] == 'africa_sul')
                    $e++;  
            }
            if(isset($_POST['esporte'])){
               if($_POST['esporte'] == 'futebol')
                    $a++;
                if($_POST['esporte'] == 'luta')
                    $b++;
                if($_POST['esporte'] == 'natacao')
                    $c++;
                if($_POST['esporte'] == 'tenis')
                    $d++;
                if($_POST['esporte'] == 'nenhum')
                    $e++;  
            }
            if(isset($_POST['ambiente'])){
               if($_POST['ambiente'] == 'isolado')
                    $a++;
                if($_POST['ambiente'] == 'conversa')
                    $b++;
                if($_POST['ambiente'] == 'sozinho')
                    $c++;
                if($_POST['ambiente'] == 'socializa')
                    $d++;
                if($_POST['ambiente'] == 'incomodado')
                    $e++;  
            }
            if(isset($_POST['local'])){
               if($_POST['local'] == 'hospital')
                    $a++;
                if($_POST['local'] == 'esportivo')
                    $b++;
                if($_POST['local'] == 'floresta')
                    $c++;
                if($_POST['local'] == 'shopping')
                    $d++;
                if($_POST['local'] == 'isolado')
                    $e++;  
            }
            if(isset($_POST['pessoa'])){
               if($_POST['pessoa'] == 'bill_gates')
                    $a++;
                if($_POST['pessoa'] == 'steve_jobs')
                    $b++;
                if($_POST['pessoa'] == 'ronaldo')
                    $c++;
                if($_POST['pessoa'] == 'angelina_jolie')
                    $d++;
                if($_POST['pessoa'] == 'madre_tereza')
                    $e++;  
            }
            else {
               // var_dump("nao escolheu nada");
            }
        
        
            $aux = 0;
            $cont = 0;
            $resultado = 0;
            $array = array($a, $b, $c, $d, $e);
            for($aux=0;$aux<5;$aux++){
                if($array[$aux] > $resultado)
                    $resultado = $array[$aux];      
            }
        if($resultado == 0){
                echo '<h3>Como escolher o curso que melhor se encaixa em seu perfil?</h3>';

                echo '<br/>';
                echo '<p>Procure conhecer bem a si mesmo e aos cursos e carreira que pretende seguir. Com certeza você já ouviu muito isso, mas de fato esse encaminhamento é a melhor forma de escolher uma profissão. E buscar referências e informações com amigos, familiares, amigos dos seus pais e outras pessoas que já estão no mercado de trabalho ou na faculdade é a melhor maneira de conseguir esse conhecimento.</p>';

                echo '<p>Além disso, Denise Retamal, diretora-executiva da RHIO’S Recursos Humanos e responsável pelo programa de orientação de carreiras "Jobs of the Future", defende que o estudante, antes de escolher um curso, pense na carreira que deseja para a vida. "Hoje, mais importante do que a profissão é a carreira que você constrói. O mercado pede expertise, que á soma de conhecimentos multidisciplinares com experiências múltiplas – não necessariamente de trabalho, mas de vida", diz ela.</p>';



                echo '<p>Isso exige dois passos. Primeiro, é preciso olhar para dentro de si e analisar suas habilidades, gostos e personalidade. Depois, deve procurar as carreiras que possam combinar com você e buscar a maior quantidade possível de informações sobre elas. Veja palestras, congressos, pesquise sobre o mercado, converse com profissionais da área. Conhecer a universidade e tentar participar de atividades por lá, incluindo até algumas aulas, também pode ajudar você a se decidir.</p>';

                echo '<p>O intuito, nessa etapa, não é decidir por uma profissão, como geólogo ou médico. É descobrir áreas e temas de interesse com os quais você gostaria de trabalhar a longo prazo – por exemplo, exploração mineral ou cirurgia infantil. "Há carreiras, como a nanotecnologia, que podem ser aplicadas em vários segmentos. Não adianta escolher um curso de graduação sem saber o que vai fazer com ele", completa Denise.</p>';

                echo '<table class="table">
                    <thead>
                        <tr>
                            <th>Pergunte-se:</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>– Em que profissões poderei usar as habilidades que já tenho?</td>
                        </tr>
                        <tr>
                            <td>
                                – Eu conheço bem o curso que pretendo fazer? Já dei uma olhada na grade para ver que matérias vou estudar?

                            </td>
                        </tr>
                        <tr>
                            <td>
                                – Em que locais, empresas e cargos poderei aplicar os conhecimentos adquiridos na faculdade?
                            </td>
                        </tr>
                    </tbody>
                </table>';

                echo '<p>
                    Em relação à profissão escolhida, reflita e escreva em um papel as respostas às seguintes questões:
                </p>';

                echo '<table class="table">
                    <thead>
                        <tr>
                            <th>SOBRE A PROFISSÃO QUE VOCÊ PENSA EM FAZER:</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>– Que atividades terei de fazer nessa profissão e vou gostar?
                            </td>
                        </tr>
                        <tr>
                            <td>
                                – Que atividades terei de fazer e não vou gostar?

                            </td>
                        </tr>
                        <tr>
                            <td>
                                – Que atividades não farei, mas gostaria de fazer?
                            </td>
                        </tr>
                    </tbody>
                </table>';

                echo '<p>
                    Depois de fazer isso, é preciso considerar se as vantagens e desvantagens vão compensar. Você vai se sentir realizado se não puder usar algumas de suas habilidades? E se tiver de fazer coisas que não gostaria? Se não consegue ver sangue, por exemplo, e ainda assim quer fazer Medicina, vale se perguntar por que você quer tanto essa carreira e se o saldo será positivo no fim do processo. "O ideal seria a pessoa conseguir conciliar as duas coisas: habilidade e hobby", diz Manoela.
                </p>';

                echo '<p>
                    A primeira etapa desse processo de escolha (o autoconhecimento) é com você. Na segunda, a gente pode ajudar. Conversamos com especialistas de cada uma das grandes áreas (saúde, administração e negócios, meio ambiente e ciências agrarias, ciências sociais e humanas, comunicação e informação, ciências exatas e informática) para descobrir qual o perfil dos alunos de cada curso e que habilidades eles precisam ter para se dar bem na carreira. 
                </p>';
        }
        if($resultado != 0){    
            if($resultado == $a){
                echo '<h3>Como escolher o curso que melhor se encaixa em seu perfil?</h3>';

                echo '<br/>';
                echo '<p>Procure conhecer bem a si mesmo e aos cursos e carreira que pretende seguir. Com certeza você já ouviu muito isso, mas de fato esse encaminhamento é a melhor forma de escolher uma profissão. E buscar referências e informações com amigos, familiares, amigos dos seus pais e outras pessoas que já estão no mercado de trabalho ou na faculdade é a melhor maneira de conseguir esse conhecimento.</p>';

                echo '<p>Além disso, Denise Retamal, diretora-executiva da RHIO’S Recursos Humanos e responsável pelo programa de orientação de carreiras "Jobs of the Future", defende que o estudante, antes de escolher um curso, pense na carreira que deseja para a vida. "Hoje, mais importante do que a profissão é a carreira que você constrói. O mercado pede expertise, que á <a href="www.google.com" id="linkA">soma</a> de conhecimentos multidisciplinares com experiências múltiplas – não necessariamente de trabalho, mas de vida", diz ela.</p>';



                echo '<p>Isso exige dois passos. Primeiro, é preciso olhar para dentro de si e analisar suas habilidades, gostos e personalidade. Depois, deve procurar as carreiras que possam combinar com você e buscar a maior quantidade possível de informações sobre elas. Veja palestras, congressos, pesquise sobre o mercado, converse com profissionais da área. Conhecer a universidade e tentar participar de atividades por lá, incluindo até algumas aulas, também pode ajudar você a se decidir.</p>';

                echo '<p>O intuito, nessa etapa, não é decidir por uma profissão, como geólogo ou médico. É descobrir áreas e temas de interesse com os quais você gostaria de trabalhar a longo prazo – por exemplo, exploração mineral ou cirurgia infantil. "Há carreiras, como a nanotecnologia, que podem ser aplicadas em vários segmentos. Não adianta escolher um curso de graduação sem saber o que vai fazer com ele", completa Denise.</p>';

                echo '<table class="table">
                    <thead>
                        <tr>
                            <th>Pergunte-se:</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>– Em que profissões poderei usar as habilidades que já tenho?</td>
                        </tr>
                        <tr>
                            <td>
                                – Eu conheço bem o curso que pretendo fazer? Já dei uma olhada na grade para ver que matérias vou estudar?

                            </td>
                        </tr>
                        <tr>
                            <td>
                                – Em que locais, empresas e cargos poderei aplicar os conhecimentos adquiridos na faculdade?
                            </td>
                        </tr>
                    </tbody>
                </table>';

                echo '<p>
                    Em relação à profissão escolhida, reflita e escreva em um papel as respostas às seguintes questões:
                </p>';

                echo '<table class="table">
                    <thead>
                        <tr>
                            <th>SOBRE A PROFISSÃO QUE VOCÊ PENSA EM FAZER:</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>– Que atividades terei de fazer nessa profissão e vou gostar?
                            </td>
                        </tr>
                        <tr>
                            <td>
                                – Que atividades terei de fazer e não vou gostar?

                            </td>
                        </tr>
                        <tr>
                            <td>
                                – Que atividades não farei, mas gostaria de fazer?
                            </td>
                        </tr>
                    </tbody>
                </table>';

                echo '<p>
                    Depois de fazer isso, é preciso considerar se as vantagens e desvantagens vão compensar. Você vai se sentir realizado se não puder usar algumas de suas habilidades? E se tiver de fazer coisas que não gostaria? Se não consegue ver sangue, por exemplo, e ainda assim quer fazer Medicina, vale se perguntar por que você quer tanto essa carreira e se o saldo será positivo no fim do processo. "O ideal seria a pessoa conseguir conciliar as duas coisas: habilidade e hobby", diz Manoela.
                </p>';

                echo '<p>
                    A primeira etapa desse processo de escolha (o autoconhecimento) é com você. Na segunda, a gente pode ajudar. Conversamos com especialistas de cada uma das grandes áreas (saúde, administração e negócios, meio ambiente e ciências agrarias, ciências sociais e humanas, comunicação e informação, ciências exatas e informática) para descobrir qual o perfil dos alunos de cada curso e que habilidades eles precisam ter para se dar bem na carreira. 
                </p>';
            }
                
            if($resultado == $b){
                echo '<h3>Como escolher o curso que melhor se encaixa em seu perfil?</h3>';
            
        
                echo '<br/>';
                echo '<p>Procure conhecer bem a si mesmo e aos cursos e carreira que pretende seguir. Com certeza você já ouviu muito isso, mas de fato esse encaminhamento é a melhor forma de escolher uma profissão. E buscar referências e informações com amigos, familiares, amigos dos seus pais e outras pessoas que já estão no mercado de trabalho ou na faculdade é a melhor maneira de conseguir esse conhecimento.</p>';

                echo '<p>Além disso, Denise Retamal, diretora-executiva da RHIO’S Recursos Humanos e responsável pelo programa de orientação de carreiras "Jobs of the Future", defende que o estudante, antes de escolher um curso, pense na carreira que deseja para a vida. "Hoje, mais importante do que a profissão é a carreira que você constrói. O mercado pede expertise, que á soma de conhecimentos multidisciplinares com experiências múltiplas – não necessariamente de trabalho, mas de vida", diz ela.</p>';



                echo '<p>Isso exige dois passos. Primeiro, é preciso olhar para dentro de si e analisar suas habilidades, gostos e personalidade. Depois, deve procurar as carreiras que possam combinar com você e buscar a maior quantidade possível de informações sobre elas. Veja palestras, congressos, pesquise sobre o mercado, converse com profissionais da área. Conhecer a universidade e tentar participar de atividades por lá, incluindo até algumas aulas, também pode ajudar você a se decidir.</p>';

                echo '<p>O intuito, nessa etapa, não é decidir por uma profissão, como geólogo ou <a href="" id="linkB">médico</a>. É descobrir áreas e temas de interesse com os quais você gostaria de trabalhar a longo prazo – por exemplo, exploração mineral ou <a href="" id="linkB">cirurgia infantil</a>. "Há carreiras, como a nanotecnologia, que podem ser aplicadas em vários segmentos. Não adianta escolher um curso de graduação sem saber o que vai fazer com ele", completa Denise.</p>';

                echo '<table class="table">
                    <thead>
                        <tr>
                            <th>Pergunte-se:</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>– Em que profissões poderei usar as habilidades que já tenho?</td>
                        </tr>
                        <tr>
                            <td>
                                – Eu conheço bem o curso que pretendo fazer? Já dei uma olhada na grade para ver que matérias vou estudar?

                            </td>
                        </tr>
                        <tr>
                            <td>
                                – Em que locais, empresas e cargos poderei aplicar os conhecimentos adquiridos na faculdade?
                            </td>
                        </tr>
                    </tbody>
                </table>';

                echo '<p>
                    Em relação à profissão escolhida, reflita e escreva em um papel as respostas às seguintes questões:
                </p>';

                echo '<table class="table">
                    <thead>
                        <tr>
                            <th>SOBRE A PROFISSÃO QUE VOCÊ PENSA EM FAZER:</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>– Que atividades terei de fazer nessa profissão e vou gostar?
                            </td>
                        </tr>
                        <tr>
                            <td>
                                – Que atividades terei de fazer e não vou gostar?

                            </td>
                        </tr>
                        <tr>
                            <td>
                                – Que atividades não farei, mas gostaria de fazer?
                            </td>
                        </tr>
                    </tbody>
                </table>';

                echo '<p>
                    Depois de fazer isso, é preciso considerar se as vantagens e desvantagens vão compensar. Você vai se sentir realizado se não puder usar algumas de suas habilidades? E se tiver de fazer coisas que não gostaria? Se não consegue ver sangue, por exemplo, e ainda assim quer fazer Medicina, vale se perguntar por que você quer tanto essa carreira e se o saldo será positivo no fim do processo. "O ideal seria a pessoa conseguir conciliar as duas coisas: habilidade e hobby", diz Manoela.
                </p>';

                echo '<p>
                    A primeira etapa desse processo de escolha (o autoconhecimento) é com você. Na segunda, a gente pode ajudar. Conversamos com especialistas de cada uma das grandes áreas (saúde, administração e negócios, meio ambiente e ciências agrarias, ciências sociais e humanas, comunicação e informação, ciências exatas e informática) para descobrir qual o perfil dos alunos de cada curso e que habilidades eles precisam ter para se dar bem na carreira. 
                </p>';
            }
                
            if($resultado == $c){
                echo '<h3>Como escolher o curso que melhor se encaixa em seu perfil?</h3>';
            
        
                echo '<br/>';
                echo '<p>Procure conhecer bem a si mesmo e aos cursos e carreira que pretende seguir. Com certeza você já ouviu muito isso, mas de fato esse encaminhamento é a melhor forma de escolher uma profissão. E buscar referências e informações com amigos, familiares, amigos dos seus pais e outras pessoas que já estão no mercado de trabalho ou na faculdade é a melhor maneira de conseguir esse conhecimento.</p>';

                echo '<p>Além disso, Denise Retamal, diretora-executiva da RHIO’S Recursos Humanos e responsável pelo programa de orientação de carreiras "Jobs of the Future", defende que o estudante, antes de escolher um curso, pense na carreira que deseja para a vida. "Hoje, mais importante do que a profissão é a carreira que você constrói. O mercado pede expertise, que á soma de conhecimentos multidisciplinares com experiências múltiplas – não necessariamente de trabalho, mas de vida", diz ela.</p>';



                echo '<p>Isso exige dois passos. Primeiro, é preciso olhar para dentro de si e analisar suas habilidades, gostos e <a href="" id="linkC">personalidade</a>. Depois, deve procurar as carreiras que possam combinar com você e buscar a maior quantidade possível de informações sobre elas. Veja palestras, congressos, pesquise sobre o mercado, converse com profissionais da área. Conhecer a universidade e tentar participar de atividades por lá, incluindo até algumas aulas, também pode ajudar você a se decidir.</p>';

                echo '<p>O intuito, nessa etapa, não é decidir por uma profissão, como geólogo ou médico. É descobrir áreas e temas de interesse com os quais você gostaria de trabalhar a longo prazo – por exemplo, exploração mineral ou cirurgia infantil. "Há carreiras, como a nanotecnologia, que podem ser aplicadas em vários segmentos. Não adianta escolher um curso de graduação sem saber o que vai fazer com ele", completa Denise.</p>';

                echo '<table class="table">
                    <thead>
                        <tr>
                            <th>Pergunte-se:</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>– Em que profissões poderei usar as habilidades que já tenho?</td>
                        </tr>
                        <tr>
                            <td>
                                – Eu conheço bem o curso que pretendo fazer? Já dei uma olhada na grade para ver que matérias vou estudar?

                            </td>
                        </tr>
                        <tr>
                            <td>
                                – Em que locais, empresas e cargos poderei aplicar os conhecimentos adquiridos na faculdade?
                            </td>
                        </tr>
                    </tbody>
                </table>';

                echo '<p>
                    Em relação à profissão escolhida, reflita e escreva em um papel as respostas às seguintes questões:
                </p>';

                echo '<table class="table">
                    <thead>
                        <tr>
                            <th>SOBRE A PROFISSÃO QUE VOCÊ PENSA EM FAZER:</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>– Que atividades terei de fazer nessa profissão e vou gostar?
                            </td>
                        </tr>
                        <tr>
                            <td>
                                – Que atividades terei de fazer e não vou gostar?

                            </td>
                        </tr>
                        <tr>
                            <td>
                                – Que atividades não farei, mas gostaria de fazer?
                            </td>
                        </tr>
                    </tbody>
                </table>';

                echo '<p>
                    Depois de fazer isso, é preciso considerar se as vantagens e desvantagens vão compensar. Você vai se sentir realizado se não puder usar algumas de suas habilidades? E se tiver de fazer coisas que não gostaria? Se não consegue ver sangue, por exemplo, e ainda assim quer fazer Medicina, vale se perguntar por que você quer tanto essa carreira e se o saldo será positivo no fim do processo. "O ideal seria a pessoa conseguir conciliar as duas coisas: habilidade e hobby", diz Manoela.
                </p>';

                echo '<p>
                    A primeira etapa desse processo de escolha (o autoconhecimento) é com você. Na segunda, a gente pode ajudar. Conversamos com especialistas de cada uma das grandes áreas (saúde, administração e negócios, meio ambiente e ciências agrarias, ciências sociais e humanas, comunicação e informação, ciências exatas e <a href="" target="_blank" id="linkC">informática</a>) para descobrir qual o perfil dos alunos de cada curso e que habilidades eles precisam ter para se dar bem na carreira. 
                </p>';
            }
                
            if($resultado == $d){
                echo '<h3>Como escolher o curso que melhor se encaixa em seu perfil?</h3>';
            
        
                echo '<br/>';
                echo '<p>Procure conhecer bem a si mesmo e aos cursos e carreira que pretende seguir. Com certeza você já ouviu muito isso, mas de fato esse encaminhamento é a melhor forma de escolher uma profissão. E buscar referências e informações com amigos, familiares, amigos dos seus pais e outras pessoas que já estão no mercado de trabalho ou na faculdade é a melhor maneira de conseguir esse conhecimento.</p>';

                echo '<p>Além disso, Denise Retamal, diretora-executiva da RHIO’S <a href="www.google.com" id="linkD">Recursos Humanos</a> e responsável pelo programa de orientação de carreiras "Jobs of the Future", defende que o estudante, antes de escolher um curso, pense na carreira que deseja para a vida. "Hoje, mais importante do que a profissão é a carreira que você constrói. O mercado pede expertise, que á soma de conhecimentos multidisciplinares com experiências múltiplas – não necessariamente de trabalho, mas de vida", diz ela.</p>';

                echo '<p>Isso exige dois passos. Primeiro, é preciso olhar para dentro de si e analisar suas habilidades, gostos e personalidade. Depois, deve procurar as carreiras que possam combinar com você e buscar a maior quantidade possível de informações sobre elas. Veja palestras, congressos, pesquise sobre o mercado, converse com profissionais da área. Conhecer a universidade e tentar participar de atividades por lá, incluindo até algumas aulas, também pode ajudar você a se decidir.</p>';

                echo '<p>O intuito, nessa etapa, não é decidir por uma profissão, como geólogo ou médico. É descobrir áreas e temas de interesse com os quais você gostaria de trabalhar a longo prazo – por exemplo, exploração mineral ou cirurgia infantil. "Há carreiras, como a nanotecnologia, que podem ser aplicadas em vários segmentos. Não adianta escolher um curso de graduação sem saber o que vai fazer com ele", completa Denise.</p>';

                echo '<table class="table">
                    <thead>
                        <tr>
                            <th>Pergunte-se:</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>– Em que profissões poderei usar as habilidades que já tenho?</td>
                        </tr>
                        <tr>
                            <td>
                                – Eu conheço bem o curso que pretendo fazer? Já dei uma olhada na grade para ver que matérias vou estudar?

                            </td>
                        </tr>
                        <tr>
                            <td>
                                – Em que locais, empresas e cargos poderei aplicar os conhecimentos adquiridos na faculdade?
                            </td>
                        </tr>
                    </tbody>
                </table>';

                echo '<p>
                    Em relação à profissão escolhida, reflita e escreva em um papel as respostas às seguintes questões:
                </p>';

                echo '<table class="table">
                    <thead>
                        <tr>
                            <th>SOBRE A PROFISSÃO QUE VOCÊ PENSA EM FAZER:</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>– Que atividades terei de fazer nessa profissão e vou gostar?
                            </td>
                        </tr>
                        <tr>
                            <td>
                                – Que atividades terei de fazer e não vou gostar?

                            </td>
                        </tr>
                        <tr>
                            <td>
                                – Que atividades não farei, mas gostaria de fazer?
                            </td>
                        </tr>
                    </tbody>
                </table>';

                echo '<p>
                    Depois de fazer isso, é preciso considerar se as vantagens e desvantagens vão compensar. Você vai se sentir realizado se não puder usar algumas de suas habilidades? E se tiver de fazer coisas que não gostaria? Se não consegue ver sangue, por exemplo, e ainda assim quer fazer Medicina, vale se perguntar por que você quer tanto essa carreira e se o saldo será positivo no fim do processo. "O ideal seria a pessoa conseguir conciliar as duas coisas: habilidade e hobby", diz Manoela.
                </p>';

                echo '<p>
                    A primeira etapa desse processo de escolha (o autoconhecimento) é com você. Na segunda, a gente pode ajudar. Conversamos com especialistas de cada uma das grandes áreas (saúde, administração e negócios, meio ambiente e ciências agrarias, ciências sociais e humanas, comunicação e informação, ciências exatas e informática) para descobrir qual o perfil dos alunos de cada curso e que habilidades eles precisam ter para se dar bem na carreira. 
                </p>';
            }
                
            if($resultado == $e){
                echo '<h3>Como escolher o curso que melhor se encaixa em seu perfil?</h3>';
            
        
                echo '<br/>';
                echo '<p>Procure conhecer bem a si mesmo e aos cursos e carreira que pretende seguir. Com certeza você já ouviu muito isso, mas de fato esse encaminhamento é a melhor forma de escolher uma profissão. E buscar referências e informações com amigos, familiares, amigos dos seus pais e outras pessoas que já estão no mercado de trabalho ou na faculdade é a melhor maneira de conseguir esse conhecimento.</p>';

                echo '<p>Além disso, Denise Retamal, diretora-executiva da RHIO’S Recursos Humanos e responsável pelo programa de orientação de carreiras "Jobs of the Future", defende que o estudante, antes de escolher um curso, pense na carreira que deseja para a vida. "Hoje, mais importante do que a profissão é a carreira que você constrói. O mercado pede expertise, que á soma de conhecimentos multidisciplinares com experiências múltiplas – não necessariamente de trabalho, mas de vida", diz ela.</p>';



                echo '<p>Isso exige dois passos. Primeiro, é preciso olhar para dentro de si e analisar suas habilidades, gostos e personalidade. Depois, deve procurar as carreiras que possam combinar com você e buscar a maior quantidade possível de informações sobre elas. Veja palestras, congressos, pesquise sobre o mercado, converse com profissionais da área. Conhecer a universidade e tentar participar de atividades por lá, incluindo até algumas aulas, também pode ajudar você a se decidir.</p>';

                echo '<p>O intuito, nessa etapa, não é decidir por uma profissão, como geólogo ou médico. É descobrir áreas e temas de interesse com os quais você gostaria de trabalhar a longo prazo – por exemplo, exploração mineral ou cirurgia infantil. "Há carreiras, como a nanotecnologia, que podem ser aplicadas em vários segmentos. Não adianta escolher um curso de graduação sem saber o que vai fazer com ele", completa Denise.</p>';

                echo '<table class="table">
                    <thead>
                        <tr>
                            <th>Pergunte-se:</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>– Em que profissões poderei usar as habilidades que já tenho?</td>
                        </tr>
                        <tr>
                            <td>
                                – Eu conheço bem o curso que pretendo fazer? Já dei uma olhada na grade para ver que matérias vou estudar?

                            </td>
                        </tr>
                        <tr>
                            <td>
                                – Em que locais, empresas e cargos poderei aplicar os conhecimentos adquiridos na faculdade?
                            </td>
                        </tr>
                    </tbody>
                </table>';

                echo '<p>
                    Em relação à profissão escolhida, reflita e escreva em um papel as respostas às seguintes questões:
                </p>';

                echo '<table class="table">
                    <thead>
                        <tr>
                            <th>SOBRE A PROFISSÃO QUE VOCÊ PENSA EM FAZER:</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>– Que atividades terei de fazer nessa profissão e vou gostar?
                            </td>
                        </tr>
                        <tr>
                            <td>
                                – Que atividades terei de fazer e não vou gostar?

                            </td>
                        </tr>
                        <tr>
                            <td>
                                – Que atividades não farei, mas gostaria de fazer?
                            </td>
                        </tr>
                    </tbody>
                </table>';

                echo '<p>
                    Depois de fazer isso, é preciso considerar se as vantagens e desvantagens vão compensar. Você vai se sentir realizado se não puder usar algumas de suas habilidades? E se tiver de fazer coisas que não gostaria? Se não consegue ver <a href="" id="linkE">sangue</a>, por exemplo, e ainda assim quer fazer Medicina, vale se perguntar por que você quer tanto essa carreira e se o saldo será positivo no fim do processo. "O ideal seria a pessoa conseguir conciliar as duas coisas: habilidade e hobby", diz Manoela.
                </p>';

                echo '<p>
                    A primeira etapa desse processo de escolha (o autoconhecimento) é com você. Na segunda, a gente pode ajudar. Conversamos com especialistas de cada uma das grandes áreas (saúde, administração e negócios, meio ambiente e ciências agrarias, <a href="" target="_blank" id="linkE">ciências sociais</a> e humanas, comunicação e informação, ciências exatas e informática) para descobrir qual o perfil dos alunos de cada curso e que habilidades eles precisam ter para se dar bem na carreira. 
                </p>';
            }
        }
        
        
    ?>
    </section>

    <footer>

    </footer>
    <script src="<?php echo base_url('assets/_jquery/jquery.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/_javascript/testevocacional.js') ?>"></script>
</body>

</html>