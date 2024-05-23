@extends('dashboard.layouts.default')
@push('styles')
    <link rel = "stylesheet"
        href = "https://cdnjs.cloudflare.com/ajax/libs/fontawesome-iconpicker/3.2.0/css/fontawesome-iconpicker.min.css"
        integrity = "sha512-BfgviGirSi7OFeVB2z9bxp856rzU1Tyy9Dtq2124oRUZSKXIQqpy+2LPuafc2zMd8dNUa+F7cpxbvUsZZXFltQ=="
        crossorigin = "anonymous" referrerpolicy = "no-referrer" />
    <style>
        .toggle.ios,
        .toggle-on.ios,
        .toggle-off.ios {
            border-radius: 20px;
        }

        .toggle.ios .toggle-handle {
            border-radius: 20px;
        }
    </style>
    <style>
        .iconpicker-item .iconpicker-selected .bg-primary {
            color: #0A142F !important;
        }
    </style>
@endpush
@section('content')
    <div class = "container-fluid">
        <div class = "row">
            <div class = "col-12">
                <div class = "card dz-card" id = "accordion-one">
                    <div class = "card-header flex-wrap">
                        <div>
                            <h4 class = "card-title">ِAdd product Categroy</h4>
                        </div>
                    </div>
                    <div class  = "card-body pt-0">
                        <div class  = "basic-form">
                            <form action = "{{route('dashboard.product-categories.store')  }}" method = "post"
                                enctype = "multipart/form-data">
                                @csrf
                                <div class = "row">
                                    <div class = "mb-3 col-md-12">
                                        <label class = "form-label">Name</label>
                                        <input type  = "text" class = "form-control" placeholder = "Name" name = "title"
                                            value="{{ old('title') }}">
                                        @error('title')
                                            <div class = "alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <button type = "submit" class = "btn btn-primary">Add</button>
                            </form>
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
