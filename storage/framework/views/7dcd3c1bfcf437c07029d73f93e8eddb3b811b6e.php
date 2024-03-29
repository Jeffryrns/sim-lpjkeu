<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
    <img src="/img/logo.png" alt="SIM-LPJKEU" class="brand-image img-circle elevation-3"
   style="opacity: .8">
<span class="brand-text font-weight-light">SIM-LPJKEU</span>
</a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="/img/profile.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"> <?php echo e(auth()->user()->name!=null ? auth()->user()->name : "Administrator"); ?> </a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item has-treeview <?php echo classActivePath(1,'dashboard'); ?>">
                    <a href="<?php echo route('home'); ?>" class="nav-link <?php echo classActiveSegment(1, 'dashboard'); ?>">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                  <i class="right fa fa-angle-left"></i>
                </p>
              </a>
                    
                </li>
                  <li class="nav-item">
                <a href="<?php echo e(route('datamasuk')); ?>" class="nav-link <?php echo classActiveSegment(2, 'datamasuk'); ?>">
                <i class="nav-icon fa fa-th"></i>
                <p>
                  Data Masuk
                  <span class="right badge badge-danger">New</span>
                </p>
                  </a>
                </li>
                <!--<li class="nav-item has-treeview">
                <a href="pages/UI/general.html" class="nav-link">
                <i class="nav-icon fas fa-chart-pie"></i>
                <p>
                  Charts
                  <i class="right fa fa-angle-left"></i>
                </p>
              </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="pages/charts/chartjs.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>ChartJS</p>
                  </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/charts/flot.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>Flot</p>
                  </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/charts/inline.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>Inline</p>
                  </a>
                        </li>
                    </ul>
                </li>-->
                <li class="nav-item has-treeview">
                   <a href="<?php echo e(route('inputdata')); ?>" class="nav-link <?php echo classActiveSegment(1, 'inputdata'); ?>">
                <i class="nav-icon fa fa-edit"></i>
                <p>
                  Input Data
                  <i class="fa fa-angle-left right"></i>
                </p>
              </a>
                  <ul class="nav nav-treeview">
                        <li class="nav-item">
                    <a href="<?php echo e(route('inputdata')); ?>" class="nav-link <?php echo classActiveSegment(2, 'inputdata'); ?>">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Intro</p>
                  </a>
                  </li>
                        
                  <li class="nav-item">
                    <a href="<?php echo e(route('form01')); ?>" class="nav-link <?php echo classActiveSegment(2, 'form01'); ?>">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>Input LPJ</p>
                  </a>
                        <!--</li>
                        <li class="nav-item">
                            <a href="pages/UI/buttons.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>Buttons</p>
                  </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/UI/sliders.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>Sliders</p>
                  </a>
                        </li>-->
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                <a href="<?php echo e(route('rekap_lap')); ?>" class="nav-link <?php echo classActiveSegment(1, 'rekap_lap'); ?>">
                <i class="nav-icon fa fa-tree"></i>
                <p>
                  Laporan
                  <i class="fa fa-angle-left right"></i>
                </p>
              </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                        <a href="<?php echo e(route('rekap_lap01')); ?>" class="nav-link <?php echo classActiveSegment(2, 'rekap_lap01'); ?>">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>Laporan Form 01</p>
                  </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/forms/advanced.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>Laporan Form 02</p>
                  </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/forms/editors.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>Laporan Form 03</p>
                  </a>
                        </li>

                        </li>
                        <li class="nav-item">
                            <a href="pages/forms/editors.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>Laporan Form 04</p>
                  </a>
                        </li>

                        </li>
                        <li class="nav-item">
                            <a href="pages/forms/editors.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>Laporan Form 05</p>
                  </a>
                        </li>

                        </li>
                        <li class="nav-item">
                            <a href="pages/forms/editors.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>Laporan Form 06</p>
                  </a>
                        </li>

                        </li>
                        <li class="nav-item">
                            <a href="pages/forms/editors.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>Laporan Form 07</p>
                  </a>
                        </li>

                        </li>
                        <li class="nav-item">
                            <a href="pages/forms/editors.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>Laporan Form 08</p>
                  </a>
                        </li>

                        </li>
                        <li class="nav-item">
                            <a href="pages/forms/editors.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>Laporan Form 09</p>
                  </a>
                        </li>
                        </li>
                        <li class="nav-item">
                            <a href="pages/forms/editors.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>Laporan Form 10</p>
                  </a>
                        </li>


                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                <i class="nav-icon fa fa-table"></i>
                <p>
                  Tables
                  <i class="fa fa-angle-left right"></i>
                </p>
              </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="pages/tables/simple.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>Simple Tables</p>
                  </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/tables/data.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>Data Tables</p>
                  </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-header">EXAMPLES</li>
                <li class="nav-item">
                    <a href="pages/calendar.html" class="nav-link">
                <i class="nav-icon fa fa-calendar"></i>
                <p>
                  Calendar
                  <span class="badge badge-info right">2</span>
                </p>
              </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                <i class="nav-icon fas fa-envelope-open"></i>
                <p>
                  Mailbox
                  <i class="fa fa-angle-left right"></i>
                </p>
              </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="pages/mailbox/mailbox.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>Inbox</p>
                  </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/mailbox/compose.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>Compose</p>
                  </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/mailbox/read-mail.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>Read</p>
                  </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                <i class="nav-icon fa fa-book"></i>
                <p>
                  Pages
                  <i class="fa fa-angle-left right"></i>
                </p>
              </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="pages/examples/invoice.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>Invoice</p>
                  </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/examples/profile.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>Profile</p>
                  </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/examples/login.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>Login</p>
                  </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/examples/register.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>Register</p>
                  </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/examples/lockscreen.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>Lockscreen</p>
                  </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                <i class="nav-icon fas fa-plus-square"></i>
                <p>
                  Extras
                  <i class="fa fa-angle-left right"></i>
                </p>
              </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="pages/examples/404.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>Error 404</p>
                  </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/examples/500.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>Error 500</p>
                  </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/examples/blank.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>Blank Page</p>
                  </a>
                        </li>
                        <li class="nav-item">
                            <a href="starter.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>Starter Page</p>
                  </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-header">MISCELLANEOUS</li>
                <li class="nav-item">
                    <a href="https://adminlte.io/docs" class="nav-link">
                <i class="nav-icon fa fa-file"></i>
                <p>Documentation</p>
              </a>
                </li>
                <li class="nav-header">LABELS</li>
                <li class="nav-item">
                    <a href="<?php echo e(route('logout')); ?>" class="nav-link <?php echo classActiveSegment(2, 'logout'); ?>" class="nav-link">
                <i class="nav-icon fa fas fa-circle-notch text-danger"></i>
                <p class="text">Logout</p>
              </a>
                <!--</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                <i class="nav-icon fa fas fa-circle-notch text-warning"></i>
                <p>Warning</p>
              </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                <i class="nav-icon fa fas fa-circle-notch text-info"></i>
                <p>Informational</p>
              </a>
                </li>-->
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>