<?php
    require_once "model.php";

    class SuperSaiyajin extends Saiyajin {
        public $model;
        public $hairColor = "Gold";

        public function moveFast()
        {
            echo "瞬間移動しました";
        }

        public function setModel()
        {
            $this->model = new Model;
        }

    }
?>
