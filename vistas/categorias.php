<!-- Content Header (Page header) -->
<div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Administrar Categorias</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active">Administrar Categorias</li>
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


  <!-- row para listado de categorias/inventario -->
  <div class="row">
    <div class="col-lg-6">
      <table id="tbl_categorias" class="table table-striped w-100 shadow">
        <thead class="bg-info">
          <tr style="font-size: 15px;">
            <th></th>
            <th>IdCategoria</th>
            <th>Descripcion</th>
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
<!-- Ventana Modal para ingresar o modificar un categorias -->
<div class="modal fade" id="mdlGestionarCategoria" role="dialog">

<div class="modal-dialog modal-lg">

  <!-- contenido del modal -->
  <div class="modal-content">

    <!-- cabecera del modal -->
    <div class="modal-header bg-gray py-1">

      <h5 class="modal-title">Agregar categoria</h5>

      <button type="button" class="btn btn-outline-primary text-white border-0 fs-5" data-bs-dismiss="modal" id="btnCerrarModal">
        <i class="far fa-times-circle"></i>
      </button>

    </div>

    <!-- cuerpo del modal -->
    <div class="modal-body">

      <form class="needs-validation" novalidate>
        <!-- Abrimos una fila -->
        <div class="row">

          <!-- Columna para registro del Id de la categoría -->
          <div class="col-12 col-lg-6">
            <div class="form-group mb-2">
              <label class="" for="iptId_CategoriaReg"><i class="fas fa-barcode fs-6"></i>
                <span class="small">Id de categoría</span><span class="text-danger">*</span>
              </label>
              <input type="text" class="form-control form-control-sm" id="iptId_CategoriaReg" name="iptId_CategoriaReg" placeholder="Id categoría" required>
              <div class="invalid-feedback">Debe ingresar el Identificador</div>
            </div>
          </div>

          <!-- Columna para registro de la descripción del categoria -->
          <div class="col-12">
            <div class="form-group mb-2">
              <label class="" for="iptNombre_CategoriaReg"><i class="fas fa-file-signature fs-6"></i> <span class="small">Nombre</span><span class="text-danger">*</span></label>
              <input type="text" class="form-control form-control-sm" id="iptNombre_CategoriaReg" placeholder="Nombre" required>
              <div class="invalid-feedback">Debe ingresar el nombre de la categoría</div>
            </div>
          </div>


          <!-- creacion de botones para cancelar y guardar el categoria -->
          <button type="button" class="btn btn-danger mt-3 mx-2" style="width:170px;" data-bs-dismiss="modal" id="btnCancelarRegistro">Cancelar</button>
          <button type="button" style="width:170px;" class="btn btn-primary mt-3 mx-2" id="btnGuardarCategoria">Guardar categoria</button>
          <!-- <button class="btn btn-default btn-success" type="submit" name="submit" value="Submit">Save</button> -->

        </div>
      </form>

    </div>

  </div>
</div>


</div>

<script>
  /* ======================================================================================
    EVENTO AL DAR CLICK EN EL BOTON EDITAR Categoria
    =========================================================================================*/
    $('#tbl_categorias tbody').on('click', '.btnEditarCategoria', function() {

accion = 4; //seteamos la accion para editar

$("#mdlGestionarCategoria").modal('show');

var data = table.row($(this).parents('tr')).data();
console.log("🚀 ~ file: categorias.php ~ line 223 ~ $ ~ data", data)

$("#iptId_CategoriaReg").val(data["id_categoria"]);
$("#iptNombre_CategoriaReg").val(data[2]); //data[3]

})
  var accion;
  var table;
  var Toast= Swal.mixin({
    toast: true,
    position: 'top',
    showConfirmButton: false,
    timer: 3000
  });
  $(document).ready(function(){
   // CARGA DEL LISTADO CON EL PLUGIN DATATABLE 

    table = $("#tbl_categorias").DataTable({
      dom: 'Bfrtip',
      buttons: [{
          text: 'Agregar Categoria',
          className: 'addNewRecord',
          action: function(e, dt, node, config) {
            $("#mdlGestionarCategoria").modal('show');
            accion = 2; //registrar
          }
        },'excel',
        'print', 'pageLength'
      ],
      pageLength: [5, 10, 15, 30, 50, 100],
      pageLength: 10,
      ajax: {
        url: "/pdv/ajax/categorias.ajax.php",
        dataSrc: '',
        type: "POST",
        data: {
          'accion': 1 //1: LISTAR categorias
        },
      },
      responsive: {
        details: {
          type: 'column'
        }
      },
      columnDefs: [{
          targets: 0,
          orderable: false,
          className: 'control'
        },
        {
          targets: 1,
          visible: true
        },
        {
          targets: 2,
          visible: true
        },
        {
          targets: 3,
          orderable: false,
          render: function(data, type, full, meta) {
            return "<center>" +
              "<span class='btnEditarCategoria text-primary px-1' style='cursor:pointer;'>" +
              "<i class='fas fa-pencil-alt fs-5'></i>" +
              "</span>" +
              "<span class='btnEliminarCategoria text-danger px-1' style='cursor:pointer;'>" +
              "<i class='fas fa-trash fs-5'></i>" +
              "</span>" +
              "</center>"
          }
        }

      ],
      language: {
        url: "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
      }
   })

  });
  //===================================================================/
  //EVENTO QUE GUARDA LOS DATOS DE LAS CATEGORIAS
  //===================================================================/
  document.getElementById("btnGuardarCategoria").addEventListener("click", function() {

    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {

      if (form.checkValidity() === true) {
        var titulo_msj = "Dato guardado con exito";
        Swal.fire({
          title: 'Está seguro de registrar la Categoria?',
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Si, deseo registrarla!',
          cancelButtonText: 'Cancelar',
        }).then((result) => {

          if (result.isConfirmed) {

            var datos = new FormData();

            datos.append("accion", accion);
            datos.append("id_categoria", $("#iptId_CategoriaReg").val());
            datos.append("nombre_categoria", $("#iptNombre_CategoriaReg").val()); 

            $.ajax({
              url: "/pdv/ajax/categorias.ajax.php",
              method: "POST",
              data: datos,
              cache: false,
              contentType: false,
              processData: false,
              dataType: 'json',
              success: function(respuesta) {

                if (respuesta == "ok") {

                  Toast.fire({
                    icon: 'success',
                    title: titulo_msj
                  });

                  table.ajax.reload();
                  $("#mdlGestionarCategoria").modal('hide');

                  $("#iptNombre_CategoriaReg").val("");


                } else {
                  Toast.fire({
                    icon: 'error',
                    title: 'La Categoria no se pudo registrar'
                  });
                }

              }
            });

          }
        })
      } else {
        console.log("No pasó la validación")
      }

      form.classList.add('was-validated');

    });
  });
  </script>