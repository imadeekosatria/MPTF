<?= $this->extend('/Resep/header');?>
<?= $this->section('content')?>
        <!--===== ABOUT =====-->
        <section class="about section " id="about">
            <h2 class="section-title">About</h2>

            <div class="about__container bd-grid">
                <div class="about__img">
                    <img src="/assets/img/profile.jpg" alt="">
                </div>
                
                <div>
                    <h2 class="about__subtitle">I Made Eko Satria Wiguna</h2>
                    <p class="about__text">Saya adalah orang yang tertarik di bidang IT. 
                        Saat ini saya sedang kuliah di salah satu Universitas Negeri di Bali. 
                        Saat ini saya berada di semester 7. Saya sangat senang dalam membangun WEB dan Mobile Apps. Saat ini skill WEB dan Mobile Apps saya masih basic. 
                        <br> <br> 
                        Tujuan saya setelah mencapai keduanya adalah membangun sebuah aplikasi yang terintegrasi antara WEB dan Mobile Apps karena kedepan teknologi akan semakin 
                        canggih dan interaksi antar perangkat sangat di perlukan.
                    </p>           
                </div>                                   
            </div>
        </section>

        <!--===== CONTACT =====-->
        <section class="contact section" id="contact">
            <h2 class="section-title">Contact</h2>

            <div class="contact__container bd-grid">
                <!--Social Media-->
                <div class="social-container">
                    <div class="social">
                        <a href="https://wa.me/081803634659" target="_blank"><i class='bx bxl-whatsapp bx-md bx-tada-hover skills__icon'></i></a>
                    </div>
                    <div class="social">
                        <a href="https://www.instagram.com/imadeekosatria/" target="_blank"><i class='bx bxl-instagram bx-md bx-tada-hover skills__icon'></i></a>
                    </div>
                    <div class="social">
                        <a href="https://t.me/imadeekosatria" target="_blank"><i class='bx bxl-telegram bx-md bx-tada-hover skills__icon'></i></a>
                    </div>
                    <div class="social">
                        <a href="https://twitter.com/Eko_SatriaW" target="_blank"><i class='bx bxl-twitter bx-md bx-tada-hover skills__icon'></i></a>
                    </div>
                    <div class="social">
                        <a href="https://www.linkedin.com/in/i-made-eko-satria-wiguna-8748871b6/" target="_blank"><i class='bx bxl-linkedin-square bx-md bx-tada-hover skills__icon'></i></a>
                    </div>
                    <div class="social">
                        <a href="https://github.com/imadeekosatria" target="_blank"><i class='bx bxl-github bx-md bx-tada-hover skills__icon'></i></a>
                    </div>
                    <div class="social">
                        <a href="https://www.facebook.com/imadeeko.imadeeko/" target="_blank"><i class='bx bxl-facebook-square bx-md bx-tada-hover skills__icon'></i></a>
                    </div>
                </div>
            </div>
        </section>
    </main>
    
<?= $this->endsection();?>