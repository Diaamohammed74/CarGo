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
                                        <th>Customer name</th>
                                        <th>Customer phone</th>
                                        <th>Car type</th>
                                        <th>Car model</th>
                                        <th>view location</th>
                                        {{-- <th>Action</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $order)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
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
                                            {{-- <td>
                                                <a href="{{ route('dashboard.tags.edit', $tag->id) }}" class="btn btn-primary btn-sm">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <form action="{{ route('dashboard.tags.destroy', $tag->id) }}" method="POST" id="deleteForm-{{ $tag->id }}" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" class="btn btn-danger btn-sm delete-btn" onclick="confirmDelete('deleteForm-{{ $tag->id }}', 'You will not be able to recover this tag!');">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                            </td> --}}
                                            
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
