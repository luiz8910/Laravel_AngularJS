<?php

namespace Laravel_AngularJS\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Laravel_AngularJS\Repositories\UserRepository;
use Laravel_AngularJS\Models\User;
use Laravel_AngularJS\Validators\UserValidator;

/**
 * Class UserRepositoryEloquent
 * @package namespace Laravel_AngularJS\Repositories;
 */
class UserRepositoryEloquent extends BaseRepository implements UserRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return User::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
