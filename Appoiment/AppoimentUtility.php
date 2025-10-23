<?php


class AppoimentUtility{
    include_once ("../BD/Database.php");
    public static function getAppoiments(){
    $instance = Database::getInstance();

    $query = "SELECT citas.id as \"id\", nombre_usuario as \"usuario_id\",nombre as \"tipo_cita_id\", fecha, hora FROM `citas` , usuarios, tipos_cita where citas.usuario_id = usuarios.id and citas.tipo_cita_id =tipos_cita.id";
    $stmt = $instance->query($query);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
    //return (Database::getInstance()->query("Select * from citas"))->fetchAll(PDO::FETCH_ASSOC);

}
}

// Función que devuelve un array asociativo con todas las citas
