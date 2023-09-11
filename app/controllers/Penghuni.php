<?php 
    class Penghuni extends Controller{
        public function index()
        {
            $data['judul'] = 'Penghuni';
            $data['penghuni'] = $this->model('Penghuni_model')->getAllPenghuni();
            $this->view('templates/header', $data);
            $this->view('penghuni/index', $data);
            $this->view('templates/footer');
        }
    }
?>