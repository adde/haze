<?php

class HomeController extends Controller
{
  public function index($name = 'World')
  {
    $user = $this->model('user');
    $user->name = $name;
    $this->view('home/index', ['name' => $user->name]);
  }
}