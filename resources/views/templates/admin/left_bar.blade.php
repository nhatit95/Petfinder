 <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="/public/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Nhat Nguyen Van</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="{{route('admin.user.index')}}">
            <i class="fa fa-cog"></i> 
            <span>Managements</span>
            <span class="pull-right-container">
              <i class="fa fa-cogs pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('admin.user.index')}}" ><i class="fa fa-circle-o"></i> Management's home</a></li>
            <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> System setting</a></li>
            <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> View website</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-user-circle-o"></i>
            <span>Account Managements</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('admin.user.index')}}" ><i class="fa fa-circle-o"></i> Account's list</a></li>
            <li><a href="{{route('admin.role.index')}}"><i class="fa fa-circle-o"></i> List of role</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-weixin"></i>
            <span>Messages</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('admin.message.index')}}" ><i class="fa fa-circle-o"></i> Message's list</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-calendar-plus-o"></i>
            <span>Events</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Event's list</a></li>
            <li><a href="{{route('admin.event_cat.index')}}" ><i class="fa fa-circle-o"></i> Categories's list</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-android "></i>
            <span>Pets</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('admin.user.index')}}" ><i class="fa fa-circle-o"></i> Categories's list</a></li>
            <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Pet's list</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-file-text"></i>
            <span>Posts</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('admin.user.index')}}" ><i class="fa fa-circle-o"></i> Categories's list</a></li>
            <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Post's list</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-handshake-o"></i>
            <span>Services</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('admin.user.index')}}" ><i class="fa fa-circle-o"></i>Categories's list</a></li>
            <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Service's list</a></li>
          </ul>
        </li>
        
        <li class   ="header">LABELS</li>
        <li><a href ="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
        <li><a href ="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
        <li><a href ="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>