<html>
    <body>
            <h1>result</h1>
                <?php
                    $SERVER ="localhost";
                    $username="root";
                    $password="";
                    $dbname="sensor_values";

                    $conn=mysqli_connect($SERVER,$username,$password,$dbname);
                   if(empty($_GET['value']))
                   {
                    echo " not submited";
                   }
                   else
                   {
                    $value=$_GET['value'];
                    echo "the value is:" . $_GET['value'];
                    echo "<br> submited successfully";
                   }

                   $query= "insert into sevalues values($value)" ;
                   $run=mysqli_query($conn,$query)
                ?>
            </form>

    </body>
</html>

    </body>
</html>
