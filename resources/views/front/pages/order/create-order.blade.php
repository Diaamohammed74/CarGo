@extends('front.partials.master')
@section('title', 'CarGo | Order')
@section('style-sheet')
    <style>
        /* Custom styles for multi-select dropdown */
        .select-wrapper {
            position: relative;
            width: 100%;
            max-width: 300px;
            /* Adjust as needed */
        }

        .select-wrapper .select-container {
            display: block;
            border: 1px solid #ced4da;
            border-radius: 5px;
            overflow-y: auto;
            max-height: 200px;
            /* Adjust height as needed */
            background-color: #fff;
            position: relative;
        }

        .select-wrapper .select-container label {
            display: block;
            padding: 10px 20px;
            cursor: pointer;
            transition: background-color 0.3s;
            color: #495057;
        }

        .select-wrapper .select-container label:hover {
            background-color: #f8f9fa;
        }

        .select-wrapper .select-container label input[type="checkbox"] {
            margin-right: 10px;
            vertical-align: middle;
        }

        .select-wrapper .select-container .selected-items {
            padding: 10px;
            border-top: 1px solid #ced4da;
            cursor: pointer;
        }

        .select-wrapper .select-container .selected-items:hover {
            background-color: #f8f9fa;
        }

        .select-wrapper .select-container .selected-items span {
            font-size: 0.9rem;
        }
    </style>
    <link rel="stylesheet" href="{{ asset('assets-front/css/style_contact.css') }}" />
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />
    <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>
@endsection
@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <table class="border p-2 w-100 mt-5 rounded">
                        <thead>
                            <tr>
                                <th class="text-center bg-primary text-light">Check Car</th>
                                <th class="text-center bg-primary text-light">Model</th>
                                <th class="text-center bg-primary text-light">Type</th>
                                <th class="text-center bg-primary text-light">Color</th>
                                <th class="text-center bg-primary text-light">Plate-Number</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($customerCars->isNotEmpty())
                                @foreach ($customerCars as $car)
                                    <tr>
                                        <td class="text-center">
                                            <input type="radio" name="customer_car_id" value="{{ $car->id }}" />
                                        </td>
                                        <td class="text-center">{{ $car->model }}</td>
                                        <td class="text-center">{{ $car->type }}</td>
                                        <td class="text-center">{{ $car->color }}</td>
                                        <td class="text-center">{{ $car->plate_number }}</td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="5" class="text-center">No Car Found</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                    {{-- Add car section --}}
                    <form action="{{ route('user.storeCar') }}" method="post" class="row mt-4 add_car" id="addCarForm">
                        @csrf
                        <p class="w-100 text-primary fw-bold fs-5">Add Car</p>
                        <div class="mb-3 col-lg-6 col-md-12 col-sm-12 mt-3">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="model" name="model" placeholder="Model"
                                    value="{{ old('model') }}" />
                                <label for="model"> Model </label>
                                @error('model')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 mt-3">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="type" name="type" placeholder="Type"
                                    value="{{ old('type') }}" />
                                <label for="type">Type</label>
                                @error('type')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 mt-3">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="color" name="color" placeholder="Color"
                                    value="{{ old('color') }}" />
                                <label for="color mx-2">Color</label>
                                @error('color')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 mt-3">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="plate_number" name="plate_number"
                                    placeholder="Plate-Number" value="{{ old('plate_number') }}" />
                                <label for="plate_number">Plate-Number</label>
                                @error('plate_number')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <button class="btn btn-primary col-lg-5 col-md-12 col-sm-12 mt-3 ms-2" type="submit">
                            Submit
                        </button>
                    </form>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <form action="{{ route('order.store') }}" method="POST" id="mainForm">
                        @csrf
                        <input type="hidden" name="customer_car_id" id="selectedCustomerCarId" value="">
                        <label for="order_type" class="text-primary mb-2 fw-bold mt-4">Where are you?</label>
                        <select name="order_type" id="order_type" class="w-100 p-2 select_status rounded form-control">
                            <option value="select">Select---</option>
                            <option value="1">On Road</option>
                            <option value="2">At Center</option>
                        </select>
                        {{-- Choose service --}}

                        {{-- Choose services --}}
                        <p class="w-100 text-primary fw-bold fs-5 mt-4">Choose Services</p>
                        <select name="services_ids[]" id="services" class="form-control select_service rounded">
                            <option value="" hidden>
                                Select a service
                            </option>
                            @foreach ($services as $service)
                                <option value="{{ $service->id }}" data-title="{{ $service->title }}"
                                    data-price="{{ $service->price }}">
                                    {{ $service->title }} - {{ $service->price }} EGP
                                </option>
                            @endforeach
                        </select>
                        <table class="table mt-3" id="selectedServicesTable">
                            <thead>
                                <tr>
                                    <th>Service</th>
                                    <th>Price</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Selected services will be added here dynamically -->
                            </tbody>
                        </table>
                        <input type="hidden" name="services" id="selectedServiceIds">
                        <div class="map w-100 mt-3">
                            <div id="map" style="height: 400px; border: 0;"></div>
                        </div>
                        <input type="hidden" name="latitude" id="latitude">
                        <input type="hidden" name="longitude" id="longitude">
                        <div class="form-floating order_date d-none mb-3">
                            <input type="datetime-local" class="form-control" id="order_date" name="order_date"
                                value="{{ old('order_date') }}" />
                            <label for="order_date"> Order Date </label>
                            @error('order_date')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <!-- <div class="d-flex flex-column nots_area d-none">
                            <label for="nots" class="mb-2 text-primary fw-bold">Notes</label>
                            
                        </div> -->
                        <div class="form-floating nots_area">
                            <textarea name="notes" class="form-control" id="nots" placeholder="Notes" style="height: 100px">{{ old('notes') }}</textarea>
                            <label for="order_date"> Notes </label>
                            @error('notes')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </section>


