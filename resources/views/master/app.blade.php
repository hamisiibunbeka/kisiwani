<!DOCTYPE html>
<html lang="en">

  <head>
      <meta charset="utf-8" />
      <title>POS</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
      <meta content="Coderthemes" name="author" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- App favicon -->
      <link rel="shortcut icon" href="{{ asset('master/assets/images/favicon.png') }}">

      <!-- Plugins css -->
      <link href="{{ asset('master/assets/libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet" type="text/css" />
      <link href="{{ asset('master/assets/libs/selectize/css/selectize.bootstrap3.css') }}" rel="stylesheet" type="text/css" />
      
      <!-- Bootstrap css -->
      <link href="{{ asset('master/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
      <!-- App css -->
      <link href="{{ asset('master/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-style"/>
      <!-- icons -->
      <link href="{{ asset('master/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
      <!-- Head js -->
      <script src="{{ asset('master/assets/js/head.js') }}"></script>

      <!-- third party css -->
      <link href="{{ asset('master/assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" type="text/css" />
      <link href="{{ asset('master/assets/libs/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css') }}" rel="stylesheet" type="text/css" />
      <link href="{{ asset('master/assets/libs/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css') }}" rel="stylesheet" type="text/css" />
      <link href="{{ asset('master/assets/libs/datatables.net-select-bs5/css//select.bootstrap5.min.css') }}" rel="stylesheet" type="text/css" />
      <!-- third party css end -->

      <!-- Toarstr css -->
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >

      <!-- bootstrap-touchspin -->
      <link href="{{ asset('master/assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css') }}" rel="stylesheet" type="text/css" />

      <!-- Plugins css -->
      <link href="{{ asset('master/assets/libs/spectrum-colorpicker2/spectrum.min.css') }}" rel="stylesheet" type="text/css">
      <link href="{{ asset('master/assets/libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet" type="text/css" />
      <link href="{{ asset('master/assets/libs/clockpicker/bootstrap-clockpicker.min.css') }}" rel="stylesheet" type="text/css" />
      <link href="{{ asset('master/assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet" type="text/css" />
      <link href="{{ asset('master/assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet" type="text/css" />

      <!-- Plugins css -->
      <link href="{{ asset('master/assets/libs/mohithg-switchery/switchery.min.css') }}" rel="stylesheet" type="text/css" />
      <link href="{{ asset('master/assets/libs/multiselect/css/multi-select.css') }}" rel="stylesheet" type="text/css" />
      <link href="{{ asset('master/assets/libs/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
      <link href="{{ asset('master/assets/libs/selectize/css/selectize.bootstrap3.css') }}" rel="stylesheet" type="text/css" />

      <!-- jQuery library -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

      <!-- Latest compiled JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

      <script src="https://code.jquery.com/jquery-3.7.0.slim.js" integrity="sha256-7GO+jepT9gJe9LB4XFf8snVOjX3iYNb0FHYr5LI1N5c=" crossorigin="anonymous"></script>

  </head>

    <!-- body start -->
{{--  <body data-layout-mode="default" data-theme="light" data-topbar-color="dark" data-menu-position="fixed" data-leftbar-color="light" data-leftbar-size='default' data-sidebar-user='false'> --}}
      <body data-layout-mode="default" data-theme="light" data-topbar-color="dark" data-menu-position="fixed" data-leftbar-color="light" data-leftbar-size="condensed" data-sidebar-user="false" class="menuitem-active">
        <!-- Begin page -->
        <div id="wrapper">

            
            <!-- Topbar Start -->
            @include('master.topbar')
            <!-- end Topbar -->

            <!-- ========== Sidebar Start ========== -->
            @include('master.sidebar')
            <!-- Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                @yield('content')
                <!-- content -->

                <!-- Footer Start -->
                @include('master.footer')
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor js -->
        <script src="{{ asset('master/assets/js/vendor.min.js') }}"></script>

        <!-- Plugins js-->
        <script src="{{ asset('master/assets/libs/flatpickr/flatpickr.min.js') }}"></script>
        <script src="{{ asset('master/') }}assets/libs/apexcharts/apexcharts.min.js"></script>

        <script src="{{ asset('master/assets/libs/selectize/js/standalone/selectize.min.js') }}"></script>

        <!-- Dashboar 1 init js-->
        <script src="{{ asset('master/assets/js/pages/dashboard-1.init.js') }}"></script>

        <!-- App js-->
        <script src="{{ asset('master/assets/js/app.min.js') }}"></script>

        <!-- third party js -->
        <script src="{{ asset('master/assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('master/assets/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js') }}"></script>
        <script src="{{ asset('master/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('master/assets/libs/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js') }}"></script>
        <script src="{{ asset('master/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('master/assets/libs/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js') }}"></script>
        <script src="{{ asset('master/assets/libs/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('master/assets/libs/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
        <script src="{{ asset('master/assets/libs/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
        <script src="{{ asset('master/assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script>
        <script src="{{ asset('master/assets/libs/datatables.net-select/js/dataTables.select.min.js') }}"></script>
        <script src="{{ asset('master/assets/libs/pdfmake/build/pdfmake.min.js') }}"></script>
        <script src="{{ asset('master/assets/libs/pdfmake/build/vfs_fonts.js') }}"></script>
        <!-- third party js ends -->

        <!-- Datatables init -->
        <script src="{{ asset('master/assets/js/pages/datatables.init.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('master/assets/js/app.min.js') }}"></script>

        <!-- sweet alert -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

        <script src="{{ asset('master/assets/js/code.js') }}"></script>

      <script>
      $(function(){
          $(document).on('click','#delete',function(e){
              e.preventDefault();
              var link = $(this).attr("href");

        
                        Swal.fire({
                          title: 'Are you sure?',
                          text: "Delete This Data?",
                          icon: 'warning',
                          showCancelButton: true,
                          confirmButtonColor: '#3085d6',
                          cancelButtonColor: '#d33',
                          confirmButtonText: 'Yes, delete it!'
                        }).then((result) => {
                          if (result.isConfirmed) {
                            window.location.href = link
                            Swal.fire(
                              'Deleted!',
                              'Your file has been deleted.',
                              'success'
                            )
                          }
                        }) 


          });

        });
      </script>

      <!-- Toarstr js -->
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
      <script>
          @if(Session::has('message'))
          var type = "{{ Session::get('alert-type','info') }}"
          switch(type){
            case 'info':
            toastr.info(" {{ Session::get('message') }} ");
            break;
        
            case 'success':
            toastr.success(" {{ Session::get('message') }} ");
            break;
        
            case 'warning':
            toastr.warning(" {{ Session::get('message') }} ");
            break;
        
            case 'error':
            toastr.error(" {{ Session::get('message') }} ");
            break; 
          }
          @endif 
        </script>
            
          <!-- bootstrap-touchspin -->
          <script src="{{ asset('master/assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js') }}"></script>

          <!-- Plugins js-->
          <script src="{{ asset('master/assets/libs/flatpickr/flatpickr.min.js') }}"></script>
          <script src="{{ asset('master/assets/libs/spectrum-colorpicker2/spectrum.min.js') }}"></script>
          <script src="{{ asset('master/assets/libs/clockpicker/bootstrap-clockpicker.min.js') }}"></script>
          <script src="{{ asset('master/assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>

          <!-- Init js-->
          <script src="{{ asset('master/assets/js/pages/form-pickers.init.js') }}"></script>

          <script src="{{ asset('master/assets/libs/selectize/js/standalone/selectize.min.js') }}"></script>
          <script src="{{ asset('master/assets/libs/mohithg-switchery/switchery.min.js') }}"></script>
          <script src="{{ asset('master/assets/libs/multiselect/js/jquery.multi-select.js') }}"></script>
          <script src="{{ asset('master/assets/libs/select2/js/select2.min.js') }}"></script>
          <script src="{{ asset('master/assets/libs/jquery-mockjax/jquery.mockjax.min.js') }}"></script>
          <script src="{{ asset('master/assets/libs/devbridge-autocomplete/jquery.autocomplete.min.js') }}"></script>
          <script src="{{ asset('master/assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js') }}"></script>
          <script src="{{ asset('master/assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"></script>

          <!-- Init js-->
          <script src="{{ asset('master/assets/js/pages/form-advanced.init.js') }}"></script>

    </body>
</html>