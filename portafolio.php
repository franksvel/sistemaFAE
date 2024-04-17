<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
    <title>Registro</title>
</head>
<body>

      <nav>
        <a href="principal.php">Inicio</a>
        <a href="#">Nosotros</a>
        <a href="portafolio.php">Portafolio</a>
        <a href="index.php">Cerrar Sesiòn</a>
      </nav>
<div class="nave">
    <img src="logo.ico" alt="">
</div>

<h2 class="row justify-content-center">Datos del docente y de la asignatura</h2>
<hr>
<p></p>
<p></p>
<div>
<div id="intro1" class="bg-image shadow-2-strong">
    <div>
      <div class="container">
        <table>
        <div class="col">
          <div class="col-xl-5 col-md-8">
            <form class="bg-white rounded shadow-5-strong p-5">
              <!-- Email input -->
              <div class="form-outline mb-4" data-mdb-input-init>
                <input type="email" id="form1Example4" class="form-control" />
                <label class="form-label" for="form1Example4">Nombre del docente</label>
              </div>

              <!-- Password input -->
              <div class="form-outline mb-4" data-mdb-input-init>
                <input type="password" id="form1Example3" class="form-control" />
                <label class="form-label" for="form1Example3">Asignatura</label>
              </div>

              <div class="form-outline mb-4" data-mdb-input-init>
               <select name="hora" id="$hora">
                <option value="#">--Selecciona la Hora--</option>
                <option value="#">4:00 a 5:00</option>
                <option value="#">5:00 a 6:00</option>
                <option value="#">6:00 a 7:00</option>
                <option value="#">7:00 a 8:00</option>
                <option value="#">8:00 a 9:00</option>
                <option value="#">9:00 a 10:00</option>
               </select>
              </div>
              <div class="form-outline mb-4" data-mdb-input-init>
                  <select name="#" id="$carrera">
                    <option value="#">--Seleciona la carrera--</option>
                    <option value="#">Administracion</option>
                    <option value="#">Derecho</option>
                    <option value="#">Ing. en Computacion</option>
                  </select>
              </div>
        

              <!-- Submit button -->
              <button type="submit" class="btn btn-primary btn-success" data-mdb-ripple-init>Guardar</button>
            </form>

      
</div>

</div>
<div class="grid-container">
  <div>
  <table>
    <td class="grid-item">Hora</td>
    <td class="grid-item">Lunes</td>
    <td class="grid-item">Martes</td>
    <td class="grid-item">MIercoles</td>
    <td class="grid-item">Jueves</td>
    <td class="grid-item">Viernes</td>
  </table>
 </div>
</div>












      <footer class="bg-light text-lg-start">
  <div class="py-4 text-center">

  </div>
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-facebook" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
</svg>
<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-instagram" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <path d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z" />
  <path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
  <path d="M16.5 7.5l0 .01" />
</svg>
  </div>
  <!-- Copyright -->
</footer>
</body>
</html>