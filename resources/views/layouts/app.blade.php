<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'TechNova')</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <style>
        /* Global Styles */
        body {
            background-color: #f8f9fa;
            font-family: 'Roboto', sans-serif;
            color: #333;
        }
        a {
            text-decoration: none;
        }
        /* Top Bar */
        .top-bar {
            background-color: #1a237e;
            color: #fff;
            font-size: 0.9rem;
            padding: 5px 0;
        }
        .top-bar a {
            color: #ff8f00;
            text-decoration: none;
        }
        /* Navbar */
        .navbar {
            background-color: #1a237e;
            padding: 15px 0;
        }
        .navbar-brand,
        .navbar-nav .nav-link {
            color: #fff !important;
        }
        .navbar-nav .nav-link:hover {
            color: #ff8f00 !important;
        }
        .lang-toggle {
            background-color: #ff8f00;
            border: none;
            color: #fff;
            padding: 5px 10px;
            cursor: pointer;
            border-radius: 5px;
            font-size: 0.9rem;
        }
        /* Footer */
        footer {
            background-color: #1a237e;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }
    </style>
    @stack('styles')
</head>
<body>
    <!-- Top Bar -->
    <div class="top-bar">
        <div class="container d-flex justify-content-between align-items-center">
            <div>
                Email: <a href="mailto:mohamadit102@gmail.com">mohamadit102@gmail.com</a> | Phone: +963945852707 | Mon – Thu: 9:00 AM – 5:00 PM
            </div>
            <button class="lang-toggle" id="toggleLangBtn">العربية</button>
        </div>
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand translatable" data-en="TechNova" data-ar="تك نوفا" href="{{ route('home') }}">TechNova</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNavbar">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link translatable" data-en="Home" data-ar="الرئيسية" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link translatable" data-en="About Us" data-ar="من نحن" href="{{ route('about') }}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link translatable" data-en="Services" data-ar="خدماتنا" href="{{ route('services') }}">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link translatable" data-en="Projects" data-ar="مشاريعنا" href="{{ route('projects') }}">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link translatable" data-en="Contact Us" data-ar="تواصل معنا" href="{{ route('contact') }}">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- المحتوى الرئيسي للصفحة -->
    <main class="container my-4">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p class="translatable" data-en="Welcome to TechNova, your number one destination for solving your IT challenges. We are pioneers in technology – remember our slogan: 'Your Dream, Our Application'." data-ar="مرحباً بكم في تك نوفا، وجهتكم الأولى لحل تحديات تكنولوجيا المعلومات. نحن رواد في التكنولوجيا – تذكر شعارنا: 'حلمك، تطبيقنا'.">
                Welcome to TechNova, your number one destination for solving your IT challenges. We are pioneers in technology – remember our slogan: "Your Dream, Our Application".
            </p>
            <p>&copy; 2025 TechNova. All Rights Reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <!-- Custom JavaScript for Language Toggle -->
    <script>
        let currentLanguage = 'en';
        const toggleBtn = document.getElementById('toggleLangBtn');

        function updateLanguage() {
            document.querySelectorAll('.translatable').forEach(function(elem) {
                let text = elem.getAttribute('data-' + currentLanguage);
                if (text !== null) {
                    elem.innerHTML = text;
                }
            });
            toggleBtn.innerHTML = currentLanguage === 'en' ? 'العربية' : 'English';
            document.body.style.direction = currentLanguage === 'en' ? 'ltr' : 'rtl';
            document.documentElement.lang = currentLanguage;
        }

        toggleBtn.addEventListener('click', function() {
            currentLanguage = currentLanguage === 'en' ? 'ar' : 'en';
            updateLanguage();
        });

        // تهيئة اللغة الافتراضية
        updateLanguage();
    </script>
    @stack('scripts')
</body>
</html>
