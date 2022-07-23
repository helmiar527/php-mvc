<?php

class Example2 extends Controller {
  public function index() {
    $data['title'] = 'Example2';
    $data['index'] = 'Example2';
    $data['array'] = $this->model('Example_model')->getAllArray();
    $this->view('example_templates/header', $data);
    $this->view('example2/index', $data);
    $this->view('example_templates/footer');
  }
  public function tambah() {
    if ($this->model('Example_model')->tambahDataArray($_POST) > 0) {
      Flasher::setFlash('berhasil', 'ditambahkan', 'success');
      header('Location: ' . BASEURL . '/example2');
      exit;
    } else {
      Flasher::setFlash('gagal', 'ditambahkan', 'danger');
      header('Location: ' . BASEURL . '/example2');
      exit;
    }
  }
}