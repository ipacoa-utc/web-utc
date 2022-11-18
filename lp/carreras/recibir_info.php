<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './assets/PHPMailer/Exception.php';
require './assets/PHPMailer/PHPMailer.php';
require './assets/PHPMailer/SMTP.php';

$mail = new PHPMailer(true);
$correo = $_POST['email'];
$nombre = $_POST['nombre'];
$mensaje = $_POST['mensaje'];
$telefono = $_POST['telefono'];
$telefonoformateado = str_replace(" - ","", $telefono);

$cuerpo = '

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link type="text/css" href="assets/css/fontawesome.css" rel="stylesheet" />
    <link type="text/css" href="assets/css/fontawesome.rtl.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/ba302772e8.js" crossorigin="anonymous"></script>
    <style>
      .bg-azul {
        background-color: #0a4076;
        text-align: center;
      }
      .bg-azul img {
        width: 40%;
      }
      body {
        background-color: #f5f7fa;
        font-family: Arial, Helvetica, sans-serif;
      }
      h2 {
        color: #39a638;
        font-weight: bold;
        text-align: center;
        font-size: 2.4rem;

      }
      strong {
        color: #0a4076;
      }
      h3 {
        text-align: center;
        margin: 2vh 5vw;
      }
      p {
        margin: 5vh 14vw;
        line-height: 1.3;
        color: #191919;
        text-decoration:2px underline #0a4076;
        font-size:1.15rem;
      }
      .navfoot {
        line-height: 2;
        background-color: #191919;
        color: #fff;
        padding-top: 2vh;
        display: flex;
        flex-direction: row;
        justify-content:flex-end;
        align-items: center;
      }
      .navfoot img{
        width: 36%;
      }
      .navfoot div{
        width: 35%;
      }
      a {
        color: #fff;
        text-decoration: none;
      }
      a:hover {
        color: #39a638;
        transform: scale(1.05);
        transition: 0.3s ease;
        cursor: pointer;
        text-decoration: underline #39a638;
      }
      h4 {
        color: #0a4076;
        font-weight: bold;
        margin: 2vh 0;
      }
      main{
        padding:11.3vh 0;
      }
      .fa-youtube,
      .fa-instagram,
      .fa-facebook,
      .fa-whatsapp{
        font-size: 24px;
        padding: 1px 0.5px;
        color:  $blanco;
      }
      .fa-youtube:hover {
        color: #ff0000;
      }
      .fa-facebook:hover {
        color: #4267b2 !important;
      }
      
      .fa-instagram:hover {
        background: radial-gradient(
          circle at 30% 107%,
          #fdf497 0%,
          #fdf497 5%,
          #fd5949 45%,
          #d6249f 60%,
          #285aeb 90%
        );
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
      }
      .fa-whatsapp:hover {
        color: #25d366;
      }
    </style>
  </head>
  <body>
    <header>
      <div class="bg-azul">
        <img src="https://utc.ac.cr/web_i/lp/carreras/assets/imgs/UTC-Horizontal.png" alt="" />
      </div>
    </header>
    <main>
      <section>
        <h2>Saludos Cordiales <strong>'.$nombre.'</strong></h2>
        <h3>
          Muchas Gracias por contactarnos, pronto recibirás una respuesta
          departe del equipo de UTC a tu mensaje:
        </h3>
        <p>
          '.$mensaje.'
        </p>
        <p>'.$correo.' , '.$telefono.'</p>
      </section>
    </main>
    <footer>
        <section class="navfoot">
            <div class="">
                <img src="https://utc.ac.cr/web_i/lp/carreras/assets/imgs/UTC-Cuadrado.png" class="" alt="">
            </div>
            <div class="col-4 col-md-3">
                <h4>Contacto</h4>
                <ul>
                    <li> info@utc.ac.cr</li>
                    <li>2223 1124</li>
                            <a href="https://api.whatsapp.com/send?phone=50622231124" target="_blank" class=""><i
                            class="fa-brands fa-whatsapp fa-beat-fade"
                            style="--fa-beat-fade-opacity: 0.87; --fa-beat-fade-scale: 1.075; --fa-animation-duration: 2s;"></i></a>
                    <a href="https://www.facebook.com/CursosVirtualesInstitutoJimenez/" class="" target="_blank"><i
                            class="fa-brands fa-facebook fa-beat-fade"
                            style="--fa-beat-fade-opacity: 0.87; --fa-beat-fade-scale: 1.075;  --fa-animation-duration: 2s;"></i></a>
                    <a href="https://www.instagram.com/accounts/login/?next=/jimenezvirtual/" class=""
                        target="_blank"><i class="fa-brands fa-instagram fa-beat-fade"
                            style="--fa-beat-fade-opacity: 0.87; --fa-beat-fade-scale: 1.075;  --fa-animation-duration: 2s;"></i></a>
                    <a href="https://www.youtube.com/channel/UCz6DG7n5DUIC-YIz4HAx5LA" class="" target="_blank"><i
                            class="fa-brands fa-youtube fa-beat-fade"
                            style="--fa-beat-fade-opacity: 0.87; --fa-beat-fade-scale: 1.075;  --fa-animation-duration: 2s;"></i></a>
                </ul>
            </div>
        </section>
    </footer>
  </body>
</html>
';
echo $cuerpo;

try {
    //Config
    $mail->SMTPDebug = 4;                    
    $mail->isSMTP();                                          
    $mail->Host       = 'smtp-mail.outlook.com';            
    $mail->SMTPAuth   = true;                                  
    $mail->Username   = 'pruebasutc@outlook.com';                  
    $mail->Password   = 'Jqs11519';                              
    $mail->SMTPSecure = 'STARTTLS';            
    $mail->Port       =  587;                    

    //Receptores
    $mail->setFrom('pruebasutc@outlook.com', 'UTC');
    $mail->addAddress($correo, $nombre);     
    $mail->addBCC('jquesadas1801@gmail.com');

    //Contenido
    $mail->isHTML(true);          
    $mail->CharSet = 'UTF-8';                     
    $mail->Subject = 'Funciona';
    $mail->Body   = $cuerpo;
    $mail->AltBody = 'felicidades';

    $mail->send();
    echo 'Enviado';
} catch (Exception $e) {
    echo "Error: {$mail->ErrorInfo}";
}

?>