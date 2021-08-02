@extends('Backend.main.main')
@section('content')
<style>
    .img {
        width: 40px;
        height: 30px;
        cursor: pointer;
    }

    .img img {
        transition: 0.7s;
    }

    .img img:hover {
        transform: scale(1.11);
    }
    .position {
        display: none;
    }
</style>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
        <div class="ibox ">
            <div class="ibox-title">
                <h5>Hotels Management</h5>
                <div class="ibox-tools">
                    <a href="a_hotels/create" class="btn btn-primary"> Add new</a>
                </div>
            </div>
            <div class="ibox-content">

                <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover dataTables-example" >
            <thead>
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @if(count($hotels) > 0 )
              @foreach($hotels as $hotels)
              <tr class="gradeX">
                <td class="img">
                    <img src="/storage/img/{{$hotels->image}}" class="w-100 h-100" style="object-fit: cover; object-position: 50% 0; height: 100%; width: 100%">
                </td>
                <td>{{$hotels->name}}</td>
                <td>{!! substr($hotels->body , 0, 100) !!} {{ strlen(strip_tags($hotels->body)) > 100 ? '...' : '' }}</td>
                <td>
                    <ul class="list-inline m-0">
                   <li class="list-inline-item">
                       <a href="/a_hotels/{{$hotels->id}}/edit"><span class="badge badge-pill badge-success">Update</span></a>
                   </li>
                   <li class="list-inline-item">

                    {!!Form::open(['action' => ['HotelsController@destroy', $hotels->id], 'method'=> 'POST'])!!}

                    {{Form::hidden('_method', 'DELETE', ['onsubmit' => 'return confirm("are you sure ?")'])}}
                    {{Form::submit('Delete', ['class'=> 'bad badge-primary'])}}

                    {!!Form::close()!!}
                  {{-- <a href=""><span class="badge badge-pill badge-danger">Delete</span></a> --}}
                   </li>
               </ul></td>
            </tr>
              @endforeach
            @else
            <tr class="gradeX">
                <td></td>
                <td>No Data for now</td>
                <td></td>
              
                <td></td>
            </tr>
            @endif
           
            </tbody>
            
            </table>
                </div>

            </div>
        </div>
    </div>
    </div>
</div>
@endsection