@extends('admin.master')
@section('title')

 Research Admission

@endsection
 
@section('content')
<div class="right_col" role="main">
	<div class="container">
  <h3 class="text-center text-success">{{Session::get('message')}}</h3>
  <div class="container">
    <h1 class="text-center text-default"> Proposal</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Title</th>
                    <th style="text-align: center;"  >Description</th>
                    
                    
                    
                </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                <tr>
                    <td>Proposal Title </td>
                    <td style="text-align: center;" ><strong>{{$viewProposal->title}}</strong></td>
                   
                 
                </tr>
               
                <tr>
                    <td>Methodology</td>
                    <td colspan="2">{{$viewProposal->Methodology}}</td>
                   
                 
                </tr>
                <tr>
                    <td>Prefrred Department</td>
                    <td colspan="2" style="text-align: center;" >{{$viewProposal->ProposedDepartment}}</td>
                   
                 
                </tr>
                <tr>
                    <td>Founding Source</td>
                    <td colspan="2" style="text-align: center;" >{{$viewProposal->FundingSource}}</td>
                   
                 
                </tr>
                <tr>
                    <td>Prefrred start Date</td>
                    <td colspan="2" style="text-align: center;" >{{$viewProposal->StartDate}}</td>
                   
                 
                </tr>
                <tr>
                    <td>Propoasl Pdf</td>
                    <td colspan="2" style="text-align: center;" ><a class="btn btn-info btn-sm " target="_blank" href=" {{asset($viewProposal->ProposalFile) }}">View Proposal File</a></td>
                   
                 </tr>
             </td>

                 


                </tr>

                
            </tbody>



        </table>
    </div>
   

</div>
@endsection