<div style="padding: 10px 0px">
    <div class="card white" style="text-align: left">
       <div class="class-inner">
           <div class="card-img"><img src="<?php echo $product['img'] ?>" alt="<?php echo $product['name'] ?>"/></div>
           <h3 class="card-title" title="<?php echo $product['name'] ?>"><a><?php echo $product['name'] ?></a></h3>
           <p class="card-price"><?php echo $product['price'] ?></p>
           <div class="card-features">
               <?php $i=0; foreach($product["key_specs"] as $key => $value){ if($i < 4){ ?>
                    <div class="feature"><span class="feature-title"><?php echo $key; ?> : </span><span class="feature-value"><?php echo $value; ?></span></div>
                <?php $i++; }}?>
           </div>
       </div>
    </div>
</div>

