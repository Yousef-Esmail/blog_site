<!-- ✅ Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ route('posts.index') }}">My Blog</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-center">

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('posts.index') ? 'active' : '' }}"
                        href="{{ route('posts.index') }}">Posts</a>
                </li>

                <li class="nav-item">
                    <a class="btn btn-outline-light ms-2" href="{{ route('posts.create') }}">+ New Post</a>
                </li>

                <li class="nav-item ms-3">
                    <button id="theme-toggle" class="btn btn-outline-light btn-sm">
                        🌙 Dark
                    </button>
                </li>

                <li class="nav-item dropdown ms-3">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown">
                        User
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="#">My Profile</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item text-danger" href="#">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- ✅ CSS لتفعيل الـ Dark Mode -->
<style>
    body {
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    body.dark-mode {
        background-color: #121212;
        color: #f1f1f1;
    }

    body.dark-mode .navbar {
        background-color: #1e1e1e !important;
    }

    body.dark-mode .card,
    body.dark-mode .dropdown-menu {
        background-color: #2b2b2b;
        color: #f1f1f1;
    }

    body.dark-mode a.nav-link,
    body.dark-mode .navbar-brand {
        color: #f1f1f1 !important;
    }

    body.dark-mode a.nav-link.active {
        color: #0d6efd !important;
    }

    body.dark-mode .btn-outline-light {
        border-color: #f1f1f1;
        color: #f1f1f1;
    }

    body.dark-mode .btn-outline-light:hover {
        background-color: #f1f1f1;
        color: #121212;
    }
</style>

<!-- ✅ JavaScript لتبديل الوضع -->
<script>
    const toggleBtn = document.getElementById('theme-toggle');

    toggleBtn.addEventListener('click', () => {
        document.body.classList.toggle('dark-mode');

        if (document.body.classList.contains('dark-mode')) {
            toggleBtn.textContent = '☀️ Light';
        } else {
            toggleBtn.textContent = '🌙 Dark';
        }

        localStorage.setItem('theme', document.body.classList.contains('dark-mode') ? 'dark' : 'light');
    });

    window.addEventListener('load', () => {
        if (localStorage.getItem('theme') === 'dark') {
            document.body.classList.add('dark-mode');
            toggleBtn.textContent = '☀️ Light';
        }
    });
</script>