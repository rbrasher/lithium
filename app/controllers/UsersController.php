<?php

namespace app\controllers;

use lithium\security\Auth;

use app\models\Users;

class UsersController extends \lithium\action\Controller {
    public function index() {
        if(Auth::check('default', $this->request)) {
            $users = Users::all();
            return compact('users');
        } else {
            $this->redirect('/users/login');
        }
    }
    
    public function add() {
        if(Auth::check('default', $this->request)) {
            $register = null;
        
            if($this->request->data) {
                $register = Users::create($this->request->data);
                if($register->save()) {
                    $this->redirect('/users/');
                }
            }
            $user = $this->request->data;

            return compact('register', 'user');
        } else {
            $this->redirect('/users/login');
        }
    }
    
    public function view($id = null) {
        if(Auth::check('default', $this->request)) {
            $user = Users::find('first', array('id' => $id));
            
            return compact('user');
        } else {
            $this->redirect('/users/login');
        }
    }
    
    public function edit() {
        if(Auth::check('default', $this->request)) {
            $saved = false;
            //fetch specified post
            $user = Users::find($this->request->args[0]);

            //if post couldn't be fetched, redirect to index
            if(!$user) {
                $this->redirect('Users::index');
            }

            //if we have post data, attempt to save
            if(($this->request->data) && $user->save($this->request->data)) {
                $saved = true;
                $this->redirect(array(
                    'Users::view',
                    'args' => array($user->id)
                ));
            }

            //if we haven't been redirected, the send the post info to the view
            return compact('user', 'saved');
        } else {
            $this->redirect('/users/login');
        }
    }
    
    public function login() {
        $noauth = false;
        if(Auth::check('default', $this->request)) {
            //redirect on successful login
            return $this->redirect('/');
        }
        
        if($this->request->data) {
            //login failed, trigger the error message
            $noauth = true;
        }
        //return noauth status
        return compact('noauth');
    }
    
    public function logout() {
        Auth::clear('default');
        $this->redirect('/');
    }
}
?>
