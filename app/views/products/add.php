<?php
require_once APPROOT.'/views/inc/header.php'; ?>
<div>
    <h3>Add New Item</h3>
 <form action="<?php echo URLROOT; ?>/AddNew" method="post">
 <label for='sku'>SKU:<sup>*</sup></label>
 <input type='text' name='SKU' class="<?php echo(!empty($data['SKU_err'])) ? 'invalis' : ''; ?>" value="">
 
 <label for='name' >Name:<sup>*</sup></label>
 <input type='text' name='Name' class="<?php echo(!empty($data['name_err'])) ? 'invalis' : ''; ?>" value="">
 
 
 <label for='price' >Price:<sup>*</sup></label>
 <input type='text' name='Price' class="<?php echo(!empty($data['price_err'])) ? 'invalis' : ''; ?>" value="" ><br />
 
  
 <label>Select </label>
 <select name='Type' class="<?php echo(!empty($data['type_err'])) ? 'invalis' : ''; ?>" value="" onchange="prodType(this.value);" id = "myDropDown">
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
 <span class="display-error">
     <p class="display-error">
     <?= Validator::getErrForField('SKU')?>
     </p>
     <p class="display-error">
     <?= Validator::getErrForField('Name')?>
     </p>
     <p class="display-error">
     <?= Validator::getErrForField('Price')?>
     </p>
     <p class="display-error">
     <?= Validator::getErrForField('Type')?>
     </p>
 </span>
 
  
 <div id='display'></div>
  <br/>
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
<div id='optiondiv'>
    <?php
     
   // function getInput(){
     //   $options = [
    //'Book' => fn()=> new BookType(),
   // 'DVD' => fn()=> new DVDType(),
   // 'Furniture' => fn()=>  new TableType()
//];
 //$instance = $options[value]();
 //echo $instance->displayInputs();
    //}
    ?>
</div>

 </form> 
 
</div>
<?php
require_once APPROOT.'/views/inc/footer.php';?>