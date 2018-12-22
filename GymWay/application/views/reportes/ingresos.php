
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
 <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>



<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>









<!-- SITE VISIT CHART start -->
 <div class="row col-md-12 col-lg-12">
 <div class="col-md-8 col-lg-8">
     <div class="card">
         <div class="card-header">
             <h5>Clases por Dia de semana</h5>
             <span>Detalle de Asistencia por día de la semana</span>
             <div class="card-header-right">
                 <i class="icofont icofont-rounded-down"></i>
                 <i class="icofont icofont-refresh"></i>
                 <i class="icofont icofont-close-circled"></i>
             </div>
         </div>

         <div class=" col-md-11 col-lg-11 card-block">
             <div id="chart"></div>
         </div>

     </div>
 </div>
 <!-- SITE VISIT CHART Ends -->
 <!-- Search Box card start -->

                        <div class=" col-md-4 col-lg-4 card">
                           <?php echo form_open('Reportes/Ingresos'); ?>
                            <div class="card-header">
                                <h5 class="card-header-text">Criterios de Busqueda</h5></div>
                            <div class="card-block p-t-10">
                                <div class="task-right">
                                    <div class="taskboard-right-revision user-box">
                                        <!-- <div class="media">
                                            <div class="media-left">
                                                <a class="btn btn-outline-primary btn-lg bg-white txt-muted btn-icon" href="#!" role="button"><i class="icofont icofont-gears"></i>
                                            </a>
                                            </div>
                                            <div class="media-body">

                                              <label class="control-label">Filtrar por Clase</label>
                                                  <select name="customer_id_plan" class="form-control">
                                                    <option value="00" >Todos</option>
                                                     <option value="8">8hs</option>
                                                     <option value="9">9hs</option>
                                                     <option value="10">10hs</option>
                                                     <option value="11">11hs</option>
                                                     <option value="12">12hs</option>
                                                     <option value="13">13hs</option>
                                                     <option value="14">14hs</option>
                                                     <option value="15">15hs</option>
                                                     <option value="16">16hs</option>
                                                     <option value="17">17hs</option>
                                                     <option value="18">18hs</option>
                                                     <option value="19">19hs</option>
                                                     <option value="20">20hs</option>
                                                     <option value="21">21hs</option>
                                                  </select>
                                                  <span class="text-danger"><?php echo form_error('customer_id_plan');?></span>

                                            </div>

                                       </div> -->

                                        <!-- <div class="media">
                                            <div class="media-left">
                                                <a class="btn btn-outline-primary btn-lg bg-white txt-muted btn-icon" href="#!" role="button"><i class="icofont icofont-gears"></i>
                                            </a>
                                            </div>
                                            <div class="media-body">

                                              <label class="control-label">Filtrar por Dia</label>
                                                  <select class="js-example-theme-single form-control" name="query_date">
                                                              <option value="00">Todos</option>
                                                               <option value="01">Lunes</option>
                                                               <option value="02">Martes</option>
                                                               <option value="03">Miercoles</option>
                                                               <option value="04">Jueves</option>
                                                               <option value="05">Viernes</option>
                                                               <option value="06">Sábado</option>

                                                 </select>
                                              <span class="text-danger"><?php echo form_error('query_date');?></span>

                                            </div>

                                         </div> -->
                                        
                                        <div class="media">
                                            <div class="media-left">
                                                <a class="btn btn-outline-primary btn-lg bg-white txt-muted btn-icon" href="#!" role="button"><i class="icofont icofont-gears"></i>
                                            </a>
                                            </div>
                                            <div class="media-body">

                                              <label class="control-label">Filtrar por Fecha</label>

                                              <input type="text" name="query_time" class="form-control" value="<?php echo $this->input->post('query_time'); ?>" />
                                              <span class="text-danger"><?php echo form_error('query_time');?></span>


                                            </div>
                                            <!-- end of media body -->
                                        </div>
                                        <hr>
                                        <div class="media">
                                            <div class="media-left">

                                            </div>
                                            <div class="media-body">

                                              <button type="submit" class="btn btn-success">
                                                <i class="fa fa-check"></i> Buscar
                                              </button>

                                            </div>
                                            <!-- end of media body -->
                                        </div>



                                    </div>

                                    <!-- end of task-right-revision -->
                                </div>
<?php echo form_close(); ?>

                                <!-- end of sidebar-right -->
                            </div>

                            <!-- end of card-block -->
                        </div>
                        <!-- Search Box card end -->


</div>
<div class="col-md-8 col-lg-8">
    <div class="card">
        <div class="card-header">
            <h5>Clases por Hora</h5>
            <span>Detalle de Asistencia de por Clase</span>
            <div class="card-header-right">
                <i class="icofont icofont-rounded-down"></i>
                <i class="icofont icofont-refresh"></i>
                <i class="icofont icofont-close-circled"></i>
            </div>
        </div>

        <div class=" col-md-11 col-lg-11 card-block">
            <div id="chart2"></div>
        </div>

    </div>
</div>


