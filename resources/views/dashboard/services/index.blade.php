@extends('dashboard.layouts.default')
@section('content')
    <div class = "container-fluid">
        <div class = "row">
            <div class = "col-12">
                <div class = "card dz-card" id = "accordion-one">
                    <div class = "card-header flex-wrap">
                        <div>
                            <h4 class = "card-title">Service Category</h4>
                        </div>
                        <a href  = "{{ route('dashboard.services.create') }}" type = "button"
                            class = "btn btn-primary">Add Service<span class = "btn-icon-end"><i
                                    class                                   = "fas fa-book fa-lg"></i></span>
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
                                        <th>Price</th>
                                        <th>Specialization</th>
                                        <th>Image</th>
                                        <th>Category</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>


                                <tbody>
                                    @foreach ($services as $service)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $service->title }}</td>
                                            <td>{{ $service->price }}</td>
                                            <td>{{ $service->specialization->title }}</td>
                                            <td><img src = "{{$service->image}}" alt = ""
                                                    width = "100px" height = "100px"></td> 
                                            <td>{{ $service->category->title }}</td>
                                            <td>{{ Str::limit($service->description, 50) }}</td>
                                            <td>
                                                <form action="{{ route('dashboard.tags.destroy', $service->id) }}" method="POST" id="deleteForm-{{ $service->id }}" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" class="btn btn-danger btn-sm delete-btn" onclick="confirmDelete('deleteForm-{{ $service->id }}', 'You will not be able to recover this Service!');">
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
