<!DOCTYPE html>
<html lang="en">

<head>
  @include('Template.head')
</head>

<body>
  @include('Template.sidebar')
  <!-- End Sidebar -->

  <div class="main-panel">
    <div class="main-header">
      <div class="main-header-logo">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="dark">
          <a href="index.html" class="logo">
            <img src="assets/img/kaiadmin/logo_light.svg" alt="navbar brand" class="navbar-brand" height="20" />
          </a>
          <div class="nav-toggle">
            <button class="btn btn-toggle toggle-sidebar">
              <i class="gg-menu-right"></i>
            </button>
            <button class="btn btn-toggle sidenav-toggler">
              <i class="gg-menu-left"></i>
            </button>
          </div>
          <button class="topbar-toggler more">
            <i class="gg-more-vertical-alt"></i>
          </button>
        </div>
        <!-- End Logo Header -->
      </div>
      <!-- Navbar Header -->
      @include('Template.navbar')
      <!-- End Navbar -->
    </div>

    <div class="container">
      <div class="page-inner">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
          <!-- <div>
                <h3 class="fw-bold mb-3">Dashboard</h3>
                <h6 class="op-7 mb-2">Free Bootstrap 5 Admin Dashboard</h6>
              </div> -->
          <!-- <div class="ms-md-auto py-2 py-md-0">
                <a href="#" class="btn btn-label-info btn-round me-2">Manage</a>
                <a href="#" class="btn btn-primary btn-round">Add Customer</a>
              </div> -->
        </div>
        <div class="row">
        <div class="card">
                  <div class="card-header">
                    <div class="d-flex align-items-center">
                      <h4 class="card-title">Add Row</h4>
                      <button class="btn btn-primary btn-round ms-auto" data-bs-toggle="modal" data-bs-target="#addRowModal">
                        <i class="fa fa-plus"></i>
                        Add Row
                      </button>
                    </div>
                  </div>
                  <div class="card-body">
                    <!-- Modal -->
                    <div class="modal fade" id="addRowModal" tabindex="-1" aria-hidden="true" style="display: none;">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header border-0">
                            <h5 class="modal-title">
                              <span class="fw-mediumbold"> New</span>
                              <span class="fw-light"> Row </span>
                            </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">×</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <p class="small">
                              Create a new row using this form, make sure you
                              fill them all
                            </p>
                            <form>
                              <div class="row">
                                <div class="col-sm-12">
                                  <div class="form-group form-group-default">
                                    <label>Name</label>
                                    <input id="addName" type="text" class="form-control" placeholder="fill name">
                                  </div>
                                </div>
                                <div class="col-md-6 pe-0">
                                  <div class="form-group form-group-default">
                                    <label>Position</label>
                                    <input id="addPosition" type="text" class="form-control" placeholder="fill position">
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group form-group-default">
                                    <label>Office</label>
                                    <input id="addOffice" type="text" class="form-control" placeholder="fill office">
                                  </div>
                                </div>
                              </div>
                            </form>
                          </div>
                          <div class="modal-footer border-0">
                            <button type="button" id="addRowButton" class="btn btn-primary">
                              Add
                            </button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">
                              Close
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="table-responsive">
                      <div id="add-row_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="add-row_length"><label>Show <select name="add-row_length" aria-controls="add-row" class="form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="add-row_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="add-row"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="add-row" class="display table table-striped table-hover dataTable" role="grid" aria-describedby="add-row_info">                         
                        <tr role="row" class="odd">
                            <td class="sorting_1">Ikbal Ramadhan</td>
                            <td>RPL</td>
                            <td>Wahdin</td>
                            <td>
                              <div class="form-button-action">
                                <button type="button" data-bs-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
                                  <i class="fa fa-edit"></i>
                                </button>
                                <button type="button" data-bs-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
                                  <i class="fa fa-times"></i>
                                </button>
                              </div>
                            </td>
                          </tr><tr role="row" class="even">
                            <td class="sorting_1">Ashton Cox</td>
                            <td>Junior Technical Author</td>
                            <td>San Francisco</td>
                            <td>
                              <div class="form-button-action">
                                <button type="button" data-bs-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
                                  <i class="fa fa-edit"></i>
                                </button>
                                <button type="button" data-bs-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
                                  <i class="fa fa-times"></i>
                                </button>
                              </div>
                            </td>
                          </tr><tr role="row" class="odd">
                            <td class="sorting_1">Brielle Williamson</td>
                            <td>Integration Specialist</td>
                            <td>New York</td>
                            <td>
                              <div class="form-button-action">
                                <button type="button" data-bs-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
                                  <i class="fa fa-edit"></i>
                                </button>
                                <button type="button" data-bs-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
                                  <i class="fa fa-times"></i>
                                </button>
                              </div>
                            </td>
                          </tr><tr role="row" class="even">
                            <td class="sorting_1">Cedric Kelly</td>
                            <td>Senior Javascript Developer</td>
                            <td>Edinburgh</td>
                            <td>
                              <div class="form-button-action">
                                <button type="button" data-bs-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
                                  <i class="fa fa-edit"></i>
                                </button>
                                <button type="button" data-bs-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
                                  <i class="fa fa-times"></i>
                                </button>
                              </div>
                            </td>
                          </tr><tr role="row" class="odd">
                            <td class="sorting_1">Colleen Hurst</td>
                            <td>Javascript Developer</td>
                            <td>San Francisco</td>
                            <td>
                              <div class="form-button-action">
                                <button type="button" data-bs-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
                                  <i class="fa fa-edit"></i>
                                </button>
                                <button type="button" data-bs-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
                                  <i class="fa fa-times"></i>
                                </button>
                              </div>
                            </td>
                          </tr></tbody>
                      </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="add-row_info" role="status" aria-live="polite">Showing 1 to 5 of 10 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="add-row_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="add-row_previous"><a href="#" aria-controls="add-row" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="add-row" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="add-row" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item next" id="add-row_next"><a href="#" aria-controls="add-row" data-dt-idx="3" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                    </div>
                  </div>
                </div>
      </div>
    </div>
  </div>


  @include('Template.footer')

  <!-- Custom template | don't include it in your project! -->
  <div class="custom-template">
    <div class="title">Settings</div>
    <div class="custom-content">
      <div class="switcher">
        <div class="switch-block">
          <h4>Logo Header</h4>
          <div class="btnSwitch">
            <button type="button" class="selected changeLogoHeaderColor" data-color="dark"></button>
            <button type="button" class="changeLogoHeaderColor" data-color="blue"></button>
            <button type="button" class="changeLogoHeaderColor" data-color="purple"></button>
            <button type="button" class="changeLogoHeaderColor" data-color="light-blue"></button>
            <button type="button" class="changeLogoHeaderColor" data-color="green"></button>
            <button type="button" class="changeLogoHeaderColor" data-color="orange"></button>
            <button type="button" class="changeLogoHeaderColor" data-color="red"></button>
            <button type="button" class="changeLogoHeaderColor" data-color="white"></button>
            <br />
            <button type="button" class="changeLogoHeaderColor" data-color="dark2"></button>
            <button type="button" class="changeLogoHeaderColor" data-color="blue2"></button>
            <button type="button" class="changeLogoHeaderColor" data-color="purple2"></button>
            <button type="button" class="changeLogoHeaderColor" data-color="light-blue2"></button>
            <button type="button" class="changeLogoHeaderColor" data-color="green2"></button>
            <button type="button" class="changeLogoHeaderColor" data-color="orange2"></button>
            <button type="button" class="changeLogoHeaderColor" data-color="red2"></button>
          </div>
        </div>
        <div class="switch-block">
          <h4>Navbar Header</h4>
          <div class="btnSwitch">
            <button type="button" class="changeTopBarColor" data-color="dark"></button>
            <button type="button" class="changeTopBarColor" data-color="blue"></button>
            <button type="button" class="changeTopBarColor" data-color="purple"></button>
            <button type="button" class="changeTopBarColor" data-color="light-blue"></button>
            <button type="button" class="changeTopBarColor" data-color="green"></button>
            <button type="button" class="changeTopBarColor" data-color="orange"></button>
            <button type="button" class="changeTopBarColor" data-color="red"></button>
            <button type="button" class="selected changeTopBarColor" data-color="white"></button>
            <br />
            <button type="button" class="changeTopBarColor" data-color="dark2"></button>
            <button type="button" class="changeTopBarColor" data-color="blue2"></button>
            <button type="button" class="changeTopBarColor" data-color="purple2"></button>
            <button type="button" class="changeTopBarColor" data-color="light-blue2"></button>
            <button type="button" class="changeTopBarColor" data-color="green2"></button>
            <button type="button" class="changeTopBarColor" data-color="orange2"></button>
            <button type="button" class="changeTopBarColor" data-color="red2"></button>
          </div>
        </div>
        <div class="switch-block">
          <h4>Sidebar</h4>
          <div class="btnSwitch">
            <button type="button" class="changeSideBarColor" data-color="white"></button>
            <button type="button" class="selected changeSideBarColor" data-color="dark"></button>
            <button type="button" class="changeSideBarColor" data-color="dark2"></button>
          </div>
        </div>
      </div>
    </div>
    <div class="custom-toggle">
      <i class="icon-settings"></i>
    </div>
  </div>
  <!-- End Custom template -->
  </div>
  <!--   Core JS Files   -->
  <script src="assets/js/core/jquery-3.7.1.min.js"></script>
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>

  <!-- jQuery Scrollbar -->
  <script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

  <!-- Chart JS -->
  <script src="assets/js/plugin/chart.js/chart.min.js"></script>

  <!-- jQuery Sparkline -->
  <script src="assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

  <!-- Chart Circle -->
  <script src="assets/js/plugin/chart-circle/circles.min.js"></script>

  <!-- Datatables -->
  <script src="assets/js/plugin/datatables/datatables.min.js"></script>

  <!-- Bootstrap Notify -->

  <!-- jQuery Vector Maps -->
  <script src="assets/js/plugin/jsvectormap/jsvectormap.min.js"></script>
  <script src="assets/js/plugin/jsvectormap/world.js"></script>

  <!-- Sweet Alert -->
  <script src="assets/js/plugin/sweetalert/sweetalert.min.js"></script>

  <!-- Kaiadmin JS -->
  <script src="assets/js/kaiadmin.min.js"></script>

  <!-- Kaiadmin DEMO methods, don't include it in your project! -->
  <script src="assets/js/setting-demo.js"></script>
  <script src="assets/js/demo.js"></script>
  <script>
    $("#lineChart").sparkline([102, 109, 120, 99, 110, 105, 115], {
      type: "line",
      height: "70",
      width: "100%",
      lineWidth: "2",
      lineColor: "#177dff",
      fillColor: "rgba(23, 125, 255, 0.14)",
    });

    $("#lineChart2").sparkline([99, 125, 122, 105, 110, 124, 115], {
      type: "line",
      height: "70",
      width: "100%",
      lineWidth: "2",
      lineColor: "#f3545d",
      fillColor: "rgba(243, 84, 93, .14)",
    });

    $("#lineChart3").sparkline([105, 103, 123, 100, 95, 105, 115], {
      type: "line",
      height: "70",
      width: "100%",
      lineWidth: "2",
      lineColor: "#ffa534",
      fillColor: "rgba(255, 165, 52, .14)",
    });
  </script>
</body>

</html>