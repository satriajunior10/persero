@extends('layouts.dashboard-layout')
    @section('content')
    @section('main')
        
    
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Tambah Aset Software</h1>
        </div>
        <!-- End Page Title -->
        
        <!-- main -->
        <section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Data Aset Software</h5>
                    <div class="d-flex justify-content-between mb-3">
                        <a href="#" type="button" class="btn btn-rounded btn-danger">Print</a>
                        <a href="{{ route('form-hardware') }}" type="button" class="btn btn-rounded btn-success">
                            <i class="bi bi-plus-square" style="margin-right: 5px"></i>Tambah Data
                        </a>
                    </div>
                            
                            
                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>No Aset</th>
                                        <th>No Inventaris</th>
                                        <th>Tahun</th>
                                        <th>Jenis Aplikasi</th>
                                        <th>Nama Aplikasi</th>
                                        <th>Pengguna</th>
                                        <th>Divisi/Unit</th>
                                        <th>Modify</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>007/CPU/2022</td>
                                        <td>2024</td>
                                        <td></td>
                                        <td></td>
                                        <td>Feni</td>
                                        <td>Frontend</td>
                                        <td><i class="bi bi-eye"></i>
                                            <i class="bi bi-pencil-square"></i></td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>007/CPU/2022</td>
                                            <td>2024</td>
                                            <td></td>
                                            <td></td>
                                            <td>Via</td>
                                            <td>Frontend</td>
                                            <td><i class="bi bi-eye"></i>
                                                <i class="bi bi-pencil-square"></i></td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>007/CPU/2022</td>
                                                <td>2024</td>
                                                <td></td>
                                                <td></td>
                                                <td>Fenn</td>
                                                <td>IT Support</td>
                                                <td><i class="bi bi-eye"></i>
                                                    <i class="bi bi-pencil-square"></i></td>
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