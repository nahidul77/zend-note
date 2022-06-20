<?php
class abc{
	static public function test(){
		var_dump(get_called_class());
	}
}

class xyz extends abc{
	
}

abc::test();
xyz::test();
