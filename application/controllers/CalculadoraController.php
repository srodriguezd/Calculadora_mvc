<?php
/**
 * Created by PhpStorm.
 * User: sara
 * Date: 13/10/15
 * Time: 16:54
 */

namespace controllers;

use models\CalculadoraModel;
require 'application/models/CalculadoraModel.php';

class CalculadoraController
{
    public function sumAccion(){
        $accion = 'hazSuma';
        require 'application/views/form.php';
    }

    public function hazSumaAccion(){
        $model = new CalculadoraModel($_POST['op1'], $_POST['op2']);
        $model->suma();
        $resultado = $model->getResultado();
        require 'application/views/resultado.php';
    }

    public function restAccion(){
        $accion = 'hazResta';
        require 'application/views/form.php';
    }

    public function hazRestaAccion(){
        $model = new CalculadoraModel($_POST['op1'], $_POST['op2']);
        $model->resta();
        $resultado = $model->getResultado();
        require 'application/views/resultado.php';
    }

    public function divisionAccion(){
        $accion = 'hazDivision';
        require 'application/views/form.php';
    }

    public function hazDivisionAccion(){
        $model = new CalculadoraModel($_POST['op1'], $_POST['op2']);
        $model->division();
        $resultado = $model->getResultado();
        require 'application/views/resultado.php';
    }

    public function multiplicacionAccion(){
        $accion = 'hazMultiplicacion';
        require 'application/views/form.php';
    }

    public function hazMultiplicacionAccion(){
        $model = new CalculadoraModel($_POST['op1'], $_POST['op2']); //Guarda los datos que pone el usuario: $_POST
        $model->multiplicacion();
        $resultado = $model->getResultado();
        require 'application/views/resultado.php';
    }
}