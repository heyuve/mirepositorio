require('./bootstrap');


// fetch(url,{
//     method: 'GET',
//     headers: {
//         'Content-Type': 'application/json'
//     },
//     body: form
// })


// Para el form
function muestraMensaje() {
    alert('Todo bien');
  }
document.getElementById("btn-send").onclick = muestraMensaje;


//   SVG DE EDITAR
  function Editar() {
    alert('Todo bien');
  }
  document.getElementById("icon-edit").onclick = Editar;


  //   SVG DE ELIMINAR
  function Eliminar() {
    alert('Todo bien');
  }

  document.getElementById("icon-delete").onclick = Eliminar;

