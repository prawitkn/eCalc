<?php
  //  include '../db/database.php';
?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<?php include 'head.php'; 

$rootPage = 'evaluate';
/*
//Check user roll.
switch($s_userGroupCode){
	case 'admin' : case 'it' : 
		break;
	default : 
		header('Location: access_denied.php');
		exit();
}*/
$id=$_GET['id'];


?>

<div class="wrapper">

  <!-- Main Header -->
  <?php include 'header.php'; ?>
  
  <!-- Left side column. contains the logo and sidebar -->
   <?php include 'leftside.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1><i class="glyphicon glyphicon-user"></i>
       Evaluate
        <small></small>
      </h1>
	  <ol class="breadcrumb">
        <li><a href="<?=$rootPage;?>.php"><i class="glyphicon glyphicon-list"></i>Evaluate List</a></li>
		<li><a href="#"><i class="glyphicon glyphicon-edit"></i>Evaluate</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Your Page Content Here -->
    <div class="box box-primary">
        <div class="box-header with-border">
        <h3 class="box-title">Evaluate Person</h3>
        <div class="box-tools pull-right">
          <!-- Buttons, labels, and many other things can be placed here! -->
          <!-- Here is a label for example -->
         
        </div><!-- /.box-tools -->
        </div><!-- /.box-header -->
        <div class="box-body">            
            <div class="row">                
                    <form id="form1" method="post" class="form" enctype="multipart/form-data" validate>
					<input type="hidden" name="action" value="edit" />
	<div class="col-md-12">				
	<ul class="nav nav-pills">
		<li class="active"><a data-toggle="pill" href="#home">ข้อมูลผู้รับการประเมิน <i class="fa fa-caret-right"></i></a></li>
		<li><a data-toggle="pill" href="#menu1">1. ปริมาณงาน <i class="fa fa-caret-right"></i></a></li>
		<li><a data-toggle="pill" href="#menu2">2. คุณภาพงาน <i class="fa fa-caret-right"></i></a></li>
		<li><a data-toggle="pill" href="#menu3">3. ทัศนคติและพฤติกรรม <i class="fa fa-caret-right"></i></a></li>
		<li><a data-toggle="pill" href="#menu4">4. การมาทำงาน / ความคิดเห็น <i class="fa fa-caret-right"></i></a></li>
	</ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
	  <?php 
		$sql = "SELECT hdr.*, dp.name as position_name 
		FROM `persons` hdr
		LEFT JOIN division_positions dp ON dp.id=hdr.position_id 
		WHERE hdr.id=:id 
		";
		$stmt = $pdo->prepare($sql);
		$stmt->bindParam(':id', $id);
		$stmt->execute();
		$row = $stmt->fetch();		
		?>
	  <div class="row col-md-12">
		<div class="col-md-4">
			<br/>
			<img src="dist/img/<?php echo (empty($s_userPicture)? 'avatar5.png' : $s_userPicture) ?> " class="img-circle" alt="">
		</div>
		<div class="col-md-8">
			<h3><?=$row['code'].' : '.$row['fullname'];?></h3>
			<h3><?=$row['position_name'];?></h3>
		</div>
	  </div>
    </div>
	
    <div id="menu1" class="tab-pane fade">
      <table class="table table-striped">
			<tr>
				<th>No.</th>
				<th>หัวข้อการประเมิน</th>
				<th>ดีกว่า KPI 5</th>
				<th>ดี KPI 4</th>
				<th>เท่ากับ KPI 3</th>
				<th>ด้อยกว่า KPI 2</th>
				<th>ด้อยกว่า KPI 1</th>	
			</tr>		
			<?php 
			$sql = "SELECT hdr.*
			, dp.name as position_name
			,tp.name as topic_name
			,tg.name as topic_group_name
			FROM `persons` hdr
			INNER JOIN division_positions dp ON dp.id=hdr.position_id
			INNER JOIN topics tp ON tp.position_group_id=dp.position_type_id
			INNER JOIN topic_groups tg ON tg.id=tp.topic_group_id AND tg.id=1
			WHERE hdr.id=:id 
			ORDER BY tp.topic_group_id, tp.seq_no 
			";
			$stmt = $pdo->prepare($sql);
			$stmt->bindParam(':id', $id);
			$stmt->execute();
			$c_row=1; while ($row = $stmt->fetch() ) { 			
			?>
			<tr>
				<td>
					 <?= $c_row; ?>
				</td>	
				<td>
					 <?= $row['topic_name']; ?>
				</td>
				<td>
					<input type="radio" name="<?=$row['topic_name'];?>" value="5" />
				</td>			
				<td>
					<input type="radio" name="<?=$row['topic_name'];?>" value="4" />
				</td>
				<td>
					<input type="radio" name="<?=$row['topic_name'];?>" value="3" />
				</td>
				<td>
					<input type="radio" name="<?=$row['topic_name'];?>" value="2" />
				</td>
				<td>
					<input type="radio" name="<?=$row['topic_name'];?>" value="1" />
				</td>
			</tr>
			<?php $c_row +=1; } ?>
		</table>
    </div>
	
    <div id="menu2" class="tab-pane fade">
      <table class="table table-striped">
			<tr>
				<th>No.</th>
				<th>หัวข้อการประเมิน</th>
				<th>ดีกว่า KPI 5</th>
				<th>ดี KPI 4</th>
				<th>เท่ากับ KPI 3</th>
				<th>ด้อยกว่า KPI 2</th>
				<th>ด้อยกว่า KPI 1</th>		
			</tr>		
			<?php 
			$sql = "SELECT hdr.*
			, dp.name as position_name
			,tp.name as topic_name
			,tg.name as topic_group_name
			FROM `persons` hdr
			INNER JOIN division_positions dp ON dp.id=hdr.position_id
			INNER JOIN topics tp ON tp.position_group_id=dp.position_type_id
			INNER JOIN topic_groups tg ON tg.id=tp.topic_group_id AND tg.id=2
			WHERE hdr.id=:id 
			ORDER BY tp.topic_group_id, tp.seq_no 
			";
			$stmt = $pdo->prepare($sql);
			$stmt->bindParam(':id', $id);
			$stmt->execute();
			$c_row=1; while ($row = $stmt->fetch() ) { 			
			?>
			<tr>
				<td>
					 <?= $c_row; ?>
				</td>	
				<td>
					 <?= $row['topic_name']; ?>
				</td>
				<td>
					<input type="radio" name="<?=$row['topic_name'];?>" value="5" />
				</td>			
				<td>
					<input type="radio" name="<?=$row['topic_name'];?>" value="4" />
				</td>
				<td>
					<input type="radio" name="<?=$row['topic_name'];?>" value="3" />
				</td>
				<td>
					<input type="radio" name="<?=$row['topic_name'];?>" value="2" />
				</td>
				<td>
					<input type="radio" name="<?=$row['topic_name'];?>" value="1" />
				</td>
			</tr>
			<?php $c_row +=1; } ?>
		</table>
    </div>
	
    <div id="menu3" class="tab-pane fade">
      <table class="table table-striped">
			<tr>
				<th>No.</th>
				<th>หัวข้อการประเมิน</th>
				<th>ดีกว่า KPI 5</th>
				<th>ดี KPI 4</th>
				<th>เท่ากับ KPI 3</th>
				<th>ด้อยกว่า KPI 2</th>
				<th>ด้อยกว่า KPI 1</th>		
			</tr>		
			<?php 
			$sql = "SELECT hdr.*
			, dp.name as position_name
			,tp.name as topic_name
			,tg.name as topic_group_name
			FROM `persons` hdr
			INNER JOIN division_positions dp ON dp.id=hdr.position_id
			INNER JOIN topics tp ON tp.position_group_id=dp.position_type_id
			INNER JOIN topic_groups tg ON tg.id=tp.topic_group_id AND tg.id=3
			WHERE hdr.id=:id 
			ORDER BY tp.topic_group_id, tp.seq_no 
			";
			$stmt = $pdo->prepare($sql);
			$stmt->bindParam(':id', $id);
			$stmt->execute();
			$c_row=1; while ($row = $stmt->fetch() ) { 			
			?>
			<tr>
				<td>
					 <?= $c_row; ?>
				</td>	
				<td>
					 <?= $row['topic_name']; ?>
				</td>
				<td>
					<input type="radio" name="<?=$row['topic_name'];?>" value="5" />
				</td>			
				<td>
					<input type="radio" name="<?=$row['topic_name'];?>" value="4" />
				</td>
				<td>
					<input type="radio" name="<?=$row['topic_name'];?>" value="3" />
				</td>
				<td>
					<input type="radio" name="<?=$row['topic_name'];?>" value="2" />
				</td>
				<td>
					<input type="radio" name="<?=$row['topic_name'];?>" value="1" />
				</td>
			</tr>
			<?php $c_row +=1; } ?>
		</table>
    </div>
	
	<div id="menu4" class="tab-pane fade">
      <table class="table table-striped">
			<tr>
				<th>No.</th>
				<th>หัวข้อการประเมิน</th>
				<th>ดีกว่า KPI 5</th>
				<th>ดี KPI 4</th>
				<th>เท่ากับ KPI 3</th>
				<th>ด้อยกว่า KPI 2</th>
				<th>ด้อยกว่า KPI 1</th>		
			</tr>		
			<?php 
			$sql = "SELECT hdr.*
			, dp.name as position_name
			,tp.name as topic_name
			,tg.name as topic_group_name
			FROM `persons` hdr
			INNER JOIN division_positions dp ON dp.id=hdr.position_id
			INNER JOIN topics tp ON tp.position_group_id=dp.position_type_id
			INNER JOIN topic_groups tg ON tg.id=tp.topic_group_id AND tg.id=4
			WHERE hdr.id=:id 
			ORDER BY tp.topic_group_id, tp.seq_no 
			";
			$stmt = $pdo->prepare($sql);
			$stmt->bindParam(':id', $id);
			$stmt->execute();
			$c_row=1; while ($row = $stmt->fetch() ) { 			
			?>
			<tr>
				<td>
					 <?= $c_row; ?>
				</td>	
				<td>
					 <?= $row['topic_name']; ?>
				</td>
				<td>
					<input type="radio" name="<?=$row['topic_name'];?>" value="5" />
				</td>			
				<td>
					<input type="radio" name="<?=$row['topic_name'];?>" value="4" />
				</td>
				<td>
					<input type="radio" name="<?=$row['topic_name'];?>" value="3" />
				</td>
				<td>
					<input type="radio" name="<?=$row['topic_name'];?>" value="2" />
				</td>
				<td>
					<input type="radio" name="<?=$row['topic_name'];?>" value="1" />
				</td>
			</tr>
			<?php $c_row +=1; } ?>
		</table>
		
		<div class="col-md-12">
			<div class="col-md-3" style="text-align: right;">
		ความคิดเห็น : 	
			</div>
			<div class="col-md-3">
				
		<textarea class="form-control" cols="10" rows="5" ></textarea>
			</div>
			<div class="col-md-6">
			</div>
		</div>
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
			<!--.body-->    
  <div class="box-footer">
  
    <!--The footer of the box -->
  </div><!-- box-footer -->
