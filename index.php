<?php   
include('koneksi.php');
$db = new database();
$data_barang = $db->tampil_data();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">

    <title>Hello, world!</title>
  </head>
  <body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
      <div class="container">
        <a class="navbar-brand" href="#">Rafif Huda P</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Tampil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="tambah_data.php">Input</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <section>
        <div class="row justify-content-center">
            <div class="col-auto">
                <h3>Data Barang</h3>
            </div>
        </div>
    </section>


    <!-- tabel -->
    <section>
    <div class="container">
      <div class="row justify-content-center shadow p-5 mb-7 bg-body rounded">
        <table class="table table-striped">
          <thead>
              <tr>
              <th scope="col">No</th>
              <th scope="col">Barang</th>
              <th scope="col">Stok</th>
              <th scope="col">Harga Beli</th>
              <th scope="col">Harga Jual</th>
              <th scope="col">Action</th>
              </tr>
          </thead>
          <tbody>
          <?php 
          $no = 1;
          foreach($data_barang as $row){
          ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $row['nama_barang']; ?></td>
            <td><?php echo $row['stok']; ?></td>
            <td><?php echo $row['harga_beli']; ?></td>
            <td><?php echo $row['harga_jual']; ?></td>
            <td>
              <button type="button" class="btn btn-dark" onclick="window.location.href='tambah_data.php'">TAMBAH</a></button>
              <button type="button" class="btn btn-dark" onclick="window.location.href='edit.php?id=<?php echo $row['id_barang']; ?>'">UPDATE</button>
              <button type="button" class="btn btn-dark" onclick="window.location.href='hapus.php?id=<?php echo $row['id_barang']; ?>'">DELETE</button>
            </td>
        </tr>
        <?php 
            }
        ?>
          </tbody>
        </table>
      </div>
    </div>
    </section>

    <!-- Footer -->
    <footer class="footer bg-light text-center p-1 text-dark fixed-bottom">
      <p>Created with <i class="bi bi-bootstrap-fill"></i> by <a href="https://www.instagram.com/_rafif_huda_/" class="text-dark fw-bold">Rafif Huda</a></p>
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->  

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>