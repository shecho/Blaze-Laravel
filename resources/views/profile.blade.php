{{-- esta vista contiene los datos del usio registrado.abnf
  Solo se van a mostrar los datos basicos y aparecera un boton para Agendar citas


  -Pendiente agregar el boton para editar los datos que redirecciones a settings
  
  --}}

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

      <li><strong>Nombre</strong> {{ $user->name }}</li>

        <li><strong>E-mail</strong> {{ $user->email }}</li>
       
        <li><strong>Phone Number</strong> {{ $user->phone }}</li>
        <div class="border"></div>
        
      
      </ul>
      <a href="#">Crate Date</a>

    </div>

  
  </div>
</body>

</html>

@endsection