/* code goes here */
var stories = document.getElementById("stories");
for (i=0;i<stories.childNodes.length;i++) {
	console.log("child " + i + " =" + stories.childNodes[i] + " nodeType=" + stories.childNodes[i].nodeType);
	if (stories.childNodes[i].nodeType != 3) { //not Text
		stories.childNodes[i].style.backgroundColor = "green";
	}
}