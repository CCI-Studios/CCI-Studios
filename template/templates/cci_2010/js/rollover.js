window.addEvent('domready', function () {
	images = $$('img');
	images.each(function (image) {
		normal = image.src;
		
		if (normal.indexOf('_normal.') == -1) {
			return;
		}
		
		over = normal.replace('_normal.', '_over.');
		
		image.addEvents({
			mouseenter: function () {
				image.src = 'http://citywidetreeservice.on.ca/Main.gif';
			},
			mouseleave: function () {
				image.src = normal;
			}
		});
	});
});