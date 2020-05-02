/*  
    Este archivo Permite editar los datos del cliente

    1. Editar el nombre
    2. Guarda el nuevo nmombre 
    3. Captura los eventos
    4. Edita el telefono
    5. Guarda el nuevo telefono
*/ 

const editName = () => {
    // edita en nombre
   console.log("aditar");
    let userName = document.getElementById('user-name-id')

    userName.style.display = "none"

    // let nameInput = document.getElementById('edit-name')
    // nameInput.style.display = "inline"
    let nameInputContent = document.getElementById('input-name-content')
    nameInputContent.innerHTML = `<input class="h6" type="text" name="newName" id="edit-name" >
    `
    let nameIconContainer = document.getElementById("name-icon-container")
     nameIconContainer.innerHTML=`
        <i id="save-new-name" class="far fa-save" onclick="SaveNewName()"></i>
     `   


}

const SaveNewName = () => {
     // guarda el  nombre
    let saveNewName= document.getElementById("save-new-name")
    saveNewName.style.visibility= "hidden"
    console.log("saving")


   let inputValue = document.getElementById("edit-name").value
   let userID = document.getElementById('user-id').value

   console.log(inputValue);
    // aqui debe hacer el  envio al backend

   if(inputValue == "" || inputValue == " "){
         console.log("error")
        
   }
   else{
    //enviar datos al backend
        // let data = {
        //     "userName": inputValue,
        //     "_token": token
        // };
        // console.log(data);

        window.location = "/updateProfileName/"+ userID +"/"+inputValue+"/";

        // fetch(ulr, {
        //     method: 'POST', // or 'PUT'
        //     body: JSON.stringify(data), // data can be `string` or {object}!
        //     headers: {
        //         'Content-Type': 'application/json',
        //     }
        // }).then(response => response.json())
        // .then(data => data)
        // //1 cuando ya esxiste una cita, 0 cuando se creo correctamente
        // console.log(data);

   }

   let editName= document.getElementById('edit-name')
   editName.style.display = "none"

   let userPhone = document.getElementById('user-name-id')
   userPhone.style.display = "inline"
  
   let nameIconContainer = document.getElementById("name-icon-container")
   nameIconContainer.innerHTML=`
       <i id="phone-pencil" class="fas fa-pencil-alt " onclick="editName()"></i>
    `


}



const editPhone = () => {
      // Edita el telefono
    let userPhone = document.getElementById('user-phone-id')
    userPhone.style.display = "none"

    // let phoneInput = document.getElementById('edit-phone')
    //     phoneInput.style.display = "inline "
    let phoneInputContent = document.getElementById('input-phone-content')
    phoneInputContent.innerHTML = `
     <input  class="w-75" type="number" name="newPhone" id="edit-phone">`

     
    //  let pencilIcon  = document.querySelector('#phone-pencil')
    //  pencilIcon.style.visibility ='hidden'
     
     let phoneIconContainer = document.getElementById("phone-icon-container")
     phoneIconContainer.innerHTML=`
        <i id="save-new-phone" class="far fa-save" onclick="SaveNewPhone()"></i>
     `

 }


 

 const SaveNewPhone = () => {
       // guarda el  telefono
     let saveNewPhone= document.getElementById("save-new-phone")
     saveNewPhone.style.visibility= "hidden"
     console.log("saving")
 
    let inputValue = document.getElementById("edit-phone").value
    console.log(inputValue);
    let userID = document.getElementById('user-id').value


    if(inputValue == "" || inputValue == " "){
        console.log("error")
    }
    else{
        window.location = "/updateProfilePhone/"+ userID +"/"+inputValue+"/";
     // enviar datos al backend
     //enviad datos al backgroundBlendMode: 

    }

    // 
    let editPhone= document.getElementById('edit-phone')
    editPhone.style.display = "none"

    let userPhone = document.getElementById('user-phone-id')
    userPhone.style.display = "inline"
   
    let phoneIconContainer = document.getElementById("phone-icon-container")
     phoneIconContainer.innerHTML=`
        <i id="phone-pencil" class="fas fa-pencil-alt " onclick="editPhone()"></i>
     `


 }
// ----------------------------------------------------------------------
//scrip on testing
// prueba unitaria de claja negra
// const sendNewUserData = () => {
//     console.log("sending data to backend")
//     let newName = document.getElementById('edit-name').value
//     console.log(newName);

//     let data = {
//         "userName": fullName,
//         // "_token": token
//     };
//     console.log(data);

//     let ulr = "profile/";

//     fetch(url, {
//         method: 'POST', // or 'PUT'
//         body: JSON.stringify(data), // data can be `string` or {object}!
//         headers: {
//             'Content-Type': 'application/json',
//         }
//     }).then(response => response.json())
//     .then(data => data)
//     //1 cuando ya esxiste una cita, 0 cuando se creo correctamente
//     console.log(data);
// }
// ---------------------------------------------------------------------------

// let nameInput = document.getElementById('edit-name')
// nameInput.style.display = "none"

// let phoneInput = document.getElementById('edit-phone')
// phoneInput.style.display = "none"
