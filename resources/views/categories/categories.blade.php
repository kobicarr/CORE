@extends('layout.main')
@include('layout.header.header')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <form class="navbar-form navbar-left" method="post" action="{{route('categories.search')}}" role="search">
                    <div class="form-group">
                        <input type="text" name="category-name" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </form>
            </div>
        </div>
        <hr>
    </div>

    <div class="container">
        <div class="row">

            @foreach($categories as $category)
                <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h3><em><a href="{{route('category', ['slug' => $category->slug])}}">{{$category->title}}</a></em></h3></div>
                        <div class="panel-body">
                            <ul>
                                @foreach($category->products as $product)
                                    <li>{{$product->title}}<br> Company: {{$product->company->name}} <br> Price: {{$product->price}} din.</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@include('layout.footer.footer')
@endsection