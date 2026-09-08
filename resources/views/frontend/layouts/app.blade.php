<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'BlogHub')</title>
    <meta name="description" content="BlogHub is a publishing platform for independent writers and staff writers">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,300..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/dark-mode.css') }}">
</head>
<body data-page="index.html">

    <a href="#main" class="skip-link">Skip to content</a>

    {{-- Main Navbar --}}
    @include('layouts.navbar')

    {{-- Dynamic Main Content --}}
    <main id="main">
        @yield('main')
    </main>

    {{-- Dynamic Footer --}}
    @include('layouts.footer')

    <div class="bh-scroll-progress"></div>
    <button class="bh-back-to-top" aria-label="Back to top"></button>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const form = document.getElementById("newsletterForm");
            const input = document.getElementById("newsletterInput");
            const btn = document.getElementById("newsletterBtn");

            if (form && btn) {
                form.addEventListener("submit", (e) => {
                    e.preventDefault();
                    if (typeof BH !== 'undefined' && BH.setLoading) {
                        BH.setLoading(btn, true);
                        setTimeout(() => { 
                            BH.setLoading(btn, false); 
                            if(input) input.value = ""; 
                            BH.showToast("Subscribed!"); 
                        }, 1200);
                    }
                });
            }
        });
    </script>

    @yield('script')
</body>
</html>