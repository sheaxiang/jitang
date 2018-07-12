<?php
/**
 * Created by PhpStorm.
 * User: shea
 * Date: 2018/7/12
 * Time: 10:56
 */

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;

class DefaultController
{
	public function index()
	{
		$number = random_int(0, 100);

		return new Response(
			'<html><body>Lucky number: '.$number.'</body></html>'
		);
	}
}