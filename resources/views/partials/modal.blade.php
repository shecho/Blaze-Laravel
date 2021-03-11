 <!-- Modal para crear una cita -->
          
 <div class="modal fade" id="create-date" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
              <h5 class="modal-title text-dark" id="ModalLabel">Agendar Cita</h5>
                  <button id="buttonClose" type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form id="form-modal-reseter">
                  @csrf
                    <input type="hidden" value="{{ csrf_token() }}" id="token"/>
                    <div class="form-group">
                      {{-- <label for="recipient-name" class="col-form-label text-dark" place>Nombre Completo</label> --}}
                      <input placeholder="Nombre Completo" type="text" class="form-control" id="recipient-name">
                    </div>
                    <div class="form-group">
                      {{-- <label  for="message-text" class="col-form-label text-dark">Telefono</label> --}}
                      <div class="form-group">
                      <input placeholder="Telefono" type="number"  class="form-control" id="message-text">
                    </div>
                    <div class="form-group">
                      {{-- <label for="message-text" class="col-form-label text-dark">Day</label> --}}
                      <input min="2020-04-17" max="2020-04-29" type="date"  class="form-control" id="date-day">
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
                          <option value="1">Cualquiera</option>
                        @foreach($barberos as $barber)
                          <option value="{{ $barber->barberName }}">{{ $barber->barberName }}</option>
                        @endforeach             
                        
                        </select>
                        {{-- <label for="message-text" class="col-form-label text-dark">Barber</label> --}}
                        {{-- <input placeholder="Barber" type="text"  class="form-control" id="message-text"> --}}
                      </div>
                      <div class="form-group">
                        <select class="form-control" name="time" id="services-date-id">
                          <option value="1">Asesoramiento</option>                          
                         @foreach($servicios as $servicio)
                          <option value="{{ $servicio->serviceName }}">{{ $servicio->serviceName }}</option>
                         @endforeach                               
                        </select>                     
                      </div>
                      <div class="form-group" id="modal-response">

                      </div>
                    </div>
                  </form>
                </div>
                <div class="modal-footer">

                
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                  <button id="confirm-date" type="button" class="btn btn-primary"> Confirmar</button>

                  <div class="">
                  <a target="blank" href="https://api.whatsapp.com/send?phone=5703105122321&text=Hola%20quisiera%20separar%20una%20cita%20para%20las%20" class="fa-stack fa-4x">
              
                    <i class="fab 	fa-whatsapp fa-stack-1xa text-success"></i>
                  </a>
                </div>
                  
                </div>
              </div>
            </div>
          </div>
          

        </div>
        <!-- cierre del modal -->