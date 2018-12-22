<div class="main-body">
    <div class="page-wrapper">
        <div class="page-body">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Zero config.table start -->
                    <div class="card">
                        <div class="card-header">
                          <h5><?php echo lang('title_cli');?></h5>
                          <span><p><?php echo anchor('Clientes/add', lang('cli_new_user_tittle'))?> | <?php echo $anchor ?></p></span>
                            <div class="card-header-right">
                                <i class="icofont icofont-rounded-down"></i>
                                <i class="icofont icofont-refresh"></i>
                                <i class="icofont icofont-close-circled"></i>
                            </div>
                        </div>
                        <div class="card-block">
                            <div class="dt-responsive table-responsive">
                                <table id="simpletable1" class="table table-striped table-bordered nowrap">
                                    <thead>
                                        <tr>
                                            <th></th>
                                  						<th><?php echo lang('cli_dni');?></th>
                                  						<th><?php echo lang('cli_name');?></th>
                                              <th><?php echo lang('cli_admin_plan');?></th>
                                  						<th><?php echo lang('cli_admin_due_pay_date');?></th>
                                              <th><?php echo lang('cli_admin_credits');?></th>
                                              <th>Estado</th>
                                  						<th><?php echo lang('cli_admin_actions');?></th>
                                    </tr>
                                  </thead>
                  <tbody>
                    <?php foreach($customers_data as $c){


                      ?>
                    <tr id="<?php echo $c['customer_id']; ?>">

                      	<td><a href="<?php echo site_url('Clientes/profile/'.$c['customer_id']); ?>"><img src="<?php echo base_url($c['image']) ?>" alt="<?php $c['customer_first_name'] ?>" class="img-circle" width="50" height="50" />	</a></td>
            						<td><?php echo $c['customer_dni']; ?></td>
            						<td><?php echo $c['customer_first_name'].', '.$c['customer_last_name'] ?></td>

                        <td><?php echo $c['plan_description']; ?></td>
            						<td><?php echo date('d/m/y',$c['customer_due_date']); ?></td>
                        <td id="<?php echo 'td'.$c['customer_id']; ?>"><?php echo $c['customer_remaining_credits']; ?></td>
                        <td><h4>
                          <?php if($c['customer_due_date'] > time()){
                             ?>
                            <i class="ion-checkmark-round"></i>
                            <?php
                          }else{
                            ?>
                          <i class="ion-close"></i>
                           <?php
                          }

                         ?>
                       </h4>
                       </td>
				                  <td  class="dropdown">



                            <?php if($c['customer_status'] == $this->config->item('Activo')):?>

                                  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                  <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                      <a class="dropdown-item"  onclick=Ingreso(<?=$c['customer_id']?>) href="#!"><i class="icofont icofont-bell-alt" ></i><?php echo lang('cli_manual_entry');?></a>
                                      <a class="dropdown-item" href="<?php echo site_url('Clientes/profile/'.$c['customer_id']); ?>"><i class="icofont icofont-eye-alt" ></i><?php echo lang('cli_view_profile');?></a>
                                      <a class="dropdown-item" href="<?php echo site_url('Clientes/edit/'.$c['customer_id']); ?>"><i class="icofont icofont-edit" ></i><?php echo lang('cli_edit');?></a>
                                      <a class="dropdown-item" onclick="ChangeStatus(<?php echo $c['customer_id'].', '.TRUE?>)" href="#!"><i class="icofont icofont-ui-delete" ></i><?php echo lang('cli_delete');?></a>
                                  </div>


                            <?php endif?>
                            <?php if($c['customer_status'] == $this->config->item('Inactivo')):?>
                              <button onclick="ChangeStatus(<?php echo $c['customer_id'].', '.FALSE?>)" class="btn btn-success btn-outline-success" ><i class="icofont icofont-arrow-up"></i></button>
                            <?php endif?>
                        </td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
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
                    )
                },
                error: function(data){
                   console.log('error: ' + data);
                }
            });

    }
  })
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
                    )
                },
                error: function(data){
                   console.log('error: ' + data);
                }
            });

    }
  })
}


</script>
