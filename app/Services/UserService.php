<?php
/**
 * Created by PhpStorm.
 * User: thilan
 * Date: 10/8/18
 * Time: 11:28 PM
 */

namespace App\Services;

use App\Repositories\UserRepository;

class UserService
{

    protected $repository;

    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    public function findUser($id)
    {
        return $this->repository->find($id, $columns = ['*']);
    }

    public function findAllUsers()
    {
        return $this->repository->all($columns = ['*']);
    }

    public function findUsersBasicInfo()
    {
        return $this->repository->all($columns = ['first_name','last_name']);
    }

}