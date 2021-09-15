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
            <h2 class="section-list">Detail Resep</h2>
            <div class="edit-container">
                <div class="gambar">
                    <div class="upload">
                        <img src="/assets/img/<?=$cover?>" alt="">
                    </div>
                    <div class="rating-details">
                        <?php for ($i=0; $i <$rating ; $i++) { 
                            echo '<img src="/assets/img/star.svg" alt="">';
                        }
                        ?>
                    </div>
                </div>
                <div class="form-edit">
                    <h2><?php echo $judul?></h2>
                    <div class="form-textarea">
                        <label for="alat"><h2>Alat dan Bahan</h2></label>
                        <textarea name="alat" cols="30" rows="10" class="text-fill" readonly><?php echo $alat; ?></textarea>
                    </div>
                    <div class="form-textarea">
                        <label for="petunjuk"><h2>Petunjuk</h2></label>
                        <textarea name="petunjuk" cols="30" rows="10" class="text-fill" readonly><?php echo $petunjuk; ?></textarea>
                    </div>
                </div>
            </div>
            
        </section>
    </main>
<?= $this->endsection();?> 