<?php
    Class Main extends CI_Controller {
        public function main(){
            $data['date'] = date("Y.m.d");
            $data['page'] = 'main';
            $this->load->view('menu/content', $data);
        }
    }
?>