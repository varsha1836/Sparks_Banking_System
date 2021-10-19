<!-- TRANSACTION MAIN FILE -->



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction</title>
    <link rel="icon" href="https://pngimg.com/uploads/bank_vault/bank_vault_PNG18.png"
        type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
   
  
    <link href="transaction.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="navbar.css">
</head>

<body>
    <header>
        <img id="icon" src="https://pngimg.com/uploads/bank_vault/bank_vault_PNG18.png" rel="bank_image">
        <h1>Sparks Foundation Bank</h1>
        
    </header>
    
    <?php
  include 'Navbar.php';
  ?>
    
    <?php
    include 'config.php';
    $sql = "SELECT * FROM user";
    $result = mysqli_query($conn,$sql);
?>
 
   

            <style type="text/css">
                button {
                    transition: 1.5s;
                }
                
                button:hover {
                    background-color: #616C6F;
                    color: blue;
                }
                nav
            </style>
            </head>


            <div class="container" style="background-color: #FFFFFF; margin-top :50px;">
                <h2 class="text-center pt-4">Customer Details</h2>
                <br>
                <div class="row">
                    <div class="col">
                        <div class="table-responsive-sm">
                            <table class="table table-hover table-sm table-striped table-condensed table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col" class="text-center py-2">Id</th>
                                        <th scope="col" class="text-center py-2">Name</th>
                                        <th scope="col" class="text-center py-2">E-Mail</th>
                                        <th scope="col" class="text-center py-2">Mobile number</th>
										<th scope="col" class="text-center py-2">Account number</th>
										<th scope="col" class="text-center py-2">Balance</th>
                                        <th scope="col" class="text-center py-2">Operation</th>
                                    </tr>
                                </thead>
                                <tbody>
               <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr>
                        <td class="py-2"><?php echo $rows['id'] ?></td>
                        <td class="py-2"><?php echo $rows['name']?></td>
                        <td class="py-2"><?php echo $rows['email']?></td>
						<td class="py-2"><?php echo $rows['mobile']?></td>
						<td class="py-2"><?php echo $rows['account']?></td>
                        <td class="py-2"><?php echo $rows['balance']?></td>
                        <td><a href="selecteduserdetail.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="btn">Transfer Money</button></a></td> 
                    </tr>
                <?php
                    }
                ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>

</body>

</html>