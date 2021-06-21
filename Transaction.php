<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Transaction History</title>
      <link rel="icon" href="./styles/icon.png">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="table.css">
      <link rel="stylesheet" type="text/css" href="./styles/styles.css">
  </head>

  <body>

    <?php
      include 'config.php';
      $sql = "SELECT * FROM `transaction`";
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

    <div class="container">
        <h2 class="text-left pt-1" style="color:#456268;font-weight: 200;margin-top:48px; letter-spacing:0.5px;"><br>Transaction History</h2>
          
        <br>
        <div class="table-responsive-sm">
        <table class="table table-hover table-striped table-condensed table-bordered">
          <thead>
              <tr>
                  <th class="text-center" style=' font-family: "Roboto", sans-serif; color: #456268;'>S.No.</th>
                  <th class="text-center" style=' font-family: "Roboto", sans-serif; color: #456268;'>Sender</th>
                  <th class="text-center" style=' font-family: "Roboto", sans-serif; color: #456268;'>Receiver</th>
                  <th class="text-center" style=' font-family: "Roboto", sans-serif; color: #456268;'>Amount</th>
                  <th class="text-center" style=' font-family: "Roboto", sans-serif; color: #456268;'>Date & Time</th>
              </tr>
            </thead>
            <tbody>
            <?php
                include 'config.php';
                $sql = "SELECT * FROM `transactions`";
                $result=$con->query($sql);
              
                while($rows=mysqli_fetch_assoc($result)){
                
            ?>
            <tr>
              <td class="py-2"><?php echo $rows['sno']; ?></td>
              <td class="py-2"><?php echo $rows['sender']; ?></td>
              <td class="py-2"><?php echo $rows['receiver']; ?></td>
              <td class="py-2"><?php echo $rows['balance']; ?> </td>
              <td class="py-2"><?php echo $rows['datetime']; ?> </td>
            </tr>   
            <?php
              }
            ?>
          </tbody>
        </table>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>