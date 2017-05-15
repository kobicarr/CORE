@extends('layout.main')
@include('layout.header.header')
@section('content')


    <div class="container">
        <h1>{{$company->name}}</h1>
        @foreach($company->products as $product)
            <h3><a href="{{route('product', ['proSlug' => $product->slug])}}">{{$product->title}}</a></h3>
        @endforeach
    </div>

    @include('layout.footer.footer')
@endsection