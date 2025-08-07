@extends('user.layout.app')
@section('title')
  Policy
@endsection
@section('bodyContent')
  <div class="container">
    <div class="col-md-12 text-center py-5">
        @if (Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
        @endif
        <h1>Privacy</h1>
        {{-- <p>Your order id:  <span class="ms-1">{{ $order->id }} </span></p> --}}
        <p>Last Updated: [Date]</p>

        <h2>1. Introduction</h2>
        <p>[Your Company Name] ("we," "our," or "us") is committed to protecting your privacy. This Privacy Policy explains how we collect, use, and disclose your personal information.</p>

        <h2>2. Information We Collect</h2>
        <p>We may collect the following types of information:</p>
        <ul>
            <li>Personal Information (name, email, phone number)</li>
            <li>Payment Information (for purchases)</li>
            <li>Usage Data (how you use our website)</li>
        </ul>

        <h2>3. How We Use Your Information</h2>
        <p>We use your information to:</p>
        <ul>
            <li>Provide and maintain our services</li>
            <li>Process transactions</li>
            <li>Improve user experience</li>
            <li>Communicate with you</li>
        </ul>

        <h2>4. Data Security</h2>
        <p>We implement security measures to protect your data, but no method is 100% secure.</p>

        <h2>5. Changes to This Policy</h2>
        <p>We may update this policy periodically. We will notify you of any changes.</p>

        <h2>6. Contact Us</h2>
        <p>For questions about this policy, contact us at [contact email].</p>
    </div>
  </div>
@endsection
