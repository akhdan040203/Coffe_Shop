<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffe Shop</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>/css/bootstrap.min.css" />

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;600;700&family=Yanone+Kaffeesatz:wght@400;500;600;700&display=swap');

        body{
           background-color:#002B27 ;
           font-family: 'Poppins', sans-serif;;
        }
        .btn_login{
            /* background-color: #F26A1D; */
            color: #002B27;
        }
    </style>
</head>
<body>
<?= $this->renderSection('page-content'); ?>
</body>
<script src="<?= base_url(); ?>/js/bootstrap.min.js"></script>
</html>
