<h1 class="centered">
    All Machines
</h1>
<hr>
<?php  
    // $listProducts = $products;
    foreach($listProductsAll as $listGroup => $listProduct){?>
        <div class="group-wrap">
        <h2><?php echo $listGroup; ?></h2>
        <?php
        foreach($listProduct as $key => $single){?>
            <div class="prodCard">
                <div class="card-left">
                    <img src="<?php echo $single['img'] ?>" alt="<?php echo $single['name'] ?>"/>
                </div>
                <div class="card-right">
                    <h3><?php echo $single['name'] ?></h3>
                    <p><span>Approx. Price: </span><?php echo $single['price'] ?></p>
                    <p>Key Product Features:</p>
                    <ul>
                    <?php
                        foreach($single["key_specs"] as $title => $spec){?>
                            <li><span><?php echo $title; ?></span><span><?php echo $spec; ?></span></li> 
                        <?php } ?>
                    </ul>  
                </div>
            </div>
        <?php } ?>
        </div>
    <?php
    }
?>
