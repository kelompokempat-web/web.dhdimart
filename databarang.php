<?php include "header.php"?>
<?php include "sidebar.php"?>

<main id="main" class="main">

    <div class="pagetitle">
      <h1>DATA BARANG</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">HOME</a></li>
          <li class="breadcrumb-item"><a href="inputbarang.php">INPUT BARANG</a></li>
          <li class="breadcrumb-item active">LIHAT DATA BARANG</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Data Barang</h5>
              <!-- Bordered Table -->
              <table class="table table-bordered">
                <thead>
                  <tr>
                
                    <th scope="col">#</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Jumlah Stok</th>
                    <th scope="col">Harga Jual</th>
                    <th scope="col">Harga Beli</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Pemasok</th> 
                    <th scope="col">kontak</th> 
                    
                  </tr>
                </thead>
                <tbody>
                  <tr>
<?php include "koneksi.php";
                  $no = 1;
$data = mysqli_query ($conn,"select * from barang, kategori, pemasok");
while($d= mysqli_fetch_array($data)) {
  ?>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d ['nama_barang']; ?></td>
                    <td><?php echo $d ['jumlah_stok']; ?></td>
                    <td><?php echo $d ['harga_beli']; ?></td>
                    <td><?php echo $d ['harga_jual']; ?></td>
                    <td><?php echo $d ['nama_kategori']; ?></td>
                    <td><?php echo $d ['nama_pemasok']; ?></td>
                    <td><?php echo $d ['kontak']; ?></td>
                  </tr>
                </tbody>
 <?php               
}
   ?>            
              </table>
              <!-- End Bordered Table -->

            </div>
          </div>


        </div>
      </div>
    </section>

  </main><!-- End #main -->

        <?php include "footer.php"?>