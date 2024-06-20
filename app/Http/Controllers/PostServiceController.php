<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\interfaces\PostInterface;
class PostServiceController extends Controller
{
    // for single interfaceclass
    public $postObj;
    public function __construct(PostInterface $postObj){
        $this->postObj = $postObj;
    }

    public function index(){
        // For sigle interfaceclass
        $allPosts = $this->postObj->show();
        return $allPosts;

        // for multi interface class 
        // $postObj = app(PostInterface::class)->get('PService');
        // $allPosts = $postObj->show();
        // return $allPosts;
    }

    public function SinglePost($id){
        // for single interface class 

        $singlePost = $this->postObj->find($id);
        return $singlePost;

        // for multi interface classes 
        // $postObj = app(PostInterface::class)->get('PService');
        // $singlePost = $postObj->find($id);
        // return $singlePost;
    }
}
