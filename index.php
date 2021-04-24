<?php
    if (!empty($_POST)){
        $name = $_POST["name"]; 
        $email = $_POST["email"]; 
        $message = $_POST["message"]; 
        
        $to = "akshararajan1726@gmail.com";
        $email_subject = "Contact form submission: $name";
        $email_body = "You have received a new message. ". " Here are the details:\n Name: $name \n ". "Email: $email\n Message \n $message";
        $headers= "Reply-To: $email";
        mail($to,$email_subject,$email_body,$headers);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <!-- JQUERY CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
        form{
            margin: 50px;
        }
        @media only screen and (min-width: 800px){
            form{
                margin: 100px 300px;
            }
        }
    </style>
</head>
<body>

    <form method="post" name="contact_form" action="index.php">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Your Name</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="name" required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" name="email" required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Your Message</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" name="message" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <!-- Displays success message -->
    <script>
        $(document).ready(function(){
        $("form").submit(function(){
            alert("Submitted");
        });
        });
    </script>

</body>
</html>




