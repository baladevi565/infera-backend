<?php require'sidebar.php'; ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/js/bootstrap-select.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<!--Page Container--> 
<section class="page-container">
<div class="page-content-wrapper">

<!--Main Content-->

<div class="content sm-gutter">
<div class="container-fluid padding-25 sm-padding-10">
<div class="row">
<div class="col-12">
    <div class="block-heading d-flex align-items-center title-pages">
<h5 class="text-truncate">Edit Package</h5>
</div>
</div>


<div class="form-block mb-4">

<form enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" novalidate>


<div class="form-row">
<div class="form-group col-md-12">
<div class="block col-md-12" style="padding-bottom: 35px">

<label class="control-label">Title</label>
<input type="hidden" value="<?php echo $package['package_id']; ?>" name="package_id">
<input type="text" placeholder="Title" value="<?php echo $package['package_title']; ?>" name="package_title" class="form-control" required="">

<label class="control-label">Description</label>
<textarea name="package_description" class="advancedtinymce form-control" id="description" required=""><?php echo $package['package_description']; ?></textarea>


<label>Pricing</label>
<select class="custom-select form-control" name="package_price">
    <option value <?php if(empty($package['package_price'])){ echo "selected"; } ?>>-</option>
    <option value="One time price" <?php if($package['package_price'] == 'One time price'){ echo "selected"; } ?>>One time price</option>
    <option value="Price for 30 days" <?php if($package['package_price'] == 'Price for 30 days'){ echo "selected"; } ?>>Price for 30 days</option>
	<option value="Price for 60 days" <?php if($package['package_price'] == 'Price for 60 days'){ echo "selected"; } ?>>Price for 60 days</option>
	<option value="Price for 90 days" <?php if($package['package_price'] == 'Price for 90 days'){ echo "selected"; } ?>>Price for 90 days</option>
</select>


<label>Products</label>
<input type="hidden" name="product_selected" id="product_selected" value="<?php echo $package['package_products']; ?>" />
	<select class="custom-select form-control selectpicker" multiple name="package_products" aria-label="Default select example" data-live-search="true">
		<?php
		 $sentence = $connect->prepare("SELECT products.*,types.type_title AS type_title FROM products,types WHERE products.product_type = types.type_id ORDER BY product_id DESC"); 
		$sentence->execute();
		foreach($sentence->fetchAll() as $allpros){
		?>
		<option value="<?php print_r($allpros['product_title']); ?>" <?php if (str_contains($package['package_products'], $allpros['product_title'])) {  echo 'selected'; } ?>><?php print_r($allpros['product_title']); ?></option>
		<?php } ?>
	</select>

<label class="control-label">Status</label>

<table>
<tr>
<td>                             <div class="radio radio-success">
<input type="radio" name="package_status" id="radio5" value="1" <?php if($package['package_status']==1){ echo "checked"; } ?>>
<label for="radio5">
Active
</label>
</div></td>
<td>
                      <div class="radio radio-danger">
<input type="radio" name="package_status" id="radio6" value="0" <?php if($package['package_status']==0){ echo "checked"; } ?>>
<label for="radio6">
Inactive
</label>
</div>
</td>
</tr>

</table>

<br/>
<br/>
<div class="action-button">
<input type="submit" name="save" value="Submit" class="btn btn-embossed btn-primary">
<input type="reset" name="reset" value="Reset" class="btn btn-embossed btn-danger">
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script>
	$('.selectpicker').change(function(){
		if($('.selectpicker').length > 3){
			return false;
		}
		$('#product_selected').val($('.selectpicker').val());
	});
</script>
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
