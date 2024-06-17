<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <title>Manajemen Layanan Teknis dan IT Persero Batam</title>
  <meta content="" name="description" />
  <meta content="" name="keywords" />

  <!-- Favicons -->
  <link href="{{ asset('./assets/img/logo1.png') }}" rel="icon" />
  <link href="{{ asset('./assets2/img/apple-touch-icon.png') }}" rel="apple-touch-icon" />

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect" />
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet" />

  <!-- Vendor CSS Files -->
  <link href="{{ asset('./assets2/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('./assets2/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet" />
  <link href="{{ asset('./assets2/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('./assets2/vendor/quill/quill.snow.css') }}" rel="stylesheet" />
  <link href="{{ asset('./assets2/vendor/quill/quill.bubble.css') }}" rel="stylesheet" />
  <link href="{{ asset('./assets2/vendor/remixicon/remixicon.css') }}" rel="stylesheet" />
  <link href="{{ asset('./assets2/vendor/simple-datatables/style.css') }}" rel="stylesheet" />

  <!-- Template Main CSS File -->
  <link href="{{ asset('./assets2/css/style.css') }}" rel="stylesheet" />

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Jan 29 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="d-flex justify-content-center align-items-center">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="{{ asset('./assets/img/logo1.png') }}" alt="" />
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div>

    <!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword" />
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div>
    <!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">
        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle" href="#">
            <i class="bi bi-search"></i>
          </a>
        </li>
        <!-- End Search Icon-->

        <li class="nav-item dropdown pe-3">
          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            {{-- <img src="{{ asset('./assets2/img/profile-img.jpg') }}" alt="Profile" class="rounded-circle" /> --}}
            <span class="d-none d-md-block dropdown-toggle ps-2" style="font-size: 20px;">{{ Auth::user()->name }}</span>
                </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
                <h6>{{ Auth::user()->name }}</h6>
                <span>{{ Auth::user()->email }}</span>
            </li>
            <li>
              <hr class="dropdown-divider" />
            </li>

            {{-- <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li> --}}
            <li>
              <hr class="dropdown-divider" />
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider" />
            </li>

            {{-- <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li> --}}
            <li>
              <hr class="dropdown-divider" />
            </li>

            <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a class="dropdown-item d-flex align-items-center" href="{{ route('logout') }}"
                    onclick="event.preventDefault();this.closest('form').submit();">
                        <i class="bi bi-box-arrow-right"></i>
                        <span>Sign Out</span>
                    </a>
                </form>
            </li>
          </ul>
          <!-- End Profile Dropdown Items -->
        </li>
        <!-- End Profile Nav -->
      </ul>
    </nav>
    <!-- End Icons Navigation -->
  </header>
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">
  <ul class="sidebar-nav" id="sidebar-nav">
    <li class="nav-item">
      <a class="nav-link" href="/dashboard">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-layout-text-window-reverse"></i><span>Manajemen Layanan Teknis & IT</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="tables-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
        
        <!-- ======= Solve ======= -->
        <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#solve-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-wrench"></i><span>Solve</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="solve-nav" class="nav-content collapse" data-bs-parent="#tables-nav">
            <li>
              <a href="/permintaan_masuk">
                <i class="bi bi-envelope"></i><span>Permintaan Masuk</span>
              </a>
            </li>
            <li>
              <a href="/dikerjakan">
                <i class="bi bi-hammer"></i><span>Dikerjakan</span>
              </a>
            </li>
            <li>
              <a href="/history_pekerjaan">
                <i class="bi bi-clock-history"></i><span>History Pekerjaan</span>
              </a>
            </li>
            <li>
              <a href="/pekerjaan_selesai">
                <i class="bi bi-circle"></i><span>Pekerjaan Selesai</span>
              </a>
            </li>
          </ul>
        </li>
        <!-- ======= End Solve ======= -->

        <!-- ======= Inventory ======= -->
        <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#inventory-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-box-seam"></i><span>Inventory</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="inventory-nav" class="nav-content collapse" data-bs-parent="#tables-nav">
            <li>
              <a href="/hardware">
                <i class="bi bi-cpu"></i><span>Tambah Data Aset (Hardware)</span>
              </a>
            </li>
            <li>
              <a href="/software">
                <i class="bi bi-file-earmark-code"></i><span>Tambah Data Aset (Software)</span>
              </a>
            </li>
          </ul>
        </li>
        <!-- ======= End Inventory ======= -->

        <!-- ======= Maintenance ======= -->
        <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#maintenance-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-tools"></i><span>Maintenance</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="maintenance-nav" class="nav-content collapse" data-bs-parent="#tables-nav">
            <li>
              <a href="/permintaan_perbaikan">
                <i class="bi bi-bug"></i><span>Permintaan Perbaikan</span>
              </a>
            </li>
            <li>
              <a href="/tindaklanjut_perbaikan">
                <i class="bi bi-arrow-repeat"></i><span>Tindaklanjut Perbaikan</span>
              </a>
            </li>
          </ul>
        </li>
        <!-- ======= End Maintenance ======= -->

      </ul>
    </li>

    <!-- ======= Tambah User ======= -->
    <li class="nav-item">
        @if (Route::has('login'))
            <a class="nav-link" href="{{ route('register') }}">
                <i class="bi bi-person-plus"></i>
                <span>Tambah User</span>
            </a>
        @endif
    </li>
    <!-- ======= End Tambah User ======= -->

  </ul>
