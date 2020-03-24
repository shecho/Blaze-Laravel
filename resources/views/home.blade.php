@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Control Panel</div>


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
                    <!--  -->
                    {{--Modal create date  --}}

                    <div class="modal fade" id="create-date" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header btn btn-dark">
                                    <h5 class="modal-title text-light" id="ModalLabel">Create new Date</h5>
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
                                            <input placeholder="Full name" type="text" class="form-control" id="recipient-name">
                                        </div>
                                        <div class="form-group">
                                            {{-- <label  for="message-text" class="col-form-label text-dark">Telefono</label> --}}
                                            <div class="form-group">
                                                <input placeholder="Phone" type="number" class="form-control" id="message-text">
                                            </div>
                                            <div class="form-group">
                                                {{-- <label for="message-text" class="col-form-label text-dark">Day</label> --}}
                                                <input type="date" class="form-control" id="date-day">
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
                                                    <option value="2">Barbero 2</option>
                                                    <option value="3">Barbero 3</option>
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
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                    <button id="confirm-date" type="button" class="btn btn-dark"> Confirm</button>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>


                {{-- modal --}}



                @if(Auth::user()->id == 1)

                <div class="card-header">Reports</div>
                <div class="m-4">
                    <div class="row justify-content-around">
                        <form method="POST" action="{{ route('filterByDay') }}">
                            <input name="dateDayFilter" type="date" placeholder="filtar por día">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div>
                                <button type="submit" class="btn btn-dark mt-2" id="filterByDay">filtar por día</button>
                            </div>
                        </form>


                        <form method="POST" action="{{ route('filterByRange') }}">
                            <input name="dateDayFilterIni" type="date" placeholder="filtar por día">
                            <input name="dateDayFilterEnd" type="date" placeholder="filtar por día">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div>
                                <button type="submit" class="btn btn-dark" id="filterByDay">filtar por fechas</button>
                            </div>

                        </form>
                    </div>
                </div>
                <br>
                <table class="table table-dark" border="1">
                    <tr>
                        <th>id</th>
                        <th>usuario</th>
                        <th>telefono</th>
                        <th>día</th>
                        <th>hora</th>
                        <th>barbero</th>
                    </tr>
                    @foreach($citas as $cita)
                    <tr>
                        <td>{{ $cita->id }}</td>
                        <td>{{ $cita->userName }}</td>
                        <td>{{ $cita->userPhone }}</td>
                        <td>{{ $cita->day }}</td>
                        <td>{{ $cita->time }}</td>
                        <td>{{ $cita->barber }}</td>
                    </tr>
                    @endforeach
                </table>
                @endif
            </div>
        </div>
    </div>
</div>
</div>
<script src="/../js/date.js"></script>
@endsection