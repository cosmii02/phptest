<?php
//kas väljad on täidetud
if (isset($_POST['nimi']) && isset($_POST['email']) && isset($_POST['sonum'])) {
    //kas väljad on tühjad
    if (!empty($nimi) && !empty($email) && !empty($sonum)) {
        if (strlen($nimi)>25 || strlen($nimi)>25 || strlen($sonum)>500 ) {
            echo'Tekstid on liiga pikad või email on valesti!';
        } else {
            //andmed vormist
            $nimi = trim(addslashes($_POST['nimi']));
            $email = trim(addslashes($_POST['email']));
            $sonum = trim(addslashes($_POST['sonum']));
            //emaili andmed
            $to = 'cosmii02@cosmii02.com';
            $subject = 'Tagasiside kodulehelt';
            $message = $sonum; $from = 'From: '.$nimi.'<'.$email.'>';
            //kas emaili saatmine õnnestus
            if(mail($to, $subject, $message, $from)){
                echo "Email saadetud!<br>Täname tagasiside eest!";
                echo "<meta http-equiv=\"refresh\" content=\"2;URL='10_email.php'\">";
                exit();
            } else {
                echo "Teie emaili ei saadetud ära!";
            }
        }
    } else {
        $error = 'Palun täida kõik väljad!';
    }
}
?>