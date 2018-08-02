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
		
		<li class="header">Admin Menu</li>		
		<li><a href="user.php?"><i class="fa fa-list"></i> <span>User</span></a></li>	
		<li><a href="UserGroup.php?"><i class="fa fa-list"></i> <span>User Group</span></a></li>	
		
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>