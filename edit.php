<?php   
include('koneksi.php');

$db = new database();
$id_barang = $_GET['id'];

if (! is_null($id_barang)) {
    $data_barang = $db->get_by_id($id_barang);
} else {
    header('location:index.php');
}
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

    <title>Update Barang</title>
  </head>
  <body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
      <div class="container">
        <a class="navbar-brand" href="#">Update Barang</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Tampil</a>
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
                <h3>Update Data Barang</h3>
            </div>
        </div>
    </section>

    <!-- Form -->
    <section>
        <form method="post" action="proses_barang.php?action=update">
        <input type="hidden" name="id_barang" value="<?php echo $data_barang['id_barang']; ?>"/>
            <div class="container">
                <div class="row justify-content-center shadow p-5 mb-7 bg-body rounded">
                    <div class="col-6 col-sm-3">
                        <div class="form-field col-lg-6">
                            <label for="nama_barang" class="label">Nama Barang</label>
                            <input type="text" name="nama_barang" value="<?php echo $data_barang['nama_barang']; ?>"/>
                        </div>
                    </div>
                    <div class="col-6 col-sm-3">
                        <div class="form-field col-lg-6">
                            <label for="stok" class="label">Stok</label>
                            <input type="text" name="stok" value="<?php echo $data_barang['stok']; ?>"/>
                        </div>
                    </div>
    
                    <!-- Force next columns to break to new line -->
                    <div class="w-100"></div>

                    <div class="col-6 col-sm-3">
                        <div class="form-field col-lg-6 pt-3">
                            <label for="harga_beli" class="label">Harga Beli</label>
                            <input type="text" name="harga_beli" value="<?php echo $data_barang['harga_beli']; ?>"/>
                        </div>
                    </div>
                    <div class="col-6 col-sm-3">
                        <div class="form-field col-lg-6 pt-3">
                            <label for="harga_jual" class="label">Harga Jual</label>
                            <input type="text" name="harga_jual" value="<?php echo $data_barang['harga_jual']; ?>"/>
                        </div>
                    </div>
                </div>
            </div>
            <section>
                <div class="col-md-12 text-center">
                    <button type="submit"  name="tombol" class="btn btn-dark" value="simpan">SIMPAN</button>
                </div>
            </section>
        </form>
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