@extends('layouts.app')
<!-- © 2020 Copyright: Tahu Coding -->
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card" style="min-height: 85vh">
                <div class="card-header bg-white"><h4 class="font-weight-bold">Data Riwayat Transaksi</h4></div>
                <div class="card-body">
                    <table class="table table-sm">
                        <tr>
                            <th>No</th>
                            <th>Nomor Invoices</th>
                            <th>Admin</th>
                            <th>Bayar</th>
                            <th>Total</th>
                            <th>Aksi</th>
                        </tr>
                        <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            <td><a href="#" class="btn btn-primary btn-sm"><i class="fas fa-print"></i></a></td>
                            </tr>
                    </table>
                    <div></div>
                </div>
            </div>
    </div>
</div>
</div>
    
@endsection