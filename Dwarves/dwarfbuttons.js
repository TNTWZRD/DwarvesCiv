$(function(){
		$("#NDwarf").click(function(event) {
			event.preventDefault();
			Dwarves.newDwarf();
		});
	}
);

$(function(){
		$("#NMiner").click(function(event) {
			event.preventDefault();
			Dwarves.newMiner(1);
		});
	}
);

