/* 
Este archivo hace los siguiente: 
    0. Campura los eventos del formulario
    1  Enviar el formulario de la cita
    2  Validar la informacion de l formulario de las citas 
    3. Envia las respuestas en case de errores
    4. Hace la petition al backenbn 
    5. Procesa la respuesta del backend
*/
// console.log("script linked2");


// Envia el formulario
function sendForm() {
    console.log('Inside function send form');
    let fullName = document.getElementById("recipient-name").value
    let phone = document.getElementById("message-text").value
    let day = document.getElementById("date-day").value
    let time = document.getElementById("date-time").value
    let barber = document.getElementById("barber").value
    let token = document.getElementById("token").value

    let data = {
        "userName": fullName,
        "userPhone": phone,
        "day": day,
        "time": time,
        "barber": barber,
        "_token": token
    };
    modalValidate(fullName, phone, day, time)

    let url = 'createNewDate/';
    fetch(url, {
            method: 'POST', // or 'PUT'
            body: JSON.stringify(data), // data can be `string` or {object}!
            headers: {
                'Content-Type': 'application/json',
            }
        }).then(response => response.json())
        .then(data => data == 1 ? modalResponse(1) : modalResponse(0))
    //1 cuando ya esxiste una cita, 0 cuando se creo correctamente
    console.log(data);
}

// Valida el modal
function modalValidate(fullName, phone, day, time) {
    // console.log("function modal validate");
    var modal = document.getElementById('modal-response')
    if (!fullName || !phone || !day || !time) {
        // console.log("inside if modal validate")

        modal.innerHTML = `
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
           Por favor llena todos los campos"
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        `

    }
}

//modal response processes procesa la respuesta
function modalResponse(state) {
    // console.log("inside modal response");
    var modal = document.getElementById('modal-response')
    if (state === 1) {
        console.log("inside If  true modal response");
        modal.innerHTML = `
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            Este cita ha sido agendada a alguien mas"
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    </div>`
    } else {
        console.log("inside If Negative modal response");
        modal.innerHTML = `
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        Tu cita a sido agendada
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>`
    }
}

//showd dates muestra las citas
function showDates(){
    let showDatesTitle = document.getElementById('dates-title')
    showDatesTitle.classList.toggle("d-none")
    let showHeadres = document.getElementById("table-headers-dates")
    showHeadres.classList.toggle("d-none")
    let showTable = document.getElementById("table-body-id")
    showTable.classList.toggle("d-none")

    let showButton = document.getElementById("show-dates-id")
    let hasAclass = showTable.classList.contains("d-none")
  
    if(hasAclass){
        showButton.innerText =`Ver todas las Citas`;
        
    }
    else{
        showButton.innerText =`Ocultar citas`;
    }
   

}

//whoe filters muestra los filtros
function showFilter(){
 
    let filterContainer= document.getElementById("filter-container-id")
    filterContainer.classList.toggle("d-none")
    let showFilterButton = document.getElementById("show-filters-id")

    let hasAclass = filterContainer.classList.contains("d-none")
    if(hasAclass){
        showFilterButton.innerText =`Ver Filtros de Citas-`;
         
     }
     else{
        showFilterButton.innerText =`Ocultar Filtros`;
     }
    
}

//get the currint time Ontiene la fecha de este nomento
function getCurrentDate (){
   
    let datePickerId = document.getElementById("date-day")
    datePickerId.min = new Date().toISOString().split("T")[0];
    console.log(datePickerId.min);

   
    let f = new Date();
    maxDay=(f.getFullYear() + "-" + "0"+ (f.getMonth() +1) + "-" + (f.getDate()+7));
    console.log(maxDay);
    datePickerId.max =maxDay
   
}
getCurrentDate()


var modal = document.getElementById('modal-response')
document.getElementById('confirm-date').addEventListener('click', sendForm)



