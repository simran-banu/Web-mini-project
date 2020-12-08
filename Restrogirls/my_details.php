<html>
    <head>
    <title>My Details</title>
    <link href="img/icon.png" rel="icon">
</head>
<style>
     body{
            background-image:url('img/bg.jpg');
	        background-size:100% 100%;
	        background-attachment:fixed;
        }
        .a:hover{
            color:aquamarine;
	        font-size:24px;
        }
        .a{
            font-size:25px;
            color: white;
        }
        .b{
            font-size: larger;
            text-align: center;
        }
    </style>
<body>
<table border='1'  bgcolor="black" width="80%" align="center" style="text-align:center">
    <tr height="70px">
    <td width="25%"><a href="my_details.php" class="a">My Details</a></td>
    <td width="25%"><a href="book_table.php" class="a">Book Table</a></td>
    <td width="25%"><a href="check_status.php" class="a">Check Status</a></td>
    <td width="25%"><a href="index.html" class="a">Logout</a></td>
    </tr>
    </table>
<table border='0' cellspacing="2" cellpadding="2" width="80%" bgcolor="white"  align="center" style="text-align:center">
            <tr height="400px">
            <td width="0%"><img src="img/i1.jpg" height="400px" width="100%"></td>
            </tr>
        </table>
    <form action="" method="post">
<table border='0' bgcolor="white" width="80%" height="600px" align="center" style="text-align:center">
<tr>
    <td style="text-decoration:underline;font-size:xx-large;">My Details</td>
</tr>
<tr>
    <td>User-Id : <input type="text" name="uid" id="uid" placeholder="Enter Id" autofocus required></td>
</tr>
<tr>
<td><input type="submit" name="sub" value="Search"></td>
</tr>

<tr>
    <td>
    <?php
    $con = mysqli_connect("localhost","root","","restrogirls");
    if(isset($_POST['sub']))
    {
        $uid = $_POST['uid'];
        $result = mysqli_query($con,"Select * from register where uid='$uid' ");
        while($d = mysqli_fetch_array($result))
        {
            echo "<tr><td class='b'>Name : ".$d['name']."</td></tr>";
            echo "<tr><td class='b'>Contact No : ".$d['contact']."</td></tr>";
            echo "<tr><td class='b'>Address : ".$d['addr']."</td></tr>";
            echo "<tr><td class='b'>Email-Id : ".$d['email']."</td></tr>";
        }
    }
    ?>
    </td>
</tr>
</table>
</form>
    </table>
    </body>
</html>