const add = document.getElementById('add');
const modal = document.getElementById('modal');

const cerrarModal =document.getElementById('cerrar')

add.addEventListener('click', () =>{  
    modal.style.display = 'block';
    
    modal.document.classList.add('modal-content');

    // document.body.classList.add('modal-overlay');

})

cerrarModal.addEventListener('click', () =>{
    modal.style.display = 'none';
})