@extends('dashboard.layouts.default')
@section('content')
    <div class = "container-fluid">
        <div class = "row">
            <div class = "col-12">
                <div class = "card dz-card" id = "accordion-one">
                    <div class = "card-header flex-wrap">
                        <div>
                            <h4 class = "card-title">CarGo Clips</h4>
                        </div>
                        <a href  = "{{ route('dashboard.videos.create') }}" type = "button" class = "btn btn-primary">Add
                            Clip<span class = "btn-icon-end"><i
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
                                        <th>Clip preview</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($videos as $videos)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $videos->title }}</td>
                                            <td>{{ Str::limit($videos->description, 50) }}</td>
                                            <td>{{ $videos->category->title }}</td>
                                            <td>{{ $videos->price }}</td>
                                            <td>
                                                <video width="320" height="240" controls>
                                                    <source src="{{ $videos->video }}" type="video/mp4">
                                                    Your browser does not support the video tag.
                                                </video>
                                            </td>
                                            <td>
                                                <a href="{{ route('dashboard.videos.edit', $videos->id) }}"
                                                    class="btn btn-primary btn-sm">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <form action="{{ route('dashboard.videos.destroy', $videos->id) }}"
                                                    method="POST" id="deleteForm-{{ $videos->id }}"
                                                    style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" class="btn btn-danger btn-sm delete-btn"
                                                        onclick="confirmDelete('deleteForm-{{ $videos->id }}', 'You will not be able to recover this product!');">
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
