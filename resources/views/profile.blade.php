@extends('layouts.app')


@section('content')

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>priceing table practice</title>
  <link rel="stylesheet" href="../../public/css/profilestyle.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">

 
 

</head>

<body>
  <div class="container">
    <div class="pricing-table table1">
      <div class="pricing-header">
        
      <div class="price profile-photo-container">

        <i class="fas fa-user-circle profile-photo"></i>
          
          
        </div>
        <div class="title">Name</div>
      </div>
      <ul class="pricing-list">

        <li><strong>E-mail</strong>  abc@bnm.com </li>
       
        <li><strong>Phone Number</strong> 3194865030</li>
        <div class="border"></div>
        <li><strong>Adress</strong> Direccion</li>
        <div class="border"></div>
        <li><strong>#Dates</strong> 12  </li>
        <div class="border"></div>
      
      </ul>
      <a href="#">Crate Date</a>

    </div>

  
  </div>
</body>

</html>

@endsection