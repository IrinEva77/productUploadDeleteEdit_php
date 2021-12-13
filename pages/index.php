<?php include 'includes/header.php';?>



<section class="py-5">
    <div class="container">
        <div class="row">
            <?php foreach ($products as $product){ extract($product)?>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="<?php echo $image;?> " alt="" class="card-img-top" height="200" width="100">
                    <div class="card-body">
                        <h3><?php echo $name ?></h3>
                        <h4><?php echo $price ?></h4>
                        <a href="action.php?status=detail&id=<?php echo $id; ?>" class="btn btn-info">Detail</a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>

<?php include 'includes/footer.php';?>

