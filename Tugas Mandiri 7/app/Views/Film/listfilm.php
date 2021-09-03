<?= $this->extend('Layout/layout');?>

<!--Awal-->
<?= $this->section('content');?>
<!--Isi Konten-->
<!--NAV-->
<nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand">Film</a>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </nav>
      <div class="container-fluid py-3">
        <h1 class="text-center">List Film</h1>
        
        <div class="table-responsive my-3">
            <table class="table table-dark table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th colspan="2" scope="col" class="text-center mx-3">Judul Film</th>
                    <th scope="col" class="text-center mx-3">Release Date</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <th>gambar</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td><button type="button" class="btn btn-outline-light mx-5">Tonton Sekarang</button></td>
                  </tr>
                  
                </tbody>
              </table>
        </div>
      </div>
<!--Akhir-->
<?= $this->endSection();?>