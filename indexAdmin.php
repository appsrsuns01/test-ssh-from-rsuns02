
<!DOCTYPE html>
  
<head>
    
  <!-- <meta charset="UTF-8" http-equiv="refresh" content="60"> -->
  <meta charset="UTF-8" >
  <title>SIMRS UNS | Dashboard</title>
  <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
  <!-- Bootstrap 3.3.2 -->
  <link href="http://localhost:666/dashboardrs/assets/AdminLTE-2.0.5/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <!-- Font Awesome Icons -->
  <link href="http://localhost:666/dashboardrs/assets/font-awesome-4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <!-- Ionicons -->
  <link href="http://localhost:666/dashboardrs/assets/ionicons-2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
  <!-- Theme style -->
  <link href="http://localhost:666/dashboardrs/assets/AdminLTE-2.0.5/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
  <!-- AdminLTE Skins. Choose a skin from the css/skins 
        folder instead of downloading all of them to reduce the load. -->
  <link href="http://localhost:666/dashboardrs/assets/AdminLTE-2.0.5/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
  <link rel="icon" href="http://localhost:666/dashboardrs/assets\AdminLTE-2.0.5\dist\img\logorsuns.png" type="image/gif">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
  <![endif]-->

  <!--tambahkan custom css disini-->
  <!-- iCheck -->
  <link href="http://localhost:666/dashboardrs/assets/AdminLTE-2.0.5/plugins/iCheck/flat/blue.css" rel="stylesheet" type="text/css" />
  <!-- Morris chart -->
  <link href="http://localhost:666/dashboardrs/assets/AdminLTE-2.0.5/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
  <!-- jvectormap -->
  <link href="http://localhost:666/dashboardrs/assets/AdminLTE-2.0.5/plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
  <!-- Date Picker -->
  <link href="http://localhost:666/dashboardrs/assets/AdminLTE-2.0.5/plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
  <!-- Daterange picker -->
  <link href="http://localhost:666/dashboardrs/assets/AdminLTE-2.0.5/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
  <!-- bootstrap wysihtml5 - text editor -->
  <link href="http://localhost:666/dashboardrs/assets/AdminLTE-2.0.5/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />

</head>

