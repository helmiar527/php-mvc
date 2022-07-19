<?php

class Home extends Controller {
  public function index()
  {
    $data['title'] = 'Welcome';
    $this->view('templates/head', $data);
    $this->view('home/index');
    $this->view('templates/foot');
  }
}