@section('extra-scripts')
    <Script src="{{ asset('assets-front/js/orders.js') }}"></Script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const servicesSelect = document.getElementById('services');
            const selectedServicesTable = document.getElementById('selectedServicesTable').querySelector('tbody');
            const selectedServiceIdsInput = document.getElementById('selectedServiceIds');

            let selectedServiceIds = [];

            servicesSelect.addEventListener('change', function() {
                const selectedOption = servicesSelect.options[servicesSelect.selectedIndex];
                const serviceId = selectedOption.value;
                const serviceTitle = selectedOption.getAttribute('data-title');
                const servicePrice = selectedOption.getAttribute('data-price');

                if (serviceId !== "0" && !selectedServiceIds.includes(serviceId)) {
                    selectedServiceIds.push(serviceId);

                    const row = document.createElement('tr');
                    row.setAttribute('data-id', serviceId);

                    const titleCell = document.createElement('td');
                    titleCell.textContent = serviceTitle;

                    const priceCell = document.createElement('td');
                    priceCell.textContent = servicePrice + ' EGP';

                    const actionCell = document.createElement('td');
                    const deleteButton = document.createElement('button');
                    deleteButton.textContent = 'Delete';
                    deleteButton.className = 'btn btn-danger btn-sm';
                    deleteButton.addEventListener('click', function() {
                        const rowIndex = selectedServiceIds.indexOf(serviceId);
                        if (rowIndex > -1) {
                            selectedServiceIds.splice(rowIndex, 1);
                            selectedServicesTable.removeChild(row);
                            selectedServiceIdsInput.value = selectedServiceIds.join(',');
                        }
                    });
                    actionCell.appendChild(deleteButton);

                    row.appendChild(titleCell);
                    row.appendChild(priceCell);
                    row.appendChild(actionCell);

                    selectedServicesTable.appendChild(row);

                    selectedServiceIdsInput.value = selectedServiceIds.join(',');

                    servicesSelect.value = ""
                }
            });

            const locationSelect = document.querySelector('select[name="order_type"]');
            const locationMap = document.querySelector('.map');
            const datetimeInput = document.querySelector('.order_date');
            const notesArea = document.querySelector('.nots_area');
            console.log(locationSelect);
            locationSelect.addEventListener('change', (e) => {
                if(e.target.value == 1){    
                    locationMap.classList.remove("d-none");
                    datetimeInput.classList.add("d-none");
                    notesArea.classList.add("d-none");
                } else {
                    locationMap.classList.add("d-none");
                    datetimeInput.classList.remove("d-none");
                    notesArea.classList.remove("d-none");
                }
            })
        });
    </script>
    <script src="{{ asset('assets-front/js/geo.js') }}"></script>
    <script src="{{ asset('assets-front/js/order.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const carRadioButtons = document.querySelectorAll('input[name="customer_car_id"]');
            const mainForm = document.getElementById('mainForm');
            const selectedCarIdInput = document.getElementById('selectedCustomerCarId');

            carRadioButtons.forEach(function(radioButton) {
                radioButton.addEventListener('change', function() {
                    selectedCarIdInput.value = this.value;
                });
            });

            mainForm.addEventListener('submit', function(event) {
                event.preventDefault();
                mainForm.submit();
            });
        });
    </script>
@endsection
@endsection
