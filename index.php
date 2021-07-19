    <?php 
        if (isset($_POST['submit'])) {
            $from = "admin@laels.xyz";
            $email = $_POST['email'];
            $email = trim($email);
            $emailSanitized = filter_var($email, FILTER_SANITIZE_EMAIL);
            $to = $emailSanitized;
            $fname = $_POST['first_name'];32
            $fname = trim($fname);
            $fnameSanitized = filter_var($fname, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
            $first_name = $fnameSanitized;
            $lname = $_POST['last_name'];
            $lname = trim($lname);
            $lnameSanitized = filter_var($lname, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
            $last_name = $lnameSanitized;
            $subject = "Laels.xyz - Form Output";
            $msg = $_POST['message'];
            $msg = trim($msg);
            $file = $_POST['file'];
            echo $file;
            $msgSanitized = filter_var($msg, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
            $message = "
            <html>
            <head>
            <title>Laels.xyz form results</title>
            </head>
            <body>
            <h1>Your message was received.</h1><br>
            <p>Thank you for contacting us " . $first_name . " " . $last_name . " </p>
            <br>
            <p>You wrote us a message:<br>" . $msgSanitized . "
            </body>
            </html>
            ";
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            $headers .= 'From: <admin@laels.xyz>' . "\r\n";
            mail($to, $subject, $message, $headers);
            header("Location: sent.php?mailsend");
        }
    ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Security-Policy" content="default-src https:">
        <meta content="text/html; charset=UTF-8; X-Content-Type-Options=nosniff" http-equiv="Content-Type" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="./style.css" />    
    </head>
<body>
    <main>
    <form class="form" action="" method="POST">
        <div class="col">
            <div class="input small">
                <label>First name</label>
                <input
                type="text"
                name="first_name"
                required
                ></input>
                <div class="alert">This field is required.</div>
            </div>
            <div class="input small">
                <label>Last name</label>
                <input
                type="text"
                name="last_name"
                required
                ></input>
                <div class="alert">This field is required.</div>
            </div>
        </div>
       <div class="col">
            <div class="input small">
                <label>Email address</label>
                <input
                type="email"
                name="email"
                required
                ></input>
                <div class="alert">This field is required.</div>
            </div>
            <div class="input small">
                <label>Telephone number</label>
                <input
                type="tel"
                name="telephone"
                required
                ></input>
                <div class="alert">This field is required.</div>
            </div>
        </div>
        <div class="col">
            <div class="input small">
                <label>Address 1</label>
                <input
                type="text"
                name="address_one"
                required
                ></input>
                <div class="alert">This field is required.</div>
            </div>
            <div class="input small">
                <label>Address 2</label>
                <input
                type="text"
                name="address_two"
                required
                ></input>
                <div class="alert">This field is required.</div>
            </div>
        </div> 
        <div class="col">
            <div class="input small">
                <label>Town</label>
                <input
                type="text"
                name="town"
                required
                ></input>
                <div class="alert">This field is required.</div>
            </div>
            <div class="input small">
                <label>County</label>
                <input
                type="text"
                name="county"
                required
                ></input>
                <div class="alert">This field is required.</div>
            </div>
        </div>
        <div class="col">
            <div class="input small">
                <label>Postcode</label>
                <input
                type="text"
                name="postcode"
                required
                ></input>
                <div class="alert">This field is required.</div>
            </div>
            <div class="input small">
                <label>Country</label>
                <input
                type="text"
                name="country"
                required
                ></input>
                <div class="alert">This field is required.</div>
            </div>
        </div>
        <div class="col">
            <div class="input large">
                <label>Description</label>
                <input
                type="text"
                name="message"
                required
                ></input>
                <div class="alert">This field is required.</div>
            </div>
        </div>
        <div class="col">
            <div class="file">
                <h2>Your C.V.</h2>
                <div class="upload">
                    <label>Select a file</label>
                    <input 
                    name="file"
                    type="file"
                    accept=".doc,.docx"
                    required />
                </div>
            </div>
        </div> 
        <div class="col">
            <div class="input large">
                <button 
                data-message="submit button"
                name="submit" type="submit" value="submit" >
                    <span>Submit</span>
                </button>               
            </div>
        </div>
    </form>
    </main>
    <script src="./script.js"></script>
</body>
</html>