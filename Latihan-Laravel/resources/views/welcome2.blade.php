<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome html</title>
</head>

<body>
    <h1>Selamat Datang! </h1>
    <h3>Terima Kasih Telah Bergabung Bersama Garuda Cyber Institute</h3>
    <?php
    $firstname = $_GET['fn'];
    $lastname = $_GET['ln'];
    echo 'Nama Depan : ' . $_GET['fn'] . '<br/>';
    echo 'Nama Belakang : ' . $_GET['ln'] . '<br/>';
    ?>
</body>

</html>