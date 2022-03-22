<!DOCTYPE html><!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Mon Mar 07 2022 10:12:06 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="62162822abb250795034d5e2" data-wf-site="62162822abb250eba434d5c5">

<head>
  <meta charset="utf-8">
  <title>contact</title>
  <meta content="contact" property="og:title">
  <meta content="contact" property="twitter:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="css/normalize.css" rel="stylesheet" type="text/css">
  <link href="css/webflow.css" rel="stylesheet" type="text/css">
  <link href="css/alexs-sublime-site-e3cb9f.webflow.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">
    WebFont.load({
      google: {
        families: ["Montserrat:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic", "Varela Round:400", "Roboto:100italic,300,300italic,regular,italic,500,500italic,700,700italic,900,900italic:vietnamese,cyrillic-ext,greek-ext,greek,latin-ext,latin,cyrillic"]
      }
    });
  </script>
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">
    ! function(o, c) {
      var n = c.documentElement,
        t = " w-mod-";
      n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch")
    }(window, document);
  </script>
  <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">
  <link href="images/webclip.png" rel="apple-touch-icon">
</head>

<body class="body-4">
  <div data-collapse="tiny" data-animation="default" data-duration="400" data-easing="ease" data-easing2="ease" role="banner" class="navbar w-nav"><img src="images/Logo--noir.svg" loading="lazy" width="83" alt="" class="logo">
    <h1 class="heading-8">Bienvenue sur mon portfolio</h1>
    <div class="menu-button w-nav-button">
      <div class="w-icon-nav-menu"></div>
    </div>
    <nav role="navigation" class="nav-menu w-nav-menu">
      <a href="index.html" class="link-nav w-nav-link">Home</a>
      <a href="about.html" class="link-nav w-nav-link">About</a>
      <a href="projets-w1.html" class="link-nav w-nav-link">Projet W1</a>
      <a href="projets-w2.html" class="link-nav w-nav-link">Projet W2</a>
      <a href="contact.php" aria-current="page" class="link-nav w-nav-link w--current">Contact</a>
    </nav>
  </div>
  </div>
  <div data-w-id="8d967f30-0f60-53ad-afff-f6be8eeb33d6" class="hero pages wf-section">
    <div data-w-id="8379a733-d2be-9ef6-7d74-5aa993d72c65" class="wrapper-title">
      <div class="_w-h1">
        <h1 data-w-id="eca8521f-4208-5159-fae5-908e9ea99674" style="-webkit-transform:translate3d(0, 110%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 110%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 110%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 110%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="main-h1">Contactez moi</h1>
      </div>
    </div>
  </div>
  <div class="section-2 wf-section">
    <div class="wrapper center form">
      <div class="wrapper-info contact">
        <div class="wrap-content">
          <div class="form-block w-form">
            <form id="email-form" action="" name="email-form" data-name="Email Form" method="post" class="form-2">
              <div class="container-12 w-container">
                <div class="imput_nom"><label for="name" class="field-label">Nom :</label><input placeholder="Votre nom" type="text" class="text-field w-input" maxlength="256" name="lastname" data-name="Name" placeholder="" id="name"></div>
                <div class="input"><label for="name-2" class="field-label">Prénom :</label><input placeholder="Votre prénom" type="text" class="text-field w-input" maxlength="256" name="firstname" data-name="Name 2" placeholder="" id="name-2"></div>
                <div class="input"><label for="name-3" class="field-label">Entreprise :</label><input placeholder="Votre entreprise" type="text" class="text-field w-input" maxlength="256" name="company" data-name="Name 3" placeholder="" id="name-3"></div>
              </div>
              <div class="input"><label for="field" class="field-label">Message :</label><textarea id="field" name="field" maxlength="5000" data-name="field" placeholder="Votre message" class="message"></textarea></div>
              <div class="container-13 w-container"><input type="submit" name="submit" value="Envoyer" class="buton w-button"></div>
            </form>
            <?php if (isset($_POST["submit"])) { ?>
              <div class="alert alert-success">Message envoyé avec succès</div>
            <?php } ?>

            <?php

            require './vendor/autoload.php';

            // Server settings

            use PHPMailer\PHPMailer\PHPMailer;
            use PHPMailer\PHPMailer\SMTP;
            use PHPMailer\PHPMailer\Exception;

            $mail = new PHPMailer(true);

            try {
              // Server settings
              $mail->SMTPDebug = SMTP::DEBUG_SERVER; // for detailed debug output
              $mail->isSMTP();
              $mail->Host = 'smtp.gmail.com';
              $mail->SMTPAuth = true;
              $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
              $mail->Port = 465;

              $mail->Username = 'alex.painnot@gmail.com'; // YOUR gmail email
              $mail->Password = '3oSxWkm7WsMZk2OlDn0xmY9IprJmlT3wotOyyWWXH66O6UWRxStt362YEdx3nPCXMnq31T6Fi8xS0K1cHxgJlkn6Cz6VLZyrqTN'; // YOUR gmail password

              // Sender and recipient settings
              $mail->setFrom('alex.painnot@gmail.com', 'Sender Name');
              $mail->addAddress('phppot@example.com', 'Receiver Name');
              $mail->addReplyTo('alex.painnot@gmail.com', 'Sender Name'); // to set the reply to

              // Setting the email content
              $mail->IsHTML(true);
              $mail->Subject = "Send email using Gmail SMTP and PHPMailer";
              $mail->Body = 'HTML message body. <b>Gmail</b> SMTP email body.';
              $mail->AltBody = 'Plain text message body for non-HTML email client. Gmail SMTP email body.';

              $mail->send();
              echo "Email message sent.";
            } catch (Exception $e) {
              echo "Error in sending email. Mailer Error: {$mail->ErrorInfo}";
            }


            if (isset($_POST["submit"])) {
              ini_set('SMTP', "smtp.gmail.com");
              ini_set('smt p_port', "465");
              ini_set('sendmail_from', "alex.painnot@gmail.com");

              $message = $_POST['field'];
              mail("alex.painnot@gmail.com", "mail-portfolio", $message);
              unset($_POST);
            }
            ?>
          </div>
        </div>
      </div>
      <a href="https://www.linkedin.com/in/alex-painnot/" target="_blank" class="w-inline-block"><img src="images/linkedin-logo.png" loading="lazy" width="100" alt=""></a>
    </div>
  </div>
  </div>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=62162822abb250eba434d5c5" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>

</html>