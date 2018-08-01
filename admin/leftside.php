<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/<?php echo (empty($s_userPicture)? 'avatar5.png' : $s_userPicture) ?> " class="img-circle" alt="">
        </div>
        <div class="pull-left info">
          <p>Mr.Prawit Khamnet</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
	
      <!-- Sidebar Menu -->
      <ul class="sidebar-menu ">
		
			
		
		
		<li class="header">Menu</li>		
		<li><a href="person_info.php?id=1"><i class="fa fa-list"></i> <span>Info</span></a></li>	
		<li><a href="evaluate.php"><i class="fa fa-list"></i> <span>Evaluation</span></a></li>	
		<li><a href="grading.php"><i class="fa fa-list"></i> <span>Grading</span></a></li>	

		<li class="header">Report</li>		
		<li><a href="report_by_division.php"><i class="fa fa-list"></i> <span>Grade Report</span></a></li>	
		
		<li class="header">Master Menu</li>		
		<li><a href="position_group.php"><i class="fa fa-list"></i> <span>Position Groups</span></a></li>
		<li><a href="division.php"><i class="fa fa-list"></i> <span>Divisions</span></a></li>		
		<li><a href="#"><i class="fa fa-list"></i> <span>Division Positions</span></a></li>	
		<li><a href="person.php"><i class="fa fa-list"></i> <span>Persons</span></a></li>	
		<li><a href="terms.php"><i class="fa fa-list"></i> <span>Terms</span></a></li>	
		
		<li class="header">Admin Menu</li>		
		<li><a href="user.php?"><i class="fa fa-list"></i> <span>User</span></a></li>	
		<li><a href="UserGroup.php?"><i class="fa fa-list"></i> <span>User Group</span></a></li>	
		
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>