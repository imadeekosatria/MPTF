<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="assets/image/school.ico" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <title>Document</title>
</head>
<body>
    <header>
        <!--Navbar-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img class="image-brand" src="assets/image/school.svg" alt=""> 
                SEKOLAH
              </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    List
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="list guru.html">Daftar Guru</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="list guru.html">Daftar Siswa</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <!--End Navbar-->
      </header>
      <main>
          <section>
              <div class="edit">
                <div class="picture">
                    <img src="assets/image/school-girl.svg" alt="">
                </div>
                <div class="form">
                    <form action="" method="post">
                        <input type="text" name="nama" class="form-nama" placeholder="Nama">
                        <input type="text" name=mapel class="mapel" placeholder="Mapel">
                        <input type="text" name="nip" class="form-nama" placeholder="NIP">
                        <input type="text" name="nomor" onkeypress="return onlyNumberKey(event)" class="form-nama" placeholder="No. HP">
                        <select name="gender" class="opsi">
                            <option value="">Jenis Kelamin</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Wanita">Wanita</option>
                        </select>
                        <textarea name="alamat" class="alamat" cols="30" rows="10">Alamat</textarea>
                        <button type="submit" class="button-submit">Simpan</button>
                    </form>
                </div>
              </div>
          </section>
      </main>
      <script>
          function onlyNumberKey(evt) { 
            // Only ASCII charactar in that range allowed 
            var ASCIICode = (evt.which) ? evt.which : evt.keyCode 
            if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57)) 
            return false; 
            return true; 
        } 
      </script>
</body>
</html>