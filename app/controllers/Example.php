<?php

class Example extends Controller
{
  public function index()
  {
    $data['title'] = 'Welcome';
    $data['controller'] = 'Example';
    $data['method'] = 'index';
    $datas = $this->model('Example_model')->data();
    $this->view('example_templates/header', $data);
    $this->view('example_templates/center');
    $this->view('index', $data);
    $this->view('example_templates/footer');
  }
}
