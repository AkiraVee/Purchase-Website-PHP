<?php 
// Script name: PurchaseOut.php 
?> 
<html> 
<head>
    <title>Purchase Order</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head> 
<body> 
    <div class="page-container">
        <h1>
            <font face="Tahoma">
                <center>Order Information</center>
            </font>
        </h1> 
        <hr noshade color="red" size="5"> 

        <p align="right">
            <?php echo gmdate("F d, Y"); ?> <!-- Displays current date -->
        </p> 

        <div class="result-box">
            <?php 
            if (isset($_POST['purchase'])) { // Added: checks if form was submitted
                if (empty($_POST['actnum'])) {       
                    echo "No entered account number... <br><br>"; 
                } else { 
                    if ($_POST['actnum'] == "12345") { // Validation: only accepts account number 12345
                        echo "Account number validated...<br><br>"; 
                        echo "Customer Name: <b>" .($_POST['custname']) . "</b><br>"; 
                        echo "Customer Address: <b>" .($_POST['adres']) . "</b><br>"; 
                        echo "Telephone Number: <b>" . ($_POST['telnum']) . "</b><br>"; 

                        // ===== product options =====
                        if ($_POST['app'] == "PSU") { 
                            $ap = "Power Supply (650W)"; 
                            $amt = 2000;
                        } elseif ($_POST['app'] == "MB") { 
                            $ap = "Motherboard (B450)"; 
                            $amt = 5000; 
                        } elseif ($_POST['app'] == "Mouse") { 
                            $ap = "Gaming Mouse"; 
                            $amt = 800; 
                        } elseif ($_POST['app'] == "Keyboard") { 
                            $ap = "Mechanical Keyboard"; 
                            $amt = 2200; 
                        } elseif ($_POST['app'] == "Monitor") { 
                            $ap = "Monitor (24 inch LED)"; 
                            $amt = 6000; 
                        } elseif ($_POST['app'] == "DDR5") { 
                            $ap = "DDR5 RAM (16GB)"; 
                            $amt = 4500; 
                        } elseif ($_POST['app'] == "RTX2050") { 
                            $ap = "RTX Graphics Card 2050"; 
                            $amt = 15000; 
                        } elseif ($_POST['app'] == "RTX3050") { 
                            $ap = "RTX Graphics Card 3050"; 
                            $amt = 20000; 
                        } elseif ($_POST['app'] == "RTX4050") { 
                            $ap = "RTX Graphics Card 4050"; 
                            $amt = 28000; 
                        } elseif ($_POST['app'] == "RTX5050") { 
                            $ap = "RTX Graphics Card 5050"; 
                            $amt = 35000; 
                        } else {
                            $ap = "Unknown Item"; // if no valid selection
                            $amt = 0;
                        }

                        echo "Item Purchased: <b>$ap</b><br>"; 
                        echo "Amount: <b>&#8369;" . number_format($amt, 2) . "</b><br>";
                        echo "Type of Payment: <b>" . $_POST['pay'] . "</b><br>"; 

                        // ===== Payment calculation =====
                        if ($_POST['pay'] == "Cash") { 
                            $ta = $amt - ($amt * 0.05); // Discount 5% for cash
                        } elseif ($_POST['pay'] == "Charge") { 
                            $ta = $amt + ($amt * 0.05); // Add 5% for charge
                        } else {  
                            $ta = 0; // No payment type selected
                        } 

                        echo "Total Amount: <b>&#8369;" . number_format($ta, 2) . "</b><br>"; 
                    } else { 
                        echo "Invalid Account number..."; // Error if account number not 12345
                    } 
                } 
            } 
			// <!-- Made by Valdecantos, Lantis D. and Indolos, Dustin Kwerr A. BSIT - 23 -->
            ?> 
        </div>
    </div>
</body> 
</html>
