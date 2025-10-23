<?php

require_once (__DIR__ . "/../BD/DataBase.php");

class AppoimentUtility{
    
    public static function getAppoiments(){
        try{
            $instance = DataBase::getInstance();

            $query = "SELECT citas.id as \"id\", nombre_usuario as \"usuario_id\",nombre as \"tipo_cita_id\", fecha, hora FROM `citas` , usuarios, tipos_cita where citas.usuario_id = usuarios.id and citas.tipo_cita_id =tipos_cita.id";
            $stmt = $instance->query($query);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }catch(Exception $e){
            throw new Exception("Error de conexión con la base de datos."); 
        }
        
    }
}

// Función que devuelve un array asociativo con todas las citas
