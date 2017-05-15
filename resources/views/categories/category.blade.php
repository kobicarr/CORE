@extends('layout.main')
@include('layout.header.header')
@section('content')

    <h1><em>{{$category->title}}</em></h1>
    @foreach($category->products as $product)
        <h4><a href="{{route('product', ['proSlug' => $product->slug])}}">{{$product->title}}</a></h4>
    @endforeach

@include('layout.footer.footer')
@endsection