

const handleService = () => {
   
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
    // si se dejo gfuardar en todo bien sino ya existe ese ser
}