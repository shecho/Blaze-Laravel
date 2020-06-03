// Este archivo permite gestionar el Dom relacionado con  Empleados(barberos) y sus validaciones en la vista

// Esta funcion permite ocultar y mostrar el reporte de Empleados
const showBarber = () => {

       let showBarberContainer= document.getElementById('barber-container-id')
       showBarberContainer.classList.toggle("d-none")
       let showBarberButton= document.getElementById('show-barber-id')
       
       let hasAclass = showBarberContainer.classList.contains("d-none")
       if(hasAclass){
           showBarberButton.innerText =`Ver todos los Empleados`;
            
        }
        else{
           showBarberButton.innerText =`Ocultar todos los Empleados`;
        }
}


// esta fucion maneja el modal de cracion de empleados (Barbero) ty hace un  peticion ajax al asevidro para crear un barbero

const handleBarber = () => {
    // console.log("hola desde la funcion");
    let barberName= document.getElementById("barber-name-id").value
    // console.log(barberName);
    let barberDocument= document.getElementById('barber-document-id').value
    // console.log(barberDocument);
    let barberPhone= document.getElementById('barber-phone-id').value
    // console.log(barberPhone);
    let barberEmail= document.getElementById('service-email-id').value

    let token= document.getElementById('token-barber').value
    // console.log(barberEmail);

    // let test = barberEmail
    // let isValidEmail = emailIsValid(test)
    // console.log(isValidEmail);

    valitadeBarber(barberName,barberDocument,barberPhone,barberEmail)  

    let data = {
        "barberName": barberName,
        "barberDocument": barberDocument,
        "barberPhone": barberPhone,
        "barberEmail": barberEmail,
        "_token": token
    };
   
    let url = '/createNewBarber';
    fetch(url, {
        method: 'POST', // or 'PUT'
        body: JSON.stringify(data), // data can be `string` or {object}!
        headers: {
            'Content-Type': 'application/json',
        }
    }).then(response => response.json())
      .then(data =>{   
            console.log(data) })
    //  1 cuando ya esxiste una cita, 0 cuando se creo correctamente
    //  console.log(data);

}
// Expresion regular para validar el email
function emailIsValid (email) {
    return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)
  }

// Esta funcion valida los datos del modal de Empleado y muestra los menjaes en pantalla
const valitadeBarber = (barberName,barberDocument,barberPhone,barberEmail) => {
    //  permite validar el formulario y enviar alertas

    let test = barberEmail
    let isValidEmail = emailIsValid(test)
    let mensajeEmail =``
    // console.log(isValidEmail);
    let verificationResponse = document.getElementById("create-barber-mesage-validate")
    if(isValidEmail === true){
        console.log("mail valido");
        mensajeEmail = `
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Mail Valido
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        `
    }
    else{
        console.log("mail no valido");
        mensajeEmail = `
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            Mail invalido, debes seguir este formato: abc@abc.com
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>`
    }
   
    if (!barberName || !barberDocument || !barberPhone || !barberEmail || isValidEmail !== true ) {
        // console.log("inside if modal validate")

        verificationResponse.innerHTML = `
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
           Por favor llena todos los campos correctamente"
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        ${mensajeEmail}
        `

    } else {
        verificationResponse.innerHTML = `
        <div class="alert alert-success alert-dismissible fade show" role="alert">
           Empleado Creado
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        `

    }

}