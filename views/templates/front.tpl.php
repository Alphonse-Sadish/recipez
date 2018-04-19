<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="<?php echo DIRNAME;?>public/css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="<?php echo DIRNAME;?>public/img/logo.PNG">
    <title>Recipez</title>

</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="header col-12">
            <div class="row align-center">
                <div class="col-2 menu__btn">
                    <span class="burger"></span>
                    <span class="burger"></span>
                    <span class="burger"></span>
                </div>
                <p class="header__title col-8"><?php echo $title ?></p>
                <div class="col-2 logo">
                    <i class="fa fa-user"></i>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="menu" style="min-height: 100%;">
    <div class="menu__title">
        <p><span>R</span>ecipez</p>
    </div>
    <div class="menu__user">
        <img src="public/img/kraboss.jpg" class="menu__user__photo" alt="">
        <p class="menu__user__name">Toto</p>
    </div>
    <div class="menu__category"><p>Recettes</p></div>
    <ul>
        <li class="menu__items"><a href="">Les plus populaires</a></li>
        <li class="menu__items"><a href="">Par catégorie</a></li>
        <li class="menu__items"><a href="">Mes recettes</a></li>
        <li class="menu__items"><a href="">Par type de plat </a></li>
    </ul>
</div>
    <?php include "views/".$this->v;?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 footer">
                <div class="row align-center">
                    <div class="col-offset-9 col-3 col-md-offset-10 col-md-2 col-xl-offset-11 col-xl-11">
                        2017-2018
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../../public/js/toggleMenu.js"></script>
</body>
</html>






