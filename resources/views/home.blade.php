@extends('layouts.app')

@section('content')
<div class="container ">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card lightOverlay">
                <div class="card-header bg-dark">Control Panel</div>


                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    
                    <a name="" id="" class="btn btn-dark" href="/profile" role="button">
                        Profile
                    </a>
                    <!-- butoon -->
                    <button type="button" class="btn btn-dark js-scroll-trigger" data-toggle="modal" data-target="#create-date" data-whatever="@mdo">Create Date</button>

                    <a target="blank" href="https://api.whatsapp.com/send?phone=5703194853019&text=Hola%20quisiera%20separar%20una%20cita%20para%20las%20" class="fa-stack fa-4x">
                    
                         <i class="fab 	fa-whatsapp fa-stack-1xa text-success"></i>
                    </a>
                            <!--  -->

                    {{--Modal create date  --}}

                    <div class="modal fade" id="create-date" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header bg-dark text-lght">
                                    <h5 class="modal-title " id="ModalLabel">Create new Date</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        @csrf
                                        <input type="hidden" value="{{ csrf_token() }}" id="token" />
                                        <div class="form-group">
                                            {{-- <label for="recipient-name" class="col-form-label text-dark" place>Full name</label> --}}
                                            <input autofocus="autofocus" placeholder="Full name" type="text" class="form-control" id="recipient-name">
                                        </div>
                                        <div class="form-group">
                                            {{-- <label  for="message-text" class="col-form-label text-dark">Telefono</label> --}}
                                            <div class="form-group">
                                                <input placeholder="Phone" type="number" class="form-control" id="message-text">
                                            </div>
                                            <div class="form-group">
                                                {{-- <label for="message-text" class="col-form-label text-dark">Day</label> --}}
                                                <input min="2020-04-10" max="2020-04-30" type="date" class="form-control" id="date-day">
                                            </div>
                                            {{-- <label for="message-text" class="col-form-label text-dark">Time</label> --}}
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
                                            <div class="form-group" id="modal-response">

                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">

                                <a target="blank" href="https://api.whatsapp.com/send?phone=5703194853019&text=Hola%20quisiera%20separar%20una%20cita%20para%20las%20" class="fa-stack fa-4x">
                                    <i class="fab 	fa-whatsapp fa-stack-1xa text-success"> </i>
                                </a>
                                    <button type="button" class="btn btn-dark" data-dismiss="modal">Cancel</button>
                                    <button id="confirm-date" type="button" class="btn btn-dark" onclick="sendForm()"> Confirm</button>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                {{-- modal --}}


                @if(Auth::user()->id == 1)
                <div class="containner reports">
                    <div class="container">
                        <div class="card-header bg-dark">Reports</div>
                       
                        <div class="card-header">
                            <button id="show-dates-id" onclick="showDates()" type="submit" class="btn btn-outline-dark btn-sm" >Check all Dates</button>
                            
                            <button id="show-filters-id" onclick="showFilter()" type="submit" class="btn btn-outline-dark btn-sm">Show Filters</button>
                            
                        </div>
                       
                        <div class="m-2">
                            <div id="filter-container-id" class="row justify-content-around d-none">
                                <form class="text-center" method="POST" action="{{ route('filterByDay') }}">
                                    <input class="form-control" name="dateDayFilter" type="date" placeholder="filtar por día">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div>
                                        <button type="submit" class="btn btn-outline-dark mt-2 text-center" id="filterByDay">Filter by Day</button>
                                    </div>
                                </form>


                                <form class="text-center" method="POST" action="{{ route('filterByRange') }}">
                                    <input class="form-control mb-2" name="dateDayFilterIni" type="date" placeholder="filtar por día" >
                                    <input class="form-control bt-2" name="dateDayFilterEnd" type="date" placeholder="filtar por día">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div>
                                        <button type="submit" class="btn btn-outline-dark mt-2" id="filterByDay">Filter by Range</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="col-lg-12 grid-margin stretch-card overflow-auto">
                        
                        <div class="card table table-dark text-center overflow-auto">
                            <table class="table table-dark text-center" border="1">
                                
                                <thead>
                                    <tr>
                                        <th>Admin</th>
                                        <th>id</th>
                                        <th>User</th>
                                        <th>Phone</th>
                                        <th>Day</th>
                                        <th>Hour</th>
                                        <th>Barber</th>
                                    </tr>
                                </thead>
                                <tbody id="table-body-id" class="d-none">
                                @foreach($citas as $cita)
                               
                                    <tr id="table-row-id">
                                        <td>
                                        <a href="/deleteDate/{{ $cita->id }}">
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
            </div>
        </div>
    </div>
</div>

@endsection