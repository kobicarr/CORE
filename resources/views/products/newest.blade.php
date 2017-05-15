@extends('layout.main')
@include('layout.header.header')
@section('content')
<div class="container">
    <div class="row">
        @foreach($newestProducts as $product)
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <em><a href="{{route('product', ['proSlug'=>$product->slug])}}">{{$product->title}}</a></em>
                    </div>
                    <div class="panel-body">
                        <h3>{{$product->price}} din.</h3>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

    @include('layout.footer.footer')
@endsection