<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" /> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}" />

    <title>Bootstap 5 Responsive Admin Dashboard</title>
    <script src="" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/boostrap.min.css') }}" />
    {{-- <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" /> --}}
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/jquery-editable/css/jquery-editable.css"
        rel="stylesheet" />
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}
    <script>
        $.fn.poshytip = {
            defaults: null
        }
    </script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/jquery-editable/js/jquery-editable-poshytip.min.js">
    </script>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea'
        });
    </script>
    <style>
        .w-3 {
            display: none;
        }

        a {
            text-decoration: none;

        }

        ul {
            list-style-type: none;
        }
    </style>
</head>

<body>

    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <a href="/dashboard">
                <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><i
                        class="fas fa-user-secret me-2"></i>Codersbite</div>

            </a>
            <div class="list-group list-group-flush my-3">
                {{-- <a href="/dashboard" class="list-group-item list-group-item-action bg-transparent second-text active"><i
                        class="fas fa-tachometer-alt me-2"></i>Dashboard</a> --}}
                <a href="/company" class="list-group-item list-group-item-action bg-transparent text-success fw-bold"><i
                        class="fas fa-project-diagram me-2"></i>Company</a>
                <a href="/employee"
                    class="list-group-item list-group-item-action bg-transparent text-success fw-bold"><i
                        class="fas fa-chart-line me-2"></i>Employee</a>
                @if (Auth::check())


                    @if (Auth::user()->role_as == 1)
                        <a href="/registers"
                            class="list-group-item list-group-item-action bg-transparent text-success fw-bold"><i
                                class="fas fas fa-biohazard me-2"></i>Registers</a>

                        <a href="/postShow"
                            class="list-group-item list-group-item-action bg-transparent text-success fw-bold"><i
                                class="fab fa-asymmetrik me-2"></i>Posts show</a>
                    @endif
                @endif


                <a href="/post" class="list-group-item list-group-item-action bg-transparent text-success fw-bold"><i
                        class="fas fa-archive me-2"></i>Post</a>
                <a href="/allpost" class="list-group-item list-group-item-action bg-transparent  fw-bold"
                    text-success><i class="fab fa-atlassian me-2"></i>All Posts</a>
            </div>
        </div>

        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Dashboard</h2>

                </div>
                <span style="margin-left: 0%">

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">

                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">


                            <li class="nav-item dropdown">

                                <a class="nav-link  second-text fw-bold" href="#" id="navbarDropdown"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-bell me-2"></i>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li>
                                        @foreach (auth()->user()->notifications as $notify)
                                            <a class="dropdown-item">

                                                <ul>
                                                    <li>

                                                        <span class="bg-blue-300"><b>{{ $notify->data['name'] }}</b> send a
                                                            post go and check it </span>
                                                    </li>
                                                </ul>

                                            </a>
                                        @endforeach
                                    </li>


                                </ul>
                            </li>
                        </ul>
                    </div>

                </span>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">


                        <li class="nav-item dropdown">

                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2"></i>{{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ route('profile.index') }}">Profile</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                        {{ 'Log Out' }}
                                    </x-dropdown-link>
                                </form>
                            </ul>
                        </li>
                    </ul>
                </div>

            </nav>
            {{-- <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
                <div class="navbar-brand-wrapper d-flex justify-content-center">
                  <div
                    class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100"
                  >
                    <a class="navbar-brand brand-logo" href="index.html"
                      >
                    
                       <i><b>Abdullah</b></i>
                  </a>
                
                    <button
                      class="navbar-toggler navbar-toggler align-self-center"
                      type="button"
                      data-toggle="minimize"
                    >
                      <span class="mdi mdi-sort-variant"></span>
                    </button>
                  </div>
                </div>
                <div
                  class="navbar-menu-wrapper d-flex align-items-center justify-content-end"
                >
                  <ul class="navbar-nav mr-lg-4 w-100">
                    <li class="nav-item nav-search d-none d-lg-block w-100">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="search">
                            <i class="mdi mdi-magnify"></i>
                          </span>
                        </div>
                        <input
                          type="text"
                          class="form-control"
                          placeholder="Search now"
                          aria-label="search"
                          aria-describedby="search"
                        />
                      </div>
                    </li>
                  </ul>
                  <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item dropdown me-1">
                      <a
                        class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center"
                        id="messageDropdown"
                        href="#"
                        data-bs-toggle="dropdown"
                      >
                        <i class="mdi mdi-message-text mx-0"></i>
                        <span class="count"></span>
                      </a>
                      <div
                        class="dropdown-menu dropdown-menu-right navbar-dropdown"
                        aria-labelledby="messageDropdown"
                      >
                        <p class="mb-0 font-weight-normal float-left dropdown-header">
                          Messages
                        </p>
                        <a class="dropdown-item">
                          <div class="item-thumbnail">
                            <img
                              src="images/faces/face4.jpg"
                              alt="image"
                              class="profile-pic"
                            />
                          </div>
                          <div class="item-content flex-grow">
                            <h6 class="ellipsis font-weight-normal">David Grey</h6>
                            <p class="font-weight-light small-text text-muted mb-0">
                              The meeting is cancelled
                            </p>
                          </div>
                        </a>
                        <a class="dropdown-item">
                          <div class="item-thumbnail">
                            <img
                              src="images/faces/face2.jpg"
                              alt="image"
                              class="profile-pic"
                            />
                          </div>
                          <div class="item-content flex-grow">
                            <h6 class="ellipsis font-weight-normal">Tim Cook</h6>
                            <p class="font-weight-light small-text text-muted mb-0">
                              New product launch
                            </p>
                          </div>
                        </a>
                        <a class="dropdown-item">
                          <div class="item-thumbnail">
                            <img
                              src="images/faces/face3.jpg"
                              alt="image"
                              class="profile-pic"
                            />
                          </div>
                          <div class="item-content flex-grow">
                            <h6 class="ellipsis font-weight-normal">Johnson</h6>
                            <p class="font-weight-light small-text text-muted mb-0">
                              Upcoming board meeting
                            </p>
                          </div>
                        </a>
                      </div>
                    </li>
                    <li class="nav-item dropdown me-4">
                      <a
                        class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center notification-dropdown"
                        id="notificationDropdown"
                        href="#"
                        data-bs-toggle="dropdown"
                      >
                        <i class="mdi mdi-bell mx-0"></i>
                        <span class="count"></span>
                      </a>
                      <div
                        class="dropdown-menu dropdown-menu-right navbar-dropdown"
                        aria-labelledby="notificationDropdown"
                      >
                        <p class="mb-0 font-weight-normal float-left dropdown-header">
                          Notifications
                        </p>
                        <a class="dropdown-item">
                          <div class="item-thumbnail">
                            <div class="item-icon bg-success">
                              <i class="mdi mdi-information mx-0"></i>
                            </div>
                          </div>
                          <div class="item-content">
                            <h6 class="font-weight-normal">Application Error</h6>
                            <p class="font-weight-light small-text mb-0 text-muted">
                              Just now
                            </p>
                          </div>
                        </a>
                        <a class="dropdown-item">
                          <div class="item-thumbnail">
                            <div class="item-icon bg-warning">
                              <i class="mdi mdi-settings mx-0"></i>
                            </div>
                          </div>
                          <div class="item-content">
                            <h6 class="font-weight-normal">Settings</h6>
                            <p class="font-weight-light small-text mb-0 text-muted">
                              Private message
                            </p>
                          </div>
                        </a>
                        <a class="dropdown-item">
                          <div class="item-thumbnail">
                            <div class="item-icon bg-info">
                              <i class="mdi mdi-account-box mx-0"></i>
                            </div>
                          </div>
                          <div class="item-content">
                            <h6 class="font-weight-normal">New user registration</h6>
                            <p class="font-weight-light small-text mb-0 text-muted">
                              2 days ago
                            </p>
                          </div>
                        </a>
                      </div>
                    </li>
                    <li class="nav-item nav-profile dropdown">
                      <a
                        class="nav-link dropdown-toggle"
                        href="#"
                        data-bs-toggle="dropdown"
                        id="profileDropdown"
                      >
                        <img src="images/faces/face5.jpg" alt="profile" />
                        <span class="nav-profile-name">{{Auth::user()->name}}</span>
                      </a>
                      <div
                        class="dropdown-menu dropdown-menu-right navbar-dropdown"
                        aria-labelledby="profileDropdown"
                      >
                        <a class="dropdown-item">
                          <i class="mdi mdi-settings text-primary"></i>
                          Settings
                        </a> --}}
            {{-- <a class="dropdown-item">
                          
                          Logout
                        </a> --}}
            {{-- <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                     <i class="mdi mdi-logout text-primary"></i>    {{ __('Logout') }}
                     </a>
            
                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                         @csrf
                     </form>
            
                      </div>
                    </li>
                  </ul>
                  <button
                    class="navbar-toggler navbar-toggler-right d-lg-none align-self-center"
                    type="button"
                    data-toggle="offcanvas"
                  >
                    <span class="mdi mdi-menu"></span>
                  </button>
                </div>
              </nav> --}}
            @yield('content')
        </div>
    </div>


    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function() {
            el.classList.toggle("toggled");
        };
    </script>
    @yield('script')
</body>

</html>
