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
<h5 class="text-truncate">New Product</h5>
</div>
</div>

<div class="col-md-12">
<div class="form-block mb-4">

<form enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" novalidate>


<div class="form-row">
<div class="form-group col-md-12">
<div class="block col-md-12" style="padding-bottom: 35px">

<label class="control-label">Title</label>
<input type="text" value="" placeholder="Title" name="product_title" class="form-control" required="">

<label class="control-label">Description</label>
<textarea value="" name="product_description" class="advancedtinymce form-control" id="description" required=""></textarea>

<label class="control-label">Affiliate Link</label>
<input type="text" value="" placeholder="Affiliate Link" name="product_link" class="form-control" required="">

<label>Pricing</label>
<select class="custom-select form-control" name="product_price">
    <option value selected>-</option>
    <option value="One time price">One time price</option>
    <option value="Price for 30 days">Price for 30 days</option>
	<option value="Price for 60 days">Price for 60 days</option>
	<option value="Price for 90 days">Price for 90 days</option>
</select>

<label class="control-label">Type</label>
<select class="form-control" name="product_type" required="">
<?php foreach($types_lists as $item): ?>
<option value="<?php echo $item['type_id']; ?>"><?php echo $item['type_title']; ?></option>
<?php endforeach; ?>
</select>

					
<label>Why you would love it</label>
<textarea placeholder="" name="review_des" class="form-control"></textarea>

<label>Technology</label>
<textarea placeholder="" name="technology" class="form-control"></textarea>
					
<label>How it works</label>
<textarea placeholder="" name="howworks" class="form-control"></textarea>
					
<label>Volume</label>
<textarea placeholder="" name="volume" class="form-control"></textarea>
					

<label class="control-label">Featured</label>

<style type="text/css">
td{padding: 0 .5rem !important;}
</style>
<table>
<tr>
<td>                             <div class="radio radio-success">
<input type="radio" name="product_featured" id="radio3" value="1">
<label for="radio3">
Yes
</label>
</div></td>
<td>
                      <div class="radio radio-danger">
<input type="radio" name="product_featured" id="radio4" value="0">
<label for="radio4">
No
</label>
</div>
</td>
</tr>

</table>

<label class="control-label">Status</label>


<table>
<tr>
<td>                             <div class="radio radio-success">
<input type="radio" name="product_status" id="radio5" value="1">
<label for="radio5">
Active
</label>
</div></td>
<td>
                      <div class="radio radio-danger">
<input type="radio" name="product_status" id="radio6" value="0">
<label for="radio6">
Inactive
</label>
</div>
</td>
</tr>

</table>
<div class="images-per" style="display:none;">
			<label>Image Preview</label>
			<div class="preview-images"></div>
		</div>

<label class="control-label">Image</label>

<div class="new-image" id="image-preview">
<label for="image-upload" id="image-label">Choose File</label>
	
		
		
		<div class="allimages">
		
			<input type="file" class="image-input" name="product_image[]" id="image-upload" multiple />
	
		

		</div>
</div>

<span class="text-danger recomendedsize">Recommended size: <b>650 x 350</b> </span>
<br/>
<br/>
<div class="action-button">
<input type="submit" name="save" value="Submit" class="btn btn-embossed btn-primary">
<input type="reset" name="reset" value="Reset" class="btn btn-embossed btn-danger">
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
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
