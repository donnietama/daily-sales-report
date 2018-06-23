@extends('layouts.master')
@section('content')

    @include('layouts.navbar')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="mt-5">Export PDF</h1>
                <p>Silahkan masukkan periode tanggal dan outlet yang ingin ditarik datanya.</p>
                <form action="{{ route('export-pdf') }}" action="POST" class="form-inline my-5">
                    @include('layouts.utilities.filter-engine')
                    <button class="btn btn-danger ml-1">Export</button>
                </form>
            </div>
        </div>
    </div>
    
@endsection