</aside>
<!-- End Sidebar-->

  <!-- main -->
  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div>
    <!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">
        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">
            <!-- Daftar Request Belum Dikerjaakan -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">
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
                  <h5 class="card-title">Daftar Request Masuk </h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-inbox"></i>
                    </div>
                    <div class="ps-3">
                      <h6>145</h6>
                      <span class="text-danger small pt-1 fw-bold">12%</span> <span
                        class="text-muted small pt-2 ps-1">increase</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Sales Card -->

            <!-- Daftar Request Sedang Dikerjaakan -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">
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
                  <h5 class="card-title">Daftar Request Sedang Dikerjaakan </h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-hourglass-split"></i>
                    </div>
                    <div class="ps-3">
                      <h6>145</h6>
                      <span class="text-secondary small pt-1 fw-bold">12%</span> <span
                        class="text-muted small pt-2 ps-1">increase</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Sales Card -->

            <!-- Daftar Request Selesai Dikerjakan -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card customers-card">
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
                  <h5 class="card-title">Daftar Request Selesai Dikerjakan</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-check-circle"></i>
                    </div>
                    <div class="ps-3">
                      <h6>1244</h6>
                      <span class="text-success small pt-1 fw-bold">12%</span> <span
                        class="text-muted small pt-2 ps-1">decrease</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Revenue Card -->

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
                  <h5 class="card-title">Reports <span>/Today</span></h5>

                  <!-- Line Chart -->
                  <div id="reportsChart"></div>

                  <script>
                    document.addEventListener("DOMContentLoaded", () => {
                      new ApexCharts(document.querySelector("#reportsChart"), {
                        series: [
                          {
                            name: "Sales",
                            data: [31, 40, 28, 51, 42, 82, 56],
                          },
                          {
                            name: "Revenue",
                            data: [11, 32, 45, 32, 34, 52, 41],
                          },
                          {
                            name: "Customers",
                            data: [15, 11, 32, 18, 9, 24, 11],
                          },
                        ],
                        chart: {
                          height: 350,
                          type: "area",
                          toolbar: {
                            show: false,
                          },
                        },
                        markers: {
                          size: 4,
                        },
                        colors: ["#4154f1", "#2eca6a", "#ff771d"],
                        fill: {
                          type: "gradient",
                          gradient: {
                            shadeIntensity: 1,
                            opacityFrom: 0.3,
                            opacityTo: 0.4,
                            stops: [0, 90, 100],
                          },
                        },
                        dataLabels: {
                          enabled: false,
                        },
                        stroke: {
                          curve: "smooth",
                          width: 2,
                        },
                        xaxis: {
                          type: "datetime",
                          categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"],
                        },
                        tooltip: {
                          x: {
                            format: "dd/MM/yy HH:mm",
                          },
                        },
                      }).render();
                    });
                  </script>
                  <!-- End Line Chart -->
                </div>
              </div>
            </div>
            <!-- End Reports -->
          </div>
        </div>
        <!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">
          <!-- Recent Activity -->
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
              <h5 class="card-title">Recent Activity <span>| Today</span></h5>

              <div class="activity">
                <div class="activity-item d-flex">
                  <div class="activite-label">32 min</div>
                  <i class="bi bi-circle-fill activity-badge text-secondary align-self-start"></i>
                  <div class="activity-content"><a href="#" class="fw-bold text-dark">Request
                      Sedang Dikerjakan</a></div>
                </div>
                <!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">1 hour</div>
                  <i class="bi bi-circle-fill activity-badge text-success align-self-start"></i>
                  <div class="activity-content"><a href="#" class="fw-bold text-dark">Request
                      Selesai Dikerjakan</a></div>
                </div>
                <!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">1 day</div>
                  <i class="bi bi-circle-fill activity-badge text-warning align-self-start"></i>
                  <div class="activity-content"><a href="#" class="fw-bold text-dark">Request
                      Belum Dikerjakan</a></div>
                </div>
                <!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">1 day</div>
                  <i class="bi bi-circle-fill activity-badge text-success align-self-start"></i>
                  <div class="activity-content"><a href="#" class="fw-bold text-dark">Request
                      Selesai Dikerjakan</a></div>
                </div>
                <!-- End activity item-->

                <div class="activity">
                  <div class="activity-item d-flex">
                    <div class="activite-label">1 day</div>
                    <i class="bi bi-circle-fill activity-badge text-secondary align-self-start"></i>
                    <div class="activity-content"><a href="#" class="fw-bold text-dark">Request
                        Sedang Dikerjakan</a></div>
                  </div>
                  <!-- End activity item-->

                  <div class="activity-item d-flex">
                    <div class="activite-label">1 day</div>
                    <i class="bi bi-circle-fill activity-badge text-success align-self-start"></i>
                    <div class="activity-content"><a href="#" class="fw-bold text-dark">Request
                        Selesai Dikerjakan</a></div>
                  </div>
                  <!-- End activity item-->
                </div>
              </div>
            </div>
            <!-- End Recent Activity -->

            <!-- Budget Report -->
            <!-- End Budget Report -->

            <!-- Website Traffic -->
            <!-- End Website Traffic -->

            <!-- News & Updates Traffic -->
            <!-- End News & Updates -->
          </div>
          <!-- End Right side columns -->
        </div>
    </section>
  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer>
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('./assets2/vendor/apexcharts/apexcharts.min.js') }}"></script>
  <script src="{{ asset('./assets2/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('./assets2/vendor/chart.js/chart.umd.js') }}"></script>
  <script src="{{ asset('./assets2/vendor/echarts/echarts.min.js') }}"></script>
  <script src="{{ asset('./assets2/vendor/quill/quill.min.js') }}"></script>
  <script src="{{ asset('./assets2/vendor/simple-datatables/simple-datatables.js') }}"></script>
  <script src="{{ asset('./assets2/vendor/tinymce/tinymce.min.js') }}"></script>
  <script src="{{ asset('./assets2/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('./assets2/js/main.js') }}"></script>
</body>

</html>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
