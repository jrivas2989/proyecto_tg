        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu"><!-- sidebar menu -->
            <div class="menu_section">
                <ul class="nav side-menu">
                    <li class="<?php if(isset($active1)){echo $active1;}?>">
                        <a href="dashboard.php"><i class="fa fa-dashboard"></i> Panel Principal</a>
                    </li>
                    <li class="<?php if(isset($active6)){echo $active6;}?>">
                        <a href="users.php"><i class="fa fa-users"></i> Usuarios</a>
                    </li>                           
                    <li>
                      <a><i class="fa fa-home"></i> Atenciones<span class="fa fa-chevron-down"></span></a>
                       <ul class="nav child_menu">
                         <li><a href="tickets.php">Nuevo caso</a></li>
                          <li><a href="tickets2.php">Mis Casos</a></li>
                          <li><a href="tickets.php">Mis bandeja</a></li>
                            </ul>
                    </li>
                    <li class="<?php if(isset($active5)){echo $active5;}?>">
                      <a href="reports.php"><i class="fa fa-area-chart"></i> Estadisticas</a>
                    </li>
                    <ul class="nav child_menu">
                         <li><a href="tickets.php">Resumen</a></li>
                          <li><a href="tickets2.php">Produccion</a></li>
                          <li><a href="tickets.php">Avance</a></li>
                          <li><a href="tickets.php">Casos</a></li>
                            </ul>
     
                        <li class="<?php if(isset($active3)){echo $active3;}?>">
                               <a href="projects.php"><i class="fa fa-list-alt"></i> Mantenimientos</a>
                                </li>
                        <ul class="nav child_menu">
                            <li><a href="tickets.php">Catalogo de Problemas</a></li>
                             <li><a href="tickets2.php">Catalogo de Servicios</a></li>
                             <li><a href="tickets.php">Cargos</a></li>
                            </ul>

                              <li class="<?php if(isset($active4)){echo $active4;}?>">
                              <a href="categories.php"><i class="fa fa-align-left"></i> Operadores</a>
                          </li>
                                
            </ul>
            </div>
        </div><!-- /sidebar menu -->
    </div>
</div> 
<!-- top navigation -->
     <div class="top_nav">
            <div class="nav_menu">
                <div class="nav toggle">
                  <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <li class="nav-item dropdown open">
                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            <img src="images/profiles/<?php echo $profile_pic;?>" alt="Profile Image"><?php echo $name;?>
                            <span class=" fa fa-angle-down"></span>
                            </a>
                            <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                            <li role="presentation" class="nav-item dropdown open">
                            <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-envelope-o"></i>
                            <span class="badge bg-green">0</span>
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
    </div>

    <!-- /top navigation -->   
    