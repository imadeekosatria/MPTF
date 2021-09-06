<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>List Film</title>
</head>
<body>
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
                  <tr class="text-center mx-3">
                    <th scope="col">#</th>
                    <th colspan="2" scope="col">Judul Film</th>
                    <th scope="col">Release Date</th>
                    <th scope="col">Sutradara</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                <tr>
                    <th class="text-center mx-3" scope="row">1</th>
                    <td><img src="/image/FantasticBeast.jpg" alt="cover" width="100px"></th>
                    <td class="text-center mx-3">Mark</td>
                    <td class="text-center mx-3">Otto</td>
                    <td class="text-center mx-3"><button type="button" class="btn btn-outline-light mx-5">Tonton Sekarang</button></td>
                </tr>
                </tbody>
              </table>
        </div>
      </div>
      
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
</body>
</html>