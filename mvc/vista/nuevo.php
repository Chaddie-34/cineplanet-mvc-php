<div class="contenedor">
    <h2 class="titulo-seccion">Registrar Nueva Compra de Boleto</h2>
    
    <form action="<?php echo urlsite; ?>?m=guardar" method="POST" style="margin-top: 20px;">
        <div class="form-grupo">
            <label for="dni">DNI del Socio:</label>
            <input type="text" id="dni" name="dni" class="form-control" placeholder="Ej. 72145678" required maxlength="8">
        </div>

        <div class="form-grupo">
            <label for="pelicula">Selecciona Película:</label>
            <select id="pelicula" name="pelicula" class="form-control" required>
                <option value="Cómo entrenar tu dragón (3D)">Cómo entrenar tu dragón (3D)</option>
                <option value="Cineplanet Horror Fest">Cineplanet Horror Fest</option>
            </select>
        </div>

        <div class="form-grupo">
            <label for="sede">Sede Complejo:</label>
            <select id="sede" name="sede" class="form-control" required>
                <option value="Tacna - Sala 01">Cineplanet Tacna</option>
            </select>
        </div>

        <div class="form-grupo">
            <label for="horario">Horario Disponible:</label>
            <select id="horario" name="horario" class="form-control" required>
                <option value="06:00 PM">06:00 PM</option>
                <option value="08:40 PM">08:40 PM</option>
                <option value="11:15 PM">11:15 PM</option>
            </select>
        </div>

        <!-- Sección visual simulada de selección de asientos basada en tus mockups -->
        <div class="form-grupo" style="margin-top: 25px;">
            <label style="margin-bottom: 10px;">Selecciona tus Asientos (Fila H):</label>
            <div style="display: flex; gap: 10px; margin-top: 10px;">
                <label style="background: #e2e8f0; padding: 10px; border-radius: 6px; cursor: pointer; display: flex; align-items: center; gap: 5px;">
                    <input type="checkbox" name="asientos[]" value="H5" checked> H5
                </label>
                <label style="background: #e2e8f0; padding: 10px; border-radius: 6px; cursor: pointer; display: flex; align-items: center; gap: 5px;">
                    <input type="checkbox" name="asientos[]" value="H6" checked> H6
                </label>
                <label style="background: #e2e8f0; padding: 10px; border-radius: 6px; cursor: pointer; display: flex; align-items: center; gap: 5px;">
                    <input type="checkbox" name="asientos[]" value="H7"> H7
                </label>
                <label style="background: #e2e8f0; padding: 10px; border-radius: 6px; cursor: pointer; display: flex; align-items: center; gap: 5px;">
                    <input type="checkbox" name="asientos[]" value="H8"> H8
                </label>
            </div>
        </div>

        <div style="margin-top: 30px;">
            <button type="submit" class="btn-rojo">Confirmar y Guardar Boleto</button>
            <a href="<?php echo urlsite; ?>" style="margin-left: 15px; color: #666; text-decoration: none;">Cancelar</a>
        </div>
    </form>
</div>