const { default: axios } = require('axios');

require('./bootstrap');

document
.getElementById('btn-send')
.addEventListener("click", function() {

  const form = document.getElementById('form-post');
  const data = new FormData(form);
  const url = form.action;

  const sendPostRequest = async() => {
    try {
      const resp = await axios.post(url, data);
      document.getElementById.innerHTML = resp.data.table;
      // console.log(resp.data.table)
    } catch (err) {

    }
  }

  sendPostRequest();
});

// fetch(url,{
//     method: 'GET',
//     headers: {
//         'Content-Type': 'application/json'
//     },
//     body: form
// })

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

