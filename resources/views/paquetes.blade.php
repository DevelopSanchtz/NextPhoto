<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Correo</title>
</head>

<body style="margin: 0; padding: 0;">
    <table align="center" border="0" cellpadding="0" cellspacing="0" width="600" style="border-collapse: collapse; margin-top: 20px; border: 1px solid #aca9a9;">
        <tr>
            <td align="center" style="padding: 10px 0 8px 0;">
                <img src="https://scontent.frex1-1.fna.fbcdn.net/v/t1.0-9/124553851_110308884225699_8001302986759593062_n.jpg?_nc_cat=109&ccb=2&_nc_sid=09cbfe&_nc_eui2=AeENKDy5vzT5xxSBv5Puxj95VsHqRjzHRflWwepGPMdF-fQVrW7ss4NI3NlzRhuvnojIdZV0fASBFNwobBnv8Kae&_nc_ohc=tP2e1bZRtCQAX-xlnJO&_nc_ht=scontent.frex1-1.fna&oh=f87de05ee9772aebd439c799a88d1acd&oe=5FFA7BD4" alt="Logo Email" width="550" height="350" style="display: block;">
            </td>
        </tr>
        <tr>
            <td bgcolor="#ffffff" style="padding: 40px 30px 40px 30px;">
                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                    <tr>
                        <td style="color: #000000; font-family: Arial, sans-serif; font-size: 18px;">
                            <?php echo $nombre; ?>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 20px 0 30px 0; color: #153643; font-family: Arial, sans-serif; font-size: 18px; line-height: 20px;">
                            <?php echo "Solicitó la cantidad de: " . "<strong>" . $cantidad . "</strong>";?>
                            <br/> <br/>
                            <?php echo "La ubicación de la sesión es: " . "<strong>" . $ubicacion . "</strong>" . "<br/>" . "Para la fecha de: " . "<strong>" . $fecha_hora . "</strong>";?>
                            
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <?php echo "Télefono del contacto: " . "<strong>" . $telefono . "</strong>";?>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td bgcolor="#000000" style="padding: 30px 30px 30px 30px;">
                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                    <tr>
                        <td width="75%" style="color: #ffffff; font-family: Arial, sans-serif; font-size: 14px;">
                            &reg; Next Photo 2020.<br> Todos los derechos reservados.
                        </td>
                        <td>

                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>