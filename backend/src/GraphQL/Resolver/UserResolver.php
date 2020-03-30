<?php

namespace App\GraphQL\Resolver;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use GraphQL\Type\Definition\ResolveInfo;
use Overblog\GraphQLBundle\Definition\Argument;
use Overblog\GraphQLBundle\Definition\Resolver\ResolverInterface;

Class UserResolver implements ResolverInterface
{
	/** @var EntityManagerInterface */
	protected $em;

	public function __construct(EntityManagerInterface $em)
	{
		$this->em = $em;
	}

	public function __invoke(ResolveInfo $info, $value, Argument $args)
	{
		$method = $info->fieldName;
		return $this->$method($value, $args);
	}

	public function resolve(int $id): User
	{
		/** @var User $user */
		$user = $this->em->find(User::class, $id);
		return $user;
	}

	public function create(string $email, string $password): User
	{
		$user = new User();
		$user->setEmail($email);
		$user->setPassword(password_hash($password, PASSWORD_DEFAULT));
		$this->em->persist($user);
		$this->em->flush();
		return $user;
		return [
			'email' => $user->getEmail()
		];
	}

	public function email(User $user)
	{
		return $user->getEmail();
	}
}