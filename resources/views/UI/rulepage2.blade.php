<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design Bootstrap</title>
  <!-- Font Awesome -->
  <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css"> -->
  <!-- Bootstrap core CSS -->
  <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
  <!-- Material Design Bootstrap -->
  <!-- <link href="css/mdb.min.css" rel="stylesheet"> -->
  <!-- Your custom styles (optional) -->
  <!-- <link href="css/style.min.css" rel="stylesheet"> -->

<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">

  <style>

    .map-container{
overflow:hidden;
padding-bottom:56.25%;
position:relative;
height:0;
}
.map-container iframe{
left:0;
top:0;
height:100%;
width:100%;
position:absolute;
}
  </style>
</head>

<body class="grey lighten-3">

  <!--Main Navigation-->
  <header>

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
      <div class="container-fluid">

        <!-- Brand -->
        <a class="navbar-brand waves-effect" href="https://mdbootstrap.com/docs/jquery/" target="_blank">
          <strong class="blue-text">Cyber Security</strong>
        </a>

        <!-- Collapse -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <!-- Left -->
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link waves-effect" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            
          </ul>

        </div>

      </div>
    </nav>
    <!-- Navbar -->

  </header>
  <!--Main Navigation-->

  <!--Main layout-->
  <main class="pt-5 mx-lg-5">
    <div class="container-fluid mt-5">

      <!-- Heading -->
      <div class="card mb-4 wow fadeIn">

        <!--Card content-->
        <div class="card-body d-sm-flex justify-content-between">

          <h4 class="mb-2 mb-sm-0 pt-1 text-center">
            <a href="https://mdbootstrap.com/docs/jquery/" target="_blank">Malware Tracker</a>
            <span>/</span>
            <span>Dashboard</span>
          </h4>

        </div>

      </div>
      <!-- Heading -->

      <!-- Table with panel -->
      <div class="card card-cascade narrower">

        <!--Card image-->
        <div
          class="view view-cascade gradient-card-header blue-gradient narrower py-2 mx-4 mb-3 d-flex justify-content-between align-items-center">

          <div>
            <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2">
              <i class="fas fa-pencil-alt mt-0"></i>
            </button>
            <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2">
              <i class="far fa-trash-alt mt-0"></i>
            </button>  
            <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2" data-toggle="modal" data-target="#basicExampleModal">
              <i class="fa fa-file" aria-hidden="true"> Generate Rule</i>
            </button>

            <div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
              aria-hidden="true">
              <!--Modal: Contact form-->
              <div class="modal-dialog cascading-modal" role="document">

                <!--Content-->
                <div class="modal-content">

                  <!--Header-->
                  <div class="modal-header primary-color white-text">
                    <h4 class="title">
                      <i class="fa fa-pencil-alt"></i> Generate Rule</h4>
                    <button type="button" class="close waves-effect waves-light" data-dismiss="modal"
                      aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>
                  <!--Body-->
                  <div class="modal-body">

                    <!-- Material input name -->
                    <div class="md-form form-sm">
                      <i class="fa fa-book prefix"></i>
                      <input type="text" id="materialFormNameModalEx1" class="form-control form-control-sm">
                      <label for="materialFormNameModalEx1">Technique name</label>
                    </div>

                    <!-- Material input email -->
                    <div class="md-form form-sm">
                      <i class="fa fa-exclamation-triangle prefix" ></i>
                      <input type="password" id="materialFormEmailModalEx1" class="form-control form-control-sm">
                      <label for="materialFormEmailModalEx1">Threat name</label>
                    </div>

                    <!-- Material input subject -->
                    <div class="md-form form-sm">
                      <i class="fa fa-bolt prefix"></i>
                      <input type="text" id="materialFormSubjectModalEx1" class="form-control form-control-sm">
                      <label for="materialFormSubjectModalEx1">Threat class</label>
                    </div>

                    <!-- Material textarea message -->
                    <div class="md-form form-sm">
                      <i class="fa fa-thermometer-three-quarters prefix"></i>
                      <input type="text" id="materialFormSubjectModalEx1" class="form-control form-control-sm">
                      <label for="materialFormMessageModalEx1">Threat severity</label>
                    </div>

                    <div class="text-center mt-4 mb-2">
                      <button class="btn btn-primary">Submit
                        <i class="fa fa-send ml-2"></i>
                      </button>
                    </div>

                  </div>
                </div>
                <!--/.Content-->
              </div>
              <!--/Modal: Contact form-->
            </div>

          </div>

          <a href="" class="white-text mx-3">Malware Tracker</a>

           <form class="d-flex justify-content-center">
            <!-- Default input -->
            <input type="search" placeholder="Search" aria-label="Search" class="form-control">
            <button class="btn btn-primary btn-sm my-0 p" type="submit">
              <i class="fas fa-search"></i>
            </button>

          </form>

        </div>
        <!--/Card image-->

        <div class="px-4">

          <div class="table-wrapper">
            <!--Table-->
            <table class="table table-hover mb-0">

              <!--Table head-->
              <thead>
                <tr>
                  <th>
                    <input class="form-check-input" type="checkbox" id="checkbox">
                    <label class="form-check-label" for="checkbox" class="mr-2 label-table"></label>
                  </th>
                  <th class="th-lg">
                    <a>Feodo Tracker
                    </a>
                  </th>
                  <th>
                    
                  </th>
                  <th class="th-lg">
                    <a href="">Ransomeware Tracker
                    </a>
                  </th>
                  
                </tr>
              </thead>
              <!--Table head-->

              <!--Table body-->
              <tbody>
                <tr>
                  <th scope="row">
                    <input class="form-check-input" type="checkbox" id="checkbox1">
                    <label class="form-check-label" for="checkbox1" class="label-table"></label>
                  </th>
                  <td>
                    <!-- Title -->
                        <h4 class="card-title"><a>Rules: </a></h4>
                        <!-- Text -->
                        <p class="card-text">ET CNC Shadowserver Reported CnC Server IP group 1</p>

                        <!--Grid column-->
                        <div class="col-md-9 mb-4">

                          <!--Card-->
                          <div class="card mb-4">

                            <!--Card content-->
                            <div class="card-body">

                              <!-- List group links -->
                              <div class="list-group list-group-flush">
                                <a class="list-group-item list-group-item-action waves-effect">Class Type :
                                  <span>trojan-activity
                                  </span>
                                </a>
                                <a class="list-group-item list-group-item-action waves-effect">SIDs :
                                  <span>2404000
                                  </span>
                                </a>
                                <a class="list-group-item list-group-item-action waves-effect">Destination IP :
                                  <span >109.196.130.50,151.13.184.200</span>
                                </a>
                                <a class="list-group-item list-group-item-action waves-effect">Signature Severity:
                                  <span class="badge badge-danger badge-pill pull-right">Major</span>
                                </a>
                                <a class="list-group-item list-group-item-action waves-effect">Message :
                                  <span>ET CNC Shadowserver Reported CnC Server IP group 1</span>
                                </a>
                              </div>
                              <!-- List group links -->

                              <a href="#!" class="black-text d-flex justify-content-end" data-toggle="modal" data-target="#DetailInfo">
                                <h6>Read more <i class="fas fa-angle-double-right"></i></h6>
                              </a>

                            </div>

                          </div>
                          <!--/.Card-->

                        </div>
                        <!--Grid column-->
                  </td>

                  <th scope="row">
                    <input class="form-check-input" type="checkbox" id="checkbox1">
                    <label class="form-check-label" for="checkbox1" class="label-table"></label>
                  </th>
                  <td>
                        <!-- Title -->
                        <h4 class="card-title"><a>Rules: </a></h4>
                        <!-- Text -->
                        <p class="card-text">ET CNC Shadowserver Reported CnC Server IP group 1</p>

                        <!--Grid column-->
                        <div class="col-md-9 mb-4">

                          <!--Card-->
                          <div class="card mb-4">

                            <!--Card content-->
                            <div class="card-body">

                              <!-- List group links -->
                              <div class="list-group list-group-flush">
                                <a class="list-group-item list-group-item-action waves-effect">Class Type :
                                  <span>trojan-activity
                                  </span>
                                </a>
                                <a class="list-group-item list-group-item-action waves-effect">SIDs :
                                  <span>2404000
                                  </span>
                                </a>
                                <a class="list-group-item list-group-item-action waves-effect">Destination IP :
                                  <span >100.6.23.40,101.141.5.17,101.187.104.105</span>
                                </a>
                                <a class="list-group-item list-group-item-action waves-effect">Signature Severity
                                  <span class="badge badge-danger badge-pill pull-right">Major</span>
                                </a>
                                <a class="list-group-item list-group-item-action waves-effect">Message:
                                  <span>ET CNC Shadowserver Reported CnC Server IP group 1</span>
                                </a>
                              </div>
                              <!-- List group links -->

                              <a href="#!" class="black-text d-flex justify-content-end">
                                <h6>Read more <i class="fas fa-angle-double-right"></i></h6>
                              </a>

                            </div>

                          </div>
                          <!--/.Card-->

                        </div>
                        <!--Grid column-->
                  </td>

                </tr>
                <tr>
                  <th scope="row">
                    <input class="form-check-input" type="checkbox" id="checkbox1">
                    <label class="form-check-label" for="checkbox1" class="label-table"></label>
                  </th>
                  <td>
                    <!-- Title -->
                        <h4 class="card-title"><a>Rules: </a></h4>
                        <!-- Text -->
                        <p class="card-text">ET CNC Shadowserver Reported CnC Server IP group 1</p>

                        <!--Grid column-->
                        <div class="col-md-9 mb-4">

                          <!--Card-->
                          <div class="card mb-4">

                            <!--Card content-->
                            <div class="card-body">

                              <!-- List group links -->
                              <div class="list-group list-group-flush">
                                <a class="list-group-item list-group-item-action waves-effect">Class Type :
                                  <span>trojan-activity
                                  </span>
                                </a>
                                <a class="list-group-item list-group-item-action waves-effect">SIDs :
                                  <span>2404000
                                  </span>
                                </a>
                                <a class="list-group-item list-group-item-action waves-effect">Destination IP :
                                  <span >109.196.130.50,151.13.184.200</span>
                                </a>
                                <a class="list-group-item list-group-item-action waves-effect">Signature Severity:
                                  <span class="badge badge-danger badge-pill pull-right">Major</span>
                                </a>
                                <a class="list-group-item list-group-item-action waves-effect">Message :
                                  <span>ET CNC Shadowserver Reported CnC Server IP group 1</span>
                                </a>
                              </div>
                              <!-- List group links -->

                              <a href="#!" class="black-text d-flex justify-content-end" data-toggle="modal" data-target="#DetailInfo">
                                <h6>Read more <i class="fas fa-angle-double-right"></i></h6>
                              </a>

                            </div>

                          </div>
                          <!--/.Card-->

                        </div>
                        <!--Grid column-->
                  </td>

                  <th scope="row">
                    <input class="form-check-input" type="checkbox" id="checkbox1">
                    <label class="form-check-label" for="checkbox1" class="label-table"></label>
                  </th>
                  <td>
                        <!-- Title -->
                        <h4 class="card-title"><a>Rules: </a></h4>
                        <!-- Text -->
                        <p class="card-text">ET CNC Shadowserver Reported CnC Server IP group 1</p>

                        <!--Grid column-->
                        <div class="col-md-9 mb-4">

                          <!--Card-->
                          <div class="card mb-4">

                            <!--Card content-->
                            <div class="card-body">

                              <!-- List group links -->
                              <div class="list-group list-group-flush">
                                <a class="list-group-item list-group-item-action waves-effect">Class Type :
                                  <span>trojan-activity
                                  </span>
                                </a>
                                <a class="list-group-item list-group-item-action waves-effect">SIDs :
                                  <span>2404000
                                  </span>
                                </a>
                                <a class="list-group-item list-group-item-action waves-effect">Destination IP :
                                  <span >100.6.23.40,101.141.5.17,101.187.104.105</span>
                                </a>
                                <a class="list-group-item list-group-item-action waves-effect">Signature Severity
                                  <span class="badge badge-danger badge-pill pull-right">Major</span>
                                </a>
                                <a class="list-group-item list-group-item-action waves-effect">Message:
                                  <span>ET CNC Shadowserver Reported CnC Server IP group 1</span>
                                </a>
                              </div>
                              <!-- List group links -->

                              <a href="#!" class="black-text d-flex justify-content-end">
                                <h6>Read more <i class="fas fa-angle-double-right"></i></h6>
                              </a>

                            </div>

                          </div>
                          <!--/.Card-->

                        </div>
                        <!--Grid column-->
                  </td>

                </tr>

              </tbody>
              <!--Table body-->
            </table>
            <!--Table-->
          </div>

        </div>

      </div>
      <!-- Table with panel -->

      <div class="modal fade" id="DetailInfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
              aria-hidden="true">
              <!--Modal: Contact form-->
              <div class="modal-dialog cascading-modal" role="document">

                <!--Content-->
                <div class="modal-content">

                  <!--Header-->
                  <div class="modal-header primary-color white-text">
                    <h4 class="title">
                      <i class="fa fa-pencil-alt"></i> Threats Details</h4>
                    <button type="button" class="close waves-effect waves-light" data-dismiss="modal"
                      aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>
                  <!--Body-->
                  <div class="modal-body">

                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Action :</th>
                          <th>Alert</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">Source_ip :</th>
                          <td>$HOME_NET</td>
                        </tr>
                        <tr>
                          <th scope="row">Destination IP :</th>
                          <td>109.196.130.50,151.13.184.200</td>
                        </tr>
                        <tr>
                          <th scope="row">SIDs :</th>
                          <td>2404000</td>
                        </tr>
                        <tr>
                          <th scope="row">REV :</th>
                          <td>5802</td>
                        </tr>
                        <tr class="total">
                          <th scope="row">Message :</th>
                          <td>ET CNC Shadowserver Reported CnC Server IP group 1</td>
                        </tr>
                      </tbody>
                    </table>

                    <div class="text-center mt-4 mb-2">
                      <button class="btn btn-primary">Submit
                        <i class="fa fa-send ml-2"></i>
                      </button>
                    </div>

                  </div>
                </div>
                <!--/.Content-->
              </div>
              <!--/Modal: Contact form-->
            </div>

    </div>
  </main>
  <!--Main layout-->

  <!--Footer-->
  <footer class="page-footer text-center font-small primary-color-dark darken-2 mt-4 wow fadeIn">
    
    <!--Copyright-->
    <div class="footer-copyright py-3">
      © 2020 Copyright:
      <a href="https://mdbootstrap.com/education/bootstrap/" target="_blank">Cyber Security </a>
    </div>
    <!--/.Copyright-->

  </footer>
  <!--/.Footer-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <!-- <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script> -->
  <!-- Bootstrap tooltips -->
  <!-- <script type="text/javascript" src="js/popper.min.js"></script> -->
  <!-- Bootstrap core JavaScript -->
  <!-- <script type="text/javascript" src="js/bootstrap.min.js"></script> -->
  <!-- MDB core JavaScript -->
  <!-- <script type="text/javascript" src="js/mdb.min.js"></script> -->

  <!-- JQuery -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();

  </script>

  <!-- Charts -->
  <script>
    // Line
    var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
        datasets: [{
          label: '# of Votes',
          data: [12, 19, 3, 5, 2, 3],
          backgroundColor: [
            'rgba(255, 99, 132, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(255, 206, 86, 0.2)',
            'rgba(75, 192, 192, 0.2)',
            'rgba(153, 102, 255, 0.2)',
            'rgba(255, 159, 64, 0.2)'
          ],
          borderColor: [
            'rgba(255,99,132,1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)',
            'rgba(153, 102, 255, 1)',
            'rgba(255, 159, 64, 1)'
          ],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: true
            }
          }]
        }
      }
    });

    //pie
    var ctxP = document.getElementById("pieChart").getContext('2d');
    var myPieChart = new Chart(ctxP, {
      type: 'pie',
      data: {
        labels: ["Red", "Green", "Yellow", "Grey", "Dark Grey"],
        datasets: [{
          data: [300, 50, 100, 40, 120],
          backgroundColor: ["#F7464A", "#46BFBD", "#FDB45C", "#949FB1", "#4D5360"],
          hoverBackgroundColor: ["#FF5A5E", "#5AD3D1", "#FFC870", "#A8B3C5", "#616774"]
        }]
      },
      options: {
        responsive: true,
        legend: false
      }
    });


    //line
    var ctxL = document.getElementById("lineChart").getContext('2d');
    var myLineChart = new Chart(ctxL, {
      type: 'line',
      data: {
        labels: ["January", "February", "March", "April", "May", "June", "July"],
        datasets: [{
            label: "My First dataset",
            backgroundColor: [
              'rgba(105, 0, 132, .2)',
            ],
            borderColor: [
              'rgba(200, 99, 132, .7)',
            ],
            borderWidth: 2,
            data: [65, 59, 80, 81, 56, 55, 40]
          },
          {
            label: "My Second dataset",
            backgroundColor: [
              'rgba(0, 137, 132, .2)',
            ],
            borderColor: [
              'rgba(0, 10, 130, .7)',
            ],
            data: [28, 48, 40, 19, 86, 27, 90]
          }
        ]
      },
      options: {
        responsive: true
      }
    });


    //radar
    var ctxR = document.getElementById("radarChart").getContext('2d');
    var myRadarChart = new Chart(ctxR, {
      type: 'radar',
      data: {
        labels: ["Eating", "Drinking", "Sleeping", "Designing", "Coding", "Cycling", "Running"],
        datasets: [{
          label: "My First dataset",
          data: [65, 59, 90, 81, 56, 55, 40],
          backgroundColor: [
            'rgba(105, 0, 132, .2)',
          ],
          borderColor: [
            'rgba(200, 99, 132, .7)',
          ],
          borderWidth: 2
        }, {
          label: "My Second dataset",
          data: [28, 48, 40, 19, 96, 27, 100],
          backgroundColor: [
            'rgba(0, 250, 220, .2)',
          ],
          borderColor: [
            'rgba(0, 213, 132, .7)',
          ],
          borderWidth: 2
        }]
      },
      options: {
        responsive: true
      }
    });

    //doughnut
    var ctxD = document.getElementById("doughnutChart").getContext('2d');
    var myLineChart = new Chart(ctxD, {
      type: 'doughnut',
      data: {
        labels: ["Red", "Green", "Yellow", "Grey", "Dark Grey"],
        datasets: [{
          data: [300, 50, 100, 40, 120],
          backgroundColor: ["#F7464A", "#46BFBD", "#FDB45C", "#949FB1", "#4D5360"],
          hoverBackgroundColor: ["#FF5A5E", "#5AD3D1", "#FFC870", "#A8B3C5", "#616774"]
        }]
      },
      options: {
        responsive: true
      }
    });

  </script>

  <!--Google Maps-->
  <script src="https://maps.google.com/maps/api/js"></script>
  <script>
    // Regular map
    function regular_map() {
      var var_location = new google.maps.LatLng(40.725118, -73.997699);

      var var_mapoptions = {
        center: var_location,
        zoom: 14
      };

      var var_map = new google.maps.Map(document.getElementById("map-container"),
        var_mapoptions);

      var var_marker = new google.maps.Marker({
        position: var_location,
        map: var_map,
        title: "New York"
      });
    }

    new Chart(document.getElementById("horizontalBar"), {
      "type": "horizontalBar",
      "data": {
        "labels": ["Red", "Orange", "Yellow", "Green", "Blue", "Purple", "Grey"],
        "datasets": [{
          "label": "My First Dataset",
          "data": [22, 33, 55, 12, 86, 23, 14],
          "fill": false,
          "backgroundColor": ["rgba(255, 99, 132, 0.2)", "rgba(255, 159, 64, 0.2)",
            "rgba(255, 205, 86, 0.2)", "rgba(75, 192, 192, 0.2)",
            "rgba(54, 162, 235, 0.2)",
            "rgba(153, 102, 255, 0.2)", "rgba(201, 203, 207, 0.2)"
          ],
          "borderColor": ["rgb(255, 99, 132)", "rgb(255, 159, 64)", "rgb(255, 205, 86)",
            "rgb(75, 192, 192)", "rgb(54, 162, 235)", "rgb(153, 102, 255)",
            "rgb(201, 203, 207)"
          ],
          "borderWidth": 1
        }]
      },
      "options": {
        "scales": {
          "xAxes": [{
            "ticks": {
              "beginAtZero": true
            }
          }]
        }
      }
    });

  </script>
</body>

</html>
