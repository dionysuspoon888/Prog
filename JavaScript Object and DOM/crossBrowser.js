var EventUtil = new Object;

EventUtil.addEvent = function(node, type, listener) {
  if (node.addEventListener) {
    // W3C method
    node.addEventListener(type, listener, false);
  } else if(node.attachEvent) {
    // MSIE method
    node.attachEvent("on"+type, listener);
  } else {
    // for all others
    node["on"+type] = listener;
  }
}

EventUtil.removeEvent = function(node, type, listener) {
  if (node.removeEventListener) {
    // W3C method
    node.removeEventListener(type, listener, false);
  } else if (node.detachEvent) {
    // MSIE method
    node.detachEvent('on'+type, listener);
  } else {
    // for all others
	node["on"+type] = null;
  }
}