{{-- esta vista contiene los datos del usio registrado.abnf
  Solo se van a mostrar los datos basicos y aparecera un boton para Agendar citas


  -Pendiente agregar el boton para editar los datos que redirecciones a settings
  
  --}}


@extends('layouts.app')

@section('content')
<!--  -->

<div class="col-md-6 container text-center">
  <div class="row text-center border">
    <div class="card-body bg-light text-dark">
      <div class="pricing-header">

        <div class="price profile-photo-container h1">
          <i class="fas fa-user-circle profile-photo "></i>
        </div>
        <h5 class="card-title h2">{{ $user->name }}</h5>
      </div>
      <div class="pricing-list">



        <div class="d-flex justify-content-center m-2 align-items-center">
          <div class="m-2">
            <i class="far fa-envelope h2 bold"></i>

          </div>
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
          <div class="m-2">
            <i class="fab fa-whatsapp h2"></i>
          </div>
          <p class="m-2"> {{ $user->phone }}

          </p>
          <!-- <div>
            <i class="fas fa-pencil-alt btn btn-light"></i>
          </div> -->

        </div>
        <div class="border"></div>
      </div>

      <button type="button" class="btn btn-dark   js-scroll-trigger" data-toggle="modal" data-target="#create-date" data-whatever="@mdo">Create Date</button>

    </div>
  </div>
</div>

{{--Modal create date  --}}

<div class="modal fade" id="create-date" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-dark" id="ModalLabel">Create new Date</h5>
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
        <button type="button" class="btn btn-dark" data-dismiss="modal">Cancel</button>
        <button 
          id="confirm-date"
          type="button"
          class="btn btn-dark"
          onclick="sendForm()"
          > Confirm</button>
      </div>
    </div>
  </div>
</div>


</div>
{{-- modal --}}




@endsection