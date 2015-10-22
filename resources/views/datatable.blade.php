<!DOCTYPE html>
<html class="no-js before-run" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">

  <title>DataTables | Remark Admin Template</title>

  <link rel="apple-touch-icon" href="../../assets/images/apple-touch-icon.png">
  <link rel="shortcut icon" href="../../assets/images/favicon.ico">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../assets/css/bootstrap-extend.min.css">
  <link rel="stylesheet" href="../../assets/css/site.min.css">

  <link rel="stylesheet" href="../../assets/vendor/animsition/animsition.css">
  <link rel="stylesheet" href="../../assets/vendor/asscrollable/asScrollable.css">
  <link rel="stylesheet" href="../../assets/vendor/switchery/switchery.css">
  <link rel="stylesheet" href="../../assets/vendor/intro-js/introjs.css">
  <link rel="stylesheet" href="../../assets/vendor/slidepanel/slidePanel.css">
  <link rel="stylesheet" href="../../assets/vendor/flag-icon-css/flag-icon.css">

  <!-- Plugin -->
  <link rel="stylesheet" href="../../assets/vendor/datatables-bootstrap/dataTables.bootstrap.css">
  <link rel="stylesheet" href="../../assets/vendor/datatables-fixedheader/dataTables.fixedHeader.css">
  <link rel="stylesheet" href="../../assets/vendor/datatables-responsive/dataTables.responsive.css">


  <!-- Fonts -->
  <link rel="stylesheet" href="../../assets/fonts/web-icons/web-icons.min.css">
  <link rel="stylesheet" href="../../assets/fonts/brand-icons/brand-icons.min.css">
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>

  <!-- Inline -->
  <style>
    @media (max-width: 480px) {
      .panel-actions .dataTables_length {
        display: none;
      }
    }
    
    @media (max-width: 320px) {
      .panel-actions .dataTables_filter {
        display: none;
      }
    }
    
    @media (max-width: 767px) {
      .dataTables_length {
        float: left;
      }
    }
    
    #exampleTableAddToolbar {
      padding-left: 30px;
    }
  </style>

  <!--[if lt IE 9]>
    <script src="../../assets/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->

  <!--[if lt IE 10]>
    <script src="../../assets/vendor/media-match/media.match.min.js"></script>
    <script src="../../assets/vendor/respond/respond.min.js"></script>
    <![endif]-->

  <!-- Scripts -->
  <script src="../../assets/vendor/modernizr/modernizr.js"></script>
  <script src="../../assets/vendor/breakpoints/breakpoints.js"></script>
  <script>
    Breakpoints();
  </script>
