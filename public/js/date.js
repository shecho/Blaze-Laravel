/* 
1 capturar datos del form
2 enviar los datos mediantes metodo POST al backend /date para pedir la cita
3. procesar las respuesta para saber si la cita se asigno 
4. mostrar el mensaje 
*/
// console.log("script linked2");



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

function modalValidate(fullName, phone, day, time) {
    console.log("function modal validate");
    var modal = document.getElementById('modal-response')
    if (!fullName || !phone || !day || !time) {
        console.log("inside if modal validate")

        modal.innerHTML = `
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            Please fill all the data"
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        `

    }
}

function modalResponse(state) {
    // console.log("inside modal response");
    var modal = document.getElementById('modal-response')
    if (state === 1) {
        console.log("inside If  true modal response");
        modal.innerHTML = `
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            This our has been already taken, choose another"
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    </div>`
    } else {
        console.log("inside If Negative modal response");
        modal.innerHTML = `
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        your date has been 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>`
    }
}

function showDates(){
  
    let showTable = document.getElementById("table-body-id")
    showTable.classList.toggle("d-none")
    let showButton = document.getElementById("show-dates-id")
    let hasAclass = showTable.classList.contains("d-none")
    // console.log(hasAclass);
    if(hasAclass){
       showButton.innerText =`Consultar todas las citas`;
        
    }
    else{
        showButton.innerText =`Acultar todas las citas`;
    }
   

}


// funcion para obtener la hora
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



// borrar citas de la base de datos 
// editar el perfil del usuario
// crear un reporte de usuarios