<body class="skin-blue fixed">
  <!-- Site wrapper -->
  <div class="wrapper">

    <header class="main-header">
      <a href="#" class="logo"><b>SIMRS</b>UNS</a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="http://localhost:666/dashboardrs/assets\AdminLTE-2.0.5\dist\img\logorsuns.png" class="user-image" alt="User Image"/>
                <span class="hidden-xs">Customer Service</span>
              </a>
              <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="http://localhost:666/dashboardrs/assets\AdminLTE-2.0.5\dist\img\logorsuns.png" class="img-circle" alt="User Image" />
                    <p>
                      Customer Service                                        <!-- <small>Member since April. 2017</small>-->
                    </p>
                  </li>
                  
                  <li class="user-footer">
                    <div class="pull-right">
                      <a href="http://localhost:666/dashboardrs/login/logout" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <!-- =============================================== --><!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="http://localhost:666/dashboardrs/assets\AdminLTE-2.0.5\dist\img\logorsuns.png" class="img-circle" alt="User Image" />
          </div>

          <div class="pull-left info">
            <p>
              Customer Service
            </p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>
        <!-- close tag user-panel -->

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
          <li class="header">MAIN MENU</li>
          <li><a href="http://localhost:666/dashboardrs/admin/index"><i class="fa fa-dashboard"></i> <span>DASHBOARD</span></a></li>
          <li class="treeview"><a href="#"><i class="fa fa-bed"></i><span>INFO BED</span><i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">                    
              <li><a href="http://localhost:666/dashboardrs/admin/umum"><i class="fa fa-chevron-circle-right"></i> PUBLIC </a></li>      
            </ul>
          </li>

          <li class="header">REGISTRASI</li>
          <li class="treeview"><a href="#"><i class="fa fa-files-o"></i><span>RAWAT JALAN</span><i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
              <li>     
                <a href="#"><i class="fa fa-line-chart"></i><span>GRAFIK</span><i class="fa fa-angle-left pull-right"></i></a>  
                <ul class="treeview-menu">
                  <li>     
                    <a href="#"><i class="fa fa-clock-o"></i> PERIODE<i class="fa fa-angle-left pull-right"></i></a>  
                    <ul class="treeview-menu">
                      <li>
                        <a href="http://localhost:666/dashboardrs/admin/rajalperhari"> HARIAN</a>
                        <a href="http://localhost:666/dashboardrs/admin/rajalperbulan"> BULANAN</a>
                        <!-- <a href="admin/perbulan"> TAHUNAN</a> -->
                      </li>
                    </ul>
                  </li>

                  <li>     
                    <a href="#"><i class="fa fa-medkit"></i> POLI<i class="fa fa-angle-left pull-right"></i></a> 
                    <ul class="treeview-menu"> 
                      <li>
                        <a href="http://localhost:666/dashboardrs/admin/poliperbulan">  BULANAN</a>
                        <!-- <a href="admin/polipertahun">  TAHUNAN</a> -->
                      </li>
                    </ul>
                  </li>

                  <li>     
                    <a href="#"><i class="fa fa-stethoscope"></i> DOKTER<i class="fa fa-angle-left pull-right"></i></a> 
                    <ul class="treeview-menu"> 
                      <li>
                        <a href="http://localhost:666/dashboardrs/admin/dokterperbulan"> BULANAN</a>
                        <!-- <a href="admin/dokterpertahun"> TAHUNAN</a> -->
                      </li>
                    </ul>
                  </li>


                </ul>
              </li>

              <li>     
                <a href="#"><i class="glyphicon glyphicon-user"></i> DATA PASIEN<i class="fa fa-angle-left pull-right"></i></a>  
                <ul class="treeview-menu">
                  <li><a href="http://localhost:666/dashboardrs/admin/rawatjalandx"> Top 10 Diag. Penyakit</a></li>
                </ul>
              </li>
            </ul>
          </li>

          <li class="treeview"><a href="#"><i class="fa fa-files-o"></i><span>RAWAT INAP</span><i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
              <li>     
                <a href="#"><i class="fa fa-line-chart"></i><span>GRAFIK</span><i class="fa fa-angle-left pull-right"></i></a>  
                <ul class="treeview-menu">
                  <li>     
                    <a href="#"><i class="fa fa-clock-o"></i> PERIODE<i class="fa fa-angle-left pull-right"></i></a>  
                    <ul class="treeview-menu">
                      <li>
                      <a href="http://localhost:666/dashboardrs/admin/ranapperhari"> HARIAN</a>
                        <a href="http://localhost:666/dashboardrs/admin/ranapperbulan"> BULANAN</a>
                        <!-- <a href="admin/perbulan"> TAHUNAN</a> -->
                      </li>
                    </ul>
                  </li>

                </ul>
              </li>

              <li>     
                <a href="#"><i class="glyphicon glyphicon-user"></i> DATA PASIEN<i class="fa fa-angle-left pull-right"></i></a>  
                <ul class="treeview-menu">
                  <li><a href="http://localhost:666/dashboardrs/admin/rawatinapdx"> Top 10 Diag. Penyakit</a></li>
                </ul>
              </li>
            </ul>
          </li>

          <li class="treeview"><a href="#"><i class="fa fa-files-o"></i><span>IGD</span><i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
              <li>     
                <a href="#"><i class="fa fa-line-chart"></i><span>GRAFIK</span><i class="fa fa-angle-left pull-right"></i></a>  
                <ul class="treeview-menu">
                  <li>     
                    <a href="#"><i class="fa fa-clock-o"></i> PERIODE<i class="fa fa-angle-left pull-right"></i></a>  
                    <ul class="treeview-menu">
                      <li>
                        <a href="http://localhost:666/dashboardrs/admin/igdperhari"> HARIAN</a>
                        <a href="http://localhost:666/dashboardrs/admin/igdperbulan"> BULANAN</a>
                        <!-- <a href="admin/perbulan"> TAHUNAN</a> -->
                      </li>
                    </ul>
                  </li>

                </ul>
              </li>

              <li>     
                <a href="#"><i class="glyphicon glyphicon-user"></i> DATA PASIEN<i class="fa fa-angle-left pull-right"></i></a>  
                <ul class="treeview-menu">
                  <li><a href="http://localhost:666/dashboardrs/admin/igddx"> Top 10 Diag. Penyakit</a></li>
                </ul>
              </li>
            </ul>
          </li>



          <!-- ==================================================================================== -->
			
      
          <li class="header">LINK TERKAIT</li>
          <li><a href="https://kunjungan.rs.uns.ac.id/" target="_blank"><i class="glyphicon glyphicon-user"></i> KUNJUNGAN</a></li>
          <li class="header">SYSTEM</li>
          <li><a href="http://localhost:666/dashboardrs/login/logout"><i class="glyphicon glyphicon-off"></i> LOGOUT</a></li>
			
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>

    <!-- =============================================== -->



    <!-- Content Wrapper. Contains page content -->
    <!-- <div class="content-wrapper">	 -->
    

        
      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
      <script type="text/javascript">
          
        // google.charts.load('current', {'packages':['corechart','bar','controls'], 'language': 'id'});
        // google.charts.setOnLoadCallback(drawChart);
        // google.charts.setOnLoadCallback(drawChart1);
        // google.charts.setOnLoadCallback(drawChart2);
        // google.charts.setOnLoadCallback(drawChart3);
        // google.charts.setOnLoadCallback(drawChart4);
        // google.charts.setOnLoadCallback(drawChart5);	 
        // google.charts.setOnLoadCallback(drawChart7);
        // google.charts.setOnLoadCallback(drawChart8);

        // function drawChart() {
        //   // Create the data table.
        //   var data = new google.visualization.DataTable();
        //   data.addColumn('string', 'Topping');
        //   data.addColumn('number', 'Slices');
        //   data.addRows([
        //     ["UMUM/ NON ASURANSI",16],["BPJS NON PBI",337],["BPJS PBI",18],["BPJS TK",0],["JASA RAHARJA",1],["JAMPERSAL",0],["INHEALTH",1],["BRANTAS ABIPRAYA",0],["ASURANSI LAIN",1],["COVID19-UNS",1],["VAKSIN COVID",0],["TASPEN",0],["DISKRESI DIREKTUR",0],["COVID-19",1],
        //   ]);

        //   // Set chart options
        //   var options = {'title':'Rawat Jalan Berdasarkan Cara Bayar',
        //     is3D: true,
        //     'width':500,
        //     'height':300
        //   };

        //   // Instantiate and draw our chart, passing in some options.
        //   var chart = new google.visualization.PieChart(document.getElementById('revenue-chart'));
        //   chart.draw(data, options);
        // }

        // //cara bayar --> ranap
        // function drawChart1() {

        //   // Create the data table.
        //   var data = new google.visualization.DataTable();
        //   data.addColumn('string', 'Topping');
        //   data.addColumn('number', 'Slices');
          
        //   data.addRows([
        //     ["UMUM/ NON ASURANSI",0],["BPJS NON PBI",3],["BPJS PBI",1],["BPJS TK",0],["JASA RAHARJA",0],["JAMPERSAL",0],["INHEALTH",0],["BRANTAS ABIPRAYA",0],["ASURANSI LAIN",0],["COVID19-UNS",0],["VAKSIN COVID",0],["TASPEN",0],["DISKRESI DIREKTUR",0],["COVID-19",7],    
        //   ]);

        //   // Set chart options
        //   var options = {
        //     'title':'Rawat Inap Berdasarkan Cara Bayar',
        //     is3D: true,
        //     'width':500,
        //     'height':300
        //   };


        //   var chart = new google.visualization.PieChart(document.getElementById('sales-chart'));
        //   chart.draw(data, options);
        // }

        // //L/P --> ralan	 
        // function drawChart2() {

        //   // Create the data table.
        //   var data = new google.visualization.DataTable();
        //   data.addColumn('string', 'Topping');
        //   data.addColumn('number', 'Slices');
        //   data.addRows([
        //     ['LAKI-LAKI', 160],
        //     ['PEREMPUAN', 152],
        //   ]);

        //   // Set chart options
        //   var options = {
        //     'title':'Rawat Jalan Berdasarkan L/P',
        //     is3D: true,
        //     'width':500,
        //     'height':300
        //   };
                  

        //   // Instantiate and draw our chart, passing in some options.
        //   var chart = new google.visualization.PieChart(document.getElementById('revenue-chart1'));
        //   chart.draw(data, options);
        // }

        // //L/P --> ranap
        // function drawChart3() {
        //   // Create the data table.
        //   var data = new google.visualization.DataTable();
        //   data.addColumn('string', 'Topping');
        //   data.addColumn('number', 'Slices');
        //   data.addRows([
        //     ['LAKI-LAKI', 6],
        //     ['PEREMPUAN', 5],
        //   ]);

        //   // Set chart options
        //   var options = {'title':'Rawat Inap Berdasarkan L/P',
        //     is3D: true,
        //     'width':500,
        //     'height':300
        //   };

        //   // Instantiate and draw our chart, passing in some options.

        //   var chart = new google.visualization.PieChart(document.getElementById('sales-chart1'));
        //   chart.draw(data, options);
        // }

        // //Baru/Lama --> ralan
        // function drawChart4() {
        //   // Create the data table.
        //   var data = new google.visualization.DataTable();
        //   data.addColumn('string', 'Topping');
        //   data.addColumn('number', 'Slices');
        //   data.addRows([
        //     ['BARU', 22],
        //     ['LAMA', 354],
        //   ]);

        //   // Set chart options
        //   var options = {'title':'Rawat Jalan Berdasarkan Baru/Lama',
        //     is3D: true,
        //     'width':500,
        //     'height':300
        //   };

        //   // Instantiate and draw our chart, passing in some options.

        //   var chart = new google.visualization.PieChart(document.getElementById('revenue-chart2'));
        //   chart.draw(data, options);
        // }

        // //Baru/Lama --> ranap
        // function drawChart5() {

        //   // Create the data table.
        //   var data = new google.visualization.DataTable();
        //   data.addColumn('string', 'Topping');
        //   data.addColumn('number', 'Slices');
        //   data.addRows([
        //     ['BARU', 6],
        //     ['LAMA', 5],
        //   ]);

        //   // Set chart options
        //   var options = {'title':'Rawat Inap Berdasarkan Baru/Lama',
        //     is3D: true,
        //     'width':500,
        //     'height':300
        //   };

        //   // Instantiate and draw our chart, passing in some options.

        //   var chart = new google.visualization.PieChart(document.getElementById('sales-chart2'));
        //   chart.draw(data, options);
        // }
        // //pasien per bulan

          
        // //Poli/IGD --> ralan

        // function drawChart7() {

        //   // Create the data table.
        //   var data = new google.visualization.DataTable();
        //   data.addColumn('string', 'Topping');
        //   data.addColumn('number', 'Slices');
        //   data.addRows([
        //     ['POLI', 0 ],
        //     ['IGD', 0 ],
        //   ]);

        //   // Set chart options
        //   var options = {
        //     'title':'Rawat Jalan Berdasarkan Poli/IGD',
        //     is3D: true,
        //     'width':500,
        //     'height':300
        //   };

        //   // Instantiate and draw our chart, passing in some options.

        //   var chart = new google.visualization.PieChart(document.getElementById('revenue-chart3'));
        //   chart.draw(data, options);
        // }
        // //Poli/IGD --> ranap
        // function drawChart8() {

        //   // Create the data table.
        //   var data = new google.visualization.DataTable();
        //   data.addColumn('string', 'Topping');
        //   data.addColumn('number', 'Slices');
        //   data.addRows([
        //     ['POLI', 0 ],
        //     ['IGD', 0 ],
        //   ]);

        //   // Set chart options
        //   var options = {
        //     'title':'Rawat Inap Berdasarkan Poli/IGD',
        //     is3D: true,
        //     'width':500,
        //     'height':300
        //   };

        //   // Instantiate and draw our chart, passing in some options.

        //   var chart = new google.visualization.PieChart(document.getElementById('sales-chart3'));
        //   chart.draw(data, options);
        // }

        // //barchart perbulan total - ralan


      </script>





      
      <section class="content">

        <div class="callout callout-success">
          <h5 align="center"><i class="fa fa-bullhorn"></i>  INFO UPDATE KUNJUNGAN PASIEN</h5>
          <h5 align="center">(Update Otomatis Per 1 Menit)</h5>
          <b><h4 align='center'>Senin, 26 Juli 2021  15:46:56 WIB</b>
        </div>
          

        <!--grafik per poli-->
        <div class="box box-primary ">
          <div class="nav-tabs-custom">
            <!-- Tabs within a box -->
            <ul class="nav nav-tabs pull-right" >
              <li class="active" ><a href="#bar" data-toggle="tab">Angka Real</a></li>
              <li ><a href="#pie" data-toggle="tab">Prosentase</a></li>
              <li class="pull-left header"><i class="fa fa-pie-chart"></i> Kunjungan Rawat Jalan Per Poli dan IGD</li>
            </ul>

            <div class="tab-content no-padding" >
              <!-- Morris chart - Sales -->
              <div class="tab-pane active" id="bar" style="min-width: 310px; height: 400px; margin: 0 auto">
              </div>
              <div class="chart tab-pane" id="pie" style="position: relative; height: 400px;"></div>
            </div>
          </div>
          <!-- /.nav-tabs-custom -->
          <!--
          terjadi selisih antara teregistrasi dan terlayani karena
          1. adanya hanya rujuk masuk, tidak ada layanan/tindakan, stastus tidak diganti ke batal
          2. tidak ada layanan/tindakan, tetapi hanya mengambil/beli obat(mungkin tindakan dokter di gratiskan) 
          -->				
            
        </div>
        <!-- /.box box-primary -->

        <div class="box box-primary  " >
          <div class="box-header with-border">
            <h3 class="box-title"><i class="fa fa-user"></i> &nbsp; Kunjungan Rawat Jalan</h3>
            <div class="box-tools pull-right">
              <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              <div class="btn-group">
              </div>
              <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
          </div>
          <!-- /.box-header -->

          <div class="box-body">
            <div class="row">
              <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                  <div class="inner">
                    <h3>355 </h3>
                    <p>JKN</p>
                  </div>

                  <div class="icon">
                    <i class="ion ion-person"></i>
                  </div>
                  
                  <a href="#" class="small-box-footer" data-toggle="modal" data-target="#1bpjs">Detail <i class="fa fa-arrow-circle-right"></i></a>
                    
                  <!--modal-->
            
                  <!-- popup box modal starts here -->
                
                  <div class="modal fade modal-info"  id="1bpjs">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title">Detail Kunjungan Rawat Jalan JKN</h4>
                        </div>
                        <div class="modal-body">
                          <p>PBI : 18   </p>
                          <p>NON PBI : 337</p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Close</button>
                        </div>

                      </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                  </div><!-- /.modal -->
                  
                  
                </div>
                <!-- popup box modal ends -->

              </div>
              <!-- ./col -->

              <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                  <div class="inner">
                    <h3>16</h3>
                    <p>UMUM</p>
                  </div>

                  <div class="icon">
                    <i class="ion ion-person"></i>
                  </div>
                  <a href="#" class="small-box-footer"> <i class="fa fa-arrow-circle-right"></i></a>
                </div>
                <!-- end of div small-box bg-green -->

              </div>
              <!-- ./col -->

              <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                  <div class="inner">
                    <h3>0</h3>
                    <p>JASA RAHARJA</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-person"></i>
                  </div>
                  <a href="#" class="small-box-footer"> <i class="fa fa-arrow-circle-right"></i></a>
                </div>
                <!-- end of div small-box bg-green -->

              </div><!-- ./col -->

              <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-red">
                  <div class="inner">
                    <h3>4</h3>
                    <p>ASURANSI LAIN</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-person"></i>
                  </div>
                  <a href="#" class="small-box-footer" data-toggle="modal" data-target="#lain">Detail <i class="fa fa-arrow-circle-right"></i></a>
                    
                  <!--modal-->
            
                  <!-- popup box modal starts here -->
                  <div class="modal fade modal-success"  id="lain">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title">Detail Kunjungan Rawat Jalan Asuransi Lain</h4>
                        </div>

                        <div class="modal-body">
                          <p>BPJS TK : 0</p><p>JAMPERSAL : 0</p><p>INHEALTH : 1</p><p>BRANTAS ABIPRAYA : 0</p><p>ASURANSI LAIN : 1</p><p>COVID19-UNS : 1</p><p>VAKSIN COVID : 0</p><p>TASPEN : 0</p><p>DISKRESI DIREKTUR : 0</p><p>COVID-19 : 1</p>                    <!-- <p>BKMKS :    </p> -->
                        </div>

                        <div class="modal-footer">
                          <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Close</button>
                        </div>
                      </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                  </div><!-- /.modal -->
                  
                  <!-- popup box modal ends -->
                </div>
                <!-- end of div small-box bg-red -->

              </div><!-- ./col -->
            
            </div><!-- /.row -->
          </div><!-- /.box body -->
        </div><!-- /.box -->

        <!-- Small boxes 2 (Stat box) -->
        <div class="box box-primary ">
          <div class="box-header with-border">
            <h3 class="box-title"><i class="fa fa-user"></i> &nbsp; Kunjungan Rawat Inap </h3>
            <div class="box-tools pull-right">
              <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              <div class="btn-group">
              </div>
              <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
          </div><!-- /.box-header -->

          <div class="box-body">
            <div class="row">
              <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                  <div class="inner">
                    <h3>4 </h3>
                    <p>JKN</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-person"></i>
                  </div>
                  <a href="#" class="small-box-footer" data-toggle="modal" data-target="#bpjs" >Detail <i class="fa fa-arrow-circle-right"></i></a>

                  <!--modal-->
            
                  <!-- popup box modal starts here -->
                  <div class="modal fade modal-info"  id="bpjs">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title">Detail Kunjungan Rawat Inap JKN</h4>
                        </div>
                        <div class="modal-body">
                          <p>PBI : 1   </p>
                          <p>NON PBI : 3</p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Close</button>
                        </div>
                      </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                  </div><!-- /.modal -->
                  
                  <!-- popup box modal ends -->
                </div>
              </div><!-- ./col -->

              <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                  <div class="inner">
                    <h3>0</h3>
                    <p>UMUM</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-person"></i>
                  </div>
                  <a href="#" class="small-box-footer"> <i class="fa fa-arrow-circle-right"></i></a>
                  
                  <!--modal-->
            
                  <!-- popup box modal starts here -->
                  <div class="modal fade modal-success"  id="umum">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title">Modal Default</h4>
                        </div>
                        <div class="modal-body">
                          <p>One fine body&hellip;</p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Close</button>
                        </div>
                      </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                  </div><!-- /.modal -->
                
                  <!-- popup box modal ends -->
                </div>
              </div><!-- ./col -->

              <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                  <div class="inner">
                    <h3>0</h3>
                    <p>JASA RAHARJA</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-person"></i>
                  </div>
                  <a href="#" class="small-box-footer"> <i class="fa fa-arrow-circle-right"></i></a>

                  <!--modal-->
            
                  <!-- popup box modal starts here -->
                  <div class="modal fade modal-warning"  id="bkmks">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title">Modal Default</h4>
                        </div>
                        <div class="modal-body">
                          <p>One fine body&hellip;</p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Close</button>
                        </div>
                      </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                  </div><!-- /.modal -->
                
                  <!-- popup box modal ends -->
                </div>
              </div><!-- ./col -->
          
              <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-red">
                  <div class="inner">
                    <h3>7</h3>
                    <p>ASURANSI LAIN</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-person"></i>
                  </div>
                  <a href="#" class="small-box-footer" data-toggle="modal" data-target="#lain-ranap">Detail <i class="fa fa-arrow-circle-right"></i></a>
                    
                  <!--modal-->
                
                  <!-- popup box modal starts here -->
                  <div class="modal fade modal-success"  id="lain-ranap">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title">Detail Kunjungan Rawat Inap Asuransi Lain</h4>
                        </div>
                        <div class="modal-body">
                          <p>BPJS TK : 0</p><p>JAMPERSAL : 0</p><p>INHEALTH : 0</p><p>BRANTAS ABIPRAYA : 0</p><p>ASURANSI LAIN : 0</p><p>COVID19-UNS : 0</p><p>VAKSIN COVID : 0</p><p>TASPEN : 0</p><p>DISKRESI DIREKTUR : 0</p><p>COVID-19 : 7</p>					          <!-- <p>BKMKS :    </p> -->
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Close</button>
                        </div>
                      </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                  </div><!-- /.modal -->
                  
                  <!-- popup box modal ends -->

                </div>
              </div><!-- ./col -->

            </div><!-- /.row -->

            <h6>*Berdasarkan Tanggal Keluar</h6>
        
          </div><!-- /.box-body -->

        </div>
        <!-- /.box box-primary -->

        <!-- tabel kunjungan-->
        <div class="box box-primary ">
          <div class="box-header with-border">
            <h3 class="box-title"><i class="glyphicon glyphicon-search"></i> &nbsp;  Pencarian Kunjungan Pasien</h3>
            <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <div class="btn-group">
            </div>
              <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
          </div><!-- /.box-header -->

          <div class="box-body">
            <form class="form-inline" name="frm" role="form" id="" action="http://localhost:666/dashboardrs/admin/index" method="post">
              <div class="form-group">
                <label> Periode </label>
                <input name="tgl_awal" placeholder="Tanggal Awal" type="text" class="form-control datepicker-input" required="required">
                <label> s/d </label>
                <input name="tgl_akhir" placeholder="Tanggal Akhir" type="text" class="form-control datepicker-input" required="required">
              </div> 
              <button type="submit" class="btn btn-info"><i class="glyphicon glyphicon-search"></i>   Cari</button>
            </form>
              
                          
            <h4>
              <br>
              <span class='btn btn-block btn-success'> Kunjungan Pasien Hari Ini :
                <strong>
                  2021-07-26
                </strong>
              </span>
            </h4>
            <br>      

            <table id="example3" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>NO</th>
                  <th>JAMINAN</th>
                  <th>RAWAT JALAN</th>
                  <th>RAWAT INAP</th>
                </tr>
              </thead>

              <tbody>
                <tr>
                  <td>1</td>
                  <td>JKN</td>
                  <td>355</td>
                  <td>4 </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>NON ASURANSI</td>
                  <td>16</td>
                  <td>0 </td>
                </tr>
            
                <tr>
                  <td>3</td>
                  <td>JASA RAHARJA</td>
                  <td>0</td>
                  <td>0 </td>
                </tr>

                <tr>
                  <td>4</td>
                  <td >ASURANSI LAIN ( klik panah untuk info detail )</td>
                  <td id="mybtn" title="Info Detail"><a href="#" class="small-box-footer" data-toggle="modal" data-target="#lain">4  <i class="fa fa-arrow-circle-right"></i></a></td>
                  <td id="mybtn" title="Info Detail"><a href="#" class="small-box-footer" data-toggle="modal" data-target="#lain-ranap">7  <i class="fa fa-arrow-circle-right"></i></a></td>

                </tr>

                <tr>
                  <td colspan='2'><b>Jumlah</b></td>
                  <td><b>376</b></td>
                  <td><b>11</b></td>

                </tr>

                <tr>
                  <td colspan='2'><b>Jumlah Total Rawat Jalan + Rawat Inap</b></td>
                  <td colspan='2'><b>387</b></td>
                </tr>
              </tbody>

            </table>
                    
          </div><!-- /.box-body -->
              
        </div><!-- /.box box-primary-->

        <div class="row">
          <section class="col-lg-6 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="nav-tabs-custom">
              <!-- Tabs within a box -->
              <ul class="nav nav-tabs pull-right" >
                <li class="active" ><a href="#revenue-chart" data-toggle="tab">Rawat Jalan</a></li>
                <li ><a href="#sales-chart" data-toggle="tab">Rawat Inap</a></li>
                <li class="pull-left header"><i class="fa fa-pie-chart"></i> Berdasarkan Cara Bayar</li>
              </ul>
              <div class="tab-content no-padding" >
                <!-- Morris chart - Sales -->
                <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;"></div>
                <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;"></div>
              </div>
            </div><!-- /.nav-tabs-custom -->
          </section>

          <section class="col-lg-6 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="nav-tabs-custom">
              <!-- Tabs within a box -->
              <ul class="nav nav-tabs pull-right" >
                <li class="active" ><a href="#revenue-chart1" data-toggle="tab">Rawat Jalan</a></li>
                <li ><a href="#sales-chart1" data-toggle="tab">Rawat Inap</a></li>
                <li class="pull-left header"><i class="fa fa-pie-chart"></i> Berdasarkan Jenis Kelamin</li>
              </ul>
              <div class="tab-content no-padding" >
                <!-- Morris chart - Sales -->
                <div class="chart tab-pane active" id="revenue-chart1" style="position: relative; height: 300px;"></div>
                <div class="chart tab-pane" id="sales-chart1" style="position: relative; height: 300px;"></div>
              </div>

            </div><!-- /.nav-tabs-custom -->
          </section>
          
          <!-- Baru/Lama -->
          <section class="col-lg-6 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="nav-tabs-custom">
              <!-- Tabs within a box -->
              <ul class="nav nav-tabs pull-right" >
                <li class="active" ><a href="#revenue-chart2" data-toggle="tab">Rawat Jalan</a></li>				
                <li ><a href="#sales-chart2" data-toggle="tab">Rawat Inap</a></li>
                <li class="pull-left header"><i class="fa fa-pie-chart"></i> Berdasarkan Baru/Lama</li>					
              </ul>
              <div class="tab-content no-padding" >
                <!-- Morris chart - Sales -->
                <div class="chart tab-pane active" id="revenue-chart2" style="position: relative; height: 300px;">	</div>		
                <div class="chart tab-pane" id="sales-chart2" style="position: relative; height: 300px;"></div>
              </div>
            </div><!-- /.nav-tabs-custom -->
          </section>
          
          <!-- POLI/IGD -->
          <section class="col-lg-6 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="nav-tabs-custom">
              <!-- Tabs within a box -->
              <ul class="nav nav-tabs pull-right" >
                <li class="active" ><a href="#revenue-chart3" data-toggle="tab">Rawat Jalan</a></li>				
                <li ><a href="#sales-chart3" data-toggle="tab">Rawat Inap</a></li>
                <li class="pull-left header"><i class="fa fa-pie-chart"></i> Berdasarkan Poli/IGD</li>					
              </ul>
              <div class="tab-content no-padding" >
                <!-- Morris chart - Sales -->
                <div class="chart tab-pane active" id="revenue-chart3" style="position: relative; height: 300px;">	</div>		
                <div class="chart tab-pane" id="sales-chart3" style="position: relative; height: 300px;"></div>
              </div>
            </div><!-- /.nav-tabs-custom -->
          </section>
          
          <!-- </div> KELEBIHAN DIV ASLEEE-->
        </div><!-- /.row-->

      </section>

      <div>
      <!-- /.content-wrapper -->
        <footer class="main-footer">
          <div class="pull-right hidden-xs">
            <a href="http://almsaeedstudio.com">Almsaeed Studio</a>. </strong><b> Version</b> 2.0
          </div>
          <!--<strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights reserved.-->
          <strong>Copyright &copy; 2021 IT-RSUNS. All Right Reserved.</strong>
        </footer>
      </div>
      <!-- ./wrapper -->

    <!-- </div> -->
    <!-- content-wrapper -->

  </div><!-- ./wrapper -->

  <!-- jQuery 2.1.3 -->
  <script src="http://localhost:666/dashboardrs/assets/AdminLTE-2.0.5/plugins/jQuery/jQuery-2.1.3.min.js"></script>
  <!-- Bootstrap 3.3.2 JS -->
  <script src="http://localhost:666/dashboardrs/assets/AdminLTE-2.0.5/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
  <!-- SlimScroll -->
  <script src="http://localhost:666/dashboardrs/assets/AdminLTE-2.0.5/plugins/slimScroll/jquery.slimScroll.min.js" type="text/javascript"></script>
  <!-- FastClick -->
  <script src='http://localhost:666/dashboardrs/assets/AdminLTE-2.0.5/plugins/fastclick/fastclick.min.js'></script>
  <!-- AdminLTE App -->
  <script src="http://localhost:666/dashboardrs/assets/AdminLTE-2.0.5/dist/js/app.min.js" type="text/javascript"></script>

  <!--tambahkan custom js disini-->
  <!-- jQuery UI 1.11.2 -->
  <script src="http://localhost:666/dashboardrs/assets/js/jquery-ui.min.js" type="text/javascript"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
      $.widget.bridge('uibutton', $.ui.button);
  </script>
  <!-- Morris.js charts
  <script src="http://localhost:666/dashboardrs/assets/js/raphael-min.js"></script>
  <script src="http://localhost:666/dashboardrs/assets/AdminLTE-2.0.5/plugins/morris/morris.min.js" type="text/javascript"></script>
  <!-- Sparkline
  <script src="http://localhost:666/dashboardrs/assets/AdminLTE-2.0.5/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
  <!-- jvectormap
  <script src="http://localhost:666/dashboardrs/assets/AdminLTE-2.0.5/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
  <script src="http://localhost:666/dashboardrs/assets/AdminLTE-2.0.5/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
  <!-- jQuery Knob Chart
  <script src="http://localhost:666/dashboardrs/assets/AdminLTE-2.0.5/plugins/knob/jquery.knob.js" type="text/javascript"></script>
  <!-- daterangepicker -->
  <script src="http://localhost:666/dashboardrs/assets/AdminLTE-2.0.5/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
  <!-- datepicker -->
  <script src="http://localhost:666/dashboardrs/assets/AdminLTE-2.0.5/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
  <script src="http://localhost:666/dashboardrs/assets/AdminLTE-2.0.5/plugins/datepicker/datepicker.js" type="text/javascript"></script>
	<script>
    $(document).ready(function(){                
      //Date picker
      $('.datepicker-input').datepicker({dateFormat : 'yy-mm-dd'});
    });
  </script>
  <!-- Bootstrap WYSIHTML5 -->
  <script src="http://localhost:666/dashboardrs/assets/AdminLTE-2.0.5/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
  <!-- iCheck -->
  <script src="http://localhost:666/dashboardrs/assets/AdminLTE-2.0.5/plugins/iCheck/icheck.min.js" type="text/javascript"></script>

  <!-- AdminLTE dashboard demo (This is only for demo purposes)
  <script src="http://localhost:666/dashboardrs/assets/AdminLTE-2.0.5/dist/js/pages/dashboard.js" type="text/javascript"></script>

  <!-- AdminLTE for demo purposes-->
  <script src="http://localhost:666/dashboardrs/assets/AdminLTE-2.0.5/dist/js/demo.js" type="text/javascript"></script>
  <!-- chart
  <script src="http://localhost:666/dashboardrs/assets/AdminLTE-2.0.5/plugins/highcharts.js" type="text/javascript"></script>
  <script src="http://localhost:666/dashboardrs/assets/AdminLTE-2.0.5/dist/js/pages/gawean.js" type="text/javascript"></script>-->
  <script>
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges: {
          'Today': [moment(), moment()],
          'Yesterday': [moment().subtract('days', 1), moment().subtract('days', 1)],
          'Last 7 Days': [moment().subtract('days', 6), moment()],
          'Last 30 Days': [moment().subtract('days', 29), moment()],
          'This Month': [moment().startOf('month'), moment().endOf('month')],
          'Last Month': [moment().subtract('month', 1).startOf('month'), moment().subtract('month', 1).endOf('month')]
        },
        startDate: moment().subtract('days', 29),
        endDate: moment()
      },

      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
      }

    );

    $( document ).ready(function() {
      $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
        var target = $(e.target).attr("href") // activated tab			  
        if(target == "#prosentase"){
          drawChart6();
        }else if(target == "#angkareal"){
          drawChart10();
        }
      });

			$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
			  var target = $(e.target).attr("href") // activated tab			  
			  if(target == "#prosentase1"){
			  	drawChart11();
			  }else if(target == "#angkareal1"){
			  	drawChart9();
			  }
			});
		});

  </script>


  <!-- </script> KELEBIHAN SCRIPT CLOSE TAG-->




  <!-- Chart --> 
  <script src="https://code.highcharts.com/highcharts.js"></script>
  <script src="https://code.highcharts.com/highcharts-3d.js"></script>
  <script src="https://code.highcharts.com/highcharts-more.js"></script>
  <script src="https://code.highcharts.com/modules/exporting.js"></script>

  <script type="text/javascript">
    $(document).ready(function(){
      //alert("oke");

      // =========== BIMON MODIF SYNC DENGAN PILAR ===========
      // fungsi graphic BAR chart GENERATOR
      $(function () {
        Highcharts.chart('bar', {
          title: {
          text: 'Kunjungan Hari Ini : 26 Juli 2021 '              
          },
          
          chart: {
            type: 'column'
          },

          plotOptions: {
            series: {
              dataLabels: {
                enabled: true,
                shape: 'callout'
              }
            }
          },

          colors: [ '#00a65a', '#f39c12', '#dd4b39' ],
          xAxis: {
            categories: [ "AKUPUNTUR","ANAK","ANESTESI","APOTEK","BEDAH","DALAM","FISIOTERAPI","FOTOTERAPI","GIGI","GIGI ENDODONSI","GIGI PROSTODONSIA","HEMODIALISA","HOMECARE","JANTUNG","JIWA","KLINIK ESTETIKA","KONSULTASI GIZI","KULIT & KELAMIN","LABORATORIUM","MATA","MEDICAL CHECK UP","MEDIK & TENAGA AHLI","MEDIKOLEGAL","OBSGYN","OKUPASI TERAPI","ONE DAY CARE","ORTHOPEDI","PARU","PSIKOLOGI","RADIOLOGI","RAWAT INAP","REHABILITASI MEDIK","SYARAF","TERAPI WICARA","THT","UMUM","UROLOGI","VAKSIN","IGD", ]
          },
          yAxis: {
            title: {
              text: 'Jumlah Kunjungan'
            }
          },
          series: [
            {
              name: 'Teregistrasi : 432',
              data: [ 1,5,0,3,11,126,14,8,0,2,0,12,0,56,6,0,0,18,0,7,3,0,0,2,1,0,13,27,0,0,0,15,27,1,12,0,6,0,56, ]
            },
            {
              name: 'Terlayani : 368 ',
              data: [ 0,5,0,0,10,124,0,8,0,0,0,0,0,52,6,0,0,18,0,5,0,0,0,2,0,0,11,26,0,0,0,0,27,0,12,0,6,0,56, ]
            },
            {
              name: 'Batal :  8',
              data: [ 0,0,0,0,0,2,0,1,0,0,0,1,0,1,0,0,0,0,0,0,1,0,0,0,0,0,0,0,0,0,0,2,0,0,0,0,0,0,0, ]
            }
          ]
        });
      });

      // fungsi graphic PIE chart GENERATOR
      $(function () {
        Highcharts.chart('pie', {
          chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
          },
          title: {
            
            text: 'Kunjungan Hari Ini : 26 Juli 2021 '          },
          tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
          },
          plotOptions: {
            pie: {
              allowPointSelect: true,
              cursor: 'pointer',
              dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                style: {
                  color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                }
              }
            }
          },
          series: [{
              name: 'Poli',
              colorByPoint: true,
          
              data: [
                                          {
                            name: "AKUPUNTUR",
                            y: 1,
                            sliced: true,
                            selected: true
                          },
                                          {
                            name: "ANAK",
                            y: 5,
                            sliced: true,
                            selected: true
                          },
                                          {
                            name: "ANESTESI",
                            y: 0,
                            sliced: true,
                            selected: true
                          },
                                          {
                            name: "APOTEK",
                            y: 3,
                            sliced: true,
                            selected: true
                          },
                                          {
                            name: "BEDAH",
                            y: 11,
                            sliced: true,
                            selected: true
                          },
                                          {
                            name: "DALAM",
                            y: 126,
                            sliced: true,
                            selected: true
                          },
                                          {
                            name: "FISIOTERAPI",
                            y: 14,
                            sliced: true,
                            selected: true
                          },
                                          {
                            name: "FOTOTERAPI",
                            y: 8,
                            sliced: true,
                            selected: true
                          },
                                          {
                            name: "GIGI",
                            y: 0,
                            sliced: true,
                            selected: true
                          },
                                          {
                            name: "GIGI ENDODONSI",
                            y: 2,
                            sliced: true,
                            selected: true
                          },
                                          {
                            name: "GIGI PROSTODONSIA",
                            y: 0,
                            sliced: true,
                            selected: true
                          },
                                          {
                            name: "HEMODIALISA",
                            y: 12,
                            sliced: true,
                            selected: true
                          },
                                          {
                            name: "HOMECARE",
                            y: 0,
                            sliced: true,
                            selected: true
                          },
                                          {
                            name: "JANTUNG",
                            y: 56,
                            sliced: true,
                            selected: true
                          },
                                          {
                            name: "JIWA",
                            y: 6,
                            sliced: true,
                            selected: true
                          },
                                          {
                            name: "KLINIK ESTETIKA",
                            y: 0,
                            sliced: true,
                            selected: true
                          },
                                          {
                            name: "KONSULTASI GIZI",
                            y: 0,
                            sliced: true,
                            selected: true
                          },
                                          {
                            name: "KULIT & KELAMIN",
                            y: 18,
                            sliced: true,
                            selected: true
                          },
                                          {
                            name: "LABORATORIUM",
                            y: 0,
                            sliced: true,
                            selected: true
                          },
                                          {
                            name: "MATA",
                            y: 7,
                            sliced: true,
                            selected: true
                          },
                                          {
                            name: "MEDICAL CHECK UP",
                            y: 3,
                            sliced: true,
                            selected: true
                          },
                                          {
                            name: "MEDIK & TENAGA AHLI",
                            y: 0,
                            sliced: true,
                            selected: true
                          },
                                          {
                            name: "MEDIKOLEGAL",
                            y: 0,
                            sliced: true,
                            selected: true
                          },
                                          {
                            name: "OBSGYN",
                            y: 2,
                            sliced: true,
                            selected: true
                          },
                                          {
                            name: "OKUPASI TERAPI",
                            y: 1,
                            sliced: true,
                            selected: true
                          },
                                          {
                            name: "ONE DAY CARE",
                            y: 0,
                            sliced: true,
                            selected: true
                          },
                                          {
                            name: "ORTHOPEDI",
                            y: 13,
                            sliced: true,
                            selected: true
                          },
                                          {
                            name: "PARU",
                            y: 27,
                            sliced: true,
                            selected: true
                          },
                                          {
                            name: "PSIKOLOGI",
                            y: 0,
                            sliced: true,
                            selected: true
                          },
                                          {
                            name: "RADIOLOGI",
                            y: 0,
                            sliced: true,
                            selected: true
                          },
                                          {
                            name: "RAWAT INAP",
                            y: 0,
                            sliced: true,
                            selected: true
                          },
                                          {
                            name: "REHABILITASI MEDIK",
                            y: 15,
                            sliced: true,
                            selected: true
                          },
                                          {
                            name: "SYARAF",
                            y: 27,
                            sliced: true,
                            selected: true
                          },
                                          {
                            name: "TERAPI WICARA",
                            y: 1,
                            sliced: true,
                            selected: true
                          },
                                          {
                            name: "THT",
                            y: 12,
                            sliced: true,
                            selected: true
                          },
                                          {
                            name: "UMUM",
                            y: 0,
                            sliced: true,
                            selected: true
                          },
                                          {
                            name: "UROLOGI",
                            y: 6,
                            sliced: true,
                            selected: true
                          },
                                          {
                            name: "VAKSIN",
                            y: 0,
                            sliced: true,
                            selected: true
                          },
                                {
                  // KHUSUS POLI IGD
                  name: "IGD",
                  y: 56,
                  sliced: true,
                  selected: true
                }
              ]
          
          }]
        });
      });

    });
  </script>

</body>
</html>