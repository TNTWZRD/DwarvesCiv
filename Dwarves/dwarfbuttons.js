$(function(){
		$("#NDwarf").click(function(event) {
			event.preventDefault();
			Dwarves.newChild(1);
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

