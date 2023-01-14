<?php

            include("DBcon.php");
            $name=$_POST['name'];
            $query="SELECT * FROM studInfo WHERE name='$name'";
            $query_conff=mysqli_query($conff,$query);
            $data=mysqli_fetch_assoc($query_conff);
            echo"
                <div class='pfcard'>        
                    <h1 class='pfhead'>PROFILE</h1>
                    <br>ID: $data[ID]</p>
                    <BR><p>Name: $data[name]</p>
                    <br><p>Class: $data[class]</p>
                    <br><p>Roll No: $data[roll_no]</p>
                    <br><p>Mobile: $data[mobile]</p>
                    <br><p>Father: $data[father]</p>
                    <br><p>Mother: $data[mother]</p>
                </div>
            
            ";





?>