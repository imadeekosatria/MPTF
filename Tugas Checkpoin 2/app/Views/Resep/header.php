<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="/style.css">
    <link rel="shortcut icon" href="/assets/img/Baby Spoon.ico" type="image/x-icon">
    <title><?=$title?></title>
</head>
<body>
    <!--===== HEADER =====-->
    <header class="l-header">
        <nav class="nav-bar bd-grid">
            <div class="brand-container">
                <img src="/assets/img/baby-spoon.svg" alt="logo">
                <a href="/" class="nav__logo">Masaku</a>
            </div>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item"><a href="/#home" class="nav__link">Home</a></li>
                    <li class="nav__item"><a href="/Resep/list" class="nav__link">List Resep</a></li>
                    <li class="nav__item"><a href="/#about" class="nav__link">About</a></li>
                    <li class="nav__item"><a href="/#contact" class="nav__link">Contact</a></li>
                </ul>
            </div>

            <div class="nav__toggle" id="nav-toggle">
                <i class='bx bx-menu'></i>
            </div>
        </nav>
    </header>

    <?= $this->renderSection('content');?>
    <!--===== SCROLL REVEAL =====-->
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="/main.js"></script>
</body>
</html>