<!DOCTYPE html>
<html>
<head>
  <title>Laravel</title>
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <link rel="stylesheet" type="text/css" href="public/bower_components/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
      <h2>Register Form</h2>

      <div class="row col-lg-5">
        <h2>Get Request</h2>
        <button class="btn btn-success" id="getRequest" type="button">getRequest</button>
        <div id="getRequestData">
          
        </div>

      </div>

      <div class="row col-lg-5">
        <h2>Register Form</h2>
        <form id="register" action="javascript:void(0)">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">

          <label for="firstname"></label>
          <input class="form-control" type="text" id="firstname" name="">

          <label for="lastname"></label>
          <input class="form-control" type="text" id="lastname" name="">

          <input class="" type="submit" value="Register" class="btn btn-success" name="">
        </form>

        <div id="postRequestData">
          
        </div>
      </div>
    </div>

  <script type="text/javascript" src="public/bower_components/jquery/dist/jquery.js"></script>
  <script type="text/javascript">
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
    });

    $(document).ready(function(){
      $('#getRequest').click(function(){

        // $.get('getRequest', function(data){
        //   $('#getRequestData').append(data);
        // });
        $.ajax({
          type: "GET",
          url: "getRequest",
          success: function(data){
            console.log(data);
            $('#getRequestData').html(data);
          }
        });

      });

      $('#register').submit(function(){
        var fname = $('#firstname').val();
        var lname = $('#lastname').val();

        // $.post('register', {firstname:fname, lastname:lname}, function(data){
        //   console.log(data);
        //   $('#postRequestData').html(data);
        // });
        var dataString = "firstname="+fname+"&lastname="+lname;
        $.ajax({
          type: "POST",
          url: "register",
          data: dataString,
          success: function(data){
            console.log(data);
            $('#postRequestData').html(data);
          }
        });

      });

    });
  </script>
</body>
</html>