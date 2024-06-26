<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button" onclick="collapseSidebar()"><i class="fas fa-bars"></i></a>
        </li>
        <!--<li class="nav-item d-none d-sm-inline-block">
            <a href="../../index3.html" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Contact</a>
        </li> -->
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
            <a class="nav-link d-none" data-widget="navbar-search" href="#" role="button" id="navbar_buscar">
                <i class="fas fa-search"></i>
            </a>
            <div class="navbar-search-block">
                <form class="form-inline" id="navbar_form_buscar">
                    <div class="input-group input-group-sm">
                        <input class="form-control form-control-navbar" type="search" placeholder="Buscar"  aria-label="Search" name="keyword" id="navbar_input_buscar" required>
                        <div class="input-group-append">
                            <button class="btn btn-navbar" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                            <button class="btn btn-navbar" type="button" data-widget="navbar-search" id="nabvar_x_cerrar">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </li>

        <!-- Messages Dropdown Menu -->

        <!-- Notifications Dropdown Menu -->


        <!-- USER Dropdown Menu -->
        <li class="nav-item dropdown user-menu">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                <img src="<?php echo verImagen($controller->USER_PATH, true); ?>" class="user-image img-circle elevation-2" alt="User Image" id="navbar_image_profile" style="width: 40px;
                                                                                                                                                                             height: 40px;
                                                                                                                                                                             borderRadius: 100%;
                                                                                                                                                                             object-fit: cover;">
                <span class="d-none d-md-inline" id="navbar_header_name">
                    <?php if (isset($controller->USER_NAME)){ echo $controller->USER_NAME; } ?>
                </span>
            </a>
            <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <!-- User image -->
                <li class="user-header bg-primary">
                    <img src="<?php echo verImagen($controller->USER_PATH, true); ?>" class="img-circle elevation-2" alt="User Image" id="dropdown_navbar_image" style="width: 110px;
                                                                                                                                                                             height: 110px;
                                                                                                                                                                             borderRadius: 100%;
                                                                                                                                                                             object-fit: cover;">

                    <p>
                        <span id="ficha_nombre"><?php if (isset($controller->USER_NAME)){ echo $controller->USER_NAME; } ?></span>
                        <small id="ficha_email"><?php if (isset($controller->USER_EMAIL)){echo $controller->USER_EMAIL; } ?></small>
                    </p>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                    <a href="<?php asset('admin/perfil/'); ?>" class="btn btn-default btn-flat">Perfil</a>
                    <a href="<?php asset('logout'); ?>" class="btn btn-default btn-flat float-right">Cerrar sesión</a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                <i class="fas fa-th-large"></i>
            </a>
        </li>
    </ul>
</nav>