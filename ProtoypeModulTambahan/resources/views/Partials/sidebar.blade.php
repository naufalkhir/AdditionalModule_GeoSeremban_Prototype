<div class="sidebar d-flex flex-column" id="sidebar">
    <div class="p-4 border-bottom">
        <h4 class="mb-0">e-Sistem Jalan Aset</h4>
    </div>

    <nav class="nav flex-column flex-grow-1">
        <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}"
           href="{{ route('home') }}">
            <i class="bi bi-house-door me-2"></i> Home
        </a>

        <a class="nav-link {{ request()->routeIs('Aset-baharu.form') ? 'active' : '' }}"
           href="{{ route('Aset-baharu.form') }}">
            <i class="bi bi-plus-circle me-2"></i> Permohonan Aset
        </a>

        <a class="nav-link {{ request()->routeIs('pindaan-aset.form') ? 'active' : '' }}"
           href="{{ route('pindaan-aset.form') }}">
            <i class="bi bi-pencil me-2"></i> Pindaan Aset Infra
        </a>

        <a class="nav-link {{ request()->routeIs('pelupusan-aset.form') ? 'active' : '' }}"
           href="{{ route('pelupusan-aset.form') }}">
            <i class="bi bi-trash me-2"></i> Perlupusan Aset
        </a>

        <a class="nav-link {{ request()->routeIs('penyelenggaraan-aset.form') ? 'active' : '' }}"
           href="{{ route('penyelenggaraan-aset.form') }}">
            <i class="bi bi-tools me-2"></i> Penyelenggaraan Aset
        </a>

        <a class="nav-link {{ request()->routeIs('audit-trail.index') ? 'active' : '' }}"
           href="{{ route('audit-trail.index') }}">
            <i class="bi bi-activity me-2"></i> Jejak Audit
        </a>
    </nav>

    <div class="border-top p-3">
        <a href="#" class="nav-link text-danger">
            <i class="bi bi-box-arrow-right me-2"></i> Sign out
        </a>
    </div>
</div>
