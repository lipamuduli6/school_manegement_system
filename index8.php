<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{total_students}}</h3>

                        <p>Total Students</p>
                    </div>
                    <div class="icon">
                      <i class="nav-icon fas fa-user-graduate"></i>
                    </div>
                    <a href="{% url 'student_list' %}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>

                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>{{total_teachers}}</h3>

                        <p>Total Teachers</p>
                    </div>
                    <div class="icon">
                      <i class="nav-icon fas fa-users"></i>
                    </div>
                    <a href="{% url 'teacher_record' %}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-purple">
                    <div class="inner">
                        <h3>{{total_departments}}</h3>

                        <p>Total Department</p>
                    </div>
                    <div class="icon">
                      <i class="nav-icon fas fa-th-list"></i>
                    </div>
                    <a href="{% url 'department_list' %}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>{{total_classes}}</h3>

                        <p>Total Classes</p>
                    </div>
                    <div class="icon">
                      <i class="nav-icon fas fa-book"></i>
                    </div>
                    <a href="{% url 'cls_list' %}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
            <div class="col-md-6">
                <!-- LINE CHART -->
                <div class="card card-dark">
                  <div class="card-header">
                      <h3 class="card-title">Staffs - Students Overview</h3>
                      <div class="card-tools">
                          <button type="button" class="btn btn-tool" data-card-widget="collapse">
                              <i class="fas fa-minus"></i>
                          </button>
                          <button type="button" class="btn btn-tool" data-card-widget="remove">
                              <i class="fas fa-times"></i>
                          </button>
                      </div>
                  </div>
                  <div class="card-body">
                      <div class="chart">
                          <canvas id="pieChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                      </div>
                  </div>
                </div>
                  <!-- /.card-body -->
                </div>
                <div class="col-md-6">
                    <div class="card card-dark">
              <div class="card-header">
                <h3 class="card-title">Attendance Per Subject</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                <div class="chart">
                  <canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
                </div>
            <!-- right col -->
        </div>
        <!-- /.row (main row) -->
        <div class="row">
          <div class="col-lg-12">
            <!-- BAR CHART -->
            <div class="card card-dark">
              <div class="card-header">
                <h3 class="card-title">Student's Attendance & Leave Overview</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                <div class="chart">
                  <canvas id="barChart2" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>


          <div class="col-lg-6">
            
          </div>
        
        </div>

        <div class="row">

          <div class="col-lg-6">
            <!-- PIE CHART -->
            <div class="card card-dark">
              <div class="card-header">
                <h3 class="card-title">Total Students in Each Course</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                <canvas id="pieChart2" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
              </div>
              <!-- /.card-body -->
              </div>
          </div>

          <div class="col-lg-6">
            <!-- PIE CHART -->
            <div class="card card-dark">
              <div class="card-header">
                <h3 class="card-title">Total Students in Each Subject</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                <canvas id="pieChart3" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
              </div>
              <!-- /.card-body -->
          </div>
          </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
{% endblock content %}

{% block custom_js %}
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.11.3/Chart.min.js"></script>
<script>
    $(document).ready(function(){
        console.log('Total Students:', {{ total_students }});
        console.log('Total Teachers:', {{ total_teachers }});

        var donutData = {
            labels: ['Students', 'Teachers'],
            datasets: [
                {
                    data: [{{ total_students }}, {{ total_teachers }}],
                    backgroundColor: ['#00a65a', '#f39c12'],
                }
            ]
        };

        console.log('Donut Data:', donutData);

        var pieChartCanvas = $('#pieChart').get(0).getContext('2d');
        var pieData = donutData;
        var pieOptions = {
            maintainAspectRatio: false,
            responsive: true,
        };

        // Create pie or doughnut chart
        var pieChart = new Chart(pieChartCanvas, {
            type: 'pie',
            data: pieData,
            options: pieOptions,
        });
    });
