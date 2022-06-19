<?php
require_once APPROOT.'/views/inc/header.php'; ?>
<div class="container cart">
    <img src="<? echo URLROOT;?>/img/cart.png">
    <p id="cartText"></p>
</div>
<form method="post" action="ProductsController/deleted">
   
      <input type="submit" name="Deleted" value="MASS DELETE"class="btn btn-danger"> 

<div style="display:flex; justify-content:center; align-item:center;">

<?php foreach($data['products'] as $product): ?>
<div class="card text-center" style="width: 20rem;">
  <div class="card-header">
    
  </div>
  <div class="card-body">
      <?$sku=$product->SKU ?>
    <input type="checkbox" name="checkboxes[<? echo $sku ?>]" value="<? echo $sku?>" >
    
    <div>
       
    <p class="card-text">SKU: <? echo $product ->SKU ?></p>
    <p class="card-text">Name: <? echo $product ->Name ?></p>
    <p class="card-text">Price ($): <? echo $product ->Price ?></p>
    <p class="card-text"> <? if($product ->Type==='DVD')
    { echo $product->Weight;}
    else if($product ->Type==='Book') {echo $product->Size;}
    else{ echo $product->Height;}?></p>
     <a href="<?echo URLROOT; ?>/products/edit/<?echo $product->id ?>" class="btn btn-dark">Edit</a>
    </div>
  </div>
  <div class="card-footer text-muted">
   <a onclick="cart();" class="btn btn-primary">Add to Cart</a>
  </div>
 <br>
<?php endforeach ?>

</div>
</form>
<div id='root'></div>
 
 
<?php
require_once APPROOT.'/views/inc/footer.php'; ?>