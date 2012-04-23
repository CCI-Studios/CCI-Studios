window.addEvent('domready', function() {

	filterbar = $('filter-bar');
	form = filterbar.getParent('form');
	selects = filterbar.getElements('select');

	selects.addEvent('change', function() {
		form.submit();
	});
});
