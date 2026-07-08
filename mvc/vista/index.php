<div class="contenedor">
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
        <h2 class="titulo-seccion" style="margin: 0; border: none;">Lista de Boletos Comprados (Socio Virtual)</h2>
        <!-- Botón dinámico que apunta a m=nuevo -->
        <a href="<?php echo urlsite; ?>?m=nuevo" class="btn-rojo" style="padding: 8px 20px; font-size: 14px;">+ Nueva Compra</a>
    </div>

    <table style="width: 100%; border-collapse: collapse; margin-top: 10px; text-align: left;">
        <thead>
            <tr style="background-color: var(--azul-cineplanet); color: white;">
                <th style="padding: 12px;">ID</th>
                <th style="padding: 12px;">DNI Socio</th>
                <th style="padding: 12px;">Película</th>
                <th style="padding: 12px;">Sede / Sala</th>
                <th style="padding: 12px;">Horario</th>
                <th style="padding: 12px;">Asientos</th>
                <th style="padding: 12px; text-align: center;">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php if(!empty($boletos)): ?>
                <?php foreach($boletos as $b): ?>
                    <tr style="border-bottom: 1px solid var(--gris-borde);">
                        <td style="padding: 12px; font-weight: bold;"><?php echo $b['id']; ?></td>
                        <td style="padding: 12px;"><?php echo $b['dni']; ?></td>
                        <td style="padding: 12px; color: var(--azul-cineplanet); font-weight: bold;"><?php echo $b['pelicula']; ?></td>
                        <td style="padding: 12px;"><?php echo $b['sede']; ?></td>
                        <td style="padding: 12px;"><span style="background: #e2e8f0; padding: 4px 8px; border-radius: 4px; font-size: 13px;"><?php echo $b['horario']; ?></span></td>
                        <td style="padding: 12px; font-family: monospace; font-weight: bold; color: var(--rojo-cineplanet);"><?php echo $b['asientos']; ?></td>
                        <td style="padding: 12px; text-align: center;">
                            <!-- Enlaces que envían el ID y la acción por URL al controlador -->
                            <a href="<?php echo urlsite; ?>?m=editar&id=<?php echo $b['id']; ?>" style="color: #3182ce; text-decoration: none; margin-right: 15px; font-weight: bold;">Editar</a>
                            <a href="<?php echo urlsite; ?>?m=eliminar&id=<?php echo $b['id']; ?>" onclick="return confirm('¿Seguro que deseas cancelar esta compra?');" style="color: var(--rojo-cineplanet); text-decoration: none; font-weight: bold;">Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="7" style="padding: 20px; text-align: center; color: #888;">No hay boletos virtuales registrados.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>