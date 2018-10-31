<?php echo form_open('Productos/add'); ?>
<div class="main-body">
    <div class="page-wrapper">
        <div class="page-body">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Zero config.table start -->
                    <div class="card">
                        <div class="card-header">
                          <h5>Alta de Productos</h5>
                            <span><p><?php echo lang('plan_add_sub'); ?></p></span>

                            <div class="card-header-right">
                                <i class="icofont icofont-rounded-down"></i>
                                <i class="icofont icofont-refresh"></i>
                                <i class="icofont icofont-close-circled"></i>
                            </div>
                        </div>
                        <div class="card-block">
													<div class="row form-group">
                            <div class="col-md-4">
                              <label for="product_name" class="control-label"><span class="text-danger">*</span>Nombre del Producto</label>
                              <input type="text" name="product_name" value="<?php echo $this->input->post('product_name'); ?>" class="form-control"/>
                               <span class="text-danger"><?php echo form_error('product_name');?></span>
                            </div>
														 <div class="col-md-4">
															 <label for="product_description" class="control-label">Descripción del Producto</label>
															 <input type="text" name="product_description" value="<?php echo $this->input->post('product_description'); ?>" class="form-control"/>
															 	<span class="text-danger"><?php echo form_error('product_description');?></span>
														 </div>



                         </div>

                         <div class="row form-group">
                           <div class="col-md-4">
                             <label for="product_cost" class="control-label"><span class="text-danger">*</span>Costo de Compra</label>
                             <input type="text" name="product_cost" value="<?php echo $this->input->post('product_cost'); ?>" class="form-control"/>
                              <span class="text-danger"><?php echo form_error('product_cost');?></span>
                           </div>
                           <div class="col-md-4">
                             <label for="product_cost_sale" class="control-label"><span class="text-danger">*</span>Costo de Venta</label>
                             <input type="text" name="product_cost_sale" value="<?php echo $this->input->post('product_cost_sale'); ?>" class="form-control"/>
                              <span class="text-danger"><?php echo form_error('product_cost_sale');?></span>
                           </div>
                           <div class="col-md-4">
                             <label for="product_stock" class="control-label"><span class="text-danger">*</span>Stock</label>
                             <input type="text" name="product_stock" value="<?php echo $this->input->post('product_stock'); ?>" class="form-control"/>
                              <span class="text-danger"><?php echo form_error('product_stock');?></span>
                           </div>
                        </div>

                         <div class="box-footer">
                           <button type="submit" class="btn btn-success">
                             <i class="fa fa-check"></i> Crear Producto
                           </button>
                         </div>

        </div>
    </div>
</div>
<?php echo form_close(); ?>
