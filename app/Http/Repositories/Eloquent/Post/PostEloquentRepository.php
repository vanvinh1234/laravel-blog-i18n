<?php


namespace App\Http\Repositories\Eloquent\Post;


use App\Http\Repositories\Eloquent\EloquentRepository;
use App\Post;

class PostEloquentRepository extends EloquentRepository implements PostRepositoryInterface
{
    public function getModel()
    {
        return Post::class;
    }

}
