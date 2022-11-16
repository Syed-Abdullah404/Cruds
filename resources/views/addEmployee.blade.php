@extends('layout.master')
@section('content')



<div class="container-fluid px-4">


    <div class="row my-5">
        <h3 class="fs-4 mb-3">Add Company Data</h3>
        <div class="col">
            <div class="container">
                <div class="row">
                  

                    <div class="col-lg-4"></div>
                    <div class="col-lg-4">
                        @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <p class="text-danger">{{ $error }}</p>
                        @endforeach
    
                    @endif
                        <form method="POST" action="addEmployeeData">
                            @csrf
                            <!-- first input -->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form3Example3">First name</label>
                                <input type="text" id="form3Example3" name="first_name"
                                    class="form-control form-control-lg" placeholder="Enter your name" />
                            </div>
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form3Example3">Last name</label>
                                <input type="text" id="form3Example3" name="last_name"
                                    class="form-control form-control-lg" placeholder="Enter a valid email address" />
                            </div>
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form3Example3">Email address</label>
                                <input type="text" id="form3Example3" name="email"
                                    class="form-control form-control-lg" placeholder="Enter a valid email address" />
                            </div>
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form3Example3">Phone</label>
                                <input type="text" id="form3Example3" name="phone"
                                    class="form-control form-control-lg phone" placeholder="Enter your number" />
                            </div>
                            <script>
                                $(document).ready(function () {
                                  $(".phone").inputmask("+(99)-9999999999");
                                });
                            </script>
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form3Example3">Company</label>
                              
                                    <select name="company" id="" class="form-control">
                                        <option value="" >Select Company</option>
                                        @foreach ($showCompany as $item)
                                        <option value="{{$item->name}}" >{{$item->name}}</option>
                                        
                                    @endforeach
                                    </select>
                            </div>

                            <!-- Password input -->
                          

                            <div class="d-flex justify-content-between align-items-center">
                                <!-- Checkbox -->
                                <div class="form-check mb-0">

                                </div>

                            </div>

                            <div class="text-center text-lg-start mt-1 pt-2">
                                <button type="submit" name="submit" class="btn btn-primary btn-lg"
                                    style="padding-left: 2.5rem; padding-right: 2.5rem; margin-bottom:13px;">Login</button>
                                <!-- <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="#!"
                              class="link-danger">Register</a></p> -->
                            </div>

                        </form>
                    </div>
                    <div class="col-lg-4"></div>
                </div>
            </div>
        </div>
    </div>

</div>
</div>
</div>
<!-- /#page-content-wrapper -->
</div>

@endsection


