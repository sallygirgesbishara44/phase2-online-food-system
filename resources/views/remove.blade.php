@extends('layouts.master')

@section('content')
  @if($message = Session::get('success'))
    <div class="alert alert-success">
      <p>{{ $message }}</p>
    </div>
  @endif

  <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">User ID</th>
      <th scope="col">User Name</th>
      <th scope="col">User Password</th>
      <th scope="col">Delete</th>

    </tr>
  </thead>
  <tbody>
    @foreach ($staff as $row)
      <tr>
        <td>{{ $row['id'] }} </td>
        <td>{{ $row['user_name'] }} </td>
        <td>{{ $row['password'] }}</td>
        <td>
          <form  method="post" class="delete_form" action="delete">
            @csrf
            <button name="id" value="{{$row['id']}}" type="submit" class="btn btn-danger">Delete</button>
          </form>
        </td>
      </tr>
    @endforeach
  </tbody
</table>

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
