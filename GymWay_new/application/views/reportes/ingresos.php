
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
 <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
<!-- SITE VISIT CHART start -->
 <div class="row col-md-12 col-lg-12">
 <div class="col-md-8 col-lg-8">
     <div class="card">
         <div class="card-header">
             <h5>Clases por Dia de semana</h5>
             <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
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
                            <div class="card-header">
                                <h5 class="card-header-text">Criterios de Busqueda</h5></div>
                            <div class="card-block p-t-10">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search here...">
                                    <span class="input-group-addon" id="basic-addon1"><i class="icofont icofont-search"></i></span>
                                </div>
                                <div class="task-right">
                                    <div class="task-right-header-status">
                                        <span data-toggle="collapse">Completed Stats</span>
                                        <i class="icofont icofont-rounded-down f-right"></i>
                                    </div>
                                    <div class="taskboard-right-revision user-box">
                                        <div class="media">
                                            <div class="media-left">
                                                <a class="btn btn-outline-primary btn-lg bg-white txt-muted btn-icon" href="#!" role="button"><i class="icofont icofont-gears"></i>
                                            </a>
                                            </div>
                                            <div class="media-body">
                                                <div class="chat-header">Drop the IE specific hacks for temporal inputs</div>
                                                <p class="chat-header  text-muted">4 minutes ago</p>
                                            </div>
                                            <!-- end of media body -->
                                        </div>


                                    </div>
                                    <!-- end of task-right-revision -->
                                </div>
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
            <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
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
<script>
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
