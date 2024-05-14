<!DOCTYPE html>
<html lang="en">
  @section('title')
  {{env('APP_NAME')}} | Register
  @endsection
  @include('front.partials.auth.head')
<body>
            <!-- section register -->
  <section class="h-100 bg-dark">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col">
          <div class="card card-registration my-4">
            <div class="row g-0">


              @include('front.partials.auth.logo')


              <div class="col-xl-6">
                <form action="{{route('auth.registerStore')}}" method="POSt">
                  @csrf
                <div class="card-body p-md-5 text">
                  <h3 class="mb-5 text-1">Car<span class="text-2">GO</span></h3>
                  <!-- Form -->
                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div data-mdb-input-init class="form-outline">
                        <input type="text" id="firstName" name="first_name" class="form-control form-control-lg" placeholder="First Name" />
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div data-mdb-input-init class="form-outline">
                        <input type="text" id="lastName"  name="last_name"  class="form-control form-control-lg" placeholder="Last Name" />
                      </div>
                    </div>
                  </div>

                  <div data-mdb-input-init class="form-outline mb-4">
                    <input type="email" id="email" name="email" class="form-control form-control-lg" placeholder="Your email"/>
                  </div>
  
                  <div data-mdb-input-init class="form-outline mb-4">
                    <input type="numeric" id="nationId" name="national_id" class="form-control form-control-lg" placeholder="National ID"/>
                  </div>

                  <div data-mdb-input-init class="form-outline mb-4">
                    <input type="password" id="password" name="password" class="form-control form-control-lg" placeholder="Password"/>
                  </div>

                  <div data-mdb-input-init class="form-outline mb-4">
                    <input type="password" id="conPassword" name="password_confirmation" class="form-control form-control-lg" placeholder="Confirm Password"/>

                  </div>

                  <div class="field button-field">
                    <button  id="send" type="submit" onclick="addData(event)">Register</button>
                </div>
              </form>
                <!-- End form -->

                
              <!-- br for or -->
                <div class="line"></div>

                          <!-- GroupButton -->
                                    @include('front.partials.auth.social')

              
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
            <!--End Section  -->

    <!-- js script -->
    @include('front.partials.auth.scripts')

</body>
</html>