@extends('layouts.feedback')
@section('content')


<div class="container">
    <div class="row">
        <form role="form" class="col-md-9 go-right"  action="{{url('/feedback')}}" method="post">
          @csrf
            <h2>Your Feedback</h2>
            <p>Please send us your comments and criticism about the service, and we hope that your criticism is constructive in order to improve the level of service.<br> Thank you.</p>
            <div class="form-group">
            <input id="name" name="name" type="text" class="form-control" required>
            <label for="name">Your Name</label>
        </div>
        <div class="form-group">
            <input id="email" name="email" type="email" class="form-control" required>
            <label for="email">Email Address</label>
        </div>

        <div class="form-group">
            <textarea id="message" name="message" class="form-control" style="height: 150px" required></textarea>
            <label for="message">Message</label>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </form>
    </div>
</div>
@endsection
