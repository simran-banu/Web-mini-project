<html>
    <head>
        <title>Admin Panel</title>
        <link href="img/icon.png" rel="icon">
    </head>
    <style>
    body{
	background-image:url('img/bg.jpg');
	background-size:100% 100%;
	background-attachment:fixed;
    }
        .a{
            font-size:25px;
            color:white;
            text-align: center;
        }
        .b{
            text-align: center;
        }
    </style>
    <body>
    <table border='1'  bgcolor="black" width="80%" align="center" style="text-align:center">
            <tr height="70px">
            <td class="a">Admin Home Page</td>
            </tr>
            </table>
        <table border='0' cellspacing="2" cellpadding="2" width="80%" bgcolor="white"  align="center" style="text-align:center">
            <tr height="400px">
            <td width="0%"><img src="img/admin_banner.jpg" height="400px" width="100%"></td>
            </tr>
            </table>
            <?php
    $con = mysqli_connect("localhost","root","","restrogirls");
    if(isset($_REQUEST['sub']))
    {
    $n = $_REQUEST['name'];
    $p = $_REQUEST['pass'];

    $q = "select * from admin where name='$n' and pass='$p'";
    $r = mysqli_query($con,$q);
    if($d = mysqli_fetch_assoc($r))
    {
        $_SESSION['admin']=$n;
        header("location:view_customer.php");
    }
    else{
        echo "<script>alert('username or Password incorrect!')</script>";
    }
    }
?> 
<form action="" method="post" name="" enctype="">
<table border='0' cellspacing='0' cellpadding='0' height="200px" width="80%" bgcolor="white" align="center" style="text-align:center" >
<tr>
    <td class="b">Username :<input type="text" name="name" id="name" placeholder="name "  autofocus required></td>
</tr>
<tr>
    <td class="b">Password : <input type="password" name="pass" id="pass" placeholder="password"></td>
    <tr>
<td class="b"><input type="submit" name="sub" value="Login"></td>
    </tr>
</table>
</form>
    </body>
</html>