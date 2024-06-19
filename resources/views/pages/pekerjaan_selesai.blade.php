@extends('layouts.dashboard-layout')
    @section('content')
    @section('main')
        
    
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Data Pekerjaan Selesai</h1>
        </div>
        <!-- End Page Title -->

        <!-- main -->
        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Data Selesai</h5>
                            <a href="#" type="button" class="btn btn-rounded btn-success mb-3">Excel</a>
                            <a href="#" type="button" class="btn btn-rounded btn-danger mb-3">Print</a>

                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>No Pengaduan</th>
                                        <th>Deskripsi</th>
                                        <th>Teknisi</th>
                                        <th>User</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>20240314652</td>
                                        <td><a href="#" type="button"
                                            class="btn btn-rounded btn-primary mb-3">Detail</a></td>
                                            <td><a href="#" type="button" class="btn btn-rounded btn-success mb-3"><i
                                                class="bi bi-check-square-fill" style="margin-right: 5px"></i>Selesai</a>
                                              </td>
                                        <td>Fenn</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>20280314652</td>
                                        <td><a href="#" type="button"
                                            class="btn btn-rounded btn-primary mb-3">Detail</a></td>
                                            <td><a href="#" type="button" class="btn btn-rounded btn-success mb-3"><i
                                                class="bi bi-check-square-fill" style="margin-right: 5px"></i>Selesai</a>
                                              </td>
                                        <td>Via</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Zoe</td>
                                        <td>Curicó</td>
                                        <td>Zoe</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Zoe</td>
                                        <td>Curicó</td>
                                        <td>Zoe</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Zoe</td>
                                        <td>Curicó</td>
                                        <td>Zoe</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Zoe</td>
                                        <td>Curicó</td>
                                        <td>Zoe</td>
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