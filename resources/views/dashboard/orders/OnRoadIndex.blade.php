@extends('dashboard.layouts.default')
@section('title',"Orders")
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card dz-card" id="accordion-one">
                    <div class="card-header flex-wrap">
                        <div>
                            <h4 class="card-title">Orders</h4>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="table-responsive">
                            <table id="example3" class="display table datatables-bordered"
                                style="min-width: 845px;border-spacing: 1rem 1em !important;
                                border-collapse: separate;">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Order Status</th>
                                        <th>Add Products</th>
                                        <th>Customer Name</th>
                                        <th>Customer Phone</th>
                                        <th>Car Type</th>
                                        <th>Car Model</th>
                                        <th>View Location</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $order)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <form action="{{ route('dashboard.orders.update', $order->id) }}" method="POST" id="updateForm-{{ $order->id }}" style="display:inline;">
                                                    @csrf
                                                    @method('PUT')
                                                    <select class="form-select" name="order_status" onchange="this.form.submit()">
                                                        <option value="2" {{ $order->order_status->value == 2 ? 'selected' : '' }}>Pending</option>
                                                        <option value="1" {{ $order->order_status->value == 1 ? 'selected' : '' }}>Processing</option>
                                                        <option value="3" {{ $order->order_status->value == 3 ? 'selected' : '' }}>Completed</option>
                                                    </select>
                                                </form>
                                            </td>
                                            @if ($order->order_status->value == 1)
                                            <td>
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addProductModal" data-order-id="{{ $order->id }}">
                                                    Add Products
                                                </button>
                                            </td>
                                            @else
                                            <td>You can not add products now</td>
                                            @endif
                                            <td>{{ $order->customer->user->full_name }}</td>
                                            <td>{{ $order->customer->user->phone }}</td>
                                            <td>{{ $order->customerCar->type }}</td>
                                            <td>{{ $order->customerCar->model }}</td>
                                            <td>
                                                <div id="map_{{ $order->id }}" style="height: 300px; cursor: pointer;"></div>
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

    <!-- Modal -->
    <div class="modal fade" id="addProductModal" tabindex="-1" aria-labelledby="addProductModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addProductModalLabel">Add Products to Order</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('dashboard.order.addProduct',$order->id) }}" method="POST" id="addProductForm">
                        @csrf
                        <div class="mb-3">
                            <label for="product_ids" class="form-label">Select Products</label>
                            <select class="form-select" id="product_ids" name="product_id">
                                @foreach ($products as $product)
                                    <option value="{{ $product->id }}">{{ $product->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Add Products</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @foreach ($orders as $order)
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                var latitude = {{ $order?->onRoad?->latitude }};
                var longitude = {{ $order?->onRoad?->longitude }};
                
                var map = L.map('map_{{ $order->id }}').setView([latitude, longitude], 13);
                
                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; OpenStreetMap contributors'
                }).addTo(map);
                
                L.marker([latitude, longitude]).addTo(map)
                    .bindPopup('Order Location')
                    .openPopup();

                // Add click event listener to redirect to location
                map.on('click', function(e) {
                    var lat = e.latlng.lat.toFixed(6); // Round to 6 decimal places
                    var lng = e.latlng.lng.toFixed(6); // Round to 6 decimal places
                    var url = 'https://www.google.com/maps/search/?api=1&query=' + lat + ',' + lng;
                    window.open(url, '_blank');
                });
            });

            document.querySelectorAll('[data-bs-toggle="modal"]').forEach(function(button) {
                button.addEventListener('click', function(event) {
                    var orderId = event.currentTarget.getAttribute('data-order-id');
                    document.getElementById('order_id').value = orderId;
                });
            });
        </script>
    @endforeach
@endsection
