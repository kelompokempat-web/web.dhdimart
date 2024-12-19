<?php include "header.php"?>
<?php include "sidebar.php"?>

<main id="main" class="main">

<div class="pagetitle">
  <h1>INPUT BARANG</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">HOME</a></li>
      <li class="breadcrumb-item">INPUT BARANG</li>
      <li class="breadcrumb-item active">PEMASOK</li>
    </ol>
  </nav>
</div><!-- End Page Title -->
<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">PEMASOK</h5>

          <!-- Vertical Form -->
          <form class="row g-3" action="inputpemasok.php" method="post">
            <div class="col-12">
              <label for="inputNanme4" class="form-label">Nama Pemasok</label>
              <input type="text" class="form-control" id="inputNanme4" name="nama_pemasok">
            </div>
            <div class="col-12">
              <label for="inputEmail4" class="form-label">Kontak</label>
              <input type="text" class="form-control" id="inputEmail4" name="kontak">
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