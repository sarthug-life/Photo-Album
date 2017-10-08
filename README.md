# Photo-Album
The Photo Album has following features:-

	- Login Form: index.php has the form, login.php has authentication
		Authenticate using standard credentials: 
			user:eval 
			pass:eval
	
	- album php: Browsing through the album using next, prev, last, first buttons

	- Image upload page that allows you to add an image to the album: new_upload.php is the form 
	  & upload.php is the processing:
		
		- Check for image format as jpg in php
		- Check for image size to be less than 200KB in php
		- Maximum of 10 images to upload- check in php
		- Images to be uploaded to images/ directory 
		- Errors can be displayed on upload.php itself with a back button to 
			enable navigation to the previous page

	- Used sessions to validate login sessions while accessing album.php, new_uplod.php & upload.php. 
	  Session initialized at login.
