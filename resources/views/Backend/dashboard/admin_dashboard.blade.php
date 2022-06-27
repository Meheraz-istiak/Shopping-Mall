<!DOCTYPE html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>Test</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <!-- Favicon-->

    <!-- plugin css file  -->
   <link
      rel="stylesheet"
      href="{{asset('assets/plugin/datatables/responsive.dataTables.min.css')}}"
    />
    <link
      rel="stylesheet"
      href="{{asset('assets/plugin/datatables/dataTables.bootstrap5.min.css')}}"
    />

    <!-- project css file  -->
    <link rel="stylesheet" href="{{asset('assets/css/ebazar.style.min.css')}}" />
   @yield('css')
  
  </head>
  <body>
    <div id="ebazar-layout" class="theme-blue">
      <!-- sidebar -->
    @include('Backend.dashboard.sidebar')

      <!-- main body area -->
      <div class="main px-lg-4 px-md-4">
        <!-- Body: Header -->
        <div class="header">
          <nav class="navbar py-4">
            <div class="container-xxl">
              <!-- header rightbar icon -->
              <div
                class="h-right d-flex align-items-center mr-5 mr-lg-0 order-1"
              >
                <div class="dropdown notifications">
                  <a
                    class="nav-link dropdown-toggle pulse"
                    href="#"
                    role="button"
                    data-bs-toggle="dropdown"
                  >
                    <i class="icofont-alarm fs-5"></i>
                    <span class="pulse-ring"></span>
                  </a>
                  <div
                    id="NotificationsDiv"
                    class="dropdown-menu rounded-lg shadow border-0 dropdown-animation dropdown-menu-md-end p-0 m-0 mt-3"
                  >
                    <div class="card border-0 w380">
                      <div class="card-header border-0 p-3">
                        <h5
                          class="mb-0 font-weight-light d-flex justify-content-between"
                        >
                          <span>Notifications</span>
                          <span class="badge text-white">06</span>
                        </h5>
                      </div>
                      <div class="tab-content card-body">
                        <div class="tab-pane fade show active">
                          <ul class="list-unstyled list mb-0">
                            <li class="py-2 mb-1 border-bottom">
                              <a href="javascript:void(0);" class="d-flex">
                                <img
                                  class="avatar rounded-circle"
                                  src="assets/images/xs/avatar1.svg"
                                  alt=""
                                />
                                <div class="flex-fill ms-2">
                                  <p
                                    class="d-flex justify-content-between mb-0"
                                  >
                                    <span class="font-weight-bold"
                                      >Chloe Walkerr</span
                                    >
                                    <small>2MIN</small>
                                  </p>
                                  <span class=""
                                    >Added New Product 2021-07-15
                                    <span class="badge bg-success"
                                      >Add</span
                                    ></span
                                  >
                                </div>
                              </a>
                            </li>
                            <li class="py-2 mb-1 border-bottom">
                              <a href="javascript:void(0);" class="d-flex">
                                <div class="avatar rounded-circle no-thumbnail">
                                  AH
                                </div>
                                <div class="flex-fill ms-2">
                                  <p
                                    class="d-flex justify-content-between mb-0"
                                  >
                                    <span class="font-weight-bold"
                                      >Alan Hill</span
                                    >
                                    <small>13MIN</small>
                                  </p>
                                  <span class="">Invoice generator </span>
                                </div>
                              </a>
                            </li>
                            <li class="py-2 mb-1 border-bottom">
                              <a href="javascript:void(0);" class="d-flex">
                                <img
                                  class="avatar rounded-circle"
                                  src="assets/images/xs/avatar3.svg"
                                  alt=""
                                />
                                <div class="flex-fill ms-2">
                                  <p
                                    class="d-flex justify-content-between mb-0"
                                  >
                                    <span class="font-weight-bold"
                                      >Melanie Oliver</span
                                    >
                                    <small>1HR</small>
                                  </p>
                                  <span class="">Orader Return RT-00004</span>
                                </div>
                              </a>
                            </li>
                            <li class="py-2 mb-1 border-bottom">
                              <a href="javascript:void(0);" class="d-flex">
                                <img
                                  class="avatar rounded-circle"
                                  src="assets/images/xs/avatar5.svg"
                                  alt=""
                                />
                                <div class="flex-fill ms-2">
                                  <p
                                    class="d-flex justify-content-between mb-0"
                                  >
                                    <span class="font-weight-bold"
                                      >Boris Hart</span
                                    >
                                    <small>13MIN</small>
                                  </p>
                                  <span class=""
                                    >Product Order to Toyseller</span
                                  >
                                </div>
                              </a>
                            </li>
                            <li class="py-2 mb-1 border-bottom">
                              <a href="javascript:void(0);" class="d-flex">
                                <img
                                  class="avatar rounded-circle"
                                  src="assets/images/xs/avatar6.svg"
                                  alt=""
                                />
                                <div class="flex-fill ms-2">
                                  <p
                                    class="d-flex justify-content-between mb-0"
                                  >
                                    <span class="font-weight-bold"
                                      >Alan Lambert</span
                                    >
                                    <small>1HR</small>
                                  </p>
                                  <span class="">Leave Apply</span>
                                </div>
                              </a>
                            </li>
                            <li class="py-2">
                              <a href="javascript:void(0);" class="d-flex">
                                <img
                                  class="avatar rounded-circle"
                                  src="assets/images/xs/avatar7.svg"
                                  alt=""
                                />
                                <div class="flex-fill ms-2">
                                  <p
                                    class="d-flex justify-content-between mb-0"
                                  >
                                    <span class="font-weight-bold"
                                      >Zoe Wright</span
                                    >
                                    <small class="">1DAY</small>
                                  </p>
                                  <span class=""
                                    >Product Stoke Entry Updated</span
                                  >
                                </div>
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <a class="card-footer text-center border-top-0" href="#">
                        View all notifications</a
                      >
                    </div>
                  </div>
                </div>
        @include('Backend.dashboard.header')
        </div>

        <!-- Body: Body -->
        @yield('content')
  

    

    <!-- Jquery Core Js -->
    <script src="{{asset('assets/bundles/libscripts.bundle.js')}}"></script>

    <!-- Plugin Js -->
    <script src="{{asset('assets/bundles/apexcharts.bundle.js')}}"></script>
    <script src="{{asset('assets/bundles/dataTables.bundle.js')}}"></script>

    <!-- Jquery Page Js -->
    <script src="{{asset('assets/js/template.js')}}"></script>
    <script src="{{asset('assets/js/page/index.js')}}"></script>
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB1Jr7axGGkwvHRnNfoOzoVRFV3yOPHJEU&amp;callback=myMap"></script> -->
    <script>
      $("#myDataTable")
        .addClass("nowrap")
        .dataTable({
          responsive: true,
          columnDefs: [{ targets: [-1, -3], className: "dt-body-right" }],
        });
    </script>
  </body>
</html>
