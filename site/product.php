<html>
<head>
  <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.12.2.min.js"></script>
  <script src="jquery-3.0.0.min.js"></script>
 
</head>

<h1>product page</h1>


<Message>Please select your product</Message><br>
<hr>


          <form name="product"  id="product" action="productcheck.php"  method="post" >
          	  	<div class="control-group form-group">
                                  <div class="controls" >
                                     
                                     <input type="checkbox"  
                                      name="check_list[]"  id="check"  value="apple"><label>Apple</label> Price: 80<br/>
                                      
                                      <input type="checkbox" name="check_list[]" id= "check" value="banana"><label>Banana</label> Price: 50<br/>
                                      <input type="checkbox" name="check_list[]" id= "check" value="mango"><label>Mango</label> Price: 30<br/>
                                      <input type ="hidden" name="value3" value="80">
                                      <input type ="hidden" name="value2" value="50">
                                      <input type ="hidden" name="value1" value="30">
                                                                 
                                  </div>

          	  	
                </div>
          		    
          		<br>
            		<button type="submit" class="btn btn-primary" onclick="return testcheck()" id="submit" name="submit">Add To Cart</button>
          </form>

    <script>
    $(document).ready(function () {

              $('#product').validate({ // initialize the plugin
                      rules: {
                          'check_list[]': {
                              required: true
                              
                          }
                      },
                      messages: {
                          'check_list[]': {
                              required: "You must check at least 1 box"
                             
                          }
                      },
                  // submitHandler: function (form) { // for demo
                  //     alert('valid form submitted'); // for demo
                  //     return false; // for demo
                  
              });

    });
    </script>
</html>