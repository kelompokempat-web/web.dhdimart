<?php include "header.php"?>
<?php include "sidebar.php"?>

<main id="main" class="main">

<div class="pagetitle">
  <h1>INPUT BARANG</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">HOME</a></li>
      <li class="breadcrumb-item"><a href="inputbarang.php">INPUT BARANG</a></li>
      <li class="breadcrumb-item active">INPUT BARANG</li>
    </ol>
  </nav>
</div><!-- End Page Title -->
<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">INPUT BARANG</h5>

          <!-- Vertical Form -->
          <form class="row g-3" action="inputaksi.php" method="post">
            <div class="col-12">
              <label for="inputNanme4" class="form-label">Nama Barang</label>
              <input type="text" class="form-control" id="inputNanme4" name="nama_barang">
            </div>
            <div class="col-12">
              <label for="inputEmail4" class="form-label">Jumlah Stok</label>
              <input type="text" class="form-control" id="inputEmail4" name="jumlah_stok">
            </div>
            <div class="col-12">
              <label for="inputPassword4" class="form-label">Harga Jual</label>
              <input type="text" class="form-control" id="inputPassword4" name="harga_jual">
            </div>
            <div class="col-12">
              <label for="inputAddress" class="form-label">Harga Beli</label>
              <input type="text" class="form-control" id="inputAddress" name="harga_beli">
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-primary" value="simpan">Submit</button>
              <button type="reset" class="btn btn-secondary">Reset</button>
            </div>
          </form><!-- Vertical Form -->

        </div>
      </div>


    </div>
  </div>
</section>

</main><!-- End #main -->

        <?php include "footer.php"?>