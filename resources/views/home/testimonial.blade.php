@extends('layouts.app-master')

@section('content')
    <div class="bg-white p-5 rounded row">
    
      @include('home.partials.sidebar')
       </div>
       <div class="col-md-8 pl-5">
        <h3> TESTIMONIAL STATEMENT</h3>
               
       <div class="row">
              <div class=" mr-4">
              <span class='btn btn-primary px-3  mt-2 mb-3 ' data-toggle="modal" data-target="#myModal">Add</span>
             <ul class="list-group list-group-flush">
              @foreach ($objs as $obj)
                  <li class="list-group-item">
                    <div class="d-flex flex-row align-items-center justify-content-between">
                      <div class='d-flex flex-row align-items-center'>
                        <img src="{{asset('images/'.$obj->avatar)}}" width="120px" class="mx-4" alt="">
                        <div class="d-flex flex-column">
                            <h6> {{$obj->name}}</h6>
                            <p> {{$obj->description}}</p>
                        </div>
                       
                      </div>
                      <form action="{{url('/dashboard/testimonial',$obj->id)}}" method="POST">
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
        <h4 class="modal-title">Enter your  Testimonial </h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form action="{{url('/dashboard/testimonial')}}" method="POST" enctype="multipart/form-data">
           @csrf
          <div class="input-group mb-4">
            <input type="text" class="form-control" required name="name" placeholder="name">
            </div>
            <div class="input-group mb-4">
            <textarea name="description" required class="form-control" placeholder="description" aria-label="With textarea"></textarea>
            </div>
            <div class="input-group mb-4">
            <input type="file" class="form-control" placeholder="avatar" required accept="image/png, image/jpeg" name="avatar">
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