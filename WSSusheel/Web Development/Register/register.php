<!DOCTYPE html>
<html>


<head>
    <style>

    .DivCentered{
        
        
        
        border:1px solid black;  
        background-size: cover;
        background-color:yellow;

        position: absolute;
        top: 20%;
        left: 40%;
        margin-top: -50px;
        margin-left: -50px;
        width: 50vh;
        height: 80vh;
        overflow:hidden;
    }

    .DivTableContainer{

        border:3px solid red; 
        background-color:blue;
        padding:5px;
        display:table;
        position: absolute;
        
        height:auto;
        width:45vh;    
        overflow:hidden;
    
    }

    .ContentsTable{

        margin:5px; 
        border:3px solid black;
        position: absolute; 
        top: 0%;
        
    }

    </style>

    <script>
        function getTodaysDate()
        {
            dt = new Date();
            return dt;
        }
        </script>
</head>
<body>



<div class="DivCentered" >
  
  <h2 align="center">Register New Member</h2>

  <form action="register_response.php" method="post">

    <div class="DivTableContainer">

        <table class="ContentsTable">
            <tr>
                <td>Name: </td>
                <td><input type="text" name="txtName" value="" required></td>
                <br><br>
            </tr>

            <tr>
                <td>Address:&nbsp</td>
                <td><input type="text" name="txtAddress" value=""></td>
                <br><br>
            </tr>

            <tr>
                <td>DOB:</td>
                <td> <input type="date" name="txtDOB" value="" required></td>
                <br><br>
            </tr>

            <tr>
                <td>Email:</td> 
                <td><input type="email" name="txtEmail" value="" required></td>
                <br><br>
            </tr>
                
            <tr>
                <td>Username:</td>
                <td><input type="text" name="txtUsername" value="" required></td>
                <br><br>
            </tr>
            <tr>
                <td>Password: </td>
                <td><input type="password" name="txtPassword" value="" required></td>
                <br><br>
            </tr>

        </table>

      <input align="right" type="submit" value="Submit">

    </div>

</form> 

<!--p>If you click the "Submit" button, the form-data will be sent to a page called "/register_response.php".</p-->
</div>
</body>
</html>