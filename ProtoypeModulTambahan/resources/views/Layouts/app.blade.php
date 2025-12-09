<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <title>@yield('title') - e-Sistem Pengurusan Jalan Aset</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background-color: #ffffff;
        }

        .sidebar {
            background: #a1d3f7;
            height: 100vh;
            position: fixed;
            left: 0;
            top: 0;
            width: 280px;
            box-shadow: 2px 0 10px rgba(0, 0, 0, 0.1);
            z-index: 1000;

            /* hidden by default */
            transform: translateX(-280px);
            transition: transform .2s ease-in-out;
        }

        .sidebar.show {
            transform: translateX(0);
        }

        .main-content {
            margin-left: 0; /* no sidebar at start */
            padding: 2rem;
            transition: margin-left .2s ease-in-out;
        }

        .main-content.with-sidebar {
            margin-left: 280px;
        }

        .sidebar .nav-link {
            color: #0c3b52;
            padding: 1rem 1.5rem;
            border-left: 4px solid transparent;
        }

        .sidebar .nav-link:hover,
        .sidebar .nav-link.active {
            color: #0c3b52;
            background: rgba(255, 255, 255, 0.4);
            border-left-color: #0d6efd;
        }
    </style>
</head>

<body>

    @include('partials.sidebar')

    <div class="main-content" id="mainContent">
        @include('partials.topbar')

        <div class="container-fluid">
            @yield('content')
        </div>
    </div>

    {{-- Login / Demo User modal --}}
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">
                        <i class="bi bi-person-circle me-2"></i> Log masuk (Demo)
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                </div>
                <div class="modal-body">
                    <p class="small text-muted mb-3">
                        Buat masa ini sistem menggunakan akaun <strong>Demo User</strong> sahaja.
                        Borang di bawah hanya untuk paparan UI prototaip.
                    </p>

                    <form>
                        <div class="mb-3">
                            <label class="form-label">Nama pengguna</label>
                            <input type="text" class="form-control" value="demo.user" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Kata laluan</label>
                            <input type="password" class="form-control" value="••••••••" readonly>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        Tutup
                    </button>
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">
                        Teruskan sebagai Demo User
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const toggleBtn = document.getElementById('toggleSidebar');
            const sidebar  = document.getElementById('sidebar');
            const main     = document.getElementById('mainContent');

            if (toggleBtn && sidebar && main) {
                toggleBtn.addEventListener('click', () => {
                    sidebar.classList.toggle('show');
                    main.classList.toggle('with-sidebar');
                });
            }
        });
    </script>
</body>
</html>
