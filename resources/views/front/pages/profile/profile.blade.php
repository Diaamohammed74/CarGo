<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('assets-front/css/style_profile.css') }}" />
    <style>
        #fileUpload {
            display: none;
        }
    </style>
</head>

<body>
    @include('front.partials.front.nav')

    <section class="my-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-3 col-md-12 col-sm-12">
                    <aside class="d-flex flex-column p-4 gap-4">
                        <div class="d-flex gap-3 align-items-center active justify-content-center">
                            <i class="fa-solid fa-user"></i>
                            <a href="index_profile_account.html" class="text-decoration-none">Account</a>
                        </div>

                        <div class="d-flex gap-3 align-items-center justify-content-center">
                            <i class="fa-regular fa-clipboard"></i>
                            <a href="{{route('user.orders')}}" class="text-decoration-none">Orders</a>
                        </div>
                        <form id="logout-form" action="{{ route('auth.logout') }}" method="POST" style="display: none;">
                            @csrf
                            @method('DELETE')
                        </form>
                        <div class="d-flex gap-3 align-items-center justify-content-center">
                            <i class="fa-solid fa-arrow-right-from-bracket text-danger"></i>
                            <a href="#" class="text-decoration-none text-danger" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                        </div>
                    </aside>
                </div>

                <div class="col-lg-9 col-md-12 col-sm-12">
                    <div class="account mt-4">
                        <h2 class="fw-bold my-4">Account information</h2>
                        <div class="image">
                            <img src="{{ $customer->image }}" alt="profile" class="w-100" id="profileImage" />
                        </div>
                        <form action="{{ route('user.profile.update') }}" class="form row gap-3 mt-3" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <input type="file" id="fileUpload" accept="image/*" name="image" />
                            <div class="first_name col-lg-5 col-md-12 col-sm-12">
                                <input type="text" placeholder="First Name" name="first_name" value="{{ $customer->first_name }}" class="w-100" />
                                @error('first_name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="last_name col-lg-5 col-md-12 col-sm-12">
                                <input type="text" placeholder="Last Name" name="last_name" value="{{ $customer->last_name }}" class="w-100" />
                                @error('last_name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="phone col-lg-5 col-md-12 col-sm-12">
                                <input type="phone" placeholder="Phone" name="phone" value="{{ $customer->phone }}" class="w-100" />
                                @error('phone')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="email col-lg-5 col-md-12 col-sm-12">
                                <input type="email" placeholder="Email" name="email" value="{{ $customer->email }}" class="w-100" />
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="email col-lg-5 col-md-12 col-sm-12">
                                <input type="password" placeholder="password" name="password" value="" class="w-100" />
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="email col-lg-5 col-md-12 col-sm-12">
                                <input type="password" placeholder="confirm password" name="confirm_password" value="" class="w-100" />
                                @error('confirm_password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <button class="btn btn-primary col-lg-2 col-md-12 col-sm-12">
                                Save
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('sweetalert::alert')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Get the image and file input elements
            const profileImage = document.getElementById('profileImage');
            const fileUpload = document.getElementById('fileUpload');

            // Add click event listener to the image
            profileImage.addEventListener('click', function () {
                // Trigger the click event of the file input
                fileUpload.click();
            });

            // Handle the file selection event
            fileUpload.addEventListener('change', function (event) {
                // Get the selected file
                const file = event.target.files[0];
                if (file) {
                    // Create a FileReader to read the file as a data URL
                    const reader = new FileReader();
                    reader.onload = function (e) {
                        // Set the image source to the selected file's data URL
                        profileImage.src = e.target.result;
                    };
                    reader.readAsDataURL(file);
                }
            });
        });
    </script>
</body>
</html>
