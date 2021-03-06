<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Kreait\Firebase\Database;
use Firebase\Auth\Token\Exception\InvalidToken;
use Symfony\Component\Cache\Simple\FilesystemCache;



class FirebaseController extends Controller
{
	public function index(Request $request)
	{

	
		$serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/livigro-db-firebase-adminsdk-hudux-b62c707ccc.json');

		$firebase = (new Factory)
  		->withServiceAccount($serviceAccount)
  		->create();


		$idToken = $request->input('idtoken');


		$idTokenString= (string) $idToken;


		try {
			$verifiedIdToken = $firebase->getAuth()->verifyIdToken($idTokenString);
		} catch (InvalidToken $e) {
			echo $e->getMessage();
		}

		$uid = $verifiedIdToken->getClaim('sub');
		$user = $firebase->getAuth()->getUser($uid);
		$email=$user->email;
		session(['email'=>$email]);
		return $user;

	}
}
