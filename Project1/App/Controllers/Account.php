<?php

namespace App\Controllers;

use \Core\View;
use App\Models\Post;

class Account extends \Core\Controller {

    protected function before() {
    }

    protected function after() {
    }

    public function indexAction() {
        $posts = Post::getAll();

        View::renderTemplate('Home/index.html', [
            'name' => 'Jared',
            'colors' => ['red', 'green', 'blue'],
            'posts' => $posts
        ]);
    }

    public function loginAction() {
    }

    public function registerAction() {
    }

}

?>