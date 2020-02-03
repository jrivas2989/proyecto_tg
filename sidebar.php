        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu"><!-- sidebar menu -->
            <div class="menu_section">
                <ul class="nav side-menu">
                    <li class="<?php if(isset($active1)){echo $active1;}?>">
                        <a href="dashboard.php"><i class="fa fa-dashboard"></i> Panel Principal</a>
                    </li>
                    <li class="<?php if(isset($active1)){echo $active1;}?>">
                        <a href="perfil.php"><i class="fa fa-users"></i>Mi Perfil</a>
                    </li>
                    <li class="<?php if(isset($active6)){echo $active6;}?>">
                        <a href="users.php"><i class="fa fa-users"></i> Usuarios</a>
                    </li>
                    <li class="<?php if(isset($active2)){echo $active2;}?>">
                        <a href="tickets.php"><i class="fa fa-ticket"></i> Nuevo caso</a>
                    </li>
                    <li class="<?php if(isset($active2)){echo $active2;}?>">
                    <a href="resp.php"><i class="fa fa-desktop"></i>Generar backup de base de datos </a>
                    </li>
                    <li class="<?php if(isset($active5)){echo $active5;}?>">
                     <li><a><i class="fa fa-bar-chart-o"></i> Estadisticas<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                    <li><a href="reports.php">Estadisticas Procesadas por Usuarios</a></li>
                    <li><a href="bar.php">Estadisticas Grafica por operadores</a></li>
                    <li><a href="line-customTooltips.php">Estadisticas Grafica por problemas</a></li>
                    <li><a><i class="fa fa-desktop"></i>Consultar Tabla Excel<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                    <li><a href="leer.php">Leer estadisticas excel</a></li>
                    <li class="<?php if(isset($active5)){echo $active5;}?>">
                     <li><a><i class="fa fa-bar-chart-o"></i> Reportes<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                    <li><a href="reports.php">Generar reportes..</a></li>
                    </ul>
                    </li>
                    </ul>
                    </li>                           
                   </li>
                  </ul>
              </div>
        </div>
    </div>
</div> 
<!-- /sidebar menu -->
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
                            <li><a href="perfil.php"><i class="fa fa-user"></i> Mi cuenta</a></li>
                            <li><a href="action/logout.php"><i class="fa fa-sign-out pull-right"></i> Cerrar Sesión</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- /top navigation -->

<script src="js/push.min.js"></script>
   <?php
            echo '</script>

<script>
          Push.create("Tienes casos recibidos por resolver", {
            body: "Resuelvalos a la mayor  brevedad posible",
            icon: "images/cpk.jpg",
            timeout: 5000,
            onClick: function () {

                 window.location="https://github.com/jrivas2989/proyecto_tg";
                 this.close();
            }
          
       });
          </script>'
          ?>


   
 
    