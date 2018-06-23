@extends('layouts.master')
@section('content')
    
    @include('layouts.navbar')

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <form action="/report/search" action="POST" class="form-inline my-5">
                    @include('layouts.utilities.filter-engine')
                    <button class="btn btn-danger ml-1">Search</button>
                    <a href="{{ route('to-pdf') }}" class="btn btn-danger ml-1">Export PDF</a>
                    <a href="{{ route('to-excel') }}" class="btn btn-danger ml-1">Export Excel</a>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <div class="list-group mb-5" id="list-tab" role="tablist">
                    <a class="list-group-item list-group-item-action active" id="list-summary-list" data-toggle="list" href="#list-summary" role="tab" aria-controls="summary">Summary</a>
                    <a class="list-group-item list-group-item-action" id="list-averages-list" data-toggle="list" href="#list-averages" role="tab" aria-controls="averages">Averages</a>
                    <a class="list-group-item list-group-item-action" id="list-inprocess-list" data-toggle="list" href="#list-inprocess" role="tab" aria-controls="inprocess">In Process</a>
                    <a class="list-group-item list-group-item-action" id="list-waste-list" data-toggle="list" href="#list-waste" role="tab" aria-controls="waste">Waste</a>

                    <a class="list-group-item list-group-item-action" id="list-product-sold-list" data-toggle="collapse" data-target="#collapseProduct" href="#list-product-sold" role="tab" aria-controls="collapseProduct">Product Sold</a>


                    <div id="collapseProduct" class="collapse">
                        <div class="list-group" id="list-tab" role="tablist">
                            <a class="list-group-item list-group-item-action pl-5" id="list-green-tea-jasmine-list" data-toggle="list" href="#list-green-tea-jasmine" role="tab" aria-controls="green-tea-jasmine">Green Tea Jasmine</a>
                            <a class="list-group-item list-group-item-action pl-5" id="list-black-tea-list" data-toggle="list" href="#list-black-tea" role="tab" aria-controls="black-tea">Black Tea</a>
                            <a class="list-group-item list-group-item-action pl-5" id="list-quan-yin-list" data-toggle="list" href="#list-quan-yin" role="tab" aria-controls="quan-yin">Quan Yin</a>
                            <a class="list-group-item list-group-item-action pl-5" id="list-matcha-list" data-toggle="list" href="#list-matcha" role="tab" aria-controls="matcha">Matcha</a>
                            <a class="list-group-item list-group-item-action pl-5" id="list-royal-milk-tea-list" data-toggle="list" href="#list-royal-milk-tea" role="tab" aria-controls="royal-milk-tea">Royal Milk Tea</a>
                            <a class="list-group-item list-group-item-action pl-5" id="list-coffee-list" data-toggle="list" href="#list-coffee" role="tab" aria-controls="coffee">Coffee</a>
                            <a class="list-group-item list-group-item-action pl-5" id="list-choco-list" data-toggle="list" href="#list-choco" role="tab" aria-controls="choco">Choco</a>
                            <a class="list-group-item list-group-item-action pl-5" id="list-cheese-list" data-toggle="list" href="#list-cheese" role="tab" aria-controls="cheese">Cheese</a>
                            <a class="list-group-item list-group-item-action pl-5" id="list-additional-list" data-toggle="list" href="#list-additional" role="tab" aria-controls="additional">Additional</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-8">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="list-summary" role="tabpanel" aria-labelledby="list-summary-list">
                        @include('layouts.tables.summary')
                    </div>
                    <div class="tab-pane fade" id="list-averages" role="tabpanel" aria-labelledby="list-averages-list">
                        @include('layouts.tables.averages')
                    </div>
                    <div class="tab-pane fade" id="list-inprocess" role="tabpanel" aria-labelledby="list-inprocess-list">
                        @include('layouts.tables.inprocess')
                    </div>
                    <div class="tab-pane fade" id="list-waste" role="tabpanel" aria-labelledby="list-waste-list">
                        @include('layouts.tables.waste')
                    </div>
                    <div class="tab-pane fade" id="list-green-tea-jasmine" role="tabpanel" aria-labelledby="list-green-tea-jasmine-list">
                        @include('layouts.tables.sold.green-tea-jasmine')
                    </div>
                    <div class="tab-pane fade" id="list-black-tea" role="tabpanel" aria-labelledby="list-black-tea-list">
                        @include('layouts.tables.sold.black-tea')
                    </div>
                    <div class="tab-pane fade" id="list-quan-yin" role="tabpanel" aria-labelledby="list-quan-yin-list">
                        @include('layouts.tables.sold.quan-yin')                        
                    </div>
                    <div class="tab-pane fade" id="list-matcha" role="tabpanel." aria-labelledby="list-matcha-list">
                        @include('layouts.tables.sold.matcha')
                    </div>
                    <div class="tab-pane fade" id="list-royal-milk-tea" role="tabpanel" aria-labelledby="list-royal-milk-tea-list">
                        @include('layouts.tables.sold.royal-milk-tea')
                    </div>
                    <div class="tab-pane fade" id="list-coffee" role="tabpanel" aria-labelledby="list-coffee-list">
                        @include('layouts.tables.sold.coffee')
                    </div>
                    <div class="tab-pane fade" id="list-choco" role="tabpanel" aria-labelledby="list-choco-list">
                        @include('layouts.tables.sold.choco')
                    </div>
                    <div class="tab-pane fade" id="list-cheese" role="tabpanel" aria-labelledby="list-cheese-list">
                        @include('layouts.tables.sold.cheese')
                    </div>
                    <div class="tab-pane fade" id="list-additional" role="tabpanel" aria-labelledby="list-additional-list">
                        @include('layouts.tables.additional')
                    </div>
                </div>
                @include('layouts.utilities.pagination')
            </div>
        </div>
    </div>

@endsection