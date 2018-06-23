@extends('layouts.master')
@section('content')

    @include('layouts.navbar')

    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <h1 class="mt-5">Buat Laporan</h1><hr>
            </div>
        </div>
        <form action="{{ route('saveReport') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="form-group mt-5">
                        <label for="store_name">Outlet</label>
                        <input type="text" name="store_name" class="form-control" placeholder="Outlet" value="{{ Auth::user()->store_name }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                        <input type="date" name="tanggal" class="form-control" placeholder="Tanggal">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="form-group mt-5">
                        <label for="gross_sales">Gross</label>
                        <input type="number" step="any" class="form-control" name="gross_sales" placeholder="0.0 ml">
                    </div>
                    <div class="form-group">
                        <label for="cash">Cash</label>
                        <input type="number" step="any" class="form-control" name="cash" placeholder="0.0 ml">
                    </div>
                    <div class="form-group">
                        <label for="ticket">Ticket</label>
                        <input type="number" step="any" class="form-control" name="ticket" placeholder="0.0 ml">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="form-group mt-5">
                        <label for="nett_sales">Nett</label>
                        <input type="number" step="any" class="form-control" name="nett_sales" placeholder="0.0 ml">
                    </div>
                    <div class="form-group">
                        <label for="card">Card</label>
                        <input type="number" step="any" class="form-control" name="card" placeholder="0.0 ml">
                    </div>
                    <div class="form-group">
                        <label for="avg_ticket">Ticket Average</label>
                        <input type="number" step="any" class="form-control" name="avg_ticket" placeholder="0.0 ml">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="form-group mt-5">
                        <label for="voucher">Voucher</label>
                        <input type="number" step="any" class="form-control" name="voucher" placeholder="0.0 ml">
                    </div>
                    <div class="form-group">
                        <label for="avg_batch">Batch Average</label>
                        <input type="number" step="any" class="form-control" name="avg_batch" placeholder="0.0 ml">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <h3 class="mt-5">Batch</h3><hr>                
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-3 col-md-3">
                    <div class="form-group">
                        <label for="pip_gtj_batch">Green Tea Jasmine</label>
                        <input type="number" step="any" class="form-control" name="pip_gtj_batch" id="pip_gtj_batch" placeholder="0 batch">
                    </div>
                    <div class="form-group">
                        <label for="pip_bt_batch">Black Tea</label>
                        <input type="number" step="any" class="form-control" name="pip_bt_batch" id="pip_bt_batch" placeholder="0 batch">
                    </div>
                    <div class="form-group">
                        <label for="pip_qy_batch">Quan Yin</label>
                        <input type="number" step="any" class="form-control" name="pip_qy_batch" id="pip_qy_batch" placeholder="0 batch">
                    </div>
                    <div class="form-group">
                        <label for="pip_mc_batch">Matcha</label>
                        <input type="number" step="any" class="form-control" name="pip_mc_batch" id="pip_mc_batch" placeholder="0 batch">
                    </div>
                    <div class="form-group">
                        <label for="pip_rmt_batch">Royal Milk Tea</label>
                        <input type="number" step="any" class="form-control" name="pip_rmt_batch" id="pip_rmt_batch" placeholder="0 batch">
                    </div>
                    <div class="form-group">
                        <label for="pip_cof_batch">Coffee</label>
                        <input type="number" step="any" class="form-control" name="pip_cof_batch" id="pip_cof_batch" placeholder="0 batch">
                    </div>
                    <div class="form-group">
                        <label for="pip_choc_batch">Choco</label>
                        <input type="number" step="any" class="form-control" name="pip_choc_batch" id="pip_choc_batch" placeholder="0 batch">
                    </div>
                    <div class="form-group">
                        <label for="pip_chs_batch">Cheese</label>
                        <input type="number" step="any" class="form-control" name="pip_chs_batch" id="pip_chs_batch" placeholder="0 batch">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3">
                    <div class="form-group">
                        <label for="pip_gtj_wasted">Waste</label>
                        <input type="number" step="any" class="form-control" name="pip_gtj_wasted" id="pip_gtj_wasted" placeholder="0.0 ml">
                    </div>
                    <div class="form-group">
                        <label for="pip_bt_wasted">Waste</label>
                        <input type="number" step="any" class="form-control" name="pip_bt_wasted" id="pip_bt_wasted" placeholder="0.0 ml">
                    </div>
                    <div class="form-group">
                        <label for="pip_qy_wasted">Waste</label>
                        <input type="number" step="any" class="form-control" name="pip_qy_wasted" id="pip_qy_wasted" placeholder="0.0 ml">
                    </div>
                    <div class="form-group">
                        <label for="pip_mc_wasted">Waste</label>
                        <input type="number" step="any" class="form-control" name="pip_mc_wasted" id="pip_mc_wasted" placeholder="0.0 ml">
                    </div>
                    <div class="form-group">
                        <label for="pip_rmt_wasted">Waste</label>
                        <input type="number" step="any" class="form-control" name="pip_rmt_wasted" id="pip_rmt_wasted" placeholder="0.0 ml">
                    </div>
                    <div class="form-group">
                        <label for="pip_cof_wasted">Waste</label>
                        <input type="number" step="any" class="form-control" name="pip_cof_wasted" id="pip_cof_wasted" placeholder="0.0 ml">
                    </div>
                    <div class="form-group">
                        <label for="pip_choc_wasted">Waste</label>
                        <input type="number" step="any" class="form-control" name="pip_choc_wasted" id="pip_choc_wasted" placeholder="0.0 ml">
                    </div>
                    <div class="form-group">
                        <label for="pip_chs_wasted">Waste</label>
                        <input type="number" step="any" class="form-control" name="pip_chs_wasted" id="pip_chs_wasted" placeholder="0.0 ml">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <h3 class="mt-5">Product Sold</h3><hr>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <h4 class="my-4">Regular</h4>
                    <div class="form-group">
                        <label for="gtj_regular">Green Tea Jasmine</label>
                        <input type="number" step="any" name="gtj_regular" id="gtj_regular" class="form-control" placeholder="0.0 ml">
                    </div>
                    <div class="form-group">
                        <label for="bt_regular">Black Tea</label>
                        <input type="number" step="any" name="bt_regular" id="bt_regular" class="form-control" placeholder="0.0 ml">
                    </div>
                    <div class="form-group">
                        <label for="qy_regular">Quan Yin</label>
                        <input type="number" step="any" name="qy_regular" id="qy_regular" class="form-control" placeholder="0.0 ml">
                    </div>
                    <div class="form-group">
                        <label for="mc_regular">Matcha</label>
                        <input type="number" step="any" name="mc_regular" id="mc_regular" class="form-control" placeholder="0.0 ml">
                    </div>
                    <div class="form-group">
                        <label for="rmt_regular">Royal Milk Tea</label>
                        <input type="number" step="any" name="rmt_regular" id="rmt_regular" class="form-control" placeholder="0.0 ml">
                    </div>
                    <div class="form-group">
                        <label for="cof_regular">Coffee</label>
                        <input type="number" step="any" name="cof_regular" id="cof_regular" class="form-control" placeholder="0.0 ml">
                    </div>
                    <div class="form-group">
                        <label for="choc_regular">Choco</label>
                        <input type="number" step="any" name="choc_regular" id="choc_regular" class="form-control" placeholder="0.0 ml">
                    </div>
                    <div class="form-group">
                        <label for="chs_regular">Cheese</label>
                        <input type="number" step="any" name="chs_regular" id="chs_regular" class="form-control" placeholder="0.0 ml">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <h4 class="my-4">Large</h4>
                    <div class="form-group">
                        <label for="gtj_large">Green Tea Jasmine</label>
                        <input type="number" step="any" name="gtj_large" id="gtj_large" class="form-control" placeholder="0.0 ml">
                    </div>
                    <div class="form-group">
                        <label for="bt_large">Black Tea</label>
                        <input type="number" step="any" name="bt_large" id="bt_large" class="form-control" placeholder="0.0 ml">
                    </div>
                    <div class="form-group">
                        <label for="qy_large">Quan Yin</label>
                        <input type="number" step="any" name="qy_large" id="qy_large" class="form-control" placeholder="0.0 ml">
                    </div>
                    <div class="form-group">
                        <label for="mc_large">Matcha</label>
                        <input type="number" step="any" name="mc_large" id="mc_large" class="form-control" placeholder="0.0 ml">
                    </div>
                    <div class="form-group">
                        <label for="rmt_large">Royal Milk Tea</label>
                        <input type="number" step="any" name="rmt_large" id="rmt_large" class="form-control" placeholder="0.0 ml">
                    </div>
                    <div class="form-group">
                        <label for="cof_large">Coffee</label>
                        <input type="number" step="any" name="cof_large" id="cof_large" class="form-control" placeholder="0.0 ml">
                    </div>
                    <div class="form-group">
                        <label for="choc_large">Choco</label>
                        <input type="number" step="any" name="choc_large" id="choc_large" class="form-control" placeholder="0.0 ml">
                    </div>
                    <div class="form-group">
                        <label for="chs_large">Cheese</label>
                        <input type="number" step="any" name="chs_large" id="chs_large" class="form-control" placeholder="0.0 ml">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <h4 class="my-4">Hot</h4>
                    <div class="form-group">
                        <label for="gtj_hot">Green Tea Jasmine</label>
                        <input type="number" step="any" name="gtj_hot" id="gtj_hot" class="form-control" placeholder="0.0 ml">
                    </div>
                    <div class="form-group">
                        <label for="bt_hot">Black Tea</label>
                        <input type="number" step="any" name="bt_hot" id="bt_hot" class="form-control" placeholder="0.0 ml">
                    </div>
                    <div class="form-group">
                        <label for="qy_hot">Quan Yin</label>
                        <input type="number" step="any" name="qy_hot" id="qy_hot" class="form-control" placeholder="0.0 ml">
                    </div>
                    <div class="form-group">
                        <label for="mc_hot">Matcha</label>
                        <input type="number" step="any" name="mc_hot" id="mc_hot" class="form-control" placeholder="0.0 ml">
                    </div>
                    <div class="form-group">
                        <label for="rmt_hot">Royal Milk Tea</label>
                        <input type="number" step="any" name="rmt_hot" id="rmt_hot" class="form-control" placeholder="0.0 ml">
                    </div>
                    <div class="form-group">
                        <label for="cof_hot">Coffee</label>
                        <input type="number" step="any" name="cof_hot" id="cof_hot" class="form-control" placeholder="0.0 ml">
                    </div>
                    <div class="form-group">
                        <label for="choc_hot">Choco</label>
                        <input type="number" step="any" name="choc_hot" id="choc_hot" class="form-control" placeholder="0.0 ml">
                    </div>
                    <div class="form-group">
                        <label for="chs_hot">Cheese</label>
                        <input type="number" step="any" name="chs_hot" id="chs_hot" class="form-control" placeholder="0.0 ml">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <h3 class="mt-5">Additional</h3><hr>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-3 col-md-3">
                    <div class="form-group">
                        <label for="add_cheese">Add Cheese</label>
                        <input type="number" step="any" name="add_cheese" id="add_cheese" class="form-control" placeholder="0.0 ml">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3">
                    <div class="form-group">
                        <label for="add_stick">Add Stick</label>
                        <input type="number" step="any" name="add_stick" id="add_stick" class="form-control" placeholder="0.0 ml">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <button class="btn btn-block btn-lg btn-danger my-5">Kirim Data</button>
                </div>
            </div>
        </form>
    </div>
    
@endsection