<!-- Esta vista contiene el panle de controly reportes del administrador
Permite ver todos los reportes al administrador
 -->


<!-- funtion (){
    window.open('reporte.php','blank');
   
} -->


@extends('layouts.app')

@section('content')
<div class="container ">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card lightOverlay">
                <div class="card-header bg-dark">Panel de Control</div>


                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    
                    <a name="" id="" class="btn btn-dark" href="/profile" role="button">
                        Perfil
                    </a>
                    <!-- butoon -->
                    <button type="button" class="btn btn-dark js-scroll-trigger" data-toggle="modal" data-target="#create-date" data-whatever="@mdo">Agendar Cita</button>

                    <a target="blank" href="https://api.whatsapp.com/send?phone=5703194853019&text=Hola%20quisiera%20separar%20una%20cita%20para%20las%20" class="fa-stack fa-4x">
                    
                         <i class="fab 	fa-whatsapp fa-stack-1xa text-success"></i>
                    </a>
                            <!--  -->

                    {{--Modal create date  --}}

                    <div class="modal fade" id="create-date" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header bg-dark text-lght">
                                    <h5 class="modal-title " id="ModalLabel">Agendar Cita</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        @csrf
                                        <input type="hidden" value="{{ csrf_token() }}" id="token" />
                                        <div class="form-group">
                                            {{-- <label for="recipient-name" class="col-form-label text-dark" place>Nombre Completo</label> --}}
                                            <input autofocus="autofocus" placeholder="Nombre Completo" type="text" class="form-control" id="recipient-name">
                                        </div>
                                        <div class="form-group">
                                            {{-- <label  for="message-text" class="col-form-label text-dark">Telefono</label> --}}
                                            <div class="form-group">
                                                <input placeholder="Teléfono" type="number" class="form-control" id="message-text">
                                            </div>
                                            <div class="form-group">
                                                {{-- <label for="message-text" class="col-form-label text-dark">Day</label> --}}
                                                <input min="2020-04-10" max="2020-04-30" type="date" class="form-control" id="date-day">
                                            </div>
                                            {{-- <label for="message-text" class="col-form-label text-dark">Hora</label> --}}
                                            <div class="form-group">
                                                <select class="form-control" name="time" id="date-time">
                                                    <option value="9">9 am</option>
                                                    <option value="10">10 am</option>
                                                    <option value="11">11 am</option>
                                                    <option value="12">12 am</option>

                                                    <option value="2">2 pm</option>
                                                    <option value="3">3 pm</option>
                                                    <option value="4">4 pm</option>
                                                    <option value="5">5 pm</option>
                                                </select>
                                                {{-- <label for="message-text" class="col-form-label text-dark">Barber</label> --}}
                                                {{-- <input placeholder="Barber" type="text"  class="form-control" id="message-text"> --}}
                                            </div>
                                            <div class="form-group">
                                                <select class="form-control" name="time" id="barber">
                                                    <option value="1">Barbero 1</option>
                                                    <!-- <option value="2">Barbero 2</option>
                                                    <option value="3">Barbero 3</option> -->
                                                </select>
                                                {{-- <label for="message-text" class="col-form-label text-dark">Barber</label> --}}
                                                {{-- <input placeholder="Barber" type="text"  class="form-control" id="message-text"> --}}
                                            </div>
                                            <div class="form-group">
                                                <select class="form-control" name="time" id="product">
                                                <option value="1">Corte</option>
                                                <option value="2">Barba</option>
                                                <option value="3">Corte y Barba</option>
                                                </select>
                                            
                                            </div>
                                            <div class="form-group" id="modal-response">

                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">

                                <a target="blank" href="https://api.whatsapp.com/send?phone=5703194853019&text=Hola%20quisiera%20separar%20una%20cita%20para%20las%20" class="fa-stack fa-4x">
                                    <i class="fab 	fa-whatsapp fa-stack-1xa text-success"> </i>
                                </a>
                                    <button type="button" class="btn btn-dark" data-dismiss="modal">Cancelar</button>
                                    <button id="confirm-date" type="button" class="btn btn-dark" onclick="sendForm()"> Confirmar</button>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                {{-- modal --}}
                </div>
            </div>
        </div>
    </div>

                @if(Auth::user()->id == 1)

            <div class="text-center containner reports mt-4 lightOverlay col-md-12" >
                <div class="card-header bg-dark">Reportes</div>
                    <div class="container ">
                        <div class="card-header">
                            <a 
                                onclick="showReporte1()"
                                href="/reporte1"
                                id="" 
                                class="btn btn-outline-dark btn-sm" >Reporte1 Citas
                        
                            </a>
                            <a 
                                onclick="showReporte1()"
                                href="/reporte2"
                                id="" 
                                class="btn btn-outline-dark btn-sm" >Reporte2 Clientes
                        
                            </a>
                            <a href="/exportAllDates" id="export-dates-id" class="btn btn-outline-dark btn-sm" >Exportas Citas</a>
                            <a href="/exportAllusers" id="export-users-id" class="btn btn-outline-dark btn-sm" >Exportar Usurios</a>
                            <button id="show-dates-id" onclick="showDates()" type="submit" class="btn btn-outline-dark btn-sm" >Ver todas las Citas</button>
                            
                            <button id="show-filters-id" onclick="showFilter()" type="submit" class="btn btn-outline-dark btn-sm">Ver  Filtros de Citas</button>
                            <button 
                                id="service-id"
                                onclick=""
                                type="submit"
                                class="btn btn-outline-dark btn-sm"
                                data-target="#create-service"
                                data-toggle="modal"
                                data-whatever="@mdo">
                                    Crear Servicio
                                 
                            </button>
                            <button id="show-services-id" onclick="showServices()" type="submit" class="btn btn-outline-dark btn-sm" >Ver todos los Servicios</button>
                            
                        </div>
                       
                        <div class="m-2">
                            <div id="filter-container-id" class="row justify-content-around d-none">
                                <form class="text-center" method="POST" action="{{ route('filterByDay') }}">
                                    <input class="form-control" name="dateDayFilter" type="date" placeholder="filtar por día">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div>
                                        <button type="submit" class="btn btn-outline-dark mt-2 text-center" id="filterByDay">Filtrar por Día</button>
                                    </div>
                                </form>


                                <form class="text-center" method="POST" action="{{ route('filterByRange') }}">
                                    <input class="form-control mb-2" name="dateDayFilterIni" type="date" placeholder="filtar por día" >
                                    <input class="form-control bt-2" name="dateDayFilterEnd" type="date" placeholder="filtar por día">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div>
                                        <button type="submit" class="btn btn-outline-dark mt-2" id="filterByDay">Filtrar por rango de Días</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="col-lg-12 grid-margin stretch-card ">
                    <div class="card-header bg-dark d-none" id="dates-title">Citas</div>
                        <div class="card table table-dark text-center ">
                        <table class="table table-dark table-hover text-center" >
                                
                                <thead id="table-headers-dates" class="d-none">
                                    <tr class="">
                                        <th>Administrar</th>
                                        <th>id</th>
                                        <th>Nombre</th>
                                        <th>Teléfono</th>
                                        <th>Día</th>
                                        <th>Hora</th>
                                        <th>Barbero</th>
                                    </tr>
                                </thead>
                                <tbody id="table-body-id" class="d-none">
                                @foreach($citas as $cita)
                               
                                    <tr id="table-row-id ">
                                        <td>
                                        <button type="button" class="btn btn-dark js-scroll-trigger" data-toggle="modal" data-target="#delete-date" data-whatever="@mdo">
                                        <a class="" >
                                            <i class="fas fa-trash" id="trashIcon"></i>
                                        </a>   
                                        </button>
                                        <a class="text-light btn btn-dark  " href="/deleteDate/{{ $cita->id }}">
                                            <i class="fas fa-trash" id="trashIcon"></i>
                                        </a>   
                                        </td>
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

                    @endif
                </div>
                <div class="d-none text-center containner reports m-0 lightOverlay col-md-12 " id="services-container-id" >
               
                
                    <div class="container ">
                        
                        <!-- <div class=""> -->
                        <div class="card-header font-weight-bold bg-dark">Servicios</div>
                            <div class="card   text-center ">
                            
                                <table class="table table-responsive-sm table-secondary text-center table-hover table" >
                                
                                    <thead id="table-headers-services" class="">
                                        <tr>
                                            <th>Administrar</th>
                                            <th>id</th>
                                            <th>Nombre</th>
                                            <th>precio</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody id="table-body-id-services" class="">
                                
                                
                                        <tr id="table-row-id-services ">
                                            <td>
                                            <button type="button" class="btn btn-dark js-scroll-trigger" data-toggle="modal" data-target="#delete-date" data-whatever="@mdo">
                                            <a class="" >
                                                <i class="fas fa-trash" id="trashIcon"></i>
                                            </a>   
                                            </button>
                                            <a class="text-light btn btn-dark  " href="/deleteDate/{{ $cita->id }}">
                                                <i class="fas fa-trash" id="trashIcon"></i>
                                            </a>   
                                            </td>
                                            <td>1</td>
                                            <td>Corte</td>
                                            <td>$12.000</td>
                                        
                                        </tr>
                                        <tr id="table-row-id-services ">
                                            <td>
                                            <button type="button" class="btn btn-dark js-scroll-trigger" data-toggle="modal" data-target="#delete-date" data-whatever="@mdo">
                                            <a class="" >
                                                <i class="fas fa-trash" id="trashIcon"></i>
                                            </a>   
                                            </button>
                                            <a class="text-light btn btn-dark  " href="/deleteDate/{{ $cita->id }}">
                                                <i class="fas fa-trash" id="trashIcon"></i>
                                            </a>   
                                            </td>
                                            <td>2</td>
                                            <td>Barba</td>
                                            <td>$8.000</td>
                                        
                                        </tr>
                                        <tr id="table-row-id-services ">
                                            <td>
                                            <button type="button" class="btn btn-dark js-scroll-trigger" data-toggle="modal" data-target="#delete-date" data-whatever="@mdo">
                                            <a class="" >
                                                <i class="fas fa-trash" id="trashIcon"></i>
                                            </a>   
                                            </button>
                                            <a class="text-light btn btn-dark  " href="/deleteDate/{{ $cita->id }}">
                                                <i class="fas fa-trash" id="trashIcon"></i>
                                            </a>   
                                            </td>
                                            <td>3</td>
                                            <td>Corte y Barba</td>
                                            <td>$16.000</td>
                                        
                                        </tr>
                                
                                    </tbody>
                                </table>
                            </div>
                        <!-- </div> -->
                    </div>
                  </div>
        <!-- </div> -->
    <!-- </div> -->
