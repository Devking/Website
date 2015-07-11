$(function(){
			var choice = Math.floor(Math.random()*3);

			if (choice == 1) {
				$("#avatar").html('<a href="http://www.wellssanto.com"><img src="AvatarResized.png" style="width: 150px; height: 150px;" alt="Me" />');
			}
			//setInterval(changeImage, 5000);
		});

/* for if i ever want to toggle the avatar images as a slideshow
var check = 0;

function changeImage() {
	if (check == 0) {
		$("#avatar").html('<a href="http://www.wellssanto.com"><img src="AvatarResized.png" style="width: 150px; height: 150px;" id="avatar" alt="Me" />');
		check = 1;
	} else {
		$("#avatar").html('<a href="http://www.wellssanto.com"><img src="Avatar2Resized.png" style="width: 150px; height: 150px;" id="avatar" alt="Me" />');
		check = 0;
	}
}
*/