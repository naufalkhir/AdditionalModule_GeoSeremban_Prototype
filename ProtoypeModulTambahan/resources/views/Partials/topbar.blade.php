<nav class="navbar navbar-light shadow-sm mb-3" style="background:#578cbe;">
    <div class="container-fluid d-flex align-items-center justify-content-between">

        {{-- Hamburger icon on the left --}}
        <button class="btn btn-link d-flex align-items-center" id="toggleSidebar" type="button">
            <i class="bi bi-list fs-3 text-white"></i>
        </button>

        {{-- Title with solid shadow --}}
        <span class="navbar-brand mb-0 h4 text-white fw-bold"
              style="text-shadow: 1px 1px 0 #35527b, 2px 2px 0 #24344f;">
            e-Sistem Pengurusan Aset MBS
        </span>

        {{-- Demo User button opens login modal --}}
        <button class="btn btn-primary rounded-pill px-3 py-2"
                data-bs-toggle="modal" data-bs-target="#loginModal">
            <i class="bi bi-person-circle me-1"></i> Demo User
        </button>
    </div>
</nav>
