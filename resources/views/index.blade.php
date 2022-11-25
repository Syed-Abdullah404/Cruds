@extends('layout.master')
@section('content')
    <style>
        .glow-on-hover {
            width: 60px;
            height: 30px;
            border: none;
            outline: none;
            color: #fff;
            background: #111;
            cursor: pointer;
            position: relative;
            z-index: 0;
            border-radius: 10px;
        }

        .glow-on-hover:before {
            content: '';
            background: linear-gradient(45deg, #ff0000, #ff7300, #fffb00, #48ff00, #00ffd5, #002bff, #7a00ff, #ff00c8, #ff0000);
            position: absolute;
            top: -3px;
            left: -3px;
            background-size: 460%;
            z-index: -1;
            filter: blur(4px);
            width: calc(100% + 8px);
            height: calc(100% + 8px);
            animation: glowing 20s linear infinite;
            opacity: 0;
            transition: opacity .3s ease-in-out;
            border-radius: 10px;
        }

        .glow-on-hover:active {
            color: rgb(60, 57, 57)
        }

        .glow-on-hover:active:after {
            background: transparent;
        }

        .glow-on-hover:hover:before {
            opacity: 1;
        }

        .glow-on-hover:after {
            z-index: -1;
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            background: #111;
            left: 0;
            top: 0;
            border-radius: 5px;
        }

        @keyframes glowing {
            0% {
                background-position: 0 0;
            }

            50% {
                background-position: 450% 0;
            }

            100% {
                background-position: 0 0;
            }
        }

        input[type=checkbox]:checked+input.strikethrough {
            text-decoration: line-through;
        }

        .strikethrough {
            border: none;
            hover: none;
        }

        a {
            text-decoration: none;
        }
    </style>
    <div class="container-fluid px-4">
        <div class="row g-3 my-2">
            <div class="col-md-3">
                <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                    <div>
                        <h3 class="fs-2">720</h3>
                        <p class="fs-5">Products</p>
                    </div>
                    <i class="fas fa-gift fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                </div>
            </div>

            <div class="col-md-3">
                <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                    <div>
                        <h3 class="fs-2">4920</h3>
                        <p class="fs-5">Sales</p>
                    </div>
                    <i class="fas fa-hand-holding-usd fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                </div>
            </div>

            <div class="col-md-3">
                <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                    <div>
                        <h3 class="fs-2">3899</h3>
                        <p class="fs-5">Delivery</p>
                    </div>
                    <i class="fas fa-truck fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                </div>
            </div>

            <div class="col-md-3">
                <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                    <div>
                        <h3 class="fs-2">%25</h3>
                        <p class="fs-5">Increase</p>
                    </div>
                    <i class="fas fa-chart-line fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                </div>
            </div>
        </div>




        {{-- <div class="container w-25 mt-5">
            <div class="card shadow-sm">
                <div class="card-body" style="background-color: rgb(214, 183, 143);">
                    <h3>Todo List</h3>
                    <form action="" method="post">
                        @csrf
                        <div class="input-group">
                            <input type="text" name="" id="" placeholder="Add your daily task">
                            <button type="submit" name="submit">Submit</button>
                        </div>

                    </form>


                </div>

            </div>


        </div> --}}




        <section class="vh-100" style="background-color: #d2c2cd;">
            <div class="container py-5 ">
                
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col col-xl-10">

                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body p-5">

                                <h6 class="mb-3">Todo List</h6>
                              
                                <form class="d-flex justify-content-center align-items-center mb-4" method="post"
                                    action="{{ route('todo.store') }}">
                                    @csrf
                                    <input type="hidden" id="form3" class="form-control form-control-lg" name="userid"
                                        value="{{ auth()->user()->id }}" />

                                    <input type="text" id="form3" class="form-control form-control-lg"
                                        name="task" />
                                    <button type="submit" name="submit" class="btn btn-primary btn-lg ms-2">Add</button>
                                </form>

                                <div class="form-outline flex-fill">
                                    @if ($errors->any())
                                    @foreach ($errors->all() as $error)
                                        <p class="text-danger">{{ $error }}</p>
                                    @endforeach
                                @endif
                                </div>
                                <ul class="list-group mb-0">

                                    @foreach ($todolist as $key => $item)
                                        {{-- @if ($item->user_id == auth()->user()->id) --}}
                                        <li
                                            class="list-group-item d-flex justify-content-between align-items-center border-start-0 border-top-0 border-end-0 border-bottom rounded-0 mb-2">
                                            <div class="d-flex align-items-center">
                                                {{-- {{$key+1}}  --}}
                                                @if ($item->completed)
                                                    <input id="cb" type="checkbox" name="completed"
                                                        onchange="window.location.href='{{ route('todo.show', $item->id) }}'"checked>&nbsp;
                                                    <span
                                                        style="text-decoration: line-through;color:#ff0000;">{{ $item->task }}</span>
                                                @else
                                                    <input id="cb" type="checkbox" name="completed"
                                                        onchange="window.location.href='{{ route('todo.show', $item->id) }}'">&nbsp;
                                                    <a href="" class="update" data-name="todo" data-type="text"
                                                        data-pk="{{ $item->id }}"
                                                        data-title="Enter todo">{{ $item->task }}</a>
                                                @endif



                                            </div>

                                            <form action="{{ route('todo.destroy', $item) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="glow-on-hover" type="button">Delete</button>
                                            </form>
                                            {{-- </li>
                                </ul> --}}

                                        </li>
                                        {{-- @endif --}}
                                    @endforeach

                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- /#page-content-wrapper -->
@endsection
@section('script')
    <script type="text/javascript">
        $.fn.editable.defaults.mode = 'inline';

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }
        });

        $('.update').editable({
            url: "{{ route('dashboard.update') }}",
            type: 'text',
            pk: 1,
            name: 'todo',
            title: 'Enter todo'
        });
    </script>
@endsection
