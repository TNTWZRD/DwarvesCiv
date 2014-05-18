newDwarf = function(number){
	console.log("Started NewDwarf() Function");
	if(Dwarves.Var.MaleDwarves >= 1 && Dwarves.Var.FemaleDwarves >= 1){
		console.log("If == True");
		for(i=0; i<=number; i++){
			console.log("Started For Loop");
			random = Math.floor(Math.random());
			console.log("Picked Random Number of: "+random);
			if(random == 1){
				Dwarves.Var.MaleDwarves += 1;
				Dwarves.Var.TotalDwarves += 1;
				Dwarves.Var.NewDwarves += 1;
				console.log("Created Male Dwarf");
			}else if(random == 0){
				Dwarves.Var.FemaleDwarves += 1;
				Dwarves.Var.TotalDwarves += 1;
				Dwarves.Var.NewDwarves += 1;
				console.log("Created Female Dwarf");
			}else{
				console.log("Error In NewDwarf.js");
			}
		}
	}
}