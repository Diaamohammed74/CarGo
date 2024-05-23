@extends('dashboard.layouts.fullwidth2')
@section('title')
{{env('APP_NAME')}} | Login
@endsection
@section('content')
<div class="bg-img-fix overflow-hidden" style="background:#fff url({{asset("images/background/bg6.jpg")}}); height: 100vh;">
	<div class="row gx-0">
		<div class="col-xl-4 col-lg-5 col-md-6 col-sm-12 vh-100 bg-white ">
			<div id="mCSB_1" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" style="max-height: 653px;" tabindex="0">
				<div id="mCSB_1_container" class="mCSB_container" style="position:relative; top:0; left:0;" dir="ltr">
					<div class="login-form style-2">


						<div class="card-body ">
							<div class="logo-header text-center">
								<a href="{{ url('')}}" class="logo text-center"><img src="{{asset('images/logo/logo-img.png')}}" alt="" class="width-230 light-logo"></a>
								<a href="{{ url('')}}" class="logo text-center"><img src="{{asset('images/logo/logo-img.png')}}" alt="" class="width-230 dark-logo"></a>
							</div>

							<nav>
								<div class="nav nav-tabs border-bottom-0" id="nav-tab" role="tablist">

							<div class="tab-content w-100" id="nav-tabContent">
								<div class="tab-pane fade show active" id="nav-personal" role="tabpanel" aria-labelledby="nav-personal-tab">
								<form action="{{ route('dashboard.loginStore') }}" class=" dz-form pb-3" method="post">
									@csrf
										<h3 class="form-title m-t0">Personal Information</h3>
										<div class="dz-separator-outer m-b5">
											<div class="dz-separator bg-primary style-liner"></div>
										</div>
										<p>Enter your e-mail address and your password. </p>
										<div class="form-group mb-3">
											<input class="form-control" placeholder="Email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                </span>
                                            @enderror
										</div>
										<div class="form-group mb-3">
											<input type="password" name="password" required autocomplete="current-password" class="form-control" placeholder="Password">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                </span>
                                            @enderror
										</div>
										<div class="form-group text-left mb-5 forget-main">
											<button type="submit" class="btn btn-primary">Sign Me In</button>
											<span class="form-check d-inline-block">
												<input type="checkbox" class="form-check-input" id="remember_me" name="remember">
												<label class="form-check-label" for="check1">Remember me</label>
											</span>
											<button class="nav-link m-auto btn tp-btn-light btn-primary forget-tab " id="nav-forget-tab" data-bs-toggle="tab" data-bs-target="#nav-forget" type="button" role="tab" aria-controls="nav-forget" aria-selected="false">Forget Password ?</button>
										</div>
                                        @error('g-recaptcha-response')
                                            <span class="invalid-feedback" role="alert">
                                                <strong class="text-danger">{{ $message }}</strong>
                                            </span>
                                        @enderror
									</form>
								</div>
								<div class="tab-pane fade" id="nav-forget" role="tabpanel" aria-labelledby="nav-forget-tab">
								</div>
							</div>

							</div>
						</nav>
						</div>
							<div class="card-footer">
								<div class=" bottom-footer clearfix m-t10 m-b20 row text-center">
								<div class="col-lg-12 text-center">
									<span> © Copyright CarGo</span>
								</div>
							</div>
						</div>

					</div>
				</div>
				<div id="mCSB_1_scrollbar_vertical" class="mCSB_scrollTools mCSB_1_scrollbar mCS-light mCSB_scrollTools_vertical" style="display: block;">
					<div class="mCSB_draggerContainer">
					<div id="mCSB_1_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 0px; display: block; height: 652px; max-height: 643px; top: 0px;">
					<div class="mCSB_dragger_bar" style="line-height: 0px;"></div><div class="mCSB_draggerRail"></div></div></div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

