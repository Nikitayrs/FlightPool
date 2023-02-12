<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FlightPool</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
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

<!-- Info start -->
<section class="info">
    <div class="container">
        <form class="info-form">
            <div class="info__date info-block">
                <label class="info-l">
                    <input class="info__input info_elem1" type="date" placeholder="ДАТА">
                </label>
            </div>
            <div class="info__passenger info-block">
                <label class="info-l">
                    <input class="info__input info_elem2" type="text" placeholder="ПАССАЖИРЫ">
                    <div class="text-error"></div>
                </label>
            </div>
            <button class="btn" onclick="InfographInfo()">Отправить</button>
        </form>
        <div class="infographic">
            <div class="infographic__wrap">
                <div class="infographic__str str_1">
                    <div class="infographic__people-count"></div>
                    <div class="infographic__rand-procent"></div>
                </div>
                <div class="infographic__str str_2">
                    <div class="infographic__people infoLine"></div>
                    <div class="infographic__rand infoLine"></div>
                </div>
                <div class="infographic__str str_3">
                    <div class="infographic__people-text">кол-во людей</div>
                    <div class="infographic__rand-text">шанс вылета %</div>
                </div>
            </div>
        </div>
</section>
<!-- Info end -->

<!-- Company start -->
<section class="company">
    <div class="container">
        <div class="company__wrap">
            <h1 class="company__title">
                FlightPool
            </h1>
            <div class="company__info">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, vero perferendis esse sint id earum delectus veritatis cupiditate officiis iste tenetur a voluptates non eaque reprehenderit itaque? Dolore, minima laborum.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, vero perferendis esse sint id earum delectus veritatis cupiditate officiis iste tenetur a voluptates non eaque reprehenderit itaque? Dolore, minima laborum.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, vero perferendis esse sint id earum delectus veritatis cupiditate officiis iste tenetur a voluptates non eaque reprehenderit itaque? Dolore, minima laborum.</p>
            </div>
        </div>
    </div>
</section>
<!-- Company end -->

<!-- Search start -->
<section class="search">
    <div class="container">
        <div class="search__wrapper">
            <form action="">
                <input class="search-input test-0-fd" placeholder="ОТКУДА" type="text" name="city-start" required>
                <input class="search-input test-0-fa" placeholder="КУДА" type="text" name="city-end" required>
                <input class="search-input test-0-fdt" placeholder="ТУДА" type="date" name="date-start" required>
                <input class="search-input test-0-fat" placeholder="ОБРАТНО" type="date" name="date-end" required>
                <input class="search-input test-0-fnp" placeholder="КОЛИЧЕСТВО ПАССАЖИРОВ" type="select" name="passenger-count" required>
                <input class="btn test-0-fbs" type="submit" name="btn-search" value="Найти">
            </form>
        </div>
    </div>
</section>
<!-- Search end -->

<section class="stocks">

</section>

<section class="closed-stocks">
    <div class="container">
        <div class="closed-stocks__wrapper">
            <form class="closed-stocks" action="">
                <input class="search-input text-0-sie" placeholder="Email" type="email" name="email" required>
                <input class="btn text-0-sbs" type="submit" name="btn-email" value="Оформить подписку">
            </form>
        </div>
    </div>
</section>

<footer>
    <a href="tel:+88001001010" class="test-0-phone">8 (800) 100-10-10</a>
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
</footer>
<script src="script/main.js"></script>
</body>
</html>