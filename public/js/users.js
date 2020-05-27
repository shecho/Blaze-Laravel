// Este arvhico majena el segmaneto que muetra los datos de los usarios en una secion de reportes
const showUsers = () => {
    // mustra y desapare el preporte de clientes
    console.log("clickeShowUSers");
    let showUsersContainer= document.getElementById('users-container-id')
    showUsersContainer.classList.toggle("d-none")
    let showUsersButton= document.getElementById('show-users-id')
    
    let hasAclass = showUsersContainer.classList.contains("d-none")
    if(hasAclass){
        showUsersButton.innerText =`Ver todos los Clientes`;
         
     }
     else{
        showUsersButton.innerText =`Ocultar todos los Clientes`;
     }
}
