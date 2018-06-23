@extends('layouts.master')
@section('content')
    @include('layouts.navbar')
    <div class="container-fluid">
        <div class="row py-4">
            <div class="col-md-8 offset-3">
                <h3 class="text-uppercase">Tambah data produk</h3><hr>
                <recipe-form></recipe-form>
            </div>
        </div>
    </div>
@endsection