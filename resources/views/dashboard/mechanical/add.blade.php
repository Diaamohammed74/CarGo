@extends('dashboard.layouts.default')
@push('styles')
    <link rel = "stylesheet"
        href = "https://cdnjs.cloudflare.com/ajax/libs/fontawesome-iconpicker/3.2.0/css/fontawesome-iconpicker.min.css"
        integrity = "sha512-BfgviGirSi7OFeVB2z9bxp856rzU1Tyy9Dtq2124oRUZSKXIQqpy+2LPuafc2zMd8dNUa+F7cpxbvUsZZXFltQ=="
        crossorigin = "anonymous" referrerpolicy = "no-referrer" />
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
                            <h4 class = "card-title">Add Mechanical</h4>
                        </div>
                    </div>
                    <div class  = "card-body pt-0">
                        <div class  = "basic-form">
                            <form action="{{ route('dashboard.mechanicals.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class = "row">
                                    <div class = "mb-3 col-md-6">
                                        <label class = "form-label">First Name</label>
                                        <input type  = "text" class = "form-control" placeholder = "First Name"
                                            name = "first_name" value="{{ old('first_name') }}">
                                        <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
                                    </div>
                                    <div class = "mb-3 col-md-6">
                                        <label class = "form-label">Last Name</label>
                                        <input type  = "text" class = "form-control" placeholder = "First Name"
                                            name = "last_name" value="{{ old('last_name') }}">
                                        <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
                                    </div>


                                    <div class = "mb-3 col-md-6">
                                        <label class = "form-label">Email</label>
                                        <input type  = "email" class = "form-control" placeholder = "Email" name = "email"
                                            value="{{ old('email') }}">
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>
                                    <div class = "mb-3 col-md-6">
                                        <label class = "form-label">Phone</label>
                                        <input type  = "text" class = "form-control" placeholder = "Phone" name = "phone"
                                            value="{{ old('phone') }}">
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

                                    <div class = "mb-3 col-md-6">
                                        <label class = "form-label">Job type</label>
                                        <select class = "form-select" name="job_type" id="jobType" value="{{old('job_type')}}">
                                            @foreach (App\Enums\MechanicalJobType::cases() as $jobTypes)
                                                <option value="{{ $jobTypes }}"
                                                    {{ old('job_type') == $jobTypes->value ? 'selected' : '' }}>
                                                    {{ $jobTypes->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        <x-input-error :messages="$errors->get('status')" class="mt-2" />
                                    </div>

                                    <div class = "mb-3 col-md-6" id="monthlySalaryDiv" style="display:none;">
                                        <label class = "form-label">Monthly Salary</label>
                                        <input type  = "integer" class = "form-control" placeholder = "Monthly salary"
                                            name = "monthly_salary" value="{{ old('monthly_salary') }}">
                                        <x-input-error :messages="$errors->get('monthly_salary')" class="mt-2" />
                                    </div>

                                    <div class = "mb-3 col-md-6" id="cityDiv" style="display:none;">
                                        <label class = "form-label">City</label>
                                        <select class = "form-select" name = "city_id">
                                            <option value="0" >
                                                Choose City
                                            </option>
                                            @foreach ($cities as $city)
                                                <option value = "{{ $city->id }}" {{ old('city_id') == $city->id ? 'selected' : '' }}>
                                                    {{ $city->city_name_en }}
                                                </option>
                                            @endforeach
                                        </select>
                                        <x-input-error :messages="$errors->get('city_id')" class="mt-2" />
                                    </div>


                                    <div class = "mb-3 col-md-6">
                                        <label class = "form-label">Status</label>
                                        <select class = "form-select" name = "status">
                                            @foreach (App\Enums\StatusEnum::cases() as $status)
                                                <option value="{{ $status }}"
                                                    {{ old('status') == $status->value ? 'selected' : '' }}>
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
                                                    {{ old('gender') == $gender ? 'selected' : '' }}>
                                                    {{ $label }}
                                                </option>
                                            @endforeach
                                        </select>
                                        <x-input-error :messages="$errors->get('gender')" class="mt-2" />
                                    </div>
                                    <div class = "mb-3 col-md-6">
                                        <label class = "form-label">Specialization</label>
                                        <select class = "form-select" name = "specialization_id">
                                            <option value="0" selected>
                                                Choose Specialization
                                            </option>
                                            @foreach ($specializations as $specialization)
                                                <option value = "{{ $specialization->id }}"
                                                    {{ old('specialization_id') == $specialization->id ? 'selected' : '' }}>
                                                    {{ $specialization->title }}
                                                </option>
                                            @endforeach
                                        </select>
                                        <x-input-error :messages="$errors->get('specialization_id')" class="mt-2" />
                                    </div>
                                    <div class = "mb-3 col-md-6">
                                        <label class = "form-label">Join Date</label>
                                        <input type  = "date" class = "form-control" placeholder = "Join Date"
                                            name = "join_date" value="{{ old('join_date') }}">
                                        <x-input-error :messages="$errors->get('join_date')" class="mt-2" />
                                    </div>
                                    <div class = "mb-3 col-md-6">
                                        <label class = "form-label">Birth Date</label>
                                        <input type  = "date" class = "form-control" placeholder = "Birth Date"
                                            name = "birth_date"
                                            value="{{ old('birth_date') }}>
                                        <x-input-error :messages="$errors->get('birth_date')" class="mt-2" />
                                    </div>
                                    <div class="mb-3 col-md-12">
                                        <button type="submit" class="btn btn-primary">Add</button>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById('jobType').value = "1";
            document.getElementById('jobType').onchange();
        });
        document.getElementById('jobType').onchange = function() {
            var jobType = document.getElementById('jobType').value;
            if(jobType == "1"){
                document.getElementById('monthlySalaryDiv').style.display = 'block';
                document.getElementById('cityDiv').style.display = 'none';
            }
            if(jobType == "2"){
                document.getElementById('monthlySalaryDiv').style.display = 'none';
                document.getElementById('cityDiv').style.display = 'block';
            }
        };
    </script>
@endsection
