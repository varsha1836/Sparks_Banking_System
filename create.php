

<!-- CREATE USER MAIN FILE -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Create User</title>

    <link rel="icon" href="backcreate.png" type="image/x-icon">


    <link rel="stylesheet" type="text/css" href="create.css">
    <link rel="stylesheet" type="text/css" href="navbar.css">

</head>

<body>
    <header>
        <img id="icon" src="https://pngimg.com/uploads/bank_vault/bank_vault_PNG18.png" alt="bank_image">
        <h1>Sparks Foundation Bank</h1>
    </header>
    
    <?php
    include 'config.php';
    if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $balance=$_POST['balance'];
	$mobile=$_POST['mobile'];
	$account=$_POST['account'];
    $sql="insert into user(name,email,balance,mobile,account) values('{$name}','{$email}','{$balance}','{$mobile}','{$account}')";
    $result=mysqli_query($conn,$sql);
    if($result){
               echo "<script> alert('User registered successfully');
                               window.location='transaction.php';
                     </script>";
                    
    }
  }
?>
   <?php
  include 'navbar.php';
  ?>

    <div class="container">

        <div class="screen">

            <div class="screen-header"></div>

            <div class="screen-body">

                <div class="screen-body-item left">
                    <img class="img-fluid" src="backcreate.png" style="border: none; border-radius: 50%;">
                </div>

                <div class="screen-body-item">
                    <form class="app-form" method="post">

                        <div class="app-form-group">
                            <input class="app-form-control" placeholder="Name" type="text" name="name" required>
                        </div>

                        <div class="app-form-group">
                            <input class="app-form-control" placeholder="Email" type="email" name="email" required>
                        </div>
						
						<div class="app-form-group">
                            <input class="app-form-control" placeholder="Mobile Number" type="number" name="mobile" required>
                        </div>
						
						<div class="app-form-group">
                            <input class="app-form-control" placeholder="Account Number" type="number" name="account" required>
                        </div>
						
                        <div class="app-form-group">
                            <input class="app-form-control" placeholder="Balance Amount" type="number" name="balance" required>
                        </div>
						
						

                        <br>

                        <div class="app-form-group button">
                            <input class="app-form-button" type="submit" value="CREATE" name="submit"></input>
                            
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </div>

</body>

</html>