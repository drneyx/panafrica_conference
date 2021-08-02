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
                <h5>Sessions Management</h5>
                <div class="ibox-tools">
                    <a href="a_sessions/create" class="btn btn-primary"> Add new</a>
                </div>
            </div>
            <div class="ibox-content">

                <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover dataTables-example" >
            <thead>
            <tr>
                <th>Title</th>
                <th>Organizers Information</th>
                <th>Delivery Format</th>
                <th>Nature of the session</th>
                <th>Session abstract</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @if(count($sessions) > 0 )
              @foreach($sessions as $sessions)
              <tr class="gradeX">
                <td>{{$sessions->title}}</td>
                <td>{!! substr($sessions->organizer , 0, 100) !!} {{ strlen(strip_tags($sessions->organizer)) > 100 ? '...' : '' }}</td>
                <td>{{$sessions->delivery}}</td>
                <td>{{$sessions->nature}}</td>
                <td>{!! substr($sessions->abstract , 0, 100) !!} {{ strlen(strip_tags($sessions->abstract)) > 100 ? '...' : '' }}</td>
                <td>
                    <ul class="list-inline m-0">
                   <li class="list-inline-item">
                       <a href="/a_sessions/{{$sessions->id}}/edit"><span class="badge badge-pill badge-success">Update</span></a>
                   </li>
                   <li class="list-inline-item">

                    {!!Form::open(['action' => ['SessionController@destroy', $sessions->id], 'method'=> 'POST'])!!}

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