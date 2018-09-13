<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hostel 99</title>
  <link rel='shortcut icon' type="image/png" href="src/img/hostel-logo.png">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

  <link rel="stylesheet" href="Web Dev Tools/bootstrap-4.0.0-dist/css/bootstrap.min.css">
  <script src="Web Dev Tools/Jquery/jquery-3.3.1.js"></script>
  <script src="Web Dev Tools/popper.min.js"></script>
  <script src="Web Dev Tools/bootstrap-4.0.0-dist/js/bootstrap.min.js"></script>
  <script src="Web Dev Tools/all.js"></script>

  <!--Generic-->
  <link href="src/css/style.css" rel="stylesheet">
  <script src="src/js/main.js"></script>
</head>
<body>
<!--Navigation-->
<?php include './nav-bar.php';?>

<!--Hostel header-->
<div class="hostel-title">
  <h4>OASIS TRAVELERS' HOTEL</h4>
</div>

<!--Image Slider-->
<div id="slides" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#slides" data-slide-to="0" class="active"></li>
    <li data-target="#slides" data-slide-to="1"></li>
    <li data-target="#slides" data-slide-to="2"></li>
    <li data-target="#slides" data-slide-to="3"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="src/img/travelers-oasis-one.jpg">
    </div>
    <div class="carousel-item">
      <img src="src/img/travelers-oasis-two.jpg">
    </div>
    <div class="carousel-item">
      <img src="src/img/travelers-oasis-three.jpg">
    </div>
    <div class="carousel-item">
      <img src="src/img/travelers-oasis-four.jpg">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#slides" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#slides" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<div class="hostel-description">
  <hr>
  <div id="about">
    <h4>About this hostel</h4>
  </div>
  <p>The hostel is suitable for The University of Nairobi students. It is located 6km from the campus.</p>
</div>

<div class="hostel-ammenities">
  <hr>
  <div class="col-sm-3">
    <span class="text-muted">
      <i class="fas fa-tv" aria-expanded="true"></i>
      Ammenities
    </span>
  </div>

  <div class="col-sm-9">
    <span>
      <ul class="hostel-data">
        <li>Wifi</li>
        <li>Shower</li>
        <li>TV Room</li>
        <li>24 Hours Security</li>
        <li>Clean and constant water supply</li>
        <li>Customer friendly and caring staff</li>
        <li>Lunch (Weekend and Public Holidays)</li>
        <li>Dining area</li>
        <li>Laundry area</li>
        <li>Breakfast and dinner</li>
      </ul>
    </span>
  </div>
</div>

<div class="hostel-rules">
  <hr>
  <div class="col-sm-3">
    <span class="text-muted">
      <i class="fas fa-check" aria-expanded="true"></i>
      House Rules
    </span>
  </div>

  <div class="col-sm-9">
    <span>
      <ul class="hostel-data">
        <li>No drugs</li>
        <li>Any act of culminate in breach of peace and order, damage of property are prohibited</li>
        <li>Visitors are not allowed in the compound after 6:00p.m</li>
        <li>Gates closed at 10 pm on weekdays and 11 pm on weekends</li>
      </ul>
    </span>
  </div>
</div>

<div class="hostel-pricing">
  <hr>
  <div class="col-sm-3">
    <span class="text-muted">
      <i class="fas fa-money-bill-alt" aria-expanded="true"></i>
      Pricing
    </span>
  </div>

  <div class="col-sm-9">
    <span>
      <ul class="pricing-list">
        <li><strong>1 sharing:</strong> Kshs. 8,500 per month</li>
        <li><strong>2 sharing:</strong> Kshs. 7,500 per month</li>
        <li><strong>3 sharing:</strong> Kshs. 7,000 per month</li>
        <li><strong>4 sharing:</strong> Kshs. 6,500 per month</li>
        <li><strong>1 sharing:</strong> Kshs. 6,000 per month</li>
      </ul>
    </span>
  </div>
</div>

<div class="book-panel-bar col-sm-3-offset">
  <hr>
  <div class="book-panel">
    <h4>Booking Details</h4>
    <p class="hostel-name">
      <span class="hostel-detail"><strong>Hostel:</strong></span>
      Oasis Traveler's Hotel
    </p>
    <p class="hostel-type">
      <span class="hostel-detail"><strong>Gender:</strong></span>
      All gender types
    </p>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#detailsModal">
      <i class="fas fa-bookmark"></i>
      Book this hostel
    </button>

  <!--The Modal-->
    <div class="modal" id="detailsModal">
      <div class="modal-dialog">
        <div class="modal-content">

          <!--Modal Header-->
          <div class="modal-header">
            <h4 class="modal-title">Booking</h4>
            <button type="button" class="close" data-dismiss="modal">&times;
            </button>
          </div>

          <!--Modal Body-->
          <div class="modal-body">
            <form class="form-control">
              <label>
                Name:<br>
                <input class="form-control" type="text" required><br>
              </label>
              <br>
              <br>
              <label>
                Email Address:<br>
                <input class="form-control" type="text" required>
              </label>
              <br>
              <br>
              <label>
                Gender:<br>
                <select class="form-control">
                  <option value="female">Female</option>
                  <option value="male">Male</option>
                  <option value="other">Other</option>
                </select>
              </label>
              <br>
              <br>
              <label>
                Phone Number:<br>
                <input class="form-control" type="number" required>
              </label>
              <br>
              <br>
              <?php
              $connection = new mysqli('localhost', 'root', '', 'hostel99');
              $sql = "SELECT hostel_room_type FROM hostel";

              if ($result = $connection->query($sql)) {
                if ($result->num_rows > 0) {
                  echo " <label>Room-type: ";
                  echo "<br>";
                  echo "<select class='form-control' id='hostel_room_type'>";

                  while ($row = $result->fetch_array()) {
                    echo "<option>" .$row['hostel_room_type'] ."</option>" ;
                  }
                }
                echo "</select>";
                echo "</label>";
                echo "<br>";
                echo "<br>";
              }

              $sql_price = "SELECT hostel_price FROM hostel";

              if ($result = $connection->query($sql_price)) {
                if ($result->num_rows > 0) {
                  echo "<label>Room-price: ";
                  echo "<br>";
                  echo "<select class='form-control'>";

                  while (($row = $result->fetch_array())) {
                    echo "<option>" .$row['hostel_price'] ."</option>" ;
                  }
                }
                echo "</select>";
                echo "</label>";
              }
              ?>
            </form>
          </div>

          <!--Modal Footer-->
          <div class="modal-footer">
            <button type="submit" class="btn btn-success" data-dismiss="modal">Make Payment
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include './footer.php';?>
<?php include './connection.php';?>
