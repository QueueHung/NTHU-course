<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="_token" content="{{ csrf_token() }}"/>


  <title>SB Admin 2 - Tables</title>

  <!-- Custom fonts for this template -->
  <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="{{asset('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
      @include('layout.sidebar')
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        @include('layout.topbar')
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <!-- Collapsable Card Example -->
          <div class="card shadow mb-4">
            <!-- Card Header - Accordion -->
            <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
              <h6 class="m-0 font-weight-bold text-primary">Collapsable Card Example</h6>
            </a>
            <!-- Card Content - Collapse -->
            <div class="collapse show" id="collapseCardExample">
              <div class="card-body">
                This is a collapsable card example using Bootstrap's built in collapse functionality. <strong>Click on the card header</strong> to see the card body collapse and expand!
                <a href="#" class="btn btn-primary btn-icon-split show-btn">
                  <span class="icon text-white-50">
                    <i class="fas fa-flag"></i>
                  </span>
                  <span class="text">Show all courses</span> 
                </a>

                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Dropdown
                </button>
                <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
                  @foreach($classes as $class)
                    <a class="dropdown-item course-class" href="#" id="{{$class->name}}">{{$class->name}}</a>  
                  @endforeach
                  
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </div>

            </div>
          </div>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Course number</th>
                      <th>Course title</th>
                      <th>Credit</th>
                      <th>Time</th>
                      <th>Room</th>
                      <th>Professor</th>
                      <th>Size limit</th>
                      <th>Object</th>
                      <th>Limit</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Course number</th>
                      <th>Course title</th>
                      <th>Credit</th>
                      <th>Time</th>
                      <th>Room</th>
                      <th>Professor</th>
                      <th>Size limit</th>
                      <th>Object</th>
                      <th>Limit</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    {{--
                    @foreach($courses as $course)
                      <tr>
                        <td>{{ $course->course_number }}</td>
                        <td>{{ $course->course_title }}</td>
                        <td>{{ $course->credit }}</td>
                        <td>{{ $course->time }}</td>
                        <td>{{ $course->room }}</td>
                        <td>{{ $course->professor }}</td>
                        <td>{{ $course->size_limit }}</td>
                        <td>{{ $course->object }}</td>
                        <td>{{ $course->course_limit }}</td>
                      </tr>
                    @endforeach
                    --}}
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{asset('js/sb-admin-2.min.js')}}"></script>

  <!-- Page level plugins -->
  <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

  <!-- Page level custom scripts -->
  <script src="{{asset('js/demo/datatables-demo.js')}}"></script>

  <script type="text/javascript">
    jQuery(document).ready(function($){
      $.ajaxSetup({
        headers:{
          'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
      });
    });

    
    $('.show-btn').click(function(){
        alert("Hello");
    });
    
    $('.course-class').click( function(){
        var name = this.id;
        SelectedCourseClasses(name);
    });

    
    function SelectedCourseClasses(name){
      alert(name);
      $.ajax({
        type : 'POST',
        url : '/AjaxUpdateCourseInfo',
        data:{
          'SelectedClass' : name,
        },
        dataType:'json',
        success: function(data){
          console.log(data);
          UpdateTable(data);
        },
      });

      function UpdateTable(data){
        var CoursesArray = []
        data.courses.forEach(function(element){
          var CourseArray = Object.keys(element).map(item => element[item]);
          var course_number = CourseArray[1] + CourseArray[2] + CourseArray[3];
          //console.log(course_number);
          CourseArray.splice(0,4,course_number);
          CourseArray.splice(9,2);
          console.log(CourseArray);
          CoursesArray.push(CourseArray);
        }); 
        console.log(CoursesArray);
        
        $('#dataTable').DataTable({
          searching: false,
          ordering: false,
          destroy:true,
          data: CoursesArray,
          columns: [
              { title: "Course number" },
              { title: "Course title" },
              { title: "Credit" },
              { title: "Time" },
              { title: "Room" },
              { title: "Professor" },
              { title: "Size limit" },
              { title: "Object" },
              { title: "Limit" }      
          ]
        });
        
      }

    };
    
  </script>


</body>

</html>
