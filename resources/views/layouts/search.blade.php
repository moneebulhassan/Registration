@extends('layouts.app')

@section('content')
<div class="card" style="margin-Left:40px;">



    <h1><center>Search Result</center></h2>


 @if(count($patient)>0)
 @foreach($patient->all() as $patient)
 <h2>
   <small>First Name :</small>
   {{ $patient->first_name }}
 </h2>
 <h2>
   <small>last Name :</small>
   {{ $patient->last_name }}
 </h2>

 <h2>
   <small>Date of Birth :</small>
   {{ $patient->date_of_birth }}
 </h2>

 <h2>
   <small>Sex :</small>
   {{ $patient->sex }}
 </h2>

 <h2>
   <small>Blood Group :</small>
   {{ $patient->blood_group }}
 </h2>
 @endforeach
 @else
  <p>No result found!!</p>
 @endif

</div>
<div class="row">


  <div class="col-md-4">
      <a href="{{route('display')}}" class="btn btn-danger pull-right">Cancel</a>
      <a href="{{route('print', $patient->id)}}" target="_blank" class="btn btn-success pull-right">Print</a>

  </div>
</div>
@endsection
<style media="screen">
  .card{
    width: 80%;
    margin: auto;
    text-decoration-style:dotted;
    padding: 25px;
    border: 1px solid #555;
    border-radius: 15px;


    background-image: url('{{ asset('hd.JPG') }}' ) ;
    image-resolution: from-image;
    opacity: 50;
  }
  small{
    color: #555;
  }
</style>
