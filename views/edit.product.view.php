<?php require'sidebar.php'; ?>

<!--Page Container--> 
<section class="page-container">
    <div class="page-content-wrapper">

        

        <!--Main Content-->

 <div class="content sm-gutter">
            <div class="container-fluid padding-25 sm-padding-10">
                <div class="row">
                    <div class="col-12">
                                        <div class="block-heading d-flex align-items-center title-pages">
                    <h5 class="text-truncate">Edit Product</h5>
                </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-block mb-4">

<form enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">


<div class="form-row">
  <div class="form-group col-md-12">
    <div class="block col-md-12" style="padding-bottom: 35px">

<input type="hidden" value="<?php echo $product['product_id']; ?>" name="product_id">

   <label class="control-label">Title</label>
   <input type="text" value="<?php echo $product['product_title']; ?>" placeholder="Title" name="product_title" class="form-control" required="">

   <label class="control-label">Description</label>
   <textarea value="" name="product_description" class="advancedtinymce form-control" id="description" required=""><?php echo $product['product_description']; ?></textarea>

   <label class="control-label">Link</label>
   <input type="text" value="<?php echo $product['product_link']; ?>" placeholder="Link" name="product_link" class="form-control" required="">

   <label>Pricing</label>
	<select class="custom-select form-control" name="product_price">
		<option value selected>-</option>
		<option value="One time price" <?php if($product['product_price']=='One time price'){?>selected="selected"<?php } ?> >One time price</option>
		<option value="Price for 30 days" <?php if($product['product_price']=='Price for 30 days'){?>selected="selected"<?php } ?>>Price for 30 days</option>
		<option value="Price for 60 days" <?php if($product['product_price']=='Price for 60 days'){?>selected="selected"<?php } ?>>Price for 60 days</option>
		<option value="Price for 90 days" <?php if($product['product_price']=='Price for 90 days'){?>selected="selected"<?php } ?>>Price for 90 days</option>
	</select>

   <label class="control-label">Type</label>
   <select class="form-control" name="product_type" required>
   <option value="<?php echo $product['product_type']; ?>" selected><?php echo $product['type_title']; ?></option>
    <?php foreach($types_lists as $types_list): ?>
   <option value="<?php echo $types_list['type_id']; ?>"><?php echo $types_list['type_title']; ?></option>
    <?php endforeach; ?>
   </select>
<label>Why you would love it</label>
<textarea placeholder="" name="review_des" class="form-control"><?php echo $product['review_des']; ?></textarea>

<label>Technology</label>
<textarea placeholder="" name="technology" class="form-control"><?php echo $product['technology']; ?></textarea>
					
<label>How it works</label>
<textarea placeholder="" name="howworks" class="form-control"><?php echo $product['hiworks']; ?></textarea>
					
<label>Volume</label>
<textarea placeholder="" name="volume" class="form-control"><?php echo $product['volumn']; ?></textarea>

   <label class="control-label">Featured</label>
   
   <div class="row">
                        <div class="col-sm-1">

                        <?php 


$in = '1';

if (strpos($in, $product['product_featured']) !== false) {
    echo '<div class="radio radio-success"> <input type="radio" name="product_featured" id="radio3" value="'. $product['product_featured'] .'" checked=""> <label for="radio3"> Yes </label> </div>';
}else{
  echo '<div class="radio radio-success"> <input type="radio" name="product_featured" id="radio3" value="' . $in .'"> <label for="radio3"> Yes </label> </div>';
}
                         ?>
                        </div>

                        <div class="col-sm-1">

                        <?php 


$out = '0';

if (strpos($out, $product['product_featured']) !== false) {
    echo '<div class="radio radio-danger"> <input type="radio" name="product_featured" id="radio4" value="0" checked=""> <label for="radio4"> No </label> </div>';
}else{
  echo '<div class="radio radio-danger"> <input type="radio" name="product_featured" id="radio4" value="'. $out .'"> <label for="radio4"> No </label> </div>';
}
                         ?>
                        </div>

                    </div>

   <label class="control-label">Status</label>
   
   <div class="row">
                        <div class="col-sm-1">

                        <?php 


$in = '1';

if (strpos($in, $product['product_status']) !== false) {
    echo '<div class="radio radio-success"> <input type="radio" name="product_status" id="radio5" value="'. $product['product_status'] .'" checked=""> <label for="radio5"> Active </label> </div>';
}else{
  echo '<div class="radio radio-success"> <input type="radio" name="product_status" id="radio5" value="' . $in .'"> <label for="radio5"> Active </label> </div>';
}
                         ?>
                        </div>

                        <div class="col-sm-2">

                        <?php 


$out = '0';

if (strpos($out, $product['product_status']) !== false) {
    echo '<div class="radio radio-danger"> <input type="radio" name="product_status" id="radio6" value="0" checked=""> <label for="radio6"> Inactive </label> </div>';
}else{
  echo '<div class="radio radio-danger"> <input type="radio" name="product_status" id="radio6" value="'. $out .'"> <label for="radio6"> Inactive </label> </div>';
}
                         ?>
                        </div>

                    </div>

        
		<?php 
		$img = $product['product_image'];
		$product['product_image'] = explode(',',$img);
		?>
		<div class="images-per" style="display:none;">
			<label>Image Preview</label>
			<div class="preview-images"></div>
		</div>
		<label >Image</label>
		<div class="allimages">
			
			<?php 
			if(sizeof($product['product_image']) < 5){		?>
		<div class="new-image1" id="image-preview">
		  <label for="image-upload" id="image-label">Choose File</label>
		  <input type="hidden" id="productimg_all" value="<?php echo $img; ?>" name="product_image_save">
		  <input type="file" class="image-input" name="product_image[]" id="image-upload" multiple />
		</div>
		<?php }else{ ?>
			<input type="hidden" value="<?php echo $img; ?>" id="productimg_all" name="product_image_save">
			<input type="file" style="display:none;" name="product_image[]" id="image-upload2" multiple />
		<?php } 
			$i=0;
		?>
		
		<?php
			
			if(!empty($product['product_image'][0])){
			foreach($product['product_image'] as $image){ ?>
				<div class="new-images" id="image-preview" style="background: url(../images/<?php echo $image; ?>);background-size: cover; background-position: center;">
					<div class="closeimg"><i class="fa fa-times"></i></div>
					<input type="hidden" value="<?php echo $image; ?>" id="productimg">
				</div>
			<?php }} ?>
		</div>
<span class="text-danger recomendedsize">Recommended size: <b>650 x 350</b> </span>
<br/>
<br/>

   <div class="action-button">
   <input type="submit" name="update" value="Update" class="btn btn-embossed btn-primary">
   <a onclick="alertdelete();">
   <input name="trash" value="Delete" class="btn btn-embossed btn-danger" style="width: 80px;"></a>
  
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>



    <script type="text/javascript">
   function alertdelete() {
   swal({ title: "Are you sure?", text: "You will not be able to recover this item!", type: "warning",cancelButtonClass: "btn-default btn-sm", showCancelButton: true, confirmButtonClass: "btn-danger btn-sm", confirmButtonText: "Yes, delete it!", closeOnConfirm: false }, function(){window.location.href = "<?php echo SITE_URL ?>/controller/delete_product.php?id=<?php echo $product['product_id']; ?>" });}
	
	
    
</script>
   </div>

</div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
