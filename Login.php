<?php include_once("php/config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Login | FT</title>
    <link rel="stylesheet" type="text/css" href="<?php echo host; ?>css/fonts.css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="<?php echo host; ?>css/styles.css">


</head>

<body>

<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" data-controls-modal="loginModal" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-login" role="document">
        <div class="modal-content">
            <div class="card card-signup card-plain">
                <div class="modal-header">
                    <div class="card-header card-header-primary text-center">

                        <h4 class="card-title"><img src="<?php echo host; ?>img/fundacion_telefonica.png" alt=""></h4>

                    </div>
                </div>
                <form class="form" method="post" action="<?php echo host; ?>php/checklogin.php">
                <div class="modal-body">
                        <div class="card-body">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="material-icons">fingerprint</i>
                                        </span>
                                    </div>
                                    <input type="text" name="name" class="form-control" placeholder="Usuario..." required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="material-icons">lock_outline</i>
                                        </span>
                                    </div>
                                    <input type="password" name="pass" placeholder="Contraseña..." class="form-control" required/>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="submit" class="btn btn-primary btn-link btn-wd btn-lg">Iniciar</button>
                </div>
            </div>
        </div>
    </div>
</div>
    <!--   Core JS Files   -->
    <script src="<?php echo host; ?>js/jquery.min.js"></script>
    <script src="<?php echo host; ?>js/scripts.min.js"></script>
    <script src="<?php echo host; ?>js/js.js"></script>
</body>
</html>
<!-- by-ian 2k18 -->
