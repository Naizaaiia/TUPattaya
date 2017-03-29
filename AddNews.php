<!DOCTYPE html>
<html>
<body>

<form action="insertphoto.php" method="post" enctype="multipart/form-data">
    Select image to upload : 
    <input type="file" name="fileToUpload" id="fileToUpload">
	</br>
	Header : 
	<input type="textArea" name="header" id="header" width="300px" height="300px">
	</br>
	Story : 
	<input type="textArea" name="story" id="story" width="300px" height="300px" style="width:300px height:300px">
	</br>
    <input type="submit" value="Upload News" name="submit">
</form>

</body>
</html>