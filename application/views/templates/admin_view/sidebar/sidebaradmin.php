<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php
                                                                                    if ($this->session->userdata('role_id') == 3) {
                                                                                        echo base_url('user');
                                                                                    } else {
                                                                                        echo  base_url('admin');
                                                                                    }
                                                                                    ?>">
        <div class="sidebar-brand-icon">
            <i class="fas fa-map-marker-alt"></i>
        </div>
        <div class="sidebar-brand-text mx-1">MATANUSA</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('tutorialweb'); ?>">
            <!-- <i class="fas fa-fw fa-tachometer-alt"></i> -->
            <i class="fas fa-fw fa-book"></i>
            <span>Tutorial</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span><strong>Nutrients</strong></span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Primer:</h6>
                <a class="collapse-item" href="<?= base_url('openmap'); ?>">Nitrogen(N)</a>
                <a class="collapse-item" href="<?= base_url('openmap/fosfor'); ?>">Fosfor(P)</a>
                <a class="collapse-item" href="<?= base_url('openmap/kalium'); ?>">Kalium(K)</a>
                <h6 class="collapse-header">Sekunder:</h6>
                <a class="collapse-item" href="<?= base_url('openmap/magnesium'); ?>">Magnesium(Mg)</a>
                <a class="collapse-item" href="<?= base_url('openmap/kalsium'); ?>">Kalsium(Ca)</a>
                <a class="collapse-item" href="<?= base_url('openmap/sulfur'); ?>">Sulfur(S)</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-table"></i>
            <span>Tabel</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Primer:</h6>
                <a class="collapse-item" href="<?= base_url('opentable'); ?>">Nitrogen(N)</a>
                <a class="collapse-item" href="<?= base_url('opentable/fosfor'); ?>">Fosfor(P)</a>
                <a class="collapse-item" href="<?= base_url('opentable/kalium'); ?>">Kalium(K)</a>
                <h6 class="collapse-header">Sekunder:</h6>
                <a class="collapse-item" href="<?= base_url('opentable/magnesium'); ?>">Magnesium(Mg)</a>
                <a class="collapse-item" href="<?= base_url('opentable/kalsium'); ?>">Kalsium(Ca)</a>
                <a class="collapse-item" href="<?= base_url('opentable/sulfur'); ?>">Sulfur(S)</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('openchart'); ?>">
            <!-- <i class="fas fa-fw fa-tachometer-alt"></i> -->
            <i class="fas fa-chart-pie"></i>
            <span>Bagan kondisi</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Query Menu -->
    <?php
    $role_id = $this->session->userdata('role_id');
    $queryMenu = "SELECT `user_menu`.`id`, `menu`
                    FROM `user_menu` JOIN `user_access_menu`
                    ON `user_menu`.`id` = `user_access_menu`.`menu_id`
                    WHERE `user_access_menu`.`role_id` = $role_id
                    ORDER BY `user_access_menu`.`menu_id` ASC
                    ";
    $menu = $this->db->query($queryMenu)->result_array();
    ?>

    <!-- LOOPING MENU -->
    <?php foreach ($menu as $m) : ?>
        <div class="sidebar-heading">
            <strong>
                <?= $m['menu']; ?>
            </strong>
        </div>

        <!-- submenu sesuai menu -->

        <?php
            $menuId = $m['id'];
            $querySubMenu = "SELECT *
        FROM `user_sub_menu` JOIN `user_menu`
        ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
        WHERE `user_sub_menu`.`menu_id` = $menuId
        ORDER BY `user_sub_menu`.`is_active` = 1
        ";
            $subMenu = $this->db->query($querySubMenu)->result_array();
            ?>

        <?php foreach ($subMenu as $sm) : ?>
            <!-- Nav Item -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url($sm['url']); ?>">
                    <i class="<?= $sm['icon']; ?>"></i>
                    <span><?= $sm['title']; ?></span></a>
            </li>

        <?php endforeach; ?>

        <hr class="sidebar-divider">

    <?php endforeach; ?>

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->