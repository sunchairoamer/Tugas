<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel MongoDB CRUD Tutorial With Example</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container">
      <BR>
      <h2>UBAH DISINI</h2><br/>
      <div class="container">
    </div>
      <form method="post" action="{{action('CarController@update', $id)}}">
        @csrf
          <BR>
            <br>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Carcompany">Jenis Kendaraan:</label>
            <input type="text" class="form-control" name="carcompany" value="{{$car->carcompany}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">markarn
            <label for="Model">Merk:</label>
            <input type="text" class="form-control" name="model" value="{{$car->model}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Price">Harga:</label>
            <input type="text" class="form-control" name="price" value="{{$car->price}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <button type="submit" class="btn btn-danger">Update</button>
          </div>
        </div>
      </form>
   </div>
  </body>
</html>
