function showRelation() {
	var oHtml = document.documentElement;
	var oHead = oHtml.firstChild;
	var oBody = oHtml.lastChild;
	
	var lines = new Array();
	lines[0] = "Html element: " + oHtml.nodeName;
	lines[1] = "First child of Html: " + oHead.nodeName;
	lines[2] = "Last child of Html: " + oBody.nodeName;
	lines[3] = "Next sibling of Head: " + oHead.nextSibling.nodeName;
	lines[4] = "Previous sibling of Body: " + oBody.previousSibling.nodeName;
	lines[5] = "Parent of Head: " + oHead.parentNode.nodeName;
	
	var oAnchors = document.getElementsByTagName('a');
	lines[6] = "innerHTML of <a>: " + oAnchors[0].innerHTML;
	lines[7] = "nodeValue of href attribute: " +
		oAnchors[0].attributes['href'].nodeValue;
	lines[8] = "nodeValue of element nodes is " + oAnchors[0].nodeValue;
	
	var oDes = document.getElementById("des");
	for (var i=0; i<lines.length; i++) {
		oDes.appendChild(document.createTextNode(lines[i]));
		oDes.appendChild(document.createElement('br'));
	}
	alert("innerHTML of <p> is\n" + oDes.innerHTML);
}