@extends('layouts.dashboard-layout')
    @section('content')
    @section('main')
        
    

    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Data History Pekerjaan</h1>
        </div>
        <!-- End Page Title -->

        <!-- main -->
        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Data History</h5>
                            <a href="form-inventaris.html" type="button" class="btn btn-rounded btn-danger mb-3">Print</a>

                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama</th>
                                        <th>Kategori</th>
                                        <th>Teknisi</th>
                                        <th>created</th>
                                        <th>Progress</th>
                                        <th>finish</th>
                                        <th>Hour</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Zee</td>
                                        <td>Curicó</td>
                                        <td>Zee</td>
                                        <td>Fenn</td>
                                        <td>37%</td>
                                        <td>Curicó</td>
                                        <td>1 Hour</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Zoe</td>
                                        <td>Curicó</td>
                                        <td>Zoe</td>
                                        <td>Fenn</td>
                                        <td>97%</td>
                                        <td>Curicó</td>
                                        <td>4 Hour</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Zoe</td>
                                        <td>Curicó</td>
                                        <td>Zoe</td>
                                        <td>Fenn</td>
                                        <td>97%</td>
                                        <td>Curicó</td>
                                        <td>4 Hour</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Zoe</td>
                                        <td>Curicó</td>
                                        <td>Zoe</td>
                                        <td>Fenn</td>
                                        <td>97%</td>
                                        <td>Curicó</td>
                                        <td>4 Hour</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Zoe</td>
                                        <td>Curicó</td>
                                        <td>Zoe</td>
                                        <td>Fenn</td>
                                        <td>97%</td>
                                        <td>Curicó</td>
                                        <td>4 Hour</td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
   @endsection