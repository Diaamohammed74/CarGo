<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Car_Go</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('assets-front/css/footer.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets-front/css/invoices.css') }}" />
</head>
<body>
    @include('front.partials.front.nav')
    <section class="container">
        <div class="row flex-column my-5">
            @foreach ($orders as $order)
                <div class="invoice my-2 border rounded p-2">
                    <div class="col-12">
                        <div class="header_invoice row text-center">
                            <div class="col-lg-3 col-md- col-sm-12 d-flex gap-2" data-aos="fade-up">
                                <p>Number of products :</p>
                                <p class="text-main-color fw-bold">{{ $order->orderProducts->count() }}</p>
                            </div>
                            <div class="col-lg-3 col-md- col-sm-12 d-flex gap-2" data-aos="fade-up">
                                <p> Order date :</p>
                                <p class="fw-bold text-primary-color">{{ $order->created_at }}</p>
                            </div>
                            <div class="col-lg-3 col-md- col-sm-12 d-flex gap-2 align-items-center">
                                <p> Order Status :</p>
                                <p class="status_invoice">{{ $order->order_status->name }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="row g-2">
                        @foreach ($order->orderServices as $service)
                            <div class="col-lg-4 col-md- col-sm-12">
                                <div class="border rounded p-2 d-flex gap-2">
                                    <div class="image_invice rounded">
                                        <img src="{{ $service->image }}" width="80" alt="book invoice"
                                            class="rounded " />
                                    </div>
                                    <div>
                                        <p class="fw-bold">{{ $service->title }}</p>
                                        <p class="fw-bold text-main-color">{{ $service->price }} EGP</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="col-12 mt-4">
                        <div class="header_invoice row text-center">
                            <div class="col-lg-3 col-md-6 col-sm-12 d-flex gap-2" data-aos="fade-up">
                                <p>Payment :</p>
                                <p class="fw-bold text-primary-color">Online Payment</p>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 d-flex gap-2" data-aos="fade-up">
                                <p>Total Price :</p>
                                <p class="fw-bold text-main-color">{{ $order->total_amount }}</p>
                            </div>
                            @if ($order->order_status->value == 2)
                                <form class="col-lg-3 col-md-6 col-sm-12" method="post"
                                    action="{{ route('order.delete', $order->id) }}">
                                    @csrf
                                    @method('delete')
                                    <button class="order_cancelation 75"> Cancel order</button>
                                </form>
                            @elseif ($order->order_status->value == 3)
                                <form class="col-lg-3 col-md-6 col-sm-12" method="post"
                                    action="{{ route('pay', $order->id) }}">
                                    @csrf
                                    <button class="bg-success text-light pay w-75">Pay Now</button>
                                </form>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    @include('sweetalert::alert')

</body>

</html>
