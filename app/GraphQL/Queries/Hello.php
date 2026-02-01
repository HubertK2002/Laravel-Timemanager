<?php

namespace App\GraphQL\Queries;

final class Hello
{
	public function resolve(): string
	{
		return 'Hello from Laravel + Lighthouse!';
	}
}
