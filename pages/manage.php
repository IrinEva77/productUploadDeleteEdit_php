<?php include 'includes/header.php'; ?>

<?php
if (!isset($_SESSION['id']))
{
    header('location:login.php');
}
?>

<!--Add Section Starts Here-->
<section class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card shadow border-info">
                    <div class="card-header bg-dark">
                        <div class="h3 text-center text-warning font-weight-bolder">Product's Information</div>
                    </div>
                    <div class="card-body">
                        <h3 class="text-center text-success font-weight-bolder">
                            <?php
                                if (isset($_SESSION['message']))
                                {
                                    echo $_SESSION['message'];
                                    unset($_SESSION['message']);
                                }
                            ?>
                        </h3>
                        <h3 class="text-success text-center font-weight-bolder mb-4"><?php echo isset($_SESSION['message']) ? $_SESSION['message'] : ''; ?></h3>
                        <table class="table table-bordered">
                            <thead>
                                <tr class="text-center text-info">
                                    <th>Product Name</th>
                                    <th>Product Price</th>
                                    <th>Stock Amount</th>
                                    <th>Product Image</th>
                                    <th>Take Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($products as $product) {extract($product)?>
                                <tr class="text-center text-success font-weight-bolder">
                                    <td><?php echo $name; ?></td>
                                    <td><?php echo $price; ?></td>
                                    <td><?php echo $stock; ?></td>
                                    <td><img src="<?php echo $image; ?>" alt="Product Image" height="50" width="90"></td>
                                    <td>
                                        <a href="action.php?status=edit&id=<?php echo $id;?>" class="btn btn-sm btn-success font-weight-bolder text-uppercase">Edit</a>
                                        <a href="action.php?status=delete&id=<?php echo $id;?>" class="btn btn-sm btn-danger font-weight-bolder text-uppercase">Delete</a>
                                    </td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Add Section Ends Here-->

<?php include 'includes/footer.php'; ?>