<?php

class UserController extends Controller
{
  public function index()
  {
    $this->view('user/index');
  }

  public function create($name = '', $email = '')
  {
    // Create user
  }
}