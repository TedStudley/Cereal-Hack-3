$('#rating').mousemove(function(e) {
	if ( !('solidified' in this) ) {
		stars = Math.floor((e.pageX - this.offsetLeft)/16) + 1;
		$('#rating').attr('class', 'star star-' + stars);
	}
});
$('#rating').click(function(e) {
	stars = Math.floor((e.pageX - this.offsetLeft)/16) + 1;
	$('#rating').attr('class', 'star star-' + stars);
	this.solidified = true;
	$('#comments').attr('class','');
});
