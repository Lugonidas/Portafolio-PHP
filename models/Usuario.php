<?php

namespace Model;

class Usuario extends ActiveRecord
{
    protected static $tabla = 'usuarios';
    protected static $columnasDB = ['id', 'nombre', 'apellido', 'telefono', 'direccion', 'email', 'password'];

    public $id;
    public $nombre;
    public $apellido;
    public $telefono;
    public $direccion;
    public $email;
    public $password;

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? "";
        $this->apellido = $args['apellido'] ?? "";
        $this->telefono = $args['telefono'] ?? "";
        $this->direccion = $args['direccion'] ?? "";
        $this->email = $args['email'] ?? "";
        $this->password = $args['password'] ?? "";
    }

    //Validar la creación de usuarios
    public function validarNuevoUsuario()
    {
        if (!$this->nombre) {
            self::$alertas['error'][] = "El nombre es obligatorio";
        }
        if (!$this->apellido) {
            self::$alertas['error'][] = "El apellido es obligatorio";
        }
        if (!$this->telefono) {
            self::$alertas['error'][] = "El teléfono es obligatorio";
        }
        if (strlen($this->telefono) !== 10) {
            self::$alertas['error'][] = "El número de celular no es válido";
        }
        if (!$this->direccion) {
            self::$alertas['error'][] = "La dirección es obligatoria";
        }
        if (!$this->email) {
            self::$alertas['error'][] = "El email es obligatorio";
        }
        if (!$this->password) {
            self::$alertas['error'][] = "El password es obligatorio";
        }
        return self::$alertas;
    }

    //Validar la actualización de usuarios
    public function actualizarUsuario()
    {
        if (!$this->nombre) {
            self::$alertas['error'][] = "El nombre es obligatorio";
        }
        if (!$this->apellido) {
            self::$alertas['error'][] = "El apellido es obligatorio";
        }
        if (!$this->telefono) {
            self::$alertas['error'][] = "El teléfono es obligatorio";
        }
        if (strlen($this->telefono) !== 10) {
            self::$alertas['error'][] = "El número de celular no es válido";
        }
        if (!$this->direccion) {
            self::$alertas['error'][] = "La dirección es obligatoria";
        }
        if (!$this->email) {
            self::$alertas['error'][] = "El email es obligatorio";
        }
        return self::$alertas;
    }

    //Revisa si el usuario ya existe
    public function existeUsuario()
    {
        $query = "SELECT * FROM " . self::$tabla . " WHERE email = '" . $this->email . "' LIMIT 1";

        $resultado = self::$db->query($query);

        if ($resultado->num_rows) {
            self::$alertas['error'][] = "El usuario ya está registrado";
        }
        return $resultado;
    }

    //Hashear el password
    public function hashPassword()
    {
        $this->password = password_hash($this->password, PASSWORD_BCRYPT);
    }

    //Validar
    public function validarEmail()
    {
        if (!$this->email) {
            self::$alertas['error'][] = "El email es obligatorio";
        }

        return self::$alertas;
    }

    //Validar el Inicio de Sesión
    public function validarLogin()
    {
        if (!$this->email) {
            self::$alertas['error'][] = 'El email es obligatorio';
        }
        if (!$this->password) {
            self::$alertas['error'][] = 'El password es obligatorio';
        }
        return self::$alertas;
    }

    //Validar Password
    public function validarPassword()
    {
        if (!$this->password) {
            self::$alertas['error'][] = "El password es obligatorio";
        }
        if (strlen($this->password) < 6) {
            self::$alertas['error'][] = "El password debe contener al menos 6 carácteres";
        }
        return self::$alertas;
    }

    //Comprobar password
    public function comprobarPassword($password)
    {
        $resultado = password_verify($password, $this->password);

        if (!$resultado) {
            self::$alertas['error'][] = "Constraseña incorrecta";
        } else {
            return true;
        }
    }
}
