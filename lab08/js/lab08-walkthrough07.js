
/* add code here */
var daysOfWeek = new Array("Mon", "Tues", "Wed", "Thur", "Fri");
daysOfWeek.push("Sat");
daysOfWeek.unshift("Sun");

document.write("<table border=1>");
document.write("<tr>");
for (var i = 0; i < daysOfWeek.length; i++) {
	if (daysOfWeek[i].length < 4)
			day = daysOfWeek[i]
		else
			day = "<em>" + daysOfWeek[i] +"</em>";
		document.write("<th>" + day + "</th>");
}
document.write("</tr>");
var days = 30;
var dayCount = 1;
while (dayCount <= days) {
	document.write("<tr>");
	for (var i = 0; i < daysOfWeek.length; i++) {
		if (dayCount <= days) {
			document.write("<td>" + dayCount + "</td>");
			dayCount++;
		} else {
			break;
		}
	}
	
	document.write("</tr>");
}
document.write("</table>");


//document.write(daysOfWeek+"<br>");
