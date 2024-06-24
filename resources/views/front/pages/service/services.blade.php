@extends('front.partials.master')
@section('title', 'CarGo | Services')
@section('style-sheet')
    <link rel="stylesheet" href="{{ asset('assets-front/css/style_ser.css') }}" />


@endsection
@section('content')

<section class="side">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-12">
                <div class="bar d-flex flex-column"><h6 class="fw-bold bar-header mb-0">Categories</h6>
                @foreach ($categories as $category)
                    <a href="{{ route('services.index', ['service_category_id' => $category->id]) }}" class="act">{{ $category->title }}</a>
                @endforeach</div>
            </div>
            <div class="col-xl-10 col-lg-9 col-md-8 col-sm-12">
                <!-- Content for the "Search" section -->
                <div class="p-4">
                    <div class=" d-flex justify-content-end">
                        <form method="get" action="{{ route('services.index') }}" class="search mb-4 w-100">
                            <div class="input-group flex-nowrap">
                                <button type="submit" class="btn" data-mdb-ripple-init>
                                    <i class="fas fa-search"></i>
                                </button>
                                <input type="search" name="search" class="form-control" value="{{old('search')}}" placeholder="Search Anything..." />
                            </div>
                        </form>
                    </div>
                    <div class="service">
                        <div class="row ">
                            @forelse ($services as $index => $service)
                            <div class="col-lg-3 col-md-6 col-sm-12 rounded mb-5">
                                <div class="service_image w-100">
                                    <img src="{{$service->image}}" alt="" class="w-100" />
                                    <div class="service_description d-flex justify-content-end flex-column p-3">
                                        <div>
                                            <h3 class="main_text" style="color: white">{{ Str::limit($service->title, 20) }}</h3>
                                            <p class="main_text mb-0" style="color: white">{{ $service->price }} EGP</p>
                                        </div>
                                        <div class="book_btn d-flex justify-content-center mt-3 px-4 py-2 border mx-auto rounded-2" style="width: fit-content;">
                                            <a href="{{route('order.create')}}" class="main_text d-flex gap-2 align-items-center text-decoration-none" style="color: white">
                                                Book Now
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @empty
                                <h2 class="text-center my-5">No services available at the moment. Please check back later.</h2>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
