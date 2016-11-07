<?php

namespace Nuwave\Lighthouse\Tests\DataLoader\Support;

use Nuwave\Lighthouse\Support\DataLoader\GraphQLDataLoader;

class TaskDataLoader extends GraphQLDataLoader
{
    /**
     * Resolve company users.
     *
     * @param  \Illuminate\Support\Collection $users
     * @param  array $args
     * @return mixed
     */
    public function usersTasks($users, array $args)
    {
        return $users->fetch(['tasks' => function ($q) use ($args) {
            $q->loadConnection($args);
        }]);
    }
}
