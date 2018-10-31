<div class="main-body">
    <div class="page-wrapper">
        <div class="page-body">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Zero config.table start -->
                    <div class="card">
                        <div class="card-header">
                          <h5><?php echo lang('plan_title');?></h5>
                          <span><p><?php echo anchor('Planes/add', lang('plan_new_plan'))?> | <?php echo anchor('Planes/add_concepto', lang('plan_new_promo'))?> | <?php echo $anchor ?></p></span>

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
                                          <th><?php echo lang('plan_id');?></th>
                                          <th><?php echo lang('plan_name');?></th>
                                          <th><?php echo lang('plan_desc');?></th>
                                          <th><?php echo lang('plan_is_plan');?></th>
                                          <th><?php echo lang('plan_cost');?></th>
                                          <th><?php echo lang('plan_credits');?></th>
                                          <th><?php echo lang('plan_actions');?></th>
                                        </tr>
                                  </thead>
                  <tbody>
                    	<?php foreach($plans_data as $p){
                        ?>
                    <tr id="<?php echo $p['plan_id']; ?>">

                      <td><?php echo $p['plan_id']; ?></td>
                      <td><?php echo $p['plan_name']; ?></td>
                  		<td><?php echo $p['plan_description']; ?></td>
                      <td><?php echo $p['plan_is_plan'] == 1 ? lang('plan_plan') : lang('plan_concept') ; ?></td>
                  		<td><?php echo $p['plan_cost']; ?></td>
                  		<td><?php echo $p['plan_credits']; ?></td>
                  		<td>
                        <?php if($p['plan_status'] == $this->config->item('Activo')):?>
                          <a href="<?php echo site_url('Planes/edit/'.$p['plan_id']);?>" class="btn btn-info btn-outline-info"><i class="icofont icofont-ui-edit"></i></a>
                          <button onclick="ChangeStatus(<?php echo $p['plan_id'].', '.TRUE ?>)" class="btn btn-danger btn-outline-danger" ><i class="icofont icofont-arrow-down"></i></button>
                        <?php endif;?>
                        <?php if($p['plan_status'] == $this->config->item('Inactivo')):?>
                          <button onclick="ChangeStatus(<?php echo $p['plan_id'].', '.FALSE ?>)" class="btn btn-success btn-outline-success" ><i class="icofont icofont-arrow-up"></i></button>
                        <?php endif?>
                          </td>

                    </tr>

                    <?php
                   } ?>
                  </tbody>
                </table>
            </div>
        </div>

    </div>
<div class="card">
  <div class="card-header">
    <h5><?php echo lang('discount_title');?></h5>
    <span><p><?php echo anchor('Discount/add', lang('discount_new'))?> | <?php echo $anchor ?></p></span>

      <div class="card-header-right">
        <i class="icofont icofont-rounded-down"></i>
        <i class="icofont icofont-refresh"></i>
        <i class="icofont icofont-close-circled"></i>
      </div>
  </div>
  <div class="card-block">

    <div class="dt-responsive table-responsive">
      <table id="simpletable2" class="table table-striped table-bordered nowrap">
        <thead>
          <tr>
            <th><?php echo lang('discount_id');?></th>
            <th><?php echo lang('discount_name');?></th>
            <th><?php echo lang('discount_amount');?></th>
            <th><?php echo lang('discount_type');?></th>
            <th><?php echo lang('discount_start_date');?></th>
            <th><?php echo lang('discount_end_date');?></th>
            <th><?php echo lang('plan_actions');?></th>
          </tr>
        </thead>
        <tbody>
        <?php foreach($discounts_data as $d){?>
          <tr id="desc<?php echo $d['discount_id']; ?>">
            <td><?php echo $d['discount_id']; ?></td>
            <td><?php echo $d['discount_name']; ?></td>
            <td><?php echo $d['discount_amount']; ?>%</td>
            <td><?php echo $d['discount_type']== $this->config->item('Descuento') ? lang('discount') : lang('recharge'); ?></td>
            <td><?php echo date('d/m/y', $d['discount_start_date']); ?></td>
            <td><?php echo date('d/m/y', $d['discount_end_date']); ?></td>
            <td>
            <?php if($d['discount_status'] == $this->config->item('Activo')):?>
            <a href="<?php echo site_url('Discount/edit/'.$d['discount_id']);?>" class="btn btn-info btn-outline-info"><i class="icofont icofont-ui-edit"></i></a>
            <button onclick="ChangeStatusDesc(<?php echo $d['discount_id'].', '.TRUE?>)" class="btn btn-danger btn-outline-danger" ><i class="icofont icofont-arrow-down"></i></button>
            <?php endif;?>
            <?php if($d['discount_status'] == $this->config->item('Inactivo')):?>
            <button onclick="ChangeStatusDesc(<?php echo $d['discount_id'].', '.FALSE?>)" class="btn btn-success btn-outline-success" ><i class="icofont icofont-arrow-up"></i></button>
            <?php endif?>
            </td>

          </tr>
        <?php
        } ?>
        </tbody>
      </table>
    </div>
  </div>

</div>
</div>
</div>
</div>

<script>
function ChangeStatus(id, status) {
  if(status){
      status="Se deshabilitará el Plan";
  }else{
      status="Se habilitará el Plan";
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
                url: "<?php echo base_url(); ?>" + 'Planes/remove',
                data : {
                  plan_id:id
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
function ChangeStatusDesc(id, status) {
  if(status){
      status="Se deshabilitará el Descuento o Recargo";
  }else{
      status="Se habilitará el Descuento o Recargo";
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
                url: "<?php echo base_url(); ?>" + "Discount/remove",
                data : {
                  discount_id:id
                },
                success: function(data) {
                  console.log('respuesta: ' + data);
                    $('#desc'+id).fadeOut(1500);
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
