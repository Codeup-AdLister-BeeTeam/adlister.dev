<?php 
//  *** THIS IS NOT THE LIVING COPY

// Require or include statements are allowed here.
// All other code goes in the pageController function.

/*
 *The pageController function handles all processing for this page.
 *@return array an associative array of data used in rendering the HTML view.
 */
function pageController()
{
    // Initialize an empty data array.


    // Add data to be used in the HTML view.
    $data['message'] = 'Hello Keyasha!';

    // Return the completed data array.
    return $data;

}
// Call the pageController function 
// and extract all the returned array as local variables.

extract(pageController());

// Only use echo, conditionals and loops anywhere within the HTML.







 ?>



<html>
<?php require_once '../views/partials/head.php'; ?>
 <body>
<?php require_once '../views/partials/navbar.php'; ?>
<header class="ad">
    <div class="header-content">
        <div class="header-content-inner">
            <h1>The intersection where fashion meets passion</h1>
        </div>
    </div>
</header>
    <h1>Create Your Ad</h1>
    <form method="POST" action="" class="form-horizontal">
  <div class="form-group">
    <label for="inputTitle" class="col-sm-2 control-label">Title of Ad</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputTitle" placeholder="Title of Ad">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPrice" class="col-sm-2 control-label">Price</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPrice" placeholder="Price($)">
    </div>
  </div>
  <div class="form-group">
    <label for="inputSize" class="col-sm-2 control-label">Size</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputSize" placeholder="Item Size">
    </div>
  </div>

<h3>Item Description</h3> 
  <textarea class="form-control" rows="3" placeholder="Enter Item Description"></textarea>
<h3>File Uploader</h3>

<div class="form-group">
    <label for="exampleInputFile">Upload Image(s)</label>
    <input type="file" id="exampleInputFile">
    <p class="help-block">Images limited to a maximum of four (4) uploads.</p>
  </div>

<h3>Item Category</h3> 
    <div class="radio">
      <label>
        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">
        Women's Clothing
      </label>
    </div>
    <div class="radio">
      <label>
        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
        Men's Clothing
      </label>
    </div>
    <div class="radio">
      <label>
        <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
        Women's Shoes
      </label>
    </div>
    <div class="radio">
      <label>
        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option4">
        Men's Shoes
      </label>
    </div>
    <div class="radio">
      <label>
        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option5">
        Jewelry
      </label>
    </div>
    <div class="radio">
      <label>
        <input type="radio" name="optionsRadios" id="optionsRadios3" value="option6">
        Accessories
      </label>
    </div>

<h3>Preferred Contact Method</h3>

    <div class="checkbox">
      <label>
        <input type="checkbox" value="">
        Call
      </label>
    </div>
    <div class="checkbox">
      <label>
        <input type="checkbox" value="">
        Text
      </label>
    </div>
    <div class="checkbox">
      <label>
        <input type="checkbox" value="">
        Email
      </label>
    </div>
<hr>

  <div class="form-group">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-default form-btn">Submit Ad</button>
    </div>
  </div>
</form>

<?php require_once '../views/partials/footer.php'; ?>  
</body>
</html>

