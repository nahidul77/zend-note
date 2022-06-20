<?php
class parentClass{
  
}

class childClass extends parentClass{
  
}

$obj = new childClass();

if(is_subclass_of($obj, 'parentClasses')){
    echo "This \$obj is a object of subclass of parentClass.";
}else{
	echo "This \$obj is not a object of subclass of parentClass.";
}
