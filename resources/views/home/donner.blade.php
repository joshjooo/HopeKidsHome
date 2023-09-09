@extends('layouts.app-master')

@section('content')
    <div class="bg-white p-5 rounded row">
    
      @include('home.partials.sidebar')
       </div>
       <div class="col-md-8 pl-5">
        <h3> DONNERS INFORMATION</h3>
             
          <div class="row">
              <div class="col-md-12 ">
             
               <table class="table table-hover">
              @foreach ($objs as $obj)
              <tr class="row d-flex flex-row align-items-center justify-content-between">
                       <td>{{$obj->name}}</td> <td>{{$obj->email}}</td> <td>{{$obj->phone}}</td> 
                       <td><form action="{{url('/dashboard/donner',$obj->id)}}" method="POST">
                       @csrf
                         @method('DELETE')
                      <button type='submit' class='ml-4 btn btn-danger btn-sm '>delete</button>
                       </form></td>
                                   
                  </tr>
              @endforeach
              </table>
             
            </div>
        
       </div>
       
    </div>
@endsection