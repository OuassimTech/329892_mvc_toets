<?php
class Fruits extends Controller {
    public function __construct() {
        $this->fruitModel = $this->model('Fruit');
    }

    public function index() {

        $result = $this->fruitModel->getFruits();

        $data = [
            'fruit' => 'Fruits page',
            'fruitData' => $result
        ];

        $this->view('fruits/index', $data);
    }
}
