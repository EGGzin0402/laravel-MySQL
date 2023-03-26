<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> SISTEMA WEB </title>

    @vite([
        'resources/js/app.js',
        'resources/css/app.css',
        'node_modules/bootstrap/dist/css/bootstrap.min.css',
        'node_modules/bootstrap/dist/js/bootstrap.bundle.js'
        ])

    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>

    <div class="card w-75 d-flex justify-content-center" id="MainContent">
    <div class="card-body">

        <nav class="navbar navbar-dark navbar-expand-lg bg-primary">
        <div class="container-fluid" id="NavbarContent">
            <a class="navbar-brand" href="/">SISTEMA WEB</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="#">Cadastrar</a>
                <a class="nav-link" href="#">Consultar</a>
            </div>
            </div>
        </div>
        </nav>

        <div class="container" id="MainForm">

        

            <form>

            <fieldset> <b id="FormTitle"> Cadastrar - Agendamento de Pontenciais Clientes </b> </fieldset>

            Sistema utilizado para agendamento de serviços.

            <br>
            <br>
                    
                    <div class="mb-3">
                        <label for="InputName" class="form-label" id="InputTitle"> Nome: </label>
                        <input type="text" class="form-control" id="InputName" aria-describedby="nameHelp">
                    </div>

                    <div class="mb-3">
                        <label for="InputTelefone" class="form-label" id="InputTitle"> Telefone: </label>
                        <input type="text" class="form-control" id="InputTelefone" aria-describedby="telefoneHelp" placeholder="(XX) XXXXX-XXXX">
                    </div>

                    <label for="InputOrigem" class="form-label" id="InputTitle"> Origem: </label>
                    <select class="form-select">

                        <option value="1">Celular</option>
                        <option value="2">Telefone Pessoal</option>
                        <option value="3">Telefone Comercial</option>
                        <option value="4" selected> (Clique para selecionar) </option>

                    </select>

                    <br>

                    <div class="mb-3">
                        <label for="InputData" class="form-label" id="InputTitle"> Data: </label>
                        <input type="date" class="form-control" id="InputData" aria-describedby="dataHelp">
                    </div>

                        <label for="InputObs" class="form-label" id="InputTitle"> Observação: </label> <br>
                        
                        <textarea class="border" name="Observacao" id="InputObs"></textarea>

                        <br>
                        <br>

                    <button type="submit" class="btn btn-primary">Cadastrar</button>

                </form>

    </div>

    </div>

</body>
</html>