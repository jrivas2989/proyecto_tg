        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu"><!-- sidebar menu -->
            <div class="menu_section">
                <ul class="nav side-menu">
                    <li class="<?php if(isset($active1)){echo $active1;}?>">
                        <a href="dashboard.php"><i class="fa fa-dashboard"></i> Atenciones</a>
                    </li>

                       
                       <li class="<?php if(isset($active6)){echo $active6;}?>">
                        <a href="users.php"><i class="fa fa-users"></i> Usuarios</a>
                    </li>

                     <ul class="submenu">
                        <li><a href="#">Casos recibidos<i class="icono derecha fa fa-chevron-down" aria-hidden="true"></i></a>
                            <ul>
                                <li><a href="#">Nuevos Casos</a></li>
                                <li><a href="#">Mis casos</a></li>
                             </ul>

                </ul>
            </div>
        </div><!-- /sidebar menu -->
    </div>
</div> 

    <div class="top_nav"><!-- top navigation -->
        <div class="nav_menu">
            <nav>
                <div class="nav toggle">
                    <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <li class="">
                        <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            <img src="images/profiles/<?php echo $profile_pic;?>" alt=""><?php echo $name;?>
                            <span class=" fa fa-angle-down"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-usermenu pull-right">
                            <li><a href="dashboard.php"><i class="fa fa-user"></i> Mi cuenta</a></li>
                            <li><a href="action/logout.php"><i class="fa fa-sign-out pull-right"></i> Cerrar Sesión</a></li>
                        </ul>


                    
                            </ul>
     

                    </li>
                </ul>
            </nav>
        </div>
    </div><!-- /top navigation -->    