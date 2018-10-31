<div class="page-body">
    <div class="row">
        <!-- counter-card-1 start-->
        <div class="col-md-6 col-xl-3">
           <div class="card client-blocks dark-primary-border">
               <div class="card-block">
                   <h5>Ingresos Diarios</h5>
                   <ul>
                       <li>
                           <i class="icofont icofont-bell-alt"></i>
                       </li>
                       <li class="text-right">
                          <?php echo $ingresos ?>
                       </li>
                   </ul>
               </div>
           </div>
       </div>
       <!-- Documents card end -->
       <!-- New clients card start -->
       <div class="col-md-6 col-xl-3">
           <div class="card client-blocks warning-border">
               <div class="card-block">
                   <h5>Total de Clientes Activos</h5>
                   <ul>
                       <li>
                           <i class="icofont icofont-ui-user-group text-warning"></i>
                       </li>
                       <li class="text-right text-warning">
                           <?php echo $clientes ?>
                       </li>
                   </ul>
               </div>
           </div>
       </div>
       <!-- New clients card end -->
       <!-- New files card start -->
       <div class="col-md-6 col-xl-3">
           <div class="card client-blocks success-border">
               <div class="card-block">
                   <h5>Productos En Stock</h5>
                   <ul>
                       <li>
                           <i class="icofont icofont-candy text-success"></i>
                       </li>
                       <li class="text-right text-success">
                           <?php echo $productos ?>
                       </li>
                   </ul>
               </div>
           </div>
       </div>
       <!-- New files card end -->
       <!-- Open Project card start -->
       <div class="col-md-6 col-xl-3">
           <div class="card client-blocks">
               <div class="card-block">
                   <h5>Caja Diaria</h5>
                   <ul>
                       <li>
                           <i class="icofont icofont icofont-wallet text-primary"></i>
                       </li>
                       <li class="text-right text-primary">
                           <?php echo '$ '.$pagos ?>
                       </li>
                   </ul>
               </div>
           </div>
       </div>
       </div>
      <div class="row">
        <div class="col-md-6 col-xl-3">
            <div class="card client-blocks success-border">
                <div class="card-block">
                    <h5>Venta de Productos</h5>
                  <?php echo form_open('Ventas/add'); ?>
                  <div>
                        <select name="products_sales_code" class="buscador form-control">
                          <option></option>
                            <?php foreach ($product_sales as $p) { ?>
                              <option  value="<?php echo $p["product_id"]?>"><?php echo $p["product_name"].' - '. $p["product_cost_sale"]?>  </option>
                          <?php  }?>
                        </select>
                         		<span class="text-danger"><?php echo form_error('products_sales_code');?></span>
                         </div>
                        <button class="btn btn-success m-b-0 m-t-5 waves-effect waves-light js-programmatic-enable" type="submit"> Confirmar</button>
                      <?php  echo form_close() ?>

                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3">
            <div class="card client-blocks success-border">
                <div class="card-block">
                    <h5>Busqueda de Clientes</h5>
                    <?php echo form_open('Clientes/search'); ?>
                        <select name="customer_id" class="buscador2 form-control">
                          <option ></option>
                            <?php foreach ($customers_data as $c) { ?>
                              <option value="<?php echo $c["customer_id"]?>"><?php echo $c["customer_last_name"].', '. $c["customer_first_name"]?>  </option>
                          <?php  }?>
                        </select>
                        <button class="btn btn-success m-b-0 m-t-5 waves-effect waves-light js-programmatic-enable" type="submit"> Ver Perfil</button>
                        <?php  echo form_close() ?>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
             <div class="card table-1-card">
                 <div class="card-block">
                   <span><h5>Ingresos diarios </h5> </span>
                     <div class="table-responsive">
                         <table class="table">
                             <thead>
                                 <tr class="text-capitalize">
                                     <th>DNI</th>
                                     <th>Nombre</th>
                                     <th>Plan</th>
                                     <th>Fecha de Vencimiento</th>
                                     <th>Creditos restantes</th>
                                     <th>Estado</th>

                                 </tr>
                             </thead>
                             <tbody>
                                 <?php foreach ($ingresos_clientes as $ic) {
                                   ?>
                                 <tr>
                                    <td><a href="<?php echo site_url('Clientes/profile/'.$ic['customer_id']); ?>"><?php echo $ic['customer_dni']; ?></a></td>
                                    <td><?php echo $ic['customer_first_name'].', '.$ic['customer_last_name'] ?></td>
                                    <td><?php echo $ic['plan_name']; ?></td>
                                    <td><?php echo date('d/m/y',$ic['customer_due_date']); ?></td>
                                    <td><?php echo $ic['customer_remaining_credits']; ?></td>
                                    <td><h4>
                                       <?php if($c['customer_due_date'] > time()){
                                          ?>
                                         <i class="ion-checkmark-round"></i>
                                         <?php
                                       }else{
                                         ?>
                                       <i class="ion-close"></i>
                                      <?php  }?>
                                    </h4>
                                    </td>
                                 </tr>
                                <?php  }?>
                             </tbody>
                         </table>
                     </div>
</div>
</div>
</div>






  </div>

        <!-- counter-card-3 start -->

</div>
<!-- <script>
$(document).ready(function(){
  var selected_value = $('#option').val();
  console.log("Aaaa"+selected_value)
    $('#busqueda').attr("disabled", true);
    // if(!$('#option').val()){
    //     $('#busqueda').removeAttr('disabled');
    // }


    // $('#option').change(function(){
    //     if($(this).val != ''){
    //
    //     }
    });

</script> -->
<script>
$(document).ready(function(){
  $('#confirm').click(function(){
    console.log("clickeo");
    // $.ajax({
    //              // Pace.start();
    //           type: "POST",
    //           url: "<?php echo base_url(); ?>" + 'Planes/remove',
    //           data : {
    //             plan_id:id
    //           },
    //           success: function(data) {
    //             console.log('respuesta: ' + data);
    //               swal(
    //                 'Exito!',
    //               data,
    //                 'success'
    //               )
    //           },
    //           error: function(data){
    //              console.log('error: ' + data);
    //           }
    //       });
    });
});
      </script>
