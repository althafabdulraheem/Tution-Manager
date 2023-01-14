<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Attendace</title>
</head>

<body>
    <h1><?php
    $date=date("d-m-y");
    echo"$date";
    ?>
    </h1>
    <form action="addAttendance-back.php" method="get">
               <select name="class">
                    <option value="" selected="selected" disabled>pls select class</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
        
              </select>
        <input type="number" name="rolno">
        <input type="submit" name="btnattend">
    </form>
    
    <?php
        include("DBcon.php");
        $fetch="SELECT * FROM cache";
        $query=mysqli_query($conff,$fetch);
              

        while($data=mysqli_fetch_assoc($query))
        {
          echo"<table border=1px>
          <tr>
                <td>".$data['ID']."</td>
                <td>".$data['name']."</td>
                <td>".$data['date']."</td>
                <td><form action='addAttendance-back.php' method='post'>
                    <input type='submit' value='confirm' name='attendace'>
                    </form></td><br>
          </tr>
          </table>
          ";
        }

    ?>
</body>
</html>