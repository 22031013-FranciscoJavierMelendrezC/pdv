<!-- Content Header (Page header) -->
<div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Inventario / Productos</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active">Inventario / Productos</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
    <!-- Main content -->
<div class="content">

<div class="container-fluid">

    <!-- row para criterios de busqueda -->
    <div class="row">

        <div class="col-lg-12">

            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">CRITERIOS DE BÚSQUEDA</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool text-danger" id="btnLimpiarBusqueda">
                            <i class="fas fa-times"></i>
                        </button>
                    </div> <!-- ./ end card-tools -->
                </div> <!-- ./ end card-header -->
                <div class="card-body">

                    <div class="row">

                        <div class="d-none d-md-flex col-md-12 ">

                            <div style="width: 20%;" class="form-floating mx-1">
                                <input type="text" id="iptCodigoBarras" class="form-control" data-index="2">
                                <label for="iptCodigoBarras">Código de Barras</label>
                            </div>

                            <div style="width: 20%;" class="form-floating mx-1">
                                <input type="text" id="iptCategoria" class="form-control" data-index="4">
                                <label for="iptCategoria">Categoría</label>
                            </div>

                            <div style="width: 20%;" class="form-floating mx-1">
                                <input type="text" id="iptProducto" class="form-control" data-index="5">
                                <label for="iptProducto">Producto</label>
                            </div>

                            <div style="width: 20%;" class="form-floating mx-1">
                                <input type="text" id="iptPrecioVentaDesde" class="form-control">
                                <label for="iptPrecioVentaDesde">P. Venta Desde</label>
                            </div>

                            <div style="width: 20%;" class="form-floating mx-1">
                                <input type="text" id="iptPrecioVentaHasta" class="form-control">
                                <label for="iptPrecioVentaHasta">P. Venta Hasta</label>
                            </div>
                        </div>

                        <div class="d-block d-sm-none">

                            <div style="width: 100%;" class="form-floating mx-1 my-1">
                                <input type="text" id="iptCodigoBarras" class="form-control" data-index="2">
                                <label for="iptCodigoBarras">Código de Barras</label>
                            </div>

                            <div style="width: 100%;" class="form-floating mx-1 my-1">
                                <input type="text" id="iptCategoria" class="form-control" data-index="4">
                                <label for="iptCategoria">Categoría</label>
                            </div>

                            <div style="width: 100%;" class="form-floating mx-1 my-1">
                                <input type="text" id="iptProducto" class="form-control" data-index="5">
                                <label for="iptProducto">Producto</label>
                            </div>

                            <div style="width: 100%;" class="form-floating mx-1 my-1">
                                <input type="text" id="iptPrecioVentaDesde" class="form-control">
                                <label for="iptPrecioVentaDesde">P. Venta Desde</label>
                            </div>

                            <div style="width: 100%;" class="form-floating mx-1 my-1">
                                <input type="text" id="iptPrecioVentaHasta" class="form-control">
                                <label for="iptPrecioVentaHasta">P. Venta Hasta</label>
                            </div>
                        </div>

                    </div>
                </div> <!-- ./ end card-body -->
            </div>

        </div>

    </div>

    <!-- row para listado de productos/inventario -->
    <div class="row">
        <div class="col-lg-12">
            <table id="tbl_productos" class="table table-striped w-100 shadow">
                <thead class="bg-info">
                    <tr style="font-size: 15px;">
                        <th></th>
                        <th>IdProducto</th>
                             <th>Codigo</th>
                             <th>IdCategoria</th>
                             <th>Categoria</th>
                             <th>Descripcion</th>
                             <th>Nombre</th>
                             <th>PrecioCompra</th>
                             <th>PrecioVenta</th>
                             <th>utilidad</th>
                             <th>Stock</th>
                             <th>min_stock</th>
                             <th>FechaCreacion</th>
                       <th class="text-cetner">Opciones</th>
                    </tr>
                </thead>
                <tbody class="text-small">
                </tbody>
            </table>
        </div>
    </div>

</div><!-- /.container-fluid -->

</div>
<!-- /.content -->
<script>
    var accion;
    var table;

    var Toast= Swal.minix({
        toast: true,
        position: 'top',
        showConfirmButton: false,
        timer: 3000
    });
    $(document).ready(function(){})
</script>