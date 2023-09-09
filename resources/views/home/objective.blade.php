@extends('layouts.app-master')

@section('content')
    <div class="bg-white p-5 rounded row">
    
      @include('home.partials.sidebar')
       </div>
       <div class="col-md-8 pl-5">
        <h3> OBJECTIVES</h3>
            <div class="row">
              <div class="col-md-9 mr-4">
              <span class='btn btn-primary px-3  mt-2 mb-3 ' data-toggle="modal" data-target="#myModal">Add</span>
             <ul class="list-group list-group-flush">
              @foreach ($objs as $obj)
                  <li class="list-group-item">
                    <div class="d-flex flex-row align-items-center justify-content-between">
                      <div>
                        {{$obj->description}}
                      </div>
                      <form action="{{url('/dashboard/objective',$obj->id)}}" method="POST">
                       @csrf
                         @method('DELETE')
                      <button type='submit' class='ml-4 btn btn-danger btn-sm '>delete</button>
                       </form>
                    </div>
                  </li>
              @endforeach
             </ul>
            </div>
            
            </div>
         <div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Enter your  Objective </h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form action="{{url('/dashboard/objective')}}" method="POST">
           @csrf
          <div class="input-group mb-4">
            <textarea name="description" class="form-control" aria-label="With textarea"></textarea>
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