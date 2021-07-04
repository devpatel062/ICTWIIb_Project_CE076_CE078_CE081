<?php
session_start();
$uname = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<style>
  body,html{
    height: 100%;
    * {
        box-sizing: border-box;
      }
  }
    .bg{
      background-image: url("signpagebg1.jpg");
      background-repeat: no-repeat;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        height: 100%; 
        filter: blur(8px);
        -webkit-filter: blur(8px);
    }
    table{
      position: fixed;
      top:10px;
      left:130px;
    }
    tr td{
      padding:5px;
      font-size:20px;
      font-weight:800;
    }
</style>
<body>
  <div class="bg"></div>
</body>
</html>
<?php if(isset($_SESSION['username']))
{
   include "config (1).php";
$s = mysqli_query($conn, "Select * from cart where email='$uname'");
?>
<table border=1 width="80%"  align="center" cellpadding="8" cellspacing="10" style="color: black">
  <tr>
    <th><h1>Item</h1></th>
  </tr>

  <?php
    while ($r = mysqli_fetch_array($s)) {
  ?>
    <tr>
      <td><?php echo $r['item_detail']; ?></td>
    </tr>
  <?php
  }
  
}
else header('Location: sign in page.html');
?>

</table>
</div>


