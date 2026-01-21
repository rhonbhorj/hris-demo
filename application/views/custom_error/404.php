<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>404 | Page Not Found</title>

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap"
        rel="stylesheet" />

    <link class="js-stylesheet" href="/assets/css/light.css" rel="stylesheet">
    <style>
@keyframes fadeInUp {from {opacity: 0;transform: translateY(30px);}to {opacity: 1;transform: translateY(0);}}@keyframes fadeIn {from {opacity: 0;}to {opacity: 1;}}@keyframes scaleIn {from {opacity: 0;transform: scale(0.9);}to {opacity: 1;transform: scale(1);}}.animate-fade-in-up {animation: fadeInUp 0.8s ease-out forwards;opacity: 0;}.animate-fade-in {animation: fadeIn 1s ease-out forwards;opacity: 0;}.animate-scale-in {animation: scaleIn 0.6s ease-out forwards;opacity: 0;}.delay-1 {animation-delay: 0.1s;}.delay-2 {animation-delay: 0.2s;}.delay-3 {animation-delay: 0.3s;}.delay-4 {animation-delay: 0.4s;}.delay-5 {animation-delay: 0.5s;}.btn-primary {transition: all 0.3s ease;}.btn-primary:hover {transform: translateY(-2px);box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);}
    </style>
</head>

<body data-theme="default" data-layout="fluid" data-sidebar-position="left" data-sidebar-layout="default">
    <main class="d-flex w-100 h-100">
        <div class="container d-flex flex-column">
            <div class="row vh-100">
                <div class="col-sm-10 col-md-8 col-lg-6 col-xl-5 mx-auto d-table h-100">
                    <div class="d-table-cell align-middle">

                        <div class="text-center">
                            <h1 class="display-1 fw-bold animate-scale-in">404</h1>
                            <p class="h2 animate-fade-in-up delay-1">Page not found.</p>
                            <p class="lead fw-normal mt-3 mb-4 animate-fade-in-up delay-2">
                                The page you are looking for might have been removed.
                            </p>
                            
                            <a class='btn btn-primary btn-lg animate-fade-in-up delay-3' 
                               href='/'>
                                Return to website
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            setTimeout(() => {
                const animatedElements = document.querySelectorAll('[class*="animate-"]');
                animatedElements.forEach(element => {
                    const currentOpacity = window.getComputedStyle(element).opacity;
                    if (currentOpacity === '0') {
                        void element.offsetWidth;
                    }
                });
            }, 100);
        });
    </script>
</body>

</html>