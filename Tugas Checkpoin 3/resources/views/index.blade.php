@extends('layout')

@section('container')
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
              <img src="assets/image/sd.jpeg" class="" alt="...">
            </div>
            <div class="carousel-item">
              <img src="assets/image/smp.jpeg" class="" alt="...">
            </div>
            <div class="carousel-item">
              <img src="assets/image/juara.jpg" class="" alt="...">
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
    <!--===== SCROLL REVEAL =====-->
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="/main.js"></script>
@endsection