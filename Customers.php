<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>User-Details</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/styles.css" />
    <link rel="stylesheet" type="text/css" href="table.css">
  </head>
  <body>
    <?php
    include 'config.php';
    $sql = "SELECT * FROM users";
    $result=$con->query($sql); 
    ?>

<div class="header-bar">
      <h1 class="heading">SparksBank</h1>
      <div class="menu">
        <ul>
          <li><a href="./index.php"> Home</a></li>
          <li><a href="./Customers.php"> Customers</a></li>
          <li><a href="./Transaction.php"> Transaction</a></li>
        </ul>
      </div>
    </div>

    <!-- Table  -->
    <div class="container">
    <br><br>
        <h2 class="text-left pt-1" style="color:#456268; font-weight: 200;"></br>Select Sender</h2>
        <br>
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                    <table class="table table-hover table-sm table-striped table-condensed table-bordered">
                        <thead>
                            <tr>
                            <th scope="col" class="text-center py-2" style=' font-family: "Roboto", sans-serif; color: #456268;'>Id</th>
                            <th scope="col" class="text-center py-2" style=' font-family: "Roboto", sans-serif; color: #456268;'>Name</th>
                            <th scope="col" class="text-center py-2" style=' font-family: "Roboto", sans-serif; color: #456268;'>E-Mail</th>
                            <th scope="col" class="text-center py-2" style=' font-family: "Roboto", sans-serif; color: #456268;'>Balance</th>
                            <th scope="col" class="text-center py-2" style=' font-family: "Roboto", sans-serif; color: #456268;'>Operation</th>
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
                              <td><a href="selected-user-detail.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="btn" style="color:#456268;">Select</button></a></td> 
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
