<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Kreait\Firebase;

use Kreait\Firebase\Factory;

use Kreait\Firebase\ServiceAccount;

use Kreait\Firebase\Database;

class FirebaseController extends Controller

{

//

public function index(){

$serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/laravelfirebase-51535-firebase-adminsdk-cjsp6-8002436595.json');

$firebase = (new Factory)

->withServiceAccount($serviceAccount)

->withDatabaseUri('https://aceplus-attendence.firebaseio.com/')

->create();

$database = $firebase->getDatabase();


$newPost = $database

->getReference('AddendenceUser');

//$newPost->getKey(); // => -KVr5eu8gcTv7_AHb-3-

//$newPost->getUri(); // => https://my-project.firebaseio.com/blog/posts/-KVr5eu8gcTv7_AHb-3-

//$newPost->getChild('title')->set('Changed post title');

//$newPost->getValue(); // Fetches the data from the realtime database

//$newPost->remove();

echo"<pre>";

print_r($newPost->getvalue());

}

}

?>
