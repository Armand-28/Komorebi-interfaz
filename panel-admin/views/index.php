<?php
include "../includes/header.php";
?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-2 font-weight-bold text-gray-800">Panel de Administracion</h1>
       
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div  class="col-xl-3 col-md-6 mb-4" style="cursor: pointer;" >
             <a style="text-decoration:none;" href="../views/inventario.php">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">                          
                            <div class="h5 mb-0 font-weight-bold text-gray-900">Productos</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-folder-open fa-2x text-gray-400" ></i>
                        </div>
                    </div>
                </div>
            </div>
            </a>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4" style="cursor: pointer;">
         <a style="text-decoration:none;" href="../views/proveedores.php">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                           
                            <div class="h5 mb-0 font-weight-bold text-gray-900">proveedores</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-handshake fa-2x text-gray-400"></i>
                        </div>
                    </div>
                </div>
            </div>
              </a>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4" style="cursor: pointer;">
         <a style="text-decoration:none;" href="../views/categorias.php">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-4 font-weight-bold text-gray-900" >Categoria</div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-400"></i>
                        </div>
                    </div>
                </div>
            </div>
              </a>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4" style="cursor: pointer;">
           <a style="text-decoration:none;" href="../views/usuarios.php">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="h5 mb-0 font-weight-bold text-gray-900">usuarios</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-400"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
          </a>
    </div>

</div>
</div>

<!-- End of Main Content -->
<?php include "../includes/footer.php";
?>