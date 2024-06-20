<?php

namespace App\interfaces;

interface PostInterface
{
    public function show() : array;

    public function find($id) : array;
}
