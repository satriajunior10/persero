@extends('layouts.dashboard-layout')
    @section('content')
    @section('main')
        
    
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Data Dikerjakan</h1>
        </div>
        <!-- End Page Title -->

        <!-- main -->
        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Daftar Pekerjaan Dalam Proses Dikerjakan Unit IT</h5>
                            <a href="form-inventaris.html" type="button" class="btn btn-rounded btn-danger mb-3">Print</a>

                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>No Pengaduan</th>
                                        <th>Deskripsi</th>
                                        <th>Teknisi</th>
                                        <th>Status</th>
                                        <th>User</th>
                                        <th>Action</th>
                                        <th>File</th>
                                        <th>Dari Divisi</th>
                                        <th>Ke Divisi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>29022024<a href="#" type="button" class="btn btn-rounded btn-danger mb-3"></i>Belum DItangani</a>
                                          </td></td>
                                        <td><a href="#" type="button" class="btn btn-rounded btn-primary mb-3">Detail Pengaduan</a></td>
                                        <td>Fenn</td>
                                        <td><a href="#" type="button" class="btn btn-rounded btn-danger mb-3">Dikerjakan</a>
                                            <a href="#" type="button" class="btn btn-rounded btn-primary mb-3">Update</a>
                                          </td>
                                        <td>Brahman</td>
                                        <td><a href="#" type="button" class="btn btn-rounded btn-danger mb-3"><i
                                            class="bi bi-trash" style="margin-right: 5px"></i>Batal</a></td>
                                        <td class="text-primary">File</td>
                                        <td><a href="#" type="button" class="btn btn-rounded btn-primary mb-3">Keuangan</a></td>
                                        <td><a href="#" type="button" class="btn btn-rounded btn-primary mb-3">Pemasaran</a></td>      
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
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