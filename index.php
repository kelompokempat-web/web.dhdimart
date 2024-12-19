
<?php include "header.php"?>
<?php include "sidebar.php"?>

<main id="main" class="main">

    <div class="pagetitle">
      <h1>MANAJEMEN BARANG</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php"></a></li>
          <li class="breadcrumb-item active"></li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

            <!-- Reports -->
            <div class="col-12">
              <div class="card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">DIAGRAM PENJUALAN</h5>

                  <!-- Line Chart -->
                  <div id="reportsChart"></div>

                  <script>
                    document.addEventListener("DOMContentLoaded", () => {
                      new ApexCharts(document.querySelector("#reportsChart"), {
                        series: [{
                          name: 'Terjual',
                          data: [31, 40, 28, 51, 42, 82, 56],
                        }, {
                          name: 'Dibeli',
                          data: [11, 32, 45, 32, 34, 52, 41]
                        }, {
                          name: 'stok',
                          data: [15, 11, 32, 18, 9, 24, 11]
                        }],
                        chart: {
                          height: 350,
                          type: 'area',
                          toolbar: {
                            show: false
                          },
                        },
                        markers: {
                          size: 4
                        },
                        colors: ['#4154f1', '#2eca6a', '#ff771d'],
                        fill: {
                          type: "gradient",
                          gradient: {
                            shadeIntensity: 1,
                            opacityFrom: 0.3,
                            opacityTo: 0.4,
                            stops: [0, 90, 100]
                          }
                        },
                        dataLabels: {
                          enabled: false
                        },
                        stroke: {
                          curve: 'smooth',
                          width: 2
                        },
                        xaxis: {
                          type: 'datetime',
                          categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
                        },
                        tooltip: {
                          x: {
                            format: 'dd/MM/yy HH:mm'
                          },
                        }
                      }).render();
                    });
                  </script>
                  <!-- End Line Chart -->

                </div>

              </div>
            </div><!-- End Reports -->


            <!-- Top Selling -->
            <div class="col-12">
              <div class="card top-selling overflow-auto">


                <div class="card-body pb-0">
                  <h5 class="card-title">Terlaris<span>| Hari Ini</span></h5>

                  <table class="table table-borderless">
                    <thead>
                      <tr>
                        <th scope="col">Preview</th>
                        <th scope="col">Produk</th>
                        <th scope="col">Harga Beli</th>
                        <th scope="col">Stok</th>
                        <th scope="col">Harga Jual</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row"><a href="#"><img src="assets/img/miegoreng.jpg" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Mie Goreng Sedap</a></td>
                        <td>Rp.3.000</td>
                        <td class="fw-bold">124</td>
                        <td>Rp.3.500</td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img src="assets/img/aqua.jpg" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Aqua Botol 600ML</a></td>
                        <td>Rp. 2.000</td>
                        <td class="fw-bold">98</td>
                        <td>Rp. 3.000</td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img src="assets/img/sarigandum.jpg" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Roma Sari Gandum</a></td>
                        <td>Rp. 9.000</td>
                        <td class="fw-bold">74</td>
                        <td>Rp. 10.000</td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img src="assets/img/susu.jpg" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Ultramilk UHT 250ml</a></td>
                        <td>Rp. 5.000</td>
                        <td class="fw-bold">63</td>
                        <td>Rp. 6.000</td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img src="assets/img/abc.jpg" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">ABC Squash Delight</a></td>
                        <td>Rp. 7.000</td>
                        <td class="fw-bold">41</td>
                        <td>Rp. 10.000</td>
                      </tr>
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Top Selling -->

          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">


        </div><!-- End Right side columns -->

      </div>
    </section>

  </ma><!-- End #main -->
  <?php include "footer.php"?>