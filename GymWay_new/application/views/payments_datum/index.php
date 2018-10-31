<div class="main-body">
    <div class="page-wrapper">
        <div class="page-body">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Zero config.table start -->
                    <div class="card">
                        <div class="card-header">
                          <h5>Historico de Pagos</h5>
                          <span><p>Para realizar nuevos pagos, dirigirse al perfil del cliente</p></span>
                            <div class="card-header-right">
                                <i class="icofont icofont-rounded-down"></i>
                                <i class="icofont icofont-refresh"></i>
                                <i class="icofont icofont-close-circled"></i>
                            </div>
                        </div>
                        <div class="card-block">


                                                    <?php echo form_open('Payments/'); ?>
                                                    <!-- Navigation start -->
                                                      <nav class="navbar navbar-light bg-faded m-b-30 p-10">
                                                        <ul class="nav navbar-nav">
                                                          <li class="nav-item active">
                                                              <div class="form-group row">

                                                                <label class="col-sm-1 col-form-label">Filtrar por Fecha: </label>
                                                                <div class=" col-sm-3 input-group input-group-button">
                                                                  <input type="text" name="payment_date" class="form-control" value="<?php echo $this->input->post('payment_date'); ?>" />
                                                                    <span class="input-group-addon" id="basic-addon10">
                                                                        <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i>Aplicar</button>
                                                                    </span>
                                                                     <span class="text-danger">
                                                                </div>

                                                              </div>
                                                          </li>
                                                          <?php echo validation_errors(); ?>
                                                          <?php echo form_close(); ?>


                                                        <!-- end of by priority dropdown -->
                                                        </ul>
                                                      </nav>
                            <div class="dt-responsive table-responsive">
                                <table id="simpletable1" class="table table-striped table-bordered nowrap">
                                  <thead>
                                    <tr>
                                		<th>Payment Id</th>
                                    <th>Cliente</th>
                                		<th>Fecha de Pago</th>
                                		<th>Plan o Arancel</th>
                                		<th>Descuento</th>
                                		<th>Monto</th>
                                		<th>Cajero</th>
                                		<th>Actions</th>
                                    </tr>
                              </thead>
                              <tbody>
                                	<?php foreach($payments_data as $p){ ?>
                                    <tr>
                                		<td><?php echo $p['payment_id']; ?></td>
                                    <td><?php echo $p['customer_last_name'].', '.$p['customer_first_name']  ?></td>
                                    <td><?php echo $p['payment_date'] ?></td>
                                    <td><?php echo $p['plan_name'] ?></td>
                                    <td><?php echo $p['discount_name'] ?></td>
                                    <td><?php echo $p['payment_amount'] ?></td>
                                    <td><?php echo $p['last_name'].', '.$p['first_name']  ?></td>
                                		<td>
                                        <a href="<?php echo site_url('payments_datum/remove/'.$p['payment_id']); ?>">Anular</a>
                                    </td>
                                  </tr>
                              	<?php } ?>
                              </tbody>
                              </table>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <script>
          $('input[name="payment_date"]').daterangepicker();
          </script>
