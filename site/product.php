<h1>product page</h1>


 <form name="product"  id="product" action="productcheck.php"  method="post">
	  	<div class="control-group form-group">
                        <div class="controls">
                           

                           <input type="checkbox" name="check_list[]" value="apple"><label>apple</label><br/>
                            
                            <input type="checkbox" name="check_list[]" value="banana"><label>banana</label><br/>
                            
                            <input type="checkbox" name="check_list[]" value="mango"><label>mango</label><br/>
                            

                            <input type ="hidden" name="value3" value="80">
                            <input type ="hidden" name="value2" value="50">
                            <input type ="hidden" name="value1" value="30">
                                                       
                        </div>

	  	
      </div>
		    
		
  		<button type="submit" class="btn btn-primary" name="submit">Send Message</button>
</form>