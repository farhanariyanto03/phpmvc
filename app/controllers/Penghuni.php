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

        public function editPenghuni($id_Penghuni)
        {
            $data['judul'] = "Edit Penghuni";
            $data['penghuni'] = $this->model('Penghuni_model')->getPenghuniById($id_Penghuni);
            $this->view('templates/header', $data);
            $this->view('penghuni/editPenghuni', $data);
            $this->view('templates/footer');
        }
        
        public function addPenghuni()
        {
            if($this->model('Penghuni_model')->addPenghuni($_POST) > 0){
                Flasher::setFlash('berhasil', 'ditambahkan', 'success');
                header('Location:http://localhost/phpmvc/public/penghuni');
            }else{
                Flasher::setFlash('gagal', 'ditambahkan', 'danger');
                header('Location:http://localhost/phpmvc/public/penghuni');
                exit;
            }
        }

        public function deletePenghuni($id_Penghuni)
        {
            if ($this->model('Penghuni_model')->deletePenghuni($id_Penghuni) > 0) {
                Flasher::setFlash('berhasil', 'dihapus', 'success');
            } else {
                Flasher::setFlash('gagal', 'dihapus', 'danger');
            }
            header('Location: http://localhost/phpmvc/public/penghuni');
            exit;
        }

        public function updatePenghuni($id_Penghuni)
        {
            if($this->model('Penghuni_models')->updatePenghuni($_POST) > 0){
                Flasher::setFlash('berhasil', 'diedit', 'success');
                header('Location:http://localhost/phpmvc/public/penghuni');
            }else{
                Flasher::setFlash('gagal', 'diedit', 'danger');
                header('Location:http://localhost/phpmvc/public/penghuni');
                exit;
            }
        }
    }
?>