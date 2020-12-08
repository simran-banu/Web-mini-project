<html>
    <head>
    <title>Customer Registration Panel</title>
    <link href="img/icon.png" rel="icon">
</head>
<style>
    body{
	background-image:url('img/bg.jpg');
	background-size:100% 100%;
	background-attachment:fixed;
    }
    form{
        text-align: center;
    }
    h1{
        text-decoration: underline;
    }
    </style>
    <body>
    <table border='0' cellspacing="2" cellpadding="2" width="80%" bgcolor="white"  align="center" style="text-align:center">
            <tr height="400px">
            <td width="0%"><img src="img/i6.jpg" height="400px" width="100%"></td>
            </tr>
        </table>
        <br>   
        <table border="0" bgcolor="white" width="80%" align="center" style='text-align:center'>
    <tr>
        <td>
    <?php
 $con = mysqli_connect("localhost","root","","restrogirls");
    if(isset($_REQUEST['sub']))
    {
        $n = $_REQUEST['name'];
        $c = $_REQUEST['contact'];
        $a = $_REQUEST['addr'];
        $e = $_REQUEST['email'];
        $u = $_REQUEST['uid'];
        $p = $_REQUEST['pass'];
       
        $q = "insert into register values('$n','$c','$a','$e','$u','$p')";
        $r = mysqli_query($con,$q);
        if($r = mysqli_query($con,$q))
       {
        echo "<script>alert('Inserted Successfully!!!')</script>";
       }
       else{
           header("location:customer.php");
       }
    }
    ?>
    <form action="" method="post" name="" enctype="">
<table border='0' cellspacing='10' cellpadding='10' align='center'>
    <tr>
        <td><h1>Registration</h1></td>
    </tr>
        <tr>
           <td>Name : </td>
       <td><input type="text" name="name" id="name" placeholder="Enter name" autofocus required></td></tr>
       
        <tr>
       <td>Contact no : </td>
        <td><input type="text" name="contact" id="contact" placeholder="Enter Phone number" autofocus required></td>

        <tr>
       <td>Address: </td>
        <td><input type="text" name="addr" id="addr" placeholder="Enter address" autofocus required></td>
        
        </tr>
        
        </tr>
           <td>Email-id </td>
       <td><input type="Email" name="email" id="email" placeholder="Enter Email address" autofocus required></td></tr>
       
        
        <tr>
           <td>User Id : </td>
       <td><input type="number" name="uid" id="uid" placeholder="Enter User Id" autofocus required></td></tr>
       
        <tr>
       <td>Password : </td>
        <td><input type="text" name="pass" id="pass" placeholder="Enter password" autofocus required></td>
       
       <tr> 
        <td><input type="submit" name="sub" value="submit"></td>
         </tr>
    </table>
           </form>     
        </body>
</html>
    
    
