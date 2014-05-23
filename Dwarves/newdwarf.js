Dwarves.newDwarf = function(num){
	console.log(Dwarves.Var.MaleDwarves);
	console.log(Dwarves.Var.FemaleDwarves);
	for(i=0; i<num; i++){
	random = Math.floor(Math.random()*2);
	console.log(Dwarves.Var.random);
	if(random == 1){
		Dwarves.Var.MaleDwarves += 1;
		Dwarves.Var.TotalDwarves += 1;
		Dwarves.Var.NewDwarves += 1;
		Dwarves.Var.MaleReady += 1;
		console.log("Created Male Dwarf");
	}else if(random == 0){
		Dwarves.Var.FemaleDwarves += 1;
		Dwarves.Var.TotalDwarves += 1;
		Dwarves.Var.NewDwarves += 1;
		Dwarves.Var.FemaleReady += 1;
		console.log("Created Female Dwarf");
	}else{
		console.log("Error In NewDwarf.js");
	}
	}
	Update();
};