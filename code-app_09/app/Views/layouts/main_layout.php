<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= APP_NAME ?></title>
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@300;700&display=swap" rel="stylesheet">
    <!-- bootstrap -->
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/bootstrap.min.css') ?>">
    <!-- Datatables  -->
    <link rel="stylesheet" href="<?= base_url('assets/datatables/datatables.min.css') ?>">
    <!-- JQuery -->
    <script src="<?= base_url('assets/datatables/jquery.min.js') ?>"></script>
    <!-- fontawesome -->
    <link rel="stylesheet" href="<?= base_url('assets/fontawesome/css/all.min.css') ?>">
    <!-- custom css -->
    <link rel="stylesheet" href="<?= base_url('assets/css/app.css') ?>">
</head>
<body>
    
    <?= $this->renderSection('content') ?>
    
    
    
    
    <!-- custom Js -->
    <script src="<?= base_url('assets/js/app.js') ?>"></script>
    <!-- bootstrap Js -->
    <script src="<?= base_url('assets/bootstrap/bootstrap.bundle.min.js') ?>"></script>
    <!-- Datatables  -->
    <scripts src="<?= base_url('assets/datatables/datatables.min.js') ?>"></script> 
</body>
</html>

<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    24/07/2023
-->





















