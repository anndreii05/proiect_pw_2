<!DOCTYPE html>
<html>
<head>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Admin portal - Euro GSM - Magazin telefoane</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="<?php echo base_url('assets/img/favicon.ico');?>" />
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
                <a class="navbar-brand js-scroll-trigger" href="<?php echo base_url('/welcome');?>">Euro GSM</a>
                <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Meniu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?php echo site_url('/logout'); ?>">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
 <section class="page-section portfolio" id="produse" style="margin-top:20px;">
            <div class="container">
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Tabel produse</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
            </div><!-- comment -->
                <center>
    
    <table class="table">
        <thead class="thead-dark">
            <td><strong>Marcă</strong></td><!-- comment -->
            <td><strong>Model</strong></td><!-- comment -->
            <td><strong>Preț</strong></td>
            <td><strong>Imagine</strong></td><!-- comment -->
            <td colspan="3"><strong>Operații elementare</strong></td>
        </thead>
        <?php foreach($telefoane as $var) { ?><!-- comment -->
            <tbody>
                <td><?php echo $var['marca'];?></td>
                <td><?php echo $var['model'];?></td><!-- comment -->
                <td><?php echo $var['pret'];?></td>
                <td><img src="<?php echo base_url($var['imagine']);?>" width="100" height="100"></td>
                <td>
                    <?php echo '<a href="MainController/view/'.$var['id'].'">Vedere</a>';?>
                </td><!-- comment -->
                <td>
                    <?php echo '<a href="MainController/edit/'.$var['id'].'">Editare</a>';?>
                </td>
                <td>
                    <?php echo '<a href="MainController/delete/'.$var['id'].'">Ștergere</a>';?>
                </td>
            </tbody>
            <?php } ?>
    </table>
                        <br><br><!-- comment -->
    <center>
        <a href='MainController/upload/'><button class="btn btn-primary" type="submit">Inserare date noi</button></a><!-- comment -->
    </center>
    </center>
 </section>
    <br><br>
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
            <!-- Bootstrap core JS-->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
        <!-- Contact form JS-->
        <script src="<?php echo base_url('assets/mail/jqBootstrapValidation.js');?>"></script>
        <script src="<?php echo base_url('assets/mail/contact_me.js');?>"></script>
        <!-- Core theme JS-->
        <script src="<?php echo base_url('js/scripts.js');?>"></script>
</body>
</html>

