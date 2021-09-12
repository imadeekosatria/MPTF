<?= $this->extend('/Resep/header');?>
<?= $this->section('content')?>
    <main>
        <section class="section">
            <h2 class="section-list"><?=$title?></h2>
            <div class="edit-container">
                <form action="/Resep/update" method="post">
                <?= csrf_field(); ?>
                <?php
                    if (isset($tampil)) {
                        $cover = $tampil['cover'];
                        $judul = $tampil['judul'];
                        $alat = $tampil['alat'];
                        $petunjuk = $tampil['petunjuk'];
                    }
                ?>
                    <div class="gambar">
                        <div class="upload">
                            <img src="/assets/img/<?=$cover?>" alt="">
                        </div>
                        <div>
                            <select name="kategori" id="kategori" class="opsi">
                                <option value="">Pilih Kategori</option>
                                <option value="makanan">Makanan</option>
                                <option value="minuman">Minuman</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-edit">
                        <input type="text" class="name" value="<?=$judul?>"placeholder="Nama Resep">
                        <div class="form-textarea">
                            <label for="alat">Alat dan Bahan</label>
                            <textarea name="alat" cols="30" rows="10" value="<?=$alat?>"class="text-fill"></textarea>
                        </div>
                        <div class="form-textarea">
                            <label for="petunjuk">Petunjuk</label>
                            <textarea name="petunjuk" cols="30" rows="10" value="<?=$petunjuk?>"class="text-fill"></textarea>
                        </div>
                        <button type="submit" class="simpan">Simpan</button>
                    </div>
                </form>
            </div>
            
        </section>
    </main>
<?= $this->endsection();?>  