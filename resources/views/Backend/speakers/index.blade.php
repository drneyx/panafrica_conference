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
                <h5>Speakers Management</h5>
                <div class="ibox-tools">
                    <a href="a_speakers/create" class="btn btn-primary"> Add new</a>
                </div>
            </div>
            <div class="ibox-content">

                <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover dataTables-example" >
            <thead>
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Bio</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @if(count($speakers) > 0 )
              @foreach($speakers as $speakers)
              <tr class="gradeX">
                <td class="img">
                    <img src="/storage/img/{{$speakers->image}}" class="w-100 h-100" style="object-fit: cover; object-position: 50% 0; height: 100%; width: 100%">
                </td>
                <td>{{$speakers->name}}</td>
                <td>{!! substr($speakers->body , 0, 100) !!} {{ strlen(strip_tags($speakers->bio)) > 100 ? '...' : '' }}</td>
                <td>
                    <ul class="list-inline m-0">
                   <li class="list-inline-item">
                       <a href="/a_speakers/{{$speakers->id}}/edit"><span class="badge badge-pill badge-success">Update</span></a>
                   </li>
                   <li class="list-inline-item">

                    {!!Form::open(['action' => ['SpeakersController@destroy', $speakers->id], 'method'=> 'POST'])!!}

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