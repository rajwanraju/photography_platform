 @extends('admin.master')
@section('content')
<div class="right_col" role="main">
	<div class="container">
 <h3 style="text-align: center; color: black;">Proposal Approve</h3>
    
   
     
    <table class="table">
        <tr>

            <th>Title</th>
            <th>Proposed Department</th>
               <th> StartDate</th>
                  <th>Status</th>
            <th style="text-align: center;">Action</th>
        </tr>

           @forelse($proposals as $proposal)
            <tr>
                <td>{{$proposal->title}}</td>
                <td>{{$proposal->ProposedDepartment}}</td>
                <td>{{$proposal->StartDate}}</td>
                <td style="color: red;"><b>{{$proposal->Status}}</b></td>
                <td>
                   <td>   <a class="btn btn-info btn-sm" href="{{url('admin/viewProposal/'.$proposal->id)}}">View</a>  </td>
                   <td> 
     
                     <form action="{{url('/Proposal/Approvement')}}"  method="POST">
                       {{csrf_field()}}
                       

                  <div class="col-md-6">
                                <select class="form-control" name="Status">
    <option>Action</option>
    <option value="Waiting">Waiting</option>
    <option value="Reject">Reject</option>
    <option value="Approve">Approve</option>
 
  </select>

                            
                            </div>
   <input  type="hidden" value="{{$proposal->id}}" name="id">

                       <input class="btn btn-sm btn-danger" type="submit" value="Submit">
                     </form>
           
                     </td>
                </td>
            </tr>
            @empty
            <tr>
                <td>No proposals</td>
            </tr>
            @endforelse

    </table>
</div>
</div>
        @endsection