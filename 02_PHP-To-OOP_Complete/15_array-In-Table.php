
 <!--        <table border="1" style="padding:3px">
            <tr >
                <td style="padding:3px">S.N</td>
                <td style="padding:3px">Name</td>
                <td style="padding:3px">Email</td>
            </tr>
            <tr >
                <td style="padding:3px">1</td>
                <td style="padding:3px">Shanto</td>
                <td style="padding:3px">Email@email</td>
            </tr>
            <tr >
                <td style="padding:3px">1</td>
                <td style="padding:3px">Shanto</td>
                <td style="padding:3px">Email@email</td>
            </tr>
            <tr >
                <td style="padding:3px">1</td>
                <td style="padding:3px">Shanto</td>
                <td style="padding:3px">Email@email</td>
            </tr>
        </table> -->

        <?php
            $users = [
                [1,"Shanto","Shanto@gmail.com"],
                [2,"Shanto","Shanto@gmail.com"],
                [3,"Shanto","Shanto@gmail.com"],
                [4,"Shanto","Shanto@gmail.com"],
                [5,"Shanto","Shanto@gmail.com"],
            ];

            echo "<table border=1>";
            for($i=0; $i< count($users); $i++){
                echo "<tr>";
                for($j=0;$j<count($users[$i]);$j++){
                    echo "<td>";
                    echo $users[$i][$j];
                    echo "</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        ?>