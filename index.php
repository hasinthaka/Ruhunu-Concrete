<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ruhunu Concrete Works</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/custom.css">
</head>
<body>
	<div class="container">
		<div class="row">
      <div class="header_bar"></div>
      <a class="logo" href="index.html">
          <img src="assets/img/logo full.png" alt="Logo">
      </a>
    </div>
    <div class="container">
    <div class="row">
      <form style="padding: 50px; width: 100%;">
        
        <div class="form-group row">
            <label class="col-xs-12 col-lg-2 control-label">Categories</label>
              <div class="col-xs-12 col-lg-6 selectContainer">
                <select class="form-control" name="categoryCombo">
                    <option value="">Choose a category</option>
                    <option value="black">Black</option>
                    <option value="green">Green</option>
                    <option value="red">Red</option>
                    <option value="yellow">Yellow</option>
                    <option value="white">White</option>
                </select>
              </div>
            <div class="col-xs-12 col-lg-4">
                <button>New Category</button>
            </div>
        </div>
        <hr>
        <div class="form-group row">
          <div class="container">
            <div class="row">
              <div class="col-lg-3" style="background-color: #000; height: 100px; margin: 5px; "></div>
              <div class="col-lg-3" style="background-color: #000; height: 100px; margin: 5px;"></div>
              <div class="col-lg-3" style="background-color: #000; height: 100px; margin: 5px;"></div>
            </div>          
          </div>        
        </div>  
        <hr>
        <div class="form-group row">
          <label class="custom-file">
            <input type="file" id="file" class="custom-file-input">
            <span class="custom-file-control"></span>
          </label>
        </div>
      </form>
      
    </div>
    </div>
	</div>
	<script src="assets/jquery/jquery-3.2.1.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>