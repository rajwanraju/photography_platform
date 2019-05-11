 @extends('admin.master')
@section('content')
<div class="right_col" role="main">
    <div class="container">
 <h3 style="text-align: center;">Reviews</h3>

 <h3 class="text-center text-success">{{Session::get('message')}}</h3>
    
     
    <table class="table table-bordered table-dark">
        <thead class="table thead-dark">
        <tr>
            <th> Title</th>
            <th> Comment</th>
            <th> User Name</th>
            <th> Status</th>
            <th>Action</th>
        </tr>

        </thead>

           @forelse($reviews as $review)
           <tbody class="table table-striped">
            <tr>
                <td>{{$review->title}}</td>
                <td >{{$review->comment}}</td>
                <td>{{$review->name}}</td>
                <td>{{$review->status==1?'Published': 'UnPublished' }}</td>
                <td>    
     
                    <a href="{{url('/admin/review/published/'.$review->id)}}" @if($review->status == 1) style="color:green" @endif><i class="fa fa-arrow-circle-up fa-3x" aria-hidden="true"></i>
</a>
                    <a href="{{url('/admin/review/unpublished/'.$review->id)}}" @if($review->status == 0) style="color:green" @endif ><i class="fa fa-arrow-circle-down fa-3x" aria-hidden="true"></i>
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