
	<?php echo form_open('Discount/edit/'.$discounts_data['discount_id']); ?>
<div class="main-body">
    <div class="page-wrapper">
        <div class="page-body">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Zero config.table start -->
                    <div class="card">
                        <div class="card-header">
                          <h5><?php echo lang('discount_new');?></h5>
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
                              <label for="customer_dni" class="control-label"><span class="text-danger">*</span><?php echo lang('discount_name'); ?></label>
                              <input type="text" name="discount_name" value="<?php echo ($this->input->post('discount_name') ? $this->input->post('discount_name') : $discounts_data['discount_name']); ?>" class="form-control"/>
                               <span class="text-danger"><?php echo form_error('discount_name');?></span>
                            </div>
                             <div class="col-md-4">
                             <label class="control-label"><?php echo lang('discount_amount'); ?></label>
                                 <select class="js-example-theme-single form-control" name="discount_amount">
                                              <option <?php echo $discounts_data['discount_amount']==10 ? 'selected' : '';?> value="10">10%</option>
                                              <option <?php echo $discounts_data['discount_amount']==20 ? 'selected' : '';?> value="20">20%</option>
                                              <option <?php echo $discounts_data['discount_amount']==30 ? 'selected' : '';?> value="30">30%</option>
                                              <option <?php echo $discounts_data['discount_amount']==40 ? 'selected' : '';?> value="40">40%</option>
                                              <option <?php echo $discounts_data['discount_amount']==50 ? 'selected' : '';?> value="50">50%</option>
                                              <option <?php echo $discounts_data['discount_amount']==100 ? 'selected' : '';?> value="100">100%</option>
                                </select>
                            	<span class="text-danger"><?php echo form_error('discount_amount');?></span>
                            </div>
                            <div class="col-md-4">
                            <label class="control-label"><?php echo lang('discount_type'); ?></label>
                                <select class="js-example-theme-single form-control" name="discount_type">
                                     <option <?php echo $discounts_data['discount_type']==$this->config->item('Descuento') ? 'selected' : '';?> value="<?php echo $this->config->item('Descuento') ?>"><?php echo lang('discount'); ?></option>
                                     <option <?php echo $discounts_data['discount_type']==$this->config->item('Recargo') ? 'selected' : '';?> value="<?php echo $this->config->item('Recargo') ?>"><?php echo lang('recharge'); ?></option>
                                  </select>
                             <span class="text-danger"><?php echo form_error('discount_type');?></span>
                           </div>

                         </div>

                         <div class="row form-group">
                           <div class="col-sm-12 col-xl-4 m-b-30">
                                         <label class="control-label"><?php echo lang('discount_date'); ?></label>
                                        <input type="text" name="discount_date" class="form-control" value="<?php echo ($this->input->post('discount_date') ? $this->input->post('discount_date') : date('m/d/y', $discounts_data['discount_start_date']).' - '.date('m/d/y', $discounts_data['discount_end_date'])); ?>" />
                                        <span class="text-danger"><?php echo form_error('discount_date');?></span>

                                    </div>

                        </div>

                         <div class="box-footer">
                           <button type="submit" class="btn btn-success">
                             <i class="fa fa-check"></i> <?php echo lang('discount_update');?>
                           </button>
                         </div>

        </div>
    </div>
</div>
<?php echo form_close(); ?>


<script>
$('input[name="discount_date"]').daterangepicker();
$(document).ready(function(){
    $("#arancel").click(function(){
        $("#credits").val("0");
        $("#credits").prop('disabled', true);
    });
    $("#plan").click(function(){
        $("#credits").val("");
        $("#credits").prop('disabled', false);
    });
});
</script>
