<div class="main-body user-profile">
        <div class="page-wrapper">

            <!-- Page-body start -->
            <div class="page-body">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- tab header start -->
                        <div class="tab-header">
                            <ul class="nav nav-tabs md-tabs tab-timeline" role="tablist" id="mytab">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#personal" role="tab"><?php echo lang('personal_data'); ?></a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#binfo" role="tab">Pagos</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#contacts" role="tab">Ingresos</a>
                                    <div class="slide"></div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#review" role="tab">Más Informacion</a>
                                    <div class="slide"></div>
                                </li>
                            </ul>
                        </div>
                        <div class="card">
                            <!-- <div class="card-header">
                                <h5 class="card-header-text">Acciones</h5>
                            </div> -->
                            <div class="card-block">
                              <button class="btn btn-success btn-outline-success" data-toggle="modal" data-target="#sign-in-modal" ><i class="icofont icofont-arrow-up"></i>Pago de Cuota</button>
                              <button class="btn btn-success btn-outline-success" data-toggle="modal" data-target="#pago-unico" ><i class="icofont icofont-arrow-up"></i>Pago de Aranceles</button>
                              <button class="btn btn-info btn-outline-info" onclick="Ingreso(<?=$customers_data['customer_id'];?>)" ><i class="icofont icofont-bell-alt"></i><?php echo lang('cli_manual_entry');?></button>
                              <button class="btn btn-info btn-outline-info" onclick="Editar(<?=$customers_data['customer_id'];?>)" ><i class="icofont icofont-edit"></i>Editar</button>


                                <?php if($customers_data['customer_status'] == $this->config->item('Activo')):?>
                              <button class="btn btn-danger btn-outline-danger" onclick="ChangeStatus(<?php echo $customers_data['customer_id'].', '.TRUE?>)" ><i class="icofont icofont-ui-delete"></i><?php echo lang('cli_delete');?></button>
                                  <?php endif?>
                              <?php if($customers_data['customer_status'] == $this->config->item('Inactivo')):?>
                                <button class="btn btn-success btn-outline-success" onclick="ChangeStatus(<?php echo $customers_data['customer_id'].', '.FALSE?>)"><i class="icofont icofont-arrow-up"></i>Habilitar</button>
                              <?php endif?>
                            </div>
                        </div>
                        <!-- tab header end -->
                        <!-- tab content start -->
                        <div class="tab-content">
                            <!-- tab panel personal start -->
                            <div class="tab-pane active" id="personal" role="tabpanel">
                                <!-- personal card start -->
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-header-text"><?php echo lang('personal_about'); ?></h5>

                                    </div>
                                    <div class="card-block">

                                        <div class="view-info">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="general-info">
                                                        <div class="row">

                                                            <div class="col-lg-12 col-xl-6">
                                                              <div class="form-group">

                                                                <img src="<?php echo base_url($customers_data['image'])  ?>" width="150" height="150" class="img-circle">
                                                              </div>
                                                                <div class="table-responsive">
                                                                <table class="table m-0">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th scope="row"><?php echo lang('cli_name'); ?></th>
                                                                            <td><?php echo $customers_data['customer_last_name'].', '.$customers_data['customer_first_name']?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row"><?php echo lang('cli_dni'); ?></th>
                                                                            <td><?php echo $customers_data['customer_dni']?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row"><?php echo lang('cli_sex'); ?></th>
                                                                            <?php if($customers_data['customer_sex'] == $this->config->item('Masculino')):?>
                                                                                  <td>Masculino</td>
                                                                            <?php endif; ?>
                                                                            <?php if($customers_data['customer_sex'] == $this->config->item('Femenino')):?>
                                                                                  <td>Femenino</td>
                                                                            <?php endif; ?>
                                                                            <?php if($customers_data['customer_sex'] == $this->config->item('Otros')):?>
                                                                                  <td>Otros</td>
                                                                            <?php endif; ?>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row"><?php echo lang('cli_email'); ?></th>
                                                                            <td><?php echo $customers_data['customer_email'] ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row"><?php echo lang('cli_dob'); ?></th>
                                                                            <td><?php echo $customers_data['customer_dob'] ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row"><?php echo lang('cli_admin_start_date'); ?></th>
                                                                            <td><?php echo date('Y-m-d',$customers_data['customer_dos']) ?></td>
                                                                        </tr>


                                                                    </tbody>
                                                                </table>
                                                                </div>
                                                            </div>
                                                            <!-- end of table col-lg-6 -->
                                                            <div class="col-lg-12 col-xl-6">
                                                                <div class="table-responsive">
                                                                <table class="table">
                                                                    <tbody>
                                                      

                                                                      <tr>
                                                                          <th scope="row"><?php echo lang('cli_admin_plan'); ?></th>
                                                                          <td><?php echo $customers_data['plan_name'] ?></td>
                                                                      </tr>
                                                                      <tr>
                                                                          <th scope="row"><?php echo lang('cli_admin_due_pay_date'); ?></th>
                                                                          <td><?php echo date('Y-m-d',$customers_data['customer_due_date']) ?></td>
                                                                      </tr>
                                                                      <tr>
                                                                          <th><?php echo lang('cli_admin_credits');?></th>
                                                                          <td><?php echo $customers_data['customer_remaining_credits'] ?></td>
                                                                      </tr>
                                                                      <tr>
                                                                          <th scope="row">INFORMACION DE EMERGENCIA</th>
                                                                          <td></td>
                                                                      </tr>
                                                                      <tr>
                                                                          <th scope="row">Contacto de Energencia</th>
                                                                            <td><?php echo $customers_data['customer_emer_name'] ?></td>
                                                                      </tr>
                                                                      <tr>
                                                                          <th scope="row">Telefono</th>
                                                                            <td><?php echo $customers_data['customer_emer_tel'] ?></td>
                                                                      </tr>
                                                                      <tr>
                                                                          <th scope="row">Relacion</th>
                                                                            <td><?php echo $customers_data['customer_emer_rel'] ?></td>
                                                                      </tr>
                                                                      <tr>
                                                                          <th scope="row">Observaciones</th>
                                                                            <td><?php echo $customers_data['customer_emer_comments'] ?></td>
                                                                      </tr>





                                                                    </tbody>
                                                                </table>
                                                                </div>
                                                            </div>
                                                            <!-- end of table col-lg-6 -->
                                                        </div>
                                                        <!-- end of row -->
                                                    </div>
                                                    <!-- end of general info -->
                                                </div>
                                                <!-- end of col-lg-12 -->
                                            </div>
                                            <!-- end of row -->
                                        </div>
                                        <!-- end of view-info -->
                                    </div>
                                    <!-- end of card-block -->
                                </div>

                                <!-- personal card end-->
                            </div>
                            <!-- tab pane personal end -->
                            <!-- tab pane info start -->
                            <div class="tab-pane" id="binfo" role="tabpanel">
                                <!-- info card start -->

                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-header-text">Historial de Pagos</h5>
                                    </div>
                                    <div class="card-block">
                                        <div class="row">
                                          <div class="dt-responsive table-responsive">
                                            <table id="simpletable12" class="table table-striped table-bordered nowrap">
                                              <thead>
                                                <tr>
                                                  <th>ID del Pago</th>
                                                  <th>Fecha</th>
                                                  <th>Plan</th>
                                                  <th>Descuento</th>
                                                  <th>Monto</th>
                                                  <th>Cajero</th>
                                                </tr>
                                              </thead>
                                            <tbody>
                                              <?php foreach ($all_payments as $p ): ?>
                                                <tr>
                                                  <td><?php echo $p['payment_id'] ?></td>
                                                  <td><?php echo $p['payment_date'] ?></td>
                                                  <td><?php echo $p['plan_name'] ?></td>
                                                  <td><?php echo $p['discount_name'] ?></td>
                                                  <td><?php echo $p['payment_amount'] ?></td>
                                                  <td><?php echo $p['last_name'].', '.$p['first_name']  ?></td>

                                                </tr>
                                              <?php endforeach; ?>
                                            </tbody>
                                            </table>
                                          </div>





                                        </div>
                                    </div>
                                </div>
                                <!-- info card end -->
                            </div>
                            <!-- tab pane info end -->
                            <!-- tab pane contact start -->
                            <div class="tab-pane" id="contacts" role="tabpanel">
                              <div class="card">
                                  <div class="card-header">
                                      <h5 class="card-header-text">Historial de Ingresos</h5>
                                  </div>
                                  <div class="card-block">
                                      <div class="row">
                                        <table id="simpletable1" class="table table-striped table-bordered nowrap">
                                            <thead>
                                                <tr>
                                                  <th><?php echo lang('cli_name');?></th>
                                                  <th><?php echo lang('entry_date');?></th>
                                                  <th><?php echo lang('entry_class');?></th>

                                                </tr>
                                          </thead>
                          <tbody>
                            	<?php foreach($all_entry as $entry){ ?>
                            <tr>

                          	<td><?php echo $customers_data['customer_first_name'].', '.$customers_data['customer_last_name'] ?></td>
                              <td><?php echo $entry['customer_entry_date']; ?></td>
                              <td><?php echo $entry['customer_entry_class'].'hs'; ?></td>

                            </tr>
                            <?php } ?>
                          </tbody>
                        </table>
                            </div>
                              </div>
                                </div>
                                  </div>
                            <!-- tab pane contact end -->
                            <div class="tab-pane" id="review" role="tabpanel">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-header-text">Informacion Adicional</h5>
                                    </div>
                                    <div class="card-block">
                                      Este Cliente Aun no cuenta con informacion Adicional
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- tab content end -->
                    </div>
                </div>
            </div>
            <!-- Page-body end -->
        </div>
    </div>
    <!-- Sign in modal start -->
      <div class="modal fade" id="sign-in-modal" tabindex="-1">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title">Nuevo Pago de Cuota</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body p-b-0">
                      <form>
                          <div class="row">
                            <div class="col-sm-12">
                                <div>
                                    <label class="form-control-label">Plan </label>
                                    <input type="text" class="form-control" disabled value="<?php echo $customers_data['plan_name'] ?>">
                                </div>
                            </div>
                              <div class="col-sm-12">
                                  <div>
                                      <label class="form-control-label">Descuento o Recargo</label>
                                      <select name="descuento"  class="form-control" id="desc">
                                        <option value=0>Ninguno</option>
                                          <optgroup label="Descuento">
                                        <?php 	foreach($all_discounts_data as $discounts_datum){
                                          $selected = ($discounts_datum['discount_id'] == $this->input->post('payment_discuount_id')) ? ' selected="selected"' : "";
                                          if($discounts_datum['discount_type'] == $this->config->item('Descuento')){

                                            echo '<option value="'.$discounts_datum['discount_id'].'" '.$selected.'>'.$discounts_datum['discount_name'].'</option>';
                                          }
                                        }
                                          ?>
                                        </optgroup>
                                      <optgroup label="Recargo">
                                          <?php
                                        foreach($all_discounts_data as $discounts_datum){
                                          $selected = ($discounts_datum['discount_id'] == $this->input->post('payment_discuount_id')) ? ' selected="selected"' : "";
                                          if($discounts_datum['discount_type'] == $this->config->item('Recargo')){

                                            echo '<option value="'.$discounts_datum['discount_id'].'" '.$selected.'>'.$discounts_datum['discount_name'].'</option>';
                                          }
                                        }
                                        ?>
                                        </optgroup>
                                      </select>
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-sm-12">
                                  <div>
                                      <label class="form-control-label">Monto</label>
                                      <input type="text" class="form-control" name="monto" value=<?php echo $customers_data['plan_cost'] ?>>
                                  </div>
                              </div>
                          </div>
                      </form>
                  </div>
                  <div class="modal-footer">
                      <button type="button" onclick="myFunction()" class="btn btn-primary">Confirmar</button>
                      <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                  </div>
              </div>
          </div>
      </div>
      <!-- Sign in modal end -->
      <!-- Sign in modal start -->
        <div class="modal fade" id="pago-unico" tabindex="-1">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Nuevo Pago de Arancel único</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body p-b-0">
                        <form>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div>
                                        <label class="form-control-label">Concepto</label>
                                        <select name="arancel"  class="form-control" id="arancel">
                                          <?php 	foreach($all_plans_data as $plan){
                                            $selected = ($plan['plan_id'] == $this->input->post('plan_id')) ? ' selected="selected"' : "";
                                            if($plan['plan_is_plan'] == $this->config->item('Arancel')){

                                              echo '<option value="'.$plan['plan_id'].'" '.$selected.'>'.$plan['plan_name'].' - '.$plan['plan_cost'].'</option>';
                                            }
                                          }
                                            ?>
                                          </optgroup>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" onclick="myFunction2()" class="btn btn-primary">Confirmar</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign in modal end -->
      <script>



    function myFunction() {

        var monto =   $('input[name=monto]').val();
        var descuento = $('select[name=descuento]').val()
        console.log("Monto a abonar:" + monto)
        console.log("plan a abonar:" + <?php echo $customers_data['plan_id']?>)
        console.log("descuento :" + descuento)

        $.ajax({
                  type: "POST",
                  url: "<?php echo base_url(); ?>" + "Payments/add",
                  data : {
                    payment_customer_id:<?php echo $customers_data['customer_id']?>,
                    payment_plan_id: <?php echo $customers_data['plan_id']?>,
                    payment_discuount_id: descuento,
                    payment_amount: monto,
                  },
                  success: function(data) {
                    swal("Pago Recibido!", "Se actualizarán los datos del cliente", "success");
                    $('#sign-in-modal').modal('hide');
                    console.log('respuesta: ' + data);
                    location.reload();
                  },
                  error: function(data){
                     console.log('error: ' + data);
                  }
              });


      }

      function myFunction2() {

          var arancel =   $('#arancel').val();
          console.log("Funcion sa:" + arancel)


          $.ajax({
                    type: "POST",
                    url: "<?php echo base_url(); ?>" + "Payments/add_unique",
                    data : {
                      payment_customer_id:<?php echo $customers_data['customer_id']?>,
                      payment_plan_id: arancel,
                    },
                    success: function(data) {
                      swal("Good job!", "You clicked the button!", "success");
                      $('#sign-in-modal').modal('hide');
                      console.log('respuesta: ' + data);
                      location.reload();
                    },
                    error: function(data){
                       console.log('error: ' + data);
                    }
                });


        }


      </script>

      <script>
      $(document).ready(function(){
      $('#desc').on('change', function() {
        if(this.value == 0){
          $('input[name=monto]').val(<?php echo $customers_data['plan_cost'] ?>);
        }else{
          $.ajax({
                       // Pace.start();
                    type: "POST",
                    url: "<?php echo base_url(); ?>" + "Discount/calcularDesc",
                    data : {
                      discount_id:this.value,
                      plan_id: <?php echo $customers_data['plan_id']?>

                    },
                    success: function(data) {
                      $('input[name=monto]').val(data);
                      console.log('respuesta: ' + data);
                    },
                    error: function(data){
                       console.log('error: ' + data);
                    }
                });

        }

      });
});
function Ingreso(id) {

if(Number.isInteger(id)){
  console.log('sadasdsa#'+id);
}
  swal({
    title: '¿Confirmar?',

    text: "Se le descontará un crédito al Cliente",
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Si, confirmar.'
  }).then((result) => {
    if (result.value) {
      $.ajax({
                   // Pace.start();
                type: "POST",
                url: "<?php echo base_url(); ?>" + "Ingresos/add",
                data : {
                  customer_id:id
                },
                success: function(data) {
                  console.log('respuesta: ' + data);
                    $('#td'+id).html(data);
                    swal(
                      'Exito!',
                      'Se realizo el ingreso manual del cliente',
                      'success'
                    );
                    location.reload();
                },
                error: function(data){
                   console.log('error: ' + data);
                }
            });

    }
  })
}

function Editar(id){
  window.location.replace("<?php echo base_url(); ?>" + "Clientes/edit/" + id)
}

function ChangeStatus(id, status) {
  if(status){
      status="Se deshabilitará al cliente";
  }else{
      status=   "Se habilitará al cliente";
  }
  swal({
    title: '¿Confirmar?',
    text: status,

    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Si, confirmar.'
  }).then((result) => {
    if (result.value) {
      $.ajax({
                   // Pace.start();
                type: "POST",
                url: "<?php echo base_url(); ?>" + "Clientes/remove",
                data : {
                  customer_id:id
                },
                success: function(data) {
                  console.log('respuesta: ' + data);
                    $('#'+id).fadeOut(1500);
                    swal(
                      'Exito!',
                    data,
                      'success'
                    );
                    location.reload();
                },
                error: function(data){
                   console.log('error: ' + data);
                }
            });

    }
  })
}
$(document).ready( function () {
  $('#ingresos').dataTable( {
  "autoWidth": false
} );
} );

</script>
