<?php

include_once("config.php");


$result = $dbConn->query("SELECT * FROM motivos_es_gt ORDER BY motivo DESC");
?>


<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no" />

  <title>Ing. Dennis E. Rodriguez</title>


  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="bower_components/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="bower_components/metisMenu/dist/metisMenu.min.css">
  <link rel="stylesheet" href="bower_components/Waves/dist/waves.min.css"> 
  <link rel="stylesheet" href="bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css"> 

  <link rel="stylesheet" href="js/selects/cs-select.css">
  <link rel="stylesheet" href="js/selects/cs-skin-elastic.css">

  <link rel="stylesheet" href="bower_components/DataTables/media/css/jquery.dataTables.css">
  <link rel="stylesheet" href="bower_components/datatables-tabletools/css/dataTables.tableTools.css">

  <link rel="stylesheet" href="bower_components/c3/c3.min.css">
  <link rel="stylesheet" href="bower_components/zabuto_calendar/zabuto_calendar.min.css">
    <script src="js/menu/modernizr.custom.js"></script>
 
  <link rel="stylesheet" href="css/style.css">
 
  <link rel="icon" href="img/favicon.ico" type="image/x-icon" />
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />

</head>

<body>
  <!--Preloader-->
  <div id="preloader" class="preloader table-wrapper">
    <div class="table-row">
      <div class="table-cell">
        <div class="la-ball-scale-multiple la-3x">
          <div></div>
          <div></div>
          <div></div>
        </div>
      </div>
    </div>
  </div>

  <div id="main-wrapper" class="main-wrapper">

    <ul id="gn-menu" class="gn-menu-main">
      <li class="gn-trigger">
        <a id="menu-toggle" class="menu-toggle gn-icon gn-icon-menu">
          <div class="hamburger">
            <span></span>
            <span></span>
            <span></span>
          </div>
          <div class="cross">
            <span></span>
            <span></span>
          </div>
        </a>
        <nav class="gn-menu-wrapper">
          <div class="gn-scroller">
            <ul class="gn-menu metismenu">
              <li class="gn-search-item">
                <input placeholder="Buscar" type="search" class="gn-search">
                <a class="search-icon"><i class="fa fa-search"></i><span>Buscar</span></a>
              </li>
              <li class="active">
                <a href="index.html" aria-expanded="false"><i class="fa fa-th"></i>Inicio<span class="fa arrow"></span></a>
                <ul class="gn-submenu collapse" aria-expanded="false">
                  <li><a class="active" href="index.php">Principal</a></li>
                 
                </ul>
              </li>
              <li class="active">
                <a href="listar.php" aria-expanded="false"><i class="fa fa-desktop"></i>Registros<span class="fa arrow"></span></a>
                <ul class="gn-submenu collapse" aria-expanded="false">
                  <li><a class="active" href="listar.php">Listar</a></li>
                  <li><a class="active" href="agregar.html">Agregar</a></li>
                 
                 
                </ul>
              </li>


            </ul>
          </div>
          <!-- /gn-scroller -->
          <div class="bottom-bnts">
            
            <a class="fix-nav" href="#"><i class="mdi mdi-pin"></i></a>
            
          </div>
        </nav>
      </li>
      <li>
        <a href="index.html" class="logo">Detektor - Ing. Dennis E. Rodriguez<i class="fa fa-toggle-on"></i></a>
      </li>
      
      <li class="pull-right">
        <ul class="nav navbar-right right-menu">
          <li class="members-btn">
            <a class="show-members">
              <i class="fa fa-group"></i>
            </a>
          </li>
         
          <li class="dropdown notifications">
            <a class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i> <span class="label label-warning"></span>
            </a>
            <ul class="dropdown-menu">
              <li>
                <h4 class="zero-m text-center">Notificacion</h4>
              </li>
            
            </ul>
          </li>
          <li class="dropdown some-btn">
            <a class="fullscreen">
              <i class="mdi mdi-fullscreen"></i>
            </a>
          </li>
        </ul>
      </li>
    </ul>

   

    <!--Contenido Ing. Dennis E. Rodriguez -->
    <div id="content" class="content">

        <h2>Listar</h2>
        <br>
        <p>
            <a href="agregar.html">Crear Registro</a>
            
        </p>
        
        <div class="col-lg-8">
            <div class="content-box big-box box-shadow panel-box panel-primary">
                <h4><strong>Lista</strong></h4>

        <div class="content-box big-box">
        <div class="table-responsive">
          <table id="datatable" class="display">
            <thead>
              <tr>
                <th>Motivo</th>
                <th>DesMotivo</th>
                <th>Estado</th>
                <th>Tipo</th>
                <th>Update</th>
              </tr>
            </thead>
            <tbody>
            <?php 	
	                  while($row = $result->fetch(PDO::FETCH_ASSOC)) { 		
                      echo "<tr>";
                      echo "<td>".$row['motivo']."</td>";
                      echo "<td>".$row['des_motivo']."</td>";
                      echo "<td>".$row['estado']."</td>";
                      echo "<td>".$row['tipo']."</td>";	
                      echo "<td><a href=\"editar.php?motivo=$row[motivo]\">Editar</a> | <a href=\"eliminar.php?motivo=$row[motivo]\" onClick=\"return confirm('Desea Eliminar El Siguiente Registro?')\">Eliminar</a></td>";		
                    }
                  ?>
            </tbody>
          </table>
        </div>
      </div>
        
              
        
        
        
                    <!-- <button class="btn btn-default text-uppercase waves pull-left">Back</button>
                    <button class="btn btn-success text-uppercase waves pull-right">Submit</button> -->
            </div>
        </div>
        

       
    </div>

    <!--notificacion-->
    <div id="welcome"></div>

  

  </div>

    <div class="login-modal modal fade">
      <div class="table-wrapper">
        <div class="table-row">
          <div class="table-cell text-center">
           <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <div class="login i-block">
              <div class="content-box">
                <div class="light-blue-bg biggest-box">

                  <h1 class="zero-m text-uppercase">Welcome</h1>

                </div>
                <div class="big-box text-left login-form">
                  <h4 class="text-center">Login</h4>
                  <form>
                    <div class="form-group">
                      <input type="text" class="form-control material" id="login" placeholder="Username">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control material" id="password" placeholder="Password">
                    </div>

                    <button type="submit" class="btn btn-block btn-info text-uppercase waves">Login</button>

                  </form>
                  <a href="#" class="green i-block">Forgot password?</a>
                  <p>Do not have an account?</p>
                  <a class="btn btn-block btn-warning text-uppercase waves waves-button">Create an account</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
  <div class="logout-modal modal fade">
      <div class="table-wrapper">
        <div class="table-row">
          <div class="table-cell text-center">
            <div class="login i-block">
              <div class="content-box">
                <div class="light-blue-bg biggest-box">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h3 class="zero-m text-uppercase">Do you want to exit?</h3>
                  <a href="#" class="i-block" data-dismiss="modal">Yes</a>
                  <a href="#" class="i-block" data-dismiss="modal">No</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>


    <!--Scripts-->
  <script src="bower_components/jquery/dist/jquery.min.js"></script>
  <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>
  <script src="bower_components/Waves/dist/waves.min.js"></script>
  <script src="bower_components/moment/min/moment.min.js"></script>
  <script src="bower_components/jquery.nicescroll/jquery.nicescroll.min.js"></script>
  <script src="bower_components/slimScroll/jquery.slimscroll.min.js"></script>
  <script src="bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.js"></script>
  <script src="bower_components/cta/dist/cta.min.js"></script>
  
  <!--Menu-->
  <script src="js/menu/classie.js"></script>
  <script src="js/menu/gnmenu.js"></script>


  <script src="js/selects/selectFx.js"></script>

  
  <script src="bower_components/flot/jquery.flot.js"></script>
  <script src="bower_components/flot/jquery.flot.resize.js"></script>
  <script src="bower_components/flot.curvedlines/curvedLines.js"></script>
  <script src="js/flot/jquery.flot.orderBars.js"></script>




  <script src="js/notifications/notificationFx.js"></script>

  <!--Chart.js-->
  <script src="bower_components/Chart.js/Chart.min.js"></script>
  <script src="js/chart-js/example.js"></script>

     <!--Data Tables-->
     <script src="bower_components/DataTables/media/js/jquery.dataTables.js"></script>
  <script src="bower_components/datatables.net-responsive/js/dataTables.responsive.js"></script>
  <script src="bower_components/datatables-tabletools/js/dataTables.tableTools.js"></script>


  
  <script src="js/common.js"></script>

  <script>
    $(function () {

      
      setTimeout(function () {
        
        var notification = new NotificationFx({
          message: '<span>Listado de Registros</span>',
          layout: 'attached',
          effect: 'bouncyflip',
          ttl: 4000,
          wrapper: document.getElementById("welcome"),
          type: 'notice', 
        });
        notification.show();
      }, 1200);

      
      
    });
  </script>



  
  <script>
    $(function () {
      //Data Tables
      $('#datatable').DataTable({
        displayLength: 25,
        dom: 'T<"clear">lfrtip',
        tableTools: {
          "sSwfPath": "js/datatables/copy_csv_xls_pdf.swf"
        },
        responsive: true
      });
    });
  </script>


</body>

</html>