</script>
  <script>

        var subject_list = {{ subject_list|safe|escape }};
        var attendance_list = {{ attendance_list }};
  
            var barChartData = {
      labels  : subject_list,
      datasets: [
      {
        label               : 'Attendance Per Subject',
        backgroundColor     : '#17A2B8',
        borderColor         : 'rgba(60,141,188,0.8)',
        pointRadius          : false,
        pointColor          : '#3b8bba',
        pointStrokeColor    : 'rgba(60,141,188,1)',
        pointHighlightFill  : '#fff',
        pointHighlightStroke: 'rgba(60,141,188,1)',
        data                : attendance_list
      }, 
      
      ]
    }
        var barChartCanvas = $('#barChart').get(0).getContext('2d')
        var temp0 = barChartData.datasets[0]
        //var temp1 = areaChartData.datasets[1]
        barChartData.datasets[0] = temp0
       // barChartData.datasets[1] = temp0
    
    var stackedBarChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      scales: {
        xAxes: [{
          stacked: true,
        }],
        yAxes: [{
          stacked: true
        }]
      }
    }
    
        var barChart = new Chart(barChartCanvas, {
          type: 'bar', 
          data: barChartData,
          options: stackedBarChartOptions
        })
       

      // Total Students in Each Subject
      var student_count_list_in_subject = {{ student_count_list_in_subject }}
      var subject_list = {{ subject_list|safe }}
      var pieData3 = {
        labels: subject_list,
        datasets: [
          {
            data: student_count_list_in_subject,
            backgroundColor : ['#8f251f', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#894e9c', '#0b523a', '#a1156d', '#9e4603'],
          }
        ]
      }

      //-------------
      //- PIE CHART -
      //-------------
      // Get context with jQuery - using jQuery's .get() method.
      var pieChartCanvas3 = $('#pieChart3').get(0).getContext('2d')
      var pieData3        = pieData3;
      var pieOptions3     = {
        maintainAspectRatio : false,
        responsive : true,
      }

      var pieChart3 = new Chart(pieChartCanvas3, {
        type: 'pie',
        data: pieData3,
        options: pieOptions3      
      })   

      

         //- BAR CHART - Student Attendance & Leave Overview //
      var student_attendance_present_list = {{ student_attendance_present_list }};
      var student_attendance_leave_list = {{ student_attendance_leave_list }};
      var student_name_list = {{ student_name_list|safe }};

      var areaChartData2 = {
        labels  : student_name_list,
        datasets: [
          {
            label               : 'Absent/Leave',
            backgroundColor     : '#b50a04',
            borderColor         : '#b50a04',
            pointRadius          : false,
            pointColor          : '#3b8bba',
            pointStrokeColor    : 'rgba(60,141,188,1)',
            pointHighlightFill  : '#fff',
            pointHighlightStroke: 'rgba(60,141,188,1)',
            data                : student_attendance_leave_list 
          },
          {
            label               : 'Attendance',
            backgroundColor     : '#5a615c',
            borderColor         : 'rgba(210, 214, 222, 1)',
            pointRadius         : false,
            pointColor          : 'rgba(210, 214, 222, 1)',
            pointStrokeColor    : '#c1c7d1',
            pointHighlightFill  : '#fff',
            pointHighlightStroke: 'rgba(220,220,220,1)',
            data                : student_attendance_present_list
          },
        ]
      }


      var barChartCanvas2 = $('#barChart2').get(0).getContext('2d')
      var barChartData2 = jQuery.extend(true, {}, areaChartData2)
      var temp02 = areaChartData2.datasets[0]
      var temp12 = areaChartData2.datasets[1]
      barChartData2.datasets[0] = temp12
      barChartData2.datasets[1] = temp02

      var barChartOptions2 = {
        responsive              : true,
        maintainAspectRatio     : false,
        datasetFill             : false
      }

      var barChart2 = new Chart(barChartCanvas2, {
        type: 'bar', 
        data: barChartData2,
        options: barChartOptions2
      })
      

      // Total Students in Each Course
      //var donutChartCanvas = $('#pieChart2').get(0).getContext('2d')
      var course_name_list = {{ course_name_list|safe }}
      var student_count_list_in_course = {{ student_count_list_in_course }}
      var pieData2 = {
        labels: course_name_list,
        datasets: [
          {
            data: student_count_list_in_course,
            backgroundColor : ['#cc0404', '#00a65a', '#f39c12', '#00A4BD', '#045c8f', '#894e9c', '#9e4603', '#71bfb2'],
          }
        ]
      }

      //-------------
      //- PIE CHART -
      //-------------
      // Get context with jQuery - using jQuery's .get() method.
      var pieChartCanvas2 = $('#pieChart2').get(0).getContext('2d')
      var pieData2        = pieData2;
      var pieOptions2     = {
        maintainAspectRatio : false,
        responsive : true,
      }

      var pieChart2 = new Chart(pieChartCanvas2, {
        type: 'pie',
        data: pieData2,
        options: pieOptions2      
      })
      
      
      })
  </script>