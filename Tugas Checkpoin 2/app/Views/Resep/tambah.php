<?= $this->extend('/Resep/header');?>
<?= $this->section('content')?>
<main>
        <section class="section">
            <h2 class="section-list"><?=$title?></h2>
            <form action="/Resep/simpan" method="post">
                <?= csrf_field(); ?>
            <div class="edit-container">
                
                    <div class="gambar">
                        <div class="upload">
                            <img src="/assets/img/undraw_under_construction_46pa.svg" alt="">
                        </div>
                        <div>
                            <select name="kategori" class="opsi">
                                <option value="">Pilih Kategori</option>
                                <option value="makanan">Makanan</option>
                                <option value="minuman">Minuman</option>
                            </select>
                        </div>
                        <div class="error-message error-center">
                            <?php
                                if ($validation->hasError('kategori')) {
                                    echo '<i class="fas fa-exclamation-circle"></i>';
                                }
                            ?>
                            <small><?= $validation->getError('kategori')?></small>
                        </div>
                        <h5 class="label-rating">Rating</h5>
                        <div>
                                
                                <select name="rating" class="opsi martop-rating">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                    </div>
                    <div class="form-edit">
                        <input type="text" class="name" name="judul" placeholder="Nama Resep">
                        
                        <div class="error-message">
                            <?php
                                if ($validation->hasError('judul')) {
                                    echo '<i class="fas fa-exclamation-circle"></i>';
                                }
                            ?>
                            <small><?= $validation->getError('judul')?></small>
                        </div>
                        <div class="form-textarea">
                            <label for="alat">Alat dan Bahan</label>
                            <textarea name="alat" cols="30" rows="10" class="text-fill"></textarea>
                        </div>
                        <div class="form-textarea">
                            <label for="petunjuk">Petunjuk</label>
                            <textarea name="petunjuk" cols="30"  rows="10" class="text-fill"></textarea>
                        </div>
                        <button type="submit" class="simpan">Simpan</button>
                    </div>
                
            </div>
            </form>
        </section>
    </main>
<?= $this->endsection();?>  