</div><!-- /.box -->
  

<div id="spin"></div>

    </section>
    <!-- /.content -->
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

<script src="bootstrap/js/smoke.min.js"></script>

<!-- Add Spinner feature -->
<script src="bootstrap/js/spin.min.js"></script>

<script> 
  // to start and stop spiner.  
$( document ).ajaxStart(function() {
	$("#spin").show();
}).ajaxStop(function() {
	$("#spin").hide();
});
//   

$(document).ready(function() {
	$("#userFullname").focus();

	var spinner = new Spinner().spin();
	$("#spin").append(spinner.el);
	$("#spin").hide();
//           
	$('#form1').on("submit", function(e) {
		if ($('#form1').smkValidate()) {			
			$.ajax({
				url: '<?=$rootPage;?>_ajax.php',
				type: 'POST',
				data: new FormData( this ),
				processData: false,
				contentType: false,
				dataType: 'json'
				})
			.done(function (data) {
					if (data.success){          
						$.smkAlert({
							text: data.message,
							type: 'success',
							position:'top-center'
						});						
						setTimeout(function(){history.back();}, 2000);
					} else {
						$.smkAlert({
							text: data.message,
							type: 'danger',
						});
					}
				})
				.error(function (response) {
					  alert(response.responseText);
				});//error  ;  
				//.ajax
				e.preventDefault();
			}
			//valided
		e.preventDefault();
	});
	//form.submit
});
//doc ready
</script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->
	 
<script>
function showMyImage(fileInput) {
        var files = fileInput.files;
        for (var i = 0; i < files.length; i++) {           
            var file = files[i];
            var imageType = /image.*/;     
            if (!file.type.match(imageType)) {
                continue;
            }           
            var img=document.getElementById("thumbnil");            
            img.file = file;    
            var reader = new FileReader();
            reader.onload = (function(aImg) { 
                return function(e) { 
                    aImg.src = e.target.result; 
                }; 
            })(img);
            reader.readAsDataURL(file);
        }    
    }
</script>
	 
</body>
</html>
