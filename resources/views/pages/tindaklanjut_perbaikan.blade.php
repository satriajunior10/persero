@extends('layouts.dashboard-layout')
    @section('content')
    @section('main')
        
    
    <main id="main" class="main">
        <div class="pagetitle">
            <h1> Data Tindaklanjut Perbaikan</h1>
        </div>
        <!-- End Page Title -->
        
        <!-- main -->
        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Tindaklanjut Perbaikan</h5>
                            <div class="d-flex justify-content-between mb-3">
                        
                        <a href="{{ route('form-tindaklanjut') }}" type="button" class="btn btn-rounded btn-success">
                            <i class="bi bi-plus-square" style="margin-right: 5px"></i>Tambah
                        </a>
                    </div>
                                
                                
                                <!-- Table with stripped rows -->
                                <table class="table datatable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Aset</th>
                                            <th>Keterangan</th>
                                            <th>Status</th>
                                            <th>Pic</th>
                                            <th>Tanggal Permintaan</th>
                                            <th>Modify</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>017/CPU/V/2024</td>
                                            <td>PC Hancur</td>
                                            <td class="text-danger">Open</td>
                                            <td>Admin IT</td>
                                            <td>29/02/2024</td>
                                            <td><i class="bi bi-eye"></i>
                                                <i class="bi bi-pencil-square"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>017/CPU/V/2028</td>
                                            <td>Monitor Mati</td>
                                            <td class="text-primary">Close</td>
                                            <td>Admin IT</td>
                                            <td>29/02/2028</td>
                                            <td><i class="bi bi-eye"></i>
                                                <i class="bi bi-pencil-square"></i>
                                            </td>
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