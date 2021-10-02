<html>
<head>

    <title> Login and Signup </title>
    
    <link rel="stylesheet" type="text/css" href="style.css">
    
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    
</head>

<body>

    <div class="container">
        
        <div class="login-box">
    
        <div class="row">
        
            <div class="col-md-6 login-left">
                
                <h2> Login Here </h2>
            
                <form method="post">
                
                    <div class="form-group">
                    
                        <label> Username </label>
                        <input type="text" name="username" class="form-control" required>
                        
                    </div>
                    
                    <div class="form-group">
                    
                        <label> Password </label>
                        <input type="password" name="password" class="form-control" required>
                    
                    </div>
                    
                    <button type="submit" class="btn btn-primary" class="login"> Login </button>
                
                
                </form>
    
            
            </div>
        
            
            
        <div class="col-md-6 login-right">
                
                <h2> Register Here </h2>
            
                <form method="post">
                
                    <div class="form-group">
                    
                        <label> Username </label>
                        <input type="text" name="user" class="form-control" required>
                        
                    </div>
                    
                    <div class="form-group">
                    
                        <label> Password </label>
                        <input type="password" name="pass" class="form-control" required>
                    
                    </div>
                    
                    <button type="submit" class="btn btn-primary" name="signup"> Register </button>
                
                
                </form>
        
    </div>
        
    </div>
        
    </div>
    
    </div>
    
    
</body>

</html>


<?php

include('register.php');
    
if(isset($_POST['signup']))
{
    $name=$_POST['user'];
    $password=$_POST['pass'];
    
    $data="INSERT INTO login VALUES('$name','$password')";
    mysqli_query($conn,$data);
}

?>


<?php

include('register.php');

if(isset($_POST['login']))
    {
    $name=$_POST['username'];
    $password=$_POST['password'];
    
    
    $dt="SELECT * FROM login WHERE Name='$name' AND Password='$password'";
    $result=mysqli_query($conn,$dt);
    
    $row=mysqli_num_rows($result);
    
    if($row==1)
    {
        header('location:heading.php');
    }
    else
    {
        echo "Wrong Email & Password.";
    }
}

?>