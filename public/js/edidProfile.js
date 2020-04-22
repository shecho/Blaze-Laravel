

const editName = () => {
   
    let userName = document.getElementById('user-name-id')
    userName.style.display = "none"

    // let nameInput = document.getElementById('edit-name')
    // nameInput.style.display = "inline"
    let nameInputContent = document.getElementById('input-name-content')
    nameInputContent.innerHTML = `<input class="h6" type="text" name="newName" id="edit-name" >
    `

}
const editPhone = () => {
    
    let userPhone = document.getElementById('user-phone-id')
    userPhone.style.display = "none"

    // let phoneInput = document.getElementById('edit-phone')
    //     phoneInput.style.display = "inline "
    let phoneInputContent = document.getElementById('input-phone-content')
    phoneInputContent.innerHTML = `
     <input class="w-75" type="number" name="newPhone" id="edit-phone">`

 }


// let nameInput = document.getElementById('edit-name')
// nameInput.style.display = "none"

// let phoneInput = document.getElementById('edit-phone')
// phoneInput.style.display = "none"
