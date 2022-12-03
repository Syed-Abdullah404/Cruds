@extends('layout.master')
@section('content')


    <div class="container-fluid px-4">


        <div class="row my-5">

            <div class="col">
                <div class="container">
                    <div class="row">


                        <div class="col-lg-4"></div>
                        <div class="col-lg-4 card">
                            @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                    <p class="text-danger">{{ $error }}</p>
                                @endforeach
                            @endif
                            @if (session('error'))
                                <div class="alert alert-danger" role="alert">

                                    {{ session('error') }}
                                </div>
                            @endif
                            @if (session('success'))
                                <div class="alert alert-success" role="alert">

                                    {{ session('success') }}
                                </div>
                            @endif

                            {{-- @foreach ($profile as $profileEdit) --}}
                            <form method="POST" action="{{ route('profile.update',Auth::user()->id) }}">
                                @csrf
                                @method('PATCH')
                                <input type="hidden" value="{{ Auth::user()->id }}" name="id">
                                <!-- Email input -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example3">Name</label>

                                    <input type="text" id="form3Example3" name="name" value="{{ Auth::user()->name }}"
                                        class="form-control form-control-lg" placeholder="Enter your name" />

                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example3">Email address</label>

                                    <input type="email" id="form3Example3" name="email"
                                        value="{{ Auth::user()->email }}" class="form-control form-control-lg"
                                        placeholder="Enter a valid email address" />
                                </div>
                                <div class="text-center text-lg-start mt-1 pt-2">
                                    <button type="submit" name="submit" class="btn btn-primary btn-lg"
                                        style="padding-left: 2.5rem; padding-right: 2.5rem; margin-bottom:13px;">Update
                                        profile</button>
                                    <!-- <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="#!"
                                                                    class="link-danger">Register</a></p> -->
                                </div>
                            </form>
                            <form method="POST" action="password">
                                @csrf
                                <input type="hidden" value="{{ Auth::user()->id }}" name="id">
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example3">Password</label>

                                    <input type="password" id="form3Example3" name="old_password" value=""
                                        class="form-control form-control-lg @error('old_password') is-invalid @enderror"
                                        placeholder="Enter a valid password" @error('old_password') is-invalid @enderror />
                                    {{-- @error('old_password')
                                        <span class="text-danger">{{$message}}</span>
                                         @enderror --}}
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example3"> Password</label>

                                    <input type="password" id="form3Example3" name="new_password" value=""
                                        class="form-control form-control-lg @error('new_password') is-invalid @enderror"
                                        placeholder="Enter a valid password" />
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example3">confirm Password</label>

                                    <input type="password" id="form3Example3" name="confirm_password" value=""
                                        class="form-control form-control-lg " placeholder="Enter a valid password" />
                                </div>

                                <!-- Password input -->




                                <div class="text-center text-lg-start mt-1 pt-2">
                                    <button type="submit" name="submit" class="btn btn-primary btn-lg"
                                        style="padding-left: 2.5rem; padding-right: 2.5rem; margin-bottom:13px;">Update
                                        password</button>
                                    <!-- <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="#!"
                                                                    class="link-danger">Register</a></p> -->
                                </div>
                            </form>

                            {{-- @endforeach --}}
                        </div>
                        <div class="col-lg-4"></div>
                    </div>
                </div>
            </div>
        </div>

    </div>


@endsection
