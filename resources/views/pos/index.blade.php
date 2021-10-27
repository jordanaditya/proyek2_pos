@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="min-height:85vh">
                <div class="card-header bg-white">
                    <form action="{{ url('/transcation') }}" method="get">
                        <div class="row">
                            <div class="col">
                                <h4 class="font-weight-bold">Products</h4>
                            </div>
                            <div class="col text-right">
                                <select name="" id="" class="form-control from-control-sm" style="font-size: 12px">
                                    <option value="" holder>Filter Category</option>
                                    <option value="1">All Category...</option>
                                </select>
                            </div>
                            <div class="col"><input type="text" name="search"
                                    class="form-control form-control-sm col-sm-12 float-right"
                                    placeholder="Search Product..." onblur="this.form.submit()"></div>
                            <div class="col-sm-3"><button type="submit"
                                    class="btn btn-primary btn-sm float-right btn-block">Cari Product</button></div>
                        </div>
                    </form>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div style="width: 16.66%;border:1px solid rgb(243, 243, 243)" class="mb-4">
                            <div class="productCard">
                                <div class="view overlay">
                                    <form action="" method="POST">
                                        
                                        <img class="card-img-top gambar" src=""
                                            alt="Card image cap">
                                        <button class="btn btn-primary btn-sm cart-btn disabled"><i
                                                class="fas fa-cart-plus"></i></button>
                                        
                                        <img class="card-img-top gambar" src=""
                                            alt="Card image cap" style="cursor: pointer"
                                            onclick="this.closest('form').submit();return false;">
                                        <button type="submit" class="btn btn-primary btn-sm cart-btn"><i
                                                class="fas fa-cart-plus"></i></button>
                                        
                                    </form>
                                </div>
                                <div class="card-body">
                                    <label class="card-text text-center font-weight-bold"
                                        style="text-transform: capitalize;"></label>
                                    <p class="card-text text-center">Rp. 
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div></div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card" style="min-height:85vh">
                <div class="card-header bg-white">
                    <div class="row">
                        <div class="col-sm-4">
                            <h4 class="font-weight-bold">Cart</h4>
                        </div>
                        <div class="col-sm-8">
                            <select name="" id="" class="form-control from-control-sm" style="font-size: 13px">
                                <option value="1">Take Away Customer</option>
                                <option value="" holder>Other Customer...</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div style="overflow-y:auto;min-height:53vh;max-height:53vh" class="mb-3">
                        <table class="table table-sm">
                            <thead>
                                <tr>
                                    <th width="10%">No</th>
                                    <th width="30%">Nama Product</th>
                                    <th width="30%">Qty</th>
                                    <th width="30%" class="text-right">Sub Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                <tr>
                                    <td>
                                        <form action=""
                                            method="POST">
                                            <br><a onclick="this.closest('form').submit();return false;"><i
                                                    class="fas fa-trash" style="color: rgb(134, 134, 134)"></i></a>
                                        </form>
                                    </td>
                                    <td><br>Rp.
                                        
                                    </td>
                                    <td class="font-weight-bold">
                                        <form action=""
                                            method="POST" style='display:inline;'>
                                            
                                            <button class="btn btn-sm btn-info"
                                                style="display: inline;padding:0.4rem 0.6rem!important"><i
                                                    class="fas fa-minus"></i></button>
                                        </form>
                                        <a style="display: inline"></a>
                                        <form action=""
                                            method="POST" style='display:inline;'>
                                            
                                            <button class="btn btn-sm btn-primary"
                                                style="display: inline;padding:0.4rem 0.6rem!important"><i
                                                    class="fas fa-plus"></i></button>
                                        </form>
                                    </td>
                                    <td class="text-right">Rp. </td>
                                </tr>
                                <tr>
                                    <td colspan="4" class="text-center">Empty Cart</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <table class="table table-sm table-borderless">
                        <tr>
                            <th width="60%">Sub Total</th>
                            <th width="40%" class="text-right">Rp. </th>
                        </tr>
                        <tr>
                            <th>
                                <form action="" method="get">
                                    PPN 10%
                                    <input type="checkbox">
                                </form>
                            </th>
                            <th class="text-right">Rp.</th>
                        </tr>
                        <tr>
                            <th>Total</th>
                            <th class="text-right font-weight-bold">Rp.</th>
                        </tr>
                    </table>
                    <div class="row">
                        <div class="col-sm-4">
                            <form action="" method="POST">
                                @csrf
                                <button class="btn btn-info btn-lg btn-block" style="padding:1rem!important"
                                    onclick="return confirm('Apakah anda yakin ingin meng-clear cart ?');"
                                    type="submit">Clear</button>
                            </form>
                        </div>
                        <div class="col-sm-4">
                            <a class="btn btn-primary btn-lg btn-block"
                                style="padding:1rem!important" href="" target="_blank">History</a>
                        </div>
                        <div class="col-sm-4">
                            <button class="btn btn-success btn-lg btn-block" style="padding:1rem!important"
                                data-toggle="modal" data-target="#fullHeightModalRight">Pay</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade right" id="fullHeightModalRight" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">

     
        <div class="modal-dialog modal-full-height modal-right" role="document">

      
            <div class="modal-content">
                <div class="modal-header indigo">
                    <h6 class="modal-title w-100 text-light" id="myModalLabel">Billing Information</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table table-sm table-borderless">
                        <tr>
                            <th width="60%">Sub Total</th>
                            <th width="40%" class="text-right">Rp.</th>
                        </tr>
                        <tr>
                            <th>PPN 10%</th>
                            <th class="text-right">Rp.</th>
                        </tr>
                    </table>
                    <form action="" method="POST">
                    
                    <div class="form-group">
                        <label for="oke">Input Nominal</label>
                        <input id="oke" class="form-control" type="number" name="bayar" autofocus />
                    </div>
                    <h3 class="font-weight-bold">Total:</h3>
                    <h1 class="font-weight-bold mb-5">Rp. </h1>
                    <input id="totalHidden" type="hidden" name="totalHidden" value="" />

                    <h3 class="font-weight-bold">Bayar:</h3>
                    <h1 class="font-weight-bold mb-5" id="pembayaran"></h1>

                    <h3 class="font-weight-bold text-primary">Kembalian:</h3>
                    <h1 class="font-weight-bold text-primary" id="kembalian"></h1>
                </div>
                
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" id="saveButton" disabled onClick="openWindowReload(this)">Save transcation</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    @endsection
   
    @push('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    @if(Session::has('error'))
    <script>
        toastr.error(
            'Telah mencapai jumlah maximum Product | Silahkan tambah stock Product terlebih dahulu untuk menambahkan'
        )

    </script>
    @endif

    @if(Session::has('errorTransaksi'))
    <script>
        toastr.error(
            'Transaksi tidak valid | perhatikan jumlah pembayaran | cek jumlah product'
        )

    </script>
    @endif

    @if(Session::has('success'))
    <script>
        toastr.success(
            'Transaksi berhasil | Thank Your from Tahu Coding'
        )

    </script>
    @endif

    <script>
        $(document).ready(function () {
            $('#fullHeightModalRight').on('shown.bs.modal', function () {
                $('#oke').trigger('focus');
            });
        });

        oke.oninput = function () {
            let jumlah = parseInt(document.getElementById('totalHidden').value) ? parseInt(document.getElementById('totalHidden').value) : 0;
            let bayar = parseInt(document.getElementById('oke').value) ? parseInt(document.getElementById('oke').value) : 0;
            let hasil = bayar - jumlah;
            document.getElementById("pembayaran").innerHTML = bayar ? 'Rp ' + rupiah(bayar) + ',00' : 'Rp ' + 0 +
                ',00';
            document.getElementById("kembalian").innerHTML = hasil ? 'Rp ' + rupiah(hasil) + ',00' : 'Rp ' + 0 +
                ',00';

            cek(bayar, jumlah);
            const saveButton = document.getElementById("saveButton");   

            if(jumlah === 0){
                saveButton.disabled = true;
            }

        };

        function cek(bayar, jumlah) {
            const saveButton = document.getElementById("saveButton");   

            if (bayar < jumlah) {
                saveButton.disabled = true;
            } else {
                saveButton.disabled = false;
            }
        }

        function rupiah(bilangan) {
            var number_string = bilangan.toString(),
                split = number_string.split(','),
                sisa = split[0].length % 3,
                rupiah = split[0].substr(0, sisa),
                ribuan = split[0].substr(sisa).match(/\d{1,3}/gi);

            if (ribuan) {
                separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }
            return rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        }

    </script>

    @endpush

    @push('style')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
    <style>
        .gambar {
            width: 100%;
            height: 175px;
            padding: 0.9rem 0.9rem
        }

        @media only screen and (max-width: 600px) {
            .gambar {
                width: 100%;
                height: 100%;
                padding: 0.9rem 0.9rem
            }
        }

        html {
            overflow: scroll;
            overflow-x: hidden;
        }

        ::-webkit-scrollbar {
            width: 0px;

            background: transparent;

        }


        ::-webkit-scrollbar-thumb {
            background: #FF0000;
        }

        .cart-btn {
            position: absolute;
            display: block;
            top: 5%;
            right: 5%;
            cursor: pointer;
            transition: all 0.3s linear;
            padding: 0.6rem 0.8rem !important;

        }

        .productCard {
            cursor: pointer;

        }

        .productCard:hover {
            border: solid 1px rgb(172, 172, 172);

        }

    </style>
    @endpush
