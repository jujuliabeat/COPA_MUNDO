<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Copa do Mundo</title>

    <link rel="stylesheet" href="<?= $BASE_PATH ?>/Public/assets/styles/bootstrap.min.css">
    <link rel="stylesheet" href="<?= $BASE_PATH ?>/Public/assets/styles/style.css">
    <link rel="stylesheet" href="<?= $BASE_PATH ?>/Public/assets/styles/team.css">
    <link rel="stylesheet" href="<?= $BASE_PATH ?>/Public/assets/styles/players.css">
</head>

<body>

    <div class="container">
        <header>
            <a class="navbar-brand" href="<?= $BASE_PATH ?>">
                <img src="<?= $BASE_PATH ?>/Public/images/logos/logo.webp" height="80px" width="auto" style="text-align: center;" alt="">
            </a>

            <ul class="nav">
                <li class="nav-item">
                  <a class="nav-link active" href="<?= $BASE_PATH ?>">Home (aleatórios)</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?= $BASE_PATH ?>/teams">Seleções</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?= $BASE_PATH ?>/teams/25">Brasil</a>
                </li>

              </ul>
        
        </header>

        <h2 class="title">Album de Figurinhas</h2>
        <h5 class="subtitle">Catar 2022</h5>

        <h3 class="subtitle"> Seleção Aleatória</h3>

      
        <div class="card-container">
            <div id="players" class="listar-figurinhas row">

                <div class="col-sm-6 col-md-4 col-lg-3">

                    <div class="profile-card-5"  style="background: <?= $player[0]['cor'] ?>; max-height: 400px;">

                        <div class="row">
                            <div class="col-5">
                                <div class="profile-name"><?= $player[0]['selecao'] ?></div>
                                <div class="profile-abrev"><?= $player[0]['abrev'] ?></div>

                                <div class="profile-group">
                                    <span>grupo </span> <?= $player[0]['grupo'] ?>
                                </div>
                            </div>
                            <div class="col-7">
                                <img src="<?= $BASE_PATH ?>/Public/images/emblem/<?= strtolower($player[0]['selecao'])?>.png" class="img img-responsive">
                            </div>
                        </div>
                    </div>
                </div>

                <?php foreach ($player as $play) : ?>

                <div class="col-sm-6 col-md-4 col-lg-3">

                    <div class="profile-card-6" style="background: <?= $play['cor'] ?>">

                        <?php
                        if(!file_exists(__DIR__ . "/../../Public/images/players/{$play['selecao']}/{$play['nome']}.png")) {

                            $path = "{$BASE_PATH}/Public/images/players/default.png";
                        } else {
                            $path = "{$BASE_PATH}/Public/images/players/{$play['selecao']}/{$play['nome']}.png";
                        }
                        ?>

                        <img src="<?= $BASE_PATH ?>/Public/images/escudos/<?= strtolower($play['selecao'])?>.png" class="escudo">

                        <img src="<?= $path ?>" class="img img-responsive">
                        <div class="profile-name"><?= $play['nome'] ?></div>
                        <div class="profile-position"><?= $play['posicao'] ?></div>
                        <div class="profile-overview">
                            <div class="profile-overview">
                                <div class="row text-center">

                                    <div class="col-xs-4">
                                        <h3 class="mb-0"><?= $play['alt'] ?></h3>
                                        <p>altura</p>
                                    </div>
                                    <div class="col-xs-4">
                                        <h3 class="mb-0"><?= $play['peso'] ?></h3>
                                        <p>peso</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php endforeach; ?>

            </div>
        </div>
      </div>

</body>

</html>