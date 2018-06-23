@extends('layouts.master')
@section('content')
    @include('layouts.navbar')
    <div class="container-fluid">
        <div class="row py-4">
            <div class="col-md-8 offset-3">
                <h3 class="text-uppercase">Tambah data produk</h3><hr>
                <form action="#" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="product_name">Nama produk</label>
                                <input type="text" name="product_name" id="product_name" class="form-control" placeholder="Nama produk">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="ingredient">Komposisi</label>
                                <input type="text" name="ingredient" id="ingredient" class="form-control" placeholder="Komposisi">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="quantity">Kuantitas</label>
                                <input type="number" name="quantity" id="quantity" class="form-control" placeholder="Kuantitas">
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection