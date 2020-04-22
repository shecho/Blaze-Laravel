

const editName = () => {
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
    
    let saveNewName= document.getElementById("save-new-name")
    saveNewName.style.visibility= "hidden"
    console.log("saving")

   let inputValue = document.getElementById("edit-name").value
   console.log(inputValue);

   if(inputValue == "" || inputValue == " "){
       console.log("error")
   }
   else{
    // enviar datos al backend

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
     let saveNewPhone= document.getElementById("save-new-phone")
     saveNewPhone.style.visibility= "hidden"
     console.log("saving")
 
    let inputValue = document.getElementById("edit-phone").value
    console.log(inputValue);

    if(inputValue == "" || inputValue == " "){
        console.log("error")
    }
    else{
     // enviar datos al backend

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
// let nameInput = document.getElementById('edit-name')
// nameInput.style.display = "none"

// let phoneInput = document.getElementById('edit-phone')
// phoneInput.style.display = "none"
