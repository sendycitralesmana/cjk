@extends('layouts/main')

@section('title', 'Penjualan Dealer Kartu Perdana')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Penjualan Dealer Kartu Perdana</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Penjualan Dealer Kartu Perdana</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Penjualan Dealer Kartu Perdana <strong></strong></h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                @if (Session::has('status'))
                <div class="alert alert-success" role="alert">
                    <button type="button" class="btn btn-success close" data-dismiss="alert" sty>&times;</button>
                    {{Session::get('message')}}
                </div>
                @endif
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Biller</th>
                            {{-- <th>ID Pembelian</th> --}}
                            <th>Kartu</th>
                            <th>Harga Beli</th>
                            <th>Switching</th>
                            <th>Harga Jual</th>
                            <th>Jumlah Transaksi</th>
                            <th>Total Harga Jual</th>
                            <th>Total Harga Beli</th>
                            <th>Keuntungan</th>
                            <th>Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data_penjualan as $penjualan)
                        <tr>
                            <td>{{ $penjualan->id }}</td>
                            <td>{{ $penjualan->biller->nama }}</td>
                            {{-- <td>{{ $penjualan->pembelian_bkp_id }}</td> --}}
                            <td>{{ $penjualan->kartu->nama }}</td>
                            <td>Rp. {{ $penjualan->harga_beli }}</td>
                            <td>Rp. {{ $penjualan->switching }}</td>
                            <td>Rp. {{ $penjualan->harga_jual }}</td>
                            <td>{{ $penjualan->jumlah_transaksi }}</td>
                            <td>Rp. {{ $penjualan->total_harga_jual }}</td>
                            <td>Rp. {{ $penjualan->total_harga_beli }}</td>
                            <td>Rp. {{ $penjualan->keuntungan }}</td>
                            <td>
                                @if (auth()->user()->role_id == 2)
                                {{-- <a class="btn btn-danger btn-sm" href="/pembelian/{{ $pembelian->id }}/delete"
                                onClick="return confirm('Anda Yakin ?')">Delete</a> --}}
                                @else
                                -
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Biller</th>
                            {{-- <th>ID Pembelian</th> --}}
                            <th>Kartu</th>
                            <th>Harga Beli</th>
                            <th>Switching</th>
                            <th>Harga Jual</th>
                            <th>Jumlah Transaksi</th>
                            <th>Total Harga Jual</th>
                            <th>Total Harga Beli</th>
                            <th>Keuntungan</th>
                            <th>Option</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                Footer
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection