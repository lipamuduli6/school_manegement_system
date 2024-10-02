<?php

include("headerSHOP.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center border rounded bg-light my-5">
                <h1>MY CART</h1>
            </div>

            <div class="col-lg-9">
                <table class="table">
                    <thead class="text-center">
                        <tr>
                            <th scope="col">Serial No.</th>
                            <th scope="col">Item Name</th>
                            <th scope="col">Item price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php
                        $total = 0;
                        if(isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
                            foreach($_SESSION['cart'] as $key => $value) {
                                $total += ($value['Price'] * $value['Quantity']);
                                echo "<tr>";
                                echo "<td>" . ($key + 1) . "</td>";
                                echo "<td>" . $value['Item_Name'] . "</td>";
                                echo "<td>" . $value['Price'] . "</td>";
                                echo "<td><input class='text-center' type='number' value='" . $value['Quantity'] . "' min='1' max='10' data-key='$key'></td>";
                                echo "<td>
                                    <form action='manage_cart.php' method='POST'>
                                        <button name='remove_Item' class='btn btn-small btn-outline-danger'>REMOVE</button>
                                        <input type='hidden' name='Item-Name' value='" . $value['Item_Name'] . "'>
                                    </form>
                                </td>";
                                echo "</tr>";
                            }
                        } else {
                          
                        }
                        ?>
                    </tbody>
                </table>
            </div>

            <div class="col-lg-3">
                <div class="border bg-light rounded p-4">
                    <h4>Total:</h4>
                    <h5 class="text-right"><?php echo $total ?></h5>
                    <br>
                    <form action="checkout.php" method="POST">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Cash on Delivery
                            </label>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary btn-block">Make Purchase</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    
    <script>
        
        document.querySelectorAll('input[type="number"]').forEach(function(input) {
            input.addEventListener('change', function() {
                var key = this.getAttribute('data-key');
                var quantity = this.value;
               
            });
        });
    </script>
</body>
</html>
