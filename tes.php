<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Tabler - Premium and Open Source dashboard template with responsive and high quality UI.</title>
    <!-- CSS files -->
    <link href="./dist/css/tabler.min.css" rel="stylesheet"/>
    <link href="./dist/css/tabler-flags.min.css" rel="stylesheet"/>
    <link href="./dist/css/tabler-payments.min.css" rel="stylesheet"/>
    <link href="./dist/css/tabler-vendors.min.css" rel="stylesheet"/>
    <link href="./dist/css/demo.min.css" rel="stylesheet"/>
    <!-- datatable style -->
    <link rel="stylesheet" type="text/css" href="https://nightly.datatables.net/css/jquery.dataTables.css ">
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <!-- datatables -->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css"> -->
    <script type="text/javascript">
      $(document).ready(function() {
          $('#example').DataTable();
      } );
    </script>
  </head>
  <body >
    <div class="wrapper">
      <header class="navbar navbar-expand-md navbar-light d-print-none">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
            <span class="navbar-toggler-icon"></span>
          </button>
          <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
            <a href=".">
              <img src="./static/logo.svg" width="110" height="32" alt="Tabler" class="navbar-brand-image">
            </a>
          </h1>
          <div class="navbar-nav flex-row order-md-last">
            <div class="nav-item d-none d-md-flex me-3">
              <div class="btn-list">
                <a href="https://github.com/tabler/tabler" class="btn" target="_blank" rel="noreferrer">
                  <!-- Download SVG icon from http://tabler-icons.io/i/brand-github -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon text-github" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 19c-4.3 1.4 -4.3 -2.5 -6 -3m12 5v-3.5c0 -1 .1 -1.4 -.5 -2c2.8 -.3 5.5 -1.4 5.5 -6a4.6 4.6 0 0 0 -1.3 -3.2a4.2 4.2 0 0 0 -.1 -3.2s-1.1 -.3 -3.5 1.3a12.3 12.3 0 0 0 -6.2 0c-2.4 -1.6 -3.5 -1.3 -3.5 -1.3a4.2 4.2 0 0 0 -.1 3.2a4.6 4.6 0 0 0 -1.3 3.2c0 4.6 2.7 5.7 5.5 6c-.6 .6 -.6 1.2 -.5 2v3.5" /></svg>
                  Source code
                </a>
                <a href="https://github.com/sponsors/codecalm" class="btn" target="_blank" rel="noreferrer">
                  <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon text-pink" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19.5 13.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" /></svg>
                  Sponsor
                </a>
              </div>
            </div>
            <a href="?theme=dark" class="nav-link px-0 hide-theme-dark" title="Enable dark mode" data-bs-toggle="tooltip" data-bs-placement="bottom">
              <!-- Download SVG icon from http://tabler-icons.io/i/moon -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" /></svg>
            </a>
            <a href="?theme=light" class="nav-link px-0 hide-theme-light" title="Enable light mode" data-bs-toggle="tooltip" data-bs-placement="bottom">
              <!-- Download SVG icon from http://tabler-icons.io/i/sun -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="4" /><path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7" /></svg>
            </a>
            <div class="nav-item dropdown d-none d-md-flex me-3">
              <a href="#" class="nav-link px-0" data-bs-toggle="dropdown" tabindex="-1" aria-label="Show notifications">
                <!-- Download SVG icon from http://tabler-icons.io/i/bell -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" /><path d="M9 17v1a3 3 0 0 0 6 0v-1" /></svg>
                <span class="badge bg-red"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-end dropdown-menu-card">
                <div class="card">
                  <div class="card-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad amet consectetur exercitationem fugiat in ipsa ipsum, natus odio quidem quod repudiandae sapiente. Amet debitis et magni maxime necessitatibus ullam.
                  </div>
                </div>
              </div>
            </div>
            <div class="nav-item dropdown">
              <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
                <span class="avatar avatar-sm" style="background-image: url(./static/avatars/000m.jpg)"></span>
                <div class="d-none d-xl-block ps-2">
                  <div>Paweł Kuna</div>
                  <div class="mt-1 small text-muted">UI Designer</div>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <a href="#" class="dropdown-item">Set status</a>
                <a href="#" class="dropdown-item">Profile & account</a>
                <a href="#" class="dropdown-item">Feedback</a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">Settings</a>
                <a href="#" class="dropdown-item">Logout</a>
              </div>
            </div>
          </div>
        </div>
      </header>
      <div class="navbar-expand-md">
        <div class="collapse navbar-collapse" id="navbar-menu">
          <div class="navbar navbar-light">
            <div class="container-fluid">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="./index.html" >
                    <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="5 12 3 12 12 3 21 12 19 12" /><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" /><path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" /></svg>
                    </span>
                    <span class="nav-link-title">
                      Home
                    </span>
                  </a>
                </li>
                <li class="nav-item active dropdown">
                  <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false" >
                    <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/package -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="12 3 20 7.5 20 16.5 12 21 4 16.5 4 7.5 12 3" /><line x1="12" y1="12" x2="20" y2="7.5" /><line x1="12" y1="12" x2="12" y2="21" /><line x1="12" y1="12" x2="4" y2="7.5" /><line x1="16" y1="5.25" x2="8" y2="9.75" /></svg>
                    </span>
                    <span class="nav-link-title">
                      Interface
                    </span>
                  </a>
                  <div class="dropdown-menu">
                    <div class="dropdown-menu-columns">
                      <div class="dropdown-menu-column">
                        <a class="dropdown-item" href="./empty.html" >
                          Empty page
                        </a>
                        <a class="dropdown-item" href="./accordion.html" >
                          Accordion
                        </a>
                        <a class="dropdown-item" href="./blank.html" >
                          Blank page
                        </a>
                        <a class="dropdown-item" href="./buttons.html" >
                          Buttons
                        </a>
                        <a class="dropdown-item" href="./cards.html" >
                          Cards
                        </a>
                        <a class="dropdown-item" href="./cards-masonry.html" >
                          Cards Masonry
                        </a>
                        <a class="dropdown-item" href="./colors.html" >
                          Colors
                        </a>
                        <a class="dropdown-item" href="./dropdowns.html" >
                          Dropdowns
                        </a>
                        <a class="dropdown-item" href="./icons.html" >
                          Icons
                        </a>
                        <a class="dropdown-item" href="./modals.html" >
                          Modals
                        </a>
                        <a class="dropdown-item" href="./maps.html" >
                          Maps
                        </a>
                        <a class="dropdown-item" href="./map-fullsize.html" >
                          Map fullsize
                        </a>
                        <a class="dropdown-item" href="./maps-vector.html" >
                          Vector maps
                        </a>
                      </div>
                      <div class="dropdown-menu-column">
                        <a class="dropdown-item" href="./navigation.html" >
                          Navigation
                        </a>
                        <a class="dropdown-item" href="./charts.html" >
                          Charts
                        </a>
                        <a class="dropdown-item" href="./pagination.html" >
                          Pagination
                        </a>
                        <a class="dropdown-item" href="./skeleton.html" >
                          Skeleton
                        </a>
                        <a class="dropdown-item" href="./tabs.html" >
                          Tabs
                        </a>
                        <a class="dropdown-item active" href="./tables.html" >
                          Tables
                        </a>
                        <a class="dropdown-item" href="./carousel.html" >
                          Carousel
                        </a>
                        <a class="dropdown-item" href="./lists.html" >
                          Lists
                        </a>
                        <a class="dropdown-item" href="./typography.html" >
                          Typography
                        </a>
                        <a class="dropdown-item" href="./offcanvas.html" >
                          Offcanvas
                        </a>
                        <a class="dropdown-item" href="./markdown.html" >
                          Markdown
                        </a>
                        <div class="dropend">
                          <a class="dropdown-item dropdown-toggle" href="#sidebar-authentication" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false" >
                            Authentication
                          </a>
                          <div class="dropdown-menu">
                            <a href="./sign-in.html" class="dropdown-item">Sign in</a>
                            <a href="./sign-up.html" class="dropdown-item">Sign up</a>
                            <a href="./forgot-password.html" class="dropdown-item">Forgot password</a>
                            <a href="./terms-of-service.html" class="dropdown-item">Terms of service</a>
                            <a href="./auth-lock.html" class="dropdown-item">Lock screen</a>
                          </div>
                        </div>
                        <div class="dropend">
                          <a class="dropdown-item dropdown-toggle" href="#sidebar-error" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false" >
                            Error pages
                          </a>
                          <div class="dropdown-menu">
                            <a href="./error-404.html" class="dropdown-item">404 page</a>
                            <a href="./error-500.html" class="dropdown-item">500 page</a>
                            <a href="./error-maintenance.html" class="dropdown-item">Maintenance page</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./form-elements.html" >
                    <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/checkbox -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="9 11 12 14 20 6" /><path d="M20 12v6a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h9" /></svg>
                    </span>
                    <span class="nav-link-title">
                      Form elements
                    </span>
                  </a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#navbar-extra" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false" >
                    <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/star -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>
                    </span>
                    <span class="nav-link-title">
                      Extra
                    </span>
                  </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="./activity.html" >
                      Activity
                    </a>
                    <a class="dropdown-item" href="./gallery.html" >
                      Gallery
                    </a>
                    <a class="dropdown-item" href="./invoice.html" >
                      Invoice
                    </a>
                    <a class="dropdown-item" href="./search-results.html" >
                      Search results
                    </a>
                    <a class="dropdown-item" href="./pricing.html" >
                      Pricing cards
                    </a>
                    <a class="dropdown-item" href="./users.html" >
                      Users
                    </a>
                    <a class="dropdown-item" href="./license.html" >
                      License
                    </a>
                    <a class="dropdown-item" href="./music.html" >
                      Music
                    </a>
                    <a class="dropdown-item" href="./widgets.html" >
                      Widgets
                    </a>
                    <a class="dropdown-item" href="./wizard.html" >
                      Wizard
                    </a>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#navbar-layout" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false" >
                    <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/layout-2 -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><rect x="4" y="4" width="6" height="5" rx="2" /><rect x="4" y="13" width="6" height="7" rx="2" /><rect x="14" y="4" width="6" height="7" rx="2" /><rect x="14" y="15" width="6" height="5" rx="2" /></svg>
                    </span>
                    <span class="nav-link-title">
                      Layout
                    </span>
                  </a>
                  <div class="dropdown-menu">
                    <div class="dropdown-menu-columns">
                      <div class="dropdown-menu-column">
                        <a class="dropdown-item" href="./layout-horizontal.html" >
                          Horizontal
                        </a>
                        <a class="dropdown-item" href="./layout-vertical.html" >
                          Vertical
                        </a>
                        <a class="dropdown-item" href="./layout-vertical-transparent.html" >
                          Vertical transparent
                        </a>
                        <a class="dropdown-item" href="./layout-vertical-right.html" >
                          Right vertical
                        </a>
                        <a class="dropdown-item" href="./layout-condensed.html" >
                          Condensed
                        </a>
                        <a class="dropdown-item" href="./layout-combo.html" >
                          Combined
                        </a>
                      </div>
                      <div class="dropdown-menu-column">
                        <a class="dropdown-item" href="./layout-navbar-dark.html" >
                          Navbar dark
                        </a>
                        <a class="dropdown-item" href="./layout-navbar-sticky.html" >
                          Navbar sticky
                        </a>
                        <a class="dropdown-item" href="./layout-navbar-overlap.html" >
                          Navbar overlap
                        </a>
                        <a class="dropdown-item" href="./layout-rtl.html" >
                          RTL mode
                        </a>
                        <a class="dropdown-item" href="./layout-fluid.html" >
                          Fluid
                        </a>
                        <a class="dropdown-item" href="./layout-fluid-vertical.html" >
                          Fluid vertical
                        </a>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./docs/index.html" >
                    <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/file-text -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" /><line x1="9" y1="9" x2="10" y2="9" /><line x1="9" y1="13" x2="15" y2="13" /><line x1="9" y1="17" x2="15" y2="17" /></svg>
                    </span>
                    <span class="nav-link-title">
                      Documentation
                    </span>
                  </a>
                </li>
              </ul>
              <div class="my-2 my-md-0 flex-grow-1 flex-md-grow-0 order-first order-md-last">
                <form action="." method="get">
                  <div class="input-icon">
                    <span class="input-icon-addon">
                      <!-- Download SVG icon from http://tabler-icons.io/i/search -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="10" cy="10" r="7" /><line x1="21" y1="21" x2="15" y2="15" /></svg>
                    </span>
                    <input type="text" class="form-control" placeholder="Search…" aria-label="Search in website">
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="page-wrapper">
        <div class="container-fluid">
          <!-- Page title -->
          <div class="page-header d-print-none">
            <div class="row align-items-center">
              <div class="col">
                <h2 class="page-title">
                  Tables
                </h2>
              </div>
            </div>
          </div>
        </div>
        <div class="page-body">
          <div class="container-fluid">
            <div class="row row-cards">
              <div class="col-12">
                  <div class="table-responsive">
                    <table id="example" class="display" style="width:100%">
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
                      <tbody>
                          <tr>
                              <td>Tiger Nixon</td>
                              <td>System Architect</td>
                              <td>Edinburgh</td>
                              <td>61</td>
                              <td>2011/04/25</td>
                              <td>$320,800</td>
                          </tr>
                          <tr>
                              <td>Garrett Winters</td>
                              <td>Accountant</td>
                              <td>Tokyo</td>
                              <td>63</td>
                              <td>2011/07/25</td>
                              <td>$170,750</td>
                          </tr>
                          <tr>
                              <td>Ashton Cox</td>
                              <td>Junior Technical Author</td>
                              <td>San Francisco</td>
                              <td>66</td>
                              <td>2009/01/12</td>
                              <td>$86,000</td>
                          </tr>
                          <tr>
                              <td>Cedric Kelly</td>
                              <td>Senior Javascript Developer</td>
                              <td>Edinburgh</td>
                              <td>22</td>
                              <td>2012/03/29</td>
                              <td>$433,060</td>
                          </tr>
                          <tr>
                              <td>Airi Satou</td>
                              <td>Accountant</td>
                              <td>Tokyo</td>
                              <td>33</td>
                              <td>2008/11/28</td>
                              <td>$162,700</td>
                          </tr>
                          <tr>
                              <td>Brielle Williamson</td>
                              <td>Integration Specialist</td>
                              <td>New York</td>
                              <td>61</td>
                              <td>2012/12/02</td>
                              <td>$372,000</td>
                          </tr>
                          <tr>
                              <td>Herrod Chandler</td>
                              <td>Sales Assistant</td>
                              <td>San Francisco</td>
                              <td>59</td>
                              <td>2012/08/06</td>
                              <td>$137,500</td>
                          </tr>
                          <tr>
                              <td>Rhona Davidson</td>
                              <td>Integration Specialist</td>
                              <td>Tokyo</td>
                              <td>55</td>
                              <td>2010/10/14</td>
                              <td>$327,900</td>
                          </tr>
                          <tr>
                              <td>Colleen Hurst</td>
                              <td>Javascript Developer</td>
                              <td>San Francisco</td>
                              <td>39</td>
                              <td>2009/09/15</td>
                              <td>$205,500</td>
                          </tr>
                          <tr>
                              <td>Sonya Frost</td>
                              <td>Software Engineer</td>
                              <td>Edinburgh</td>
                              <td>23</td>
                              <td>2008/12/13</td>
                              <td>$103,600</td>
                          </tr>
                          <tr>
                              <td>Jena Gaines</td>
                              <td>Office Manager</td>
                              <td>London</td>
                              <td>30</td>
                              <td>2008/12/19</td>
                              <td>$90,560</td>
                          </tr>
                          <tr>
                              <td>Quinn Flynn</td>
                              <td>Support Lead</td>
                              <td>Edinburgh</td>
                              <td>22</td>
                              <td>2013/03/03</td>
                              <td>$342,000</td>
                          </tr>
                          <tr>
                              <td>Charde Marshall</td>
                              <td>Regional Director</td>
                              <td>San Francisco</td>
                              <td>36</td>
                              <td>2008/10/16</td>
                              <td>$470,600</td>
                          </tr>
                          <tr>
                              <td>Haley Kennedy</td>
                              <td>Senior Marketing Designer</td>
                              <td>London</td>
                              <td>43</td>
                              <td>2012/12/18</td>
                              <td>$313,500</td>
                          </tr>
                          <tr>
                              <td>Tatyana Fitzpatrick</td>
                              <td>Regional Director</td>
                              <td>London</td>
                              <td>19</td>
                              <td>2010/03/17</td>
                              <td>$385,750</td>
                          </tr>
                          <tr>
                              <td>Michael Silva</td>
                              <td>Marketing Designer</td>
                              <td>London</td>
                              <td>66</td>
                              <td>2012/11/27</td>
                              <td>$198,500</td>
                          </tr>
                          <tr>
                              <td>Paul Byrd</td>
                              <td>Chief Financial Officer (CFO)</td>
                              <td>New York</td>
                              <td>64</td>
                              <td>2010/06/09</td>
                              <td>$725,000</td>
                          </tr>
                          <tr>
                              <td>Gloria Little</td>
                              <td>Systems Administrator</td>
                              <td>New York</td>
                              <td>59</td>
                              <td>2009/04/10</td>
                              <td>$237,500</td>
                          </tr>
                          <tr>
                              <td>Bradley Greer</td>
                              <td>Software Engineer</td>
                              <td>London</td>
                              <td>41</td>
                              <td>2012/10/13</td>
                              <td>$132,000</td>
                          </tr>
                          <tr>
                              <td>Dai Rios</td>
                              <td>Personnel Lead</td>
                              <td>Edinburgh</td>
                              <td>35</td>
                              <td>2012/09/26</td>
                              <td>$217,500</td>
                          </tr>
                          <tr>
                              <td>Jenette Caldwell</td>
                              <td>Development Lead</td>
                              <td>New York</td>
                              <td>30</td>
                              <td>2011/09/03</td>
                              <td>$345,000</td>
                          </tr>
                          <tr>
                              <td>Yuri Berry</td>
                              <td>Chief Marketing Officer (CMO)</td>
                              <td>New York</td>
                              <td>40</td>
                              <td>2009/06/25</td>
                              <td>$675,000</td>
                          </tr>
                          <tr>
                              <td>Caesar Vance</td>
                              <td>Pre-Sales Support</td>
                              <td>New York</td>
                              <td>21</td>
                              <td>2011/12/12</td>
                              <td>$106,450</td>
                          </tr>
                          <tr>
                              <td>Doris Wilder</td>
                              <td>Sales Assistant</td>
                              <td>Sydney</td>
                              <td>23</td>
                              <td>2010/09/20</td>
                              <td>$85,600</td>
                          </tr>
                          <tr>
                              <td>Angelica Ramos</td>
                              <td>Chief Executive Officer (CEO)</td>
                              <td>London</td>
                              <td>47</td>
                              <td>2009/10/09</td>
                              <td>$1,200,000</td>
                          </tr>
                          <tr>
                              <td>Gavin Joyce</td>
                              <td>Developer</td>
                              <td>Edinburgh</td>
                              <td>42</td>
                              <td>2010/12/22</td>
                              <td>$92,575</td>
                          </tr>
                          <tr>
                              <td>Jennifer Chang</td>
                              <td>Regional Director</td>
                              <td>Singapore</td>
                              <td>28</td>
                              <td>2010/11/14</td>
                              <td>$357,650</td>
                          </tr>
                          <tr>
                              <td>Brenden Wagner</td>
                              <td>Software Engineer</td>
                              <td>San Francisco</td>
                              <td>28</td>
                              <td>2011/06/07</td>
                              <td>$206,850</td>
                          </tr>
                          <tr>
                              <td>Fiona Green</td>
                              <td>Chief Operating Officer (COO)</td>
                              <td>San Francisco</td>
                              <td>48</td>
                              <td>2010/03/11</td>
                              <td>$850,000</td>
                          </tr>
                          <tr>
                              <td>Shou Itou</td>
                              <td>Regional Marketing</td>
                              <td>Tokyo</td>
                              <td>20</td>
                              <td>2011/08/14</td>
                              <td>$163,000</td>
                          </tr>
                          <tr>
                              <td>Michelle House</td>
                              <td>Integration Specialist</td>
                              <td>Sydney</td>
                              <td>37</td>
                              <td>2011/06/02</td>
                              <td>$95,400</td>
                          </tr>
                          <tr>
                              <td>Suki Burks</td>
                              <td>Developer</td>
                              <td>London</td>
                              <td>53</td>
                              <td>2009/10/22</td>
                              <td>$114,500</td>
                          </tr>
                          <tr>
                              <td>Prescott Bartlett</td>
                              <td>Technical Author</td>
                              <td>London</td>
                              <td>27</td>
                              <td>2011/05/07</td>
                              <td>$145,000</td>
                          </tr>
                          <tr>
                              <td>Gavin Cortez</td>
                              <td>Team Leader</td>
                              <td>San Francisco</td>
                              <td>22</td>
                              <td>2008/10/26</td>
                              <td>$235,500</td>
                          </tr>
                          <tr>
                              <td>Martena Mccray</td>
                              <td>Post-Sales support</td>
                              <td>Edinburgh</td>
                              <td>46</td>
                              <td>2011/03/09</td>
                              <td>$324,050</td>
                          </tr>
                          <tr>
                              <td>Unity Butler</td>
                              <td>Marketing Designer</td>
                              <td>San Francisco</td>
                              <td>47</td>
                              <td>2009/12/09</td>
                              <td>$85,675</td>
                          </tr>
                          <tr>
                              <td>Howard Hatfield</td>
                              <td>Office Manager</td>
                              <td>San Francisco</td>
                              <td>51</td>
                              <td>2008/12/16</td>
                              <td>$164,500</td>
                          </tr>
                          <tr>
                              <td>Hope Fuentes</td>
                              <td>Secretary</td>
                              <td>San Francisco</td>
                              <td>41</td>
                              <td>2010/02/12</td>
                              <td>$109,850</td>
                          </tr>
                          <tr>
                              <td>Vivian Harrell</td>
                              <td>Financial Controller</td>
                              <td>San Francisco</td>
                              <td>62</td>
                              <td>2009/02/14</td>
                              <td>$452,500</td>
                          </tr>
                          <tr>
                              <td>Timothy Mooney</td>
                              <td>Office Manager</td>
                              <td>London</td>
                              <td>37</td>
                              <td>2008/12/11</td>
                              <td>$136,200</td>
                          </tr>
                          <tr>
                              <td>Jackson Bradshaw</td>
                              <td>Director</td>
                              <td>New York</td>
                              <td>65</td>
                              <td>2008/09/26</td>
                              <td>$645,750</td>
                          </tr>
                          <tr>
                              <td>Olivia Liang</td>
                              <td>Support Engineer</td>
                              <td>Singapore</td>
                              <td>64</td>
                              <td>2011/02/03</td>
                              <td>$234,500</td>
                          </tr>
                          <tr>
                              <td>Bruno Nash</td>
                              <td>Software Engineer</td>
                              <td>London</td>
                              <td>38</td>
                              <td>2011/05/03</td>
                              <td>$163,500</td>
                          </tr>
                          <tr>
                              <td>Sakura Yamamoto</td>
                              <td>Support Engineer</td>
                              <td>Tokyo</td>
                              <td>37</td>
                              <td>2009/08/19</td>
                              <td>$139,575</td>
                          </tr>
                          <tr>
                              <td>Thor Walton</td>
                              <td>Developer</td>
                              <td>New York</td>
                              <td>61</td>
                              <td>2013/08/11</td>
                              <td>$98,540</td>
                          </tr>
                          <tr>
                              <td>Finn Camacho</td>
                              <td>Support Engineer</td>
                              <td>San Francisco</td>
                              <td>47</td>
                              <td>2009/07/07</td>
                              <td>$87,500</td>
                          </tr>
                          <tr>
                              <td>Serge Baldwin</td>
                              <td>Data Coordinator</td>
                              <td>Singapore</td>
                              <td>64</td>
                              <td>2012/04/09</td>
                              <td>$138,575</td>
                          </tr>
                          <tr>
                              <td>Zenaida Frank</td>
                              <td>Software Engineer</td>
                              <td>New York</td>
                              <td>63</td>
                              <td>2010/01/04</td>
                              <td>$125,250</td>
                          </tr>
                          <tr>
                              <td>Zorita Serrano</td>
                              <td>Software Engineer</td>
                              <td>San Francisco</td>
                              <td>56</td>
                              <td>2012/06/01</td>
                              <td>$115,000</td>
                          </tr>
                          <tr>
                              <td>Jennifer Acosta</td>
                              <td>Junior Javascript Developer</td>
                              <td>Edinburgh</td>
                              <td>43</td>
                              <td>2013/02/01</td>
                              <td>$75,650</td>
                          </tr>
                          <tr>
                              <td>Cara Stevens</td>
                              <td>Sales Assistant</td>
                              <td>New York</td>
                              <td>46</td>
                              <td>2011/12/06</td>
                              <td>$145,600</td>
                          </tr>
                          <tr>
                              <td>Hermione Butler</td>
                              <td>Regional Director</td>
                              <td>London</td>
                              <td>47</td>
                              <td>2011/03/21</td>
                              <td>$356,250</td>
                          </tr>
                          <tr>
                              <td>Lael Greer</td>
                              <td>Systems Administrator</td>
                              <td>London</td>
                              <td>21</td>
                              <td>2009/02/27</td>
                              <td>$103,500</td>
                          </tr>
                          <tr>
                              <td>Jonas Alexander</td>
                              <td>Developer</td>
                              <td>San Francisco</td>
                              <td>30</td>
                              <td>2010/07/14</td>
                              <td>$86,500</td>
                          </tr>
                          <tr>
                              <td>Shad Decker</td>
                              <td>Regional Director</td>
                              <td>Edinburgh</td>
                              <td>51</td>
                              <td>2008/11/13</td>
                              <td>$183,000</td>
                          </tr>
                          <tr>
                              <td>Michael Bruce</td>
                              <td>Javascript Developer</td>
                              <td>Singapore</td>
                              <td>29</td>
                              <td>2011/06/27</td>
                              <td>$183,000</td>
                          </tr>
                          <tr>
                              <td>Donna Snider</td>
                              <td>Customer Support</td>
                              <td>New York</td>
                              <td>27</td>
                              <td>2011/01/25</td>
                              <td>$112,000</td>
                          </tr>
                      </tbody>
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
                  </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <footer class="footer footer-transparent d-print-none">
          <div class="container-fluid">
            <div class="row text-center align-items-center flex-row-reverse">
              <div class="col-lg-auto ms-lg-auto">
                <ul class="list-inline list-inline-dots mb-0">
                  <li class="list-inline-item"><a href="./docs/index.html" class="link-secondary">Documentation</a></li>
                  <li class="list-inline-item"><a href="./license.html" class="link-secondary">License</a></li>
                  <li class="list-inline-item"><a href="https://github.com/tabler/tabler" target="_blank" class="link-secondary" rel="noopener">Source code</a></li>
                  <li class="list-inline-item">
                    <a href="https://github.com/sponsors/codecalm" target="_blank" class="link-secondary" rel="noopener">
                      <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon text-pink icon-filled icon-inline" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19.5 13.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" /></svg>
                      Sponsor
                    </a>
                  </li>
                </ul>
              </div>
              <div class="col-12 col-lg-auto mt-3 mt-lg-0">
                <ul class="list-inline list-inline-dots mb-0">
                  <li class="list-inline-item">
                    Copyright &copy; 2022
                    <a href="." class="link-secondary">Tabler</a>.
                    All rights reserved.
                  </li>
                  <li class="list-inline-item">
                    <a href="./changelog.html" class="link-secondary" rel="noopener">
                      v1.0.0-beta5
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="./dist/js/tabler.min.js"></script>
    <script src="./dist/js/demo.min.js"></script>
  </body>
</html>