<?php include('header.php');

///print_r($setting);
if(isset($_POST['submit'])){


 extract($_POST);
 
$category1_id=$_GET['cate_id'];
$name=mysqli_real_escape_string($conn, $name);

 $dsgf = mysqli_query($conn,"INSERT INTO `category2`(`category1_id`,`name`)VALUES('$category1_id','$name')");

  if($dsgf){

$message="<span style='color:green'>Successfully</span>";
  echo '<script>window.location="category2.php?msg=add new text.."</script>';


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
                                <div class="muted pull-left">Category2</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
<!--                                <span id="form_abc2_data"></span>

-->                                    <form class="form-horizontal"  enctype="multipart/form-data" method="post">
                                      <fieldset>
                                        <legend>Add Category2 </legend>
                                        
                                        <div class="control-group">
                                          <label class="control-label" for="typeahead"> Name </label>
                                          <div class="controls">
                                            <input type="text" name="name" required class="span6" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
                                          
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
		