@extends('dashboard.layouts.default')
@section('content')
    <div class = "container-fluid">
        <div class = "row">
            <div class = "col-12">
                <div class = "card dz-card" id = "accordion-one">
                    <div class = "card-header flex-wrap">
                        <div>
                            <h4 class = "card-title">Product</h4>
                        </div>
                        <a href  = "{{ route('dashboard.videos.create') }}" type = "button" class = "btn btn-primary">Add
                            Product<span class = "btn-icon-end"><i
                                    class                                   = "fa-solid fa-plus fa-lg"></i></span>
                        </a>
                    </div>
                    <div class = "card-body pt-0">
                        <div class = "table-responsive">
                            <table id    = "example3" class = "display table datatables-bordered"
                                style = "min-width: 845px;border-spacing: 1rem 1em !important;
                border-collapse: separate;">


                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Category</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($products as $product)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $product->title }}</td>
                                            <td>{{ Str::limit($product->description, 50) }}</td>
                                            <td>{{ $product->category->title }}</td>
                                            <td>{{ $product->price }}</td>
                                            <td>{{ $product->quantity }}</td>
                                            <td><img src = "{{ $product->image }}" alt = "" width = "100px"
                                                    height = "100px"></td>
                                            <td>
                                                <a href="{{ route('dashboard.products.edit', $product->id) }}"
                                                    class="btn btn-primary btn-sm">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <form action="{{ route('dashboard.products.destroy', $product->id) }}"
                                                    method="POST" id="deleteForm-{{ $product->id }}"
                                                    style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" class="btn btn-danger btn-sm delete-btn"
                                                        onclick="confirmDelete('deleteForm-{{ $product->id }}', 'You will not be able to recover this product!');">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
