@extends('layouts.dashboard-layout')
    @section('content')
    @section('main')
        
    
    
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Tambah Aset Software</h1>
        </div>
        <!-- End Page Title -->
        
        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Software</h5>
                            
                            <form action="" method="post">
                                <div class="row mb-3">
                                    <label for="nomor_barang" class="col-sm-2 col-form-label">No Inventaris</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" id="nomor_inventaris" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="nama_produk" class="col-sm-2 col-form-label">Tahun</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="tahun" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="nomor_serial_produk" class="col-sm-2 col-form-label">Jenis Aplikasi</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="jenis_aplikasi" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="jumlah_produk" class="col-sm-2 col-form-label">Nama Aplikasi</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" id="nama_aplikasi" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="jumlah_produk" class="col-sm-2 col-form-label">Pengguna</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" id="pengguna" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="jumlah_produk" class="col-sm-2 col-form-label">Divisi</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" id="Divisi" />
                                    </div>
                                </div>
                            </form>
                            
                            <div class="d-md-flex justify-content-md-end mt-3">
                                <button type="submit" class="btn"
                                style="background-color: #525ceb; color: white">Send</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    @endsection
    