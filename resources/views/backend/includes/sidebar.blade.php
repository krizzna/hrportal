<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image">
	<img src="{!!asset('img/dist/avatar.png')!!}" class="img-circle" alt="User Image" />
      </div>
      <div class="pull-left info">
	<p>{{ access()->user()->name }}</p>
	<!-- Status -->
	<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <!-- search form (Optional) -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
	<input type="text" name="q" class="form-control" placeholder="Search..."/>
	<span class="input-group-btn">
	  <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
	</span>
      </div>
    </form>
    <!-- /.search form -->

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu">
      <li class="header">Main Navigation</li>
      <li class="active treeview">
	<a href="#"><i class="fa fa-cubes"></i> <span>Admin</span> <i class="fa fa-angle-left pull-right"></i></a>
	<ul class="treeview-menu">
	  <li><a href="{!!route('backend.dashboard')!!}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
	  <li><a href="{!!url('admin/access/users')!!}"><i class="fa fa-user"></i> <span>User Management</span></a></li>
	  <li><a href="{!!url('admin/company/structures')!!}"><i class="fa fa-building"></i> <span>Company Structure</span></a></li>
	  <li><a href="{!!url('admin/job/titles')!!}"><i class="fa fa-list-alt"></i> <span>Job Details Setup</span></a></li>
	  <li><a href="{!!url('admin/qualification/skills')!!}"><i class="fa fa-university"></i> <span>Qualification Setup</span></a></li>
	  <li><a href="{!!url('admin/loan/types')!!}"><i class="fa fa-money"></i> <span>Company Loans</span></a></li>
	  <li><a href="#"><i class="fa fa-taxi"></i> <span>Leave Settings</span></a></li>
	</ul>
      </li>
      <li class="treeview">
	<a href="#"><i class="fa fa-newspaper-o"></i> <span>News</span> <i class="fa fa-angle-left pull-right"></i></a>
	<ul class="treeview-menu">
	  <li><a href="{!!url('admin/news/post')!!}"><i class="fa fa-newspaper-o"></i> <span>News</span></a></li>
	</ul>
      </li>
      <li class="treeview">
	<a href="#"><i class="fa fa-users"></i> <span>Employees</span> <i class="fa fa-angle-left pull-right"></i></a>
	<ul class="treeview-menu">
	  <li><a href="{!!url('admin/employee/list')!!}"><i class="fa fa-users"></i> <span>Employees</span></a></li>
	  <li><a href="#"><i class="fa fa-folder-open-o"></i> <span>Documents</span></a></li>
	  <li><a href="#"><i class="fa fa-calendar"></i> <span>Leave Calendar</span></a></li>
	  <li><a href="#"><i class="fa fa-plane"></i> <span>Travel Management</span></a></li>
	</ul>
      </li>
      <li class="treeview">
	<a href="#"><i class="fa fa-money"></i> <span>Payroll</span> <i class="fa fa-angle-left pull-right"></i></a>
	<ul class="treeview-menu">
	</ul>
      </li>
      <li class="treeview">
	<a href="#"><i class="fa fa-files-o"></i> <span>Documents</span> <i class="fa fa-angle-left pull-right"></i></a>
	<ul class="treeview-menu">
	  <li><a href="#"><i class="fa fa-files-o"></i> <span>Legal Documents</span></a></li>
	</ul>
      </li>
      <li class="treeview">
	<a href="#"><i class="fa fa-credit-card"></i> <span>Loans</span> <i class="fa fa-angle-left pull-right"></i></a>
	<ul class="treeview-menu">
	  <li><a href="#"><i class="fa fa-shield"></i> <span>Loans</span></a></li>
	</ul>
      </li>
      <li>
	<a href="#"><i class="fa fa-file-text"></i> <span>Reports</span></a>
      </li>
      <!-- Optionally, you can add icons to the links -->
      
    </ul><!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>
