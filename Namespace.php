//namespaces are very good when using composer for autoloading
//You can avoid class conflictions when using namespace. 
//Below is a code showing implementation of a namespace 

//declare namespace.
```
namespace public;

class Namespace(){ 

public function __construct(){

}

}
```

//Use namespace in your project

use public\Namespace; 
include __DIR__.'/vendor/autoload.php';
$call = new Namespace();
```
