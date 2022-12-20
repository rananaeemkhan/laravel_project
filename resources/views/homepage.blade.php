@extends('layouts.header')
@extends('layouts.footer')
@section('main')
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar sticky">
        <div class="form-inline me-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-bs-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn"> <i data-feather="menu"></i></a></li>
            <li>
              <form class="form-inline me-auto">
                <div class="search-element d-flex">
                  <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                </div>
              </form>
            </li>
          </ul>
        </div>
        <ul class="navbar-nav navbar-right">
          <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
              <i data-feather="maximize"></i>
            </a></li>
          <li class="dropdown dropdown-list-toggle"><a href="#" data-bs-toggle="dropdown"
              class="nav-link nav-link-lg message-toggle"><i data-feather="mail" class="mailAnim"></i>
              <span class="badge headerBadge1">
              </span> </a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right pullDown">
              <div class="dropdown-header">
                Messages
                <div class="float-right">
                  <a href="#">Mark All As Read</a>
                </div>
              </div>
              <div class="dropdown-list-content dropdown-list-message">
                <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar
											text-white"> <img alt="image" src="assets/img/users/user-1.png" class="rounded-circle">
                  </span> <span class="dropdown-item-desc"> <span class="message-user">John
                      Deo</span>
                    <span class="time messege-text">Please check your mail !!</span>
                    <span class="time">2 Min Ago</span>
                  </span>
                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
                    <img alt="image" src="assets/img/users/user-2.png" class="rounded-circle">
                  </span> <span class="dropdown-item-desc"> <span class="message-user">Sarah
                      Smith</span> <span class="time messege-text">Request for leave
                      application</span>
                    <span class="time">5 Min Ago</span>
                  </span>
                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
                    <img alt="image" src="assets/img/users/user-5.png" class="rounded-circle">
                  </span> <span class="dropdown-item-desc"> <span class="message-user">Jacob
                      Ryan</span> <span class="time messege-text">Your payment invoice is
                      generated.</span> <span class="time">12 Min Ago</span>
                  </span>
                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
                    <img alt="image" src="assets/img/users/user-4.png" class="rounded-circle">
                  </span> <span class="dropdown-item-desc"> <span class="message-user">Lina
                      Smith</span> <span class="time messege-text">hii John, I have upload
                      doc
                      related to task.</span> <span class="time">30
                      Min Ago</span>
                  </span>
                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
                    <img alt="image" src="assets/img/users/user-3.png" class="rounded-circle">
                  </span> <span class="dropdown-item-desc"> <span class="message-user">Jalpa
                      Joshi</span> <span class="time messege-text">Please do as specify.
                      Let me
                      know if you have any query.</span> <span class="time">1
                      Days Ago</span>
                  </span>
                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
                    <img alt="image" src="assets/img/users/user-2.png" class="rounded-circle">
                  </span> <span class="dropdown-item-desc"> <span class="message-user">Sarah
                      Smith</span> <span class="time messege-text">Client Requirements</span>
                    <span class="time">2 Days Ago</span>
                  </span>
                </a>
              </div>
              <div class="dropdown-footer text-center">
                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </li>
          <li class="dropdown dropdown-list-toggle"><a href="#" data-bs-toggle="dropdown"
              class="nav-link notification-toggle nav-link-lg"><i data-feather="bell"></i>
            </a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right pullDown">
              <div class="dropdown-header">
                Notifications
                <div class="float-right">
                  <a href="#">Mark All As Read</a>
                </div>
              </div>
              <div class="dropdown-list-content dropdown-list-icons">
                <a href="#" class="dropdown-item dropdown-item-unread"> <span
                    class="dropdown-item-icon l-bg-orange text-white"> <i class="far fa-envelope"></i>
                  </span> <span class="dropdown-item-desc"> You got new mail, please check. <span class="time">2 Min
                      Ago</span>
                  </span>
                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-icon l-bg-purple text-white"> <i
                      class="fas fa-bell"></i>
                  </span> <span class="dropdown-item-desc"> Meeting with <b>John Deo</b> and <b>Sarah Smith </b> at
                    10:30 am <span class="time">10 Hours
                      Ago</span>
                  </span>
                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-icon l-bg-green text-white"> <i
                      class="far fa-check-circle"></i>
                  </span> <span class="dropdown-item-desc"> Sidebar Bug is fixed by Kevin <span class="time">12
                      Hours
                      Ago</span>
                  </span>
                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-icon bg-danger text-white"> <i
                      class="fas fa-exclamation-triangle"></i>
                  </span> <span class="dropdown-item-desc"> Low disk space error!!!. <span class="time">17 Hours
                      Ago</span>
                  </span>
                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-icon bg-info text-white"> <i class="fas
												fa-bell"></i>
                  </span> <span class="dropdown-item-desc"> Welcome to Gati
                    template! <span class="time">Yesterday</span>
                  </span>
                </a>
              </div>
              <div class="dropdown-footer text-center">
                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </li>
          <li class="dropdown"><a href="#" data-bs-toggle="dropdown"
              class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image" src="assets/img/user.png"
                class="user-img-radious-style"> <span class="d-sm-none d-lg-inline-block"></span></a>
            <div class="dropdown-menu dropdown-menu-right pullDown">
              <div class="dropdown-title">Hello Sarah Smith</div>
              <a href="profile.html" class="dropdown-item has-icon"> <i class="far
										fa-user"></i> Profile
              </a> <a href="timeline.html" class="dropdown-item has-icon"> <i class="fas fa-bolt"></i>
                Activities
              </a> <a href="#" class="dropdown-item has-icon"> <i class="fas fa-cog"></i>
                Settings
              </a>
              <div class="dropdown-divider"></div>
              <a href="auth-login.html" class="dropdown-item has-icon text-danger"> <i class="fas fa-sign-out-alt"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index-2.html"> <img alt="image" src="assets/img/logo.png" class="header-logo" /> <span
                class="logo-name">Gati</span>
            </a>
          </div>
          <div class="sidebar-user">
            <div class="sidebar-user-picture">
              <img alt="image" src="assets/img/user.png">
            </div>
            <div class="sidebar-user-details">
              <div class="user-name">Olivia Thomas</div>
              <div class="user-role">Administrator</div>
              <div class="sidebar-userpic-btn">
                <a href="profile.html" data-bs-toggle="tooltip" title="Profile">
                  <i data-feather="user"></i>
                </a>
                <a href="email-inbox.html" data-bs-toggle="tooltip" title="Mail">
                  <i data-feather="mail"></i>
                </a>
                <a href="chat.html" data-bs-toggle="tooltip" title="Chat">
                  <i data-feather="message-square"></i>
                </a>
                <a href="auth-login.html" data-bs-toggle="tooltip" title="Log Out">
                  <i data-feather="log-out"></i>
                </a>
              </div>
            </div>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown active">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="monitor"></i><span>Dashboard</span></a>
              <ul class="dropdown-menu">
                <li class="active"><a class="nav-link" href="index-2.html">Dashboard 1</a></li>
                <li><a class="nav-link" href="index2.html">Dashboard 2</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="briefcase"></i><span>Widgets</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="widget-chart.html">Chart Widgets</a></li>
                <li><a class="nav-link" href="widget-data.html">Data Widgets</a></li>
              </ul>
            </li>
            <li class="menu-header">Apps</li>
            <li class="dropdown">
              <a href="calendar.html" class="nav-link"><i data-feather="calendar"></i><span>Calendar</span></a>
            </li>
            <li class="dropdown">
              <a href="task.html" class="nav-link"><i data-feather="check-circle"></i><span>Task</span></a>
            </li>
            <li class="dropdown">
              <a href="contact.html" class="nav-link"><i data-feather="users"></i><span>Contacts</span></a>
            </li>
            <li class="dropdown">
              <a href="note.html" class="nav-link"><i data-feather="clipboard"></i><span>Notes</span></a>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="mail"></i><span>Email</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="email-inbox.html">Inbox</a></li>
                <li><a class="nav-link" href="email-compose.html">Compose</a></li>
                <li><a class="nav-link" href="email-read.html">read</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="command"></i><span>Other
                  Apps</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="chat.html">Chat</a></li>
                <li><a class="nav-link" href="portfolio.html">Portfolio</a></li>
                <li><a class="nav-link" href="blog.html">Blog</a></li>
              </ul>
            </li>
            <li class="menu-header">UI Elements</li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="copy"></i><span>Basic
                  Components</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="alert.html">Alert</a></li>
                <li><a class="nav-link" href="badge.html">Badge</a></li>
                <li><a class="nav-link" href="breadcrumb.html">Breadcrumb</a></li>
                <li><a class="nav-link" href="buttons.html">Buttons</a></li>
                <li><a class="nav-link" href="collapse.html">Collapse</a></li>
                <li><a class="nav-link" href="dropdown.html">Dropdown</a></li>
                <li><a class="nav-link" href="checkbox-and-radio.html">Checkbox &amp; Radios</a></li>
                <li><a class="nav-link" href="list-group.html">List Group</a></li>
                <li><a class="nav-link" href="navbar.html">Navbar</a></li>
                <li><a class="nav-link" href="pagination.html">Pagination</a></li>
                <li><a class="nav-link" href="popover.html">Popover</a></li>
                <li><a class="nav-link" href="progress.html">Progress</a></li>
                <li><a class="nav-link" href="tooltip.html">Tooltip</a></li>
                <li><a class="nav-link" href="flags.html">Flag</a></li>
                <li><a class="nav-link" href="typography.html">Typography</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="shopping-bag"></i><span>Advanced</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="avatar.html">Avatar</a></li>
                <li><a class="nav-link" href="card.html">Card</a></li>
                <li><a class="nav-link" href="modal.html">Modal</a></li>
                <li><a class="nav-link" href="sweet-alert.html">Sweet Alert</a></li>
                <li><a class="nav-link" href="toastr.html">Toastr</a></li>
                <li><a class="nav-link" href="empty-state.html">Empty State</a></li>
                <li><a class="nav-link" href="multiple-upload.html">Multiple Upload</a></li>
                <li><a class="nav-link" href="pricing.html">Pricing</a></li>
                <li><a class="nav-link" href="tabs.html">Tab</a></li>
              </ul>
            </li>
            <li><a class="nav-link" href="blank.html"><i data-feather="file"></i><span>Blank Page</span></a></li>
            <li class="menu-header">Form</li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="layout"></i><span>Forms</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="basic-form.html">Basic Form</a></li>
                <li><a class="nav-link" href="forms-advanced-form.html">Advanced Form</a></li>
                <li><a class="nav-link" href="forms-editor.html">Editor</a></li>
                <li><a class="nav-link" href="forms-validation.html">Validation</a></li>
                <li><a class="nav-link" href="form-wizard.html">Form Wizard</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="grid"></i><span>Tables</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="basic-table.html">Basic Tables</a></li>
                <li><a class="nav-link" href="advance-table.html">Advanced Table</a></li>
                <li><a class="nav-link" href="newtable">Datatable</a></li>
                <li><a class="nav-link" href="export-table.html">Export Table</a></li>
                <li><a class="nav-link" href="footable.html">Footable</a></li>
                <li><a class="nav-link" href="editable-table.html">Editable Table</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="pie-chart"></i><span>Charts</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="chart-amchart.html">amChart</a></li>
                <li><a class="nav-link" href="chart-apexchart.html">apexchart</a></li>
                <li><a class="nav-link" href="chart-echart.html">eChart</a></li>
                <li><a class="nav-link" href="chart-chartjs.html">Chartjs</a></li>
                <li><a class="nav-link" href="chart-sparkline.html">Sparkline</a></li>
                <li><a class="nav-link" href="chart-morris.html">Morris</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="feather"></i><span>Icons</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="icon-font-awesome.html">Font Awesome</a></li>
                <li><a class="nav-link" href="icon-material.html">Material Design</a></li>
                <li><a class="nav-link" href="icon-ionicons.html">Ion Icons</a></li>
                <li><a class="nav-link" href="icon-feather.html">Feather Icons</a></li>
                <li><a class="nav-link" href="icon-weather-icon.html">Weather Icon</a></li>
              </ul>
            </li>
            <li class="menu-header">Media</li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="image"></i><span>Gallery</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="light-gallery.html">Light Gallery</a></li>
                <li><a href="gallery1.html">Gallery 2</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="flag"></i><span>Sliders</span></a>
              <ul class="dropdown-menu">
                <li><a href="carousel.html">Bootstrap Carousel.html</a></li>
                <li><a class="nav-link" href="owl-carousel.html">Owl Carousel</a></li>
              </ul>
            </li>
            <li><a class="nav-link" href="timeline.html"><i data-feather="sliders"></i><span>Timeline</span></a></li>
            <li class="menu-header">Maps</li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="map"></i><span>Google
                  Maps</span></a>
              <ul class="dropdown-menu">
                <li><a href="gmaps-advanced-route.html">Advanced Route</a></li>
                <li><a href="gmaps-draggable-marker.html">Draggable Marker</a></li>
                <li><a href="gmaps-geocoding.html">Geocoding</a></li>
                <li><a href="gmaps-geolocation.html">Geolocation</a></li>
                <li><a href="gmaps-marker.html">Marker</a></li>
                <li><a href="gmaps-multiple-marker.html">Multiple Marker</a></li>
                <li><a href="gmaps-route.html">Route</a></li>
                <li><a href="gmaps-simple.html">Simple</a></li>
              </ul>
            </li>
            <li><a class="nav-link" href="vector-map.html"><i data-feather="map-pin"></i><span>Vector
                  Map</span></a></li>
            <li class="menu-header">Pages</li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="user-check"></i><span>Auth</span></a>
              <ul class="dropdown-menu">
                <li><a href="auth-login.html">Login</a></li>
                <li><a href="auth-register.html">Register</a></li>
                <li><a href="auth-forgot-password.html">Forgot Password</a></li>
                <li><a href="auth-reset-password.html">Reset Password</a></li>
                <li><a href="subscribe.html">Subscribe</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="alert-triangle"></i><span>Errors</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="errors-503.html">503</a></li>
                <li><a class="nav-link" href="errors-403.html">403</a></li>
                <li><a class="nav-link" href="errors-404.html">404</a></li>
                <li><a class="nav-link" href="errors-500.html">500</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="anchor"></i><span>Other
                  Pages</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="create-post.html">Create Post</a></li>
                <li><a class="nav-link" href="posts.html">Posts</a></li>
                <li><a class="nav-link" href="profile.html">Profile</a></li>
                <li><a class="nav-link" href="contact-us.html">Contact</a></li>
                <li><a class="nav-link" href="invoice.html">Invoice</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="chevrons-down"></i><span>Multilevel</span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Menu 1</a></li>
                <li class="dropdown">
                  <a href="#" class="has-dropdown">Menu 2</a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Child Menu 1</a></li>
                    <li class="dropdown">
                      <a href="#" class="has-dropdown">Child Menu 2</a>
                      <ul class="dropdown-menu">
                        <li><a href="#">Child Menu 1</a></li>
                        <li><a href="#">Child Menu 2</a></li>
                      </ul>
                    </li>
                    <li><a href="#"> Child Menu 3</a></li>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
        </aside>
      </div>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <ul class="breadcrumb breadcrumb-style ">
            <li class="breadcrumb-item">
              <h4 class="page-title m-b-0">Dashboard</h4>
            </li>
            <li class="breadcrumb-item">
              <a href="index-2.html">
                <i data-feather="home"></i></a>
            </li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ul>
          <div class="row ">
            <div class="col-xl-3 col-lg-6">
              <div class="card l-bg-style1">
                <div class="card-statistic-3">
                  <div class="card-icon card-icon-large"><i class="fa fa-award"></i></div>
                  <div class="card-content">
                    <h4 class="card-title">New Orders</h4>
                    <span>524</span>
                    <div class="progress mt-1 mb-1" data-height="8">
                      <div class="progress-bar l-bg-purple" role="progressbar" data-width="25%" aria-valuenow="25"
                        aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p class="mb-0 text-sm">
                      <span class="mr-2"><i class="fa fa-arrow-up"></i> 10%</span>
                      <span class="text-nowrap">Since last month</span>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card l-bg-style2">
                <div class="card-statistic-3">
                  <div class="card-icon card-icon-large"><i class="fa fa-briefcase"></i></div>
                  <div class="card-content">
                    <h4 class="card-title">New Booking</h4>
                    <span>1,258</span>
                    <div class="progress mt-1 mb-1" data-height="8">
                      <div class="progress-bar l-bg-orange" role="progressbar" data-width="25%" aria-valuenow="25"
                        aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p class="mb-0 text-sm">
                      <span class="mr-2"><i class="fa fa-arrow-up"></i> 10%</span>
                      <span class="text-nowrap">Since last month</span>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card l-bg-style3">
                <div class="card-statistic-3">
                  <div class="card-icon card-icon-large"><i class="fa fa-globe"></i></div>
                  <div class="card-content">
                    <h4 class="card-title">Inquiry</h4>
                    <span>10,225</span>
                    <div class="progress mt-1 mb-1" data-height="8">
                      <div class="progress-bar l-bg-cyan" role="progressbar" data-width="25%" aria-valuenow="25"
                        aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p class="mb-0 text-sm">
                      <span class="mr-2"><i class="fa fa-arrow-up"></i> 10%</span>
                      <span class="text-nowrap">Since last month</span>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card l-bg-style4">
                <div class="card-statistic-3">
                  <div class="card-icon card-icon-large"><i class="fa fa-money-bill-alt"></i></div>
                  <div class="card-content">
                    <h4 class="card-title">Earning</h4>
                    <span>$2,658</span>
                    <div class="progress mt-1 mb-1" data-height="8">
                      <div class="progress-bar l-bg-green" role="progressbar" data-width="25%" aria-valuenow="25"
                        aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p class="mb-0 text-sm">
                      <span class="mr-2"><i class="fa fa-arrow-up"></i> 10%</span>
                      <span class="text-nowrap">Since last month</span>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 col-lg-6 col-xl-6 ">
              <div class="card">
                <div class="card-header">
                  <h4>Revenue Chart</h4>
                  <div class="card-header-action">
                    <ul class="nav nav-pills" role="tablist" id="chart-tabs">
                      <li class="nav-item">
                        <a class="nav-link active card-tab-style" data-bs-toggle="tab" data-id="1" role="tab"
                          aria-selected="true">2017</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link card-tab-style" data-bs-toggle="tab" data-id="2" role="tab"
                          aria-selected="false">2018</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link card-tab-style" data-bs-toggle="tab" data-id="3" role="tab"
                          aria-selected="false">2019</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="card-body">
                  <div id="chart1"></div>
                </div>
              </div>
            </div>
            <div class="col-md-12 col-lg-6 col-xl-6 ">
              <div class="card">
                <div class="card-header">
                  <h4>Revenue Chart</h4>
                </div>
                <div class="card-body">
                  <div id="chart2"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8">
              <div class="card">
                <div class="card-header">
                  <h4>Assign Project List</h4>
                  <div class="card-header-form">
                    <form>
                      <div class="input-group">
                        <input type="text" class="form-control search-control" placeholder="Search">
                        <div class="input-group-btn">
                          <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="card-body">
                  <div class="table-responsive" id="proTeamScroll">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>Cust.</th>
                          <th>Project</th>
                          <th>Assign Date</th>
                          <th>Team</th>
                          <th>Priority</th>
                          <th>Status</th>
                          <th>Edit</th>
                        </tr>
                      </thead>
                      <tr>
                        <td class="table-img"><img src="assets/img/users/user-8.png" alt="">
                        </td>
                        <td>
                          <h6 class="mb-0 font-13">Wordpress Website</h6>
                          <p class="m-0 font-12">
                            Assigned to<span class="col-green font-weight-bold"> Airi Satou</span>
                          </p>
                        </td>
                        <td>20-02-2018</td>
                        <td class="text-truncate">
                          <ul class="list-unstyled order-list m-b-0">
                            <li class="team-member team-member-sm"><img class="rounded-circle"
                                src="assets/img/users/user-8.png" alt="user" data-bs-toggle="tooltip" title=""
                                data-original-title="Wildan Ahdian"></li>
                            <li class="team-member team-member-sm"><img class="rounded-circle"
                                src="assets/img/users/user-9.png" alt="user" data-bs-toggle="tooltip" title=""
                                data-original-title="John Deo"></li>
                            <li class="team-member team-member-sm"><img class="rounded-circle"
                                src="assets/img/users/user-10.png" alt="user" data-bs-toggle="tooltip" title=""
                                data-original-title="Sarah Smith"></li>
                            <li class="avatar avatar-sm"><span class="badge badge-primary">+4</span></li>
                          </ul>
                        </td>
                        <td>
                          <div class="badge-outline col-red">High</div>
                        </td>
                        <td class="align-middle">
                          <div class="progress-text">50%</div>
                          <div class="progress" data-height="6">
                            <div class="progress-bar bg-success" data-width="50%"></div>
                          </div>
                        </td>
                        <td>
                          <a data-bs-toggle="tooltip" title="" data-original-title="Edit"><i
                              class="fas fa-pencil-alt"></i></a>
                          <a data-bs-toggle="tooltip" title="" data-original-title="Delete"><i
                              class="far fa-trash-alt"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td class="table-img"><img src="assets/img/users/user-1.png" alt="">
                        </td>
                        <td>
                          <h6 class="mb-0 font-13">Android Game App</h6>
                          <p class="m-0 font-12">
                            Assigned to<span class="col-green font-weight-bold"> Sarah Smith</span>
                          </p>
                        </td>
                        <td>22-05-2019</td>
                        <td class="text-truncate">
                          <ul class="list-unstyled order-list m-b-0">
                            <li class="team-member team-member-sm"><img class="rounded-circle"
                                src="assets/img/users/user-4.png" alt="user" data-bs-toggle="tooltip" title=""
                                data-original-title="Wildan Ahdian"></li>
                            <li class="team-member team-member-sm"><img class="rounded-circle"
                                src="assets/img/users/user-7.png" alt="user" data-bs-toggle="tooltip" title=""
                                data-original-title="John Deo"></li>
                            <li class="team-member team-member-sm"><img class="rounded-circle"
                                src="assets/img/users/user-2.png" alt="user" data-bs-toggle="tooltip" title=""
                                data-original-title="Sarah Smith"></li>
                            <li class="avatar avatar-sm"><span class="badge badge-primary">+4</span></li>
                          </ul>
                        </td>
                        <td>
                          <div class="badge-outline col-green">Low</div>
                        </td>
                        <td class="align-middle">
                          <div class="progress-text">55%</div>
                          <div class="progress" data-height="6">
                            <div class="progress-bar bg-purple" data-width="55%"></div>
                          </div>
                        </td>
                        <td>
                          <a data-bs-toggle="tooltip" title="" data-original-title="Edit"><i
                              class="fas fa-pencil-alt"></i></a>
                          <a data-bs-toggle="tooltip" title="" data-original-title="Delete"><i
                              class="far fa-trash-alt"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td class="table-img"><img src="assets/img/users/user-5.png" alt="">
                        </td>
                        <td>
                          <h6 class="mb-0 font-13">Java Web Service</h6>
                          <p class="m-0 font-12">
                            Assigned to<span class="col-green font-weight-bold"> Cara Stevens</span>
                          </p>
                        </td>
                        <td>11-04-2019</td>
                        <td class="text-truncate">
                          <ul class="list-unstyled order-list m-b-0">
                            <li class="team-member team-member-sm"><img class="rounded-circle"
                                src="assets/img/users/user-3.png" alt="user" data-bs-toggle="tooltip" title=""
                                data-original-title="Wildan Ahdian"></li>
                            <li class="team-member team-member-sm"><img class="rounded-circle"
                                src="assets/img/users/user-7.png" alt="user" data-bs-toggle="tooltip" title=""
                                data-original-title="John Deo"></li>
                            <li class="team-member team-member-sm"><img class="rounded-circle"
                                src="assets/img/users/user-8.png" alt="user" data-bs-toggle="tooltip" title=""
                                data-original-title="Sarah Smith"></li>
                            <li class="avatar avatar-sm"><span class="badge badge-primary">+4</span></li>
                          </ul>
                        </td>
                        <td>
                          <div class="badge-outline col-blue">Medium</div>
                        </td>
                        <td class="align-middle">
                          <div class="progress-text">70%</div>
                          <div class="progress" data-height="6">
                            <div class="progress-bar" data-width="70%"></div>
                          </div>
                        </td>
                        <td>
                          <a data-bs-toggle="tooltip" title="" data-original-title="Edit"><i
                              class="fas fa-pencil-alt"></i></a>
                          <a data-bs-toggle="tooltip" title="" data-original-title="Delete"><i
                              class="far fa-trash-alt"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td class="table-img"><img src="assets/img/users/user-9.png" alt="">
                        </td>
                        <td>
                          <h6 class="mb-0 font-13">Wedding IOS App</h6>
                          <p class="m-0 font-12">
                            Assigned to<span class="col-green font-weight-bold"> John Doe</span>
                          </p>
                        </td>
                        <td>19-05-2019</td>
                        <td class="text-truncate">
                          <ul class="list-unstyled order-list m-b-0">
                            <li class="team-member team-member-sm"><img class="rounded-circle"
                                src="assets/img/users/user-2.png" alt="user" data-bs-toggle="tooltip" title=""
                                data-original-title="Wildan Ahdian"></li>
                            <li class="team-member team-member-sm"><img class="rounded-circle"
                                src="assets/img/users/user-10.png" alt="user" data-bs-toggle="tooltip" title=""
                                data-original-title="John Deo"></li>
                            <li class="team-member team-member-sm"><img class="rounded-circle"
                                src="assets/img/users/user-4.png" alt="user" data-bs-toggle="tooltip" title=""
                                data-original-title="Sarah Smith"></li>
                            <li class="avatar avatar-sm"><span class="badge badge-primary">+4</span></li>
                          </ul>
                        </td>
                        <td>
                          <div class="badge-outline col-red">High</div>
                        </td>
                        <td class="align-middle">
                          <div class="progress-text">45%</div>
                          <div class="progress" data-height="6">
                            <div class="progress-bar bg-cyan" data-width="45%"></div>
                          </div>
                        </td>
                        <td>
                          <a data-bs-toggle="tooltip" title="" data-original-title="Edit"><i
                              class="fas fa-pencil-alt"></i></a>
                          <a data-bs-toggle="tooltip" title="" data-original-title="Delete"><i
                              class="far fa-trash-alt"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td class="table-img"><img src="assets/img/users/user-10.png" alt="">
                        </td>
                        <td>
                          <h6 class="mb-0 font-13">Blize Admin Template</h6>
                          <p class="m-0 font-12">
                            Assigned to<span class="col-green font-weight-bold"> Ashton Cox</span>
                          </p>
                        </td>
                        <td>25-07-2019</td>
                        <td class="text-truncate">
                          <ul class="list-unstyled order-list m-b-0">
                            <li class="team-member team-member-sm"><img class="rounded-circle"
                                src="assets/img/users/user-1.png" alt="user" data-bs-toggle="tooltip" title=""
                                data-original-title="Wildan Ahdian"></li>
                            <li class="team-member team-member-sm"><img class="rounded-circle"
                                src="assets/img/users/user-5.png" alt="user" data-bs-toggle="tooltip" title=""
                                data-original-title="John Deo"></li>
                            <li class="team-member team-member-sm"><img class="rounded-circle"
                                src="assets/img/users/user-7.png" alt="user" data-bs-toggle="tooltip" title=""
                                data-original-title="Sarah Smith"></li>
                            <li class="avatar avatar-sm"><span class="badge badge-primary">+4</span></li>
                          </ul>
                        </td>
                        <td>
                          <div class="badge-outline col-blue">Medium</div>
                        </td>
                        <td class="align-middle">
                          <div class="progress-text">67%</div>
                          <div class="progress" data-height="6">
                            <div class="progress-bar bg-red" data-width="67%"></div>
                          </div>
                        </td>
                        <td>
                          <a data-bs-toggle="tooltip" title="" data-original-title="Edit"><i
                              class="fas fa-pencil-alt"></i></a>
                          <a data-bs-toggle="tooltip" title="" data-original-title="Delete"><i
                              class="far fa-trash-alt"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td class="table-img"><img src="assets/img/users/user-4.png" alt="">
                        </td>
                        <td>
                          <h6 class="mb-0 font-13">React js website</h6>
                          <p class="m-0 font-12">
                            Assigned to<span class="col-green font-weight-bold"> Sarah Smith </span>
                          </p>
                        </td>
                        <td>11-08-2019</td>
                        <td class="text-truncate">
                          <ul class="list-unstyled order-list m-b-0">
                            <li class="team-member team-member-sm"><img class="rounded-circle"
                                src="assets/img/users/user-5.png" alt="user" data-bs-toggle="tooltip" title=""
                                data-original-title="Wildan Ahdian"></li>
                            <li class="team-member team-member-sm"><img class="rounded-circle"
                                src="assets/img/users/user-8.png" alt="user" data-bs-toggle="tooltip" title=""
                                data-original-title="John Deo"></li>
                            <li class="team-member team-member-sm"><img class="rounded-circle"
                                src="assets/img/users/user-3.png" alt="user" data-bs-toggle="tooltip" title=""
                                data-original-title="Sarah Smith"></li>
                            <li class="avatar avatar-sm"><span class="badge badge-primary">+4</span></li>
                          </ul>
                        </td>
                        <td>
                          <div class="badge-outline col-green">Low</div>
                        </td>
                        <td class="align-middle">
                          <div class="progress-text">41%</div>
                          <div class="progress" data-height="6">
                            <div class="progress-bar bg-orange" data-width="41%"></div>
                          </div>
                        </td>
                        <td>
                          <a data-bs-toggle="tooltip" title="" data-original-title="Edit"><i
                              class="fas fa-pencil-alt"></i></a>
                          <a data-bs-toggle="tooltip" title="" data-original-title="Delete"><i
                              class="far fa-trash-alt"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td class="table-img"><img src="assets/img/users/user-10.png" alt="">
                        </td>
                        <td>
                          <h6 class="mb-0 font-13">SEO improvement</h6>
                          <p class="m-0 font-12">
                            Assigned to<span class="col-green font-weight-bold"> Janak Gandhi</span>
                          </p>
                        </td>
                        <td>22-02-2018</td>
                        <td class="text-truncate">
                          <ul class="list-unstyled order-list m-b-0">
                            <li class="team-member team-member-sm"><img class="rounded-circle"
                                src="assets/img/users/user-3.png" alt="user" data-bs-toggle="tooltip" title=""
                                data-original-title="Wildan Ahdian"></li>
                            <li class="team-member team-member-sm"><img class="rounded-circle"
                                src="assets/img/users/user-9.png" alt="user" data-bs-toggle="tooltip" title=""
                                data-original-title="John Deo"></li>
                            <li class="team-member team-member-sm"><img class="rounded-circle"
                                src="assets/img/users/user-1.png" alt="user" data-bs-toggle="tooltip" title=""
                                data-original-title="Sarah Smith"></li>
                            <li class="avatar avatar-sm"><span class="badge badge-primary">+4</span></li>
                          </ul>
                        </td>
                        <td>
                          <div class="badge-outline col-red">High</div>
                        </td>
                        <td class="align-middle">
                          <div class="progress-text">70%</div>
                          <div class="progress" data-height="6">
                            <div class="progress-bar bg-success" data-width="70%"></div>
                          </div>
                        </td>
                        <td>
                          <a data-bs-toggle="tooltip" title="" data-original-title="Edit"><i
                              class="fas fa-pencil-alt"></i></a>
                          <a data-bs-toggle="tooltip" title="" data-original-title="Delete"><i
                              class="far fa-trash-alt"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td class="table-img"><img src="assets/img/users/user-6.png" alt="">
                        </td>
                        <td>
                          <h6 class="mb-0 font-13">Laravel Website</h6>
                          <p class="m-0 font-12">
                            Assigned to<span class="col-green font-weight-bold"> Mili Rain</span>
                          </p>
                        </td>
                        <td>31-03-2019</td>
                        <td class="text-truncate">
                          <ul class="list-unstyled order-list m-b-0">
                            <li class="team-member team-member-sm"><img class="rounded-circle"
                                src="assets/img/users/user-4.png" alt="user" data-bs-toggle="tooltip" title=""
                                data-original-title="Wildan Ahdian"></li>
                            <li class="team-member team-member-sm"><img class="rounded-circle"
                                src="assets/img/users/user-7.png" alt="user" data-bs-toggle="tooltip" title=""
                                data-original-title="John Deo"></li>
                            <li class="team-member team-member-sm"><img class="rounded-circle"
                                src="assets/img/users/user-2.png" alt="user" data-bs-toggle="tooltip" title=""
                                data-original-title="Sarah Smith"></li>
                            <li class="avatar avatar-sm"><span class="badge badge-primary">+4</span></li>
                          </ul>
                        </td>
                        <td>
                          <div class="badge-outline col-green">Low</div>
                        </td>
                        <td class="align-middle">
                          <div class="progress-text">55%</div>
                          <div class="progress" data-height="6">
                            <div class="progress-bar bg-purple" data-width="55%"></div>
                          </div>
                        </td>
                        <td>
                          <a data-bs-toggle="tooltip" title="" data-original-title="Edit"><i
                              class="fas fa-pencil-alt"></i></a>
                          <a data-bs-toggle="tooltip" title="" data-original-title="Delete"><i
                              class="far fa-trash-alt"></i></a>
                        </td>
                      </tr>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
              <div class="card">
                <div class="card-header">
                  <h4>Project Team</h4>
                </div>
                <div class="card-body">
                  <div class="media-list position-relative">
                    <div class="table-responsive" id="project-team-scroll">
                      <table class="table table-hover table-xl mb-0">
                        <thead>
                          <tr>
                            <th>Project Name</th>
                            <th>Employees</th>
                            <th>Cost</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="text-truncate">Project X</td>
                            <td class="text-truncate">
                              <ul class="list-unstyled order-list m-b-0">
                                <li class="team-member team-member-sm"><img class="rounded-circle"
                                    src="assets/img/users/user-8.png" alt="user" data-bs-toggle="tooltip" title=""
                                    data-original-title="Wildan Ahdian"></li>
                                <li class="team-member team-member-sm"><img class="rounded-circle"
                                    src="assets/img/users/user-9.png" alt="user" data-bs-toggle="tooltip" title=""
                                    data-original-title="John Deo"></li>
                                <li class="team-member team-member-sm"><img class="rounded-circle"
                                    src="assets/img/users/user-10.png" alt="user" data-bs-toggle="tooltip" title=""
                                    data-original-title="Sarah Smith"></li>
                                <li class="avatar avatar-sm"><span class="badge badge-primary">+3</span></li>
                              </ul>
                            </td>
                            <td class="text-truncate">$8999</td>
                          </tr>
                          <tr>
                            <td class="text-truncate">Project AB2</td>
                            <td class="text-truncate">
                              <ul class="list-unstyled order-list m-b-0">
                                <li class="team-member team-member-sm"><img class="rounded-circle"
                                    src="assets/img/users/user-1.png" alt="user" data-bs-toggle="tooltip" title=""
                                    data-original-title="Wildan Ahdian"></li>
                                <li class="team-member team-member-sm"><img class="rounded-circle"
                                    src="assets/img/users/user-3.png" alt="user" data-bs-toggle="tooltip" title=""
                                    data-original-title="John Deo"></li>
                                <li class="team-member team-member-sm"><img class="rounded-circle"
                                    src="assets/img/users/user-2.png" alt="user" data-bs-toggle="tooltip" title=""
                                    data-original-title="Sarah Smith"></li>
                                <li class="avatar avatar-sm"><span class="badge badge-primary">+1</span></li>
                              </ul>
                            </td>
                            <td class="text-truncate">$5550</td>
                          </tr>
                          <tr>
                            <td class="text-truncate">Project DS3</td>
                            <td class="text-truncate">
                              <ul class="list-unstyled order-list m-b-0">
                                <li class="team-member team-member-sm"><img class="rounded-circle"
                                    src="assets/img/users/user-5.png" alt="user" data-bs-toggle="tooltip" title=""
                                    data-original-title="Wildan Ahdian"></li>
                                <li class="team-member team-member-sm"><img class="rounded-circle"
                                    src="assets/img/users/user-9.png" alt="user" data-bs-toggle="tooltip" title=""
                                    data-original-title="Sarah Smith"></li>
                                <li class="avatar avatar-sm"><span class="badge badge-primary">+4</span></li>
                              </ul>
                            </td>
                            <td class="text-truncate">$9000</td>
                          </tr>
                          <tr>
                            <td class="text-truncate">Project XCD</td>
                            <td class="text-truncate">
                              <ul class="list-unstyled order-list m-b-0">
                                <li class="team-member team-member-sm"><img class="rounded-circle"
                                    src="assets/img/users/user-8.png" alt="user" data-bs-toggle="tooltip" title=""
                                    data-original-title="Wildan Ahdian"></li>
                                <li class="team-member team-member-sm"><img class="rounded-circle"
                                    src="assets/img/users/user-3.png" alt="user" data-bs-toggle="tooltip" title=""
                                    data-original-title="John Deo"></li>
                                <li class="team-member team-member-sm"><img class="rounded-circle"
                                    src="assets/img/users/user-5.png" alt="user" data-bs-toggle="tooltip" title=""
                                    data-original-title="Sarah Smith"></li>
                                <li class="avatar avatar-sm"><span class="badge badge-primary">+2</span></li>
                              </ul>
                            </td>
                            <td class="text-truncate">$7500</td>
                          </tr>
                          <tr>
                            <td class="text-truncate">Project Z2</td>
                            <td class="text-truncate">
                              <ul class="list-unstyled order-list m-b-0">
                                <li class="team-member team-member-sm"><img class="rounded-circle"
                                    src="assets/img/users/user-8.png" alt="user" data-bs-toggle="tooltip" title=""
                                    data-original-title="Wildan Ahdian"></li>
                                <li class="team-member team-member-sm"><img class="rounded-circle"
                                    src="assets/img/users/user-10.png" alt="user" data-bs-toggle="tooltip" title=""
                                    data-original-title="Sarah Smith"></li>
                                <li class="avatar avatar-sm"><span class="badge badge-primary">+3</span></li>
                              </ul>
                            </td>
                            <td class="text-truncate">$8500</td>
                          </tr>
                          <tr>
                            <td class="text-truncate">Project GTe</td>
                            <td class="text-truncate">
                              <ul class="list-unstyled order-list m-b-0">
                                <li class="team-member team-member-sm"><img class="rounded-circle"
                                    src="assets/img/users/user-3.png" alt="user" data-bs-toggle="tooltip" title=""
                                    data-original-title="Wildan Ahdian"></li>
                                <li class="team-member team-member-sm"><img class="rounded-circle"
                                    src="assets/img/users/user-5.png" alt="user" data-bs-toggle="tooltip" title=""
                                    data-original-title="Sarah Smith"></li>
                                <li class="avatar avatar-sm"><span class="badge badge-primary">+3</span></li>
                              </ul>
                            </td>
                            <td class="text-truncate">$8500</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-sm-12 col-lg-4">
              <div class="card">
                <div class="card-header">
                  <h4>Chart</h4>
                </div>
                <div class="card-body">
                  <div id="schart1"></div>
                  <div class="row">
                    <div class="col-4">
                      <p class="text-muted font-15 text-truncate">Target</p>
                      <h5>
                        <i class="fas fa-arrow-circle-up col-green m-r-5"></i>$15.3k
                      </h5>
                    </div>
                    <div class="col-4">
                      <p class="text-muted font-15 text-truncate">Last
                        week</p>
                      <h5>
                        <i class="fas fa-arrow-circle-down col-red m-r-5"></i>$2.8k
                      </h5>
                    </div>
                    <div class="col-4">
                      <p class="text-muted text-truncate">Last
                        Month</p>
                      <h5>
                        <i class="fas fa-arrow-circle-up col-green m-r-5"></i>$12.5k
                      </h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-lg-4">
              <div class="card">
                <div class="card-header">
                  <h4>Chart</h4>
                </div>
                <div class="card-body">
                  <div id="schart2"></div>
                  <div class="row">
                    <div class="col-4">
                      <p class="text-muted font-15 text-truncate">Target</p>
                      <h5>
                        <i class="fas fa-arrow-circle-up col-green m-r-5"></i>$15.3k
                      </h5>
                    </div>
                    <div class="col-4">
                      <p class="text-muted font-15 text-truncate">Last
                        week</p>
                      <h5>
                        <i class="fas fa-arrow-circle-down col-red m-r-5"></i>$2.8k
                      </h5>
                    </div>
                    <div class="col-4">
                      <p class="text-muted text-truncate">Last
                        Month</p>
                      <h5>
                        <i class="fas fa-arrow-circle-up col-green m-r-5"></i>$12.5k
                      </h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-lg-4">
              <div class="card">
                <div class="card-header">
                  <h4>Chart</h4>
                </div>
                <div class="card-body">
                  <div id="schart3"></div>
                  <div class="row">
                    <div class="col-4">
                      <p class="text-muted font-15 text-truncate">Target</p>
                      <h5>
                        <i class="fas fa-arrow-circle-up col-green m-r-5"></i>$15.3k
                      </h5>
                    </div>
                    <div class="col-4">
                      <p class="text-muted font-15 text-truncate">Last
                        week</p>
                      <h5>
                        <i class="fas fa-arrow-circle-down col-red m-r-5"></i>$2.8k
                      </h5>
                    </div>
                    <div class="col-4">
                      <p class="text-muted text-truncate">Last
                        Month</p>
                      <h5>
                        <i class="fas fa-arrow-circle-up col-green m-r-5"></i>$12.5k
                      </h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-sm-12 col-lg-8">
              <div class="card">
                <div class="card-header">
                  <h4>Visitors By Countries</h4>
                </div>
                <div class="card-body">
                  <div class="row ">
                    <div class="col-12 col-sm-12 col-lg-8">
                      <div id="visitorMap"></div>
                    </div>
                    <div class="col-12 col-sm-12 col-lg-4">
                      <div class="row m-b-15">
                        <div class="col-9">India</div>
                        <div class="col-3 text-end">28%</div>
                        <div class="col-12">
                          <div class="progress" data-height="6">
                            <div class="progress-bar bg-success" data-width="28%"></div>
                          </div>
                        </div>
                      </div>
                      <div class="row m-b-15">
                        <div class="col-9"> Canada</div>
                        <div class="col-3 text-end">21%</div>
                        <div class="col-12">
                          <div class="progress" data-height="6">
                            <div class="progress-bar bg-orange" data-width="21%"></div>
                          </div>
                        </div>
                      </div>
                      <div class="row m-b-15">
                        <div class="col-9"> Australia</div>
                        <div class="col-3 text-end">33%</div>
                        <div class="col-12">
                          <div class="progress" data-height="6">
                            <div class="progress-bar bg-purple" data-width="33%"></div>
                          </div>
                        </div>
                      </div>
                      <div class="row m-b-15">
                        <div class="col-9">Egypt</div>
                        <div class="col-3 text-end">42%</div>
                        <div class="col-12">
                          <div class="progress" data-height="6">
                            <div class="progress-bar bg-amber" data-width="42%"></div>
                          </div>
                        </div>
                      </div>
                      <div class="row m-b-15">
                        <div class="col-9">Thailand</div>
                        <div class="col-3 text-end">56%</div>
                        <div class="col-12">
                          <div class="progress" data-height="6">
                            <div class="progress-bar bg-cyan" data-width="56%"></div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-9">Panama</div>
                        <div class="col-3 text-end">39%</div>
                        <div class="col-12">
                          <div class="progress" data-height="6">
                            <div class="progress-bar bg-pink" data-width="39%"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
              <div class="card gradient-bottom">
                <div class="card-header">
                  <h4>Top 5 Products</h4>
                  <div class="card-header-action dropdown">
                    <a href="#" data-bs-toggle="dropdown" class="btn btn-danger dropdown-toggle">Month</a>
                    <ul class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                      <li class="dropdown-title">Select Period</li>
                      <li><a href="#" class="dropdown-item">Today</a></li>
                      <li><a href="#" class="dropdown-item">Week</a></li>
                      <li><a href="#" class="dropdown-item active">Month</a></li>
                      <li><a href="#" class="dropdown-item">This Year</a></li>
                    </ul>
                  </div>
                </div>
                <div class="card-body" id="top-5-scroll">
                  <ul class="list-unstyled list-unstyled-border" style="position: relative; max-height: 320px;"
                    [perfectScrollbar]>
                    <li class="product-list">
                      <img class="msr-3 rounded" width="55" src="assets/img/products/product-3.png" alt="product">
                      <div class="set-flex">
                        <div class="float-end">
                          <div class="font-weight-600 text-muted text-small">112 Sales</div>
                        </div>
                        <div class="fw-bold font-15">Mobile</div>
                        <div class="mt-1">
                          <div class="budget-price">
                            <div class="budget-price-square bg-primary" style="width: 60%;"></div>
                            <div class="budget-price-label">$24,897</div>
                          </div>
                          <div class="budget-price">
                            <div class="budget-price-square bg-danger" style="width: 40%;"></div>
                            <div class="budget-price-label">$18,865</div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="product-list">
                      <img class="msr-3 rounded" width="55" src="assets/img/products/product-4.png" alt="product">
                      <div class="set-flex">
                        <div class="float-end">
                          <div class="font-weight-600 text-muted text-small">49 Sales</div>
                        </div>
                        <div class="fw-bold font-15">Laptop</div>
                        <div class="mt-1">
                          <div class="budget-price">
                            <div class="budget-price-square bg-primary" style="width: 78%;"></div>
                            <div class="budget-price-label">$74,568</div>
                          </div>
                          <div class="budget-price">
                            <div class="budget-price-square bg-danger" style="width: 55%;"></div>
                            <div class="budget-price-label">$65,892</div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="product-list">
                      <img class="msr-3 rounded" width="55" src="assets/img/products/product-1.png" alt="product">
                      <div class="set-flex">
                        <div class="float-end">
                          <div class="font-weight-600 text-muted text-small">63 Sales</div>
                        </div>
                        <div class="fw-bold font-15">Headphone</div>
                        <div class="mt-1">
                          <div class="budget-price">
                            <div class="budget-price-square bg-primary" style="width: 38%;"></div>
                            <div class="budget-price-label">$2,859</div>
                          </div>
                          <div class="budget-price">
                            <div class="budget-price-square bg-danger" style="width: 25%;"></div>
                            <div class="budget-price-label">$1,872</div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="product-list">
                      <img class="msr-3 rounded" width="55" src="assets/img/products/product-2.png" alt="product">
                      <div class="set-flex">
                        <div class="float-end">
                          <div class="font-weight-600 text-muted text-small">28 Sales</div>
                        </div>
                        <div class="fw-bold font-15">Tablet</div>
                        <div class="mt-1">
                          <div class="budget-price">
                            <div class="budget-price-square bg-primary" style="width: 48%;"></div>
                            <div class="budget-price-label">$11,238</div>
                          </div>
                          <div class="budget-price">
                            <div class="budget-price-square bg-danger" style="width: 33%;"></div>
                            <div class="budget-price-label">$7,564</div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="product-list">
                      <img class="msr-3 rounded" width="55" src="assets/img/products/product-5.png" alt="product">
                      <div class="set-flex">
                        <div class="float-end">
                          <div class="font-weight-600 text-muted text-small">19 Sales</div>
                        </div>
                        <div class="fw-bold font-15">Camera</div>
                        <div class="mt-1">
                          <div class="budget-price">
                            <div class="budget-price-square bg-primary" style="width: 91%;"></div>
                            <div class="budget-price-label">$7,285</div>
                          </div>
                          <div class="budget-price">
                            <div class="budget-price-square bg-danger" style="width: 74%;"></div>
                            <div class="budget-price-label">$5,147</div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="card-footer pt-3 d-flex justify-content-center">
                  <div class="budget-price justify-content-center">
                    <div class="budget-price-square bg-primary" data-width="20"></div>
                    <div class="budget-price-label">Selling Price</div>
                  </div>
                  <div class="budget-price justify-content-center">
                    <div class="budget-price-square bg-danger" data-width="20"></div>
                    <div class="budget-price-label">Product Cost</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <div class="settingSidebar">
          <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
          </a>
          <div class="settingSidebar-body ps-container ps-theme-default">
            <div class=" fade show active">
              <div class="setting-panel-header">Setting Panel
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Select Layout</h6>
                <div class="selectgroup layout-color w-50">
                  <label class="selectgroup-item">
                    <input type="radio" name="value" value="1" class="selectgroup-input-radio select-layout" checked>
                    <span class="selectgroup-button">Light</span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="value" value="2" class="selectgroup-input-radio select-layout">
                    <span class="selectgroup-button">Dark</span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Sidebar Color</h6>
                <div class="selectgroup selectgroup-pills sidebar-color">
                  <label class="selectgroup-item">
                    <input type="radio" name="icon-input" value="1" class="selectgroup-input select-sidebar">
                    <span class="selectgroup-button selectgroup-button-icon" data-bs-toggle="tooltip"
                      data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="icon-input" value="2" class="selectgroup-input select-sidebar" checked>
                    <span class="selectgroup-button selectgroup-button-icon" data-bs-toggle="tooltip"
                      data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Color Theme</h6>
                <div class="theme-setting-options">
                  <ul class="choose-theme list-unstyled mb-0">
                    <li title="white" class="active">
                      <div class="white"></div>
                    </li>
                    <li title="cyan">
                      <div class="cyan"></div>
                    </li>
                    <li title="black">
                      <div class="black"></div>
                    </li>
                    <li title="purple">
                      <div class="purple"></div>
                    </li>
                    <li title="orange">
                      <div class="orange"></div>
                    </li>
                    <li title="green">
                      <div class="green"></div>
                    </li>
                    <li title="red">
                      <div class="red"></div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <div class="theme-setting-options">
                  <label class="m-b-0">
                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                      id="mini_sidebar_setting">
                    <span class="custom-switch-indicator"></span>
                    <span class="control-label p-l-10">Mini Sidebar</span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <div class="theme-setting-options">
                  <label class="m-b-0">
                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                      id="sticky_header_setting">
                    <span class="custom-switch-indicator"></span>
                    <span class="control-label p-l-10">Sticky Header</span>
                  </label>
                </div>
              </div>
              <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
                <a href="#" class="btn btn-icon icon-left btn-primary btn-restore-theme">
                  <i class="fas fa-undo"></i> Restore Default
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2020 <div class="bullet"></div> Design By <a href="#">Redstar</a>
        </div>
        <div class="footer-right">
        </div>
      </footer>
    </div>
  </div>
  @endsection
