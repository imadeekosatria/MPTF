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
            <h1 class="text-center text-white">Data Base</h1>
            <!--Awal Card Form-->
            <div class="card">
                <div class="card-header bg-primary text-white">
                  Input Data 
                </div>
                <div class="card-body">
                  <form action="" method="POST">
                      <div class="form-group">
                        <label for="nim">NIM</label>
                        <input type="text" onkeypress="return onlyNumberKey(event)" name="tnim" class="form-control" placeholder="Input NIM anda di sini" required>
                      </div>
                      <div class="form-group">
                        <label for="nim">Nama</label>
                        <input type="text" value="<?=@$vnama?>"name="tnama" class="form-control" placeholder="Input Nama anda di sini" required>
                      </div>
                      <div class="form-group">
                        <label for="nim">Alamat</label>
                        <textarea name="talamat" id="alt" class="form-control" placeholder="Input Alamat anda disini"></textarea>
                      </div>

                      <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                      <button type="reset" class="btn btn-dark" name="reset">Reset</button>
                  </form>
                </div>
            </div>
            <!--Akhir Card Form-->

            <!--Awal Card Table-->
            <div class="card">
                <div class="card-header bg-secondary text-white">
                  Daftar Mahasiswa
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
                          <button class="btn btn-outline-primary">Edit</button>
                          <button class="btn btn-outline-dark">Hapus</button>
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

