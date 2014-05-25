Dwarves.Hunter = {};

Dwarves.newHunter = function(){
	if(Dwarves.Var.noneDwarves >= 1){
	Dwarves.Var.noneDwarves -= 1;
	Dwarves.Var.HunterDwarves += 1;
	Update();
	}
};

Dwarves.Hunter.Hunt = function(){
	for(i=0; i<Dwarves.Var.HunterDwarves; i++){
		random = Math.floor(Math.random()*2);
		if(random == 1){
			random = Math.floor(Math.random()*2);
			if(random == 1){
				Vars.Food.Beef += 1;
			}else if(random == 0){
				Vars.Food.Ham += 1;
			}
		}
	}
	Update();
}