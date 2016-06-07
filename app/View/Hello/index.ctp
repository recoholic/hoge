<?php
/**
 * /app/View/Hello/index.ctp
 */
	//echo $message;

?>
<!-- Hello World:) -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<form action="/hello/other" method="POST">
    <div class="input text">
        <label for="txtTitle">テキスト</label>
        <input type="text" name="txt" id="txtTitle" />
    </div>
    <div class="submit">
        <input type="submit" value="Send" />
    </div>
</form>
