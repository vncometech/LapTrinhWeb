<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>administrator</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/bootstrap/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="public/font-awesome-4.7.0/css/font-awesome.min.css">


</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
      <a class="navbar-brand" href="#">Administrator</a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">

          <li class="nav-item active">
            <a class="nav-link" href="#"><i class="fa fa-home" aria-hidden="true"></i> Xin chao admin
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa fa-comment" aria-hidden="true"></i> Message</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa fa-cog" aria-hidden="true"></i> Settings</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container" style="margin-bottom: 120px">

    <div class="title">
      Danh Sách Các Bảng
    </div>

    <!-- List Table -->
    <div class="row">

      <div class="col-md-3 table">

        <a href="" style="text-decoration: none;">
          <div class="block-table">
            <div class="background-card" >

             <img src="vendor/image/App.png" alt="">

           </div>
           <div class="name-table">
            Table Application
          </div>

        </div>
      </a>

    </div>

    <div class="col-md-3 table">

      <a href="" style="text-decoration: none;">

        <div class="block-table">
          <div class="background-card">

           <img src="vendor/image/Category.png" alt="">

         </div>
         <div class="name-table">
          Table Category
        </div>
      </div>
    </a>

  </div>

  <div class="col-md-3 table">
    <a href="{{url('admin/banner')}}" style="text-decoration: none;">

      <div class="block-table">
        <div class="background-card">
         <img src="vendor/image/Banner.png" alt="">
       </div>
       <div class="name-table">
        Table Banners
      </div>

    </div>

  </a>
</div>

<div class="col-md-3 table">
  <a href="{{url('admin/user')}}" style="text-decoration: none;">
    <div class="block-table">
      <div class="background-card">
       <img src="vendor/image/User.png" alt="">
     </div>
     <div class="name-table">
      Table User
    </div>
  </div>
</a>

</div>

<div class="col-md-3 table">
  <a href="" style="text-decoration: none;">
    <div class="block-table">
      <div class="background-card">
       <img src="vendor/image/type.png" alt="">
     </div>
     <div class="name-table">
      Table Type
    </div>
  </div>
</a>
</div>

<div class="col-md-3 table">
  <a href="" style="text-decoration: none;">
    <div class="block-table">
      <div class="background-card">
       <img src="vendor/image/review.png" alt="">
     </div>
     <div class="name-table">
      Table Review
    </div>

  </div>
</a>
</div>

</div>
</div>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
