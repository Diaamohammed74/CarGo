@extends('dashboard.layouts.default')
@section('title',"Service Categories")
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card dz-card" id="accordion-one">
                    <div class="card-header flex-wrap">
                        <div>
                            <h4 class="card-title">Service Category</h4>
                        </div>
                        <a href="{{ route('dashboard.service-categories.create') }}" type="button" class="btn btn-primary">Add Service Categroy<span
                                class="btn-icon-end"><i class="fa-solid fa-plus fa-lg"></i></span>
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
                                    @foreach ($serviceCategories as $serviceCategory)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                {{ $serviceCategory->title }}
                                            </td>
                                            <td>
                                                <a href="{{ route('dashboard.service-categories.edit', $serviceCategory->id) }}" class="btn btn-primary btn-sm">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <form action="{{ route('dashboard.service-categories.destroy', $serviceCategory->id) }}" method="POST" id="deleteForm-{{ $serviceCategory->id }}" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" class="btn btn-danger btn-sm delete-btn" onclick="confirmDelete('deleteForm-{{ $serviceCategory->id }}', 'You will not be able to recover this Category!');">
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
