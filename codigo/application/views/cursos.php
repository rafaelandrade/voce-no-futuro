<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title></title>

</head>

<body>
    <div class="cursos">
        <?php 
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
        
            $aux = 0;
            $cont = 0;
            $resultado = 0;
            $array = array($a, $b, $c, $d, $e);
            for($aux=0;$aux<5;$aux++){
                if($array[$aux] > $resultado)
                    $resultado = $array[$aux];      
            }
        if($resultado != 0){
            if($resultado == $a){
                echo '<textarea class="form-control" rows="3" readonly="true">Arquitetura, Artes Cênicas, Artes Plásticas, Astronomia, Ciências Biológicas (Biologia), Cinema, Engenharia Mecânica, Esporte, Filosofia, Jornalismo, Matemática, Publicidade, Rádio e TV, Turismo, Veterinária, Educação Física, Meteorologia, Oceanografia, Engenharia Ambiental, Engenharia Florestal e Arqueologia.</textarea>';
            }
            if($resultado == $b){
                echo '<textarea class="form-control" rows="3" readonly="true">Medicina, Direito, Artes Cênicas, Arquitetura, Cinema, Editoração, Engenharia Aeronáutica, Jornalismo, Odontologia, Biomedicina, Farmácia, Artes Plásticas, Artes Visuais, Gastronomia, Relações Internacionais e Relações Públicas.</textarea>';
            }
            if($resultado == $c){
                echo '<textarea class="form-control" rows="3" readonly="true">Medicina, Odontologia, Engenharia Civil, Engenharia da Computação, Letras, Nutrição, Pedagogia, Psicologia, Veterinária, Biomedicina, História, Pedagogia, Ciência da Computação, Engenharia de Controle e Automação, Engenharia Nuclear e Engenharia de Materiais.</textarea>';
            }
            if($resultado == $d){
                echo '<textarea class="form-control" rows="3" readonly="true">Administração, Ciências Contábeis, Análise de Sistemas, Economia, Engenharia da Computação, Farmácia, Física, Comércio Exterior, , Engenharia Mecânica, Engenharia Eletrônica, Engenharia Elétrica, Engenharia de Produção, Engenharia de Agrimensura e Biblioteconomia.</textarea>';
            }
            if($resultado == $e){
                echo '<textarea class="form-control" rows="3" readonly="true">Ciências Sociais, Enfermagem, Fonoaudiologia, Engenharia de Alimentos, Jornalismo, Nutrição, Terapia Ocupacional, Psicologia, Serviço Social, Fisioterapia, Odontologia, Decoração, Moda, Fonoaudiologia e Farmácia.</textarea>';
            }
        }
        ?>
    </div>
</body>

</html>