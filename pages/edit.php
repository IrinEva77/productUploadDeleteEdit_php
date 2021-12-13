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
                        <div class="h3 text-center text-warning font-weight-bolder">Edit Product</div>
                    </div>
                    <div class="card-body">
                        <h4 class="text-center text-success mb-4">
                            <?php echo isset($message) ? $message : '';?>
                        </h4>
                        <form action="action.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <label for="pn" class="font-weight-bolder text-uppercase text-info">Product Name</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text" value="<?php echo $name; ?>" name="name" id="pn" class="form-control border-info">
                                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <label for="pp" class="font-weight-bolder text-uppercase text-info">Product Price</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="number" value="<?php echo $price; ?>" name="price" id="pp" class="form-control border-info">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <label for="sa" class="font-weight-bolder text-uppercase text-info">Stock Amount</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="number" value="<?php echo $stock; ?>" name="stock" id="sa" class="form-control border-info">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <label for="pd" class="font-weight-bolder text-uppercase text-info">Product Description</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <textarea name="description" id="pd" class="form-control border-info"><?php echo $description; ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <label for="pi" class="font-weight-bolder text-uppercase text-info">Product Image</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="file" name="image" id="pi" class="form-control-file">
                                        <img src="<?php echo $image; ?>" alt="Edit Product Image" height="100" width="150" class="mt-2 border border-info rounded">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-4"></div>
                                    <div class="col-lg-8">
                                        <input type="submit" name="updateBtn" value="Update Product" class="btn btn-dark btn-block text-warning text-uppercase font-weight-bolder">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Add Section Ends Here-->

<?php include 'includes/footer.php'; ?>