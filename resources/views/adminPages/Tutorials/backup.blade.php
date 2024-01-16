@extends('template.master')
@section('content')
@include('inc.errors')
<div class="card card-nav-tabs">
  <div class="card-header card-header-primary">
      <div class="text-center icon icon-info"><i class="material-icons"  style="text-shadow:black 2px 4px 2px;font-size:40px ">wifi_tethering</i></div>
      <h3 class="text-center" style="text-shadow:black 2px 4px 2px">HOW TO CREATE BACKUP</h3>
  </div>
</div>

<div class="col-sm-12">
<i><h2 class="title">STEP's</h2></i>
    <h4>
        <ul>
           
            <li>Open any <b>terminal</b> app in your computer <i>(e.g cmd)</i> </li>
            <li>Go to the directory of the system <i>(e.g C:\xampp\htdocs\OSMS_Laravel)</i>  by typing command like <code>cd C:\xampp\htdocs\OSMS_Laravel </code></li>
            <li>Enter code <code>php artisan backup:run</code> to create new backup in a .zip file (this includes the files in system and all data in the database)</li>
            <li>Enter code <code>php artisan backup:list</code> to view all created backup's</li>
            <li>All backup's created will be saved in this directory <i>C:\xampp\htdocs\OSMS_Laravel\storage\app\OSMS</i></li>

        </ul>
        </h4>
    </div>

        <p class="text-center"><b>NOTE:</b> Backup's are automatically created if connected in the internet and it automatically saved to google drive in the email account of the system (osmsservice1@gmail.com)</p>
        <br><br>
   <div style="padding-right:1in">
        <a href="/tutorials/index"><button class="btn btn-primary btn-round pull-right" >Back</button></a>
</div>
    

@endsection