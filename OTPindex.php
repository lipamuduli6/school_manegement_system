<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send OTP</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="jumbotron">
            <h1>How to send OTP to number in PHP [MSG91]</h1>
            <div class="card">
                <div class="card-body">  
                    <div class="col-md-6">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label for="exampleInputPassword">Mobile Number</label>
                                <input type="number" class="form-control" id="number" name="number" placeholder="Enter Number">
                            </div>
                            <button type="submit" name="sendotp" class="btn btn-success">Send OTP</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>


    <?php
    if(isset($_POST['sendotp']))
    {
        $authKey = "myAutherKey"; 
        $senderID = "102234";
        $mobileNumber = $_POST['number'];
        $message = 'Your OTP is: ' . rand(1000, 9999); 
        $route = 4; 

        
        $postData = array(
            'authkey' => $authKey,
            'mobiles' =>  $mobileNumber,
            'message' => $message,
            'sender' => $senderID,
            'route' => $route
        );

        
        $url = "http://api.msg91.com/api/sendhttp.php";

       
        $ch = curl_init($url);

        
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        
        $response = curl_exec($ch);

        
        curl_close($ch);

        
        echo "<div class='container'><div class='alert alert-success'>$response</div></div>";
    }
    ?>

   
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
