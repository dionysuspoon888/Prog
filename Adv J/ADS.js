(function() {
  // Create object for your namespace
  if (!window.ADS) { window['ADS'] = {} }

  // Method check whether the browser can use this library
  function isCompatible(other) {
    if (other===false
	|| !Array.prototype.push // Supported since JavaScript Version 1.2
	) {
	  return false;
	}
	return true;
  }
  window['ADS']['isCompatible'] = isCompatible;
  
  // Method to retrieve DOM elements
  function $() {
    var elements = new Array();
	// Find all requested elements 
	for (var i=0; i<arguments.length; i++) {
	  var element = arguments[i];
	  // If argument is string, find element by id
	  if (typeof element == 'string') {
	    element = document.getElementById(element);
	  }
	  // If only one argument, return element immediately
	  if (arguments.length == 1) {
	    return element;
	  }
	  // Otherwise add it to the array
	  elements.push(element);
	}
    // Return the array of multiple requested elements
    return elements;
  }
  window['ADS']['$'] = $;
  
  // Method to add event in a cross-browser way
  function addEvent(node, type, listener) {
    if (!isCompatible()) { return false; }
	if (!(node = $(node))) { return false;}
	
	if (node.addEventListener) {
	  node.addEventListener(type, listener, false);
	  return true;
	} else if (node.attachEvent) {
	  node.attachEvent('on'+type, listener);
	  return true;
	}
	
	return false;
  }
  window['ADS']['addEvent'] = addEvent;
  
  // Method to remove event in a cross-browser way
  function removeEvent(node, type, listener) {
	if (!(node = $(node))) { return false;}
    
	if (node.removeEventListener) {
	  node.removeEventListener(type, listener, false);
	  return true;
	} else if (node.detachEvent) {
	  node.detachEvent('on'+type, listener);
	  return true;
	}
	
	return false;
  }
  window['ADS']['removeEvent'] = removeEvent;
  
  function getEventObject(aEvent) {
    return aEvent || window.event;
  }
  window['ADS']['getEventObject'] = getEventObject;
  
  function preventDefault(eventObject) {
    eventObject = eventObject || getEventObject(eventObject);
    if(eventObject.preventDefault) {
      eventObject.preventDefault();
    } else {
      eventObject.returnValue = false;
    }
  }
  window['ADS']['preventDefault'] = preventDefault;

})();