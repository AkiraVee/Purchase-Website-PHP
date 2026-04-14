<!-- Filename: PurchaseIn.html -->
<html> 
<head>
    <title>ON-LINE PURCHASING</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head> 
<body> 
    <div class="page-container">
        <h1>
            <font face="Tahoma">
                <center>On-Line Purchasing</center>
            </font>
        </h1> 
        <hr noshade color="red" size="5"> 

        <p>Please complete the entry:</p> 

        <div class="form-container">
            <form action="PurchaseOut_ValdecantosIndolos.php" method="post"> 
                <table> 
                    <font face="Tahoma"> 
                        <tr> 
                            <td>Customer Name:</td>    
                            <td><input type="text" name="custname"></td> 
                        </tr> 
                        <tr> 
                            <td>Address:</td> 
                            <td><input type="text" name="adres" size="50"></td> 
                        </tr> 
                        <tr> 
                            <td>Telephone Number:</td> 
                            <td><input type="text" name="telnum"></td> 
                        </tr> 
                    </font>
                </table> 

                <h3>List of Computer Parts</h3>
                <table>
                    <tr>
                        <td><img src="images/ddr3.jpg" alt="DDR3 RAM" width="120"></td>
                        <td>DDR3 RAM (8GB) ₱1,200 pesos</td>
                    </tr>
                    <tr>
                        <td><img src="images/ddr4.jpg" alt="DDR4 RAM" width="120"></td>
                        <td>DDR4 RAM (16GB) ₱2,800 pesos</td>
                    </tr>
					<tr>
						<td><img src="images/ddr5.jpg" alt="DDR5 RAM" width="120"></td>
						<td>DDR5 RAM (16GB) ₱4,500 pesos</td>
					</tr>
                    <tr>
                        <td><img src="images/ssd.jpg" alt="SSD" width="120"></td>
                        <td>SSD (240GB) ₱1,500 pesos</td>
                    </tr>
                    <tr>
                        <td><img src="images/nvme.jpg" alt="NVMe Storage" width="120"></td>
                        <td>NVMe Storage (1TB) ₱4,500 pesos</td>
                    </tr>
                    <tr>
                        <td><img src="images/gpu.jpg" alt="Graphics Card" width="120"></td>
                        <td>Graphics Card (GTX 1660) ₱12,000 pesos</td>
                    </tr>
					<tr>
						<td><img src="images/psu.jpg" alt="Power Supply" width="120"></td>
						<td>Power Supply (650W) ₱2,000 pesos</td>
					</tr>
					<tr>
						<td><img src="images/mb.jpg" alt="Motherboard B450" width="120"></td>
						<td>Motherboard (B450) ₱5,000 pesos</td>
					</tr>
					<tr>
						<td><img src="images/mouse.jpg" alt="Gaming Mouse" width="120"></td>
						<td>Gaming Mouse ₱1,200 pesos</td>
					</tr>
					<tr>
						<td><img src="images/keyboard.jpg" alt="Mechanical Keyboard" width="120"></td>
						<td>Mechanical Keyboard ₱2,200 pesos</td>
					</tr>
					<tr>
						<td><img src="images/monitor.jpg" alt="Monitor 24 inch LED" width="120"></td>
						<td>Monitor (24 inch LED) ₱6,000 pesos</td>
					</tr>
					<tr>
						<td><img src="images/rtx2050.jpg" alt="RTX 2050" width="120"></td>
						<td>RTX Graphics Card 2050 ₱15,000 pesos</td>
					</tr>
					<tr>
						<td><img src="images/rtx3050.jpg" alt="RTX 3050" width="120"></td>
						<td>RTX Graphics Card 3050 ₱20,000 pesos</td>
					</tr>
					<tr>
						<td><img src="images/rtx4050.jpg" alt="RTX 4050" width="120"></td>
						<td>RTX Graphics Card 4050 ₱28,000 pesos</td>
					</tr>
					<tr>
						<td><img src="images/rtx5050.jpg" alt="RTX 5050" width="120"></td>
						<td>RTX Graphics Card 5050 ₱35,000 pesos</td>
					</tr>
                </table>

                <!-- Dropdown for actual selection -->
                <p>Select Item:</p>
                <select name="app">
					<option value="DDR3">DDR3 RAM (8GB) - ₱1,200.00</option>
					<option value="DDR4">DDR4 RAM (16GB) - ₱2,800.00</option>
					<option value="DDR5"> DDR5 RAM (16GB) - ₱4,500.00</option>
					<option value="SSD">SSD (240GB) - ₱1,500.00</option>
					<option value="NVMe">NVMe Storage (1TB) - ₱4,500.00</option>
					<option value="GPU">Graphics Card (GTX 1660) - ₱12,000.00</option>
					<option value="PSU">Power Supply (650W) - ₱2,000.00</option>
					<option value="MB">Motherboard (B450) - ₱5,000.00</option>
					<option value="Mouse">Gaming Mouse - ₱1,200.00</option>
					<option value="Keyboard">Mechanical Keyboard - ₱2,200.00</option>
					<option value="Monitor">Monitor (24 inch LED) - ₱6,000.00</option>
					<option value="RTX2050"> RTX Graphics Card 2050 - ₱15,000.00</option>
					<option value="RTX3050"> RTX Graphics Card 3050 - ₱20,000.00</option>
					<option value="RTX405₀"> RTX Graphics Card 4₀5₀ - ₱28,000.00</option>
					<option value="RTX5₀5₀"> RTX Graphics Card 5₀5₀ - ₱35,000.00</option>
				</select>

                <p>Type of Payment:</p>
                <input type="radio" name="pay" value="Cash">Cash
                <input type="radio" name="pay" value="Charge">Charge 

                <p>Enter your account number here:</p>
                <input type="password" name="actnum" maxlength="5">  

                <br><br>
                <input type="submit" value="Purchase" name="purchase"> 
                <input type="reset" value="Clear Entry"> 
            </form> 
        </div>
    </div>
	<!-- Made by Valdecantos, Lantis D. and Indolos, Dustin Kwerr A. BSIT - 23 -->
</body> 
</html>
