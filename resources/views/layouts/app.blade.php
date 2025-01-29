<!DOCTYPE HTML>
<html>
    <head>
        <title>CounsellingTherapySheffield</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
        <noscript><link rel="stylesheet" href="{{ asset('assets/css/noscript.css') }}" /></noscript>
    </head>
    <body class="landing is-preload">

        <!-- Page Wrapper -->
        <div id="page-wrapper">

            <!-- Header -->
            <header id="header" class="alt">
                <a href="{{ route('home') }}" style="display: flex; align-items: center; text-decoration: none; border: none;">
                    <img src="{{ asset('assets/css/images/logo.jpg') }}" 
                         alt="Logo" 
                         style="height: 60px; width: auto; margin-right: 10px;">
                    <h1 style="margin: 0; color: inherit; left: 5%; font-size: 1.5em;">Embrace Resilience Therapy</h1>
                </a>
            </header>
            

            @yield('content')

            <!-- Footer -->
            <footer id="footer">
                <ul class="icons">
                    <li><a href="https://www.instagram.com/counsellingtherapysheffield/?hl=en" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
                    <li><a href="https://www.counselling-directory.org.uk/counsellors/shabina-ishaq?_gl=1%2A1dyaj3g%2A_up%2AMQ..%2A_gs%2AMQ..&gclid=CjwKCAiAneK8BhAVEiwAoy2HYcuRMGgwfZuadydgsT0-vciXMkfPBaztvcklCtnd6iEM_qvQ6FdMNhoCxkYQAvD_BwE" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>
                </ul>
                <ul class="copyright">
                    <li>&copy; {{ date('Y') }} Embrace Resilience Therapy</li><li>Design: <a href="https://www.linkedin.com/in/harris-fiaz-b44553251/">By Harris Fiaz</a></li>
                </ul>
            </footer>

        </div>

        <!-- Scripts -->
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.scrollex.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.scrolly.min.js') }}"></script>
        <script src="{{ asset('assets/js/browser.min.js') }}"></script>
        <script src="{{ asset('assets/js/breakpoints.min.js') }}"></script>
        <script src="{{ asset('assets/js/util.js') }}"></script>
        <script src="{{ asset('assets/js/main.js') }}"></script>

    </body>
</html>