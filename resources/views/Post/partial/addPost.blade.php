@extends('layout.master')
@section('content')



    <div class="container-fluid px-4">


        <div class="row my-5">
        
            <div class="col">
                <div class="container">
                    <div class="row">


                        <div class="col-lg-1"></div>
                        <div class="col-lg-10 card">
                            @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                    <p class="text-danger">{{ $error }}</p>
                                @endforeach
                            @endif
                            <form method="POST" action="{{ route('post.store') }}" enctype="multipart/form-data">
                                @csrf
                                <!-- first input -->
                                <input type="hidden" id="form3Example3" name="user_id"
                                value="{{ auth()->user()->id }}" class="form-control form-control-lg"
                                 />
                                {{-- <input type="hidden" id="form3Example3" name="username"
                                value="{{ auth()->user()->name }}" class="form-control form-control-lg"
                                 /> --}}

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example3">Title</label>
                                    <input type="text" id="form3Example3" name="title"
                                        class="form-control form-control-lg" placeholder="Enter post title" />
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example3">Body</label>
                                    {{-- <input type="text"  placeholder="Enter post body" /> --}}
                                        <textarea  id="form3Example3" name="body"
                                        class="form-control form-control-lg"  cols="30" rows="10" ></textarea>
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example3">Email address</label>
                                    <input type="file" id="form3Example3" name="image"
                                        class="form-control form-control-lg" placeholder="Enter post image" />
                                </div>







                                <div class="d-flex justify-content-between align-items-center">
                                    <!-- Checkbox -->
                                    <div class="form-check mb-0">

                                    </div>

                                </div>

                                <div class="text-center text-lg-start mt-1 pt-2">
                                    <button type="submit" class="btn btn-primary btn-lg"
                                        style="padding-left: 2.5rem; padding-right: 2.5rem; margin-bottom:13px;">Post it</button>
                                    <!-- <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="#!"
                                      class="link-danger">Register</a></p> -->
                                </div>

                            </form>
                        </div>
                        <div class="col-lg-1"></div>
                    </div>
                </div>
            </div>
        </div>

    </div>


@endsection
