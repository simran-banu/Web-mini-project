<html>
<head>
<title>View Status</title>
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
    .a:hover{
            color:aquamarine;
	        font-size:24px;
        }
        .a{
            font-size:25px;
            color: white;
        }
        h1{
            text-decoration: underline;
        }
        .b{
            text-align: center;
            font-size: large;
            font-weight: bold;
            background-color: darkblue;
            color: white;
        }
        .c{
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
    <table border='1' cellspacing="2" cellpadding="2" width="80%" bgcolor="white"  align="center" style="text-align:center">
            <tr height="400px">
            <td width="0%"><img src="img/i3.jpg" height="400px" width="100%"></td>
            </tr>
        </table>
        <form action="" method="post">
<table border='0' bgcolor="white" width="80%" height="400px" align="center" style="text-align:center">
<tr>
    <td style="text-decoration:underline;font-size:xx-large;">View Status</td>
</tr>
<tr>
    <td>Book-Id : <input type="text" name="bid" id="bid" placeholder="Enter Id" autofocus required></td>
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
        $bid = $_POST['bid'];
        $result = mysqli_query($con,"Select * from book_table where bid='$bid' ");
        echo "<table border='1' width='100%' cellspacing='5' cellpadding='5' >
  <tr><td class='b'>Name</td><td class='b'>Address</td><td class='b'>Contat No</td>
    <td class='b'>Date</td><td class='b'>Time</td><td class='b'>No Of Persons</td><td class='b'>Table Selected</td></tr>";
        while($d = mysqli_fetch_array($result))
        {
            echo "<tr>";
            echo "<td class='c'>".$d['name']."</td>";
            echo "<td class='c'>".$d['addr']."</td>";
            echo "<td class='c'>".$d['phone']."</td>";
            echo "<td class='c'>".$d['bdate']."</td>";
            echo "<td class='c'>".$d['time']."</td>";
            echo "<td class='c'>".$d['Ntable']."</td>";
            echo "<td class='c'>".$d['tb']."</td>"; 
        }
    }
    ?>
    </td>
</tr>
</table>
</form>
</body>
</html>