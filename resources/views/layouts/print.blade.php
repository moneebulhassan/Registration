<div class="card" style="margin-Left:40px;">



    <h1><center>Birth Certificate Card</center></h2>




  <h2>
    <small>First Name :</small>
    {{ $patient->first_name }}
</h2>
<h2 align="center" style=" margin-top:-50px;">
    <small>Last Name :</small>
    {{ $patient->last_name }}
  </h2>
    <br>
  <h2>
      <small > Sex :</small>
    {{ $patient->sex }}
  </h2>
  <h2 align="center" style="margin-left: 88px;margin-top:-50px;">
      <small>Date of Birth :</small>
    {{ $patient->date_of_birth }}
  </h2>
    <br>
  <h2>
      <small>emai :</small>
    {{ $patient->email }}
  </h2>
  <h2 align="center" style="margin-left: 98px;margin-top:-50px;">
      <small>Record of Immunisation :</small>
    {{ $patient->rec_of_imm }}
  </h2>
<br>


  
  <footer>This certificate is a property of the Birth certificate system. If found kindly return to the nearest health center/police satation.</footer>

</div>
<style media="screen">
  .card{
    width: 80%;
    margin: auto;
    text-decoration-style:dotted;
    padding: 25px;
    border: 1px solid #555;
    border-radius: 15px;


    background-image: url('{{ asset('bb.JPG') }}' ) ;
    image-resolution: from-image;
    opacity: 50;
  }
  small{
    color: #555;
  }
</style>
