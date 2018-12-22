<?php echo form_open('Planes/add'); ?>
<div class="main-body">
    <div class="page-wrapper">
        <div class="page-body">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Zero config.table start -->
                    <div class="card">
                        <div class="card-header">
                          <h5><?php echo lang('plan_add_title');?></h5>
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
                              <label for="customer_dni" class="control-label"><span class="text-danger">*</span><?php echo lang('plan_name'); ?></label>
                              <input type="text" name="plan_name" value="<?php echo $this->input->post('plan_name'); ?>" class="form-control"/>
                               <span class="text-danger"><?php echo form_error('plan_name');?></span>
                            </div>
														 <div class="col-md-4">
															 <label for="customer_dni" class="control-label"><span class="text-danger">*</span><?php echo lang('plan_desc'); ?></label>
															 <input type="text" name="plan_description" value="<?php echo $this->input->post('plan_description'); ?>" class="form-control"/>
															 	<span class="text-danger"><?php echo form_error('plan_description');?></span>
														 </div>
                             <div class="col-md-4">
                              <label for="customer_last_name" class="control-label"><span class="text-danger">*</span><?php echo lang('plan_is_plan'); ?></label>
                               <div class="form-radio">
                                     <div class="radio radio-inline">
                                         <label>
                                             <input type="radio" name="plan_is_plan"  value="<?php echo $this->config->item('Plan') ?>" id="plan">
                                             <i class="helper"></i>Plan
                                         </label>
                                     </div>
                                     <div class="radio radio-inline">
                                         <label>
                                             <input type="radio" name="plan_is_plan" value="<?php echo $this->config->item('Arancel') ?>" id="arancel">
                                             <i class="helper"></i>Arancel
                                         </label>
                                     </div>
                             </div>
                             <small><?php echo lang('plan_desc_type'); ?></small>
                              <span class="text-danger"><?php echo form_error('plan_is_plan');?></span>
                            </div>
                         </div>

                         <div class="row form-group">
														 <div class="col-md-4">
															 <label for="customer_first_name" class="control-label"><span class="text-danger">*</span><?php echo lang('plan_cost'); ?></label>
															 <input type="number" name="plan_cost" value="<?php echo $this->input->post('plan_cost'); ?>" class="form-control" />
																 <span class="text-danger"><?php echo form_error('plan_cost');?></span>
														 </div>
														 <div class="col-md-4">
															 <label for="customer_last_name" class="control-label"><span class="text-danger">*</span><?php echo lang('plan_credits'); ?></label>
                               <input type="number" name="plan_credits" value="<?php echo $this->input->post('plan_credits'); ?>" class="form-control" id="credits"/>
                               <small><?php echo lang('plan_desc_credits'); ?></small>
																 <span class="text-danger"><?php echo form_error('plan_credits');?></span>
														 </div>
                        </div>

                         <div class="box-footer">
                           <button type="submit" class="btn btn-success">
                             <i class="fa fa-check"></i> <?php echo lang('plan_submit');?>
                           </button>
                         </div>

        </div>
    </div>
</div>
<?php echo form_close(); ?>


<script>
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
