/* 
1 capturar datos del form
2 enviar los datos mediantes metodo POST al backend /date para pedir la cita
3. procesar las respuesta para saber si la cita se asigno 
4. mostrar el mensaje 
*/
const sendForm = () => {
    console.log("working");
    let fullName = document.getElementById("recipient-name").value
    let phone= document.getElementById("message-text").value
    let day = document.getElementById("date-day").value
    let time = document.getElementById("date-time").value
    let token = document.getElementById("token").value

    
    let data = {
        fullName: fullName,
        phone: phone,
        day: day,
        time: time,
        _token: token
    };
    
    fetch("http://localhost:8000/createNewDate" , {
        method: 'POST', // or 'PUT'
        body: JSON.stringify(data), // data can be `string` or {object}!
        headers:{'Content-Type': 'application/json'},
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')})
        .then(response => response.json())
        .then(data => {
            console.log(data);
            datajson = data});


            // comfirm message 
            // pendiente de validar la respusta del backgroundBlendMode: 
            const modalRes = () => {
                if(!fullName ||!phone || !day ||!time){
                    modalResponse.innerHTML=`
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Please fill all the data"
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>`
            
                }
                else{
                modalResponse.innerHTML=`
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                New date created
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div> `
                }
            }
modalRes()            
            
}


let modalResponse= document.getElementById('modal-response')

document.getElementById('confirm-date').addEventListener('click',sendForm)
// document.getElementById('confirm-date').addEventListener('click',modalRes)


