

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.interface.club/limitless/layout_2/LTR/material/index1.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Jul 2017 13:21:57 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Athentification</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
    <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="assets/css/core.css" rel="stylesheet" type="text/css">
    <link href="assets/css/components.css" rel="stylesheet" type="text/css">
    <link href="assets/css/colors.css" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script type="text/javascript" src="assets/js/plugins/loaders/pace.min.js"></script>
    <script type="text/javascript" src="assets/js/core/libraries/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/core/libraries/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/plugins/loaders/blockui.min.js"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script type="text/javascript" src="assets/js/plugins/forms/styling/uniform.min.js"></script>

    <script type="text/javascript" src="assets/js/core/app.js"></script>
    <script type="text/javascript" src="assets/js/pages/login.js"></script>

    <script type="text/javascript" src="assets/js/plugins/ui/ripple.min.js"></script>
    <!-- /theme JS files -->

</head>

<body class="login-container login-cover">

<!-- Page container -->
<div class="page-container">

    <!-- Page content -->
    <div class="page-content">

        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Content area -->
            <div class="content pb-20">

                <!-- Tabbed form -->
                <div class="tabbable panel login-form width-400">
                    <ul class="nav nav-tabs nav-justified">
                        <li class="active"><a href="#basic-tab1" data-toggle="tab"><h6>connexion</h6></a></li>
                    </ul>

                    <div class="tab-content panel-body">
                        <div class="tab-pane fade in active" id="basic-tab1">
                            <form  method="POST">
                            	{{csrf_field()}}
                                <div class="text-center">
                                    <div class="icon-object border-slate-300 text-slate-300"><i class="icon-reading"></i></div>
                                    <h5 class="content-group">Connectez-vous à votre compte <small class="display-block">Vos informations</small></h5>
                                    <br>
                                    @if(isset($mess))
                                        <p style="color: #a21309">{!! $mess !!}</p>
                                    @endif
                                </div>

                                <div class="form-group has-feedback has-feedback-left">
                                    <input type="text" class="form-control" placeholder="Nom d'utilisateur" name="username" required="required">
                                    <div class="form-control-feedback">
                                        <i class="icon-user text-muted"></i>
                                    </div>
                                </div>

                                <div class="form-group has-feedback has-feedback-left">
                                    <input type="password" class="form-control" placeholder="Mot de passe" name="password" required="required">
                                    <div class="form-control-feedback">
                                        <i class="icon-lock2 text-muted"></i>
                                    </div>
                                </div>

                                <div class="form-group login-options">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" class="styled" checked="checked">
                                                Me rappeler
                                            </label>
                                        </div>

                                        <div class="col-sm-6 text-right">
                                            <a href="login_password_recover.html">Mot de passe oublié?</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn bg-pink-400 btn-block">Se connecter <i class="icon-arrow-right14 position-right"></i></button>
                                </div>
                            </form>

                            <div class="content-divider text-muted form-group"><span>ou se connecter avec</span></div>
                            <ul class="list-inline form-group list-inline-condensed text-center">
                                <li><a href="#" class="btn border-indigo text-indigo btn-flat btn-icon btn-rounded"><i class="icon-facebook"></i></a></li>
                                <li><a href="#" class="btn border-pink-300 text-pink-300 btn-flat btn-icon btn-rounded"><i class="icon-dribbble3"></i></a></li>
                                <li><a href="#" class="btn border-slate-600 text-slate-600 btn-flat btn-icon btn-rounded"><i class="icon-github"></i></a></li>
                                <li><a href="#" class="btn border-info text-info btn-flat btn-icon btn-rounded"><i class="icon-twitter"></i></a></li>
                            </ul>

                            <span class="help-block text-center no-margin">By continuing, you're confirming that you've read our <a href="#">Terms &amp; Conditions</a> and <a href="#">Cookie Policy</a></span>
                        </div>
                    </div>
                </div>
                <!-- /tabbed form -->

            </div>
            <!-- /content area -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->

</div>
<!-- /page container -->

</body>

<!-- Mirrored from demo.interface.club/limitless/layout_2/LTR/material/index1.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Jul 2017 13:21:57 GMT -->
</html>
