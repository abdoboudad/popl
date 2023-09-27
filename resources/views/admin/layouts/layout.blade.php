<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Popl</title>
    
        <!-- Global stylesheets -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/css/icons/icomoon/styles.css')}}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/css/bootstrap.css')}}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/css/core.css')}}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/css/components.css')}}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/css/colors.css')}}" rel="stylesheet" type="text/css">
        <!-- /global stylesheets -->
    
        <!-- Core JS files -->
        <script type="text/javascript" src="{{ asset('assets/js/plugins/loaders/pace.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/core/libraries/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/core/libraries/bootstrap.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/plugins/loaders/blockui.min.js')}}"></script>
        <!-- /core JS files -->
    
        <!-- Theme JS files -->
        <script type="text/javascript" src="{{ asset('assets/js/plugins/visualization/d3/d3.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/plugins/visualization/d3/d3_tooltip.js')}}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/plugins/forms/styling/switchery.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/plugins/forms/styling/uniform.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/plugins/forms/selects/bootstrap_multiselect.js')}}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/plugins/ui/moment/moment.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/plugins/pickers/daterangepicker.js')}}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/plugins/ui/nicescroll.min.js')}}"></script>
    
        <script type="text/javascript" src="{{ asset('assets/js/core/app.js')}}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/pages/dashboard.js')}}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/pages/layout_fixed_custom.js')}}"></script>
        <!-- /theme JS files -->
    
