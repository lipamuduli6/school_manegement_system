<?php


include("headerSHOP.php");


$products = [
    ["id" => 1, "name" => "Watch 1", "price" => 880],
    ["id" => 2, "name" => "Watch 2", "price" => 950],
    ["id" => 3, "name" => "Watch 3", "price" => 450],
    ["id" => 4, "name" => "Watch 4", "price" => 550],
];

if (isset($_POST['add_to_cart'])) {
    $id = $_POST['id'];

    
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    $found = false;
    foreach ($_SESSION['cart'] as $key => $item) {
        if ($item['id'] == $id) {
            $_SESSION['cart'][$key]['quantity']++;
            $found = true;
            break;
        }
    }

    if (!$found) {
        foreach ($products as $product) {
            if ($product['id'] == $id) {
                $newItem = [
                    'id' => $product['id'],
                    'name' => $product['name'],
                    'price' => $product['price'],
                    'quantity' => 1
                ];
                $_SESSION['cart'][] = $newItem;
                break;
            }
        }
    }

    header("Location: index.php");
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <!-- Bootstrap CSS link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3">
                <form action="manage_cart.php">
                    <div class="card">
                        <img src="img/tv.jpeg" class="card-img-top" alt="Watch">
                        <div class="card-body">
                            <h5 class="card-title">book 1</h5>
                            <p class="card-text">Price: Rs.880</p>
                            <button type="submit" class="btn btn-info">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="Watch 1">
                            <input type="hidden" name="price" value="880">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="img/watch.jpeg" class="card-img-top" alt="Watch">
                        <div class="card-body">
                            <h5 class="card-title">watch 2</h5>
                            <p class="card-text">Price: Rs.950</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="Watch 2">
                            <input type="hidden" name="price" value="950">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="img/bookl.jpg" class="card-img-top" alt="Watch">
                        <div class="card-body">
                            <h5 class="card-title">book 3</h5>
                            <p class="card-text">Price: Rs.450</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="Watch 3">
                            <input type="hidden" name="price" value="450">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="img/bookl2.jpg" class="card-img-top" alt="Watch">
                        <div class="card-body">
                            <h5 class="card-title">book 4</h5>
                            <p class="card-text">Price: Rs.550</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="Watch 4">
                            <input type="hidden" name="price" value="550">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS link (optional) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
