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
                  <a class="nav-link" aria-current="page" href="index.html">Home</a>
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
            <a class="tambah" href="">Tambah +</a>
            <div class="main">
                <table>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>NIP</th>
                        <th>MAPEL</th>
                        <th>No. HP</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td class="nama">
                            <img src="assets/image/school-boy.svg" alt="">
                            <h5>I Made Eko Satria Wiguna</h5>
                        </td>
                        <td>10909909090909</td>
                        <td>MIPA</td>
                        <td>081803634659</td>
                        <td><a class="button-action" href=""><img src="assets/image/edit.svg" alt=""></a></td>
                        <td><a class="button-action" href=""><img src="assets/image/delete.svg" alt=""></a></td>
                    </tr>
                </table>

            </div>
        </section>
    </main>
</body>
</html>