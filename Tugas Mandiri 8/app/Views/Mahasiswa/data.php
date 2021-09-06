<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <title><?=$title?></title>
      </head>
    <body>
        <header>
            <!-- As a heading -->
            <nav class="navbar navbar-light bg-light">
              <div class="container-fluid">
                <span class="navbar-brand mb-0 h1"><?=$title?></span>
              </div>
            </nav>
        </header>
        <main>
    
    <!--Main Content-->
    <div class="container">
            <!--Awal Card Table-->
            <div class="card my-4">
                <div class="card-header bg-secondary text-white">
                  Daftar Mahasiswa
                  <a href="/Mahasiswa/tambah"><button class="btn btn-primary mx-3">Tambah</button></a>
                </div>
                <table class="table table-bordered table-striped">
                    <tr class="text-center">
                        <th>No.</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th colspan="2">Aksi</th>
                    </tr>
                    <?php
                        $no=1;
                        foreach($mhs as $tampil):
                    ?>
                    <tr class="text-center">
                        <td><?=$no++?></td>
                        <td><?=$tampil['nim']?></td>
                        <td><?=$tampil['nama']?></td>
                        <td><?=$tampil['alamat']?></td>
                        <td>
                          <a href="data.php?hal=edit&id=<?=$tampil['nim']?>"><button class="btn btn-outline-primary">Edit</button></a>
                          <a href="data.php?hal=hapus&id=<?=$tampil['nim']?>"><button class="btn btn-outline-dark">Hapus</button></a>
                        </td>
                    </tr>
                    <?php endforeach?>
                </table>
            </div>
            <!--Akhir Card Table-->
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
</main>
    </body>
</html>

