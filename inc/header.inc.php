<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">  -->
     
    <link rel="stylesheet" href="<?= BASE_PATH.'assets/fontawesome-free/css/all.min.css' ?>">
    <link rel="stylesheet" href="<?= BASE_PATH.'assets/bootstrap/scss/bootstrap.min.css' ?>">
    <link rel="stylesheet" href="<?= BASE_PATH.'assets/bootstrap/scss/_bootswatch.scss' ?>">
    <link rel="stylesheet" href="<?= BASE_PATH.'assets/css/index.css' ?>">
</head>

<body>

    <header>
        <!--classe css cc-navbar, w-100 pour toute la largeur p-2 padding-2 -->
        <nav class="cc-navbar navbar navbar-expand-lg position-fixed navbar-dark w-100 p-2">
            <div class="container-fluid">

                <a class="navbar-brand" href="<?= BASE_PATH; ?>"><img src="<?= BASE_PATH.'assets/img/starisland.png' ?>" class="logo" alt="logo"> </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarColor01">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="<?= BASE_PATH; ?>">
                                <img src="<?= BASE_PATH.'assets/img/icons8-home.png"'?>" class="img-home" alt="logo">
                                <span class="visually-hidden">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="<?= BASE_PATH . 'front/galerie.php'; ?>">Galerie</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= BASE_PATH . 'front/vip.php'; ?>">DEVENIR VIP</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= BASE_PATH . 'front/equipe.php'; ?>">EQUIPE</a>
                        </li>
                  

                    </ul>
                  
                    <div class="vector  d-flex flex-column  me-5">
                        <div class="tuto  d-flex">
                            <img src="<?= BASE_PATH.'assets/img/Vector (1).png'?>" alt="">
                            <p>Tutoriels</p>
                        </div>
                        <div class=" event d-flex">

                            <img src="<?= BASE_PATH.'assets/img/Vector (2).png'?>" alt="">
                            <a class="nav-link" href="<?= BASE_PATH . 'front/evenement.php'; ?>">
                                <p>Event</p>
                            </a>
                        </div>
                    </div>
                  
                        <a href="<?= BASE_PATH . 'security/login.php'; ?>" class="btn me-2 btn-primary">Connexion Admin</a>
                 

                </div>
            </div>
        </nav>

    </header>
    <main>
        <?php if (isset($_SESSION['messages']) && !empty($_SESSION['messages'])) :           ?>
            <?php foreach ($_SESSION['messages'] as $type => $messages) :
            ?>
                <?php foreach ($messages as $key => $message) :           ?>
                    <div class="alert alert-<?= $type; ?> text-center w-50 mx-auto">
                        <p><?= $message; ?></p>
                    </div>

        <?php unset($_SESSION['messages'][$type][$key]);
                endforeach;
            endforeach;
        endif;           ?>