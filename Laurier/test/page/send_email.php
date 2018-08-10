<?php
 $to = "laurierhealthyskin@growmint.com"; // this is your Email address
     // this is the sender's Email address
    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];
    $no_telp = $_POST["no_telp"];
    $emailuser = $_POST["emailuser"];
    $subject = "Laurier";
    $subject2 = "Laurier";
    $message = "Nama: ".$nama . " \n Alamat :".$alamat . "\n"."Email : ".$emailuser ."\n"."Nomor Telepon : ".$no_telp;
    $message2 = "Here is a copy of your message  " ;
    $from = $emailuser;
    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $nama . ", we will contact you shortly.";

?>

<script>
    window.location="../../index.php?message=success";

</script>
