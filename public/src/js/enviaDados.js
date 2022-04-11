    var btnProcurar = document.getElementById('procurar');
    
    btnProcurar.addEventListener('click', () => {
        let nomeCidade = document.getElementById('cidade').value;
        console.log(nomeCidade);

        let json = {
            'cidade': nomeCidade,
        };

        let dados = JSON.stringify(json);

        $.ajax({
            url: 'src/php/recebeDados.php',
            type: 'POST',
            data: {dados: dados},
            success: (result) => {
               let retorno = JSON.parse(result);
               console.log(retorno['max']['value']);
            }, 
            error: (jqXHR, textStatus, errorThrown) => {
                alert( 'Erro ao carregar');
                console.log(errorThrown);
            }
        });
     
    });
    
    /*     
            let xhrSend = new XMLHttpRequest();

             xhrSend.open('POST', 'http://localhost:8080/clima-now', true);

            xhrSend.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

            xhrSend.send();

            xhrSend.onreadystatechange = function() {
                if(xhrSend.readyState == 4) {
                     if(xhrSend.status == 200) {
                            console.log(data);
                     }
                 }
            }
        
     */