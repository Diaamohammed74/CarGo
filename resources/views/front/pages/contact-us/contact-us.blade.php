@extends('front.partials.master')
@section('style-sheets')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="{{ asset('assets-front/css/style_contact.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-front/css/bootstrap.min.css') }}">
@endsection
@section('content')
    <section class="contact">
        <div class="container">
            <div class="row gy-3 gy-md-4 gy-lg-0">
                <div class="col-12 col-lg-6">
                    <h3 class="text-1">Contact Us</h3>
                </div>
            </div>
            <div class="row live gy-3 gy-md-4 gy-lg-0">
                <div class="col-12 col-lg-6">
                    <div class="d-flex justify-content-between chat">
                        <p class="text-2">Chat With Our Representatives</p>
                        <button class="btn">Live Chat</button>
                    </div>
                </div>
                <div class="col-12 col-lg-6 postion-relative im">
                    <div class="d-flex chat">
                        <div class="images d-flex">
                            <div class="img-1">
                                <img src="{{ asset('assets-front/images/Ellipse 177 (1).png') }}" alt=""
                                    srcset="">
                            </div>
                            <div class="img-2">
                                <img src="{{ asset('assets-front/images/Ellipse 176 (1).png') }}" alt=""
                                    srcset="">
                            </div>

                            <div class="img-3">
                                <img src="{{ asset('assets-front/images/Ellipse 176 (1).png') }}" alt=""
                                    srcset="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row live gy-3 gy-md-4 gy-lg-0">
                <div class="col-12 col-lg-6">
                    <div class="d-flex justify-content-between chat">
                        <p class="text-2">Hot Line</p>
                        <button class="btn line">01115511851</button>
                    </div>
                </div>
            </div>
            <div class="row live gy-3 gy-md-4 gy-lg-0">
                <div class="col-12 col-lg-6">
                    <form action="{{ route('contactUsStore') }}" method="POST">
                        @csrf
                        <div class="row">
                            <!-- Name Input -->
                            <div class="form-group mb-4 col-12">
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Your name" value="{{ old('name') }}">
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <!-- Email Input -->
                            <div class="form-group mb-4 col-12">
                                <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Your email" value="{{ old('email') }}">
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                    
                            <!-- Subject Input -->
                            <div class="form-group mb-4 col-12">
                                <input type="text" name="subject" class="form-control @error('subject') is-invalid @enderror" placeholder="Subject" value="{{ old('subject') }}">
                                @error('subject')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                    
                            <!-- Message Textarea -->
                            <div class="form-group mb-4 col-12">
                                <textarea class="form-control @error('message') is-invalid @enderror" rows="5" name="message" placeholder="Enter your message here">{{ old('message') }}</textarea>
                                @error('message')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                    
                            <!-- Submit Button -->
                            <div class="submit d-flex justify-content-end">
                                <button class="btn btn-info" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </section>
@endsection
