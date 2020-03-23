/* 
1 capturar datos del form
2 enviar los datos mediantes metodo POST al backend /date para pedir la cita
3. procesar las respuesta para saber si la cita se asigno 
4. mostrar el mensaje 
*/
const sendForm = () => 
{
    let fullName = document.getElementById("recipient-name").value
    let phone= document.getElementById("message-text").value
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
    modalValidate(fullName,phone,day,time)

    var url = 'https://blaze.app/createNewDate/';
    fetch(url, {
    method: 'POST', // or 'PUT'
    body: JSON.stringify(data), // data can be `string` or {object}!
    headers:{
        'Content-Type': 'application/json',
    }
    }).then(response => response.json())
    .then(data => data == 1 ? modalResponse(1) : modalResponse(0))    
    //1 cuando ya esxiste una cita, 0 cuando se creo correctamente       
}

const modalValidate = (fullName,phone,day,time) => {
    if(!fullName ||!phone || !day ||!time){
        modal.innerHTML=`
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            Please fill all the data"
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    </div>`

    }
}

const modalResponse = (state) => {
    if(state == 1)
    {
        modal.innerHTML=`
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            el horario no está disponible, elija otro"
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    </div>`
    }
    else
    {
        modal.innerHTML=`
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        su cita ha sido agendada
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>`
    }
}
let modal= document.getElementById('modal-response')
document.getElementById('confirm-date').addEventListener('click',sendForm)
// document.getElementById('confirm-date').addEventListener('click',modalRes)


