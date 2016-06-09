<h1>product page</h1>


 <form name="product"  id="product" action="productcheck.php"  method="post">
	  	<div class="control-group form-group">
                        <div class="controls">
                            <input type="checkbox" name="apple" value="apple"> Select Apple &nbsp <label><b>Price:</b> 40</label><br>
                            <input type="hidden" name="value1" value="40">
  							<input type="checkbox" name="banana" value="banana"> Select Banana &nbsp <label><b>Price:</b> 50</label><br>
                            <input type="hidden" name="value2" value="50">
                        </div>
                    </div>

	  	<!-- <select id="fruit" name="fruit[]" multiple="multiple">

		    
		</select> -->s
  		<button type="submit" class="btn btn-primary" name="submit">Send Message</button>
</form>