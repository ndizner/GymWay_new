<?php echo form_open('Payments/add'); ?>

	<div>
		<span class="text-danger">*</span>Customers Datum :
		<select name="payment_customer_id">
			<option value="">select customers_datum</option>
			<?php
			foreach($all_customers_data as $customers_datum)
			{
				$selected = ($customers_datum['customer_id'] == $this->input->post('payment_customer_id')) ? ' selected="selected"' : "";

				echo '<option value="'.$customers_datum['customer_id'].'" '.$selected.'>'.$customers_datum['customer_first_name'].'</option>';
			}
			?>
		</select>
		<span class="text-danger"><?php echo form_error('payment_customer_id');?></span>
	</div>
	<div>
		<span class="text-danger">*</span>Plans Datum :
		<select name="payment_plan_id">
			<option value="">select plans_datum</option>
			<?php
			foreach($all_plans_data as $plans_datum)
			{
				$selected = ($plans_datum['plan_id'] == $this->input->post('payment_plan_id')) ? ' selected="selected"' : "";

				echo '<option value="'.$plans_datum['plan_id'].'" '.$selected.'>'.$plans_datum['plan_name'].'</option>';
			}
			?>
		</select>
		<span class="text-danger"><?php echo form_error('payment_plan_id');?></span>
	</div>
	<div>
		<span class="text-danger">*</span>Discounts Datum :
		<select name="payment_discuount_id">
			<option value="">select discounts_datum</option>
			<?php
			foreach($all_discounts_data as $discounts_datum)
			{
				$selected = ($discounts_datum['discount_id'] == $this->input->post('payment_discuount_id')) ? ' selected="selected"' : "";

				echo '<option value="'.$discounts_datum['discount_id'].'" '.$selected.'>'.$discounts_datum['discount_name'].'</option>';
			}
			?>
		</select>
		<span class="text-danger"><?php echo form_error('payment_discuount_id');?></span>
	</div>
	<div>
		<span class="text-danger">*</span>Payment User Id :
		<select name="payment_user_id">
			<option value="">select</option>
			<?php
			$payment_user_id_values = array(
			);

			foreach($payment_user_id_values as $value => $display_text)
			{
				$selected = ($value == $this->input->post('payment_user_id')) ? ' selected="selected"' : "";

				echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
			}
			?>
		</select>
		<span class="text-danger"><?php echo form_error('payment_user_id');?></span>
	</div>
	<div>
		Payment Amount :
		<input type="text" name="payment_amount" value="<?php echo $this->input->post('payment_amount'); ?>" />
	</div>
	<div>
		Payment Status :
		<input type="text" name="payment_status" value="<?php echo $this->input->post('payment_status'); ?>" />
	</div>

	<button type="submit">Save</button>

<?php echo form_close(); ?>
