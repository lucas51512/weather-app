<?php?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="src\js\jquery-3.5.1.min.js"></script>
    <title>Clima Now</title>
</head>

<body class="background-color">
    <div class="container vw-100 d-flex justify-content-start">
        <h1 class="escolha-cidade">Escolha sua Cidade</h1>
    </div>

    <div class="container">
        <div class="row d-flex justify-content-start align-middle">
            <div class="col-12 col-sm-12 col-md-8 col-lg-6 col-xl-9">
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" id="cidade" placeholder="Sua cidade aqui...">
                    </div>
                </form>
            </div>

        </div>

        <div class="row d-flex justify-content-start align-middle">
            <div class="col-4 col-sm-4 col-md-2 col-lg-5">
                <button class="btn btn-warning text-white" id="procurar">Procurar</button>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title" id="nomeCidadeCard">Cidade</h5>
                <p class="card-text">Temperatura: <stronger id="temperatura"></stronger></p>
            </div>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
        </script>
        <script src="src/js/enviaDados.js"></script>
        <script src="src/js/main.js"></script>
</body>

</html>