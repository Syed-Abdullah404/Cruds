<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="/style.css">

</head>

<body class="antialiased">
    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/dashboard') }}"
                        class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log
                        in</a>&nbsp;
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="w3-row mt-5">
            <div class="w3-half">
                <img src="/image/streetart.jpg" style="width:100%">
                <img src="/image/streetart2.jpg" style="width:100%">
                <img src="/image/streetart5.jpg" style="width:100%">
            </div>

            <div class="w3-half">
                <img src="/image/streetart3.jpg" style="width:100%">
                <img src="/image/streetart4.jpg" style="width:100%">
            </div>
        </div>

        <!-- End Page Content -->
    </div>

    <!-- Footer / About Section -->
    <footer class="w3-light-grey w3-padding-64 w3-center" id="about">
        <h2>About</h2>
        <img src="/image/boy.jfif" class="w3-image w3-padding-32" width="350" height="350">
        <form style="margin:auto;width:60%" action="/action_page.php" target="_blank">
            <p>Just me, myself and I, exploring the universe of unknownment. I have a heart of love and an interest of
                lorem ipsum and mauris neque quam blog. I want to share my world with you. Praesent tincidunt sed tellus
                ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.
                Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies
                congue gravida diam non fringilla.</p>
            <p class="w3-large w3-text-pink">Do not hesitate to contact me!</p>
            <div class="w3-section">
                <label><b>Name</b></label>
                <input class="w3-input w3-border" type="text" required name="Name">
            </div>
            <div class="w3-section">
                <label><b>Email</b></label>
                <input class="w3-input w3-border" type="text" required name="Email">
            </div>
            <div class="w3-section">
                <label><b>Message</b></label>
                <input class="w3-input w3-border" required name="Message">
            </div>
            <button type="submit" class="w3-button w3-block w3-dark-grey">Send</button>
        </form>
        <br>
        <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank"
                class="w3-hover-text-green">w3.css</a></p>
    </footer>
</body>

</html>
