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
		<div class="col-md-2">
			
		</div>
		<div class="col-md-10">
			
		</div>
	  </div>
    </div>
	
	<div class="row col-md-12">
		<div class="col-md-12">
		<table class="table table-hover">	
			<tr>
				<th style="text-align: left;">
					<img  width="50" src="dist/img/<?php echo (empty($s_userPicture)? 'avatar5.png' : $s_userPicture) ?> " class="img-circle" alt="">
				</th>
				<th style="text-align: left;">
					<?=$row['code'].' : '.$row['fullname'];?><br/>
					<?=$row['position_name'];?>
				</th>
				<th style="text-align: center;"><img  width="50" src="dist/img/avatar2.png" class="img-circle" alt=""></th>
				<th style="text-align: center;"><img  width="50" src="dist/img/avatar3.png" class="img-circle" alt=""></th>
				<th style="text-align: center;"><img  width="50" src="dist/img/avatar.png" class="img-circle" alt=""></th>
				<th style="text-align: center;"></th>
			</tr>	
			<tr>
				<th style="text-align: center;">No.</th>
				<th style="text-align: center;">หัวข้อการประเมิน</th>
				<th style="text-align: center;">คะแนน 1</th>
				<th style="text-align: center;">คะแนน 2</th>
				<th style="text-align: center;">คะแนน 3</th>
				<th style="text-align: center;">%</th>
			</tr>		
			<?php 
			$sql = "SELECT hdr.*
			, dp.name as position_name
			,tp.seq_no, tp.name as topic_name
			,tg.name as topic_group_name
			FROM `persons` hdr
			INNER JOIN division_positions dp ON dp.id=hdr.position_id
			INNER JOIN topics tp ON tp.position_group_id=dp.position_type_id
			INNER JOIN topic_groups tg ON tg.id=tp.topic_group_id 
			WHERE hdr.id=:id 
			ORDER BY tp.topic_group_id, tp.seq_no 
			";
			$stmt = $pdo->prepare($sql);
			$stmt->bindParam(':id', $id);
			$stmt->execute();
			$c_row=1; $prev_topic_group_name=""; while ( $row = $stmt->fetch() ) { 
				
				if ( $prev_topic_group_name<>$row['topic_group_name'] ) {
					if ( $prev_topic_group_name<>"" ) {
					?>
						<tr style="font-weight: bold; background-color: #fcf9a4;">
							<td>
								
							</td>
							<td style="font-weight: bold; text-align:center;" >
								รวม  (น้ำหนัก x คะแนนรวม) / จำนวนผู้ประเมิน
							</td>
							<td style="text-align: right;">25</td>
							<td style="text-align: right;">19</td>
							<td style="text-align: right;">30</td>
							<td style="text-align: right;">19.99</td>
						</tr>
					<?php
					}// if total
				?>
					<tr style="font-weight: bold;">
						<td>
							<?=$c_row;?>
						</td>
						<td colspan="5">
							<?=$row['topic_group_name'];?>
						</td>
					</tr>
				<?php
					$prev_topic_group_name=$row['topic_group_name'];
					$c_row +=1;
				}
			?>
			<tr>
				<td>
					 
				</td>	
				<td>
					 <?= $row['seq_no']; ?>.&nbsp;<?= $row['topic_name']; ?>
				</td>
				<td style="text-align: right;">
					5
				</td>	
				<td style="text-align: right;">
					4
				</td>	
				<td style="text-align: right;">
					3
				</td>					
				<td style="text-align: right;"></td>
			</tr>
			<?php  } ?>
			<tr style="font-weight: bold; background-color: #fcf9a4;">
				<td>
					
				</td>
				<td style="font-weight: bold; text-align:center;" >
					รวม 
				</td>
				<td style="text-align: right;">30</td>
							<td style="text-align: right;">19</td>
							<td style="text-align: right;">30</td>
				<td style="text-align: right;">21.54</td>
			</tr>
			<tr style="font-weight: bold; background-color: #f8f977;">
				<td>
					
				</td>
				<td style="font-weight: bold; text-align:center;" >
					รวม
				</td>
				<td style="text-align: right;">-</td>
				<td style="text-align: right;">-</td>
				<td style="text-align: right;">-</td>
				<td style="text-align: right;">89.95</td>
			</tr>
		</table>		
		</div>
	</div><!--col-md-12-->
	
	<div class="col-md-12">
		<div class="col-md-3">
			ความคิดเห็น : 
		</div>
		<div class="col-md-3">
			<textarea class="form-control" cols="100" rows="5" disabled >
1. มีน้ำใจ
2. รอบคอบ
			</textarea>
		</div>
				<div class="col-md-3">
			<textarea class="form-control" cols="100" rows="5" disabled >ลาป่วยบ่อยเกินไป</textarea>
		</div>
				<div class="col-md-3">
			<textarea class="form-control" cols="100" rows="5" disabled >ทำงานเป็นทีมได้ดี</textarea>
		</div>
	</div><!--col-md-12-->
	
	<div class="col-md-12">
		<div class="col-md-3">
			ความคิดเห็น : 
		</div>
		<div class="col-md-3" style="text-align:center;">
			<a href="#" class="btn btn-warning"><i class="fa fa-reply"></i> ส่งกลับไปแก้ไข</a>
		</div>
		<div class="col-md-3" style="text-align:center;">
			<a href="#" class="btn btn-warning"><i class="fa fa-reply"></i>  ส่งกลับไปแก้ไข</a>
		</div>
		<div class="col-md-3" style="text-align:center;">
			<a href="#" class="btn btn-warning"><i class="fa fa-reply"></i>  ส่งกลับไปแก้ไข</a>
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
