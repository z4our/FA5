<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style_item1.css">
</head>
<body>
    <header>
        <h1>GET Method</h1>
    </header>
    <div class="form-container">
        <form method="get" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <label> First Name: </label> <br>
            <input type="text" pattern="[a-zA-Z ]+" name="fname"> <br><br>

            <label> Middle Name: </label> <br>
            <input type="text" pattern="[a-zA-Z ]+" name="mname"> <br><br>

            <label> Last Name: </label> <br>
            <input type="text" pattern="[a-zA-Z ]+" name="lname"> <br><br>

            <label> Birthday: </label> <br>
            <input type="text" pattern="[0-9]+" name="bday1" class="bday" placeholder="YYYY"> -
            <input type="text" pattern="[0-9]+" name="bday2" class="bday" placeholder="MM"> -
            <input type="text" pattern="[0-9]+" name="bday3" class="bday" placeholder="DD"> <br><br>

            <label> Address: </label> <br>
            <input type="text" name="address"> <br>

            <div class="submit-container">
                <input type="submit" class="submit">
            </div>
        </form>
    </div>

    <div class="output-container">
        <?php
        if (isset($_GET['fname']) && isset($_GET['mname']) && isset($_GET['lname']) && isset($_GET['bday1']) && isset($_GET['bday2']) && isset($_GET['bday3']) && isset($_GET['address'])) {
            $fname = $_GET['fname'];
            $mname = $_GET['mname'];
            $lname = $_GET['lname'];
            $address = $_GET['address'];
            $bday = $_GET['bday1'] . "-" . $_GET['bday2'] . "-" . $_GET['bday3'];

            if (empty($fname) || trim($fname) === "") {echo "First name: empty <br>";} 
            elseif (!preg_match("/^[a-zA-Z ]*$/", $fname)) {echo "First name: invalid input <br>";}
            else {echo "First name: " . $fname . "<br>";}

            if (empty($mname) || trim($mname) === "") {echo "Middle name: empty <br>";} 
            elseif (!preg_match("/^[a-zA-Z ]*$/", $mname)) {echo "Middle name: invalid input <br>";}
            else {echo "Middle name: " . $mname . "<br>";}

            if (empty($lname) || trim($lname) === "") {echo "Last name: empty <br>";} 
            elseif (!preg_match("/^[a-zA-Z ]*$/", $lname)) {echo "Last name: invalid input <br>";}
            else {echo "Last name: " . $lname . "<br>";}

            if (empty($address) || trim($address) === "") {echo "Address: empty <br>";} 
            elseif (!preg_match("/^[a-zA-Z0-9\s,.-]+$/", $address)) {echo "Address: invalid input <br>";}
            else { echo "Address: " . $address . "<br>";}

            if ($bday == "--") {echo "Birthday: empty <br>";} 
            elseif (!preg_match("/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/", $bday)) {echo "Birthday: invalid input <br>";}
            else {echo "Birthday: " . $bday . "<br>";}
            }?>
    </div>

    <footer>
        <a href="index.php">Back</a>
    </footer>
</body>
</html>