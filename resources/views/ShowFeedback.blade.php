@extends('layouts.nav')
@section('content')
    <div class="col-md-12">
        <br/>
        <h3 >Feedback</h3>
        <br/>
        <div class="container">
        <table id="showfeedback" class="center"  >
            <tr>
                 <th > Name</th>
                 <th > Email </th>
                 <th > Message</th>
            </tr>
           @foreach($feedback as $row)
           <tr >
              <td> {{$row['name']}}</td>
              <td> {{$row['email']}}</td>
              <td> {{$row['message']}}</td>
           </tr>
           @endforeach
        </table>
        </div>
    </div>
@endsection
<html>
<style>
    h3{
        text-align: center;
        color: white;
    }
  table.center {
    width:100%; 
    border-collapse: collapse;
  }
  table#showfeedback {
    background-color: white;
  }
  #showfeedback td, #showfeedback th {
  border: 1px solid #ddd;
  padding: 15px;
}
  #showfeedback tr:nth-child(even){background-color: white;}
  #showfeedback tr {background-color: #f2f2f2;}
  #showfeedback tr:hover {background-color: #ddd;}
  #showfeedback th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: Peru;
  color: white;
  }
  tr,td {text-align:left;}
</style>
</html>