<?php
  //Untuk Tombol Simpan
  if (isset($_POST['simpan'])) {
    //Pengujian data di edit atau di simpan baru
    if ($_GET['hal'] == "edit") {
      //data akan di edit
      $edit = mysqli_query($conn, "UPDATE `mhs` SET nim='$_POST[tnim]', nama='$_POST[tnama]',alamat='$_POST[talamat]' WHERE nim = '$_GET[id]'");
      if ($edit) {//Jika Edit sukses
        echo "<script>
                  alert('Edit data sukses!'); 
                  document.location='data base admin.php';
              </script>";
      }else{//Jika Edit Gagal
        echo "<script>
                  alert('Edit data GAGAL!! ^_^'); 
                  document.location='data base admin.php';
              </script>";
      }
    }else {
      //data akan di simpan baru
      $simpan = mysqli_query($conn, "INSERT INTO `mhs`(`nim`, `nama`, `alamat`) VALUES ('$_POST[tnim]','$_POST[tnama]','$_POST[talamat]')");
      if ($simpan) {//Jika Simpan sukses
          echo "<script>
                  alert('Simpan data sukses!'); 
                  document.location='data base admin.php';
                </script>";
      }else{//Jika simpan Gagal
          echo "<script>
                  alert('Simpan data GAGAL!! ^_^'); 
                  document.location='data base admin.php';
                  </script>";
      }
    }


    
  }

  //Pengujian tombol edit di klik
  if (isset($_GET['hal'])) {
    //Pengujian jika edit data
    if ($_GET['hal'] == "edit") {
        //tampilkan data yang di edit
        $tampil = mysqli_query($conn, "SELECT * FROM mhs WHERE nim = '$_GET[id]'");
        $data = mysqli_fetch_array($tampil);
        if ($data) {
          //jika data ditemukan, maka data di tampung ke dalam variabel
          $vnim = $data['nim'];
          $vnama = $data['nama'];
          $valamat = $data['alamat'];
        }
    }else if ($_GET['hal'] == "hapus"){
        $hapus = mysqli_query($conn, "DELETE FROM `mhs` WHERE nim = '$_GET[id]'");
        if ($hapus) {
           echo "<script>
                  alert('Hapus data sukses!'); 
                  document.location='data base admin.php';
                  </script>";
        }else{
          echo "<script>
                  alert('Hapus data GAGAL!! ^_^'); 
                  document.location='data base admin.php';
                  </script>";
      }
    }
  }
?>
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

