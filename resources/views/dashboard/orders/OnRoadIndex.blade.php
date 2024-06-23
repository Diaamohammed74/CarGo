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
                                        <th>Customer name</th>
                                        <th>Customer phone</th>
                                        <th>Car type</th>
                                        <th>Car model</th>
                                        <th>view location</th>
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
                                                        <option value="2" {{ $order->order_status == 2 ? 'selected' : '' }}>Pending</option>
                                                        <option value="1" {{ $order->order_status == 1 ? 'selected' : '' }}>Processing</option>
                                                        <option value="3" {{ $order->order_status == 3 ? 'selected' : '' }}>Completed</option>
                                                    </select>
                                                </form>
                                            </td>
                                            <td>
                                                {{ $order->customer->user->full_name }}
                                            </td>
                                            <td>
                                                {{ $order->customer->user->phone }}
                                            </td>
                                            <td>
                                                {{ $order->customerCar->type }}
                                            </td>
                                            <td>
                                                {{ $order->customerCar->model }}
                                            </td>
                                            <td>
                                                <div id="map_{{ $order->id }}" style="height: 300px; cursor: pointer;"></div>
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
    @foreach ($orders as $order)
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                var latitude = {{  $order?->onRoad?->latitude }};
                var longitude = {{  $order?->onRoad?->longitude }};
                
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
        </script>
    @endforeach
@endsection
