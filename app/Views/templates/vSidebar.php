<?php if(in_groups('SUPERADMIN')) : ?>
    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#user" data-bs-toggle="collapse" href="#">
            <i class="fa-solid fa-users"></i><span>Pengguna</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="user" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
            <a href="/admin/listUser">
                <i class="fa-solid fa-address-card"></i>
                <span>Data Pengguna</span>
            </a>
            </li>
            <li>
            <a href="/admin/formUser">
                <i class="fa-solid fa-user-plus"></i><span>Tambah Pengguna</span>
            </a>
            </li>
        </ul>
        </li><!-- End Components Nav -->
    </ul>
<?php else : ?>
    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#surat" data-bs-toggle="collapse" href="#">
            <i class="fa-solid fa-envelope"></i><span>Surat</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="surat" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
            <a href="/user/listSurat">
                <i class="fa-solid fa-envelopes-bulk"></i>
                <span>Daftar Surat</span>
            </a>
            </li>
            
            <li>
                <?php if(in_groups('OPR') || in_groups('STL') || in_groups('STI') || in_groups('PPO') || in_groups('PTI')) : ?>
                    <a href="/user/formSurat">
                        <i class="fa-solid fa-circle-plus"></i>
                        <span>Registrasi Surat</span>
                    </a>
                <?php endif; ?>
            </li>
        </ul>
        </li><!-- End Components Nav -->
    </ul>
<?php endif; ?>
