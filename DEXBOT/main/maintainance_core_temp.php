<?php
    $servername = "mysql.dexbot.mitindia.edu";
    $username = "pt_dexbotdb";
    $password = "MIT_Robotics_PT";
    $dbname = "dexbotdb";
    $prefix = "";
    $conn = new mysqli($servername, $username, $password,$dbname) or die("Unable to connect");

    echo '<form method="get" action="maintainance_core.php">
        <select name="worklist">  
            <option value="Select">Select</option>}  
            <option value="Arduino Dot Python">Arduino Dot Python</option>  
            <option value="Internet Of Things">Internet Of Things</option>  
            <option value="App Development">App Development</option>  
            <option value="Ethical Hacking">Ethical Hacking</option>  
            <option value="Image Processing">Image Processing</option>  
            <option value="Cryptool">Cryptool</option>  
        </select>
        <input type="submit">
        </form>';
    
    echo "<br><br><br><br>";

    // console.log("Connected");

    // echo "Hello World Connected";

    echo "<table border='1'>
    <tr>
    <th>Name</th>
    <th>email</th>
    <th>Phone</th>
    <th>College</th>
    <th>Department</th>
    <th>Year</th>
    <th>Tickets</th>
    <th>Transaction Status</th>
    <th>Date</th>
    <th>Workshop</th>
    </tr>";

    $status = "cancelled";

    // document.getElementById('work').worklist.onchange = function() {
    //     var newaction = this.value;
    //     document.getElementById('store').action = newaction;
    // };

    $workshop = $_GET['worklist'];

    $qry1 = "SELECT * FROM dexbot WHERE workshop = '$workshop'";

    if($workshop == 'Select')
    {
        $qry1 = "SELECT * FROM dexbot";
    }

    $result = $conn->query($qry1);

    // echo "<br>Completed Select";

    // echo "<br>poda ".intval($result->num_rows);

    if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) 
    {
        $status = "cancelled";
        if($row["pid"] == '1')
        {
            $status = "completed";
        }
        echo "<tr><td>".$row["name"]."</td><td>".$row["email"]."</td><td>".$row["phone"]."</td><td>".$row["college"]."</td><td>".$row["dept"]."</td><td>".$row["year"]."</td><td>".$row["tickets"]."</td><td>".$status."</td><td>".$row["date"]."</td><td>".$row["workshop"]."</td></tr>";
    }
    }
    echo "</table>";

    // echo "<br>End of code";
?>
