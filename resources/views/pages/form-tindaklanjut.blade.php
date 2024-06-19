@extends('layouts.dashboard-layout')
@section('content')
@section('main')



    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Tambah Tindaklanjut Perbaikan</h1>
        </div>
        <!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Tindaklanjut Perbaikan</h5>

                            <form action="" method="post">
                                <div class="row mb-3">
                                    <label for="nomor_barang" class="col-sm-2 col-form-label">Kode Aset</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" id="nomor_permintaan" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="deskripsi_produk" class="col-sm-2 col-form-label">Keterangan</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" id="deskripsi_produk" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="nomor_serial_produk" class="col-sm-2 col-form-label">Pic</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="jenis_aplikasi" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="tanggal_masuk_produk" class="col-sm-2 col-form-label">Tanggal
                                        Tindaklanjut</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" id="tanggal_masuk_produk" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="jumlah_produk" class="col-sm-2 col-form-label">Status</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" id="nama_aplikasi" />
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