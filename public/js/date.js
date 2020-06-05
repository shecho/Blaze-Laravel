/* 
Este archivo hace los siguiente: 
    Campura los eventos del formulario de citas
    Enviar el formulario de la cita
    Validar la informacion del formulario de las citas 
    Envia las respuestas en caso de errores
    Hace la petition al backenbn 
    Procesa la respuesta del backend
*/
// console.log("script linked2");


// Envia el formulario de citas
function sendForm() {
    console.log('Inside function send form');
    let fullName = document.getElementById("recipient-name").value
    let phone = document.getElementById("message-text").value
    let day = document.getElementById("date-day").value
    let time = document.getElementById("date-time").value
    let barber = document.getElementById("barber").value
    let service = document.getElementById("services-date-id").value
    let token = document.getElementById("token").value

    let data = {
        "userName": fullName,
        "userPhone": phone,
        "day": day,
        "time": time,
        "barber": barber,
        "service": service,
        "_token": token
    };
    modalValidate(fullName, phone, day, time,barber)

    let url = 'createNewDate/';
    fetch(url, {
            method: 'POST', // or 'PUT'
            body: JSON.stringify(data), // data can be `string` or {object}!
            headers: {
                'Content-Type': 'application/json',
            }
        }).then(response => {
          
            response.json()})
        .then(data => data == 1 ? modalResponse(1) : modalResponse(0))
    //1 cuando ya esxiste una cita, 0 cuando se creo correctamente
    // console.log(data);
}

// Valida el modal de citas
function modalValidate(fullName, phone, day, time,barber) {
    // console.log("function modal validate");
    var modal = document.getElementById('modal-response')
    if (!fullName || !phone || !day || !time || !barber) {
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
            <button   button type="button" class="close" data-dismiss="alert" aria-label="Close">
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
// funcion en deshuso
function showReporte1() {
    // window.open('/app/Exports/reporte1.php')
}



// Muestra las citas en la vista de panel de control
function showDates() {
    let showDatesTitle = document.getElementById('dates-title')
    showDatesTitle.classList.toggle("d-none")
    let showHeadres = document.getElementById("table-headers-dates")
    showHeadres.classList.toggle("d-none")
    let showTable = document.getElementById("table-body-id")
    showTable.classList.toggle("d-none")

    let showButton = document.getElementById("show-dates-id")
    let hasAclass = showTable.classList.contains("d-none")

    if (hasAclass) {
        showButton.innerText = `Ver todas las Citas`;

    } else {
        showButton.innerText = `Ocultar citas`;
    }


}




// muestra los filtros de la vista e panel de control
function showFilter() {

    let filterContainer = document.getElementById("filter-container-id")
    filterContainer.classList.toggle("d-none")
    let showFilterButton = document.getElementById("show-filters-id")

    let hasAclass = filterContainer.classList.contains("d-none")
    if (hasAclass) {
        showFilterButton.innerText = `Ver Filtros de Citas-`;

    } else {
        showFilterButton.innerText = `Ocultar Filtros`;
    }

}

// Ontiene la fecha vigente del sistema
function getCurrentDate() {

    let datePickerId = document.getElementById("date-day")
    datePickerId.min = new Date().toISOString().split("T")[0];
    console.log(datePickerId.min);

    let f = new Date();
    maxDay = (f.getFullYear() + "-" + "0" + (f.getMonth() + 1) + "-" + (f.getDate() + 7));
    console.log(maxDay);
    datePickerId.max = maxDay

}
getCurrentDate()



// Crea un evento de que permite enviar el formulario de citas
var modal = document.getElementById('modal-response')
document.getElementById('confirm-date').addEventListener('click', sendForm)






//Permite a un cliente consultar sus citas desde su perfil 
function CheckMyDates() {

    let tableMyDates = document.getElementById('table-row-my-dates')
    let CheackMyDatesBtn = document.getElementById('CheackMyDates')
    CheackMyDatesBtn.classList.toggle("d-none")


    let prueba = tableMyDates
    // console.log(prueba);
    if (prueba) {

        console.log("si hay datos    ");
        // console.log(tableMyDates.lastElementChild.innerHTML);
    } else {
        console.log("no");
        CheackMyDatesBtn.innerHTML = `
         <div class="alert alert-danger alert-dismissible fade show" role="alert"> No tienes citas asignadas"
            <button   button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"></span>
            </button>
         </div>`
    }
}
// Captura el boton de las consultar citas
let CheackMyDatesBtn = document.getElementById('CheackMyDates')





// confirmacion de eliminacion de citas 

const confirmDeleteDateButon = () => {

    console.log("borrando");

    // let botonCita= document.getElementById('delete-icon-id')
    // console.log(botonCita.name)
    // botonCita.name
    // let data 
    // console.log(data)

// $('#exampleModal').on('show.bs.modal', function (event) {
//     var button = $(event.relatedTarget) // Button that triggered the modal
//     var idcita = button.data('cita') // Extract info from data-* attributes
//     var modal = $(this)
//     modal.find('.modal-body input').val(idcita)
//    })
   
    // console.log(dataCit.data('cita'))

    // var subjId = button.data('whatever');

    // let getTable= document.getElementById('table-body-id')
    // console.log(getTable);
    // let getRow= document.getElementById('table-row-id').children[1]
    // console.log(getRow);
    // let getDateid = document.getElementById('116')

    // console.log(getDateid);
    // console.log(getRow);

    // let dateId= document.querySelectorAll('.idDate').forEach(id => {
    //     console.log(id);
    // })
    // console.log(dateId);

    // window.location.href = `/home`;

}
const confirmDeleteDate = () => {
    console.log(dateId);
}
