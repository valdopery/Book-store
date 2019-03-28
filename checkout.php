<?php
    session_start();
    
	
	
	
	
	$database_name = "store";
    $con = mysqli_connect("localhost","root","",$database_name);

    if (isset($_POST["add"])){
        if (isset($_SESSION["cart"])){
            $item_array_id = array_column($_SESSION["cart"],"product_id");
            if (!in_array($_GET["id"],$item_array_id)){
                $count = count($_SESSION["cart"]);
                $item_array = array(
                    'product_id' => $_GET["id"],
                    'item_name' => $_POST["hidden_name"],
                    'product_price' => $_POST["hidden_price"],
                    'item_quantity' => $_POST["quantity"],
                );
                $_SESSION["cart"][$count] = $item_array;
                echo '<script>window.location="novel.php"</script>';
            }else{
                echo '<script>alert("Product is already Added to Cart")</script>';
                echo '<script>window.location="novel.php"</script>';
            }
        }else{
            $item_array = array(
                'product_id' => $_GET["id"],
                'item_name' => $_POST["hidden_name"],
                'product_price' => $_POST["hidden_price"],
                'item_quantity' => $_POST["quantity"],
            );
            $_SESSION["cart"][0] = $item_array;
        }
    }

    if (isset($_GET["action"])){
        if ($_GET["action"] == "delete"){
            foreach ($_SESSION["cart"] as $keys => $value){
                if ($value["product_id"] == $_GET["id"]){
                    unset($_SESSION["cart"][$keys]);
                    echo '<script>alert("Product has been Removed...!")</script>';
                    echo '<script>window.location="novel.php"</script>';
                }
            }
        }
    }
?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shopping Cart</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <style>
        @import url('https://fonts.googleapis.com/css?family=Titillium+Web');

        *{
            font-family: 'Titillium Web', sans-serif;
        }
        .product{
			
            border: 1px solid #eaeaec;
            margin: -1px 19px 3px -1px;
            padding: 10px;
            text-align: center;
            background-color: #efefef;
        }
        table, th, tr{
            text-align: center;
        }
        .title2{
            text-align: center;
            color: #66afe9;
            background-color: #efefef;
            padding: 2%;
        }
        h2{
            text-align: center;
            color: #66afe9;
            background-color: #efefef;
            padding: 2%;
        }
        table th{
            background-color: #efefef;
        }
		
		.container .checkout a{
			font-family: courier;
			text-transform: uppercase;
			font-size: 18px;
			width: 240px;
			height: 25x;
			border-radius: 80px;
			line-height: 16px;
			text-align: center;
			border: 1px solid #FC8200;
			display: black;
			text-decoration: none;
			color: #FC8200;
			position:relative;
			overflow:hidden;
			background: transparent;
			transition: .9s;
			left:900px;
			bottom: 14px;
		}
		.container .checkout a:hover{
			border: 1px solid #FC8200;
			color: #fff;
			background-color:#FC8200;
		}	
		.container .table-responsive .shipping p{
			font-size:18px;
			font-family: Courier;
		
		}
		.container .logout ul{
		float:right;
		position: relative;
		bottom: 50px;
		
		}	
		.container .logout ul:hover{
		color:green;
		}			
			
		
    </style>
</head>
<body>

    <div class="container" style="">
        <h2>Order Successfull</h2>
       
         <div class="logout"><ul><a href="login.php" class="btn">Logout</a></ul></div>

        <div style="clear: both"></div>
        <h3 class="title2">Order Summary</h3>
        <div class="table-responsive">
            <table class="table table-bordered">
            <tr>
                <th width="30%">Product Name</th>
                <th width="10%">Quantity</th>
                <th width="13%">Price Details</th>
                <th width="10%">Total Price</th>
                <th width="17%">Cancel Product</th>
            </tr>

            <?php
                if(!empty($_SESSION["cart"])){
                    $total = 0;
                    foreach ($_SESSION["cart"] as $key => $value) {
                        ?>
                        <tr>
                            <td><?php echo $value["item_name"]; ?></td>
                            <td><?php echo $value["item_quantity"]; ?></td>
                            <td>$ <?php echo $value["product_price"]; ?></td>
                            <td>
                                $ <?php echo number_format($value["item_quantity"] * $value["product_price"], 2); ?></td>
                            <td><a href="novel.php?action=delete&id=<?php echo $value["product_id"]; ?>"><span
                                        class="text-danger">Remove Item</span></a></td>

                        </tr>
                        <?php
                        $total = $total + ($value["item_quantity"] * $value["product_price"]);
						$_GET['amount'] = $total;
                    }
                        ?>
                        <tr>
                            <td colspan="3" align="right">Total</td>
                            <th align="right">$ <?php echo number_format($total, 2); ?></th>
                            <td></td>
                        </tr>
						
                        <?php
						
						
						
						
                    }
                ?>
				<p>
				<div class="shipping">
					<p style="font-weight: bold">Shipping Details :</p>
				
				<p><?php 	echo $_SESSION['name'];  ?>&nbsp  <br>
					<?php		echo $_SESSION['address']; ?>,
					<?php		echo $_SESSION['landmark']; ?>,
					<?php		echo $_SESSION['city']; ?>,
					<?php		echo $_SESSION['state']; ?>,
					<?php		echo $_SESSION['pincode']; ?>


				</p></p></div>
            </table>
        </div>
		
		<div class="checkout">
						
						<a href="home.php" class="btn">Continue Shopping</a>
			
			
			</div>
			
    </div>


</body>
</html>
