        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu"><!-- sidebar menu -->
            <div class="menu_section">
                <ul class="nav side-menu">
                    <li class="<?php if(isset($active1)){echo $active1;}?>">
                        <a href="dashboard.php"><i class="fa fa-dashboard"></i> Panel Principal</a>
                    </li>
                       <ul class="nav side-menu">
                               <li><a><i class="fa fa-home"></i> Mantenimientos<span class="fa fa-chevron-down"></span></a>
                                   <ul class="nav child_menu">
                                     <li><a href="users.php">Usuarios</a></li>
                                      <li><a href="tickets.php">Cargos</a></li>
                                      <li><a href="tickets.php">Catalogos de Problemas</a></li>
                                      <li><a href="tickets.php">Catalogos de Servicios</a></li>
                                        </ul>
                                        </li>
                           
                         <!-- sidebar menu -->
                                      
                          <ul class="nav side-menu">
                               <li><a><i class="fa fa-home"></i> Atenciones<span class="fa fa-chevron-down"></span></a>
                                   <ul class="nav child_menu">
                                     <li><a href="tickets.php">Nuevo caso</a></li>
                                      <li><a href="tickets.php">Mis Casos</a></li>
                                      <li><a href="tickets.php">Mis bandeja</a></li>
                                        </ul>
                                        </li>

                              <li class="<?php if(isset($active5)){echo $active5;}?>">
                              <a href="reports.php"><i class="fa fa-area-chart"></i> Estadisticas</a>
                            </li>
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