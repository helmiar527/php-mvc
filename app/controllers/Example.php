<?php

class Example extends Controller {
  public function index() {
    $data['title'] = 'Welcome';
        $data['index'] = 'Example';
    $data['array'] = $this->model('Example_model')->getAllArray();
    $this->view('example_templates/header', $data);
    $this->view('example/index', $data);
    $this->view('example_templates/footer');
  }
  public function detail($id) {
    $data['title'] = 'Detail';
    $data['array'] = $this->model('Example_model')->getArrayById($id);
    $this->view('example_templates/header', $data);
    $this->view('example/detail', $data);
    $this->view('example_templates/footer');
  }
}