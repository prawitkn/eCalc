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
       Info
        <small></small>
      </h1>
	  <ol class="breadcrumb">
        <li><a href="<?=$rootPage;?>.php"><i class="glyphicon glyphicon-list"></i>Info</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Your Page Content Here -->
    <div class="box box-primary">
        <div class="box-header with-border">
        <h3 class="box-title">Info Person</h3>
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
		<div class="col-md-4">
			<br/>
			<img src="dist/img/<?php echo (empty($s_userPicture)? 'avatar5.png' : $s_userPicture) ?> " class="img-circle" alt="">
		</div>
		<div class="col-md-8">
			<h3><?=$row['code'].' : '.$row['fullname'];?></h3>
			<?=$row['position_name'];?><br/><br/>
			<table>
				<tr style="text-align: center;">
					<th style="text-align: center;">ผู้ประเมินคนที่ 1</th>
					<th style="text-align: center;">ผู้ประเมินคนที่ 2</th>
					<th style="text-align: center;">ผู้ประเมินคนที่ 3</th>
				<tr>
				<tr>
					<td>
						<select name="topic_group_id" class="form-control"  data-smk-msg="Require Location Type" required >
							<?php
							$sql = "SELECT `id`, `fullname` as name FROM persons WHERE id<>$id";
							$stmt = $pdo->prepare($sql);
							$stmt->execute();					
							while ($optItm = $stmt->fetch()){
								$selected="";//($topic_group_id==$optItm['code']?'selected':'');						
								echo '<option value="'.$optItm['id'].'" '.$selected.'>'.$optItm['name'].'</option>';
							}
							?>
						</select>
					</td>
					<td>
						<select name="topic_group_id" class="form-control"  data-smk-msg="Require Location Type" required >
							<option value="" <?php echo ($id==""?'selected':''); ?> >--Not Select--</option>
							<?php
							$sql = "SELECT `id`, `fullname` as name FROM persons WHERE id<>$id";
							$stmt = $pdo->prepare($sql);
							$stmt->execute();					
							while ($optItm = $stmt->fetch()){
								$selected="";//($topic_group_id==$optItm['code']?'selected':'');						
								echo '<option value="'.$optItm['id'].'" '.$selected.'>'.$optItm['name'].'</option>';
							}
							?>
						</select>
					</td>
					<td>
						<select name="topic_group_id" class="form-control"  data-smk-msg="Require Location Type" required >
							<option value="" <?php echo ($id==""?'selected':''); ?> >--Not Select--</option>
							<?php
							$sql = "SELECT `id`, `fullname` as name FROM persons WHERE id<>$id";
							$stmt = $pdo->prepare($sql);
							$stmt->execute();					
							while ($optItm = $stmt->fetch()){
								$selected="";//($topic_group_id==$optItm['code']?'selected':'');						
								echo '<option value="'.$optItm['id'].'" '.$selected.'>'.$optItm['name'].'</option>';
							}
							?>
						</select>
					</td>
				</tr>
			</table>
		</div>
	  </div>

	<div class="col-md-12">  
		<div class="col-md-10">
		
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
