	function heightEqualsWidth() {
		var figures = document.querySelectorAll('.entry-figure img');
		var entriesWidth = (figures[0].offsetWidth) + 'px';
		for (var i = 0; i < figures.length; i++) {
			figures[i].style.height = entriesWidth;
		}
	}

	window.addEventListener('resize', heightEqualsWidth);
	window.addEventListener('load', heightEqualsWidth);