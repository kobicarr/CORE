@extends('layout.main')
@include('layout.header.header')
@section('content')


    <div class="container">
        @foreach($companies as $company)
            <h1><a href="{{route('company', ['comSlug' => $company->slug])}}">{{$company->name}}</a></h1>
        @endforeach
    </div>

    @include('layout.footer.footer')
@endsection