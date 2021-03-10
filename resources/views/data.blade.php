@extends('layouts.main')
@section('menu_data', 'active')
@section('content')

        <div class="header-img-4"></div>
        <!-- end header image -->
        <!-- Welcome message -->
        <div class="welcome-container">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="welcome-wrapper">
                            <h2 class="welcome-title text-uppercase">Data</h2>
                            <img src="img/welcome-divider-lines.png" alt="Welcome divider" class="welcome-divider-lines-img">
                            <p class="welcome-description">Halaman ini berisi Data Pegawai, Data Barang, Data Pelanggan, & Data Supplier</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Welcome message -->
        <!-- main content -->
        <section class="templatemo-container">
            <div class="container">
                <div class="row margin-bottom-30">
                    <div class="col-lg-12 text-uppercase text-center">
                        <h2 class="section-title">Data</h2>
                        <div class="section-title-underline-blue"></div>
                        <hr class="section-title-underline">
                        <p class="small">Vega Anggaresta & Chika Labita</p>
                    </div>
                </div>
                <div class="row margin-bottom-30">
                    <div class="col-lg-12" style="text-align: center">
                        <ul id="filters" class="folio-filters">
                            <li class=""><a href="#" data-filter=".design">Pegawai</a></li>
                            <li class=""><a href="#" data-filter=".web">Barang</a></li>
                            <li class=""><a href="#" data-filter=".branding">Supplier</a></li>
                            <li class=""><a href="#" data-filter=".print">Pelanggan</a></li>
                        </ul>
                    </div>
                </div>
                <div id="folio-container" class="row">
                    <h2>Data Pegawai</h2>
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Phone</th>
                          <th>Email</th>
                          <th>Address</th>
                          <th>Position</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach ($pegawai as $item)
                        <tr>
                          <td>{{ $item->pegawai_name }}</td>
                          <td>{{ $item->pegawai_phone }}</td>
                          <td>{{ $item->pegawai_email }}</td>
                          <td>{{ $item->pegawai_address }}</td>
                          <td>{{ $item->pegawai_position }}</td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>

                    <div class="d-flex justify-content-center">
                        {{ $pegawai->links() }}
                    </div>

                </div>
            </div>
        </section>

        @endsection
