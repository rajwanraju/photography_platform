 @extends('admin.master')
@section('content')
<div class="right_col" role="main">
    <div class="container">
 <h3 style="text-align: center;">Albums</h3>

 <h3 class="text-center text-success">{{Session::get('message')}}</h3>
    
    <a class="btn btn-success" href="{{route('myAlbum.create')}}"> Create Album</a>
     
    <table class="table table-bordered table-dark">
        <thead class="table thead-dark">
        <tr>
            <th>Cover Image</th>
            <th>Album Title</th>
            <th>Description</th>
            <th>Action</th>
        </tr>

        </thead>

           @forelse($albums as $album)
           <tbody class="table table-striped">
            <tr>
                <td><img src="{{asset($album->cover_image)}}" style="width:128px; height:128px;"></td>
                <td >{{$album->title}}</td>
                <td>{{$album->description}}</td>
                <td>   <a class="btn btn-info btn-sm" href="{{route('myAlbum.edit',$album->id)}}">Edit</a> 
     
                     <form action="{{route('myAlbum.destroy',$album->id)}}"  method="POST">
                       {{csrf_field()}}
                       {{method_field('DELETE')}}
                       <input class="btn btn-sm btn-danger" type="submit" value="Delete">
                     </form>
           
                    
            </tr>
            @empty
            <tr>
                <td>No Album</td>
            </tr>
            </tbody>
            @endforelse

    </table>
</div>
</div>
        @endsection