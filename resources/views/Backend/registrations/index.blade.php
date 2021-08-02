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
                <h5>Registered Attendants’</h5>
                {{-- <div class="ibox-tools">
                    <a href="a_registrations/create" class="btn btn-primary"> Add new</a>
                </div> --}}
            </div>
            <div class="ibox-content">

                <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover dataTables-example" >
            <thead>
            <tr>
                <th>Sn</th>
                <th>Full Name</th>
                <th>Status</th>
                <th>Institutional Affiliation</th>
                <th>Full address</th>
                <th>Preffered sessions</th>
                <th>Post Conference activities</th>
                <th>Registered Session</th>
                <th>Mode</th>
                <th>Title</th>
                <th>Title2</th>
                <th>Abstract</th>
                <th>Synopsis</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @if(count($registrations) > 0 )
              @foreach($registrations as $registrations)
              <tr class="gradeX">
                <td>{{$registrations->salutations}}</td>
                <td>{{$registrations->name}}</td>
                <td>{{$registrations->status}}</td>
                <td>{{$registrations->affliation}}</td>
                <td>{{$registrations->address}}</td>
                <td>{{$registrations->sessions}}</td>
                <td>{{$registrations->conference}}</td>
                <td>{{$registrations->reg_sessions}}</td>
                <td>{{$registrations->mode}}</td>
                <td>{{$registrations->title}}</td>
                <td>{{$registrations->ptitle}}</td>
                <td>{!! substr($registrations->abstract , 0, 100) !!} {{ strlen(strip_tags($registrations->abstract)) > 100 ? '...' : '' }}</td>
                <td>{!! substr($registrations->synopsis , 0, 100) !!} {{ strlen(strip_tags($registrations->synopsis)) > 100 ? '...' : '' }}</td>
                
                 <td>
                    <ul class="list-inline m-0">
                   <li class="list-inline-item">

                    {!!Form::open(['action' => ['RegistrationsController@destroy', $registrations->id], 'method'=> 'POST'])!!}

                    {{Form::hidden('_method', 'DELETE', ['onsubmit' => 'return confirm("are you sure ?")'])}}
                    {{Form::submit('Delete', ['class'=> 'bad badge-primary'])}}

                    {!!Form::close()!!}
                   {{-- <a href=""><span class="badge badge-pill badge-danger">Delete</span></a>  --}}
                    </li>
               </ul></td> 
            </tr>
              @endforeach
            @else
            <tr class="gradeX">
                <td></td>
                <td></td>
                <td>No </td>
                <td> Data</td>
                <td>for </td>
                <td>now</td>
                <td></td>
                <td></td>
                <td></td>
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