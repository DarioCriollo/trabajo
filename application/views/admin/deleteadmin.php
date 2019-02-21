<script src="<?php echo base_url();?>assets/export/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>assets/export/js/dataTables.bootstrap.min.js"></script>
<!-- DataTables Export -->

<script src="<?php echo base_url();?>assets/export/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url();?>assets/export/js/buttons.flash.min.js"></script>
<script src="<?php echo base_url();?>assets/export/js/jszip.min.js"></script>
<script src="<?php echo base_url();?>assets/export/js/pdfmake.min.js"></script>
<script src="<?php echo base_url();?>assets/export/js/vfs_fonts.js"></script>
<script src="<?php echo base_url();?>assets/export/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url();?>assets/export/js/buttons.print.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url();?>assets/export/css/buttons.dataTables.min.css">
<!-- FastClick -->
<!-- Content Wrapper. Contains page content -->
<input type="hidden" name="" id="url" value="<?php echo base_url(); ?>">

<div class="content-wrapper" style="margin-left:5px" id="crud">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        <small>Administrator</small>
      </h1>

    </section>
      <!-- <button type="button" class="btn btn-warning">Students</button>
      <button type="button" class="btn btn-warning">Administrators</button> -->
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box box-solid">
            <div class="box-body">
                <div class="row">
                  <div class="form-group" align="right" style="margin-right:20px;">
                    <a href="<?php echo base_url ();?>administrador/registeradmin" type="submit" class="btn btn-success btn-lg"  name="button">New Administrator</a>
                  </div>
                </div>
                <hr>
                <div class="row" >
                    <div class="col-md-12" style="text-align:center">
                        <table id="example" class="table table-bordered table-hover" style="text-align:center">
                            <thead style="align:center" class="thead-dark">
                                <tr>
                                    <th style="text-align:center;">    Id </th>
                                    <th style="text-align:center;">Code Student</th>
                                    <th style="text-align:center;">    Name  </th>
                                    <th style="text-align:center;">    Lastname  </th>
                                    <!-- <th>    Code  </th>
                                    <th>    Email  </th> -->
                                    <th style="text-align:center;">    Delete  </th>
                                    <th style="text-align:center;">    Update  </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (!empty($datos)): ?>
                                    <?php foreach($datos as $dato):?>
                                        <tr>
                                            <td><?php echo $dato->id;?></td>
                                            <td><?php echo $dato->code;?></td>
                                            <td><?php echo $dato->name;?></td>
                                            <td><?php echo $dato->nickname;?></td>
                                            <!-- <td><?php echo $dato->code;?></td>
                                            <td><?php echo $dato->email;?></td> -->

                                            <td>
                                              <?php $dat=$dato->id; ?>

                                              <button type="button" class="btn btn-danger"  onclick="eliminarAdmin(<?php echo $dato->id;?>);">Delete</button>

                                                <!-- <button type="submit" id="grafica" class="btn btn-info btn-view-venta" value="<?php echo $venta->id;?>" data-toggle="modal" data-target="#modal-default"><?php echo $venta->id;?></button> -->
                                            </td>
                                            <td>
                                                  <button type="button" class="btn btn-warning"  onclick="actualizarAdmin(<?php echo $dato->id;?>);">Update</button>
                                            </td>
                                        </tr>
                                    <?php endforeach;?>
                                <?php endif ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- inicia contenedor de actualizacion para administrator -->

<div class="container" style="margin-left:10px; display:none;" id="update">
    <div class="row" >
        <div class="col-md-11">
            <div class="well well-sm">
                <form class="form-horizontal"  role="form" method="post" action="<?=base_url('administrador/registera')?>">
                  <br>
                    <fieldset>
                        <legend class="text-center header">Update User</legend>
                        <br>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-1 text-right"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="txtname" name="txtname" type="text" placeholder="First Name" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-1 text-right"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="txtnick" name="txtnick" type="text" placeholder="Last Name" class="form-control" required>
                            </div>
                        </div>


                          <input id="txtcode" name="txtcode" type="hidden" placeholder="Code" class="form-control" maxlength="10" required>


                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-1 text-right"><i class="fas fa-envelope bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="txtemail" name="txtemail" type="text" placeholder="Email Address" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-1 text-right"><i class="fa fa-users bigicon"></i></span>
                            <div class="col-md-3">
                              <select id="types" class="form-control" name="txttype" placeholder="Type" onchange="ShowSelected();" required>
                                <option value="n">Type User</option>
                                <option value="a">Administrator</option>
                                <option value="e">Student</option>
                              </select>
                            </div>
                            <div class="col-md-2" id="semester">
                              <select class="form-control" name="txtsemester" placeholder="Type" required>
                                <option value="">Semester</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>

                              </select>
                            </div>
                            <div class="col-md-3" id="carrer">
                              <select class="form-control" name="txtcarrer" placeholder="Type" required>
                                <option value="">Carrer</option>
                                <option value="Ing Civil">Ing Civil</option>
                                <option value="Ing Electronica">Ing Electronica</option>
                                <option value="Ing Sistemas">Ing Sistemas</option>

                              </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-1 text-right"><i class="fas fa-unlock-alt bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="txtcla" name="txtcla" type="password" placeholder="Password" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-success" onclick="enviaUpdate();">Update Register</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>






