<div class="main-body">
    <div class="page-wrapper">
        <div class="page-body">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Zero config.table start -->
                    <div class="card">
                        <div class="card-header">
                          <h5>Productos</h5>
                            <span><p><?php echo anchor('Productos/add', 'Nuevo Producto')?> | <?php echo $anchor ?></p></span>
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
                                              <th>ID</th>
                                              <th>Nombre</th>
                                              <th>Descripción</th>
                                              <th>Costo de Venta</th>
                                              <th>Costo de Compra</th>
                                              <th>Stock Disponible</th>
                                              <th>Acciones</th>

                                        </tr>
                                  </thead>
                  <tbody>
                    	<?php foreach($products_data as $p){ ?>
                    <tr id="<?php echo $p['product_id']; ?>">
                      <td><?php echo $p['product_id']; ?></td>
                      		<td><?php echo $p['product_name']; ?></td>
                      		<td><?php echo $p['product_description']; ?></td>
                      		<td><?php echo $p['product_cost']; ?></td>
                      		<td><?php echo $p['product_cost_sale']; ?></td>
                      		<td><?php echo $p['product_stock']; ?></td>
                      		<td>
                            <?php if($p['product_status'] == $this->config->item('Activo')):?>
                              <a href="<?php echo site_url('Productos/edit/'.$p['product_id']);?>" class="btn btn-info btn-outline-info"><i class="icofont icofont-ui-edit"></i></a>
                              <button onclick="ChangeStatus(<?php echo $p['product_id'].', '.TRUE ?>)" class="btn btn-danger btn-outline-danger" ><i class="icofont icofont-arrow-down"></i></button>
                            <?php endif;?>
                            <?php if($p['product_status'] == $this->config->item('Inactivo')):?>
                              <button onclick="ChangeStatus(<?php echo $p['product_id'].', '.FALSE ?>)" class="btn btn-success btn-outline-success" ><i class="icofont icofont-arrow-up"></i></button>
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
function ChangeStatus(id, status) {
  if(status){
      status="Se deshabilitará el Producto";
  }else{
      status="Se habilitará el Producto";
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
                url: "<?php echo base_url(); ?>" + 'Productos/remove',
                data : {
                  product_id:id
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
