@extends('layout')

@section('container')
    <main class="l-main">
        <section class="about section " id="about">

            <div class="about__container bd-grid">
                <div class="about__img">
                    <img src="assets/image/gambar gedung.jpg" alt="">
                </div>
                
                <div>
                    <h2 class="about__subtitle">SEKOLAH by I Made Eko Satria Wiguna</h2>
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
    </main>
    <!--===== SCROLL REVEAL =====-->
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="/main.js"></script>
@endsection