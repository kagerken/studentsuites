function heightEqualsWidth() {
	console.log('test');
	var figures = document.getElementsByClassName('entry-figure');
	var entriesWidth = figures[0].offsetWidth;
	for (var i = figures.length; i > 0; i++) {
		figures[i].style.height = entriesWidth;
	}
}

heightEqualsWidth();
window.addEventListener('resize', heightEqualsWidth);