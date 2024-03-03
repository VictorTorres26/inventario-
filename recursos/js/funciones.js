//seleccionando el boton segun su ID
const toggler = document.querySelector('#theme-toggle');

//funcion para cambiar el tema 
toggler.addEventListener('click', () => {
    
//usando la funcion toggle para añadir o quitar la clase dark 
    document.body.classList.toggle('dark');
    
    //guardando la clase del tema
    if(document.body.classList.contains('dark')){
        //guardando la clase dark
        localStorage.setItem('dark', 'true');
        }else {
            //eliminando la clase dark
            localStorage.setItem('dark', 'false');
        }
});

//obteniendo la clase guardada en el localStorage.setItem
if(localStorage.getItem('dark') === 'true'){
    document.body.classList.add('dark');
} else{
    document.body.classList.remove('dark');
}

const menu = document.querySelector('.content nav .bx.bx-menu');
const sidebar = document.querySelector('.sidebar');

menu.addEventListener('click', () => {
    sidebar.classList.toggle('close');

    if(sidebar.classList.contains('close')){
        localStorage.setItem('close', 'true');
    } else {
        localStorage.setItem('close', 'false');
    }
});

document.addEventListener('DOMContentLoaded', function() {
  if(localStorage.getItem('close') === 'true'){
    sidebar.classList.add('close');
  } else {
    sidebar.classList.remove('close');
  }
});


const sideLinks = document.querySelectorAll('.sidebar .side-menu li a:not(.logout)');

// Función para manejar el clic en un enlace
const handleClick = (item) => {
    const li = item.parentElement;
    sideLinks.forEach(i => {
        i.parentElement.classList.remove('active');
    });
    li.classList.add('active');
    
    // Almacena el estado activo en localStorage
    localStorage.setItem('activeLink', item.getAttribute('href'));
};

// Agrega el evento de clic a cada enlace
sideLinks.forEach(item => {
    item.addEventListener('click', () => handleClick(item));
});

// Recupera el estado activo de localStorage al cargar la página
document.addEventListener('DOMContentLoaded', () => {
    const activeLink = localStorage.getItem('activeLink');
    if (activeLink) {
        sideLinks.forEach(item => {
            if (item.getAttribute('href') === activeLink) {
                handleClick(item);
            }
        });
    }
});