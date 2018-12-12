@extends("Template.main")
@section("body")

<div class="row">
    <div class="col-12">
        <div class="card">
          <table class="table table-striped">
          <thead>
            <tr>
              <th>ID</th>
              <th>Jenis Kendaraan</th>
              <th>Merk</th>
              <th>Harga</th>
              <th colspan="2">Action</th>
            </tr>
          </thead>
          <tbody>

            @foreach($cars as $car)
            <tr>
              <td>{{$car->id}}</td>
              <td>{{$car->carcompany}}</td>
              <td>{{$car->model}}</td>
              <td>{{$car->price}}</td>
              <td><a href="{{action('CarController@edit', $car->id)}}" class="btn btn-warning">Edit</a></td>
              <td>
                <form action="{{action('CarController@destroy', $car->id)}}" method="post">
                  @csrf
                  <input name="_method" type="hidden" value="DELETE">
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        </div>
    </div>
</div>
@endsection
