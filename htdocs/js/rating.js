$('#rating').mousemove(function(e) {
	if ( !('solidified' in this) ) {
		offset = this.offsetLeft + this.offsetParent.offsetLeft;
		stars = Math.floor((e.pageX - offset)/16) + 1;
		$('#rating').attr('class', 'star star-' + stars);
	}
});
$('#rating').click(function(e) {
	offset = this.offsetLeft + this.offsetParent.offsetLeft;
	stars = Math.floor((e.pageX - offset)/16) + 1;
	$('#rating').attr('class', 'star star-' + stars);
	this.solidified = true;
	$('#comments').attr('class','');
});
