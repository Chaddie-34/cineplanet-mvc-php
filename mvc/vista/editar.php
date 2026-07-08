<div class="contenedor">
    <h2 class="titulo-seccion">Modificar Compra de Boleto #<?php echo $boleto['id']; ?></h2>
    
    <form action="<?php echo urlsite; ?>?m=actualizar" method="POST" style="margin-top: 20px;">
        <input type="hidden" name="id" value="<?php echo $boleto['id']; ?>">

        <div class="form-grupo">
            <label for="dni">DNI del Socio:</label>
            <input type="text" id="dni" name="dni" class="form-control" value="<?php echo $boleto['dni']; ?>" required maxlength="8">
        </div>

        <div class="form-grupo">
            <label for="pelicula">Película:</label>
            <input type="text" id="pelicula" class="form-control" value="<?php echo $boleto['pelicula']; ?>" readonly style="background: #e2e8f0;">
        </div>

        <div class="form-grupo">
            <label for="sede">Sede / Sala:</label>
            <input type="text" id="sede" class="form-control" value="<?php echo $boleto['sede']; ?>" readonly style="background: #e2e8f0;">
        </div>

        <div class="form-grupo">
            <label for="horario">Horario:</label>
            <select id="horario" name="horario" class="form-control" required>
                <option value="08:40 PM" <?php echo ($boleto['horario'] == '08:40 PM') ? 'selected' : ''; ?>>08:40 PM</option>
                <option value="11:15 PM" <?php echo ($boleto['horario'] == '11:15 PM') ? 'selected' : ''; ?>>11:15 PM</option>
            </select>
        </div>

        <div style="margin-top: 30px;">
            <button type="submit" class="btn-rojo">Actualizar Cambios</button>
            <a href="<?php echo urlsite; ?>" style="margin-left: 15px; color: #666; text-decoration: none;">Regresar</a>
        </div>
    </form>
</div>