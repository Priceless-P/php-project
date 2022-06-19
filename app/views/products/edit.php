<?php
require_once APPROOT.'/views/inc/header.php'; ?>
<h1>Edit Product</h1>

    <form action="<?php echo APPROOT; ?>/products/edit/<?php echo $data['id']; ?>" method="post">
        
        <h1><?var_dump( $data); ?></h1>
        
 <label for='sku'>SKU:<sup>*</sup></label>
 <input type='text' name='SKU'  value="<?php echo $data['SKU']; ?>">
 
 <label for='name' >Name:<sup>*</sup></label>
 <input type='text' name='Name' value="<?= $data['Name']; ?>">
 
 
 <label for='price' >Price:<sup>*</sup></label>
 <input type='text' name='Price' value="<?echo $data['Price']; ?>" ><br />
 
  
 <label>Select </label>
 <select name='Type' value="<?echo $data['Type'] ?>" onchange="prodType(this.value);" id = "myDropDown">
 <option value ="" selected hidden>Select</option>
 <option value="Book">Book</option>
 <option value="DVD">DVD</option>
 <option value="Furniture">Furniture</option>
 </select>
 <div class="fieldbox" id="acme_disc_attributes">
      <label>Size</label>
      <input type="text" name="size" value="">
    </div>

    <div class="fieldbox" id="war_peace_attributes">
      <label>Weight</label>
      <input type="text" name="weight" value="">
    </div>

    <div class="fieldbox" id="chair_attributes">
      <label>Length</label>
      <input type="text" name="length" ><br>
      <label>Width</label>
      <input type="text" name="width"><br>
      <label>Height</label>
      <input type="text" name="height"><br>
    </div>
    <button type ='submit' value="submit">Submit </button>
    <script language="javascript" type="text/javascript">
  const map = {
  "Book": "acme_disc_attributes",
  "DVD": "war_peace_attributes",
  "Furniture": "chair_attributes"
};

function prodType(value) {
  document
    .querySelectorAll(".fieldbox")
    .forEach((node) => (node.style.display = "none"));

  document.getElementById(map[value]).style.display = "block";
}

</script>
</form>


<?php
require_once APPROOT.'/views/inc/footer.php'; ?>