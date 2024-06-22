@extends('front.partials.master')
@section('title', 'CarGo | Services')
@section('style-sheet')
    <link rel="stylesheet" href="{{ asset('assets-front/css/style_ser.css') }}" />


@endsection
@section('content')

<section class="side">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 col-sm-12 bar d-flex flex-column">
                <!-- Content for the "bar" section -->
                <br>
                @foreach ($categories as $category)
                    <a href="{{ route('services.index', ['service_category_id' => $category->id]) }}" class="act">{{ $category->title }}</a>
                @endforeach
            </div>
            <div class="col-md-9 col-sm-12">
                <!-- Content for the "Search" section -->
                <div class="search">
                    <div class="input-group">
                        <button type="button" class="btn" data-mdb-ripple-init>
                            <i class="fas fa-search"></i>
                        </button>
                        <div class="form">
                            <input type="search" id="form1" class="form-control" placeholder="Search Anything..." />
                        </div>
                    </div>
                </div>
                <br>
                <div class="service">
                    <div class="row">
                        <div class="col-md-11">
                            @foreach ($services as $index => $service)
                            <div class="ser">
                                <div class="list">
                                    <img src="{{$service->image}}" alt="" srcset="">
                                    <p>Xenon Headlights
                                        <br>$725
                                    </p>
                                </div>
                                <div class="list">
                                    <button class="btn cart animate__animated animate__flash" onclick="window.location.href='{{route('order.create')}}'">Book Now</button>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
