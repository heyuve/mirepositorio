<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="styleSheet" href="css/form.css" type="text/css" media="screen">
    <title>Formulario</title>
</head>
<body>
<div class="contenedor">
      <form action="">
      <!-- {{ csrf_field() }} -->
            <h3>Blog</h3>
            <div class="input-title">	
                  <input type="text" name="title" id="title" placeholder="Titulo"> <br>
            </div>
            <!-- <div class="input2">
                  <input type="text" name="apellido" id="apellido" placeholder="Apellidos"> <br>
            </div>
            <div class="input3">
                  <input type="email" name="correo" id="correo" placeholder="Email"> <br>
            </div>
            <div class="input4">
                  <input type=text name="tel" id="tel" placeholder="Teléfono"> <br>
            </div> -->
            <div class="textarea-content">
                  <textarea name="content" id="content" placeholder="Introduce tu mensaje"></textarea>
            </div>
            <div class="btn">
                  <button id="btn-send" type="button">Enviar</button>
            </div>
      </form>
      <table>
                  <!-- <caption>Tabla</caption> -->
                  <tr>
                       <th>ID</th>
                        <th>Título</th>
                        <th>Mensaje</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                  </tr>
                  <tr>
                        <td>5</td>
                        <td>Esto es un título</td>
                        <td>Esto es un mensaje</td>
                        <td id="icon-edit"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#2cccd3" width="25px" height="25px"><path d="M0 0h24v24H0z" fill="none"/><path d="M7 14c-1.66 0-3 1.34-3 3 0 1.31-1.16 2-2 2 .92 1.22 2.49 2 4 2 2.21 0 4-1.79 4-4 0-1.66-1.34-3-3-3zm13.71-9.37l-1.34-1.34c-.39-.39-1.02-.39-1.41 0L9 12.25 11.75 15l8.96-8.96c.39-.39.39-1.02 0-1.41z"/></svg></td>
                        <td id="icon-delete"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#2cccd3" width="25px" height="25px"><path d="M0 0h24v24H0z" fill="none"/><path d="M0 0h24v24H0V0z" fill="none"/><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zm2.46-7.12l1.41-1.41L12 12.59l2.12-2.12 1.41 1.41L13.41 14l2.12 2.12-1.41 1.41L12 15.41l-2.12 2.12-1.41-1.41L10.59 14l-2.13-2.12zM15.5 4l-1-1h-5l-1 1H5v2h14V4z"/></svg></td>
                  </tr>
                  <tr>
                        <td>5</td>
                        <td>Celda 1</td>
                        <td>Celda 2</td>
                        <td id="icon-edit"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#2cccd3" width="25px" height="25px"><path d="M0 0h24v24H0z" fill="none"/><path d="M7 14c-1.66 0-3 1.34-3 3 0 1.31-1.16 2-2 2 .92 1.22 2.49 2 4 2 2.21 0 4-1.79 4-4 0-1.66-1.34-3-3-3zm13.71-9.37l-1.34-1.34c-.39-.39-1.02-.39-1.41 0L9 12.25 11.75 15l8.96-8.96c.39-.39.39-1.02 0-1.41z"/></svg></td>
                        <td id="icon-delete"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#2cccd3" width="25px" height="25px"><path d="M0 0h24v24H0z" fill="none"/><path d="M0 0h24v24H0V0z" fill="none"/><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zm2.46-7.12l1.41-1.41L12 12.59l2.12-2.12 1.41 1.41L13.41 14l2.12 2.12-1.41 1.41L12 15.41l-2.12 2.12-1.41-1.41L10.59 14l-2.13-2.12zM15.5 4l-1-1h-5l-1 1H5v2h14V4z"/></svg></td>
                  </tr>
                  <tr>
                        <td>5</td>
                        <td>Celda 1</td>
                        <td>Celda 2</td>
                        <td id="icon-edit"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#2cccd3" width="25px" height="25px"><path d="M0 0h24v24H0z" fill="none"/><path d="M7 14c-1.66 0-3 1.34-3 3 0 1.31-1.16 2-2 2 .92 1.22 2.49 2 4 2 2.21 0 4-1.79 4-4 0-1.66-1.34-3-3-3zm13.71-9.37l-1.34-1.34c-.39-.39-1.02-.39-1.41 0L9 12.25 11.75 15l8.96-8.96c.39-.39.39-1.02 0-1.41z"/></svg></td>
                        <td id="icon-delete"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#2cccd3" width="25px" height="25px"><path d="M0 0h24v24H0z" fill="none"/><path d="M0 0h24v24H0V0z" fill="none"/><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zm2.46-7.12l1.41-1.41L12 12.59l2.12-2.12 1.41 1.41L13.41 14l2.12 2.12-1.41 1.41L12 15.41l-2.12 2.12-1.41-1.41L10.59 14l-2.13-2.12zM15.5 4l-1-1h-5l-1 1H5v2h14V4z"/></svg></td>
                  </tr>
            </table>
</div>

</body>
<script type="text/javascript" src="{{ mix('/js/app.js')}}"></script>
</html>