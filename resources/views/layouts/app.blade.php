<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../images/favicon.ico">
    <title>Laravel Comics</title>
    <!-- Styles -->
    @vite('resources/js/app.js')
</head>

<body>
    @include('partials.header')
    <div class="jumbo">
    </div>
    <div class="main_content">
        <div class="container">
            <div class="series_indicator text_center">
                <h2 class="series_text">
                    CURRENT SERIES
                </h2>
            </div>

            <main>
                @yield('content')
            </main>

            <div class="load_more text_center d_flex justify_center">
                <a class="load_more_button" href="#">LOAD MORE</a>
            </div>
        </div>
    </div>
    @include('partials.footer')
</body>

</html>