<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="<?php echo base_url ();?>assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url ();?>assets/dist/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <script src="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
      <script src="<?php echo base_url(); ?>assets/dist/js/jquery-3.1.1.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  </head>
  <body>


<br>
    <div class="container" style="margin-left:10px;">
        <div class="row" >
            <div class="col-md-11">
                <div class="well well-sm">
                    <form class="form-horizontal" role="form" method="post" action="<?=base_url('C_administrador/registera')?>">
                      <br>
                        <fieldset>
                            <legend class="text-center header">New User</legend>
                            <br>
                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-1 text-right"><i class="fa fa-user bigicon"></i></span>
                                <div class="col-md-8">
                                    <input id="fname" name="txtname" type="text" placeholder="First Name" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-1 text-right"><i class="fa fa-user bigicon"></i></span>
                                <div class="col-md-8">
                                    <input id="lname" name="txtnick" type="text" placeholder="Last Name" class="form-control" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-1 text-right"><i class="fas fa-list-ol bigicon"></i></span>
                                <div class="col-md-8">
                                    <input id="code" name="txtcode" type="text" placeholder="Code" class="form-control" maxlength="10" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-1 text-right"><i class="fas fa-envelope bigicon"></i></span>
                                <div class="col-md-8">
                                    <input id="email" name="txtemail" type="text" placeholder="Email Address" class="form-control" required>
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
                                    <input id="email" name="txtcla" type="password" placeholder="Password" class="form-control" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary btn-lg" onclick="mensaje();">Register</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div  style="font-family:roboto; font-size:24px; text-align:center">
      <?php
      if(!isset($mensaje)){
        //$mensaje=$mensaje;
      }else{
        echo $mensaje;
      }

      ?>
    </div>

    <script type="text/javascript">

    $("#txtcode").maxlength({max: 10});

      function ShowSelected(){
        var cod = document.getElementById("types").value;
      if(cod=='a'){
        //alert('admin');
        text = document.getElementById('semester');
        text.style.display = 'none';
        text = document.getElementById('carrer');
        text.style.display = 'none';
      }else{
        //alert('student');
        text = document.getElementById('semester');
        text.style.display = 'block';
        text = document.getElementById('carrer');
        text.style.display = 'block';
      }
  }
  function mensaje(){
    alert('hola');
      var ultimoval = "<?php echo $mensaje;?>";
    alert(ultimoval);
  }
  var ultimoval = "<?php echo $mensaje;?>";
  if(is_null(ultimoval)){
    alert('nula'+ultimoval);
  }else{
    alert('no nula'+ultimoval);
  }

    </script>


  </body>
</html>
