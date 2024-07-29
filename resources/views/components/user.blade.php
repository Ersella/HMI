<!-- /*
* Bootstrap 5
* Template Name: Furni
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="{{ url('/') }}/frontend-baru/images/shortcut user.png">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

  <!-- Bootstrap CSS -->
  <link href="{{ url('/') }}/frontend-baru/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Lilita+One&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <link href="{{ url('/') }}/frontend-baru/css/tiny-slider.css" rel="stylesheet">
  <link href="{{ url('/') }}/frontend-baru/css/style.css" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <title>HMI</title>
  <style>
    .carousel-control-prev-icon,
    .carousel-control-next-icon {
      background-color: #000;
      border-radius: 50%;
      width: 30px;
      height: 30px;
    }

    .carousel-control-prev,
    .carousel-control-next {
      top: 50%;
      transform: translateY(-50%);
      width: 5%;
    }

    .footer-section {
      background-color: #000;
      /* Black background */
      color: #fff;
      /* Optional: White text color for contrast */
      padding: 20px;
      /* Optional: Padding for spacing */
    }
  </style>
  <style>
    .information-section {
      padding: 60px 0;
    }

    .section-title {
      font-size: 28px;
      font-weight: bold;
      text-align: center;
      margin-bottom: 30px;
    }

    .img-fluid {
      max-width: 100%;
      height: auto;
    }

    .custom-list {
      padding-left: 0;
    }

    .custom-list li {
      margin-bottom: 10px;
    }

    .btn-primary {
      background-color: #007bff;
      border-color: #007bff;
      color: #fff;
    }

    .btn-primary:hover {
      background-color: #0056b3;
      border-color: #004085;
    }

    .col-lg-4 {
      margin-bottom: 30px;
    }

    .lilita-font {
      font-family: 'Lilita One', cursive;
    }
  </style>
</head>

<body>

  <!-- Start Header/Navigation -->
  <x-section.navbar />
  <!-- End Header/Navigation -->

  {{$slot}}

  <!-- Start Footer Section -->
  <x-section.footer />
  <!-- End Footer Section -->


  <script src="{{ url('/') }}/frontend/js/bootstrap.bundle.min.js"></script>
  <script src="{{ url('/') }}/frontend/js/tiny-slider.js"></script>
  <script src="{{ url('/') }}/frontend/js/custom.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>