<!-- </div> -->

{{--Eliminar cita  --}}

    <div class="modal fade" id="delete-date" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-dark text-light">
                    <h5 class="modal-title " id="ModalLabel">Eliminar Cita</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        @csrf
                        
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label text-dark" place>Seguro deseas eliminar esta cita?</label>
                            
                        </div>
                        
                    </form>
                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-dark" data-dismiss="modal">Cancelar</button>
                    <button id="confirm-date" type="button" class="btn btn-dark" onclick="()"> 

                    <a class="text-decoration-none text-light" href="/deleteDate/{{ $cita->id }}"> 
                        Confirmar
                        </a> 
                                                        

                    </button>
                        
                </div>
            </div>
        </div>
    </div>


</div>
{{-- modal --}}






                {{--Crear Servicio   --}}

<div class="modal fade" id="create-service" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-dark text-light">
                <h5 class="text-light modal-title " id="ModalLabel">Gestionar servicio</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    @csrf
                 
                    <div class="form-group">
                      {{-- <label for="recipient-name" class="col-form-label text-dark" place>Nombre del Servicio</label> --}}
                      <input placeholder="Nombre del Servicio" type="text" class="form-control" id="service-name-id">
                    </div>
                    <div class="form-group">
                      {{-- <label for="recipient-name" class="col-form-label text-dark" place>Precio</label> --}}
                      <input placeholder="$" type="number" class="w-25 form-control" id="service-price-id">
                    </div>
                   
                    <div class="form-group" id="create-service-mesage-validate">
                      
                    </div>
                   
                </form>
            </div>
            <div class="modal-footer">

                <button type="button" class="btn btn-dark" data-dismiss="modal">Cancelar</button>
                <button id="confirm-date" type="button" class="btn btn-dark" onclick="handleService()"> 
               Crear
                </button>
                 
            </div>
        </div>
    </div>
</div>


{{-- modal --}}


@endsection