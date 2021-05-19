<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Money</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
</head>
    <style type="text/css">
      button{
        transition: 1.5s;
      }
      button:hover{
        background-color:#616C6F;
        color: white;
      }
      *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: sans-serif;
      }
      h2{
        font-size: 40px;
      }
      table{
        letter-spacing: 1.2px;
      }
      td{
        text-align: center;
      }
      button{
        border:none;
        background: #d9d9d9;
          transition: 1s;
      }
      @media only screen and (orientation: portrait){
        *{
          letter-spacing: 1px;
        }
      }
    
     html,body
    {
    margin: 0px;
    padding: 0px;
    overflow-x: hidden;
    background-image: url('img/purp.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    }
    .nav-link{
      margin-right: 15px;
      color:#9796f0;
      letter-spacing: 0.5px;
      transition: 0.5s;
    }
    .nav-link:hover{
      text-decoration: none;
      color: white;

    }
    h2{
      color: white;
      letter-spacing: 0.5px;
      font-family: 'Lora', serif;
    }
    .navbar{
      background-color: black;
    }
    .footer-div{
     width:100%;
     height:50px;
     background-color:#583d72;
     color: white;
     padding-top: 12px;
     text-align: center;
     position: relative;
     bottom: 0;
    }
    hr {
    clear: both;
     visibility: hidden;
    }
</style>
<body>
<?php
    include 'config.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);
?>

<nav class="navbar navbar-expand-md">
      <h1 style="color: white;">Safety BANK</h1>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar"></button>
        <span class="navbar-toggler-icon"></span>
      </button>
          <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="view-users.php">Users</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="transfermoney.php">Transfer Money</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="transactionhistory.php">Transaction History</a>
              </li>
            </ul>
          </div>
</nav>

<div class="container">
        <h2 class="text-center pt-4">Transfer Money</h2>
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
                            <th scope="col" class="text-center py-2">Balance</th>
                            <th scope="col" class="text-center py-2">Transfer To</th>
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
                        <td class="py-2"><?php echo $rows['balance']?></td>
                        <td><a href="selecteduserdetail.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="btn">Transact</button></a></td> 
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
</body><br><hr>
    <footer>
    <div class="footer-div">
      <p style="text-align:center;color:white;">&copy; 2021 Anushka Mohane. The Sparks Foundation</p>
    </div>
    </footer>
</html>