@extends('layouts.app')

@section('title-block')sign up
@endsection

@section('content')


<div class="form">
<div class="fields">

<h1>Contact Form</h1>



<form action="{{ route('contact-form') }}" method="post">
  @csrf

  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" placeholder="Input name" id="name" class="form-control mt-4 mb-4">
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="text" name="email" placeholder="Input email" id="email" class="form-control mt-4">
  </div>


  <button type="submit" class="btn btn-success mt-4">Send</button>
</form>
</div>
</div>
@endsection
