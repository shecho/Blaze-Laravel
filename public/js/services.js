
// Este archivo permite gestionar los servicios desde las vistas y manipular el DOM
const handleService = () => {
//   permite campturar los datos del formnulario de sercicios
    let serviceName= document.getElementById("service-name-id").value
    console.log(serviceName);
    let servicePrice= document.getElementById('service-price-id').value
    console.log(servicePrice);
    let data = {
        "serviceName": serviceName,
        "userPhone": servicePrice,
         
    };
    console.log(data);
    valitadeService(serviceName,servicePrice)


}

const valitadeService = (serviceName,servicePrice) => {
    //  permite validar el formulario y enviar alertas
    let verificationResponse = document.getElementById("create-service-mesage-validate")
    if (!serviceName || !servicePrice ) {
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
const handleResponse = (state) => {
    console.log(state);
    // Maneja es estado de la peticion 
    // si se dejo gfuardar en todo bien sino ya existe ese ser
}

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