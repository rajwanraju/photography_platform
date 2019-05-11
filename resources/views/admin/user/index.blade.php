 @extends('admin.master')
@section('content')
<div class="right_col" role="main">
    <div class="container">
 <h3 style="text-align: center;">Photographers</h3>

 <h3 class="text-center text-success">{{Session::get('message')}}</h3>
    
    <a class="btn btn-success" href="{{url('photographer/create')}}"> Create Photographer</a>
     
    <table class="table table-bordered table-dark">
        <thead class="table thead-dark">
        <tr>
            <th>Photographer Id</th>
            <th>Photographer Name</th>
            <th>Photographer Email</th>
            <th>Photographer Rating</th>
            <th>Action</th>
        </tr>

        </thead>

           @forelse($photographers as $photographer)
           <tbody class="table table-striped">
            <tr>
                <td>{{$photographer->id}}</td>
                <td >{{$photographer->name}}</td>
                <td>{{$photographer->email}}</td>
                <td>{{$photographer->description}}</td>
                <td>    
     
                     <form action="{{url('photographer.destroy',$photographer->id)}}"  method="POST">
                       {{csrf_field()}}
                       {{method_field('DELETE')}}
                       <input class="btn btn-sm btn-danger" type="submit" value="Delete">
                     </form>
           
                    
            </tr>
            @empty
            <tr>
                <td>No Photographer</td>
            </tr>
            </tbody>
            @endforelse

    </table>
</div>
</div>
        @endsection