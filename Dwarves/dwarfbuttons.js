$(function(){
		$("#NBlacksmith").click(function(event) {
			event.preventDefault();
			Dwarves.newBlacksmith();
		});
	}
);

$(function(){
		$("#NBrickmaker").click(function(event) {
			event.preventDefault();
			Dwarves.newBrickmaker();
		});
	}
);

$(function(){
		$("#NBuilder").click(function(event) {
			event.preventDefault();
			Dwarves.newBuilder();
		});
	}
);

$(function(){
		$("#NDwarf").click(function(event) {
			event.preventDefault();
			Dwarves.newChild(1);
		});
	}
);

$(function(){
		$("#NFarmer").click(function(event) {
			event.preventDefault();
			Dwarves.newFarmer();
		});
	}
);

$(function(){
		$("#NGuard").click(function(event) {
			event.preventDefault();
			Dwarves.newGuard();
		});
	}
);

$(function(){
		$("#NHunter").click(function(event) {
			event.preventDefault();
			Dwarves.newHunter();
		});
	}
);

$(function(){
		$("#NLogger").click(function(event) {
			event.preventDefault();
			Dwarves.newLogger();
		});
	}
);

$(function(){
		$("#NMiner").click(function(event) {
			event.preventDefault();
			Dwarves.newMiner();
		});
	}
);

$(function(){
		$("#NShepherd").click(function(event) {
			event.preventDefault();
			Dwarves.newShepherd();
		});
	}
);
