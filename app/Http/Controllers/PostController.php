<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\PostRepositoryInterface;

class PostController extends Controller
{
    public function __construct(PostRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }
    
    public function show()
    {
        return $this->repository->find();
    }
}
