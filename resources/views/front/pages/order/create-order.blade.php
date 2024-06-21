@extends('front.partials.master')
@section('title', 'Contact us')
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
                        <div class="form-floating mb-3 col-lg-6 col-md-12 col-sm-12 mt-3">
                            <input type="text" class="form-control" id="model" name="model" placeholder="Model"
                                value="{{ old('model') }}" />
                            <label for="model"> Model </label>
                        </div>
                        <div class="form-floating col-lg-6 col-md-12 col-sm-12 mt-3">
                            <input type="text" class="form-control" id="type" name="type" placeholder="Type"
                                value="{{ old('type') }}" />
                            <label for="type">Type</label>
                        </div>
                        <div class="form-floating col-lg-6 col-md-12 col-sm-12 mt-3">
                            <input type="text" class="form-control" id="color" name="color" placeholder="Color"
                                value="{{ old('color') }}" />
                            <label for="color">Color</label>
                        </div>
                        <div class="form-floating col-lg-6 col-md-12 col-sm-12 mt-3">
                            <input type="text" class="form-control" id="plate_number" name="plate_number"
                                placeholder="Plate-Number" value="{{ old('plate_number') }}" />
                            <label for="plate_number">Plate-Number</label>
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
                        <select name="order_type" id="order_type" class="w-100 p-2 select_status rounded">
                            <option value="select">Select---</option>
                            <option value="1">On Road</option>
                            <option value="2">At Center</option>
                        </select>
                        {{-- Choose service --}}

                        {{-- Choose services --}}
                        <p class="w-100 text-primary fw-bold fs-5 mt-4">Choose Services</p>
                        <select name="services_ids[]" id="services" class="form-control select_service rounded" multiple>
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
                        <select name="time" id="time" class="w-100 p-2 select_service rounded d-block my-3 time">
                            <option value="timeOne">00:11</option>
                            <option value="timeTwo">12:00</option>
                        </select>
                        <select name="day" id="day" class="w-100 p-2 select_service rounded d-block my-3 day">
                            <option value="dayOne">Sunday</option>
                            <option value="dayTwo">Monday</option>
                        </select>
                        <div class="d-flex flex-column nots_area">
                            <label for="nots" class="mb-2 text-primary fw-bold">Notes</label>
                            <textarea name="nots" id="nots" placeholder="Notes"></textarea>
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
                }
            });
        });
    </script>

    <script src="{{ asset('assets-front/js/geo.js') }}"></script>


    {{-- form submit --}}
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
