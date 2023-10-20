<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Video Club</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fa fa-address-book"></i>
                </div>
                <div class="sidebar-brand-text mx-3">ADMINISTRADOR</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="../../Video_Club">
                    <i class="fa fa-database"></i>
                    <span>INICIO</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">


            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseClientes"
                    aria-expanded="true" aria-controls="collapseClientes">
                    <i class="fa fa-users"></i>
                    <span>Clientes</span>
                </a>
                <div id="collapseClientes" class="collapse" aria-labelledby="headingClientes" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="../clientes/registrar.php">Registrar</a>
                        <a class="collapse-item" href="../clientes/clientes.php">Consultar</a>
                        <a class="collapse-item" onClick='abrirReporte()'>Reportes</a>
                    </div>
                </div>
            </li>

            <!-- Menu empleados-->
             <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseEmpleados"
                    aria-expanded="true" aria-controls="collapseEmpleados">
                    <i class="fa fa-male"></i>
                    <span>Empleados</span>
                </a>
                <div id="collapseEmpleados" class="collapse" aria-labelledby="headingEmpleados" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="registrar_empleados.php">Registrar</a>
                        <a class="collapse-item" href="empleados.php">Consultar</a>
                         <a class="collapse-item" onClick='abrirReporteempleados()'>Reportes</a>
                    </div>
                </div>
            </li>

            <!-- Menu refacciones-->
             <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePeliculas"
                    aria-expanded="true" aria-controls="collapsePeliculas">
                    <i class="fa fa-wrench"></i>
                    <span>Peliculas</span>
                </a>
                <div id="collapsePeliculas" class="collapse" aria-labelledby="headingPeliculas" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="../peliculas/registrar_peliculas.php">Registrar</a>
                        <a class="collapse-item" href="../peliculas/peliculas.php">Consultar</a>
                        <a class="collapse-item" onClick='abrirReportepeliculas()'>Reportes</a>
                    </div>
                </div>
            </li>

             <!-- Menu proveedores-->
             <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProveedores"
                    aria-expanded="true" aria-controls="collapseProveedores">
                    <i class="fa fa-archive"></i>
                    <span>Proveedores</span>
                </a>
                <div id="collapseProveedores" class="collapse" aria-labelledby="headingProveedores" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="../proveedores/registrar_proveedores.php">Registrar</a>
                        <a class="collapse-item" href="../proveedores/proveedores.php">Consultar</a>
                        <a class="collapse-item" onClick='abrirReporteproveedores()'>Reportes</a>
                    </div>
                </div>
            </li>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <header><center><h1>Video Club</h1></center></header>

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>



                        <div class="topbar-divider d-none d-sm-block"></div>


                    </ul>
                   
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <center><h1>Consultar empleados</h1></center>

                <table  class="table table-bordered" border="0" cellspacing="0">
            <?php
                require_once("../bd/conexion.php");
        
                    $result = mysqli_query($link, "SELECT * FROM empleados");
                        echo "<table class='table table-striped'>";
                        echo "<tr>
                                      
                                                       
                    <th class='success'>Nombre</th>
                    <th class='success'>Apellidos</th>
                    <th class='success'>Direccion</th>
                    <th class='success'>Telefono</th>
                    <th class='success'>Correo_electronico</th>
                    <th class='success'>Sueldo</th>
                    <th class='success'>Puesto</th>
                    <th class='success'>Modificar</th>
                    <th class='success'>Eliminar</th>
                                                    
                </tr>";
                    while  (($row = mysqli_fetch_array($result))!=NULL)
                    {
                        $id_emp = $row['id_emp'];
                        $nombre = $row['nombre'];
                        $apellidos = $row['apellidos'];
                        $direccion = $row['direccion'];
                        $telefono = $row['telefono'];
                        $correo_electronico = $row['correo_electronico'];
                        $sueldo = $row['sueldo'];
                        $puesto = $row['puesto']; 
           
            
           
                                                
                        echo "<tr>
                        <td class='active'>$nombre</td>
                        <td class='active'>$apellidos</td>
                        <td class='active'>$direccion</td>
                        <td class='active'>$telefono</td>
                        <td class='active'>$correo_electronico</td>
                        <td class='active'>$sueldo</td>
                        <td class='active'>$puesto</td>
            
                      
                        <td class='active align='center'><center><a href='modificar.php?id_emp=$id_emp'><i class='fa fa-user-circle'></i></a></center></td>
                        <td class='active' align='center'><a onClick='confirmar($id_emp)'><i class='fa fa-user-times'></i></a></td>
              
                        </tr>";    
                    }
                echo "</table>";
            ?>                                                                                                                              
            </table> 
              
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Video Club 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../js/demo/chart-area-demo.js"></script>
    <script src="../js/demo/chart-pie-demo.js"></script>

    <script language="javascript"> 
        function confirmar(id_emp){ 
        confirmar=confirm("\u00bfRealmente deseas eliminar el registro?"); 
        if (confirmar) 
        {
        document.location="eliminar_empleados.php?opcion="+id_emp;
        }
        else  
        {
        } 
        }
    </script>
    <script>
        function abrirReporte() {

        window.open("../reporte_clientes/index.php");
    }

    </script>
     <script>
        function abrirReporteempleados() {

        window.open("../reporte_empleados/index.php");
    }

    </script>
    <script>
        function abrirReportepeliculas() {

        window.open("../reporte_peliculas/index.php");
    }

    </script>
    <script>
        function abrirReporteproveedores() {

        window.open("../reporte_proveedores/index.php");
    }

    </script>
</body>
</body>

</html>