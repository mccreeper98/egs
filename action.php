<?php
// $fecha = date_create();
// $target_dir = "uploads/";
// $target_file = $target_dir . date_timestamp_get($fecha) . basename($_FILES["archivo"]["name"]);
// $uploadOk = 1;
// $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


        if(!empty($_POST["name"]) && !empty($_POST["paterno"]) && !empty($_POST["corporativo"]) && !empty($_POST["personal"]) && !empty($_POST["puesto"]) && !empty($_POST["sitio"]) && !empty($_POST["link"]) && !empty($_POST["link1"]) && !empty($_POST["identificacion"])){

            $para = $_POST["personal"];

            $titulo    = 'Registro EGS';

            $cabeceras = 'MIME-Version: 1.0'."\r\n"."Content-type:text/html;charset=UTF-8"."\r\n"."From: No Reply<noreply@bananageek.mx>"."\r\n".'X-Mailer: PHP/' . phpversion();
            $mensaje ='<!DOCTYPE html>
                        <html lang="en">
                        <head>
                            <meta charset="UTF-8">
                            <meta http-equiv="X-UA-Compatible" content="IE=edge">
                            <meta name="viewport" content="width=device-width, initial-scale=1.0">
                            <title>Registro</title>
                            <link
                            href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&display=swap"
                            rel="stylesheet"
                            />
                        </head>
                        <body style="background-color: #000;">

                            <div style="background-image: url(https://egs.bananageek.mx/img/bgn.png); text-align: center; width: 50%; margin: 0 auto;
                            background-size: cover; background-repeat: no-repeat;">
                                <p style="font-family: Rajdhani;
                                font-size: 30px;
                                font-weight: 600;
                                font-stretch: normal;
                                font-style: normal;
                                line-height: normal;
                                letter-spacing: normal;
                                text-align: center;
                                color: #fff;
                                padding-top: 25rem;">
                                    Tu reg??stro fue exitoso
                                </p>
                                <p style="font-family: Rajdhani;
                                font-size: 13px;
                                font-weight: 500;
                                font-stretch: normal;
                                font-style: normal;
                                line-height: 1.54;
                                letter-spacing: normal;
                                text-align: justify;
                                color: #fff;
                                padding-left: 4rem;
                                padding-right: 4rem;">
                                    ??Bienvenido! Agradecemos tu inter??s en cubrir la edici??n 2022 de Entertainment Gaming <br> Show. Por medio de este correo electr??nico te informamos que tu aplicaci??n fue <br> APROBADA. El medio de comunicaci??n al que perteneces y tus nombres registrados <br> (m??ximo 3) estar??n en la lista de accesos autorizados.
                                    <br><br>
                                    Te sugerimos que est??s al pendiente de tu correo electr??nico donde recibir??s <br> informaci??n adicional del evento y elementos gr??ficos para apoyar tu cobertura.
                                    <br><br>
                                    ??Nos vemos pronto! <br> Equipo EGS
                                </p>

                                <br>
                                <br><br>
                                <button style="background-color: #48bddf; border: none;
                                border-radius: 2px;
                                display: inline-block;
                                height: 36px;
                                line-height: 36px;
                                padding: 0 2rem;
                                text-transform: uppercase;
                                vertical-align: middle;
                                -webkit-tap-highlight-color: transparent;
                                color: #fff;
                                font-weight: bold;">COMPRAR MI BOLETO</button>

                                <br>
                                <br><br><br>
                            </div>

                            <center>
                                <p style="font-family: Rajdhani;
                                font-size: 18px;
                                font-weight: bold;
                                font-stretch: normal;
                                font-style: normal;
                                line-height: normal;
                                letter-spacing: normal;
                                text-align: center;
                                color: #fff;
                                margin-bottom: 0;
                                margin-top: -25px;">
                                    Cont??ctanos
                                </p>
                                <p style="font-family: Rajdhani;
                                font-size: 25px;
                                font-weight: bold;
                                font-stretch: normal;
                                font-style: normal;
                                line-height: normal;
                                letter-spacing: normal;
                                text-align: center;
                                color: #fff;
                                margin-top: 0;">
                                    hola@egs.com
                                </p>
                            </center>

                            <div style="display: flex; flex-direction: row; justify-content: center;">
                                <img src="https://egs.bananageek.mx/img/logo.png" alt="EGS" style="width: 105px; height: 32px;">
                                <p style="font-family: Rajdhani;
                                font-size: 15px;
                                font-weight: 600;
                                font-stretch: normal;
                                font-style: normal;
                                line-height: normal;
                                letter-spacing: 0.54px;
                                color: #fff;
                                margin-left: 2rem;
                            margin-top: 6px;">
                                    Electronic Game Show ??2022 ?? Aviso de Privacidad ?? T??rminos y Condiciones ?? Powered by Banana Geek
                                </p>
                            </div>
                            
                        </body>
                        </html>';
            // mail($para, $titulo, $mensaje);
            if(mail($para, $titulo, $mensaje)){
                echo 1;
            }else{
                echo 2;
            }

        }else{
            echo 3;
        }
   

?>