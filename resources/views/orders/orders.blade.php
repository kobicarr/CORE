@extends('layout.main')
@include('layout.header.header')
@section('content')


    @foreach($user->orders as $order)
        <h1><a href="{{route('product',['proSlug' => $order->slug])}}">{{$order->title}}</a></h1>
    @endforeach

@include('layout.footer.footer')
@endsection