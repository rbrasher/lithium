<?php

namespace app\controllers;

use app\models\Posts;

class PostsController extends \lithium\action\Controller {
    public function index() {
        $posts = Posts::all();
        return compact('posts');
    }
    
    public function add() {
        $saved = false;
        
        if($this->request->data) {
            $post = Posts::create($this->request->data);
            $saved = $post->save();
        } else {
            $post = array();
        }
        return compact('saved','post');
    }
    
    public function edit() {
        $saved = false;
        //fetch specified post
        $post = Posts::find($this->request->args[0]);
        
        //if post couldn't be fetched, redirect to index
        if(!$post) {
            $this->redirect('Posts::index');
        }
        
        //if we have post data, attempt to save
        if(($this->request->data) && $post->save($this->request->data)) {
            $saved = true;
            $this->redirect(array(
                'Posts::view',
                'args' => array($post->id)
            ));
        }
        
        //if we haven't been redirected, the send the post info to the view
        return compact('post', 'saved');
    }
    
    public function view() {
        if($this->request->args[0]) {
            $post = Posts::first($this->request->args[0]);
            
            return compact('post');
        }
        //if no post id was specified, redirect to index page
        $this->redirect(array('Posts::index'));
    }
    
    public function delete() {
        if($this->request->args[0]) {
            $post = Posts::find($this->request->args[0])->delete();
            
            $this->redirect(array('Posts::index'));
        }
    }
}
?>
