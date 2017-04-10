<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('public/admin_asset/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Admin ME - Food</p>
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
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="{{ asset('admin') }}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>


        {{-- ------ FACTORY ------ --}}
        <li class="treeview">
          <a href="#">
            <i class="fa fa-home"></i>
            <span>Factory</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ asset('admin/factory/add') }}"><i class="fa fa-plus"></i> Add New Factory</a></li>
            <li><a href="{{ asset('admin/factory/list') }}"><i class="fa fa-bars"></i> List Factory</a></li>
          </ul>
        </li>
        {{-- ------ END FACTORY ------ --}}


        
        {{-- ------ DEPARTMENT ------ --}}
        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i>
            <span>Department</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ asset('admin/department/add') }}"><i class="fa fa-plus"></i> Add New Department</a></li>
            <li><a href="{{ asset('admin/department/list') }}"><i class="fa fa-bars"></i> List Department</a></li>
          </ul>
        </li>
        {{-- ------ END DEPARTMENT ------ --}}



        {{-- ------ SECTION ------ --}}
        <li class="treeview">
          <a href="#">
            <i class="fa fa-odnoklassniki"></i>
            <span>Section</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ asset('admin/section/add') }}"><i class="fa fa-plus"></i> Add New Section</a></li>
            <li><a href="{{ asset('admin/section/list') }}"><i class="fa fa-bars"></i> List Section</a></li>
          </ul>
        </li>
        {{-- ------ END SECTION ------ --}}



        {{-- ------ SUBSECTION ------ --}}
        <li class="treeview">
          <a href="#">
            <i class="fa fa-odnoklassniki"></i>
            <span>Subsection</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ asset('admin/subsection/add') }}"><i class="fa fa-plus"></i> Add New Subsection</a></li>
            <li><a href="{{ asset('admin/subsection/list') }}"><i class="fa fa-bars"></i> List Subsection</a></li>
          </ul>
        </li>
        {{-- ------ END SUBSECTION ------ --}}


        
        {{-- ------ DETAIL ------ --}}
        <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i>
            <span>Detail</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ asset('admin/detail/add') }}"><i class="fa fa-plus"></i> Add New Detail</a></li>
            <li><a href="{{ asset('admin/detail/list') }}"><i class="fa fa-bars"></i> List Detail</a></li>
          </ul>
        </li>
        {{-- ------ END DETAIL ------ --}}



        {{-- ------ FACTORY - SECTION ------ --}}
        <!-- <li class="treeview">
          <a href="#">
            <i class="fa fa-bank"></i>
            <span>Factory_Section</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ asset('admin/fact_sect/add') }}"><i class="fa fa-plus"></i> Add New Factory_Section</a></li>
            <li><a href="{{ asset('admin/fact_sect/list') }}"><i class="fa fa-bars"></i> List Factory_Section</a></li>
          </ul>
        </li> -->
        {{-- ------ END FACTORY - SECTION ------ --}}


        
        {{-- ------ SEWING LINES ------ --}}
        <li class="treeview">
          <a href="#">
            <i class="fa fa-cog"></i>
            <span>Sewing Lines</span> <span class="text-yellow">ERROR</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ asset('admin/sewingline/add') }}"><i class="fa fa-plus"></i> Add New Sewing Lines</a></li>
            <li><a href="{{ asset('admin/sewingline/list') }}"><i class="fa fa-bars"></i> List Sewing Lines</a></li>
          </ul>
        </li>
        {{-- ------ END SEWING LINES ------ --}}


        
        {{-- ------ Subsection_Department_Detail ------ --}}
        <li class="treeview">
          <a href="#">
            <i class="fa fa-cog"></i>
            <span>Subsect_Dept_Detail</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ asset('admin/subsect_dept_detail/add') }}"><i class="fa fa-plus"></i> Add New</a></li>
            <li><a href="{{ asset('admin/subsect_dept_detail/list') }}"><i class="fa fa-bars"></i> List</a></li>
          </ul>
        </li>
        {{-- ------ END Subsection_Department_Detail_Week ------ --}}

        {{-- ------ Factory - Section - Subsection - Department ------ --}}
        <li class="treeview">
          <a href="#">
            <i class="fa fa-cog"></i>
            <span>Group Fact_Sect_</span><br><span>Subsect_Dept</span><span class="text-yellow">Error</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ asset('admin/fact_sect_subsect_dept/add') }}"><i class="fa fa-plus"></i> Add New</a></li>
            <li><a href="{{ asset('admin/fact_sect_subsect_dept/list') }}"><i class="fa fa-bars"></i> List</a></li>
          </ul>
        </li>
        {{-- ------ END Factory - Section - Subsection - Department ------ --}}

        {{-- ------ TEST AREAS ------ --}}
        <li class="treeview">
          <a href="#">
            <i class="fa fa-cog"></i>
            <strong><span class="text-yellow">TEST AREAS</span></strong>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ asset('admin/test/ajax') }}"><i class="fa fa-plus"></i> Ajax</a></li>
          </ul>
        </li>
        {{-- ------ END TEST AREAS ------ --}}
          
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Layout Options</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
            <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
            <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
            <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
          </ul>
        </li>
        <li>
          <a href="pages/widgets.html">
            <i class="fa fa-th"></i> <span>Widgets</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Charts</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a></li>
            <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>
            <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
            <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>UI Elements</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i> General</a></li>
            <li><a href="pages/UI/icons.html"><i class="fa fa-circle-o"></i> Icons</a></li>
            <li><a href="pages/UI/buttons.html"><i class="fa fa-circle-o"></i> Buttons</a></li>
            <li><a href="pages/UI/sliders.html"><i class="fa fa-circle-o"></i> Sliders</a></li>
            <li><a href="pages/UI/timeline.html"><i class="fa fa-circle-o"></i> Timeline</a></li>
            <li><a href="pages/UI/modals.html"><i class="fa fa-circle-o"></i> Modals</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Forms</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>
            <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
            <li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Tables</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
            <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>
          </ul>
        </li>
        <li>
          <a href="pages/calendar.html">
            <i class="fa fa-calendar"></i> <span>Calendar</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-red">3</small>
              <small class="label pull-right bg-blue">17</small>
            </span>
          </a>
        </li>
        <li>
          <a href="pages/mailbox/mailbox.html">
            <i class="fa fa-envelope"></i> <span>Mailbox</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-yellow">12</small>
              <small class="label pull-right bg-green">16</small>
              <small class="label pull-right bg-red">5</small>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Examples</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/examples/invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>
            <li><a href="pages/examples/profile.html"><i class="fa fa-circle-o"></i> Profile</a></li>
            <li><a href="pages/examples/login.html"><i class="fa fa-circle-o"></i> Login</a></li>
            <li><a href="pages/examples/register.html"><i class="fa fa-circle-o"></i> Register</a></li>
            <li><a href="pages/examples/lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
            <li><a href="pages/examples/404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>
            <li><a href="pages/examples/500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>
            <li><a href="pages/examples/blank.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>
            <li><a href="pages/examples/pace.html"><i class="fa fa-circle-o"></i> Pace Page</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Multilevel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
            <li>
              <a href="#"><i class="fa fa-circle-o"></i> Level One
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                <li>
                  <a href="#"><i class="fa fa-circle-o"></i> Level Two
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
          </ul>
        </li>
        <li><a href="documentation/index.html"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
        <li class="header">LABELS</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>