@extends('user.layout.app')
@section('title')
   Contact
@endsection
@section('bodyContent')
  <div class="container">
    <div class="col-md-12 text-center py-5">
        @if (Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
        @endif
        <h1>Contact</ Us>
        {{-- <p>Your order id:  <span class="ms-1">{{ $order->id }} </span></p> --}}
        <div class="row">
            <div class="col-md-6">
                <h2>Get in Touch</h2>
                <p>Have questions? We're here to help!</p>

                <address>
                    <strong>[Company Name]</strong><br>
                    [Street Address]<br>
                    [City, State, ZIP]<br>
                    <abbr title="Phone">P:</abbr> [Phone Number]<br>
                    <abbr title="Email">E:</abbr> <a href="mailto:[Email Address]">[Email Address]</a>
                </address>
            </div>

            <div class="col-md-6">
                <h2>Send Us a Message</h2>
                <form action="{{ route('contact') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
  </div>
@endsection
