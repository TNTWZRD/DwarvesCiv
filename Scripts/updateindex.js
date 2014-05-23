Update = function(){
	// Update Dwarves Data
	document.getElementById("Stat.Dwarf").innerHTML = Dwarves.Var.TotalDwarves;
	document.getElementById("Stat.Children").innerHTML = Dwarves.Var.Children;
	document.getElementById("Stat.MDwarf").innerHTML = Dwarves.Var.MaleDwarves;
	document.getElementById("Stat.FDwarf").innerHTML = Dwarves.Var.FemaleDwarves;
	document.getElementById("Stat.NOccupation").innerHTML = Dwarves.Var.noneDwarves;
	document.getElementById("Stat.Miner").innerHTML = Dwarves.Var.MinerDwarves;
	document.getElementById("Stat.Logger").innerHTML = Dwarves.Var.LoggerDwarves;
	document.getElementById("Stat.Farmer").innerHTML = Dwarves.Var.FarmerDwarves;
	document.getElementById("Stat.Blacksmith").innerHTML = Dwarves.Var.BlacksmithDwarves;
	document.getElementById("Stat.Hunter").innerHTML = Dwarves.Var.HunterDwarves;
	document.getElementById("Stat.Guard").innerHTML = Dwarves.Var.GuardDwarves;
	document.getElementById("Stat.Shepherd").innerHTML = Dwarves.Var.ShepherdDwarves;
	document.getElementById("Stat.Builder").innerHTML = Dwarves.Var.BuilderDwarves;
	document.getElementById("Stat.Brickmaker").innerHTML = Dwarves.Var.BrickmakerDwarves;

	// Update Item Data
	document.getElementById("Stat.Stone").innerHTML = Vars.Items.Stone;
	document.getElementById("Stat.Dirt").innerHTML = Vars.Items.Dirt;
	document.getElementById("Stat.Coal").innerHTML = Vars.Items.Coal;
	document.getElementById("Stat.Iron").innerHTML = Vars.Items.Iron;
	document.getElementById("Stat.Gold").innerHTML = Vars.Items.Gold;
	document.getElementById("Stat.Flint").innerHTML = Vars.Items.Flint;
	document.getElementById("Stat.Copper").innerHTML = Vars.Items.Copper;
	document.getElementById("Stat.Wood").innerHTML = Vars.Items.Wood;
	document.getElementById("Stat.Log").innerHTML = Vars.Items.Log;
	document.getElementById("Stat.Wool").innerHTML = Vars.Items.Wool;
	document.getElementById("Stat.Clay").innerHTML = Vars.Items.Clay;
	document.getElementById("Stat.Grass").innerHTML = Vars.Items.Grass;
	document.getElementById("Stat.Brick").innerHTML = Vars.Items.Brick;
	document.getElementById("Stat.Wheat").innerHTML = Vars.Items.Wheat;
	
	// Update Food Data
	document.getElementById("Stat.Apple").innerHTML = Vars.Food.Apple;
	document.getElementById("Stat.Berry").innerHTML = Vars.Food.Berry;
	document.getElementById("Stat.Fish").innerHTML = Vars.Food.Fish;
	document.getElementById("Stat.Beef").innerHTML = Vars.Food.Beef;
	document.getElementById("Stat.Ham").innerHTML = Vars.Food.Ham;
	
	// Update Tool Data
	document.getElementById("Stat.Pick").innerHTML = Vars.Tools.Pick;
	document.getElementById("Stat.Hoe").innerHTML = Vars.Tools.Hoe;
	document.getElementById("Stat.Axe").innerHTML = Vars.Tools.Axe;
	document.getElementById("Stat.Anvil").innerHTML = Vars.Tools.Anvil;
	document.getElementById("Stat.Hammer").innerHTML = Vars.Tools.Hammer;
	document.getElementById("Stat.Sword").innerHTML = Vars.Tools.Sword;
	document.getElementById("Stat.Bow").innerHTML = Vars.Tools.Bow;
	document.getElementById("Stat.Shear").innerHTML = Vars.Tools.Shear;
	document.getElementById("Stat.BrickMold").innerHTML = Vars.Tools.BrickMold;

	// Update Storage Data
	document.getElementById("Stat.Chest").innerHTML = Vars.Storage.Numbers.Chest
	document.getElementById("Stat.Cave").innerHTML = Vars.Storage.Numbers.Cave;
	document.getElementById("Stat.TotalStorage").innerHTML = Vars.Storage.Current;
	
	// End Update Tab Stuff
}

Update();