<div class="col-md-8 col-lg-8">
    <div class="card">
        <div class="card-header">
            <h5>Detalles</h5>
            <span>Detalle de ingresos para el periodo seleccionado | <?php echo anchor('Reportes/export', 'Descargar')?></span>
            <div class="card-header-right">
                <i class="icofont icofont-rounded-down"></i>
                <i class="icofont icofont-refresh"></i>
                <i class="icofont icofont-close-circled"></i>
            </div>
        </div>

        <div class="card-block">
            <div class="row">
              <table id="ingresos" class="table table-striped table-bordered nowrap">
                  <thead>
                      <tr>
                        <th>Nombre y Apellido</th>
                        <th>DNI</th>
                        <th>Fecha de Ingreso</th>
                        <th>Clase</th>

                      </tr>
                </thead>
                <tbody>
                    <?php foreach($all_entry as $entry){ ?>
                        <tr>
                            <td><?php echo $entry['customer_first_name'].', '.$entry['customer_last_name'] ?></td>
                            <td><?php echo $entry['customer_dni']; ?></td>
                            <td><?php echo $entry['customer_entry_date']; ?></td>
                           <td><?php echo $entry['customer_entry_class'].'hs'; ?></td>
                        </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
        </div>


    </div>
</div>


<script>
$('input[name="query_time"]').daterangepicker();



$( document ).ready(function() {
$('#ingresos').DataTable({
         "dom": 'lBfrtip',

        });
});


new Morris.Bar({
        // ID of the element in which to draw the chart.
        element: 'chart',
        // Chart data records -- each entry in this array corresponds to a point on
        // the chart.
        data: [
          { day: 'Lunes', value: <?php echo $lun; ?> },
          { day: 'Martes', value: <?php  echo $mar ?> },
          { day: 'Miercoles', value: <?php echo  $mie ?> },
          { day: 'Jueves', value: <?php  echo $jue ?> },
          { day: 'Viernes', value: <?php echo  $vie ?> },
          { day: 'Sabado', value: <?php  echo $sab ?> }
        ],
        // The name of the data record attribute that contains x-values.
        xkey: 'day',
        // A list of names of data record attributes that contain y-values.
        ykeys: ['value'],
        // Labels for the ykeys -- will be displayed when you hover over the
        // chart.
        labels: ['Ingresos'],
        resize: false
      });


      new Morris.Area({
              // ID of the element in which to draw the chart.
              element: 'chart2',
              // Chart data records -- each entry in this array corresponds to a point on
              // the chart.
              data: [
                { day: '8hs', value: <?php echo $ocho; ?> },
                { day: '9hs', value: <?php  echo $nueve ?> },
                { day: '10hs', value: <?php echo  $diez ?> },
                { day: '11hs', value: <?php  echo $once ?> },
                { day: '12hs', value: <?php echo  $doce ?> },
                { day: '13hs', value: <?php  echo $trece ?> },
                { day: '14hs', value: <?php echo $cat; ?> },
                { day: '15hs', value: <?php  echo $qui ?> },
                { day: '16hs', value: <?php echo  $deci ?> },
                { day: '17hs', value: <?php  echo $decisei ?> },
                { day: '18hs', value: <?php echo  $decioch ?> },
                { day: '19hs', value: <?php  echo $decinue ?> },
                { day: '20hs', value: <?php echo  $vein ?> },
                { day: '21hs', value: <?php  echo $veintiuno ?> },
                /*
                $this->data['ocho'] = $this->Customer_entry_model->get_all_customer_entry_count(array('customer_entry_class' => 8));
                $this->data['nueve'] = $this->Customer_entry_model->get_all_customer_entry_count(array('customer_entry_class' => 9));
                $this->data['diez'] = $this->Customer_entry_model->get_all_customer_entry_count(array('customer_entry_class' => 10));
                $this->data['once'] = $this->Customer_entry_model->get_all_customer_entry_count(array('customer_entry_class' => 11));
                $this->data['doce'] = $this->Customer_entry_model->get_all_customer_entry_count(array('customer_entry_class' => 12));
                $this->data['trece'] = $this->Customer_entry_model->get_all_customer_entry_count(array('customer_entry_class' => 13));

                $this->data['cat'] = $this->Customer_entry_model->get_all_customer_entry_count(array('customer_entry_class' => 14));
                $this->data['qui'] = $this->Customer_entry_model->get_all_customer_entry_count(array('customer_entry_class' => 15));
                $this->data['deci'] = $this->Customer_entry_model->get_all_customer_entry_count(array('customer_entry_class' => 16));
                $this->data['decisei'] = $this->Customer_entry_model->get_all_customer_entry_count(array('customer_entry_class' => 17));
                $this->data['decioch'] = $this->Customer_entry_model->get_all_customer_entry_count(array('customer_entry_class' => 18));
                $this->data['decinue'] = $this->Customer_entry_model->get_all_customer_entry_count(array('customer_entry_class' => 19));

                $this->data['vein'] = $this->Customer_entry_model->get_all_customer_entry_count(array('customer_entry_class' => 20));
                $this->data['veintiuno'] = $this->Customer_entry_model->get_all_customer_entry_count(array('customer_entry_class' => 21));
                */
              ],
               lineColors: ['#b4becb'],
              // The name of the data record attribute that contains x-values.
              xkey: 'day',
              // A list of names of data record attributes that contain y-values.
              ykeys: ['value'],
              // Labels for the ykeys -- will be displayed when you hover over the
              // chart.
              labels: ['Ingresos'],
              resize: false,


 pointSize: 0,
 fillOpacity: 0.4,
 pointStrokeColors: ['#01c0c8'],
 behaveLikeLine: true,
 gridLineColor: '#e0e0e0',
 lineWidth: 0,
 smooth: false,
 hideHover: 'auto',
 lineColors: ['#01c0c8'],
 resize: true
            });
</script>
