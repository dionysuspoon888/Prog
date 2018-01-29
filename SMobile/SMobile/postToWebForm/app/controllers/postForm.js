// Arguments passed into this controller can be accessed off of the `$.args` object directly or:
var args = $.args;

function postAction(e) {
	var xhr = Titanium.Network.createHTTPClient();
	xhr.onload = function(e) {
		var json = this.responseText;
		alert(json);
	};
	xhr.open("POST","http://cslinux0.comp.hkbu.edu.hk/~tkcchan/postHandler.php");
	var params = {
		name:$.name.value,
		age:$.age.value
	};
	xhr.send(params);
};
