<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../../index.php">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link rel="shortcut icon" href="<?php echo DIRNAME;?>public/img/logo.PNG">
    <title>Recipez</title>
    <style type="text/css">
        b {
            font-size: 35px;
            color: red;
        }
        .error {
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #FAFCFC;
        }
        .error__inner{
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            align-items: center;
            height: 50%;
            font-weight: 600;
        }
        t{
            color: #F55858;
            font-size: 60px;
            text-align: center;
            border-bottom: 2px solid #F2C94C;
            span {
                color: #F2C94C;
            }
        }
        .error__btn {
            width: 270px;
            height: 60px;
            background-color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        a {
            text-decoration: none;
            color: #F55858;
        }
    </style>
</head>
<body>
<div class="error">
    <div class="error__inner">
        <t><span>4</span>04 Error</t>
        <b><span>La page</span> que vous recherchez n'est plus au menu</b>
        <div class="error__btn"><a href="<?php echo DIRNAME;?>"><i>Cliquez ici pour retourner au menu</i><a></div>>
    </div>
</div>
</body>
</html>
