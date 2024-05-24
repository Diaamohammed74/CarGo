<?php use App\Enums\CoursePaymentMethod;
?>
@extends('dashboard.layouts.default')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card dz-card" id="accordion-one">
                    <div class="card-header flex-wrap">
                        <div>
                            <h4 class="card-title">Specializations</h4>
                        </div>
                        <a href="{{ route('dashboard.specializations.create') }}" type="button" class="btn btn-primary">Add Specialization <span
                                class="btn-icon-end"><i class="fas fa-book fa-lg"></i></span>
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
                                    @foreach ($specializations as $specialization)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                {{ $specialization->title }}
                                            </td>
                                            <td>
                                                <a href="{{ route('dashboard.specializations.edit', $specialization->id) }}" class="btn btn-primary btn-sm">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <form action="{{ route('dashboard.tags.destroy', $specialization->id) }}" method="POST" id="deleteForm-{{ $specialization->id }}" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" class="btn btn-danger btn-sm delete-btn" onclick="confirmDelete('deleteForm-{{ $specialization->id }}', 'You will not be able to recover this specialization!');">
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
