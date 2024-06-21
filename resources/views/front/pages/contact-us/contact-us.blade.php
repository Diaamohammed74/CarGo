@extends('front.partials.master')
@section('title', 'Contact us')
@section('style-sheet')
    <link rel="stylesheet" href="{{ asset('assets-front/css/style_contact.css') }}" />
@endsection
@section('content')
    <section class="contact">
        <div class="container">
            <div class="row g-3">
                <div class="col-lg-6 col-md-12 col-sm-12 live">
                    <h3 class="text-1">Contact Us</h3>
                    <form action="{{ route('contactUsStore') }}" method="POST" class="mt-3">
                        @csrf
                        <div class="row">
                            <div class="form-group  mb-4">
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="First name" />
                                @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-outline  mb-4">
                                <input type="email" id="email" class="form-control form-control-lg @error('email') is-invalid @enderror" value="{{ old('email') }}" name="email" placeholder="Your email" />
                                @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-outline mb-4">
                                <input type="text" id="phone" class="form-control form-control-lg @error('phone') is-invalid @enderror" value="{{ old('phone') }}" name="phone" placeholder="phone" />
                                @error('phone')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-outline mb-4">
                                <input type="text" id="subject" class="form-control form-control-lg @error('subject') is-invalid @enderror" value="{{ old('subject') }}" name="subject" placeholder="subject" />
                                @error('subject')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-20">
                                <textarea class="form-control @error('message') is-invalid @enderror" name="message" rows="5" placeholder="Enter your message here">{{ old('message') }}</textarea>
                                @error('message')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="submit d-flex justify-content-start mt-2">
                                <button class="btn text-light w-50 text-center" type="submit"
                                    style="background: rgba(0, 124, 238, 1)">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="images d-flex flex-column">
                        <div class="img-1">
                            <img src="{{ asset('assets-front/images/Ellipse 177 (1).png') }}" alt=""
                                srcset="" class="w-100" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection