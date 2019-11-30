<?php
    class MensajeController extends AppController{
        public $helpers = array('Html','Form');
        public $components = array('Session');

        public function index(){
            /*$this->set('mensajes', $this->Mensaje->find('all'));*/

            if($this->request->is('post')){
                if($this->Mensaje->save($this->request->data)){
                }
            }
        }

        public function agregar(){
            if($this->request->is('post')){
                if($this->Mensaje->save($this->request->data)){
                }
            }
        }
        public function mostrar(){
            $this->set('mensajes', $this->Mensaje->find('all'));
        }
    }
?>