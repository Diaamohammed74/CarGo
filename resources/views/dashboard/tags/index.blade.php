@extends('dashboard.layouts.default')
@section('title',"Tags")
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card dz-card" id="accordion-one">
                    <div class="card-header flex-wrap">
                        <div>
                            <h4 class="card-title">Tags</h4>
                        </div>
                        <a href="{{ route('dashboard.tags.create') }}" type="button" class="btn btn-primary">Add Tag<span
                                class="btn-icon-end">
                                <i class="fa-solid fa-plus fa-lg"></i>
                            </span>
                        </a>
                    </div>
                    <div class="card-body pt-0">
                        <div class="table-responsive">
                            <table id="example3" class="display table datatables-bordered"
                                style="min-width: 845px;border-spacing: 1rem 1em !important;
                    border-collapse: separate;">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tags as $tag)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                {{ $tag->title }}
                                            </td>
                                            <td>
                                                <a href="{{ route('dashboard.tags.edit', $tag->id) }}" class="btn btn-primary btn-sm">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <form action="{{ route('dashboard.tags.destroy', $tag->id) }}" method="POST" id="deleteForm-{{ $tag->id }}" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" class="btn btn-danger btn-sm delete-btn" onclick="confirmDelete('deleteForm-{{ $tag->id }}', 'You will not be able to recover this tag!');">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                            
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
