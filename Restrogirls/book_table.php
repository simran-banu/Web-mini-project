<html>
<head>
<title>Book Table</title>
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
            <td width="0%"><img src="img/i2.jpg" height="400px" width="100%"></td>
            </tr>
        </table>
    <table border="0" bgcolor="white" width="80%" align="center" style='text-align:center'>
    <tr>
        <td>
    <?php
 $con = mysqli_connect("localhost","root","","restrogirls");
    if(isset($_REQUEST['sub']))
    {

       $b = $_REQUEST['bid'];
       $n = $_REQUEST['name'];
       $a = $_REQUEST['addr'];
       $p = $_REQUEST['phone'];
       $bd = $_REQUEST['bdate'];
       $t = $_REQUEST['time'];
       $tb = $_REQUEST['Ntable'];
       $ct = $_REQUEST['tb'];
        $q = "insert into book_table values('$b','$n','$a','$p','$bd','$t','$tb','$ct')";
        $r = mysqli_query($con,$q);
        if($r)
       {
        echo "<script>alert('Success!!! Record Saved')</script>";
       }
    }
    ?>
    
    <form action="" method="post" name="" enctype="">
<table border='0' cellspacing='10' cellpadding='10' align='center'>
        <tr>
           <td>Book-id: </td>
       <td><input type="text" name="bid" id="bid" placeholder="Enter id" autofocus required></td></tr>
       
        <tr>
       <td>Name: </td>
        <td><input type="text" name="name" id="name" placeholder="Enter Name" autofocus required></td>

        <tr>
       <td>Address: </td>
        <td><input type="text" name="addr" id="addr" placeholder="Enter address" autofocus required></td>
        
        </tr>
        
        </tr>
           <td>Contact No: </td>
       <td><input type="number" name="phone" id="phone" placeholder="Enter phone Number" autofocus required></td></tr>
       
        
        <tr>
           <td>Date : </td>
       <td><input type="date" name="bdate" id="bdate" autofocus required></td></tr>
       
        <tr>
       <td>Time: </td>
        <td><input type="time" name="time" id="time" autofocus required></td>
        
        </tr>
        <tr>
           <td>No of Persons: </td>
       <td><input type="text" name="Ntable" id="Ntable" autofocus required></td></tr>

       <tr>
<td>Choose Table:</td>
<td><select name="tb" id="tb">
<option value=""></option>
<option value="Table1">Table 1</option>
<option value="Table2">Table 2</option>
<option value="Table3">Table 3</option>
<option value="Table4">Table 4</option>
<option value="Table5">Table 5</option>
<option value="Table6">Table 6</option>
<option value="Table7">Table 7</option>
<option value="Table8">Table 8</option>
<option value="Table9">Table 9</option>
<option value="Table10">Table 10</option>
</td>
</tr>
       <tr> 
        <td><input type="submit" name="sub" value="Book Table"></td>
         </tr>
    </table>
        </form>
        </body>
        </html>
        