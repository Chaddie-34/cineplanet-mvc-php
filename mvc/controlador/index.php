<?php
require_once("modelo/index.php");

class modeloController {
    private $model;

    public function __construct() {
        $this->model = new Modelo();
    }

    // R = READ (Pantalla principal: Lista todas las compras/boletos registrados)
    static function index() {
        // Simulamos un registro inicial para el caso de uso solicitado
        $boletos = [
            [
                "id" => 1,
                "dni" => "72145678",
                "pelicula" => "Cómo entrenar tu dragón (3D)",
                "sede" => "Tacna - Sala 01",
                "horario" => "08:40 PM",
                "asientos" => "H5, H6",
                "total" => 30.00
            ]
        ];
        
        // Incluimos las vistas ordenadamente como el ejemplo del profe
        require_once("vista/layout/header.php");
        require_once("vista/index.php");
        require_once("vista/layout/footer.php");
    }

    // C = CREATE (Formulario para registrar una nueva compra de boleto - Mockup 2 y 3)
    static function nuevo() {
        require_once("vista/layout/header.php");
        require_once("vista/nuevo.php");
        require_once("vista/layout/footer.php");
    }

    // Acción POST para guardar los datos en el sistema
    static function guardar() {
        // Aquí capturaríamos los datos del formulario $_POST
        // Por ahora redirige al inicio al completar el registro
        header("Location: " . urlsite);
    }

    // U = UPDATE (Formulario para editar asientos o datos de la compra)
    static function editar() {
        $id = $_GET['id'];
        // Simulamos la recuperación del boleto a editar
        $boleto = [
            "id" => $id,
            "dni" => "72145678",
            "pelicula" => "Cómo entrenar tu dragón (3D)",
            "sede" => "Tacna - Sala 01",
            "horario" => "08:40 PM",
            "asientos" => "H5, H6"
        ];

        require_once("vista/layout/header.php");
        require_once("vista/editar.php");
        require_once("vista/layout/footer.php");
    }

    static function actualizar() {
        // Procesa la edición y redirecciona
        header("Location: " . urlsite);
    }

    static function eliminar() {
        $id = $_GET['id'];
        // Aquí se ejecutaría el código para borrar de la BD
        header("Location: " . urlsite);
    }
}

// Lógica de enrutamiento basada en la variable "m" enviada por la URL
if (isset($_GET['m'])) {
    $metodo = $_GET['m'];
    if (method_exists('modeloController', $metodo)) {
        modeloController::$metodo();
    }
} else {
    modeloController::index();
}
?>