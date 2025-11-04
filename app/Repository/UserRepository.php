<?php
namespace App\Repository;

use App\Interface\userInterface;
use App\Models\User;

class UserRepository Implements UserInterface
{

    public function __construct(public User $user){

    }
   #[\Override]public function create(array $data):User{

        return $this->user->create($data);
    }
}
