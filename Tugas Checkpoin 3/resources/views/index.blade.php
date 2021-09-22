<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="assets/image/school.ico" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <title>Document</title>
</head>
<body>
    <header>
      <!--Navbar-->
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
              <img class="image-brand" src="assets/image/school.svg" alt=""> 
              SEKOLAH
            </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  List
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="list guru.html">Daftar Guru</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="list guru.html">Daftar Siswa</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!--End Navbar-->
    </header>
    <main>
      <section>
        <!--Main-->
        <!--Carousel-->
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner carousel-container">
            <div class="carousel-item active">
              <img src="assets/image/gambar gedung.jpg" class="" alt="...">
            </div>
            <div class="carousel-item">
              <img src="assets/image/gambar 1.jpg" class="" alt="...">
            </div>
            <div class="carousel-item">
              <img src="assets/image/gambar 2.jpg" class="" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        
        <!--End Carousel-->
        <div class="container">
          <div class="row">
            <div class="col-6">
              <div class="berita-container">
                <div class="berita">
                  <div class="judul">
                      <h5>Sekolah Terbaik</h5>
                  </div>
                  <div class="isi">
                    <img src="assets/image/gambar 1.jpg" alt="">
                    <div>
                      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis sed, optio labore ad recusandae illo corporis et harum voluptate accusantium officiis fugit. Repudiandae recusandae qui voluptatibus alias incidunt consequuntur quaerat.</p>
                      <div class="comment-section">
                        <div class="fill">
                          <p>24</p>
                          <div>
                            <img src="assets/image/like.svg" alt="">
                          </div>
                        </div>
                        <div class="fill">
                          <div>
                            <p>24</p>
                          </div>
                          <img src="assets/image/eye.svg" alt="">
                        </div>
                        <div class="fill">
                          <div>
                            <p>24</p>
                          </div>
                          <img src="assets/image/blog-comment.svg" alt="">
                        </div>
                      </div>
                    </div>
                    
                  </div>
                </div>

                <div class="berita">
                  <div class="judul">
                      <h5>Sekolah Terbaik</h5>
                  </div>
                  <div class="isi">
                    <img src="assets/image/gambar 1.jpg" alt="">
                    <div>
                      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis sed, optio labore ad recusandae illo corporis et harum voluptate accusantium officiis fugit. Repudiandae recusandae qui voluptatibus alias incidunt consequuntur quaerat.</p>
                      <div class="comment-section">
                        <div class="fill">
                          <p>24</p>
                          <div>
                            <img src="assets/image/like.svg" alt="">
                          </div>
                        </div>
                        <div class="fill">
                          <div>
                            <p>24</p>
                          </div>
                          <img src="assets/image/eye.svg" alt="">
                        </div>
                        <div class="fill">
                          <div>
                            <p>24</p>
                          </div>
                          <img src="assets/image/blog-comment.svg" alt="">
                        </div>
                      </div>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
            <div class="col-5">
              <div class="pengumuman">
                <div class="judul-pengumuman">
                  <h3>Pengumuman</h3>
                </div>
                <div class="isi-pengumuman">
                  <div class="pdf">
                    <img src="assets/image/pdf-file.svg" alt="">
                  </div>
                  <div class="keterangan">
                    <a href="#"><h5>Pengumuman Seleksi 2021</h5></a>
                    <p>17 Desemeber 2021 14.00 Wita</p>
                  </div>
                </div>
                <div class="isi-pengumuman">
                  <div class="pdf">
                    <img src="assets/image/pdf-file.svg" alt="">
                  </div>
                  <div class="keterangan">
                    <a href="#"><h5>Pengumuman Seleksi 2021</h5></a>
                    <p>17 Desemeber 2021 14.00 Wita</p>
                  </div>
                </div>
                <div class="isi-pengumuman">
                  <div class="pdf">
                    <img src="assets/image/pdf-file.svg" alt="">
                  </div>
                  <div class="keterangan">
                    <a href="#"><h5>Pengumuman Seleksi 2021</h5></a>
                    <p>17 Desemeber 2021 14.00 Wita</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    
    <footer class="footer ">
      <div class="brand-footer">
        <img class="image-brand" src="assets/image/school.svg" alt="">
        <h3>SEKOLAH</h3>
      </div>
      <div class="contact__container bd-grid">
        <!--Social Media-->
        <div class="social-container">
            <div class="social">
                <a href="https://www.instagram.com/imadeekosatria/" target="_blank"><i class='bx bxl-instagram bx-md bx-tada-hover skills__icon'></i></a>
            </div>
            <div class="social">
              <a href="#" target="_blank"><i class='bx bxl-youtube bx-md bx-tada-hover skills__icon'></i></a>
            </div>
            <div class="social">
                <a href="https://twitter.com/Eko_SatriaW" target="_blank"><i class='bx bxl-twitter bx-md bx-tada-hover skills__icon'></i></a>
            </div>
            
            <div class="social">
                <a href="https://www.facebook.com/imadeeko.imadeeko/" target="_blank"><i class='bx bxl-facebook-square bx-md bx-tada-hover skills__icon'></i></a>
            </div>
        </div>
      </div>
      <div>
        <h5>SEKOLAH <span>&copy;</span> 2021</h5>
      </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
</body>
</html>