@extends('admin.master')
@section('content')


<div class="right_col" role="main">
    <div class="container">
 <h3 style="text-align: center;">Albums</h3>

 <h3 class="text-center text-success">{{Session::get('message')}}</h3>
    
     
    <table class="table table-bordered table-dark">
        <thead class="table thead-dark">
        <tr>
            <th> Title</th>
            <th> Description</th>
            <th> User Name</th>
            <th> Status</th>
            <th>Action</th>
        </tr>

        </thead>

           @forelse($albums as $album)
           <tbody class="table table-striped">
            <tr>
                <td>{{$album->title}}</td>
                <td >{{$album->description}}</td>
                <td>{{$album->name}}</td>
                <td>{{$album->status==1?'Published': 'UnPublished' }}</td>
                <td>    
     
                    <a href="{{url('/admin/album/published/'.$album->id)}}" @if($album->status == 1) style="color:green" @endif><i class="fa fa-arrow-circle-up fa-3x" aria-hidden="true"></i>
</a>
                    <a href="{{url('/admin/album/unpublished/'.$album->id)}}" @if($album->status == 0) style="color:green" @endif ><i class="fa fa-arrow-circle-down fa-3x" aria-hidden="true"></i>
</a>
                </td>
           
                    
            </tr>
            @empty
            <tr>
                <td>No Review</td>
            </tr>
            </tbody>
            @endforelse

    </table>
</div>
</div>
@endsection