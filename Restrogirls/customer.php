<html>
    <head>
        <title>Customer Panel</title>
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
            color: white;
            text-align: center;
        }
    .b{
        text-align: center;
    }
    </style>
    <body>
    <table border='1'  bgcolor="black" width="80%" align="center" style="text-align:center">
            <tr height="70px">
            <td class="a">Customer Home Page</td>
            </tr>
            </table>
        <table border='0' cellspacing="2" cellpadding="2" width="80%" bgcolor="white"  align="center" style="text-align:center">
            <tr height="400px">
            <td width="0%"><img src="img/i8.jpg" height="400px" width="100%"></td>
            </tr>
            </table>
            <?php
    $con = mysqli_connect("localhost","root","","restrogirls");
    if(isset($_REQUEST['sub']))
    {
    $u = $_REQUEST['uid'];
    $p = $_REQUEST['pass'];

    $q = "select * from Register where uid='$u' and pass='$p'";
    $r = mysqli_query($con,$q);
    if($d = mysqli_fetch_assoc($r))
    {
        $u = $d['name'];
        $_SESSION['uid']=$u;
        $_SESSION['email']=$e;
        header("location:my_details.php");
    }
    else{
        echo "<script>alert('success!!! Logged In')</script>";
    }
    }
?>
<form action="" method="post" name="" enctype="">
<table border='0' cellspacing='10' cellpadding='10' bgcolor="white" align='center' width="80%" style="text-align:center;" >
<tr>
<td class="b"> User Id : <input type="text" name="uid" id="uid" placeholder="User id" autofocus required></td>
</tr>
<tr>
<td class="b"> Password : <input type="password" name="pass" id="pass" placeholder="password" required></td>
</tr>
<tr>
<td class="b"><input type="submit" name="sub" id="sub" value="Login"></td>
</tr>
<tr>
<td>Not a member yet??</td>
</tr>
<tr>
<td><a  href='register.php' >Register</td></a>
</tr>
</form>
    </body>
</html>