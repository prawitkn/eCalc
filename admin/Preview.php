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

   <?php
        $DateBegin=$_POST['DateBegin'];
        $DateEnd=$_POST['DateEnd'];
        $PSR=$_POST['PSR'];
        $Salary=$_POST['Salary'];

        if(!empty($_POST['ExtraName']) and isset($_POST['ExtraName']))
        {            
            foreach($_POST['ExtraName'] as $index => $ExtraName )
            {   
                $sql = "INSERT INTO `cr_extra`
                (`Name`, `DateBegin`, `DateEnd`, `UserCreateId`) 
                VALUES 
                (:Name, :DateBegin, :DateEnd, :UserCreateId)
                ";         
                $stmt = $pdo->prepare($sql);           
                $stmt->bindParam(':Name', $ExtraName);
                $stmt->bindParam(':DateBegin', $_POST['DateBegin'][$index]);  
                $stmt->bindParam(':DateEnd', $_POST['DateEnd'][$index]);  
                $stmt->bindParam(':UserCreateId', $s_userId);   
                $stmt->execute();           
            }
        }
   ?>

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
                <div class="row col-md-12">
                    <div class="col-md-3">
                        <label for="DateBegin">วันเริ่มต้น</label>
                        <?=$DateBegin;?>
                    </div>
                    <div class="col-md-3">
                        <label for="DateEnd">วันสุดท้าย</label>
                        <?=$DateEnd;?>
                    </div>
                    <div class="col-md-3">
                        <label for="DateEnd">พ.ส.ร.</label>
                        <?=$PSR;?>
                    </div>
                    <div class="col-md-3">
                        <label for="DateEnd">เงินเดือนสุดท้าย</label>
                        <?=$Salary;?>
                    </div>
                </div>
                <!--/.row-->  
                 <div class="row col-md-12">
                    <div class="col-md-3">
                        <label for="DateBegin">อายุราชการ</label>
                        <?=$DateBegin;?>
                    </div>
                    <div class="col-md-9">
                        <table>
                            <thead>
                                <tr>
                                    <th>ลำดับ</th>
                                    <th>รายการ</th>
                                    <th>อายุ</th>                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!--/.row-->  
            </div> 
            <!-- /.box-body -->
        </div> 
        <!-- /.box -->
    			

	



	
	
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

</body>
</html>


	
	