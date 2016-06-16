<html>
<head>


</head>
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous"> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>


<script src="jqBootstrapValidation.js"></script>

<body>

<form class="form-horizontal">
  <div class="control-group">
    <label class="control-label">Select your two favourite colours</label>
    <div class="controls">
      <label class="checkbox">
        <input 
          type="checkbox" 
          name="some_field" 
          data-validation-minchecked-minchecked="2" 
          data-validation-minchecked-message="Choose at least two" 
        /> Red
      </label>
      <label class="checkbox">
        <input type="checkbox" name="some_field" /> Orange
      </label>
      <label class="checkbox">
        <input type="checkbox" name="some_field" /> Yellow
      </label>
      <label class="checkbox">
        <input type="checkbox" name="some_field" /> Green
      </label>
      <label class="checkbox">
        <input type="checkbox" name="some_field" /> Blue
      </label>
      <label class="checkbox">
        <input type="checkbox" name="some_field" /> Indigo
      </label>
      <label class="checkbox">
        <input type="checkbox" name="some_field" /> Violet
      </label>
      <p class="help-block"></p>
    </div>
  </div>

    <button type="submit" class="btn btn-primary" name="submit">Add To Cart</button>
</form>
</form>
</body>
<script>
  $(function () { $("input,select,textarea").not("[type=submit]").jqBootstrapValidation(); } );
</script>
</html>