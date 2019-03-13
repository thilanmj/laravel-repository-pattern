<?php
/**
 * Created by PhpStorm.
 * User: ThilanMJ
 * Date: 2019-03-13
 * Time: 22:25
 */

namespace App\Repositories;


use Prettus\Repository\Eloquent\BaseRepository;

class CompanyRepository extends BaseRepository
{

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return "App\\Models\\Company";
    }
}