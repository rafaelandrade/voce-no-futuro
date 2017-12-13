
function Refresh (){
    window.location.reload();
}

window.onload = initPage;
function teste() {
           

        //seção de declaração de variáveis para o testeVocacional
        var a = 0, b = 0, c = 0, d = 0, e = 0;
        var a2 = 0, b2 = 0, c2 = 0, d2 = 0, e2 = 0;
        var a3 = 0, b3 = 0, c3 = 0, d3 = 0, e3 = 0;
        var a4 = 0, b4 = 0, c4 = 0, d4 = 0, e4 = 0;
        var a5 = 0, b5 = 0, c5 = 0, d5 = 0, e5 = 0;
        var a6 = 0, b6 = 0, c6 = 0, d6 = 0, e6 = 0;
        var a7 = 0, b7 = 0, c7 = 0, d7 = 0, e7 = 0;
        var a8 = 0, b8 = 0, c8 = 0, d8 = 0, e8 = 0;
        var a9 = 0, b9 = 0, c9 = 0, d9 = 0, e9 = 0;
        var atotal = 0, btotal = 0, ctotal = 0, dtotal = 0, etotal = 0;
        var i, cont;
    
    
    if(document.formVocacional.profissao[0].checked == true){
        alert(document.formVocacional.profissao[0].value);
    }
        
    
    /* ----------------- responsavel pelo calculo da profissao ----------------- */
        var radioButtonsPro = document.getElementsByName("profissao");
        var profissao;
        for(var i=0; i < 5; i++){
            if(radioButtonsPro[i].checked == true){
                document.getElementById("resultNomeCurso").value = radioButtonsPro.checked;
            }
        }
        
    
        if(profissao == 'financeiro'){
           a++;
        }
        
        if(profissao == 'mercado'){
           b++;
        }
        
        if(profissao == 'gosto'){
           c++;
        }
    
        if(profissao == 'sucedido'){
           d++;
        }
    
        if(profissao == 'comunidade'){
           e++;
        }
    /* ----------------- --------------------------------------- ----------------- */
        
    
    /* ----------------- responsavel pelo calculo da viagem ----------------- */
        var radioButtonsViagem = document.getElementsByName("viagem");
        var viagem;
        for(var i=0; i < 5; i++){
            if(radioButtonsViagem[i].checked == true){
                document.getElementById("resultNomeCurso").value = radioButtonsViagem.checked;
            }
        }
        
    
        if(viagem == 'europa'){
           a++;
        }
        
        if(viagem == 'australia'){
           b++;
        }
        
        if(viagem == 'estadosunidos'){
           c++;
        }
    
        if(viagem == 'japao'){
           d++;
        }
    
        if(viagem == 'ilha'){
           e++;
        }
    
    if(document.getElementById("teste").checked
       == true){
        a2 = 1;
        document.getElementById("resultNomeCurso").value = a2;
    }
    /* ----------------- --------------------------------------- ----------------- */
        
        
    /*
        do {
            for (i = 0; i <= 9; i++)
                cont++;
                
                //essa parte é da profissao
                document.get
                if (document.getElementById("a1").checked == true)
                    a++;
                if (document.getElementById("b1").checked == true)
                    b++;
                if (document.getElementById("c1").checked == true)
                    c++;
                if (document.getElementById("d1").checked == true)
                    d++;
                if (document.getElementById("e1").checked == true)
                    e++;
            
                //essa parte é da viagem
                if (document.getElementById("a2").checked == true)
                    a2++;
                if (document.getElementById("b2").checked == true)
                    b2++;
                if (document.getElementById("c2").checked == true)
                    c2++;
                if (document.getElementById("d2").checked == true)
                    d2++;
                if (document.getElementById("e2").checked == true)
                    e2++;
            
                //essa parte é da familia_admira
                if (document.getElementById("a3").checked == true)
                    a3++;
                if (document.getElementById("b3").checked == true)
                    b3++;
                if (document.getElementById("c3").checked == true)
                    c3++;
                if (document.getElementById("d3").checked == true)
                    d3++;
                if (document.getElementById("e3").checked == true)
                    e3++;
            
            //essa parte é da empresa
                if (document.getElementById("a4").checked == true)
                    a4++;
                if (document.getElementById("b4").checked == true)
                    b4++;
                if (document.getElementById("c4").checked == true)
                    c4++;
                if (document.getElementById("d4").checked == true)
                    d4++;
                if (document.getElementById("e4").checked == true)
                    e4++;
            
            //essa parte é da pais
                if (document.getElementById("a5").checked == true)
                    a5++;
                if (document.getElementById("b5").checked == true)
                    b5++;
                if (document.getElementById("c5").checked == true)
                    c5++;
                if (document.getElementById("d5").checked == true)
                    d5++;
                if (document.getElementById("e5").checked == true)
                    e5++;
            
                //essa parte é da esporte
                if (document.getElementById("a6").checked == true)
                    a6++;
                if (document.getElementById("b6").checked == true)
                    b6++;
                if (document.getElementById("c6").checked == true)
                    c6++;
                if (document.getElementById("d6").checked == true)
                    d6++;
                if (document.getElementById("e6").checked == true)
                    e6++;
            
                
                //essa parte é da ambiente
                if (document.getElementById("a7").checked == true)
                    a7++;
                if (document.getElementById("b7").checked == true)
                    b7++;
                if (document.getElementById("c7").checked == true)
                    c7++;
                if (document.getElementById("d7").checked == true)
                    d7++;
                if (document.getElementById("e7").checked == true)
                    e7++;
            
                //essa parte é da local
                if (document.getElementById("a8").checked == true)
                    a8++;
                if (document.getElementById("b8").checked == true)
                    b8++;
                if (document.getElementById("c8").checked == true)
                    c8++;
                if (document.getElementById("d8").checked == true)
                    d8++;
                if (document.getElementById("e8").checked == true)
                    e8++;
            
            //essa parte é da pessoa
                if (document.getElementById("a9").checked == true)
                    a9++;
                if (document.getElementById("b9").checked == true)
                    b9++;
                if (document.getElementById("c9").checked == true)
                    c9++;
                if (document.getElementById("d9").checked == true)
                    d9++;
                if (document.getElementById("e9").checked == true)
                    e9++;
            
            atotal = a + a2 + a3 + a4 + a5 + a6 + a7 + a8 + a9;
            btotal = b + b2 + b3 + b4 + b5 + b6 + b7 + b8 + b9;
            ctotal = c + c2 + c3 + c4 + c5 + c6 + c7 + c8 + c9;
            dtotal = d + d2 + d3 + d4 + d5 + d6 + d7 + d8 + d9;
            etotal = e + e2 + e3 + e4 + e5 + e6 + e7 + e8 + e9;
            
            }while (cont == 9);
    


    if ((atotal > btotal) && (atotal > ctotal) && (atotal > dtotal) && (atotal > etotal)) {
        document.getElementById("resultNomeCurso").value = "Matematica, Jornalismo, Astronomia, Ciências Biológicas, Engenharia Ambiental";
    }
    if ((btotal > atotal) && (btotal > ctotal) && (btotal > dtotal) && (btotal > etotal)) {
        document.getElementById("resultNomeCurso").value = "Medicina, Direito, Jornalismo, Relações Publicas";
    }
    if ((ctotal > atotal) && (ctotal > btotal) && (ctotal > dtotal) && (ctotal > etotal)) {
        document.getElementById("resultNomeCurso").value = "Engenharia da Computação, Letras, Psicologia, Historia";
    }
    if ((dtotal > atotal) && (dtotal > ctotal) && (dtotal > btotal) && (dtotal > etotal)) {
        document.getElementById("resultNomeCurso").value = "Administração, Farmácia, Física, Comércio Exterior";     
    }
    if ((etotal > atotal) && (etotal > ctotal) && (etotal > dtotal) && (etotal > btotal)) {
        document.getElementById("resultNomeCurso").value = "Enfermagem, Ciências Sociais, Nutrição";      
    }
    
    document.getElementById("resultadoA").value = atotal;
    document.getElementById("resultadoB").value = btotal;
    document.getElementById("resultadoC").value = ctotal;
    document.getElementById("resultadoD").value = dtotal;
    document.getElementById("resultadoE").value = etotal;
    */
    
    
   
}

