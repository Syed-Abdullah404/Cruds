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
                            <form method="POST" action="{{ route('post.update', $postEdit->id) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <!-- first input -->
                                <div class="form-outline mb-4">
                                    <input type="hidden" value="{{ $postEdit['id'] }}" name="id">
                                    <label class="form-label" for="form3Example3">title</label>
                                    <input type="text" id="form3Example3" name="title"
                                        value="{{ $postEdit['title'] }}" class="form-control form-control-lg"
                                        placeholder="Enter your name" />
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example3">Body</label>
                                    {{-- <input type="text" id="form3Example3" name="body"
                                        value="{{ $postEdit['body'] }}" class="form-control form-control-lg"
                                        placeholder="Enter a valid email address" /> --}}
                                        <textarea  id="form3Example3" name="body"
                                        value="" class="form-control form-control-lg"  cols="30" rows="10" >{{ $postEdit['body'] }}</textarea>


                                </div>
                                {{-- <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example3">Email address</label>
                                    <input type="text" id="form3Example3" name="email"
                                        value="{{ $editPost['email'] }}" class="form-control form-control-lg"
                                        placeholder="Enter a valid email address" />
                                </div> --}}
                            
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example3">Company</label>

                                    <input type="file" id="form3Example3" name="image"  class="form-control form-control-lg"
                                     /><br>
                                     <img src="/image/posts/{{ $postEdit->image }}" width="100px" height="80px" style="border-radius:20px">
                                </div>

                                <!-- Password input -->


                                <div class="d-flex justify-content-between align-items-center">
                                    <!-- Checkbox -->
                                    <div class="form-check mb-0">

                                    </div>

                                </div>

                                <div class="text-center text-lg-start mt-1 pt-2">
                                    <button type="submit" class="btn btn-primary btn-lg"
                                        style="padding-left: 2.5rem; padding-right: 2.5rem; margin-bottom:13px;">Login</button>
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
