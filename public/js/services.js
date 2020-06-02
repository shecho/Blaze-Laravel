
// Este archivo permite gestionar los servicios desde las vista de panel de control y manipular el DOM


// Esta funcion maneja el modal de servcios captura los datos y hace una peticion por ajax al servidor para guardar los datos
const handleService = () => {
//   permite campturar los datos del formnulario de sercicios
    let serviceName= document.getElementById("service-name-id").value
    // console.log(serviceName);
    let servicePrice= document.getElementById('service-price-id').value
    // console.log(servicePrice);
    let serviceDescription= document.getElementById('product-description-id').value
    // console.log(serviceDescription);
    let token = document.getElementById("token-services").value
    valitadeService(serviceName,servicePrice,serviceDescription)
    let data = {
        "serviceName": serviceName,
        "serviceDescription": serviceDescription,
        "servicePrice": servicePrice,
        "_token": token
    };
    // console.log(data);
    let url = '/createNewService';
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

// Valida el modal de servicios y retorna las alertas
const valitadeService = (serviceName,servicePrice,serviceDescription) => {
    //  permite validar el formulario y enviar alertas

    let verificationResponse = document.getElementById("create-service-mesage-validate")
    if (!serviceName || !servicePrice ||!serviceDescription ) {
        // console.log("inside if modal validate")

        verificationResponse.innerHTML = `
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
           Por favor llena todos los campos"
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        `
    }
    else{
        verificationResponse.innerHTML = `
        <div class="alert alert-success alert-dismissible fade show" role="alert">
           Servicio Creado
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        `

    }

}
// maneja la respues del sercicio y imprime en consola
const handleResponse = (state) => {
    console.log(state);
    // Maneja es estado de la peticion 
    // si se dejo gfuardar en todo bien sino ya existe ese ser
}

// Muestra el reportee de serviios en la vista de panel de control
const showServices = () => {
    // Muestra el reporte de sercicios que esta oculto
    let showServicesContainer= document.getElementById('services-container-id')
    showServicesContainer.classList.toggle("d-none")
    let showServicesButton= document.getElementById('show-services-id')
    
    let hasAclass = showServicesContainer.classList.contains("d-none")
    if(hasAclass){
        showServicesButton.innerText =`Ver todos los Servicios`;
         
     }
     else{
        showServicesButton.innerText =`Ocultar todos los Servicios`;
     }

}