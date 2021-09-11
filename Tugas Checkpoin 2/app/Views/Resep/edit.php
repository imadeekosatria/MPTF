<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="assets/img/Baby Spoon.ico" type="image/x-icon">
    <title>Edit Resep</title>
</head>
<body>
    <!--===== HEADER =====-->
    <header class="l-header">
        <nav class="nav-bar bd-grid">
            <div class="brand-container">
                <img src="assets/img/baby-spoon.svg" alt="logo">
                <a href="#" class="nav__logo">Masaku</a>
            </div>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item"><a href="index.html#home" class="nav__link">Home</a></li>
                    <li class="nav__item"><a href="list.html" class="nav__link">List Resep</a></li>
                    <li class="nav__item"><a href="index.html#about" class="nav__link">About</a></li>
                    <li class="nav__item"><a href="index.html#contact" class="nav__link">Contact</a></li>
                </ul>
            </div>

            <div class="nav__toggle" id="nav-toggle">
                <i class='bx bx-menu'></i>
            </div>
        </nav>
    </header>

    <main>
        <section class="section">
            <h2 class="section-list">Edit Resep</h2>
            <div class="edit-container">
                <form action="" method="post"></form>
                    <div class="gambar">
                        <div class="upload">
                            <img src="assets/img/bebek_panggang.jpg" alt="">
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
                        <input type="text" class="name" placeholder="Nama Resep">
                        <div class="form-textarea">
                            <label for="alat">Alat dan Bahan</label>
                            <textarea name="alat" cols="30" rows="10" class="text-fill"></textarea>
                        </div>
                        <div class="form-textarea">
                            <label for="petunjuk">Petunjuk</label>
                            <textarea name="petunjuk" cols="30" rows="10" class="text-fill"></textarea>
                        </div>
                        <button type="submit" class="simpan">Simpan</button>
                    </div>
                </form>
            </div>
            
        </section>
    </main>
    <!--===== MAIN JS =====-->
    <script src="main.js"></script>
</body>
</html>