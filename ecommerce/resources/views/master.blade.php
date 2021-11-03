<!DOCTYPE html>
<html lang="en">
<head>
  <title>Kalahari</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- <link href="{{ asset('css/main.css') }}" rel="stylesheet"> -->
  <link rel="stylesheet" type="text/css" href="{{ url('css/main.css') }}">
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  .container-fluid{
    padding-left: 0px !important;
    padding-right:0px !important;
  }
  </style>
</head>
<body>

<div class="container-fluid">
    @include('header')

    @yield('content')

    @include('footer')
</div>


</body>
</html>