<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<?php include 'head.php'; ?>


<div class="wrapper">

  <!-- Main Header -->
  <?php include 'header.php'; ?>
  
  <!-- Left side column. contains the logo and sidebar -->
   <?php include 'leftside.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        e-Calculate Retire
      </h1>
      <ol class="breadcrumb">
        <li class="active"><a href="index.php"><i class="fa fa-dashboard"></i> Main Page</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

	
	<div class="box box-primary">
        <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Evaluation Summary</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <div class="btn-group">
                  <button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-wrench"></i></button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </div>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row"> 
                <div class="col-md-6">
                  <div id="container" style="width:100%; height:400px;">
				  
					</div>
				  <!-- /.container -->
                </div>
                <!-- /.col -->				
				
                <div class="col-md-6">
					<div id="container2" style="width:100%; height:400px;">
				  
					</div>
                  <!-- /.container -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div> 
			<!-- /.box-body -->
			
			
			<div class="box box-danger">
        <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Pending Evaluation List</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <div class="btn-group">
                  <button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-wrench"></i></button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </div>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
			   <?php
					$sql = "SELECT a.*
							, dp.name as position_name 
							FROM persons a						
							LEFT JOIN division_positions dp ON dp.id=a.position_id 
							WHERE 1 
							ORDER BY a.id asc
							LIMIT 3
							"; 
					$result = mysqli_query($link, $sql);                
			   ?>             
				<table class="table table-striped">
					<tr>
						<th>No.</th>					
						<th>Image</th>
						<th>Code</th>
						<th>Fullname</th>
						<th>Evaluate 1</th>
						<th>Evaluate 2</th>					
						<th>Evaluate 3</th>						
						<th>#</th>
					</tr>
					<?php $c_row=(0+1); while ($row = mysqli_fetch_assoc($result)) { 
						$img = 'dist/img/avatar5.png';
					?>
					<tr>
						<td>
							 <?= $c_row; ?>
						</td>					
						<td>
							 <img class="img-circle" src="<?=$img;?>" alt="Persons Image" width="50" />
						</td>	
						<td>
							 <?= $row['code']; ?>
						</td>	
						<td>
							 <?= $row['fullname']; ?>
						</td> 
						<td>
							 <li class="fa fa-check-circle"></li>
						</td> 
						<td>
							 <li class="fa fa-check-circle"></li>
						</td> 
						<td>
							 <li class="fa fa-circle"></li>
						</td>
						<td>
							<a class="btn btn-default" name="btn_row_edit" href="evaluate_view_all.php?id=<?= $row['id']; ?>" >
									<i class="fa fa-check-search"></i> View</a>	
						
						</td>
					</tr>
					<?php $c_row +=1; } ?>
				</table>
				
				
            </div> 
			<!-- /.box-body -->
	</div><!-- /.box -->
		</div><!-- /.box -->


	



	
	
	</section>
	<!--sec.content-->
	
	</div>
	<!--content-wrapper-->

  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <?php include'footer.php'; ?>
  
  
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- smoke validate -->
<script src="bootstrap/js/smoke.min.js"></script>
<!-- Hightchart -->
<script src="plugins/highcharts-5.0.12/code/highcharts.js"></script>
<script src="plugins/highcharts-5.0.12/code/modules/exporting.js"></script>

</body>
</html>

<script>
Highcharts.chart('container', {
    chart: {
        type: 'area'
    },
    title: {
        text: 'Grade and Person Evaluation'
    },
    subtitle: {
        text: '<b>Term 1/2018</b>'
    },
    xAxis: {
        categories: ['', 'A', 'B', 'C', 'D', 'E', '']
    },
    yAxis: {
        title: {
            text: 'Total'
        },
        labels: {
            formatter: function () {
                return this.value + ' คน';
            }
        }
    },
    tooltip: {
        pointFormat: '{series.name} had <b>{point.y:,.0f}</b><br/> in {point.x}'
    },
    plotOptions: {
        area: {
            pointStart: 0,
            marker: {
                enabled: false,
                symbol: 'circle',
                radius: 2,
                states: {
                    hover: {
                        enabled: true
                    }
                }
            }
        }
    },
    series: [{
        name: 'Grade',
        data: [null, 2, 20, 43, 32,7, null
        ]
    }]
});




Highcharts.chart('container2', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Evaluate Point in 1/2018'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b> คะแนน: {point.percentage:.1f} %',
                style: {
                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                }
            }
        }
    },
    series: [{
        name: 'Point',
        colorByPoint: true,
        data: [{
            name: '0-49',
            y: 7.18
        }, {
            name: '50-59',
            y: 32.64
        }, {
            name: '60-79',
            y: 43.6
        }, {
            name: '80-89',
            y: 20.2
        }, {
            name: '90-100',
            y: 2.61
        }] 
    }]
});
</script>