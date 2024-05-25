@extends('dashboard.layouts.default')
@push('styles')
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/fontawesome-iconpicker/3.2.0/css/fontawesome-iconpicker.min.css"
        integrity="sha512-BfgviGirSi7OFeVB2z9bxp856rzU1Tyy9Dtq2124oRUZSKXIQqpy+2LPuafc2zMd8dNUa+F7cpxbvUsZZXFltQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
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
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card dz-card" id="accordion-one">
                    <div class="card-header flex-wrap">
                        <div>
                            <h4 class="card-title">Edit Product</h4>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="basic-form">
                            <form action = "{{ route('dashboard.products.update', $product->id) }}" method = "post"
                                enctype = "multipart/form-data">
                                @csrf
                                @method('put')
                                <div class = "row">
                                    <div class = "mb-3 col-md-6">
                                        <label class = "form-label">Name</label>
                                        <input type  = "text" class = "form-control" placeholder = "Name" name = "title"
                                            value="{{ $product->title }}">
                                        <x-input-error :messages="$errors->get('title')" class="mt-2" />
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Category</label>
                                        <div class="dropdown bootstrap-select default-select form-control wide">
                                            <select id="inputState" class="default-select form-control wide" tabindex="null"
                                                name="product_category_id">
                                                <option value="">Choose...</option>
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}"
                                                        {{ $product->product_category_id == $category->id ? 'selected' : '' }}>
                                                        {{ $category->title }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            <x-input-error :messages="$errors->get('product_category_id')" class="mt-2" />
                                        </div>
                                    </div>
                                    <div class="mb-3 col-md-12">
                                        <label class="form-label">Description</label>
                                        <textarea class="form-txtarea form-control" rows="4" id="comment" name="description">{{ $product->description }}</textarea>
                                        <x-input-error :messages="$errors->get('description')" class="mt-2" />
                                    </div>
                                    <div class = "mb-3 col-md-6">
                                        <label class = "form-label">Price</label>
                                        <input type  = "numeric" class = "form-control" placeholder = "price" name ="price"
                                            value="{{ $product->price }}">
                                        <x-input-error :messages="$errors->get('price')" class="mt-2" />
                                    </div>
                                    <div class = "mb-3 col-md-6">
                                        <label class = "form-label">Quantity</label>
                                        <input type  = "numeric" class = "form-control" placeholder = "quantity"
                                            name ="quantity" value="{{ $product->quantity }}">
                                        <x-input-error :messages="$errors->get('quantity')" class="mt-2" />
                                    </div>

                                    <div class="mb-3 col-md-12">
                                        <label class="form-label">Image</label>
                                        <input class="form-control" type="file" name="image" id="imageInput">
                                        <x-input-error :messages="$errors->get('image')" class="mt-2" />
                                        <div class="mt-2">
                                            <img id="imagePreview" src="#" alt="Image Preview"
                                                style="display: none; max-width: 100%; height: auto;">
                                        </div>
                                    </div>
                                </div>
                                <button type = "submit" class = "btn btn-primary">Update</button>
                            </form>
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
