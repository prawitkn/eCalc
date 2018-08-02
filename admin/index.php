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
		คำนวณอายุราชการ เบี้ยหวัด บำเหน็จ บำนาญ สบ.ทหาร
      </h1>
      <ol class="breadcrumb">
        <li class="active"><a href="index.php"><i class="fa fa-dashboard"></i> หน้าแรก</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

	
	<div class="box box-primary">
        <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">คำนวณอายุราชการ เบี้ยหวัด บำเหน็จ บำนาญ สบ.ทหาร</h3>

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
                    <form id="form1" method="post" class="form" enctype="multipart/form-data" validate>
					<input type="hidden" name="action" value="edit" />
	<div class="col-md-12">				
	<ul class="nav nav-pills">
		<li class="active"><a data-toggle="pill" href="#home">1. เวลารับราชการ <i class="fa fa-caret-right"></i></a></li>
		<li><a data-toggle="pill" href="#menu1">2. วันทวีคูณ <i class="fa fa-caret-right"></i></a></li>
		<li><a data-toggle="pill" href="#menu2">3. เงินเดือน/เงินเพิ่มฯ <i class="fa fa-caret-right"></i></a></li>		
	</ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
	  <br/>
	  <div class="row col-md-12">
		<div class="col-md-3">
			<label for="workDayBegin">วันที่บรรจุข้าราชการครั้งแรก</label>			
		</div>
		<!--/.col-md-3-->	
		<div class="col-md-2">			
				<input type="text" id="yearRowNo" name="yearRowNo" class="form-control datepicker" >
		</div>
		<!--/.col-md-2-->
		<div class="col-md-3">
			<label for="workDayBegin">วันที่บรรจุข้าราชการครั้งแรก</label>			
		</div>
		<!--/.col-md-3-->
		<div class="col-md-2">			
			<input type="text" id="yearRowNo" name="yearRowNo" class="form-control datepicker" >
		</div>
		<!--/.col-md-2-->
	  </div>
		<!--/.row col-md-12-->
		
		<div class="row col-md-12 pull-right">
			<button ></button>
			<a data-toggle="pill" href="#menu1"> ต่อไป <i class="fa fa-caret-right"></i></a>
		</div>
		<!--/.row col-md-12-->
		
    </div>
	<!--/.tab-pane fade in-->
	
	
	
	
    <div id="menu1" class="tab-pane fade">
     
    </div>
	
    <div id="menu2" class="tab-pane fade">
      
    </div>
		
  </div>
  
  <div class="col-md-3">
  </div>
  <div class="col-md-7">
	
  </div>
  <div class="col-md-2">
  
	
	<a href="<?=$rootPage;?>_view.php?id=<?=$_GET['id'];?>" class="btn btn-primary">Submit</a>
	</div>
  </div><!--col-md-12-->

                    </form>
                </div>
                <!--/.row-->  
            </div> 
			<!-- /.box-body -->
			

	



	
	
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


<link href="bootstrap-datepicker-custom-thai/dist/css/bootstrap-datepicker.css" rel="stylesheet" />
<script src="bootstrap-datepicker-custom-thai/dist/js/bootstrap-datepicker-custom.js"></script>
<script src="bootstrap-datepicker-custom-thai/dist/locales/bootstrap-datepicker.th.min.js" charset="UTF-8"></script>
  
<script>
	$(document).ready(function () {
		$('.datepicker').datepicker({
			daysOfWeekHighlighted: "0,6",
			autoclose: true,
			format: 'dd/mm/yyyy',
			todayBtn: true,
			language: 'th',             //เปลี่ยน label ต่างของ ปฏิทิน ให้เป็น ภาษาไทย   (ต้องใช้ไฟล์ bootstrap-datepicker.th.min.js นี้ด้วย)
			thaiyear: true              //Set เป็นปี พ.ศ.
		});  //กำหนดเป็นวันปัจุบัน
	});
</script>
	
	