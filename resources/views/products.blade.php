@extends('layout')

@section('title', 'Products')

@section('content')

        @if(session('success'))
        <div class="alert alert-success">
        {{ session('success') }}
        </div>
        @endif

    <div class="container products">

        <div class="row">

            @foreach($products as $product)
                <div class="col-xs-18 col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <img src="{{ $product->photo }}" width="500" height="300">
                        <div class="caption">
                            <h5>{{ $product->name }}</h5>
                            <p>{{ str_limit(strtolower($product->description), 40) }}</p>
                            <p><strong>Price: </strong> {{ $product->price }}$</p>
                <p class="btn-holder"><a href="{{ url('add-to-order/'.$product->id) }}"
                    class="btn btn-warning btn-block text-center" role="button">Add to order</a> </p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div><!-- End row -->

    </div>

@endsection
