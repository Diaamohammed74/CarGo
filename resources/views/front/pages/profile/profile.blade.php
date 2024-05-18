@extends('front.partials.master')

@section('title', 'Profile')

@section('style-sheets')
<link rel="stylesheet" href="{{ asset('assets-front/css/style_profile.css') }}">
<link rel="stylesheet" href="{{ asset('assets-front/css/bootstrap.min.css') }}">
@endsection

@section('content')
<section class="side">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 bar d-flex">
                <!-- Content for the "bar" section -->
                <br>
                <a href="index_profile_account.html" class="act"><i class="fa-solid fa-user"
                        style="color: #007cee;"></i>Account</a>
                <a href="index_history.html"><i class="fa-regular fa-clock" style="color: #939393;"></i>History</a>
                <a href="#"><i class="fa-solid fa-cart-shopping" style="color: #939393;"></i>Cart</a>
                <a href="#"><i class="fa-regular fa-rectangle-list" style="color: #939393;"></i>Orders</a>
                <a href="#"><i class="fa-solid fa-heart" style="color: #939393;"></i>Wishlist</a>
                <a href="#" class="log" id="logout-link"><i class="fa-solid fa-person-walking-arrow-loop-left" style="color: #ea4335;"></i>Logout</a>
                <form id="logout-form" action="{{ route('auth.logout') }}" method="POST" style="display: none;">
                    @csrf
                    @method('delete')
                </form>
                
            </div>
            <div class="col-md-9">
                <!-- Content for the "Search" section -->
                <div class="search">
                    <div class="input-group">
                        <button type="button" class="btn" data-mdb-ripple-init>
                            <i class="fas fa-search"></i>
                        </button>
                        <div class="form">
                            <input type="search" id="form1" class="form-control"
                                placeholder="Search Anything..." />
                        </div>
                    </div>
                </div>
                <br>
                <h4>Account</h4>
                <div class="account">
                    <div class="row">
                        <div class="col-md-3 prof">
                            <br>
                            <a href="#" class="act">My profile</a>
                            <a href="index_profile_security.html">Security</a>
                            <a href="index_profile_bill.html">Billing</a>
                            <a href="index_profile_notifications.html">Notifications</a>
                            <a href="index_profile_car.html">My Cars</a>
                            <a href="#" class="log">Delete Account</a>
                            <br><br>
                        </div>
                        <div class="col-md-9 add">
                            <div class="row">
                                <div class="personal">
                                    <img src="{{asset('assets-front/images/ellipse51.jpeg')}}" alt="" srcset="">
                                    <div class="info">
                                        <h6 class="name">MarIam KhaIry</h6>
                                        <p class="job">Front-End Developer</p>

                                        <p class="addr">Giza,Egypt</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="information">
                                    <div class="edi">
                                        <h5>Personal Information</h5>
                                        <a href="#"><i class="fa-solid fa-pencil" style="color: #007cee;"></i>
                                            Edit</a>
                                    </div>
                                    <div class="in">
                                        <div class="infor">
                                            <h6>First Name</h6>
                                            <p>MarIam</p>
                                        </div>
                                        <div class="infor-2">
                                            <h6>Last Name</h6>
                                            <p>KhaIry</p>
                                        </div>
                                        <div class="infor-3"></div>
                                    </div>
                                    <div class="email">
                                        <div class="infor">
                                            <h6>Email address</h6>
                                            <p>mariamkhairy20005@gmail.com</p>
                                        </div>
                                        <div class="infor-2">
                                            <h6>Phone</h6>
                                            <p>011155511851</p>
                                        </div>
                                        <div class="infor-3">
                                            <h6>National ID</h6>
                                            <p>302080512108</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="information">
                                    <div class="edi">
                                        <h5>Address</h5>
                                        <a href="#"><i class="fa-solid fa-pencil" style="color: #007cee;"></i>
                                            Edit</a>
                                    </div>
                                    <div class="in">
                                        <div class="infor">
                                            <h6>City/State</h6>
                                            <p>Cairo</p>
                                        </div>
                                        <div class="infor-2">
                                            <h6>District</h6>
                                            <p>El Sahel</p>
                                        </div>
                                        <div class="infor-3"></div>
                                    </div>
                                    <div class="email">
                                        <div class="infor">
                                            <h6>Street Name</h6>
                                            <p>Shoubra Street</p>
                                        </div>
                                        <div class="infor-2">
                                            <h6>Postal Code</h6>
                                            <p>11672</p>
                                        </div>
                                        <div class="infor-3"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection


@section('extra-scripts')
<script>
    document.getElementById('logout-link').addEventListener('click', function(event) {
        event.preventDefault();
        document.getElementById('logout-form').submit();
    });
</script>
@endsection