</head>
<body class="navbar-top  pace-done">
    <div class="pace  pace-inactive">
        <div class="pace-progress" data-progress-text="100%" data-progress="99" style="transform: translate3d(100%, 0px, 0px);">
    <div class="pace-progress-inner"></div>
  </div>
  <div class="pace-activity"></div></div>
  
      <!-- Main navbar -->
      <div class="navbar navbar-inverse navbar-fixed-top">
          <div class="navbar-header">
  
              <ul class="nav navbar-nav visible-xs-block">
                  <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
                  <li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
              </ul>
          </div>
  
          <div class="navbar-collapse collapse" id="navbar-mobile">
              <ul class="nav navbar-nav">
                  <li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>
  
                  <li class="dropdown">
                      
                      
                      <div class="dropdown-menu dropdown-content">
                          <div class="dropdown-content-heading">
                              Git updates
                              <ul class="icons-list">
                                  <li><a href="#"><i class="icon-sync"></i></a></li>
                              </ul>
                          </div>
  
                          <ul class="media-list dropdown-content-body width-350">
                              <li class="media">
                                  <div class="media-left">
                                      <a href="#" class="btn border-primary text-primary btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-pull-request"></i></a>
                                  </div>
  
                                  <div class="media-body">
                                      Drop the IE <a href="#">specific hacks</a> for temporal inputs
                                      <div class="media-annotation">4 minutes ago</div>
                                  </div>
                              </li>
  
                              <li class="media">
                                  <div class="media-left">
                                      <a href="#" class="btn border-warning text-warning btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-commit"></i></a>
                                  </div>
                                  
                                  <div class="media-body">
                                      Add full font overrides for popovers and tooltips
                                      <div class="media-annotation">36 minutes ago</div>
                                  </div>
                              </li>
  
                              <li class="media">
                                  <div class="media-left">
                                      <a href="#" class="btn border-info text-info btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-branch"></i></a>
                                  </div>
                                  
                                  <div class="media-body">
                                      <a href="#">Chris Arney</a> created a new <span class="text-semibold">Design</span> branch
                                      <div class="media-annotation">2 hours ago</div>
                                  </div>
                              </li>
  
                              <li class="media">
                                  <div class="media-left">
                                      <a href="#" class="btn border-success text-success btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-merge"></i></a>
                                  </div>
                                  
                                  <div class="media-body">
                                      <a href="#">Eugene Kopyov</a> merged <span class="text-semibold">Master</span> and <span class="text-semibold">Dev</span> branches
                                      <div class="media-annotation">Dec 18, 18:36</div>
                                  </div>
                              </li>
  
                              <li class="media">
                                  <div class="media-left">
                                      <a href="#" class="btn border-primary text-primary btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-pull-request"></i></a>
                                  </div>
                                  
                                  <div class="media-body">
                                      Have Carousel ignore keyboard events
                                      <div class="media-annotation">Dec 12, 05:46</div>
                                  </div>
                              </li>
                          </ul>
  
                          <div class="dropdown-content-footer">
                              <a href="#" data-popup="tooltip" title="" data-original-title="All activity"><i class="icon-menu display-block"></i></a>
                          </div>
                      </div>
                  </li>
              </ul>
  
              <p class="navbar-text"><span class="label bg-success-400">Online</span></p>
  
              <ul class="nav navbar-nav navbar-right">
                  <li class="dropdown dropdown-user">
                      <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                          <img src="assets/images/placeholder.jpg" alt="">
                          <span>{{ Auth::user()->name }}</span>
                          <i class="caret"></i>
                      </a>
  
                      <ul class="dropdown-menu dropdown-menu-right">
                          <li><a href="#"><i class="icon-user-plus"></i> My profile</a></li>
                          <li><a href="#"><i class="icon-coins"></i> My balance</a></li>
                          <li><a href="#"><span class="badge bg-teal-400 pull-right">58</span> <i class="icon-comment-discussion"></i> Messages</a></li>
                          <li class="divider"></li>
                          <li><a href="#"><i class="icon-cog5"></i> Account settings</a></li>
                          <li><a href="#"><i class="icon-switch2"></i> Logout</a></li>
                      </ul>
                  </li>
              </ul>
          </div>
      </div>
      <!-- /main navbar -->
  
  
      <!-- Page container -->
      <div class="page-container" style="min-height:429px">
  
          <!-- Page content -->
          <div class="page-content">
  
              <!-- Main sidebar -->
              <div class="sidebar sidebar-main sidebar-fixed">
                  <div class="sidebar-content" tabindex="2" style="overflow-y: hidden; outline: none;">
  
                      <!-- User menu -->
                      <div class="sidebar-user">
                          <div class="category-content">
                              <div class="media">
                                  <div class="media-body">
                                      <span class="media-heading text-semibold">Victoria Baker</span>
                                  </div>
  
                                  <div class="media-right media-middle">
                                      <ul class="icons-list">
                                          <li>
                                              <a href="#"><i class="icon-cog3"></i></a>
                                          </li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <!-- /user menu -->
  
  
                      <!-- Main navigation -->
                      <div class="sidebar-category sidebar-category-visible">
                          <div class="category-content no-padding">
                              <ul class="navigation navigation-main navigation-accordion">
                                  <!-- Main -->
                                  <li class="navigation-header"><span>Main</span> <i class="icon-menu" title="" data-original-title="Main pages"></i></li>
                                  <li><a href="{{ route('admin.index') }}"><i class="icon-home4"></i> <span>Dashboard</span></a></li>
                                  <li >
                                    <a href="#" class="has-ul"><i class="icon-vcard"></i> <span>Cards controller</span></a>
                                    <ul class="hidden-ul" style="display: none;">
                                        <li><a href="{{ route('cards.cards') }}">cards</a></li>
                                        <li><a href="{{ route('cards.create') }}"> create cards </a></li>
  
                                    </ul>
                                </li>
                                  <!-- Forms -->
                                  <li class="navigation-header"><span>Forms</span> <i class="icon-menu" title="" data-original-title="Forms"></i></li>
                                  <li >
                                      <a href="#" class="has-ul"><i class=" icon-users"></i> <span>Users controller</span></a>
                                      <ul class="hidden-ul" style="display: none;">
                                          <li><a href="{{ route('users.users') }}">users</a></li>
                                          <li><a href="{{ route('users.create') }}"> create users </a></li>
    
                                      </ul>
                                  </li>
                              </ul>
                          </div>
                      </div>
                      <!-- /main navigation -->
  
                  </div>
              </div>
              <!-- /main sidebar -->
  
  
              <!-- Main content -->
              <div class="content-wrapper">
                <div class="content">
                    @yield('content')

                </div>
  
              </div>
              <!-- /main content -->
  
          </div>
          <!-- /page content -->
  
      </div>
      <!-- /page container -->
  
  
  
  <div class="daterangepicker dropdown-menu opensleft"><div class="calendars"><div class="calendar left"><div class="calendar-table"></div><div class="daterangepicker_input"><div class="calendar-time" style="display: none;"><div></div></div></div></div><div class="calendar right"><div class="calendar-table"></div><div class="daterangepicker_input"><div class="calendar-time" style="display: none;"><div></div></div></div></div></div><div class="ranges"><ul><li>Today</li><li>Yesterday</li><li>Last 7 Days</li><li>Last 30 Days</li><li>This Month</li><li>Last Month</li><li>Custom Range</li></ul><div class="daterangepicker-inputs"><div class="daterangepicker_input"><span class="start-date-label">Start date:</span><input class="form-control" type="text" name="daterangepicker_start" value=""><i class="icon-calendar3"></i></div><div class="daterangepicker_input"><span class="end-date-label">End date:</span><input class="form-control" type="text" name="daterangepicker_end" value=""><i class="icon-calendar3"></i></div></div><div class="range_inputs"><button class="applyBtn btn btn-sm btn-small bg-slate-600 btn-block" disabled="disabled" type="button">Apply</button> <button class="cancelBtn btn btn-sm btn-small btn-default btn-block" type="button">Cancel</button></div></div></div><div class="d3-tip" style="position: absolute; top: 0px; display: none; pointer-events: none; box-sizing: border-box;"></div><div class="d3-tip" style="position: absolute; top: 0px; display: none; pointer-events: none; box-sizing: border-box;"></div><div class="d3-tip" style="position: absolute; top: 0px; display: none; pointer-events: none; box-sizing: border-box;"></div><div class="d3-tip" style="position: absolute; top: 0px; display: none; pointer-events: none; box-sizing: border-box;"></div><div class="d3-tip" style="position: absolute; top: 0px; display: none; pointer-events: none; box-sizing: border-box;"></div><div class="d3-tip" style="position: absolute; top: 0px; display: none; pointer-events: none; box-sizing: border-box;"></div><div class="d3-tip" style="position: absolute; top: 0px; display: none; pointer-events: none; box-sizing: border-box;"></div><div class="d3-tip" style="position: absolute; top: 0px; display: none; pointer-events: none; box-sizing: border-box;"></div><div id="ascrail2002" class="nicescroll-rails nicescroll-rails-vr" style="padding-right: 0.5px; padding-top: 1.5px; padding-bottom: 1.5px; width: 3px; z-index: 99; cursor: default; position: fixed; top: 46px; left: 256.5px; height: 794px; touch-action: none; display: none;"><div class="nicescroll-cursors" style="position: relative; top: 0px; float: right; width: 3px; height: 0px; background-color: rgb(204, 204, 204); background-clip: padding-box; border-radius: 5px; touch-action: none;"></div></div>
</body>
</html>