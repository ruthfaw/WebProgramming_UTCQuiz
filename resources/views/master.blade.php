<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    {{-- Styles --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    {{-- Fonts --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>

      body{
        background-color: #f9f9f9;
        color: black;
      }

      .logo {
        margin: 20px;
      }

      .container{
        margin-top: 50px; 
      }
    
      .card{
        background-color: #f7de74;
        color: black;
      }

      .card-img-top {
        width: auto;
        height: 25vw;
        object-fit: cover;
      }

      .all-movies{
        justify-content: space-between;
          
      }

      .img-movie{
        width: 300px;
        height: 400px;
      }

      .movie-desc .movie-episode .movie-genres{
        margin: 10px;
      }

      .button{
        display: flex;
        margin: 20px;
      }

      .btn{
        border-radius: 0px;
      }

      .eps-list{
        margin-top: 20px;
      }

      .ratings{
        width: 170px;
        height: 35px;
      }

      .logo-bee{
        height: 450px;
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 40%;
      }

    </style>

  </head>

  <body>
    <div class="logo fs-2">BeeFlix</div>
    <div class="button">@yield('upperButton')</div>
    <div class="container">@yield('content')</div>

  </body>
  
</html>