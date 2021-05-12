<header class="main-header">
    <nav class="navbar navbar-static-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="<?= site_url('welcome') ?>" class="navbar-brand"><b>Admin</b>LTE</a>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                    <i class="fa fa-bars"></i>
                </button>
            </div>
            <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="<?= site_url('welcome') ?>">Home</a>
                    </li>
                    <li><a href="#">Link</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                            <li class="divider"></li>
                            <li><a href="#">One more separated link</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="<?= assets_img() ?>profile.jpg" class="user-image" alt="User Image">
                            <span class="hidden-xs">Admin</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="user-header">
                                <img src="<?= assets_img() ?>profile.jpg" class="img-circle" alt="User Image">
                                <p>
                                    Admin
                                    <small>Administrator</small>
                                </p>
                            </li>
                            <li class="user-profil">
                                <a href="#"><i class="dropdown-icon icon-user-plus"></i>&nbsp;&nbsp;Profil Saya</a>
                            </li>
                            <li class="divider"></li>
                            <li class="user-profil">
                                <a href="#"><i class="dropdown-icon icon-lock2"></i>&nbsp;&nbsp;Ganti Password</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown notifications-menu bg-red">
                        <a href="#" id="logout"><i class="icon-switch"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>