<?php 

  class FormController{
    private $tampilanIsiForm;
    private $modelTema;

    public function getIsiForm(){
      $this->tampilanIsiForm = new FormView();
      $this->tampilanIsiForm->isiForm();

    }

    public function getHasilForm(){
      $this->modelTema = new FormModel();
      $tema = $this->modelTema->random();

      $this->tampilanIsiForm = new FormView();
      $this->tampilanIsiForm->hasilForm($tema);
    }

  }

 ?>