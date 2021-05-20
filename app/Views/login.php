<?php
helper('form');
echo isset($error)?$error:'';
echo form_open('MainController/check');
$data1 = ['name'          => 'username',
        'id'            => 'text1',
        'maxlength'     => '100',
        'size'          => '30',
       ];
$data2 = ['name'          => 'password',
        'id'            => 'text2',
        'maxlength'     => '100',
        'size'          => '30',
       ];
$data3 = array(
    'name' => 'button',
    'id' => 'button',
    'value' => 'true',
    'type' => 'reset',
    'content' => 'Reset'
);
?>
<html>
<head>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Admin portal - Euro GSM - Magazin telefoane</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="<?php echo base_url('../assets/img/favicon.ico');?>" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?php echo base_url('css/styles.css');?>" rel="stylesheet" />
    </head>    
</head>
<body id="page-top">
    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="<?php echo base_url('/public/MainController/index');?>">Euro GSM</a>
                <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Meniu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?php echo base_url('/public/MainController/produse');?>">Produse</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?php echo base_url('/public/MainController/despre');?>">Despre</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?php echo base_url('/public/MainController/despre');?>">Despre</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?php echo base_url('/public/MainController/login');?>">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
     <section class="page-section portfolio" id="produse" style="margin-top:20px;">
            <div class="container">
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Logare administrator</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <center><p><?php echo isset($error)?$error:'';?></p></center>
            </div><!-- comment --><center>
        <table class="table">
        <tr>
            <td><?php echo form_label('Username ', 'text1');?></td>
            <td><?php echo form_input($data1);?></td>
        </tr>
        <tr>
            <td><?php echo form_label('Password ', 'text2');?></td>
            <td><?php echo form_password($data2);?></td>
        </tr>
        <tr>
            <td><?php echo form_submit('submit', 'Login');?></td>
            <td><?php echo form_button($data3);?></td>
        </tr>
        </table>
        <div class="row">
            <div class="col-md-6">
           <?php echo form_fieldset_close();?>
            </div>
            <div class="col-md-6">
            <?php echo form_close();?>
            </div>
     </center>
     </section>
     
        <div class="copyright py-4 text-center text-white">
            <div class="container">
                <small>
                    Copyright &copy; Andrei Popovici - Proiectul 2 - 
                    <script>
                        document.write(new Date().getFullYear());
                    </script>
                </small>
            </div>
        </div>
</body><!-- comment -->
</html>