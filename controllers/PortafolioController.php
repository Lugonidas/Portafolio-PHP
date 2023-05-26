<?php

namespace Controllers;

use MVC\Router;
use Model\Habilidad;
use Model\Usuario;
use PHPMailer\PHPMailer\PHPMailer;

class PortafolioController
{

    //Index
    public static function index(Router $router)
    {

        $router->render("portafolio/index", [
            "titulo" => ""
        ]);
    }

    public static function sobreMi(Router $router)
    {
        $router->render("portafolio/sobre-mi", [
            "titulo" => "Sobre mí"
        ]);
    }

    public static function portafolio(Router $router)
    {
        $router->render("portafolio/portafolio", [
            "titulo" => "Portafolio"
        ]);
    }

    public static function servicios(Router $router)
    {
        $router->render("portafolio/servicios", [
            "titulo" => "Servicios"
        ]);
    }

    public static function contacto(Router $router)
    {
        $mensaje = null;

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $respuestas = $_POST["contacto"];

            //Crear una instancia con PHPMailer
            $phpMailer = new PHPMailer();

            //Configurar SMTP (Protocolo para envío de email)
            $phpMailer->isSMTP();
            $phpMailer->Host = 'smtp.mailtrap.io';
            $phpMailer->SMTPAuth = true;
            $phpMailer->UserName = 'e2856e428d8a33';
            $phpMailer->Password = '9dcd75ed809421';
            $phpMailer->SMTPSecure = 'tls'; //Transport Layer security
            $phpMailer->Port = 2525;

            //Configurar el contenido del email
            $phpMailer->setFrom("sebastianlugo@gmail.com");
            $phpMailer->addAddress("sebastianlugo@gmail.com", "SebastianLugo.com");
            $phpMailer->Subject = "Tienes un nuevo mensaje";

            //Habilitar HTML
            $phpMailer->isHTML(true);
            $phpMailer->CharSet = "UTF-8";

            //Definir el contenido
            $contenido = "<html>";
            $contenido .= "<p>Tienes un nuevo mensaje</p>";
            $contenido .= "<p>Nombre: " . $respuestas["nombre"] . "</p>";
            $contenido .= "<p>Email: " . $respuestas["email"] . "</p>";
            $contenido .= "<p>No Contacto: " . $respuestas["telefono"] . "</p>";
            $contenido .= "<p>Mensaje: " . $respuestas["mensaje"] . "</p>";
            $contenido .= "</html>";

            $phpMailer->Body = $contenido;

            //Enviar el email
            if ($phpMailer->send()) {
                echo $mensaje = "Mensaje enviado correctamente.";
            } else {
                echo $mensaje = "Mensaje no enviado";
            }
        }

        $router->render("portafolio/contacto", [
            "titulo" => "Contacto",
            "mensaje" => $mensaje
        ]);
    }
}
