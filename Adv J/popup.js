ADS.addEvent(window, 'load', function(aEvent) {
  var popup = ADS.$('popup');
  ADS.addEvent(popup, 'click', function(aEvent) {
    window.open(popup.href);
	ADS.preventDefault(aEvent);
  });
});