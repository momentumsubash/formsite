Tick A <input type="checkbox" checked onClick="document.myform2.a0.value = this.checked"><br>
Tick B <input type="checkbox" onClick="document.myform2.b0.value = this.checked"><br>
Tick C <input type="checkbox" onClick="document.myform2.c0.value = this.checked">

<form method=post name="myform2" action="form_check.php">
	<input type="hidden" name="a0" value="apple">
	<input type="hidden" name="b0" value="false">
	<input type="hidden" name="c0" value="false">
	<input type="submit" value="Send form!">
</form>