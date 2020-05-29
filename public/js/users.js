// Este arvhico majena el segmaneto que muetra los datos de los usarios en una secion de reportes del panel control

// Muestra el reporte de usuarios
const showUsers = () => {
    // mustra y oculta  el preporte de clientes
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
