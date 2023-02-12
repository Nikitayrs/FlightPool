<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="css/registration.css">
</head>
<body>
<!-- Header start -->
<header class="header">
    <div class="container">
        <div class="wrapper">
            <div class="test-0-logo">
                <a class="test-0-logo__link" href="#">
                    <img class="test-0-logo__pic" src="assets/images/logo-header.png" alt="">
                </a>
            </div>
            <nav class="nav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link test-0-nav-1" href="#">Акции</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link test-0-nav-2" href="#">Поиск</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link test-0-nav-3" href="#">Регистрации на рейс</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link test-0-nav-4" href="#">Личный кабинет</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
<!-- Header end -->

<form class="form" action="script/register.js">
    <h1>Регистрация</h1>
    <div class="input-form two-elem">
        <input class="test-2-name" type="text" placeholder="Имя" name="first_name">
        <input class="test-2-last" type="text" placeholder="Фамилия" name="last_name">
    </div>
    <div class="input-form">
        <input type="text" class="test-2-doc" placeholder="Номер документа" name="document_number">
    </div>
    <div class="input-form">
        <input class="test-1-fpn" type="text" placeholder="Телефон" name="phone">
    </div>
    <div class="input-form">
        <input class="test-1-fps" type="password" placeholder="Пароль" name="password">
    </div>
    <div class="input-form">
        <input type="text" class="test-2-pass" placeholder="Повторить пароль" name="password2">
    </div>
    <div class="error-password">
        
    </div>
    <div class="input-form">
        <input class="test-1-fbs" type="submit" value="Войти">
    </div>
    <a href="#" class="forget">Забыли пароль?</a>
</form>

</body>
</html>