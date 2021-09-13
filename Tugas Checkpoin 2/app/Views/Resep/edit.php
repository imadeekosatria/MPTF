<?= $this->extend('/Resep/header');?>
<?= $this->section('content')?>
<main>
        <?php
            foreach ($tampil->getResult() as $data) {
                $cover = $data->cover;
                $judul = $data->judul;
                $alat = $data->alat;
                $petunjuk = $data->petunjuk;
                $id = $data->id;
                $rating = $data->rating;
                $kategori = $data->kategori;
            }
        ?>
        <section class="section">
            <h2 class="section-list"><?=$title?></h2>
            <form action="/Resep/update/<?=$id?>" method="post">
                <?= csrf_field(); ?>
                <div class="edit-container">
                        <div class="gambar">
                            <div class="upload">
                                <img src="/assets/img/<?=$cover?>" alt="">
                            </div>
                            <div>
                                <select name="kategori" id="kategori" class="opsi">
                                    <option value="">Pilih Kategori</option>
                                    <option value="makanan" <?php if($kategori == 'makanan') echo 'selected="selected"';?> >Makanan</option>
                                    <option value="minuman" <?php if($kategori == 'minuman') echo 'selected="selected"';?> >Minuman</option>
                                </select>
                                <select name="rating" id="rating" class="opsi">
                                    <option value="">Rating</option>
                                    <option value="1" <?php if($rating == '1') echo 'selected="selected"';?> >1</option>
                                    <option value="2" <?php if($rating == '2') echo 'selected="selected"';?> >2</option>
                                    <option value="3" <?php if($rating == '3') echo 'selected="selected"';?> >3</option>
                                    <option value="4" <?php if($rating == '4') echo 'selected="selected"';?> >4</option>
                                    <option value="5" <?php if($rating == '5') echo 'selected="selected"';?> >5</option>
                                </select>
                            </div>
                           
                        </div>
                        <div class="form-edit">
                            <input type="text" class="name" name="judul" value="<?php echo $judul?>"placeholder="Nama Resep">
                            <div class="form-textarea">
                                <label for="alat">Alat dan Bahan</label>
                                <textarea name="alat" cols="30" rows="10" class="text-fill"><?php echo $alat?></textarea>
                            </div>
                            <div class="form-textarea">
                                <label for="petunjuk">Petunjuk</label>
                                <textarea name="petunjuk" cols="30" value="<?=$petunjuk?>" rows="10" class="text-fill"><?php echo$petunjuk?></textarea>
                            </div>
                            <button type="submit" class="simpan">Simpan</button>
                        </div>
                </div>
            </form>
        </section>
    </main>
<?= $this->endsection();?>  