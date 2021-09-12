<?= $this->extend('/Resep/header');?>
<?= $this->section('content')?>
    <section class="section">
        <h2 class="section-list" style="margin-top: 2em !important;"><?=$title?></h2>
        <div class="tambah-data">
            <a href="/Resep/tambah" class="button">Tambah Data +</a> 
        </div>
        <?php
            foreach($fullmakanan ->getResultArray() as $data):
        ?>
        <div class="box-list">
            <img src="/assets/img/<?=$data['cover']?>" alt="">
            <div class="nama-makanan">
                <h2><?=$data['judul']?></h2>
                <p><small><?=$data['time']?> Wita</small></p>
                <div class="rating">
                    <?php for ($i=0; $i <$data['rating'] ; $i++) { 
                        echo '<img src="/assets/img/star.svg" alt="">';
                    }
                    ?>
                </div>
            </div>
            <div class="button-action">
                <a href="/Resep/delete/<?=$data['id']?>/<?=$data['kategori']?>" onclick="return confirm('Apakah anda yakin ?')"><img src="/assets/img/delete.svg" alt="delete"></a>
                <a href="/Resep/edit/<?=$data['id']?>"><img src="/assets/img/edit.svg" alt="edit"></a>
            </div>
        </div>
        <?php endforeach;?>
        
    </section>
<?= $this->endsection();?>