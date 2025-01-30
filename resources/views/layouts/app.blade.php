<!DOCTYPE HTML>
<html>
    <head>
        <title>CounsellingTherapySheffield</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
        <noscript><link rel="stylesheet" href="{{ asset('assets/css/noscript.css') }}" /></noscript>
        <style>
            @media screen and (max-width: 736px) {
                /* Add these styles inside your existing media query */

/* Dark background for content sections */
.spotlight .content {
    background-color: rgba(46, 56, 66, 0.95) !important;
    padding: 2em !important;
    color: #ffffff !important;
}

/* Banner styles */
#banner {
    background-color: rgba(46, 56, 66, 0.95) !important;
}

/* Adjust main title position */
#banner .inner {
    padding-top: 2em !important;
}

#banner h2 {
    margin-top: -12em !important;
}
                /* Header Fixes */
                #page-wrapper {
                    padding-top: 3em !important;
                }
                #header {
                    height: 3em !important;
                    line-height: 3em !important;
                    position: fixed !important;
                    width: 100% !important;
                    top: 0 !important;
                    left: 0 !important;
                    z-index: 10000 !important;
                    padding: 0 1em !important;
                    background: #2e3842  !important;
                    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1) !important;
                }
                #header a {
                    display: flex !important;
                    align-items: center !important;
                    height: 100% !important;
                    width: auto !important;
                    padding: 0 !important;
                    border: none !important;
                    text-decoration: none !important;
                }
                #header img {
                    height: 2.5em !important;
                    width: auto !important;
                    margin-right: 0.5em !important;
                    object-fit: contain !important;
                }
                #header h1 {
                    font-size: 1em !important;
                    margin: 0 !important;
                    padding: 0 !important;
                    position: relative !important;
                    left: 0 !important;
                    color: #ffffff !important;
                    white-space: nowrap !important;
                    overflow: hidden !important;
                    text-overflow: ellipsis !important;
                }
                /* Fix transparent header on banner */
                #header.alt {
                    background: transparent !important;
                    box-shadow: none !important;
                }
                #header.alt h1 {
                    color: #ffffff !important;
                }
            
              
            
                /* Fix columns layout */
                .info-grid {
                    display: grid !important;
                    grid-template-columns: 1fr !important;
                    gap: 2em !important;
                    padding: 1em !important;
                }
            
                .info-card {
                    background: #f5e6d3 !important;
                    padding: 1.5em !important;
                    margin-bottom: 1em !important;
                    border-radius: 8px !important;
                    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1) !important;
                }
            
                /* Fix list ticks */
                .issues-grid ul {
                    list-style: none !important;
                    padding-left: 0 !important;
                }
            
                .issues-grid ul li {
                    position: relative !important;
                    padding-left: 2em !important;
                    margin-bottom: 1em !important;
                }
            
                
            
                /* Fix contact form background */
                #contact {
                    background-color: #2e3842 !important;
                }
            
                #contact .inner {
                    background-color: #2e3842 !important;
                    padding: 2em !important;
                    border-radius: 8px !important;
                }
            
                /* Fix all wrapper backgrounds */
               
            
                .wrapper.style1,
                .wrapper.style2,
                .wrapper.style3 {
                    background-color: #f5e6d3 !important;
                }
            
                /* Ensure text colors are readable */
                .wrapper,
                .wrapper.style1,
                .wrapper.style2,
                .wrapper.style3 {
                    color: #4a4a4a !important;
                }
            
                .wrapper h2,
                .wrapper h3 {
                    color: #2c1810;
                }
            }
            
            /* Additional styles for very small screens */
            @media screen and (max-width: 480px) {
                #header h1 {
                    font-size: 0.9em !important;
                }
                
                #header img {
                    height: 2.2em !important;
                }
            }
            @media screen and (min-width: 737px) {
                #header {
                    height: 3em !important;
                    line-height: 3em !important;
                    position: fixed !important;
                    width: 100% !important;
                    top: 0 !important;
                    left: 0 !important;
                    z-index: 10000 !important;
                    padding: 0 1em !important;
                    background: #2e3842  !important;
                    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1) !important;
                }
                #header a {
                    display: flex !important;
                    align-items: center !important;
                    height: 100% !important;
                    width: auto !important;
                    padding: 0 !important;
                    border: none !important;
                    text-decoration: none !important;
                }
                #header img {
                    height: 2.5em !important;
                    width: auto !important;
                    margin-right: 0.5em !important;
                    object-fit: contain !important;
                }
                #header h1 {
                    font-size: 1em !important;
                    margin: 0 !important;
                    padding: 0 !important;
                    position: relative !important;
                    left: 0 !important;
                    color: #ffffff !important;
                    white-space: nowrap !important;
                    overflow: hidden !important;
                    text-overflow: ellipsis !important;
                }
            }
            </style>
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