<!--
  Esta vista muetra los datos de cliente registrado.

 -->

@extends('layouts.app')

@section('content')

<div class="col-md-6 container text-center">
 <div class="card-header bg-dark ">
  <a href="/home" class="text-light float-left">
    <i class="h4 fas fa-undo-alt"></i>
  </a>
  <h3 class="">Perfil</h3>

 </div>
  <div class="row text-center border ">

    <div class="card-body lightOverlay text-dark">

      <div class="pricing-header">


        <div class="price profile-photo-container h1">
          <i class="fas fa-user-circle profile-photo "></i>
        </div>
       <div class="d-flex justify-content-center">
          <input type="hidden" id="user-id" value="{{ $user->id }}">
          <h5 class="card-title h2" id="user-name-id">{{ $user->name }}</h5>

         <div class="" id="input-name-content" >
            <!-- <input class="h6" type="text" name="newName" id="edit-name" value="{{ $user->name }}"> -->
        </div>
        <div>
          <a id="name-icon-container" href="#" class="text-dark m-2"   >
              <i class="fas fa-pencil-alt  " onclick="editName()"></i>
          </a>
        </div>
       </div>

      </div>
      <div class="pricing-list">



        <div class="d-flex justify-content-center m-2 align-items-center">
          <a class="m-2">
            <i class="far fa-envelope h2 bold"></i>

          </a>
          <p> {{ $user->email }}</p>
        </div>
        <!-- try -->
        <!-- <div class="d-flex justify-content-center m-2 align-items-center text-center">
            <div class="price profile-photo-container h1 m-2">
              <i class="fas fa-user-circle profile-photo "></i>
            </div>
              <div class="m-2">
                <input class="text-center btn" type="text" value={{ $user->email }}>
              </div>
              <div>
                <i class="fas fa-pencil-alt btn btn-light"></i>
              </div>
            </div> -->
        <!--  -->

        <div class="d-flex justify-content-center m-2 align-items-center">
          <div class="m-2" >
            <i class="fab fa-whatsapp h2" id="" onclick=""></i>
          </div>
          <p class="m-2" id="user-phone-id"> {{ $user->phone }}</p>
         <div id="input-phone-content">
           <!-- <input value="{{ $user->phone }}" type="number" name="newPhone" id="edit-phone"> -->
         </div>
          <a id="phone-icon-container" href="#" class="text-dark" >
            <i id="phone-pencil" class="fas fa-pencil-alt " onclick="editPhone()"></i>
          </a>

        </div>
        <div class="border"></div>
      </div>
      <button type="button" class="btn btn-dark   js-scroll-trigger" data-toggle="modal" data-target="#create-date" data-whatever="@mdo">Agendar Cita
      </button>
      <button type="button" class="btn btn-dark   js-scroll-trigger" data-toggle="modal" data-target="" data-whatever="" onclick="CheckMyDates()">Ver mis Citas
      </button>
      <a target="blank" href="https://api.whatsapp.com/send?phone=5703194853019&text=Hola%20quisiera%20separar%20una%20cita%20para%20las%20" class="fa-stack fa-4x">
        <i class="fab 	fa-whatsapp fa-stack-1xa text-success"> </i>
      </a>


  <!-- ver mis citas
   -->
      <div class="CheackMyDates d-none" id="CheackMyDates">
        <div class="col-lg-12 grid-margin stretch-card ">
          <div class="card-header bg-dark text-light " id="dates-title">Mis Citas</div>
          <div class="card table table-dark text-center ">
          <table class="table table-dark table-hover text-center" >

                  <thead id="table-headers-dates" class="">
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
                  <tbody id="table-body-id" class="">

                      <!-- muestra las citas del cliente y valida que sean de el -->
                    @foreach($citas as $cita)
                        @if ($user->phone == $cita->userPhone)
                          <tr id="table-row-my-dates">
                            <td>

                              <a target="_blank" class="text-light btn btn-dark  " href="https://api.whatsapp.com/send?phone=5703194853019&text=Hola%20quisiera%20Cancelar%20mi%20cita%20para%20el%20%20{{$cita->day}}%20a%20las%20{{$cita->time}}">
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

                        @endif
                      @endforeach


                    </tbody>
              </table>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>






{{--Modal create date  --}}
<!-- modal de cracion de citas -->
<div class="modal fade" id="create-date" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-dark text-light">
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
            {{-- <label for="recipient-name" class="col-form-label text-dark" place>Full name</label> --}}
            <input autofocus="autofocus" placeholder="
            Nombre Completo" type="text" class="form-control" id="recipient-name">
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
      <a  target="_blank" href="https://api.whatsapp.com/send?phone=5703194853019&text=Hola%20quisiera%20separar%20una%20cita%20para%20las%20" class="fa-stack fa-4x">
        <i class="fab fa-whatsapp fa-stack-1xa text-success"> </i>
      </a>
        <button type="button" class="btn btn-dark" data-dismiss="modal">Cancelar</button>
        <button
          id="confirm-date"
          type="button"
          class="btn btn-dark"
          onclick="sendForm()"
          > Confirmar</button>
      </div>
    </div>
  </div>
</div>


</div>
{{-- modal --}}




@endsection
