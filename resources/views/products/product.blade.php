@extends('layout.main')
@include('layout.header.header')
@section('content')
    <h1>{{$product->title}}</h1>
    {{$product->created_at}}

    @include('layout.footer.footer')
@endsection