</head>
<body>
  <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

  <nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega" role="navigation">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle hamburger hamburger-close navbar-toggle-left hided"
      data-toggle="menubar">
        <span class="sr-only">Toggle navigation</span>
        <span class="hamburger-bar"></span>
      </button>
      <button type="button" class="navbar-toggle collapsed" data-target="#site-navbar-collapse"
      data-toggle="collapse">
        <i class="icon wb-more-horizontal" aria-hidden="true"></i>
      </button>
      <button type="button" class="navbar-toggle collapsed" data-target="#site-navbar-search"
      data-toggle="collapse">
        <span class="sr-only">Toggle Search</span>
        <i class="icon wb-search" aria-hidden="true"></i>
      </button>
      <div class="navbar-brand navbar-brand-center site-gridmenu-toggle" data-toggle="gridmenu">
        <img class="navbar-brand-logo" src="../../assets/images/logo.png" title="Remark">
        <span class="navbar-brand-text"> Remark</span>
      </div>
    </div>

    <div class="navbar-container container-fluid">
      <!-- Navbar Collapse -->
      <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
        <!-- Navbar Toolbar -->
        <ul class="nav navbar-toolbar">
          <li class="hidden-float" id="toggleMenubar">
            <a data-toggle="menubar" href="#" role="button">
              <i class="icon hamburger hamburger-arrow-left">
                  <span class="sr-only">Toggle menubar</span>
                  <span class="hamburger-bar"></span>
                </i>
            </a>
          </li>
          <li class="hidden-xs" id="toggleFullscreen">
            <a class="icon icon-fullscreen" data-toggle="fullscreen" href="#" role="button">
              <span class="sr-only">Toggle fullscreen</span>
            </a>
          </li>
          <li class="hidden-float">
            <a class="icon wb-search" data-toggle="collapse" href="#site-navbar-search" role="button">
              <span class="sr-only">Toggle Search</span>
            </a>
          </li>
          <li class="dropdown dropdown-fw dropdown-mega">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false"
            data-animation="slide-bottom" role="button">Mega <i class="icon wb-chevron-down-mini" aria-hidden="true"></i></a>
            <ul class="dropdown-menu" role="menu">
              <li role="presentation">
                <div class="mega-content">
                  <div class="row">
                    <div class="col-sm-4">
                      <h5>UI Kit</h5>
                      <ul class="blocks-2">
                        <li class="mega-menu margin-0">
                          <ul class="list-icons">
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                              href="../advanced/animation.html">Animation</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                              href="../uikit/buttons.html">Buttons</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                              href="../uikit/colors.html">Colors</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                              href="../uikit/dropdowns.html">Dropdowns</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                              href="../uikit/icons.html">Icons</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                              href="../advanced/lightbox.html">Lightbox</a>
                            </li>
                          </ul>
                        </li>
                        <li class="mega-menu margin-0">
                          <ul class="list-icons">
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                              href="../uikit/modals.html">Modals</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                              href="../uikit/panels.html">Panels</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                              href="../structure/overlay.html">Overlay</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                              href="../uikit/tooltip-popover.html ">Tooltips</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                              href="../advanced/scrollable.html">Scrollable</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                              href="../uikit/typography.html">Typography</a>
                            </li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                    <div class="col-sm-4">
                      <h5>Media
                        <span class="badge badge-success">4</span>
                      </h5>
                      <ul class="blocks-3">
                        <li>
                          <a class="thumbnail margin-0" href="javascript:void(0)">
                            <img class="width-full" src="../../assets/photos/placeholder.png" alt="..." />
                          </a>
                        </li>
                        <li>
                          <a class="thumbnail margin-0" href="javascript:void(0)">
                            <img class="width-full" src="../../assets/photos/placeholder.png" alt="..." />
                          </a>
                        </li>
                        <li>
                          <a class="thumbnail margin-0" href="javascript:void(0)">
                            <img class="width-full" src="../../assets/photos/placeholder.png" alt="..." />
                          </a>
                        </li>
                        <li>
                          <a class="thumbnail margin-0" href="javascript:void(0)">
                            <img class="width-full" src="../../assets/photos/placeholder.png" alt="..." />
                          </a>
                        </li>
                        <li>
                          <a class="thumbnail margin-0" href="javascript:void(0)">
                            <img class="width-full" src="../../assets/photos/placeholder.png" alt="..." />
                          </a>
                        </li>
                        <li>
                          <a class="thumbnail margin-0" href="javascript:void(0)">
                            <img class="width-full" src="../../assets/photos/placeholder.png" alt="..." />
                          </a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-sm-4">
                      <h5 class="margin-bottom-0">Accordion</h5>
                      <!-- Accordion -->
                      <div class="panel-group panel-group-simple" id="siteMegaAccordion" aria-multiselectable="true"
                      role="tablist">
                        <div class="panel">
                          <div class="panel-heading" id="siteMegaAccordionHeadingOne" role="tab">
                            <a class="panel-title" data-toggle="collapse" href="#siteMegaCollapseOne" data-parent="#siteMegaAccordion"
                            aria-expanded="false" aria-controls="siteMegaCollapseOne">
                                Collapsible Group Item #1
                              </a>
                          </div>
                          <div class="panel-collapse collapse" id="siteMegaCollapseOne" aria-labelledby="siteMegaAccordionHeadingOne"
                          role="tabpanel">
                            <div class="panel-body">
                              De moveat laudatur vestra parum doloribus labitur sentire partes, eripuit praesenti
                              congressus ostendit alienae, voluptati ornateque
                              accusamus clamat reperietur convicia albucius.
                            </div>
                          </div>
                        </div>
                        <div class="panel">
                          <div class="panel-heading" id="siteMegaAccordionHeadingTwo" role="tab">
                            <a class="panel-title collapsed" data-toggle="collapse" href="#siteMegaCollapseTwo"
                            data-parent="#siteMegaAccordion" aria-expanded="false"
                            aria-controls="siteMegaCollapseTwo">
                                Collapsible Group Item #2
                              </a>
                          </div>
                          <div class="panel-collapse collapse" id="siteMegaCollapseTwo" aria-labelledby="siteMegaAccordionHeadingTwo"
                          role="tabpanel">
                            <div class="panel-body">
                              Praestabiliorem. Pellat excruciant legantur ullum leniter vacare foris voluptate
                              loco ignavi, credo videretur multoque choro fatemur
                              mortis animus adoptionem, bello statuat expediunt
                              naturales.
                            </div>
                          </div>
                        </div>

                        <div class="panel">
                          <div class="panel-heading" id="siteMegaAccordionHeadingThree" role="tab">
                            <a class="panel-title collapsed" data-toggle="collapse" href="#siteMegaCollapseThree"
                            data-parent="#siteMegaAccordion" aria-expanded="false"
                            aria-controls="siteMegaCollapseThree">
                                Collapsible Group Item #3
                              </a>
                          </div>
                          <div class="panel-collapse collapse" id="siteMegaCollapseThree" aria-labelledby="siteMegaAccordionHeadingThree"
                          role="tabpanel">
                            <div class="panel-body">
                              Horum, antiquitate perciperet d conspectum locus obruamus animumque perspici probabis
                              suscipere. Desiderat magnum, contenta poena desiderant
                              concederetur menandri damna disputandum corporum.
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- End Accordion -->
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </li>
        </ul>
        <!-- End Navbar Toolbar -->

        <!-- Navbar Toolbar Right -->
        <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)" data-animation="slide-bottom"
            aria-expanded="false" role="button">
              <span class="flag-icon flag-icon-us"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
              <li role="presentation">
                <a href="javascript:void(0)" role="menuitem">
                  <span class="flag-icon flag-icon-gb"></span> English</a>
              </li>
              <li role="presentation">
                <a href="javascript:void(0)" role="menuitem">
                  <span class="flag-icon flag-icon-fr"></span> French</a>
              </li>
              <li role="presentation">
                <a href="javascript:void(0)" role="menuitem">
                  <span class="flag-icon flag-icon-cn"></span> Chinese</a>
              </li>
              <li role="presentation">
                <a href="javascript:void(0)" role="menuitem">
                  <span class="flag-icon flag-icon-de"></span> German</a>
              </li>
              <li role="presentation">
                <a href="javascript:void(0)" role="menuitem">
                  <span class="flag-icon flag-icon-nl"></span> Dutch</a>
              </li>
            </ul>
          </li>
          <li class="dropdown">
            <a class="navbar-avatar dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false"
            data-animation="slide-bottom" role="button">
              <span class="avatar avatar-online">
                <img src="../../assets/portraits/5.jpg" alt="...">
                <i></i>
              </span>
            </a>
            <ul class="dropdown-menu" role="menu">
              <li role="presentation">
                <a href="javascript:void(0)" role="menuitem"><i class="icon wb-user" aria-hidden="true"></i> Profile</a>
              </li>
              <li role="presentation">
                <a href="javascript:void(0)" role="menuitem"><i class="icon wb-payment" aria-hidden="true"></i> Billing</a>
              </li>
              <li role="presentation">
                <a href="javascript:void(0)" role="menuitem"><i class="icon wb-settings" aria-hidden="true"></i> Settings</a>
              </li>
              <li class="divider" role="presentation"></li>
              <li role="presentation">
                <a href="javascript:void(0)" role="menuitem"><i class="icon wb-power" aria-hidden="true"></i> Logout</a>
              </li>
            </ul>
          </li>
          <li class="dropdown">
            <a data-toggle="dropdown" href="javascript:void(0)" title="Notifications" aria-expanded="false"
            data-animation="slide-bottom" role="button">
              <i class="icon wb-bell" aria-hidden="true"></i>
              <span class="badge badge-danger up">5</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-right dropdown-menu-media" role="menu">
              <li class="dropdown-menu-header" role="presentation">
                <h5>NOTIFICATIONS</h5>
                <span class="label label-round label-danger">New 5</span>
              </li>

              <li class="list-group" role="presentation">
                <div data-role="container">
                  <div data-role="content">
                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                      <div class="media">
                        <div class="media-left padding-right-10">
                          <i class="icon wb-order bg-red-600 white icon-circle" aria-hidden="true"></i>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading">A new order has been placed</h6>
                          <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">5 hours ago</time>
                        </div>
                      </div>
                    </a>
                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                      <div class="media">
                        <div class="media-left padding-right-10">
                          <i class="icon wb-user bg-green-600 white icon-circle" aria-hidden="true"></i>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading">Completed the task</h6>
                          <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">2 days ago</time>
                        </div>
                      </div>
                    </a>
                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                      <div class="media">
                        <div class="media-left padding-right-10">
                          <i class="icon wb-settings bg-red-600 white icon-circle" aria-hidden="true"></i>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading">Settings updated</h6>
                          <time class="media-meta" datetime="2015-06-11T14:05:00+08:00">2 days ago</time>
                        </div>
                      </div>
                    </a>
                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                      <div class="media">
                        <div class="media-left padding-right-10">
                          <i class="icon wb-calendar bg-blue-600 white icon-circle" aria-hidden="true"></i>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading">Event started</h6>
                          <time class="media-meta" datetime="2015-06-10T13:50:18+08:00">3 days ago</time>
                        </div>
                      </div>
                    </a>
                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                      <div class="media">
                        <div class="media-left padding-right-10">
                          <i class="icon wb-chat bg-orange-600 white icon-circle" aria-hidden="true"></i>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading">Message received</h6>
                          <time class="media-meta" datetime="2015-06-10T12:34:48+08:00">3 days ago</time>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </li>
              <li class="dropdown-menu-footer" role="presentation">
                <a class="dropdown-menu-footer-btn" href="javascript:void(0)" role="button">
                  <i class="icon wb-settings" aria-hidden="true"></i>
                </a>
                <a href="javascript:void(0)" role="menuitem">
                    All notifications
                  </a>
              </li>
            </ul>
          </li>
          <li class="dropdown">
            <a data-toggle="dropdown" href="javascript:void(0)" title="Messages" aria-expanded="false"
            data-animation="slide-bottom" role="button">
              <i class="icon wb-envelope" aria-hidden="true"></i>
              <span class="badge badge-info up">3</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-right dropdown-menu-media" role="menu">
              <li class="dropdown-menu-header" role="presentation">
                <h5>MESSAGES</h5>
                <span class="label label-round label-info">New 3</span>
              </li>

              <li class="list-group" role="presentation">
                <div data-role="container">
                  <div data-role="content">
                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                      <div class="media">
                        <div class="media-left padding-right-10">
                          <span class="avatar avatar-sm avatar-online">
                            <img src="../../assets/portraits/2.jpg" alt="..." />
                            <i></i>
                          </span>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading">Mary Adams</h6>
                          <div class="media-meta">
                            <time datetime="2015-06-17T20:22:05+08:00">30 minutes ago</time>
                          </div>
                          <div class="media-detail">Anyways, i would like just do it</div>
                        </div>
                      </div>
                    </a>
                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                      <div class="media">
                        <div class="media-left padding-right-10">
                          <span class="avatar avatar-sm avatar-off">
                            <img src="../../assets/portraits/3.jpg" alt="..." />
                            <i></i>
                          </span>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading">Caleb Richards</h6>
                          <div class="media-meta">
                            <time datetime="2015-06-17T12:30:30+08:00">12 hours ago</time>
                          </div>
                          <div class="media-detail">I checheck the document. But there seems</div>
                        </div>
                      </div>
                    </a>
                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                      <div class="media">
                        <div class="media-left padding-right-10">
                          <span class="avatar avatar-sm avatar-busy">
                            <img src="../../assets/portraits/4.jpg" alt="..." />
                            <i></i>
                          </span>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading">June Lane</h6>
                          <div class="media-meta">
                            <time datetime="2015-06-16T18:38:40+08:00">2 days ago</time>
                          </div>
                          <div class="media-detail">Lorem ipsum Id consectetur et minim</div>
                        </div>
                      </div>
                    </a>
                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                      <div class="media">
                        <div class="media-left padding-right-10">
                          <span class="avatar avatar-sm avatar-away">
                            <img src="../../assets/portraits/5.jpg" alt="..." />
                            <i></i>
                          </span>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading">Edward Fletcher</h6>
                          <div class="media-meta">
                            <time datetime="2015-06-15T20:34:48+08:00">3 days ago</time>
                          </div>
                          <div class="media-detail">Dolor et irure cupidatat commodo nostrud nostrud.</div>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </li>
              <li class="dropdown-menu-footer" role="presentation">
                <a class="dropdown-menu-footer-btn" href="javascript:void(0)" role="button">
                  <i class="icon wb-settings" aria-hidden="true"></i>
                </a>
                <a href="javascript:void(0)" role="menuitem">
                    See all messages
                  </a>
              </li>
            </ul>
          </li>
          <li id="toggleChat">
            <a data-toggle="site-sidebar" href="javascript:void(0)" title="Chat" data-url="../site-sidebar.tpl">
              <i class="icon wb-chat" aria-hidden="true"></i>
            </a>
          </li>
        </ul>
        <!-- End Navbar Toolbar Right -->
      </div>
      <!-- End Navbar Collapse -->

      <!-- Site Navbar Seach -->
      <div class="collapse navbar-search-overlap" id="site-navbar-search">
        <form role="search">
          <div class="form-group">
            <div class="input-search">
              <i class="input-search-icon wb-search" aria-hidden="true"></i>
              <input type="text" class="form-control" name="site-search" placeholder="Search...">
              <button type="button" class="input-search-close icon wb-close" data-target="#site-navbar-search"
              data-toggle="collapse" aria-label="Close"></button>
            </div>
          </div>
        </form>
      </div>
      <!-- End Site Navbar Seach -->
    </div>
  </nav>
  <div class="site-menubar">
    <div class="site-menubar-body">
      <div>
        <div>
          <ul class="site-menu">
            <li class="site-menu-category">General</li>
            <li class="site-menu-item has-sub">
              <a href="javascript:void(0)" data-slug="dashboard">
                <i class="site-menu-icon wb-dashboard" aria-hidden="true"></i>
                <span class="site-menu-title">Dashboard</span>
                <div class="site-menu-badge">
                  <span class="badge badge-success">2</span>
                </div>
              </a>
              <ul class="site-menu-sub">
                <li class="site-menu-item">
                  <a class="animsition-link" href="../index.html" data-slug="dashboard-v1">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Dashboard v1</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../dashboard/v2.html" data-slug="dashboard-v2">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Dashboard v2</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="site-menu-item has-sub">
              <a href="javascript:void(0)" data-slug="layout">
                <i class="site-menu-icon wb-layout" aria-hidden="true"></i>
                <span class="site-menu-title">Layouts</span>
                <span class="site-menu-arrow"></span>
              </a>
              <ul class="site-menu-sub">
                <li class="site-menu-item">
                  <a class="animsition-link" href="../layouts/grids.html" data-slug="layout-grids">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Grid Scaffolding</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../layouts/headers.html" data-slug="layout-headers">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Different Headers</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../layouts/bordered-header.html" data-slug="layout-bordered-header">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Bordered Header</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../layouts/two-columns.html" data-slug="layout-two-columns">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Two Columns</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../layouts/boxed.html" data-slug="layout-boxed">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Boxed Layout</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../layouts/blank.html" data-slug="layout-blank">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Blank Page</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../layouts/menu-collapsed.html" data-slug="layout-menu-collapsed">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Menu Collapsed</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../layouts/menu-expended.html" data-slug="layout-menu-expended">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Menu Expended</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../layouts/menubar-flipped.html" data-slug="layout-menubar-flipped">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Menubar Flipped</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="site-menu-item has-sub">
              <a href="javascript:void(0)" data-slug="page">
                <i class="site-menu-icon wb-file" aria-hidden="true"></i>
                <span class="site-menu-title">Pages</span>
                <span class="site-menu-arrow"></span>
              </a>
              <ul class="site-menu-sub">
                <li class="site-menu-item has-sub">
                  <a href="javascript:void(0)" data-slug="">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Errors</span>
                    <span class="site-menu-arrow"></span>
                  </a>
                  <ul class="site-menu-sub">
                    <li class="site-menu-item">
                      <a class="animsition-link" href="../pages/400.html" data-slug="page-error-400">
                        <i class="site-menu-icon " aria-hidden="true"></i>
                        <span class="site-menu-title">400</span>
                      </a>
                    </li>
                    <li class="site-menu-item">
                      <a class="animsition-link" href="../pages/403.html" data-slug="page-error-403">
                        <i class="site-menu-icon " aria-hidden="true"></i>
                        <span class="site-menu-title">403</span>
                      </a>
                    </li>
                    <li class="site-menu-item">
                      <a class="animsition-link" href="../pages/404.html" data-slug="page-error-404">
                        <i class="site-menu-icon " aria-hidden="true"></i>
                        <span class="site-menu-title">404</span>
                      </a>
                    </li>
                    <li class="site-menu-item">
                      <a class="animsition-link" href="../pages/500.html" data-slug="page-error-500">
                        <i class="site-menu-icon " aria-hidden="true"></i>
                        <span class="site-menu-title">500</span>
                      </a>
                    </li>
                    <li class="site-menu-item">
                      <a class="animsition-link" href="../pages/503.html" data-slug="page-error-503">
                        <i class="site-menu-icon " aria-hidden="true"></i>
                        <span class="site-menu-title">503</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../pages/faq.html" data-slug="page-faq">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">FAQ</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../pages/register.html" data-slug="page-register">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Register</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../pages/login.html" data-slug="page-login">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Login</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../pages/lockscreen.html" data-slug="page-lockscreen">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Lockscreen</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../pages/forgot-password.html" data-slug="page-forgot-password">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Forgot Password</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../pages/maintenance.html" data-slug="page-maintenance">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Maintenance</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../pages/email.html" data-slug="page-email">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Email</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../pages/invoice.html" data-slug="page-invoice">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Invoice</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../pages/profile.html" data-slug="page-profile">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Profile</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../pages/search-result.html" data-slug="page-search-result">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Search Result</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../pages/user.html" data-slug="page-user">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">User</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../pages/code-editor.html" data-slug="page-code-editor">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Code Editor</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../pages/gallery.html" data-slug="page-gallery">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Gallery</span>
                  </a>
                </li>
                <li class="site-menu-item has-sub">
                  <a href="javascript:void(0)" data-slug="page-map">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Maps</span>
                    <span class="site-menu-arrow"></span>
                  </a>
                  <ul class="site-menu-sub">
                    <li class="site-menu-item">
                      <a class="animsition-link" href="../pages/map-google.html" data-slug="page-map-google">
                        <i class="site-menu-icon " aria-hidden="true"></i>
                        <span class="site-menu-title">Google Maps</span>
                      </a>
                    </li>
                    <li class="site-menu-item">
                      <a class="animsition-link" href="../pages/map-vector.html" data-slug="page-map-vector">
                        <i class="site-menu-icon " aria-hidden="true"></i>
                        <span class="site-menu-title">Vector Maps</span>
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="site-menu-category">Elements</li>
            <li class="site-menu-item has-sub">
              <a href="javascript:void(0)" data-slug="uikit">
                <i class="site-menu-icon wb-bookmark" aria-hidden="true"></i>
                <span class="site-menu-title">Basic UI</span>
                <span class="site-menu-arrow"></span>
              </a>
              <ul class="site-menu-sub">
                <li class="site-menu-item">
                  <a class="animsition-link" href="../uikit/buttons.html" data-slug="uikit-buttons">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Buttons</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../uikit/colors.html" data-slug="uikit-colors">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Colors</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../uikit/dropdowns.html" data-slug="uikit-dropdowns">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Dropdowns</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../uikit/list.html" data-slug="uikit-list">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">List</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../uikit/icons.html" data-slug="uikit-icons">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Icons</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../uikit/images.html" data-slug="uikit-images">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Images</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../uikit/carousel.html" data-slug="uikit-carousel">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Carousel</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../uikit/modals.html" data-slug="uikit-modals">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Modals</span>
                  </a>
                </li>
                <li class="site-menu-item has-sub">
                  <a href="javascript:void(0)" data-slug="uikit-panel">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Panel</span>
                    <span class="site-menu-arrow"></span>
                  </a>
                  <ul class="site-menu-sub">
                    <li class="site-menu-item">
                      <a class="animsition-link" href="../uikit/panel-structure.html" data-slug="uikit-panel-structure">
                        <i class="site-menu-icon " aria-hidden="true"></i>
                        <span class="site-menu-title">Panel Structure</span>
                      </a>
                    </li>
                    <li class="site-menu-item">
                      <a class="animsition-link" href="../uikit/panel-actions.html" data-slug="uikit-panel-actions">
                        <i class="site-menu-icon " aria-hidden="true"></i>
                        <span class="site-menu-title">Panel Actions</span>
                      </a>
                    </li>
                    <li class="site-menu-item">
                      <a class="animsition-link" href="../uikit/panel-portlets.html" data-slug="uikit-panel-portlets">
                        <i class="site-menu-icon " aria-hidden="true"></i>
                        <span class="site-menu-title">Panel Portlets</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../uikit/progress-bars.html" data-slug="uikit-progress-bars">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Progress Bars</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../uikit/badges-labels.html" data-slug="uikit-badges-labels">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Badges &amp; Labels</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../uikit/tooltip-popover.html" data-slug="uikit-tooltip-popover">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Tooltip &amp; Popover</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../uikit/tabs-accordions.html" data-slug="uikit-tabs-accordions">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Tabs &amp; Accordions</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../uikit/typography.html" data-slug="uikit-typography">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Typography</span>
                    <div class="site-menu-badge">
                      <span class="badge badge-primary">5</span>
                    </div>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../uikit/utilities.html" data-slug="uikit-utilities">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Utilties</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="site-menu-item has-sub">
              <a href="javascript:void(0)" data-slug="advanced">
                <i class="site-menu-icon wb-hammer" aria-hidden="true"></i>
                <span class="site-menu-title">Advanced UI</span>
                <span class="site-menu-arrow"></span>
              </a>
              <ul class="site-menu-sub">
                <li class="site-menu-item">
                  <a class="animsition-link" href="../advanced/animation.html" data-slug="advanced-animation">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Animation</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../advanced/lightbox.html" data-slug="advanced-lightbox">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Lightbox</span>
                  </a>
                </li>
                <li class="site-menu-item hidden-xs">
                  <a href="javascript:void(0)" data-slug="advanced-tour">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Tour</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../advanced/treeview.html" data-slug="advanced-treeview">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Treeview</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../advanced/rating.html" data-slug="advanced-rating">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Rating</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../advanced/alertify.html" data-slug="advanced-alertify">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Alertify</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../advanced/toastr.html" data-slug="advanced-toastr">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Toastr</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../advanced/context-menu.html" data-slug="advanced-context-menu">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Context Menu</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../advanced/bootbox-sweetalert.html" data-slug="advanced-bootbox-sweetalert">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Bootbox &amp; Sweetalert</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../advanced/sortable-nestable.html" data-slug="advanced-sortable-nestable">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Sortable &amp; Nestable</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../advanced/scrollable.html" data-slug="advanced-scrollable">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Scrollable</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../advanced/highlight.html" data-slug="advanced-highlight">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Highlight</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../advanced/masonry.html" data-slug="advanced-masonry">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Masonry</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../advanced/maps-vector.html" data-slug="advanced-maps-vector">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Vector Maps</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../advanced/maps-google.html" data-slug="advanced-maps-google">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Google Maps</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="site-menu-item has-sub">
              <a href="javascript:void(0)" data-slug="structure">
                <i class="site-menu-icon wb-plugin" aria-hidden="true"></i>
                <span class="site-menu-title">Structure</span>
                <span class="site-menu-arrow"></span>
              </a>
              <ul class="site-menu-sub">
                <li class="site-menu-item">
                  <a class="animsition-link" href="../structure/alerts.html" data-slug="structure-alerts">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Alerts</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../structure/blockquotes.html" data-slug="structure-blockquotes">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Blockquotes</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../structure/breadcrumbs.html" data-slug="structure-breadcrumbs">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Breadcrumbs</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../structure/cover.html" data-slug="structure-cover">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Cover</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../structure/overlay.html" data-slug="structure-overlay">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Overlay</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../structure/comments.html" data-slug="structure-comments">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Comments</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../structure/media.html" data-slug="structure-media">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Media</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../structure/nav.html" data-slug="structure-nav">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Nav</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../structure/navbars.html" data-slug="structure-navbars">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Navbars</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../structure/pagination.html" data-slug="structure-pagination">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Pagination</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../structure/pricing-tables.html" data-slug="structure-pricing-tables">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Pricing Tables</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../structure/testimonials.html" data-slug="structure-testimonials">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Testimonials</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../structure/ribbon.html" data-slug="structure-ribbon">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Ribbon</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../structure/step.html" data-slug="structure-step">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Step</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../structure/chat.html" data-slug="structure-chat">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Chat</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../structure/timeline.html" data-slug="structure-timeline">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Timeline</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../structure/timeline-simple.html" data-slug="structure-timeline-simple">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Simple Timeline</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="site-menu-item has-sub">
              <a href="javascript:void(0)" data-slug="widgets">
                <i class="site-menu-icon wb-extension" aria-hidden="true"></i>
                <span class="site-menu-title">Widgets</span>
                <span class="site-menu-arrow"></span>
              </a>
              <ul class="site-menu-sub">
                <li class="site-menu-item">
                  <a class="animsition-link" href="../widgets/blog.html" data-slug="widgets-blog">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Blog Widgets</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../widgets/data.html" data-slug="widgets-data">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Data Widgets</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../widgets/chart.html" data-slug="widgets-chart">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Chart Widgets</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../widgets/social.html" data-slug="widgets-social">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Social Widgets</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../widgets/statistics.html" data-slug="widgets-statistics">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Statistics Widgets</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../widgets/weather.html" data-slug="widgets-weather">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Weather Widgets</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="site-menu-item has-sub">
              <a href="javascript:void(0)" data-slug="forms">
                <i class="site-menu-icon wb-library" aria-hidden="true"></i>
                <span class="site-menu-title">Forms</span>
                <span class="site-menu-arrow"></span>
              </a>
              <ul class="site-menu-sub">
                <li class="site-menu-item">
                  <a class="animsition-link" href="../forms/general.html" data-slug="forms-general">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">General Elements</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../forms/material.html" data-slug="forms-material">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Material Elements</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../forms/advanced.html" data-slug="forms-advanced">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Advanced Elements</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../forms/layouts.html" data-slug="forms-layouts">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Form Layouts</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../forms/wizard.html" data-slug="forms-wizard">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Form Wizard</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../forms/validation.html" data-slug="forms-validation">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Form Validation</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../forms/masks.html" data-slug="forms-masks">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Form Masks</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../forms/editable.html" data-slug="forms-editable">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Form Editable</span>
                  </a>
                </li>
                <li class="site-menu-item has-sub">
                  <a href="javascript:void(0)" data-slug="forms-editor">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Editors</span>
                    <span class="site-menu-arrow"></span>
                  </a>
                  <ul class="site-menu-sub">
                    <li class="site-menu-item">
                      <a class="animsition-link" href="../forms/editor-summernote.html" data-slug="forms-editor-summernote">
                        <i class="site-menu-icon " aria-hidden="true"></i>
                        <span class="site-menu-title">Summernote</span>
                      </a>
                    </li>
                    <li class="site-menu-item">
                      <a class="animsition-link" href="../forms/editor-markdown.html" data-slug="forms-editor-markdown">
                        <i class="site-menu-icon " aria-hidden="true"></i>
                        <span class="site-menu-title">Markdown</span>
                      </a>
                    </li>
                    <li class="site-menu-item">
                      <a class="animsition-link" href="../forms/editor-ace.html" data-slug="forms-editor-ace">
                        <i class="site-menu-icon " aria-hidden="true"></i>
                        <span class="site-menu-title">Ace Editor</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../forms/image-cropping.html" data-slug="forms-image-cropping">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Image Cropping</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../forms/file-uploads.html" data-slug="forms-file-uploads">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">File Uploads</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="site-menu-item has-sub active open">
              <a href="javascript:void(0)" data-slug="tables">
                <i class="site-menu-icon wb-table" aria-hidden="true"></i>
                <span class="site-menu-title">Tables</span>
                <span class="site-menu-arrow"></span>
              </a>
              <ul class="site-menu-sub">
                <li class="site-menu-item">
                  <a class="animsition-link" href="basic.html" data-slug="tables-basic">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Basic Tables</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="bootstrap.html" data-slug="tables-bootstrap">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Bootstrap Tables</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="responsive.html" data-slug="tables-responsive">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Responsive Tables</span>
                  </a>
                </li>
                <li class="site-menu-item active">
                  <a class="animsition-link" href="datatable.html" data-slug="tables-datatable">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Data Tables</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="editable.html" data-slug="tables-editable">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Editable Tables</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="footable.html" data-slug="tables-foo">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">FooTable</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="floatthead.html" data-slug="tables-floatthead">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">floatThead</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="site-menu-item has-sub">
              <a href="javascript:void(0)" data-slug="chart">
                <i class="site-menu-icon wb-pie-chart" aria-hidden="true"></i>
                <span class="site-menu-title">Chart</span>
                <span class="site-menu-arrow"></span>
              </a>
              <ul class="site-menu-sub">
                <li class="site-menu-item">
                  <a class="animsition-link" href="../charts/chartist.html" data-slug="chart-chartist">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Chartist.js</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../charts/c3.html" data-slug="chart-c3">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">C3</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../charts/chartjs.html" data-slug="chart-chartjs">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Chart.js</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../charts/morris.html" data-slug="chart-morris">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Morris</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../charts/flot.html" data-slug="chart-flot">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Flot</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../charts/sparkline.html" data-slug="chart-sparkline">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Sparkline</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../charts/peity.html" data-slug="chart-peity">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Peity</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../charts/gauges.html" data-slug="chart-gauges">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Gauges</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../charts/pie-progress.html" data-slug="chart-pie-progress">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Pie Progress</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../charts/rickshaw.html" data-slug="chart-rickshaw">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Rickshaw</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="site-menu-category">Apps</li>
            <li class="site-menu-item has-sub">
              <a href="javascript:void(0)" data-slug="app">
                <i class="site-menu-icon wb-grid-4" aria-hidden="true"></i>
                <span class="site-menu-title">Apps</span>
                <span class="site-menu-arrow"></span>
              </a>
              <ul class="site-menu-sub">
                <li class="site-menu-item">
                  <a class="animsition-link" href="../apps/calendar/calendar.html" data-slug="app-calendar">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Calendar</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../apps/contacts/contacts.html" data-slug="app-contacts">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Contacts</span>
                  </a>
                </li>
                <li class="site-menu-item has-sub">
                  <a href="javascript:void(0)" data-slug="app-document">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Documents</span>
                    <span class="site-menu-arrow"></span>
                  </a>
                  <ul class="site-menu-sub">
                    <li class="site-menu-item">
                      <a class="animsition-link" href="../apps/documents/articles.html" data-slug="app-document-articles">
                        <i class="site-menu-icon " aria-hidden="true"></i>
                        <span class="site-menu-title">Articles</span>
                      </a>
                    </li>
                    <li class="site-menu-item">
                      <a class="animsition-link" href="../apps/documents/categories.html" data-slug="app-document-categories">
                        <i class="site-menu-icon " aria-hidden="true"></i>
                        <span class="site-menu-title">Categories</span>
                      </a>
                    </li>
                    <li class="site-menu-item">
                      <a class="animsition-link" href="../apps/documents/article.html" data-slug="app-document-article">
                        <i class="site-menu-icon " aria-hidden="true"></i>
                        <span class="site-menu-title">Article</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../apps/mailbox/mailbox.html" data-slug="app-mailbox">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Mailbox</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../apps/projects/projects.html" data-slug="app-projects">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Projects</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../apps/forum/forum.html" data-slug="app-forum">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Forum</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../apps/media/overview.html" data-slug="app-media">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Media</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="site-menu-category">Angular UI</li>
            <li class="site-menu-item">
              <a class="animsition-link" href="../angular/#/angularui/bootstrap" data-slug="angular">
                <i class="site-menu-icon bd-angular" aria-hidden="true"></i>
                <span class="site-menu-title">Angular UI</span>
                <div class="site-menu-label">
                  <span class="label label-danger label-round">new</span>
                </div>
              </a>
            </li>
          </ul>

          <div class="site-menubar-section">
            <h5>
              Milestone
              <span class="pull-right">30%</span>
            </h5>
            <div class="progress progress-xs">
              <div class="progress-bar active" style="width: 30%;" role="progressbar"></div>
            </div>
            <h5>
              Release
              <span class="pull-right">60%</span>
            </h5>
            <div class="progress progress-xs">
              <div class="progress-bar progress-bar-warning" style="width: 60%;" role="progressbar"></div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-menubar-footer">
      <a href="javascript: void(0);" class="fold-show" data-placement="top" data-toggle="tooltip"
      data-original-title="Settings">
        <span class="icon wb-settings" aria-hidden="true"></span>
      </a>
      <a href="javascript: void(0);" data-placement="top" data-toggle="tooltip" data-original-title="Lock">
        <span class="icon wb-eye-close" aria-hidden="true"></span>
      </a>
      <a href="javascript: void(0);" data-placement="top" data-toggle="tooltip" data-original-title="Logout">
        <span class="icon wb-power" aria-hidden="true"></span>
      </a>
    </div>
  </div>
  <div class="site-gridmenu">
    <ul>
      <li>
        <a href="../apps/mailbox/mailbox.html">
          <i class="icon wb-envelope"></i>
          <span>Mailbox</span>
        </a>
      </li>
      <li>
        <a href="../apps/calendar/calendar.html">
          <i class="icon wb-calendar"></i>
          <span>Calendar</span>
        </a>
      </li>
      <li>
        <a href="../apps/contacts/contacts.html">
          <i class="icon wb-user"></i>
          <span>Contacts</span>
        </a>
      </li>
      <li>
        <a href="../apps/media/overview.html">
          <i class="icon wb-camera"></i>
          <span>Media</span>
        </a>
      </li>
      <li>
        <a href="../apps/documents/categories.html">
          <i class="icon wb-order"></i>
          <span>Documents</span>
        </a>
      </li>
      <li>
        <a href="../apps/projects/projects.html">
          <i class="icon wb-image"></i>
          <span>Project</span>
        </a>
      </li>
      <li>
        <a href="../apps/forum/forum.html">
          <i class="icon wb-chat-group"></i>
          <span>Forum</span>
        </a>
      </li>
      <li>
        <a href="../index.html">
          <i class="icon wb-dashboard"></i>
          <span>Dashboard</span>
        </a>
      </li>
    </ul>
  </div>


  <!-- Page -->
  <div class="page animsition">
    <div class="page-header">
      <h1 class="page-title">DataTables</h1>
      <ol class="breadcrumb">
        <li><a href="../index.html">Home</a></li>
        <li><a href="javascript:void(0)">Tables</a></li>
        <li class="active">DataTables</li>
      </ol>
      <div class="page-header-actions">
        <a class="btn btn-sm btn-default btn-outline btn-round" href="http://datatables.net"
        target="_blank">
          <i class="icon wb-link" aria-hidden="true"></i>
          <span class="hidden-xs">Official Website</span>
        </a>
      </div>
    </div>
    <div class="page-content">
      <!-- Panel Basic -->
      <div class="panel">
        <header class="panel-heading">
          <div class="panel-actions"></div>
          <h3 class="panel-title">Basic</h3>
        </header>
        <div class="panel-body">
          <table class="table table-hover dataTable table-striped width-full" data-plugin="dataTable">
            <thead>
              <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Date</th>
                <th>Salary</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Date</th>
                <th>Salary</th>
              </tr>
            </tfoot>
            <tbody>
              <tr>
                <td>Damon</td>
                <td>5516 Adolfo Green</td>
                <td>Littelhaven</td>
                <td>85</td>
                <td>2014/06/13</td>
                <td>$553,536</td>
              </tr>
              <tr>
                <td>Torrey</td>
                <td>1995 Richie Neck</td>
                <td>West Sedrickstad</td>
                <td>77</td>
                <td>2014/09/12</td>
                <td>$243,577</td>
              </tr>
              <tr>
                <td>Miracle</td>
                <td>176 Hirthe Squares</td>
                <td>Ryleetown</td>
                <td>82</td>
                <td>2013/09/27</td>
                <td>$784,802</td>
              </tr>
              <tr>
                <td>Wilhelmine</td>
                <td>44727 O&#x27;Hara Union</td>
                <td>Dibbertfurt</td>
                <td>68</td>
                <td>2013/06/28</td>
                <td>$207,291</td>
              </tr>
              <tr>
                <td>Hubert</td>
                <td>8884 Jamel Pines</td>
                <td>Howemouth</td>
                <td>63</td>
                <td>2013/05/28</td>
                <td>$584,032</td>
              </tr>
              <tr>
                <td>Myrtie.Gerhold</td>
                <td>098 Noel Way</td>
                <td>Santinoland</td>
                <td>13</td>
                <td>2014/12/12</td>
                <td>$550,087</td>
              </tr>
              <tr>
                <td>Chester</td>
                <td>14095 Kling Gateway</td>
                <td>Andresmouth</td>
                <td>26</td>
                <td>2014/09/27</td>
                <td>$177,404</td>
              </tr>
              <tr>
                <td>Melany_Gerhold</td>
                <td>1100 Steve Pines</td>
                <td>Immanuelfort</td>
                <td>12</td>
                <td>2014/06/28</td>
                <td>$162,453</td>
              </tr>
              <tr>
                <td>Thea</td>
                <td>26114 Narciso Lodge</td>
                <td>East Opal</td>
                <td>64</td>
                <td>2014/11/12</td>
                <td>$581,736</td>
              </tr>
              <tr>
                <td>Albin.Kreiger</td>
                <td>111 Hershel Stream</td>
                <td>Hermannborough</td>
                <td>90</td>
                <td>2013/11/27</td>
                <td>$921,021</td>
              </tr>
              <tr>
                <td>Shanel</td>
                <td>7579 Santa Forest</td>
                <td>Jordaneville</td>
                <td>14</td>
                <td>2015/04/28</td>
                <td>$818,20</td>
              </tr>
              <tr>
                <td>Bell.Mueller</td>
                <td>083 Kshlerin Forest</td>
                <td>Clintmouth</td>
                <td>98</td>
                <td>2013/10/12</td>
                <td>$571,46</td>
              </tr>
              <tr>
                <td>Clementina</td>
                <td>5957 Hagenes Falls</td>
                <td>Anaishaven</td>
                <td>45</td>
                <td>2013/11/12</td>
                <td>$684,588</td>
              </tr>
              <tr>
                <td>Johanna.Thiel</td>
                <td>4301 Trever Radial</td>
                <td>Lake Augustineton</td>
                <td>67</td>
                <td>2013/12/27</td>
                <td>$608,507</td>
              </tr>
              <tr>
                <td>Elliott_Becker</td>
                <td>8417 Orion Parkway</td>
                <td>Streichside</td>
                <td>83</td>
                <td>2014/08/28</td>
                <td>$447,592</td>
              </tr>
              <tr>
                <td>Yasmine</td>
                <td>67284 Kreiger Freeway</td>
                <td>Stoltenbergside</td>
                <td>8</td>
                <td>2014/12/12</td>
                <td>$358,369</td>
              </tr>
              <tr>
                <td>Ada.Hoppe</td>
                <td>69842 Peyton Viaduct</td>
                <td>South Geovannyburgh</td>
                <td>89</td>
                <td>2013/05/13</td>
                <td>$211,76</td>
              </tr>
              <tr>
                <td>Sammie</td>
                <td>46406 Powlowski Common</td>
                <td>Cristmouth</td>
                <td>51</td>
                <td>2014/03/29</td>
                <td>$345,739</td>
              </tr>
              <tr>
                <td>Terrance.Borer</td>
                <td>1568 Richmond Bypass</td>
                <td>Schillerfort</td>
                <td>46</td>
                <td>2014/10/27</td>
                <td>$634,073</td>
              </tr>
              <tr>
                <td>August</td>
                <td>731 Stiedemann Crossing</td>
                <td>Rolfsonborough</td>
                <td>98</td>
                <td>2013/11/12</td>
                <td>$203,952</td>
              </tr>
              <tr>
                <td>Mckenna.Herman</td>
                <td>63204 Hegmann Keys</td>
                <td>New Isobelview</td>
                <td>2</td>
                <td>2013/08/12</td>
                <td>$702,091</td>
              </tr>
              <tr>
                <td>Adrianna_Durgan</td>
                <td>75151 Kshlerin Square</td>
                <td>North Elwynfurt</td>
                <td>25</td>
                <td>2014/02/26</td>
                <td>$481,980</td>
              </tr>
              <tr>
                <td>Heath.Ryan</td>
                <td>6778 Howe Route</td>
                <td>Antwanbury</td>
                <td>90</td>
                <td>2013/08/12</td>
                <td>$569,723</td>
              </tr>
              <tr>
                <td>Alisa</td>
                <td>64838 D&#x27;Amore Cove</td>
                <td>Port Lempi</td>
                <td>25</td>
                <td>2015/04/28</td>
                <td>$226,459</td>
              </tr>
              <tr>
                <td>Treva</td>
                <td>308 Octavia Roads</td>
                <td>East Eunaton</td>
                <td>37</td>
                <td>2014/12/12</td>
                <td>$746,921</td>
              </tr>
              <tr>
                <td>Myriam_Nicolas</td>
                <td>760 Hickle Causeway</td>
                <td>Lake Nickolasshire</td>
                <td>69</td>
                <td>2014/05/13</td>
                <td>$293,786</td>
              </tr>
              <tr>
                <td>Gerhard</td>
                <td>893 Mara Parkway</td>
                <td>Elmermouth</td>
                <td>32</td>
                <td>2014/11/27</td>
                <td>$856,275</td>
              </tr>
              <tr>
                <td>Monica</td>
                <td>0039 Heath Plain</td>
                <td>West Bentonhaven</td>
                <td>80</td>
                <td>2015/05/13</td>
                <td>$821,600</td>
              </tr>
              <tr>
                <td>Lacey</td>
                <td>995 Lang Springs</td>
                <td>Cordellburgh</td>
                <td>94</td>
                <td>2014/11/27</td>
                <td>$990,291</td>
              </tr>
              <tr>
                <td>Bret</td>
                <td>282 Susana Heights</td>
                <td>Kaneport</td>
                <td>47</td>
                <td>2013/05/28</td>
                <td>$445,494</td>
              </tr>
              <tr>
                <td>Jennie</td>
                <td>755 Greyson Key</td>
                <td>East Jazmyne</td>
                <td>94</td>
                <td>2015/03/29</td>
                <td>$530,408</td>
              </tr>
              <tr>
                <td>Emerson</td>
                <td>784 Adriel Radial</td>
                <td>New Jerroldland</td>
                <td>4</td>
                <td>2014/02/26</td>
                <td>$805,823</td>
              </tr>
              <tr>
                <td>Herta</td>
                <td>7491 Bednar Gardens</td>
                <td>Port Lucianoton</td>
                <td>23</td>
                <td>2013/10/12</td>
                <td>$352,269</td>
              </tr>
              <tr>
                <td>Stone_Deckow</td>
                <td>6440 Moen Loop</td>
                <td>Jenningsbury</td>
                <td>23</td>
                <td>2014/07/28</td>
                <td>$219,573</td>
              </tr>
              <tr>
                <td>Davin</td>
                <td>50922 Kiara Square</td>
                <td>Port Edmund</td>
                <td>37</td>
                <td>2014/11/27</td>
                <td>$241,432</td>
              </tr>
              <tr>
                <td>Johnathan_Mraz</td>
                <td>1998 Webster Fords</td>
                <td>East Vern</td>
                <td>50</td>
                <td>2014/09/12</td>
                <td>$290,875</td>
              </tr>
              <tr>
                <td>Gunnar</td>
                <td>92873 Barney Club</td>
                <td>Beierview</td>
                <td>82</td>
                <td>2014/03/29</td>
                <td>$569,778</td>
              </tr>
              <tr>
                <td>Raina</td>
                <td>828 Cathy Streets</td>
                <td>West Uriahville</td>
                <td>26</td>
                <td>2013/09/27</td>
                <td>$186,229</td>
              </tr>
              <tr>
                <td>Marjorie.Orn</td>
                <td>314 Aurore Canyon</td>
                <td>Port Jaquelineburgh</td>
                <td>3</td>
                <td>2014/06/28</td>
                <td>$547,752</td>
              </tr>
              <tr>
                <td>Citlalli_Wehner</td>
                <td>139 Ebert Freeway</td>
                <td>Lake Esperanzamouth</td>
                <td>78</td>
                <td>2015/01/27</td>
                <td>$892,012</td>
              </tr>
              <tr>
                <td>Ruben.Reilly</td>
                <td>02868 Cronin Tunnel</td>
                <td>Rossieville</td>
                <td>87</td>
                <td>2013/09/12</td>
                <td>$520,483</td>
              </tr>
              <tr>
                <td>Gunner_Jakubowski</td>
                <td>80391 Maxwell Parks</td>
                <td>South Travon</td>
                <td>26</td>
                <td>2014/03/29</td>
                <td>$272,005</td>
              </tr>
              <tr>
                <td>Josephine</td>
                <td>36238 Satterfield Avenue</td>
                <td>New Alexanderhaven</td>
                <td>51</td>
                <td>2015/01/27</td>
                <td>$189,18</td>
              </tr>
              <tr>
                <td>Ceasar_Orn</td>
                <td>2795 Clement Ridges</td>
                <td>Beckerhaven</td>
                <td>78</td>
                <td>2013/11/27</td>
                <td>$958,117</td>
              </tr>
              <tr>
                <td>Coby</td>
                <td>53700 Pagac Lodge</td>
                <td>South Hershel</td>
                <td>86</td>
                <td>2013/08/28</td>
                <td>$481,619</td>
              </tr>
              <tr>
                <td>Colin</td>
                <td>637 Paucek Mountain</td>
                <td>West Luraberg</td>
                <td>77</td>
                <td>2015/02/26</td>
                <td>$298,110</td>
              </tr>
              <tr>
                <td>Monique_White</td>
                <td>415 Corkery Walks</td>
                <td>West Lauryn</td>
                <td>97</td>
                <td>2014/02/11</td>
                <td>$222,343</td>
              </tr>
              <tr>
                <td>Jarvis.Simonis</td>
                <td>0778 Elvis Spurs</td>
                <td>Harrisfurt</td>
                <td>62</td>
                <td>2013/05/28</td>
                <td>$336,046</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <!-- End Panel Basic -->

      <!-- Panel Table Individual column searching -->
      <div class="panel">
        <header class="panel-heading">
          <h3 class="panel-title">Individual Column Searching</h3>
        </header>
        <div class="panel-body">
          <table class="table table-hover dataTable table-striped width-full" id="exampleTableSearch">
            <thead>
              <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
              </tr>
            </tfoot>
            <tbody>
              <tr>
                <td>Kate</td>
                <td>5516 Adolfo Rode</td>
                <td>Littelhaven</td>
                <td>26</td>
                <td>2014/06/13</td>
                <td>$635,852</td>
              </tr>
              <tr>
                <td>Torrey</td>
                <td>3658 Richie Street</td>
                <td>West Sedrickstad</td>
                <td>28</td>
                <td>2014/09/12</td>
                <td>$243,577</td>
              </tr>
              <tr>
                <td>Jolin</td>
                <td>39 Hirthe Squares</td>
                <td>Ryleetown</td>
                <td>17</td>
                <td>2013/09/27</td>
                <td>$784,802</td>
              </tr>
              <tr>
                <td>Wilhelmine</td>
                <td>054 O&#x27;Hara Union</td>
                <td>Dibbertfurt</td>
                <td>35</td>
                <td>2013/06/28</td>
                <td>$254,987</td>
              </tr>
              <tr>
                <td>Hubeen</td>
                <td>8884 Jamel Pines</td>
                <td>Howemouth</td>
                <td>51</td>
                <td>2013/05/28</td>
                <td>$584,032</td>
              </tr>
              <tr>
                <td>Gerhold</td>
                <td>098 Noel Way</td>
                <td>Santinoland</td>
                <td>19</td>
                <td>2014/12/12</td>
                <td>$145,088</td>
              </tr>
              <tr>
                <td>Chester</td>
                <td>14095 Kling Gateway</td>
                <td>Andresmouth</td>
                <td>21</td>
                <td>2014/09/27</td>
                <td>$177,404</td>
              </tr>
              <tr>
                <td>Melany</td>
                <td>1100 Steve Pines</td>
                <td>Immanuelfort</td>
                <td>12</td>
                <td>2014/06/28</td>
                <td>$162,453</td>
              </tr>
              <tr>
                <td>Thea</td>
                <td>26114 Narciso Lodge</td>
                <td>East Opal</td>
                <td>64</td>
                <td>2014/11/12</td>
                <td>$581,736</td>
              </tr>
              <tr>
                <td>Kreiger</td>
                <td>111 Hershel Stream</td>
                <td>Hermannborough</td>
                <td>36</td>
                <td>2013/11/27</td>
                <td>$921,021</td>
              </tr>
              <tr>
                <td>Shanel</td>
                <td>7579 Santa Forest</td>
                <td>Jordaneville</td>
                <td>14</td>
                <td>2015/04/28</td>
                <td>$818,20</td>
              </tr>
              <tr>
                <td>Mueller</td>
                <td>083 Kshlerin Forest</td>
                <td>Clintmouth</td>
                <td>18</td>
                <td>2013/10/12</td>
                <td>$571,46</td>
              </tr>
              <tr>
                <td>Clementina</td>
                <td>5957 Hagenes Falls</td>
                <td>Anaishaven</td>
                <td>45</td>
                <td>2013/11/12</td>
                <td>$684,588</td>
              </tr>
              <tr>
                <td>Johanna</td>
                <td>4301 Trever Radial</td>
                <td>Lake Augustineton</td>
                <td>67</td>
                <td>2013/12/27</td>
                <td>$608,507</td>
              </tr>
              <tr>
                <td>Elliottr</td>
                <td>8417 Orion Parkway</td>
                <td>Streichside</td>
                <td>34</td>
                <td>2014/08/28</td>
                <td>$447,592</td>
              </tr>
              <tr>
                <td>Yasmine</td>
                <td>67284 Kreiger Freeway</td>
                <td>Stoltenbergside</td>
                <td>18</td>
                <td>2014/12/12</td>
                <td>$358,369</td>
              </tr>
              <tr>
                <td>AdaHoppe</td>
                <td>69842 Peyton Viaduct</td>
                <td>South Geovannyburgh</td>
                <td>36</td>
                <td>2013/05/13</td>
                <td>$211,76</td>
              </tr>
              <tr>
                <td>Sammie</td>
                <td>46406 Powlowski Common</td>
                <td>Cristmouth</td>
                <td>51</td>
                <td>2014/03/29</td>
                <td>$345,739</td>
              </tr>
              <tr>
                <td>Terrance</td>
                <td>1568 Richmond Bypass</td>
                <td>Schillerfort</td>
                <td>46</td>
                <td>2014/10/27</td>
                <td>$634,073</td>
              </tr>
              <tr>
                <td>August</td>
                <td>731 Stiedemann Crossing</td>
                <td>Rolfsonborough</td>
                <td>36</td>
                <td>2013/11/12</td>
                <td>$203,952</td>
              </tr>
              <tr>
                <td>Mckenna</td>
                <td>63204 Hegmann Keys</td>
                <td>New Isobelview</td>
                <td>2</td>
                <td>2013/08/12</td>
                <td>$702,091</td>
              </tr>
              <tr>
                <td>Adrianna</td>
                <td>75151 Kshlerin Square</td>
                <td>North Elwynfurt</td>
                <td>25</td>
                <td>2014/02/26</td>
                <td>$481,980</td>
              </tr>
              <tr>
                <td>Heath</td>
                <td>6778 Howe Route</td>
                <td>Antwanbury</td>
                <td>32</td>
                <td>2013/08/12</td>
                <td>$569,723</td>
              </tr>
              <tr>
                <td>Alisa</td>
                <td>64838 D&#x27;Amore Cove</td>
                <td>Port Lempi</td>
                <td>25</td>
                <td>2015/04/28</td>
                <td>$226,459</td>
              </tr>
              <tr>
                <td>Treva</td>
                <td>308 Octavia Roads</td>
                <td>East Eunaton</td>
                <td>37</td>
                <td>2014/12/12</td>
                <td>$746,921</td>
              </tr>
              <tr>
                <td>Nicolas</td>
                <td>760 Hickle Causeway</td>
                <td>Lake Nickolasshire</td>
                <td>69</td>
                <td>2014/05/13</td>
                <td>$293,786</td>
              </tr>
              <tr>
                <td>Gerhard</td>
                <td>893 Mara Parkway</td>
                <td>Elmermouth</td>
                <td>32</td>
                <td>2014/11/27</td>
                <td>$856,275</td>
              </tr>
              <tr>
                <td>Monica</td>
                <td>0039 Heath Plain</td>
                <td>West Bentonhaven</td>
                <td>46</td>
                <td>2015/05/13</td>
                <td>$821,600</td>
              </tr>
              <tr>
                <td>Lacey</td>
                <td>995 Lang Springs</td>
                <td>Cordellburgh</td>
                <td>41</td>
                <td>2014/11/27</td>
                <td>$990,291</td>
              </tr>
              <tr>
                <td>Bret</td>
                <td>282 Susana Heights</td>
                <td>Kaneport</td>
                <td>47</td>
                <td>2013/05/28</td>
                <td>$445,494</td>
              </tr>
              <tr>
                <td>Jennie</td>
                <td>755 Greyson Key</td>
                <td>East Jazmyne</td>
                <td>52</td>
                <td>2015/03/29</td>
                <td>$530,408</td>
              </tr>
              <tr>
                <td>Emerson</td>
                <td>784 Adriel Radial</td>
                <td>New Jerroldland</td>
                <td>4</td>
                <td>2014/02/26</td>
                <td>$805,823</td>
              </tr>
              <tr>
                <td>Herta</td>
                <td>7491 Bednar Gardens</td>
                <td>Port Lucianoton</td>
                <td>23</td>
                <td>2013/10/12</td>
                <td>$352,269</td>
              </tr>
              <tr>
                <td>Deckow</td>
                <td>6440 Moen Loop</td>
                <td>Jenningsbury</td>
                <td>23</td>
                <td>2014/07/28</td>
                <td>$219,573</td>
              </tr>
              <tr>
                <td>Davin</td>
                <td>50922 Kiara Square</td>
                <td>Port Edmund</td>
                <td>37</td>
                <td>2014/11/27</td>
                <td>$241,432</td>
              </tr>
              <tr>
                <td>Johnathan</td>
                <td>1998 Webster Fords</td>
                <td>East Vern</td>
                <td>50</td>
                <td>2014/09/12</td>
                <td>$290,875</td>
              </tr>
              <tr>
                <td>Gunnar</td>
                <td>92873 Barney Club</td>
                <td>Beierview</td>
                <td>82</td>
                <td>2014/03/29</td>
                <td>$569,778</td>
              </tr>
              <tr>
                <td>Raina</td>
                <td>828 Cathy Streets</td>
                <td>West Uriahville</td>
                <td>26</td>
                <td>2013/09/27</td>
                <td>$186,229</td>
              </tr>
              <tr>
                <td>Marjorie</td>
                <td>314 Aurore Canyon</td>
                <td>Port Jaquelineburgh</td>
                <td>3</td>
                <td>2014/06/28</td>
                <td>$547,752</td>
              </tr>
              <tr>
                <td>Citlalli</td>
                <td>139 Ebert Freeway</td>
                <td>Lake Esperanzamouth</td>
                <td>78</td>
                <td>2015/01/27</td>
                <td>$892,012</td>
              </tr>
              <tr>
                <td>Ruben</td>
                <td>02868 Cronin Tunnel</td>
                <td>Rossieville</td>
                <td>87</td>
                <td>2013/09/12</td>
                <td>$520,483</td>
              </tr>
              <tr>
                <td>Jakubowski</td>
                <td>80391 Maxwell Parks</td>
                <td>South Travon</td>
                <td>26</td>
                <td>2014/03/29</td>
                <td>$272,005</td>
              </tr>
              <tr>
                <td>Josephine</td>
                <td>36238 Satterfield Avenue</td>
                <td>New Alexanderhaven</td>
                <td>51</td>
                <td>2015/01/27</td>
                <td>$189,18</td>
              </tr>
              <tr>
                <td>Ceasar</td>
                <td>2795 Clement Ridges</td>
                <td>Beckerhaven</td>
                <td>78</td>
                <td>2013/11/27</td>
                <td>$958,117</td>
              </tr>
              <tr>
                <td>Coby</td>
                <td>53700 Pagac Lodge</td>
                <td>South Hershel</td>
                <td>86</td>
                <td>2013/08/28</td>
                <td>$481,619</td>
              </tr>
              <tr>
                <td>Colin</td>
                <td>637 Paucek Mountain</td>
                <td>West Luraberg</td>
                <td>77</td>
                <td>2015/02/26</td>
                <td>$298,110</td>
              </tr>
              <tr>
                <td>Monique</td>
                <td>415 Corkery Walks</td>
                <td>West Lauryn</td>
                <td>15</td>
                <td>2014/02/11</td>
                <td>$222,343</td>
              </tr>
              <tr>
                <td>Simonis</td>
                <td>0778 Elvis Spurs</td>
                <td>Harrisfurt</td>
                <td>62</td>
                <td>2013/05/28</td>
                <td>$336,046</td>
              </tr>
              <tr>
                <td>Afton</td>
                <td>57724 Ernser Crossroad</td>
                <td>Lake Charity</td>
                <td>30</td>
                <td>2015/04/28</td>
                <td>$597,775</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <!-- End Panel Table Individual column searching -->

      <!-- Panel Table Tools -->
      <div class="panel">
        <header class="panel-heading">
          <h3 class="panel-title">Table Tools</h3>
        </header>
        <div class="panel-body">
          <table class="table table-hover dataTable table-striped width-full" id="exampleTableTools">
            <thead>
              <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
              </tr>
            </tfoot>
            <tbody>
              <tr>
                <td>Kate</td>
                <td>5516 Adolfo Rode</td>
                <td>Littelhaven</td>
                <td>26</td>
                <td>2014/06/13</td>
                <td>$635,852</td>
              </tr>
              <tr>
                <td>Torrey</td>
                <td>3658 Richie Street</td>
                <td>West Sedrickstad</td>
                <td>28</td>
                <td>2014/09/12</td>
                <td>$243,577</td>
              </tr>
              <tr>
                <td>Jolin</td>
                <td>39 Hirthe Squares</td>
                <td>Ryleetown</td>
                <td>17</td>
                <td>2013/09/27</td>
                <td>$784,802</td>
              </tr>
              <tr>
                <td>Wilhelmine</td>
                <td>054 O&#x27;Hara Union</td>
                <td>Dibbertfurt</td>
                <td>35</td>
                <td>2013/06/28</td>
                <td>$254,987</td>
              </tr>
              <tr>
                <td>Hubeen</td>
                <td>8884 Jamel Pines</td>
                <td>Howemouth</td>
                <td>51</td>
                <td>2013/05/28</td>
                <td>$584,032</td>
              </tr>
              <tr>
                <td>Gerhold</td>
                <td>098 Noel Way</td>
                <td>Santinoland</td>
                <td>19</td>
                <td>2014/12/12</td>
                <td>$145,088</td>
              </tr>
              <tr>
                <td>Chester</td>
                <td>14095 Kling Gateway</td>
                <td>Andresmouth</td>
                <td>21</td>
                <td>2014/09/27</td>
                <td>$177,404</td>
              </tr>
              <tr>
                <td>Melany</td>
                <td>1100 Steve Pines</td>
                <td>Immanuelfort</td>
                <td>12</td>
                <td>2014/06/28</td>
                <td>$162,453</td>
              </tr>
              <tr>
                <td>Thea</td>
                <td>26114 Narciso Lodge</td>
                <td>East Opal</td>
                <td>64</td>
                <td>2014/11/12</td>
                <td>$581,736</td>
              </tr>
              <tr>
                <td>Kreiger</td>
                <td>111 Hershel Stream</td>
                <td>Hermannborough</td>
                <td>36</td>
                <td>2013/11/27</td>
                <td>$921,021</td>
              </tr>
              <tr>
                <td>Shanel</td>
                <td>7579 Santa Forest</td>
                <td>Jordaneville</td>
                <td>14</td>
                <td>2015/04/28</td>
                <td>$818,20</td>
              </tr>
              <tr>
                <td>Mueller</td>
                <td>083 Kshlerin Forest</td>
                <td>Clintmouth</td>
                <td>18</td>
                <td>2013/10/12</td>
                <td>$571,46</td>
              </tr>
              <tr>
                <td>Clementina</td>
                <td>5957 Hagenes Falls</td>
                <td>Anaishaven</td>
                <td>45</td>
                <td>2013/11/12</td>
                <td>$684,588</td>
              </tr>
              <tr>
                <td>Johanna</td>
                <td>4301 Trever Radial</td>
                <td>Lake Augustineton</td>
                <td>67</td>
                <td>2013/12/27</td>
                <td>$608,507</td>
              </tr>
              <tr>
                <td>Elliottr</td>
                <td>8417 Orion Parkway</td>
                <td>Streichside</td>
                <td>34</td>
                <td>2014/08/28</td>
                <td>$447,592</td>
              </tr>
              <tr>
                <td>Yasmine</td>
                <td>67284 Kreiger Freeway</td>
                <td>Stoltenbergside</td>
                <td>18</td>
                <td>2014/12/12</td>
                <td>$358,369</td>
              </tr>
              <tr>
                <td>AdaHoppe</td>
                <td>69842 Peyton Viaduct</td>
                <td>South Geovannyburgh</td>
                <td>36</td>
                <td>2013/05/13</td>
                <td>$211,76</td>
              </tr>
              <tr>
                <td>Sammie</td>
                <td>46406 Powlowski Common</td>
                <td>Cristmouth</td>
                <td>51</td>
                <td>2014/03/29</td>
                <td>$345,739</td>
              </tr>
              <tr>
                <td>Terrance</td>
                <td>1568 Richmond Bypass</td>
                <td>Schillerfort</td>
                <td>46</td>
                <td>2014/10/27</td>
                <td>$634,073</td>
              </tr>
              <tr>
                <td>August</td>
                <td>731 Stiedemann Crossing</td>
                <td>Rolfsonborough</td>
                <td>36</td>
                <td>2013/11/12</td>
                <td>$203,952</td>
              </tr>
              <tr>
                <td>Mckenna</td>
                <td>63204 Hegmann Keys</td>
                <td>New Isobelview</td>
                <td>2</td>
                <td>2013/08/12</td>
                <td>$702,091</td>
              </tr>
              <tr>
                <td>Adrianna</td>
                <td>75151 Kshlerin Square</td>
                <td>North Elwynfurt</td>
                <td>25</td>
                <td>2014/02/26</td>
                <td>$481,980</td>
              </tr>
              <tr>
                <td>Heath</td>
                <td>6778 Howe Route</td>
                <td>Antwanbury</td>
                <td>32</td>
                <td>2013/08/12</td>
                <td>$569,723</td>
              </tr>
              <tr>
                <td>Alisa</td>
                <td>64838 D&#x27;Amore Cove</td>
                <td>Port Lempi</td>
                <td>25</td>
                <td>2015/04/28</td>
                <td>$226,459</td>
              </tr>
              <tr>
                <td>Treva</td>
                <td>308 Octavia Roads</td>
                <td>East Eunaton</td>
                <td>37</td>
                <td>2014/12/12</td>
                <td>$746,921</td>
              </tr>
              <tr>
                <td>Nicolas</td>
                <td>760 Hickle Causeway</td>
                <td>Lake Nickolasshire</td>
                <td>69</td>
                <td>2014/05/13</td>
                <td>$293,786</td>
              </tr>
              <tr>
                <td>Gerhard</td>
                <td>893 Mara Parkway</td>
                <td>Elmermouth</td>
                <td>32</td>
                <td>2014/11/27</td>
                <td>$856,275</td>
              </tr>
              <tr>
                <td>Monica</td>
                <td>0039 Heath Plain</td>
                <td>West Bentonhaven</td>
                <td>46</td>
                <td>2015/05/13</td>
                <td>$821,600</td>
              </tr>
              <tr>
                <td>Lacey</td>
                <td>995 Lang Springs</td>
                <td>Cordellburgh</td>
                <td>41</td>
                <td>2014/11/27</td>
                <td>$990,291</td>
              </tr>
              <tr>
                <td>Bret</td>
                <td>282 Susana Heights</td>
                <td>Kaneport</td>
                <td>47</td>
                <td>2013/05/28</td>
                <td>$445,494</td>
              </tr>
              <tr>
                <td>Jennie</td>
                <td>755 Greyson Key</td>
                <td>East Jazmyne</td>
                <td>52</td>
                <td>2015/03/29</td>
                <td>$530,408</td>
              </tr>
              <tr>
                <td>Emerson</td>
                <td>784 Adriel Radial</td>
                <td>New Jerroldland</td>
                <td>4</td>
                <td>2014/02/26</td>
                <td>$805,823</td>
              </tr>
              <tr>
                <td>Herta</td>
                <td>7491 Bednar Gardens</td>
                <td>Port Lucianoton</td>
                <td>23</td>
                <td>2013/10/12</td>
                <td>$352,269</td>
              </tr>
              <tr>
                <td>Deckow</td>
                <td>6440 Moen Loop</td>
                <td>Jenningsbury</td>
                <td>23</td>
                <td>2014/07/28</td>
                <td>$219,573</td>
              </tr>
              <tr>
                <td>Davin</td>
                <td>50922 Kiara Square</td>
                <td>Port Edmund</td>
                <td>37</td>
                <td>2014/11/27</td>
                <td>$241,432</td>
              </tr>
              <tr>
                <td>Johnathan</td>
                <td>1998 Webster Fords</td>
                <td>East Vern</td>
                <td>50</td>
                <td>2014/09/12</td>
                <td>$290,875</td>
              </tr>
              <tr>
                <td>Gunnar</td>
                <td>92873 Barney Club</td>
                <td>Beierview</td>
                <td>82</td>
                <td>2014/03/29</td>
                <td>$569,778</td>
              </tr>
              <tr>
                <td>Raina</td>
                <td>828 Cathy Streets</td>
                <td>West Uriahville</td>
                <td>26</td>
                <td>2013/09/27</td>
                <td>$186,229</td>
              </tr>
              <tr>
                <td>Marjorie</td>
                <td>314 Aurore Canyon</td>
                <td>Port Jaquelineburgh</td>
                <td>3</td>
                <td>2014/06/28</td>
                <td>$547,752</td>
              </tr>
              <tr>
                <td>Citlalli</td>
                <td>139 Ebert Freeway</td>
                <td>Lake Esperanzamouth</td>
                <td>78</td>
                <td>2015/01/27</td>
                <td>$892,012</td>
              </tr>
              <tr>
                <td>Ruben</td>
                <td>02868 Cronin Tunnel</td>
                <td>Rossieville</td>
                <td>87</td>
                <td>2013/09/12</td>
                <td>$520,483</td>
              </tr>
              <tr>
                <td>Jakubowski</td>
                <td>80391 Maxwell Parks</td>
                <td>South Travon</td>
                <td>26</td>
                <td>2014/03/29</td>
                <td>$272,005</td>
              </tr>
              <tr>
                <td>Josephine</td>
                <td>36238 Satterfield Avenue</td>
                <td>New Alexanderhaven</td>
                <td>51</td>
                <td>2015/01/27</td>
                <td>$189,18</td>
              </tr>
              <tr>
                <td>Ceasar</td>
                <td>2795 Clement Ridges</td>
                <td>Beckerhaven</td>
                <td>78</td>
                <td>2013/11/27</td>
                <td>$958,117</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <!-- End Panel Table Tools -->

      <!-- Panel Table Add Row -->
      <div class="panel">
        <header class="panel-heading">
          <h3 class="panel-title">Add Row</h3>
        </header>
        <div id="exampleTableAddToolbar">
          <button id="exampleTableAddBtn" class="btn btn-outline btn-primary" type="button">
            <i class="icon wb-plus" aria-hidden="true"></i> Add row
          </button>
        </div>
        <div class="panel-body">
          <table class="table table-hover dataTable table-striped width-full" id="exampleTableAdd">
            <thead>
              <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
              </tr>
            </tfoot>
            <tbody>
              <tr>
                <td>Kate</td>
                <td>5516 Adolfo Rode</td>
                <td>Littelhaven</td>
                <td>26</td>
                <td>2014/06/13</td>
                <td>$635,852</td>
              </tr>
              <tr>
                <td>Torrey</td>
                <td>3658 Richie Street</td>
                <td>West Sedrickstad</td>
                <td>28</td>
                <td>2014/09/12</td>
                <td>$243,577</td>
              </tr>
              <tr>
                <td>Jolin</td>
                <td>39 Hirthe Squares</td>
                <td>Ryleetown</td>
                <td>17</td>
                <td>2013/09/27</td>
                <td>$784,802</td>
              </tr>
              <tr>
                <td>Wilhelmine</td>
                <td>054 O&#x27;Hara Union</td>
                <td>Dibbertfurt</td>
                <td>35</td>
                <td>2013/06/28</td>
                <td>$254,987</td>
              </tr>
              <tr>
                <td>Hubeen</td>
                <td>8884 Jamel Pines</td>
                <td>Howemouth</td>
                <td>51</td>
                <td>2013/05/28</td>
                <td>$584,032</td>
              </tr>
              <tr>
                <td>Gerhold</td>
                <td>098 Noel Way</td>
                <td>Santinoland</td>
                <td>19</td>
                <td>2014/12/12</td>
                <td>$145,088</td>
              </tr>
              <tr>
                <td>Chester</td>
                <td>14095 Kling Gateway</td>
                <td>Andresmouth</td>
                <td>21</td>
                <td>2014/09/27</td>
                <td>$177,404</td>
              </tr>
              <tr>
                <td>Melany</td>
                <td>1100 Steve Pines</td>
                <td>Immanuelfort</td>
                <td>12</td>
                <td>2014/06/28</td>
                <td>$162,453</td>
              </tr>
              <tr>
                <td>Thea</td>
                <td>26114 Narciso Lodge</td>
                <td>East Opal</td>
                <td>64</td>
                <td>2014/11/12</td>
                <td>$581,736</td>
              </tr>
              <tr>
                <td>Kreiger</td>
                <td>111 Hershel Stream</td>
                <td>Hermannborough</td>
                <td>36</td>
                <td>2013/11/27</td>
                <td>$921,021</td>
              </tr>
              <tr>
                <td>Shanel</td>
                <td>7579 Santa Forest</td>
                <td>Jordaneville</td>
                <td>14</td>
                <td>2015/04/28</td>
                <td>$818,20</td>
              </tr>
              <tr>
                <td>Mueller</td>
                <td>083 Kshlerin Forest</td>
                <td>Clintmouth</td>
                <td>18</td>
                <td>2013/10/12</td>
                <td>$571,46</td>
              </tr>
              <tr>
                <td>Clementina</td>
                <td>5957 Hagenes Falls</td>
                <td>Anaishaven</td>
                <td>45</td>
                <td>2013/11/12</td>
                <td>$684,588</td>
              </tr>
              <tr>
                <td>Johanna</td>
                <td>4301 Trever Radial</td>
                <td>Lake Augustineton</td>
                <td>67</td>
                <td>2013/12/27</td>
                <td>$608,507</td>
              </tr>
              <tr>
                <td>Elliottr</td>
                <td>8417 Orion Parkway</td>
                <td>Streichside</td>
                <td>34</td>
                <td>2014/08/28</td>
                <td>$447,592</td>
              </tr>
              <tr>
                <td>Yasmine</td>
                <td>67284 Kreiger Freeway</td>
                <td>Stoltenbergside</td>
                <td>18</td>
                <td>2014/12/12</td>
                <td>$358,369</td>
              </tr>
              <tr>
                <td>BdaHoppe</td>
                <td>69842 Peyton Viaduct</td>
                <td>South Geovannyburgh</td>
                <td>36</td>
                <td>2013/05/13</td>
                <td>$211,76</td>
              </tr>
              <tr>
                <td>Sammie</td>
                <td>46406 Powlowski Common</td>
                <td>Cristmouth</td>
                <td>51</td>
                <td>2014/03/29</td>
                <td>$345,739</td>
              </tr>
              <tr>
                <td>Terrance</td>
                <td>1568 Richmond Bypass</td>
                <td>Schillerfort</td>
                <td>46</td>
                <td>2014/10/27</td>
                <td>$634,073</td>
              </tr>
              <tr>
                <td>August</td>
                <td>731 Stiedemann Crossing</td>
                <td>Rolfsonborough</td>
                <td>36</td>
                <td>2013/11/12</td>
                <td>$203,952</td>
              </tr>
              <tr>
                <td>Mckenna</td>
                <td>63204 Hegmann Keys</td>
                <td>New Isobelview</td>
                <td>2</td>
                <td>2013/08/12</td>
                <td>$702,091</td>
              </tr>
              <tr>
                <td>Adrianna</td>
                <td>75151 Kshlerin Square</td>
                <td>North Elwynfurt</td>
                <td>25</td>
                <td>2014/02/26</td>
                <td>$481,980</td>
              </tr>
              <tr>
                <td>Heath</td>
                <td>6778 Howe Route</td>
                <td>Antwanbury</td>
                <td>32</td>
                <td>2013/08/12</td>
                <td>$569,723</td>
              </tr>
              <tr>
                <td>Alisa</td>
                <td>64838 D&#x27;Amore Cove</td>
                <td>Port Lempi</td>
                <td>25</td>
                <td>2015/04/28</td>
                <td>$226,459</td>
              </tr>
              <tr>
                <td>Treva</td>
                <td>308 Octavia Roads</td>
                <td>East Eunaton</td>
                <td>37</td>
                <td>2014/12/12</td>
                <td>$746,921</td>
              </tr>
              <tr>
                <td>Nicolas</td>
                <td>760 Hickle Causeway</td>
                <td>Lake Nickolasshire</td>
                <td>69</td>
                <td>2014/05/13</td>
                <td>$293,786</td>
              </tr>
              <tr>
                <td>Gerhard</td>
                <td>893 Mara Parkway</td>
                <td>Elmermouth</td>
                <td>32</td>
                <td>2014/11/27</td>
                <td>$856,275</td>
              </tr>
              <tr>
                <td>Monica</td>
                <td>0039 Heath Plain</td>
                <td>West Bentonhaven</td>
                <td>46</td>
                <td>2015/05/13</td>
                <td>$821,600</td>
              </tr>
              <tr>
                <td>Lacey</td>
                <td>995 Lang Springs</td>
                <td>Cordellburgh</td>
                <td>41</td>
                <td>2014/11/27</td>
                <td>$990,291</td>
              </tr>
              <tr>
                <td>Bret</td>
                <td>282 Susana Heights</td>
                <td>Kaneport</td>
                <td>47</td>
                <td>2013/05/28</td>
                <td>$445,494</td>
              </tr>
              <tr>
                <td>Jennie</td>
                <td>755 Greyson Key</td>
                <td>East Jazmyne</td>
                <td>52</td>
                <td>2015/03/29</td>
                <td>$530,408</td>
              </tr>
              <tr>
                <td>Emerson</td>
                <td>784 Adriel Radial</td>
                <td>New Jerroldland</td>
                <td>4</td>
                <td>2014/02/26</td>
                <td>$805,823</td>
              </tr>
              <tr>
                <td>Herta</td>
                <td>7491 Bednar Gardens</td>
                <td>Port Lucianoton</td>
                <td>23</td>
                <td>2013/10/12</td>
                <td>$352,269</td>
              </tr>
              <tr>
                <td>Deckow</td>
                <td>6440 Moen Loop</td>
                <td>Jenningsbury</td>
                <td>23</td>
                <td>2014/07/28</td>
                <td>$219,573</td>
              </tr>
              <tr>
                <td>Davin</td>
                <td>50922 Kiara Square</td>
                <td>Port Edmund</td>
                <td>37</td>
                <td>2014/11/27</td>
                <td>$241,432</td>
              </tr>
              <tr>
                <td>Johnathan</td>
                <td>1998 Webster Fords</td>
                <td>East Vern</td>
                <td>50</td>
                <td>2014/09/12</td>
                <td>$290,875</td>
              </tr>
              <tr>
                <td>Gunnar</td>
                <td>92873 Barney Club</td>
                <td>Beierview</td>
                <td>82</td>
                <td>2014/03/29</td>
                <td>$569,778</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <!-- End Panel Table Add Row -->

      <!-- Panel FixedHeader -->
      <div class="panel">
        <header class="panel-heading">
          <h3 class="panel-title">
            Fixed Header
            <span class="panel-desc">
              The FixedHeader extension for DataTables will ensure that your column titles will
              scroll with the page, showing at the top of the table at all times.FixedHeader
              is initialised using the constructor <code>new $.fn.dataTable.FixedHeader();</code>
            </span>
          </h3>
        </header>
        <div class="panel-body">
          <table class="table table-hover dataTable table-striped width-full" id="exampleFixedHeader">
            <thead>
              <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Date</th>
                <th>Salary</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Date</th>
                <th>Salary</th>
              </tr>
            </tfoot>
            <tbody>
              <tr>
                <td>Damon</td>
                <td>5516 Adolfo Green</td>
                <td>Littelhaven</td>
                <td>85</td>
                <td>2014-06-12T18:22:09.795Z</td>
                <td>$553,536</td>
              </tr>
              <tr>
                <td>Torrey</td>
                <td>1995 Richie Neck</td>
                <td>West Sedrickstad</td>
                <td>77</td>
                <td>2014-09-12T00:22:09.796Z</td>
                <td>$243,577</td>
              </tr>
              <tr>
                <td>Miracle</td>
                <td>176 Hirthe Squares</td>
                <td>Ryleetown</td>
                <td>82</td>
                <td>2013-09-27T05:22:09.796Z</td>
                <td>$784,802</td>
              </tr>
              <tr>
                <td>Wilhelmine</td>
                <td>44727 O&#x27;Hara Union</td>
                <td>Dibbertfurt</td>
                <td>68</td>
                <td>2013-06-27T23:22:09.796Z</td>
                <td>$207,291</td>
              </tr>
              <tr>
                <td>Hubert</td>
                <td>8884 Jamel Pines</td>
                <td>Howemouth</td>
                <td>63</td>
                <td>2013-05-28T13:22:09.796Z</td>
                <td>$584,032</td>
              </tr>
              <tr>
                <td>Myrtie.Gerhold</td>
                <td>098 Noel Way</td>
                <td>Santinoland</td>
                <td>13</td>
                <td>2014-12-12T06:22:09.796Z</td>
                <td>$550,087</td>
              </tr>
              <tr>
                <td>Chester</td>
                <td>14095 Kling Gateway</td>
                <td>Andresmouth</td>
                <td>26</td>
                <td>2014-09-27T05:22:09.796Z</td>
                <td>$177,404</td>
              </tr>
              <tr>
                <td>Melany_Gerhold</td>
                <td>1100 Steve Pines</td>
                <td>Immanuelfort</td>
                <td>12</td>
                <td>2014-06-27T23:22:09.796Z</td>
                <td>$162,453</td>
              </tr>
              <tr>
                <td>Thea</td>
                <td>26114 Narciso Lodge</td>
                <td>East Opal</td>
                <td>64</td>
                <td>2014-11-11T20:22:09.796Z</td>
                <td>$581,736</td>
              </tr>
              <tr>
                <td>Albin.Kreiger</td>
                <td>111 Hershel Stream</td>
                <td>Hermannborough</td>
                <td>90</td>
                <td>2013-11-27T01:22:09.796Z</td>
                <td>$921,021</td>
              </tr>
              <tr>
                <td>Shanel</td>
                <td>7579 Santa Forest</td>
                <td>Jordaneville</td>
                <td>14</td>
                <td>2015-04-28T03:22:09.796Z</td>
                <td>$818,20</td>
              </tr>
              <tr>
                <td>Bell.Mueller</td>
                <td>083 Kshlerin Forest</td>
                <td>Clintmouth</td>
                <td>98</td>
                <td>2013-10-12T10:22:09.796Z</td>
                <td>$571,46</td>
              </tr>
              <tr>
                <td>Clementina</td>
                <td>5957 Hagenes Falls</td>
                <td>Anaishaven</td>
                <td>45</td>
                <td>2013-11-11T20:22:09.796Z</td>
                <td>$684,588</td>
              </tr>
              <tr>
                <td>Johanna.Thiel</td>
                <td>4301 Trever Radial</td>
                <td>Lake Augustineton</td>
                <td>67</td>
                <td>2013-12-27T11:22:09.796Z</td>
                <td>$608,507</td>
              </tr>
              <tr>
                <td>Elliott_Becker</td>
                <td>8417 Orion Parkway</td>
                <td>Streichside</td>
                <td>83</td>
                <td>2014-08-27T19:22:09.796Z</td>
                <td>$447,592</td>
              </tr>
              <tr>
                <td>Yasmine</td>
                <td>67284 Kreiger Freeway</td>
                <td>Stoltenbergside</td>
                <td>8</td>
                <td>2014-12-12T06:22:09.796Z</td>
                <td>$358,369</td>
              </tr>
              <tr>
                <td>Ada.Hoppe</td>
                <td>69842 Peyton Viaduct</td>
                <td>South Geovannyburgh</td>
                <td>89</td>
                <td>2013-05-13T08:22:09.797Z</td>
                <td>$211,76</td>
              </tr>
              <tr>
                <td>Sammie</td>
                <td>46406 Powlowski Common</td>
                <td>Cristmouth</td>
                <td>51</td>
                <td>2014-03-28T17:22:09.797Z</td>
                <td>$345,739</td>
              </tr>
              <tr>
                <td>Terrance.Borer</td>
                <td>1568 Richmond Bypass</td>
                <td>Schillerfort</td>
                <td>46</td>
                <td>2014-10-27T15:22:09.797Z</td>
                <td>$634,073</td>
              </tr>
              <tr>
                <td>August</td>
                <td>731 Stiedemann Crossing</td>
                <td>Rolfsonborough</td>
                <td>98</td>
                <td>2013-11-11T20:22:09.797Z</td>
                <td>$203,952</td>
              </tr>
              <tr>
                <td>Mckenna.Herman</td>
                <td>63204 Hegmann Keys</td>
                <td>New Isobelview</td>
                <td>2</td>
                <td>2013-08-12T14:22:09.797Z</td>
                <td>$702,091</td>
              </tr>
              <tr>
                <td>Adrianna_Durgan</td>
                <td>75151 Kshlerin Square</td>
                <td>North Elwynfurt</td>
                <td>25</td>
                <td>2014-02-26T07:22:09.797Z</td>
                <td>$481,980</td>
              </tr>
              <tr>
                <td>Heath.Ryan</td>
                <td>6778 Howe Route</td>
                <td>Antwanbury</td>
                <td>90</td>
                <td>2013-08-12T14:22:09.797Z</td>
                <td>$569,723</td>
              </tr>
              <tr>
                <td>Alisa</td>
                <td>64838 D&#x27;Amore Cove</td>
                <td>Port Lempi</td>
                <td>25</td>
                <td>2015-04-28T03:22:09.797Z</td>
                <td>$226,459</td>
              </tr>
              <tr>
                <td>Treva</td>
                <td>308 Octavia Roads</td>
                <td>East Eunaton</td>
                <td>37</td>
                <td>2014-12-12T06:22:09.798Z</td>
                <td>$746,921</td>
              </tr>
              <tr>
                <td>Myriam_Nicolas</td>
                <td>760 Hickle Causeway</td>
                <td>Lake Nickolasshire</td>
                <td>69</td>
                <td>2014-05-13T08:22:09.798Z</td>
                <td>$293,786</td>
              </tr>
              <tr>
                <td>Gerhard</td>
                <td>893 Mara Parkway</td>
                <td>Elmermouth</td>
                <td>32</td>
                <td>2014-11-27T01:22:09.798Z</td>
                <td>$856,275</td>
              </tr>
              <tr>
                <td>Monica</td>
                <td>0039 Heath Plain</td>
                <td>West Bentonhaven</td>
                <td>80</td>
                <td>2015-05-13T08:22:09.798Z</td>
                <td>$821,600</td>
              </tr>
              <tr>
                <td>Lacey</td>
                <td>995 Lang Springs</td>
                <td>Cordellburgh</td>
                <td>94</td>
                <td>2014-11-27T01:22:09.798Z</td>
                <td>$990,291</td>
              </tr>
              <tr>
                <td>Bret</td>
                <td>282 Susana Heights</td>
                <td>Kaneport</td>
                <td>47</td>
                <td>2013-05-28T13:22:09.798Z</td>
                <td>$445,494</td>
              </tr>
              <tr>
                <td>Jennie</td>
                <td>755 Greyson Key</td>
                <td>East Jazmyne</td>
                <td>94</td>
                <td>2015-03-28T17:22:09.798Z</td>
                <td>$530,408</td>
              </tr>
              <tr>
                <td>Emerson</td>
                <td>784 Adriel Radial</td>
                <td>New Jerroldland</td>
                <td>4</td>
                <td>2014-02-26T07:22:09.798Z</td>
                <td>$805,823</td>
              </tr>
              <tr>
                <td>Herta</td>
                <td>7491 Bednar Gardens</td>
                <td>Port Lucianoton</td>
                <td>23</td>
                <td>2013-10-12T10:22:09.798Z</td>
                <td>$352,269</td>
              </tr>
              <tr>
                <td>Stone_Deckow</td>
                <td>6440 Moen Loop</td>
                <td>Jenningsbury</td>
                <td>23</td>
                <td>2014-07-28T09:22:09.798Z</td>
                <td>$219,573</td>
              </tr>
              <tr>
                <td>Davin</td>
                <td>50922 Kiara Square</td>
                <td>Port Edmund</td>
                <td>37</td>
                <td>2014-11-27T01:22:09.798Z</td>
                <td>$241,432</td>
              </tr>
              <tr>
                <td>Johnathan_Mraz</td>
                <td>1998 Webster Fords</td>
                <td>East Vern</td>
                <td>50</td>
                <td>2014-09-12T00:22:09.798Z</td>
                <td>$290,875</td>
              </tr>
              <tr>
                <td>Gunnar</td>
                <td>92873 Barney Club</td>
                <td>Beierview</td>
                <td>82</td>
                <td>2014-03-28T17:22:09.798Z</td>
                <td>$569,778</td>
              </tr>
              <tr>
                <td>Raina</td>
                <td>828 Cathy Streets</td>
                <td>West Uriahville</td>
                <td>26</td>
                <td>2013-09-27T05:22:09.798Z</td>
                <td>$186,229</td>
              </tr>
              <tr>
                <td>Marjorie.Orn</td>
                <td>314 Aurore Canyon</td>
                <td>Port Jaquelineburgh</td>
                <td>3</td>
                <td>2014-06-27T23:22:09.798Z</td>
                <td>$547,752</td>
              </tr>
              <tr>
                <td>Citlalli_Wehner</td>
                <td>139 Ebert Freeway</td>
                <td>Lake Esperanzamouth</td>
                <td>78</td>
                <td>2015-01-26T21:22:09.798Z</td>
                <td>$892,012</td>
              </tr>
              <tr>
                <td>Ruben.Reilly</td>
                <td>02868 Cronin Tunnel</td>
                <td>Rossieville</td>
                <td>87</td>
                <td>2013-09-12T00:22:09.798Z</td>
                <td>$520,483</td>
              </tr>
              <tr>
                <td>Gunner_Jakubowski</td>
                <td>80391 Maxwell Parks</td>
                <td>South Travon</td>
                <td>26</td>
                <td>2014-03-28T17:22:09.798Z</td>
                <td>$272,005</td>
              </tr>
              <tr>
                <td>Josephine</td>
                <td>36238 Satterfield Avenue</td>
                <td>New Alexanderhaven</td>
                <td>51</td>
                <td>2015-01-26T21:22:09.798Z</td>
                <td>$189,18</td>
              </tr>
              <tr>
                <td>Ceasar_Orn</td>
                <td>2795 Clement Ridges</td>
                <td>Beckerhaven</td>
                <td>78</td>
                <td>2013-11-27T01:22:09.798Z</td>
                <td>$958,117</td>
              </tr>
              <tr>
                <td>Coby</td>
                <td>53700 Pagac Lodge</td>
                <td>South Hershel</td>
                <td>86</td>
                <td>2013-08-27T19:22:09.798Z</td>
                <td>$481,619</td>
              </tr>
              <tr>
                <td>Colin</td>
                <td>637 Paucek Mountain</td>
                <td>West Luraberg</td>
                <td>77</td>
                <td>2015-02-26T07:22:09.798Z</td>
                <td>$298,110</td>
              </tr>
              <tr>
                <td>Monique_White</td>
                <td>415 Corkery Walks</td>
                <td>West Lauryn</td>
                <td>97</td>
                <td>2014-02-11T02:22:09.798Z</td>
                <td>$222,343</td>
              </tr>
              <tr>
                <td>Jarvis.Simonis</td>
                <td>0778 Elvis Spurs</td>
                <td>Harrisfurt</td>
                <td>62</td>
                <td>2013-05-28T13:22:09.798Z</td>
                <td>$336,046</td>
              </tr>
              <tr>
                <td>Afton</td>
                <td>57724 Ernser Crossroad</td>
                <td>Lake Charity</td>
                <td>94</td>
                <td>2015-04-28T03:22:09.798Z</td>
                <td>$597,775</td>
              </tr>
              <tr>
                <td>Greg</td>
                <td>944 Nina </td>
                <td>Okunevashire</td>
                <td>16</td>
                <td>2014-08-27T19:22:09.798Z</td>
                <td>$396,035</td>
              </tr>
              <tr>
                <td>Candelario</td>
                <td>4633 Rubie Loaf</td>
                <td>Adeliashire</td>
                <td>6</td>
                <td>2014-12-27T11:22:09.798Z</td>
                <td>$153,756</td>
              </tr>
              <tr>
                <td>Dell_Sipes</td>
                <td>6113 Blick Neck</td>
                <td>Juliefurt</td>
                <td>1</td>
                <td>2014-11-27T01:22:09.798Z</td>
                <td>$861,434</td>
              </tr>
              <tr>
                <td>Florine</td>
                <td>690 Ali Throughway</td>
                <td>Port Kylaborough</td>
                <td>77</td>
                <td>2013-04-28T03:22:09.798Z</td>
                <td>$833,585</td>
              </tr>
              <tr>
                <td>Jaylin.Hoppe</td>
                <td>638 Seth Oval</td>
                <td>North Saigeport</td>
                <td>27</td>
                <td>2014-09-27T05:22:09.798Z</td>
                <td>$563,0</td>
              </tr>
              <tr>
                <td>Electa</td>
                <td>82791 Chesley Tunnel</td>
                <td>East Waldo</td>
                <td>78</td>
                <td>2014-08-12T14:22:09.798Z</td>
                <td>$398,409</td>
              </tr>
              <tr>
                <td>Alena</td>
                <td>24001 Kylee Spring</td>
                <td>Lake Abner</td>
                <td>95</td>
                <td>2013-12-27T11:22:09.798Z</td>
                <td>$831,450</td>
              </tr>
              <tr>
                <td>Jevon_Wintheiser</td>
                <td>53621 Jermaine Squares</td>
                <td>Hoppeport</td>
                <td>44</td>
                <td>2014-03-13T12:22:09.799Z</td>
                <td>$587,409</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <!-- End Panel FixedHeader -->
    </div>
  </div>
  <!-- End Page -->


  <!-- Footer -->
  <footer class="site-footer">
    <span class="site-footer-legal">© 2015 Remark</span>
    <div class="site-footer-right">
      Crafted with <i class="red-600 wb wb-heart"></i> by <a href="http://themeforest.net/user/amazingSurge">amazingSurge</a>
    </div>
  </footer>

  <!-- Core  -->
  <script src="../../assets/vendor/jquery/jquery.js"></script>
  <script src="../../assets/vendor/bootstrap/bootstrap.js"></script>
  <script src="../../assets/vendor/animsition/jquery.animsition.js"></script>
  <script src="../../assets/vendor/asscroll/jquery-asScroll.js"></script>
  <script src="../../assets/vendor/mousewheel/jquery.mousewheel.js"></script>
  <script src="../../assets/vendor/asscrollable/jquery.asScrollable.all.js"></script>
  <script src="../../assets/vendor/ashoverscroll/jquery-asHoverScroll.js"></script>

  <!-- Plugins -->
  <script src="../../assets/vendor/switchery/switchery.min.js"></script>
  <script src="../../assets/vendor/intro-js/intro.js"></script>
  <script src="../../assets/vendor/screenfull/screenfull.js"></script>
  <script src="../../assets/vendor/slidepanel/jquery-slidePanel.js"></script>

  <script src="../../assets/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="../../assets/vendor/datatables-fixedheader/dataTables.fixedHeader.js"></script>
  <script src="../../assets/vendor/datatables-bootstrap/dataTables.bootstrap.js"></script>
  <script src="../../assets/vendor/datatables-responsive/dataTables.responsive.js"></script>
  <script src="../../assets/vendor/datatables-tabletools/dataTables.tableTools.js"></script>

  <!-- Scripts -->
  <script src="../../assets/js/core.js"></script>
  <script src="../../assets/js/site.js"></script>

  <script src="../../assets/js/sections/menu.js"></script>
  <script src="../../assets/js/sections/menubar.js"></script>
  <script src="../../assets/js/sections/sidebar.js"></script>

  <script src="../../assets/js/configs/config-colors.js"></script>
  <script src="../../assets/js/configs/config-tour.js"></script>

  <script src="../../assets/js/components/asscrollable.js"></script>
  <script src="../../assets/js/components/animsition.js"></script>
  <script src="../../assets/js/components/slidepanel.js"></script>
  <script src="../../assets/js/components/switchery.js"></script>
  <script src="../../assets/js/components/datatables.js"></script>

  <script>
    (function(document, window, $) {
      'use strict';

      var Site = window.Site;

      $(document).ready(function($) {
        Site.run();
      });

      // Fixed Header Example
      // --------------------
      (function() {
        // initialize datatable
        var table = $('#exampleFixedHeader').DataTable({
          responsive: true,
          "bPaginate": false,
          "sDom": "t" // just show table, no other controls
        });

        // initialize FixedHeader
        var offsetTop = 0;
        if ($('.site-navbar').length > 0) {
          offsetTop = $('.site-navbar').eq(0).innerHeight();
        }
        var fixedHeader = new FixedHeader(table, {
          offsetTop: offsetTop
        });

        // redraw fixedHeaders as necessary
        $(window).resize(function() {
          fixedHeader._fnUpdateClones(true);
          fixedHeader._fnUpdatePositions();
        });
      })();

      // Individual column searching
      // ---------------------------
      (function() {
        $(document).ready(function() {
          var defaults = $.components.getDefaults("dataTable");

          var options = $.extend(true, {}, defaults, {
            initComplete: function() {
              this.api().columns().every(function() {
                var column = this;
                var select = $(
                    '<select class="form-control width-full"><option value=""></option></select>'
                  )
                  .appendTo($(column.footer()).empty())
                  .on('change', function() {
                    var val = $.fn.dataTable.util.escapeRegex(
                      $(this).val()
                    );

                    column
                      .search(val ? '^' + val + '$' : '',
                        true, false)
                      .draw();
                  });

                column.data().unique().sort().each(function(
                  d, j) {
                  select.append('<option value="' + d +
                    '">' + d + '</option>')
                });
              });
            }
          });

          $('#exampleTableSearch').DataTable(options);
        });
      })();

      // Table Tools
      // -----------
      (function() {
        $(document).ready(function() {
          var defaults = $.components.getDefaults("dataTable");

          var options = $.extend(true, {}, defaults, {
            "aoColumnDefs": [{
              'bSortable': false,
              'aTargets': [-1]
            }],
            "iDisplayLength": 5,
            "aLengthMenu": [
              [5, 10, 25, 50, -1],
              [5, 10, 25, 50, "All"]
            ],
            "sDom": '<"dt-panelmenu clearfix"Tfr>t<"dt-panelfooter clearfix"ip>',
            "oTableTools": {
              "sSwfPath": "../../assets/vendor/datatables-tabletools/swf/copy_csv_xls_pdf.swf"
            }
          });

          $('#exampleTableTools').dataTable(options);
        });
      })();

      // Table Add Row
      // -------------

      (function() {
        $(document).ready(function() {
          var defaults = $.components.getDefaults("dataTable");

          var t = $('#exampleTableAdd').DataTable(defaults);

          $('#exampleTableAddBtn').on('click', function() {
            t.row.add([
              'Adam Doe',
              'New Row',
              'New Row',
              '30',
              '2015/10/15',
              '$20000'
            ]).draw();
          });
        });
      })();
    })(document, window, jQuery);
  </script>

</body>

</html>