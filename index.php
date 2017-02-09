<?php include '../extend/header.php'; ?>
<!-- Datos generales -->
<div class="row">
  <div class="col s12">
    <div class="card">
      <div class="card-content">
        <span class="card-title">Datos generales</span>
        <div class="row">
          <div class="col s6">
            <form  action="ins_propiedad.php" method="post" autocomplete="off" >


            <div class="input-field">
              <input type="number" name="precio"  id="precio" step='0.01' required  >
              <label for="precio">Precio</label>
            </div>
            <div class="input-field">
              <input type="number" name="calle"  id="calle" required  >
              <label for="calle">Calle y numero</label>
            </div>

          </div> <!--Termina Primer columna -->
          <div class="col s6">

            <div class="input-field">
              <input type="text" name="fracc"   id="fracc" onblur="may(this.value, this.id)" required  >
              <label for="fracc">Fraccionamiento</label>
            </div>
            <div class="input-field">
              <input type="text" name="num_exterior"  id="num_exterior" required  >
              <label for="num_exterior">Numero exterior</label>
            </div>

          </div><!-- TerminaSegunda columna -->
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Caracteristicas -->

<div class="row">
  <div class="col s12">
    <div class="card">
      <div class="card-content">
        <span class="card-title">Caracteristicas</span>

        <div class="row">

          <div class="col s6">

            <div class="input-field">
              <input type="number" name="m2t"   id="m2t"  >
              <label for="m2t">Metros cuadrados de terreno</label>
            </div>
            <div class="input-field">
              <input type="number" name="banos"   id="banos"  >
              <label for="banos">Baños</label>
            </div>
            <div class="input-field">
              <input type="number" name="plantas"   id="plantas"  >
              <label for="plantas">Plantas</label>
            </div>
            <div class="input-field">
              <textarea name="otros" rows="8" cols="80" id="otros" onblur="may(this.value, this.id)" class="materialize-textarea"></textarea>
              <label for="otros">Otras caracteristicas</label>
            </div>

          </div><!--Termina Primer columna -->

          <div class="col s6">

            <div class="input-field">
              <input type="number" name="m2c"   id="m2c"  >
              <label for="m2c">Metros cuadrados de construccion</label>
            </div>
            <div class="input-field">
              <input type="number" name="recamaras"   id="recamaras"  >
              <label for="recamaras">Recamaras</label>
            </div>
            <div class="input-field">
              <input type="number" name="cocheras"   id="cocheras"  >
              <label for="cocheras">Cocheras</label>
            </div>
            <div class="input-field">
              <textarea name="observaciones" rows="8" cols="80" id="observaciones" onblur="may(this.value, this.id)" class="materialize-textarea"></textarea>
              <label for="observaciones">Observaciones</label>
            </div>

          </div><!-- TerminaSegunda columna -->

        </div>
      </div>
    </div>
  </div>
</div>

<!-- Datos de venta -->

<div class="row">
  <div class="col s12">
    <div class="card">
      <div class="card-content">
        <span class="card-title">Datos de venta</span>

        <div class="row">
          <div class="col s6">

            <div class="input-field">
              <input type="text" name="pago"  id="pago" onblur="may(this.value, this.id)" required pattern="[A-Z\s ]+"  >
              <label for="pago">Forma de pago</label>
            </div>

            <select class="" name="asesor">
              <!-- DATOS CON PHP -->
            </select>

            <select name="tipo_in" required >
              <option value="" disabled selected  >ELIGE EL TIPO DE INMUEBLE</option>
              <option value="CASA">CASA</option>
              <option value="TERRENO">TERRENO</option>
              <option value="LOCAL">LOCAL</option>
              <option value="DEPARTAMENTO">DEPARTAMENTO</option>
            </select>

          </div><!-- Termina Primera columna -->

          <div class="col s6">

            <div class="input-field">
              <input type="date" class="datepicker" name="fecha_ini" id="fecha_ini" required ><!-- Se inicializa-->
              <label for="fecha_ini">Fecha de inicio de promocion</label>
            </div>

            <div class="input-field">
              <textarea name="comentario" rows="8" cols="80" id="comentario" onblur="may(this.value, this.id)" class="materialize-textarea"></textarea>
              <label for="comentario">Comentario para los clientes</label>
            </div>

            <select name="operacion" required >
              <option value="" disabled selected  >ELIGE LA OPERACION</option>
              <option value="VENTA">VENTA</option>
              <option value="RENTA">RENTA</option>
              <option value="TRASPASO">TRASPASO</option>
              <option value="OCUPADO">OCUPADO</option>
            </select>


          </div><!-- Termina Segunda columna -->
        </div>

      </div>
    </div>
  </div>
</div>

<div class="row center">
  <div class="col s12">
    <div class="card">
      <div class="card-content">
        <button type="submit" class="btn">Guardar</button>
        </form>
      </div>
    </div>
  </div>
</div>

<?php include '../extend/scripts.php'; ?>

</body>
</html>