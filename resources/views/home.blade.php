@extends('layout.main')
@include('layout.header.header')
@section('content')

    <div class="row">
        <div class="jumbotron" id="jmb" style="background-image: url('http://www.mycustomer.com/sites/default/files/styles/banner/public/istock_Hong%20Li_online_shop_ecommerce_2.jpg?itok=WFt6Ps3z');
                                               background-size: 100%; height: 450px">
            <div class="container">
                {{--<h1 style="font-family: Corbel; color: #a6e1ec">ECommerce Retail</h1>--}}
                {{--<h2 style="font-family: 'Baskerville Old Face'">Enjoy your stay! </h2>--}}
            </div>
        </div>
    </div>
    <div class="container">
    <div class="row">
        @foreach($categories as $category)
            <div class="col-md-4">

                <h1 style="text-align: center"><a href="{{route('category', ['catSlug' => $category->slug])}}">{{$category->title}}</a></h1>
                <ul>
                    @foreach($category->products as $product)
                        <li><h3><a href="{{route('product', ['$proSlug'=>$product->slug])}}">{{$product->title}}</a></h3>
                            Company: <h5>{{$product->company->name}}</h5>
                            Price: <h6>{{$product->price}} din.</h6>

                        </li>
                    @endforeach
                </ul>
            </div>
        @endforeach
    </div>
    </div>
@include('layout.footer.footer')
@endsection
