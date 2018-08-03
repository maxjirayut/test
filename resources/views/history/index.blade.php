
@extends('master')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <br>
      <h3 class="center">History Data</h3>
      <br>
      @if ($message = Session::get('success'))
        <div class="alert alert-success">
          <p>{{$message}}</p>
        </div>
      @endif
      <div aling="right">
        <a href="{{route('history.create')}}" class="btn btn-primary">Add</a><br><br>
      </div>
      <table class="table tabel-bordered">
        <tr>
          <th>ชื่อ</th>
          <th>เพศ</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
        @foreach ($history as $row)
          <tr>
            <td>{{$row['name']}}</td>
            <td>{{$row['sex']}}</td>
            <td>
              <a href="{{action('HistoryController@edit', $row['id'])}}" class="btn btn-warning">Edit</a>
            </td>
            <td>
              <form method="post" class="delete_form" action="{{action('HistoryController@destroy', $row['id'])}}">
              {{csrf_field()}}
              <input type="hidden" name="_method" value="DELETE" />
              <button type="submit" class="btn btn-danger">Delete</button>
              </form
            </td>
          </tr>
        @endforeach
      </table>
    </div>
  </div>
  <script>
$(document).ready(function(){
 $('.delete_form').on('submit', function(){
  if(confirm("Are you sure you want to delete it?"))
  {
   return true;
  }
  else
  {
   return false;
  }
 });
});
</script>
@endsection
