@extends('layouts.app-master')

@section('content')
    <div class="bg-white p-5 rounded row">
    
      @include('home.partials.sidebar')
       </div>
       <div class="col-md-8 pl-5">
        <h3>UPDATE CONTACT </h3>
       
        <div class="mt-3 p-4">
          <div class="row">
            <div class="col-md-9 mr-4">
              <p> Address : {{ $contact->Address}} </p>
              <p> Phone : {{ $contact->phone}} </p>
              <p> Email : {{ $contact->email}} </p>
              <p> facebook : {{ $contact->facebook}} </p>
              <p> Instagram : {{ $contact->instagram}} </p>
              <p> Twitter : {{ $contact->twitter}} </p>
              <p> linkedin : {{ $contact->linkedin}} </p>
            </div>
            </div>
           <span class='btn btn-primary px-3 ' data-toggle="modal" data-target="#myModal">Edit</span>
          
          </div>
       
      

<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Update your Contact </h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form action="{{url('/dashboard/contact')}}" method="POST">
           @csrf
          
            <div class="form-group  mb-4">
              <label class="col-sm-2 col-form-label" for="">Address</label>
              <input name="address" placeholder="Address" value="{{ $contact->Address}} " class="form-control" aria-label="With input"></input>
            </div>
            <div class="form-group  mb-4">
              <label for="">Phone</label>
              <input name="phone" placeholder="Phone" value="{{ $contact->phone}}" class="form-control" aria-label="With input"></input>
            </div>
            <div class="form-group  mb-4">
              <label for="Email">Email</label>
              <input name="email" placeholder="Email" value="{{ $contact->email}}" class="form-control" aria-label="With input"></input>
            </div>
            <div class="form-group  mb-4">
              <label for="">Facebook</label>
              <input name="facebook" placeholder="facebook" value="{{ $contact->facebook}}" class="form-control" aria-label="With input"></input>
            </div>
            <div class="form-group  mb-4">
              <label for="">Instagram</label>
              <input name="instagram" placeholder="Instagram" value="{{ $contact->instagram}}" class="form-control" aria-label="With input"></input>
            </div>
            <div class="form-group  mb-4">
              <label for="">Twitter</label>
              <input name="twitter" placeholder="Twitter" value="{{ $contact->twitter}}" class="form-control" aria-label="With input"></input>
            </div>
            <div class="form-group  mb-4">
              <label for="">Linkedin</label>
              <input name="linkedin" placeholder="Linkedin" value="{{ $contact->linkedin}}" class="form-control" aria-label="With input"></input>
            </div>
          
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>


       </div>
       
    </div>
@endsection