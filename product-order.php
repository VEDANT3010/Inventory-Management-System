<?php
session_start();

// Rest of your code

if (!isset($_SESSION['user'])) {
    header('location: login.php');
    exit(); // Add exit after header redirect
}

$show_table = 'products';
$products = include('database/show.php');
$products = json_encode($products);

?>

<!DOCTYPE html>
<html>

<head>
    <title>Order Product - Inventory Management System</title>
    <?php include('partials/app-header-scripts.php'); ?>
</head>

<body>
    <div id="dashboardMainContainer">
        <?php include('partials/app-sidebar.php'); ?>
        <div class="dashboard_content_container" id="dashboard_content_container">
            <?php include('partials/app-topnav.php'); ?>
            <div class="dashboard_content">
                <div class="dashboard_content_main">
                    <div class="row">
                        <div class="column column-12">
                            <h1 class="section_header"><i class="fa fa-plus"></i>Order Product</h1>
                            <div>
                                <div class="alignRight">
                                    <button class="orderProductBtn">Add New Product Order</button>
                                </div>
                                <div id="orderProductLists">
                                    <div class="orderProductRow">
                                        <div>
                                            <label for="product_name">Product Name</label>
                                            <select name="product_name" class="productNameSelect" id="product_name">
                                                <option value="">Product 1</option>
                                            </select>
                                        </div>

                                        <div class="supplierRows">
                                             <div class="row">
                                                 <div style="width:50%;">
                                                 <p class="supplierName">Supplier 1</p>
                                                 </div>

                                                 <div style="width: 50%;">
                                                  <label for="quantity">Quantity</label> <!-- Changed id and name to "quantity" -->
                                                  <input type="text" class="appFormInput" id="quantity" placeholder="Enter the quantity..." name="quantity" /> <!-- Changed id and name to "quantity" -->
                                               </div>
                                              </div>

                                              <div class="row">
                                                 <div style="width:50%;">
                                                 <p class="supplierName">Supplier 1</p>
                                                 </div>

                                                 <div style="width: 50%;">
                                                  <label for="quantity">Quantity</label> <!-- Changed id and name to "quantity" -->
                                                  <input type="text" class="appFormInput" id="quantity" placeholder="Enter the quantity..." name="quantity" /> <!-- Changed id and name to "quantity" -->
                                               </div>
                                              </div>

                                              
                                              <div class="row">
                                                 <div style="width:50%;">
                                                 <p class="supplierName">Supplier 1</p>
                                                 </div>

                                                 <div style="width: 50%;">
                                                  <label for="quantity">Quantity</label> <!-- Changed id and name to "quantity" -->
                                                  <input type="text" class="appFormInput" id="quantity" placeholder="Enter the quantity..." name="quantity" /> <!-- Changed id and name to "quantity" -->
                                               </div>
                                              </div>

                                        </div>

                                        
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('partials/app-scripts.php'); ?>
    <script>
        var products = <?= json_encode($products) ?>; // Changed to use json_encode() to ensure proper encoding
        console.log(products);
    </script>
</body>

</html>
