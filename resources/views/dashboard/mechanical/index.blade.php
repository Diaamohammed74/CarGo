@extends('dashboard.layouts.default')
@section('content')
    <div class = "container-fluid">
        <div class = "row">
            <div class = "col-12">
                <div class = "card dz-card" id = "accordion-one">
                    <div class = "card-header flex-wrap">
                        <div>
                            <h4 class = "card-title">Mechanicals</h4>
                        </div>
                        <a href  = "{{ route('dashboard.mechanicals.create') }}" type = "button" class = "btn btn-primary">Add
                            Mechanical<span class = "btn-icon-end"><i class = "fa-solid fa-plus fa-lg"></i></span>
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
                                        <th>Name</th>
                                        <th>email</th>
                                        <th>phone</th>
                                        <th>Specialization</th>
                                        <th>join date</th>
                                        <th>birth date</th>
                                        <th>job type</th>
                                        <th>Monthly Salary/city</th>
                                        <th>Status</th>
                                        <th>Gender</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($mechanicals as $mechanical)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $mechanical->full_name }}</td>
                                            <td>{{ $mechanical->email }}</td>
                                            <td>{{ $mechanical->phone }}</td>
                                            <td>{{ $mechanical->mechanicalUser->specialization?->title }}</td>
                                            <td>{{ $mechanical->mechanicalUser->join_date }}</td>
                                            <td>{{ $mechanical->mechanicalUser->birth_date }}</td>
                                            <td>{{ $mechanical->mechanicalUser->job_type['name'] }}</td>
                                            @if ( $mechanical->mechanicalUser->job_type['value']==1)
                                            <td>{{ $mechanical->mechanicalUser->fullTimeJob->monthly_salary }}</td>
                                            @else
                                            <td>{{ $mechanical->mechanicalUser->byOrderJob->city->city_name_en }}</td>
                                            @endif
                                            <td>{{ $mechanical->status['name'] }}</td>
                                            <td>{{ $mechanical->gender }}</td>
                                            <td><img src    = "{{ $mechanical->image }}" alt = "" width = "100px"
                                                    height = "100px"></td>
                                            <td>
                                                <a href  = "{{ route('dashboard.mechanicals.edit', $mechanical->id) }}"
                                                    class = "btn btn-primary btn-sm">
                                                    <i class = "fas fa-edit"></i>
                                                </a>
                                                <form action = "{{ route('dashboard.mechanicals.destroy', $mechanical->id) }}"
                                                    method = "POST" id = "deleteForm-{{ $mechanical->id }}"
                                                    style  = "display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type    = "button" class = "btn btn-danger btn-sm delete-btn"
                                                        onclick = "confirmDelete('deleteForm-{{ $mechanical->id }}', 'You will not be able to recover this product!');">
                                                        <i class   = "fas fa-trash"></i>
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
