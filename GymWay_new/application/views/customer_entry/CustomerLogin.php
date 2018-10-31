

<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/bootstrap/dist/css/bootstrap.min.css');?>">
<!-- Favicon icon -->
<link rel="icon" href="<?php echo base_url('assets/images/favicon.ico');?>" type="image/x-icon">
<!-- Google font-->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
<!-- Required Fremwork -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/bootstrap/dist/css/bootstrap.min.css');?>">
<!-- Style.css -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css');?>">

<script type="text/javascript" src="<?php echo base_url('assets/plugins/jquery/dist/jquery.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/plugins/jquery-ui/jquery-ui.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/plugins/tether/dist/js/tether.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/plugins/bootstrap/dist/js/bootstrap.min.js');?>"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.26.10/dist/sweetalert2.all.min.js"></script>

<title>Control de Clientes</title>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

<div class="bg"></div>

<section class="login p-fixed d-flex text-center bg-primary common-img-bg">
       <!-- Container-fluid starts -->
       <div class="container-fluid">
           <div class="row">
               <div class="col-sm-12">
                   <!-- Authentication card start -->
                   <div class="login-card card-block auth-body">
                       <div class="md-float-material">
                           <div class="auth-box">
                               <div class="row m-b-20">
                                   <div class="col-md-12">
                                       <h3 class="text-left txt-primary">Control de Acceso</h3>
                                   </div>
                               </div>
                               <hr/>
                                <div class="col-md-12">
                                <div class="row form-group">
                                    <input type="number" id="customer_dni" class="form-control"  placeholder="Ingrese su DNI" autocomplete="off">
                                    <span id="error" class="text-danger"></span>

                                </div>
                              </div>
                               <div class="row m-t-30">
                                   <div class="col-md-12">
                                       <button type="button" onclick="Ingreso()" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Ingresar!</button>
                                   </div>
                               </div>
                               <hr/>
                               <div class="row">
                                   <div class="col-md-10">
                                       <p class="text-inverse text-left m-b-0">Le recordamos que el ingreso es obligatorio para todos los socios</p>
                                       <p class="text-inverse text-left"><b>Atentamente el Staff de Hayabusa</b></p>
                                   </div>

                               </div>

                           </div>
                       </div>
                       <!-- end of form -->
                   </div>
                   <!-- Authentication card end -->
               </div>
               <!-- end of col-sm-12 -->
           </div>
           <!-- end of row -->
       </div>
       <!-- end of container-fluid -->
   </section>

<div class="footer bg-inverse">
        <p class="text-center">Copyright &copy; 2018 - Sistema desarrollado por mí</p>
    </div>
  </body>
  </html>


    <script>

    $.fn.enterKey = function (fnc) {
        return this.each(function () {
            $(this).keypress(function (ev) {
                var keycode = (ev.keyCode ? ev.keyCode : ev.which);
                if (keycode == '13') {
                    fnc.call(this, ev);
                }
            })
        })
    }

      $("#customer_dni").enterKey(function () {
        dni = $('#customer_dni').val();
        var n = dni.length;
        if(n >= 7 && n <= 9){
          $("#error").hide();
          $.ajax({

                    type: "POST",
                    url: "<?php echo base_url(); ?>" + "Ingresos/CustomerLogin",
                    data : {
                      customer_id:dni
                    },
                    success: function(data) {
                      console.log('respuesta: ' + data);
                         var datos = JSON.parse(data);
                         if(datos.response){
                           swal({
                             title : 'Bienvenid@ ' + datos.nombre,
                             text : 'Créditos Restantes: ' + datos.creditos + ' | Fecha de Vencimiento: '+datos.vence,
                             type : 'success',
                             timer : 3000
                           });

                         }else{
                           swal({
                             title : 'Cliente no encotrado',
                             text: ' Por favor Intente nuevamente',
                             type : 'error',
                             timer : 3000
                           });
                         }
                         $('#customer_dni').val('');
                    },
                    error: function(data){
                      swal({
                        title : 'Cliente no encotrado',
                        text: ' Por favor Intente nuevamente',
                        type : 'error',
                        timer : 3000
                      });
                       $('#customer_dni').val('');
                    }
                });

        }else{
          $("#error").show();
          $("#error").html("El DNI Introducido no es válido")
        }

      });


    function Ingreso() {
      dni = $('#customer_dni').val();
      var n = dni.length;
      if(n >= 7 && n <= 9){
        $("#error").hide();
        $.ajax({

                  type: "POST",
                  url: "<?php echo base_url(); ?>" + "Ingresos/CustomerLogin",
                  data : {
                    customer_id:dni
                  },
                  success: function(data) {
                    console.log('respuesta: ' + data);
                       var datos = JSON.parse(data);
                       if(datos.response){
                         swal({
                           title : 'Bienvenid@ ' + datos.nombre,
                           text : 'Créditos Restantes: ' + datos.creditos + ' | Fecha de Vencimiento: '+datos.vence,
                           type : 'success',
                           timer : 3000
                         });

                       }else{
                         swal({
                           title : 'Cliente no encotrado',
                           text: ' Por favor Intente nuevamente',
                           type : 'error',
                           timer : 3000
                         });
                       }
                       $('#customer_dni').val('');
                  },
                  error: function(data){
                    swal({
                      title : 'Cliente no encotrado',
                      text: ' Por favor Intente nuevamente',
                      type : 'error',
                      timer : 3000
                    });
                     $('#customer_dni').val('');
                  }
              });

      }else{
        $("#error").show();
        $("#error").html("El DNI Introducido no es válido")
      }

    }



    </script>
