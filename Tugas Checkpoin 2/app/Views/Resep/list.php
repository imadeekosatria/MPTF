<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="/style.css">
    <link rel="shortcut icon" href="/assets/img/Baby Spoon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/bootstrap.min.css">
    <title><?= $title?></title>
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
                    <li class="nav__item"><a href="/#about" class="nav__link">About</a></li>
                    <li class="nav__item"><a href="/#contact" class="nav__link">Contact</a></li>
                </ul>
            </div>

            <div class="nav__toggle" id="nav-toggle">
                <i class='bx bx-menu'></i>
            </div>
        </nav>
    </header>
    
    <main>
        <section>
            <div id="carouselExampleControls" class="carousel slide tren" data-bs-ride="carousel" data-bs-interval="3000">
                <div class="carousel-inner">
                  <!--Tempat Query Untuk Headline-->
                  <?php 
                      foreach($isFirst->getResult() as $one) {
                        $id =$one->id;
                      }
                      foreach($head->getResultArray() as $headline):
                  ?>
                  <!--End Query-->
                  <div class="carousel-item <?php if($id==$headline['id'])echo "active"?>">
                    <img src="/assets/img/<?php echo $headline['cover']?>" class="d-block w-100" alt="...">
                    <div class="container">
                      <div class="caption">
                        <a href="<?php echo $headline['judul']?>"><h1><?php echo $headline['judul']?></h1></a>
                      </div>
                    </div>
                  </div>
                  <?php endforeach;?>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </section>

        <!--===== ABOUT =====-->
        <section class="section">
            <h2 class="section-list">RESEP MAKANAN <span style="color:red;">NEW</h2>
            <div class="card-container">
              <?php
                foreach ($makanan->getResultArray() as $result):
              ?>
              <div class="card-content">
                <div class="image-list">
                  <img src="/assets/img/<?=$result['cover']?>" alt="">
                </div>
                <div class="rating-list">
                  <p class="text-list"><?=$result['judul']?></p>
                  <div class="rating-flex">
                    <?php 
                      for ($i=0; $i < $result['rating']; $i++) { 
                        echo '<img src="/assets/img/star.svg" alt="">';
                      }
                    ?>
                  </div>
                  <a href="<?php echo $result['judul']?>" class="button-card">Detail</a>
                </div>
              </div> 
              <?php endforeach;?>
            </div>
        </section>
        
        <!--===== ABOUT =====-->
        <section class="section">
            <h2 class="section-list">RESEP MINUMAN <span style="color:red;">NEW</span></h2>
            <div class="card-container">
              <?php
                foreach ($minuman ->getResultArray() as $result):
              ?>
              <div class="card-content">
                <div class="image-list">
                  <img src="/assets/img/<?=$result['cover']?>" alt="">
                </div>
                <div class="rating-list">
                  <p class="text-list"><?=$result['judul']?></p>
                  <div class="rating-flex">
                    <?php 
                      for ($i=0; $i < $result['rating']; $i++) { 
                        echo '<img src="/assets/img/star.svg" alt="">';
                      }
                    ?>
                  </div>
                  <a href="<?=$result['judul']?>" class="button-card">Detail</a>
                </div>
              </div> 
              <?php endforeach;?>
            </div>
        </section>

        <section class="section">
            <h2 class="section-list">KATEGORI</h2>
            <div class="category-container">
                <div class="box-category">
                  <a href="/Resep/makanan">
                    <img src="/assets/img/makan.jpg" alt="">
                    <div class="category">
                        <h5>Makanan</h5>
                    </div>
                  </a>
                </div>
                <div class="box-category">
                  <a href="/Resep/minuman">
                    <img src="/assets/img/minum.jpg" alt="">
                    <div class="category">
                        <h5>Minuman</h5>
                    </div>
                  </a>
                </div>
            </div>
        </section>
    </main>
    



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    <!--===== MAIN JS =====-->
    <script src="/main.js"></script>
</body>
</html>