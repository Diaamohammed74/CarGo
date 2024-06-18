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
    <div class = "container-fluid">
        <div class = "row">
            <div class = "col-12">
                <div class = "card dz-card" id = "accordion-one">
                    <div class = "card-header flex-wrap">
                        <div>
                            <h4 class = "card-title">Edit Mechanical</h4>
                        </div>
                    </div>
                    <div class  = "card-body pt-0">
                        <div class  = "basic-form">
                            <form action="{{ route('dashboard.mechanicals.update', $mechanical->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class = "row">
                                    <div class = "mb-3 col-md-6">
                                        <label class = "form-label">First Name</label>
                                        <input type  = "text" class = "form-control" placeholder = "First Name"
                                            name = "first_name" value="{{ $mechanical->first_name }}">
                                        <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
                                    </div>
                                    <div class = "mb-3 col-md-6">
                                        <label class = "form-label">Last Name</label>
                                        <input type  = "text" class = "form-control" placeholder = "First Name"
                                            name = "last_name" value="{{ $mechanical->last_name }}">
                                        <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
                                    </div>


                                    <div class = "mb-3 col-md-6">
                                        <label class = "form-label">Email</label>
                                        <input type  = "email" class = "form-control" placeholder = "Email" name = "email"
                                            value="{{ $mechanical->email }}">
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>
                                    <div class = "mb-3 col-md-6">
                                        <label class = "form-label">Phone</label>
                                        <input type  = "text" class = "form-control" placeholder = "Phone" name = "phone"
                                            value="{{ $mechanical->phone }}">
                                        <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                                    </div>

                                    <div class = "mb-3 col-md-6">
                                        <label class = "form-label">Password</label>
                                        <input type  = "password" class = "form-control" placeholder = "Password"
                                            name = "password" value="{{ old('password') }}">
                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Image</label>
                                        <input class="form-control" type="file" name="image" id="imageInput">
                                        <x-input-error :messages="$errors->get('image')" class="mt-2" />
                                        <div class="mt-2">  
                                            <img id="imagePreview" src="#" alt="Image Preview"
                                                style="display: none; max-width: 100%; height: auto;">
                                        </div>
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Job type</label>
                                        <select class="form-select" name="job_type" id="jobType">
                                            <option value="{{ $mechanical->mechanicalUser->job_type['value'] }}" selected>
                                                {{ $mechanical->mechanicalUser->job_type['name'] }}
                                            </option>
                                        </select>
                                        <x-input-error :messages="$errors->get('job_type')" class="mt-2" />
                                    </div>
                                    @if ($mechanical->mechanicalUser->job_type['value'] == 1)
                                        <div class="mb-3 col-md-6" id="monthlySalaryDiv"
                                            style="display: {{ $mechanical->mechanicalUser->job_type == App\Enums\MechanicalJobType::FullTime->value ? 'block' : 'none' }}">
                                            <label class="form-label">Monthly Salary</label>
                                            <input type="number" class="form-control" placeholder="Monthly salary"
                                                name="monthly_salary"
                                                value="{{ $mechanical->mechanicalUser->fullTimeJob?->monthly_salary }}">
                                            <x-input-error :messages="$errors->get('monthly_salary')" class="mt-2" />
                                        </div>
                                    @else
                                        <div class="mb-3 col-md-6" id="cityDiv"
                                            style="display: {{ $mechanical->mechanicalUser->job_type['value'] == App\Enums\MechanicalJobType::ByOrder->value ? 'block' : 'none' }}">
                                            <label class="form-label">City</label>
                                            <select class="form-select" name="city_id">
                                                <option value="0">Choose City</option>
                                                @foreach ($cities as $city)
                                                    <option value="{{ $city->id }}"
                                                        {{ $mechanical->mechanicalUser->byOrderJob->city_id == $city->id ? 'selected' : '' }}>
                                                        {{ $city->city_name_en }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            <x-input-error :messages="$errors->get('city_id')" class="mt-2" />
                                        </div>
                                    @endif


                                    <div class = "mb-3 col-md-6">
                                        <label class = "form-label">Status</label>
                                        <select class = "form-select" name = "status">
                                            @foreach (App\Enums\StatusEnum::cases() as $status)
                                                <option value="{{ $status }}"
                                                    {{ $mechanical->status['value'] == $status->value ? 'selected' : '' }}>
                                                    {{ $status->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        <x-input-error :messages="$errors->get('status')" class="mt-2" />
                                    </div>
                                    <div class = "mb-3 col-md-6">
                                        <label class = "form-label">Gender</label>
                                        <select class = "form-select" name = "gender">
                                            @foreach (['male' => 'Male', 'female' => 'Female'] as $gender => $label)
                                                <option value = "{{ $gender }}"
                                                    {{ $mechanical->mechanicalUser->gender == $gender ? 'selected' : '' }}>
                                                    {{ $label }}
                                                </option>
                                            @endforeach
                                        </select>
                                        <x-input-error :messages="$errors->get('gender')" class="mt-2" />
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Specialization</label>
                                        <select class="form-select" name="specialization_id">
                                            <option selected disabled>Choose Specialization</option>
                                            @foreach ($specializations as $specialization)
                                                <option value="{{ $specialization->id }}"
                                                    {{ $mechanical->mechanicalUser->specialization_id == $specialization->id ? 'selected' : '' }}>
                                                    {{ $specialization->title }}
                                                </option>
                                            @endforeach
                                        </select>
                                        <x-input-error :messages="$errors->get('specialization_id')" class="mt-2" />
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="join-date" class="form-label">Join Date</label>
                                        <input id="join-date" type="date" class="form-control" name="join_date"
                                            value="{{ $mechanical->mechanicalUser->join_date }}">
                                        <x-input-error :messages="$errors->get('join_date')" class="mt-2" />
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="birth-date" class="form-label">Birth Date</label>
                                        <input id="birth-date" type="date" class="form-control" name="birth_date"
                                            value="{{ old('birth_date', $mechanical->mechanicalUser->birth_date) }}">
                                        <x-input-error :messages="$errors->get('birth_date')" class="mt-2" />
                                    </div>
                                    <div class="mb-3 col-md-12">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const jobTypeSelect = document.getElementById('jobType');
            const monthlySalaryDiv = document.getElementById('monthlySalaryDiv');
            const cityDiv = document.getElementById('cityDiv');

            function toggleFields() {
                const jobType = jobTypeSelect.value;
                if (jobType == "{{ App\Enums\MechanicalJobType::FullTime->value }}") {
                    monthlySalaryDiv.style.display = 'block';
                    cityDiv.style.display = 'none';
                } else if (jobType == "{{ App\Enums\MechanicalJobType::ByOrder->value }}") {
                    monthlySalaryDiv.style.display = 'none';
                    cityDiv.style.display = 'block';
                } else {
                    monthlySalaryDiv.style.display = 'none';
                    cityDiv.style.display = 'none';
                }
            }
            jobTypeSelect.addEventListener('change', toggleFields);
            toggleFields();
        });
    </script>
@endsection
