<!-- Left side column. contains the logo and sidebar -->
<aside class="left-side sidebar-offcanvas">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="img/avatar.jpg" class="img-circle" alt="User Image" />
      </div>
      <div class="pull-left info">
        <p>Hi, User name</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- search form -->
<!--
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search..."/>
        <span class="input-group-btn">
          <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
        </span>
      </div>
    </form>
-->
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li  class="active" >
        <a href="{{ url('/') }}">
          <i class="fa fa-dashboard"></i> <span>Nhóm mới thành lập</span>
          <span style="float: right;padding-right: 15px;">3</span>
        </a>
      </li>

      <li  class="active" >
        <a href="{{ url('/') }}">
          <i class="fa fa-dashboard"></i> <span>Dịch vụ mới đăng kí</span>
          <span style="float: right;padding-right: 15px;">5</span>
        </a>
      </li>
  
      <li class="treeview active">
        <a href="#">
          <i class="fa fa-table"></i>
          <span>Nhóm của tôi</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="link"><i class="fa fa-angle-double-right"></i>Muối Biển<span style="float: right;padding-right: 15px;">3</span></a>   </li>
          <li><a href="link"><i class="fa fa-angle-double-right"></i>Hoa Rừng :D<span style="float: right;padding-right: 15px;">20+</span></a>  </li>
        </ul>
      </li>

      <li class="treeview active">
        <a href="#">
          <i class="fa fa-table"></i>
          <span>Nhóm đã tham gia</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="link"><i class="fa fa-angle-double-right"></i>36 phố phường<span style="float: right;padding-right: 15px;">3</span></a>   </li>
          <li><a href="link"><i class="fa fa-angle-double-right"></i>Di tích lịch sử<span style="float: right;padding-right: 15px;">20+</span></a>  </li>
        </ul>
      </li>      

       <li class="treeview active">
        <a href="#">
          <i class="fa fa-table"></i>
          <span>Dịch vụ yêu thích</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="link"><i class="fa fa-angle-double-right"></i>Xe du lịch xa<span style="float: right;padding-right: 15px;">3</span></a>   </li>
          <li><a href="link"><i class="fa fa-angle-double-right"></i>Thuê đồ phượt<span style="float: right;padding-right: 15px;">20+</span></a>  </li>
          <li><a href="link"><i class="fa fa-angle-double-right"></i>Củi trại<span style="float: right;padding-right: 15px;">20+</span></a>  </li>
        </ul>
      </li>

    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
