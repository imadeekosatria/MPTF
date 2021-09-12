<?= $this->extend('/Resep/header');?>
<?= $this->section('content')?>
    <main>
        <section class="section">
            <h2 class="section-list">Detail Resep</h2>
            <div class="edit-container">
                <div class="gambar">
                    <div class="upload">
                        <img src="assets/img/bebek_panggang.jpg" alt="">
                    </div>
                    <div class="rating-details">
                        <img src="assets/img/star.svg" alt="">
                        <img src="assets/img/star.svg" alt="">
                        <img src="assets/img/star.svg" alt="">
                        <img src="assets/img/star.svg" alt="">
                        <img src="assets/img/star.svg" alt="">
                    </div>
                </div>
                <div class="form-edit">
                    <input type="text" class="name" placeholder="Nama Resep">
                    <div class="form-textarea">
                        <label for="alat">Alat dan Bahan</label>
                        <textarea name="alat" cols="30" rows="10" class="text-fill"></textarea>
                    </div>
                    <div class="form-textarea">
                        <label for="petunjuk">Petunjuk</label>
                        <textarea name="petunjuk" cols="30" rows="10" class="text-fill"></textarea>
                    </div>
                </div>
            </div>
            
        </section>
    </main>
<?= $this->endsection();?> 