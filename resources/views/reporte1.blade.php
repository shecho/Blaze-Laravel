<!-- Esta vista solo es para hacer peuras de como se veran los reportes en PDF -->
<h1>Esta es la ruta del reporte de Usuarios en PDF</h1>

<br>
<?php 
$usersUsersPDF ='
@extends("layouts.reportesTemplate")

@section("content")


<!-- @if(Auth::user()->id == 1) -->

<div class="text-center containner reports mt-4 lightOverlay col-md-12" >
       
       
        <div class="col-lg-12 grid-margin stretch-card ">
        <div class="card-header bg-dark " id="dates-title">Citas</div>
            <div class="card table table-dark text-center ">
            <table class="table table-dark table-hover text-center" >
                    
                    <thead id="table-headers-dates" class="">
                        <tr class="">
                            <th>id</th>
                            <th>Nombre</th>
                            <th>Teléfono</th>
                            <th>Día</th>
                            <th>Hora</th>
                            <th>Barbero</th>
                        </tr>
                    </thead>
                    <tbody id="table-body-id" class="">
                    @foreach($citas as $cita)
                   
                        <tr id="table-row-id ">
                          
                            <td>{{ $cita->id }}</td>
                            <td>{{ $cita->userName }}</td>
                            <td>{{ $cita->userPhone }}</td>
                            <td>{{ $cita->day }}</td>
                            <td>{{ $cita->time }}</td>
                            <td>{{ $cita->barber }}</td>

                        </tr>
                   

                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- @endif -->
    </div>


@endsection ';