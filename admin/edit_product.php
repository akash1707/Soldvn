<?php include('header.php');


$product = mysqli_fetch_array(mysqli_query($conn,"select * from product WHERE `id`='".$_GET['edit']."'"));

///print_r($setting);
if(isset($_POST['submit'])){


 extract($_POST);


 $dsgf = mysqli_query($conn,"UPDATE `product` SET `user_id`='$user_id',`cat_id1`='$cat_id1',`cat_id2`='cat_id2',`cat_id3`='cat_id3',`name`='$name',`price`='$price',`condition`='$condition',`location`='$location',`description`='$description',`quantity`='$quantity',`delivery_type`='$delivery_type',`delievery_price`='$delievery_price',`status`='status',`selling_type`='$selling_type',`image`='$image'");

  if($dsgf){

echo"<span style='color:green'>Successfully</span>";
  echo'<script>window.location="product.php?msg=add new text.."</script>';


  }
else{
echo'<span style="color:red">Failed</span>';
	
	}


}

?>




                <div class="span9" id="content">
                      <!-- morris stacked chart -->

                     <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Product</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
<!--                                <span id="form_abc2_data"></span>

-->                                    <form class="form-horizontal"  enctype="multipart/form-data" method="post">
                                      <fieldset>
                                        <legend>Edit Product </legend>
                                         <div class="control-group">
                                          <label class="control-label" for="typeahead">Category1 </label>
                                          <div class="controls">
                                            <select type="text" name="cat_id1" required="required" class="span6" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
                                  <option>Select Role</option>                 
                                <?php $rol1=mysqli_query($conn,"SELECT * FROM `category1`");
								
								while($role2=mysqli_fetch_array($rol1)){
								
							
								?>
                                
                                  <option value="<?php echo $role2['id'];?>"><?php echo $role2['name'];?></option>            
                                            <?php }?>
                                            
                                            </select>
                                          
                                          </div>
                                        </div> <div class="control-group">
                                          <label class="control-label" for="typeahead">Category2 </label>
                                          <div class="controls">
                                            <select type="text" value="<?php echo $role4['id'];?>" name="cat_id2" required="required" class="span6" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
                                  <option>Select Role</option>                 
                                <?php $rol3=mysqli_query($conn,"SELECT * FROM `category2`");
								
								while($role4=mysqli_fetch_array($rol3)){
								
							
								?>
                                
                                  <option value="<?php echo $role4['id'];?>"><?php echo $role4['name'];?></option>            
                                            <?php }?>
                                            
                                            </select>
                                          
                                          </div>
                                        </div> 
                                        
                                        <div class="control-group">
                                          <label class="control-label" for="typeahead">Category3 </label>
                                          <div class="controls">
                                            <select type="text" name="cat_id3" value="<?php echo $role4['id'];?>" required="required" class="span6" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
                                  <option>Select Role</option>                 
                                <?php $rol5=mysqli_query($conn,"SELECT * FROM `category3`");
								
								while($role6=mysqli_fetch_array($rol5)){
								
							
								?>
                                
                                  <option value="<?php echo $role6['id'];?>"><?php echo $role6['name'];?></option>            
                                            <?php }?>
                                            
                                            </select>
                                          
                                          </div>
                                        </div>
                                        
                                          <div class="control-group">
                                          <label class="control-label" for="typeahead">User</label>
                                          <div class="controls">
                                            <select type="text" name="user_id" required="required" class="span6" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
                                  <option>Select Role</option>                 
                                <?php $rol=mysqli_query($conn,"SELECT * FROM `role`");
								
								while($role=mysqli_fetch_array($rol)){
								
							
								?>
                                
                                  <option value="<?php echo $role['id'];?>"><?php echo $product['role'];?></option>            
                                            <?php }?>
                                            
                                            </select>
                                          
                                          </div>
                                        </div>
                                        
                                        <div class="control-group">
                                          <label class="control-label" for="typeahead"> Name </label>
                                          <div class="controls">
                                            <input type="text" name="name" value="<?php echo $product['id'];?>" required class="span6" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
                                          
                                          </div>
                                        </div>
                                        
                                        
                                        
                                        <div class="control-group">
                                          <label class="control-label" for="typeahead">Price  </label>
                                          <div class="controls">
                                            <input type="number" name="price" value="<?php echo $product['id'];?>" required class="span6" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
                                          
                                          </div>
                                        </div>
                                        
                                        
                                        <div class="control-group">
                                          <label class="control-label" for="typeahead"> Condition </label>
                                          <div class="controls">
                                            <input type="text" value="<?php echo $product['id'];?>" value="<?php echo $product['id'];?>"  name="condition" required class="span6" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
                                          
                                          </div>
                                        </div>
                                        
                                                                                
                                        
                                        <div class="control-group">
                                          <label class="control-label" for="typeahead">Location </label>
                                          <div class="controls">
                                            <input type="text" name="location" value="<?php echo $product['id'];?>"  required class="span6" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
                                          
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label" for="typeahead">Description </label>
                                          <div class="controls">
                                            <input type="text" name="description" required class="span6" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
                                          
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label" for="typeahead">Quantity </label>
                                          <div class="controls">
                                            <input type="text" name="quantity" value="<?php echo $product['id'];?>"  required class="span6" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
                                          
                                          </div>
                                        </div>
                                        
                                        <div class="control-group">
                                          <label class="control-label" for="typeahead">Delievery Price </label>
                                          <div class="controls">
                                            <input type="text" name="delievery_price" value="<?php echo $product['id'];?>"  required class="span6" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
                                          
                                          </div>
                                        </div>
                                        
                                        
                                        
                               <div class="control-group">
                                          <label class="control-label" for="typeahead">Delivery Type </label>
                                          <div class="controls">
                                            <select type="text" name="delivery_type" value="<?php echo $product['id'];?>"  required="required" class="span6" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
                                  <option>Select Delivery Type</option>                 
                               <option value="0"> free</option>    
                               
                               
                               <option value="1"> paid</option>    
                                            </select>
                                          
                                          </div>
                                        </div>
                                       
                                       
                                          <div class="control-group">
                                          <label class="control-label" for="typeahead">Status </label>
                                          <div class="controls">
                                            <select type="text" name="status" value="<?php echo $product['id'];?>"  required="required" class="span6" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
                                    <option>Select Status</option>                 
                               <option value="0">active</option>    
                               
                               
                               <option value="1"> deactive</option> 
                               <option value="2"> sold out</option>    
                                            </select>
                                          
                                          </div>
                                        </div>
                                           <div class="control-group">
                                          <label class="control-label" for="typeahead">Selling Type </label>
                                          <div class="controls">
                                            <select type="text" name="selling_type" value="<?php echo $product['id'];?>"   required="required" class="span6" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
                                  <option>Select Selling Type</option>                 
                                <option value="0">normal</option>    
                                  <option value="1">bid type</option>    
                                            </select>
                                          
                                          </div>
                                        </div>
                                           <div class="control-group">
                                          <label class="control-label" for="typeahead">Image </label>
                                          <div class="controls">
                                            <input type="file" name="image" required class="span6" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
                                
                                          </div>
                                        </div>
                                       
                                       
                                       
                                       
                                        <div class="form-actions">
                                          <button type="submit" name="submit" class="btn btn-primary">Submit </button>
                                          
                                        </div>
                                      </fieldset>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>

                     <!-- wizard -->
                    
	            <!-- /wizard -->

                     <!-- validation -->
                     <!-- /validation -->


                </div>
           <?php include('footer.php')?>
		   
           
        </html>
		