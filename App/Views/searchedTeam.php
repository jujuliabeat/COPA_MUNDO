<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="http://localhost:8080/Public/assets/styles/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost:8080/Public/assets/styles/style.css">
    <link rel="stylesheet" href="http://localhost:8080/Public/assets/styles/team.css">
    <link rel="stylesheet" href="http://localhost:8080/Public/assets/styles/players.css">
</head>

<body>

<div class="container">
    <header>
        <a class="navbar-brand" href="http://localhost:8080/">
            <img src="http://localhost:8080/Public/images/logos/logo.webp" height="80px" width="auto" style="text-align: center;" alt="">
        </a>

        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link active" href="http://localhost:8080/">Home (aleatórios)</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://localhost:8080/teams">Seleções</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://localhost:8080/teams/25">Brasil</a>
            </li>

        </ul>

    </header>

    <h2 class="title">Album de IFigurinhas</h2>
    <h5 class="subtitle">Catar 2022</h5>



    <div class="card-container">
        <div id="players" class="listar-figurinhas row">

                <div class="col-sm-6 col-md-4">

                    <!-- Substitua as interrogações por "<?= $name['id'] ?>" -->
                    <!-- Isso vai gerar um link para cada time especificando-se o ID -->
                    <a href="http://localhost:8080/teams/<?= $name['id'] ?>">

                        <!-- Substitua as interrogações por "cor" -->
                        <div class="profile-card-5"  style="background: <?= $team['cor'] ?>">

                            <div class="row">
                                <div class="col-7">

                                    <!-- Substitua as interrogações por "selecao" -->
                                    <div class="profile-name"><?= $name['selecao'] ?></div>

                                    <!-- Substitua as interrogações por "abrev" -->
                                    <div class="profile-abrev"><?= $name['abrev'] ?></div>

                                    <div class="profile-group">
                                        <!-- Substitua as interrogações por "grupo" -->
                                        <span>grupo </span> <?= $name['grupo'] ?>
                                    </div>
                                </div>
                                <div class="col-5">
                                    <img src="http://localhost:8080/Public/images/emblem/<?= strtolower($name['selecao'])?>.png" class="img img-responsive">
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

        </div>
    </div>

</body>

</html>