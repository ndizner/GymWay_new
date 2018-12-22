<div class="main-body">
    <div class="page-wrapper">
        <div class="page-body">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Zero config.table start -->
                    <div class="card">
                        <div class="card-header">
                          <h5><?php echo lang('title_entry');?></h5>
                          <span><p><?php echo lang('sub_title_entry');?></p></span>
                            <div class="card-header-right">
                                <i class="icofont icofont-rounded-down"></i>
                                <i class="icofont icofont-refresh"></i>
                                <i class="icofont icofont-close-circled"></i>
                            </div>
                        </div>
                        <div class="card-block">
                            <div class="dt-responsive table-responsive">

                              <table class="table table-striped table-bordered nowrap col-sm-8" cellspacing="5" cellpadding="5">
                                <thead><span><p>
                                  Filtros opcionales de Busqueda</p></span>
                                  </thead>
                                    <tbody>
                                      <tr>
                                        <td>Fecha Inicial:<input type="text" class="form-control" id="min" name="min"></td>
                                        <td>Fecha final:<input type="text" class="form-control" id="max" name="max"></td>
                                        <td>Cliente:<input type="text" class="form-control" id="name" name="name"></td>
                                    </tr>
                                </tbody>
                              </table>
                                <table id="simpletable1" class="table table-striped table-bordered nowrap">
                                    <thead>
                                        <tr>
                                          <th><?php echo lang('cli_name');?></th>
                                          <th><?php echo lang('entry_date');?></th>
                                          <th><?php echo lang('entry_class');?></th>

                                        </tr>
                                  </thead>
                  <tbody>
                    	<?php foreach($customer_entry as $c){ ?>
                    <tr>

                  	<td><?php echo $c['customer_first_name'].', '.$c['customer_last_name'] ?></td>
                      <td><?php echo date('d/m/y H:i',$c['customer_entry_date']); ?></td>
                      <td><?php echo $c['customer_entry_class']; ?></td>

                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