<script>
var objeto=[];
function eliminarAdmin(id){

  confirmar=confirm("Estas Seguro");
  if (confirmar){
  $.ajax({
    url:$("#url").val()+"administrador/deleteA",
    type:"post",
    data:{xid:id},
    beforeSend:function(){
      $("#resultados").html("espere un momento ......");
    },
    success:function(datos){
      window.location.reload();
      //alert('sisisis');
      //sale();

    },

    error:function(){
      $("#resultados").html("No se ha encontrado nada");
    },

  });

}else{

}

}

function actualizarAdmin(id){
 alert('id a actualizar'+id);
 $.ajax({
   url:$("#url").val()+"administrador/updateAdmin",
   type:"post",
   data:{xid:id},
   beforeSend:function(){
     $("#resultados").html("espere un momento ......");
   },
   success:function(datos){
    var obj = JSON.parse(datos);
    var elemento = document.getElementById("update");
    elemento.style.display = 'block';
    var elemento = document.getElementById("crud");
    elemento.style.display = 'none';
            $('#txtname').val(obj[0]['name']);
            $('#txtnick').val(obj[0]['nickname']);
            $('#txtcode').val(obj[0]['code']);
            $('#txtemail').val(obj[0]['email']);
            $('#txtcla').val(obj[0]['password']);
   },

   error:function(){
     $("#resultados").html("No se ha encontrado nada");
   },

 });
}

function enviaUpdate(){
  name=document.getElementById("txtname").value;
  lname=document.getElementById("txtnick").value;
  code=document.getElementById("txtcode").value;
  email=document.getElementById("txtemail").value;
  password=document.getElementById("txtcla").value;
  //alert('tomar datos'+name);
  $.ajax({
    url:$("#url").val()+"administrador/enviaUpdate",
    type:"post",
    data:{xname:name,xlname:lname,xcode:code,xemail:email,xpassword:password},
    beforeSend:function(){
      $("#resultados").html("espere un momento ......");
    },
    success:function(datos){
      alert('update successfully');
        window.location.reload();
    },

    error:function(){
      $("#resultados").html("No se ha encontrado nada");
    },

  });
}

$('#example').DataTable( {
      dom: 'Bfrtip',
      autoWidth: true,
      buttons: [
          {
              extend: 'excelHtml5',
              title: "List of Correct Answers",
              exportOptions: {
                  columns: [ 0, 1,2, 3, 4, 5, 6, 7, 8 ]
              }
          },
          {
              extend: 'pdfHtml5',
              title: "Listado de Resultados",
              alignment: 'center',
              exportOptions: {
                  columns: [ 0, 1,2, 3, 4, 5, 6, 7, 8 ],
                  alignment: 'center',
              }


          }
      ],

      language: {
          "lengthMenu": "Mostrar _MENU_ registros por pagina",
          "zeroRecords": "No se encontraron resultados en su busqueda",
          "searchPlaceholder": "Search",
          "info": "Showing records of _START_ al _END_ of a total of  _TOTAL_ records",
          "infoEmpty": "No existen registros",
          "infoFiltered": "(filtrado de un total de _MAX_ registros)",
          "search": "Search : ",
          "paginate": {
              "first": "Primero<br>",
              "last": "Último",
              "next": "   Next ",
              "previous": "Previous      :   "
          },
      }
  });
  function sale(){
    $.ajax({
      url:$("#url").val()+"administrador/deleteadmin",
      type:"post",
      beforeSend:function(){
        $("#resultados").html("espere un momento ......");
      },
      success:function(datos){
        alert('bien bien');
      },

      error:function(){
        $("#resultados").html("No se ha encontrado nada");
      },

    });
  }
</script>
