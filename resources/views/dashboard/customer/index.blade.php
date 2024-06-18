@extends('dashboard.layouts.default')
@push('scripts')
    <script>
        $(function() {
            $('#priceInputContainer').hide();
            $('#paidToggle').change(function() {
                $('#priceInputContainer').toggle(this.checked);
            });
        });
    </script>
@endpush
@section('content')
    <div class = "container-fluid">
        <div class = "row">
            <div class = "col-12">
                <div class = "card dz-card" id = "accordion-one">
                    <div class = "card-header flex-wrap">
                        <div>
                            <h4 class = "card-title">Customers</h4>
                        </div>
                    </div>
                    <div class = "card-body pt-0">
                        <div class = "table-responsive">
                            <table id    = "example3" class = "display table datatables-bordered"
                                style = "min-width: 845px;border-spacing: 1rem 1em !important;
                border-collapse: separate;">

                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>email</th>
                                        <th>phone</th>
                                        <th>National Id</th>
                                        <th>Status</th>
                                        <th>Gender</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($customers as $customer)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <img src    = "{{ $customer->image }}" alt = "customer image"
                                                    width = "100px" height = "100px">
                                            </td>
                                            <td>{{ $customer->full_name }}</td>
                                            <td>{{ $customer->email }}</td>
                                            <td>{{ $customer->phone }}</td>
                                            <td>{{ $customer->customerUser?->national_id }}</td>
                                            <td><span
                                                    class="{{ $customer->status['value'] == 1 ? 'text-success' : 'text-danger' }}">
                                                    {{ $customer->status['name'] }}
                                                </span></td>
                                            <td>{{ $customer->gender }}</td>
                                            <td>
                                                <div class="form-switch form-switch-lg mb-3">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="customSwitch{{ $loop->iteration }}"
                                                        {{ $customer->status['value'] == 1 ? 'checked' : '' }}
                                                        onchange="event.preventDefault();
                                                        document.getElementById('status-form-{{ $customer->id }}').submit();">
                                                    <label class="form-check-label"
                                                        for="customSwitch{{ $loop->iteration }}">
                                                        Status
                                                    </label>
                                                    <form action="{{ route('dashboard.customers.update', $customer->id) }}"
                                                        method="POST" id="status-form-{{ $customer->id }}"
                                                        style="display: none;">
                                                        @csrf
                                                        @method('PUT')
                                                        <input type="hidden" name="status"
                                                            value="{{ $customer->status['value'] == 1 ? 0 : 1 }}">
                                                    </form>
                                                </div>
                                                <form action="{{ route('dashboard.customers.destroy', $customer->id) }}"
                                                    method="POST" id="deleteForm-{{ $customer->id }}"
                                                    style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" class="btn btn-danger btn-sm delete-btn"
                                                        onclick="confirmDelete('deleteForm-{{ $customer->id }}', 'You will not be able to recover this product!');">
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
