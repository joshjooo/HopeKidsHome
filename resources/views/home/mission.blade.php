@extends('layouts.app-master')

@section('content')
    <div class="bg-white p-5 rounded row">
    
      @include('home.partials.sidebar')
       </div>
       <div class="col-md-8 pl-5">
        <h3> MISSION STATEMENT</h3>
        <div class="mt-3 p-4">
          <div class="row">
            <div class="col-md-9 mr-4">
              <p>{{ $mission->description}} </p>
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
        <h4 class="modal-title">Enter your  mission </h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form action="{{url('/dashboard/mission')}}" method="POST">
           @csrf
          <div class="input-group mb-4">
            <textarea name="description" class="form-control" rows="5" aria-label="With textarea">{{$mission->description}}</textarea>
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