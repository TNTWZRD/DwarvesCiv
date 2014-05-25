Main = {};

Init = function(){
	console.log("Initalizing....");
	console.log("Please Wait....");
	setInterval("Update()", 1000);
	console.log("Done Please Enjoy!");
	
	Main.randomizeGoods(Vars.Storage.Current-Vars.Items.Total);
	
	Vars.Money = Math.floor(Math.random()*200);
	Vars.Prestige += Math.floor(Math.random()*100);
}

Main.randomizeGoods = function(CurrentMax){
	
	for(i=0; i<=CurrentMax; i++){
		random = Math.floor(Math.random()*19);
		if(random == 0){
			Vars.Items.Stone += 1;
		}
		if(random == 1){
			Vars.Items.Dirt += 1;
		}
		if(random == 2){
			Vars.Items.Coal += 1;
		}
		if(random == 3){
			Vars.Items.Iron += 1;
		}
		if(random == 4){
			Vars.Items.Gold += 1;
		}
		if(random == 5){
			Vars.Items.Flint += 1;
		}
		if(random == 6){
			Vars.Items.Copper += 1;
		}
		if(random == 7){
			Vars.Items.Wood += 1;
		}
		if(random == 8){
			Vars.Items.Log += 1;
		}
		if(random == 9){
			Vars.Items.Wool += 1;
		}
		if(random == 10){
			Vars.Items.Clay += 1;
		}
		if(random == 11){
			Vars.Items.Brick += 1;
		}
		if(random == 12){
			Vars.Items.Wheat += 1;
		}
		if(random == 13){
			Vars.Items.Grass += 1;
		}
		if(random == 14){
			Vars.Food.Apple += 1;
		}
		if(random == 15){
			Vars.Food.Berry += 1;
		}
		if(random == 16){
			Vars.Food.Fish += 1;
		}
		if(random == 17){
			Vars.Food.Beef += 1;
		}
		if(random == 18){
			Vars.Food.Ham += 1;
		}
	}
}

Main.Tick = function(){
	
}

Init();
