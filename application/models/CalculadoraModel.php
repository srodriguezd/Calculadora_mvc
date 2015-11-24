<?php
/**
 * Created by PhpStorm.
 * User: sara
 * Date: 13/10/15
 * Time: 16:57
 */

namespace models;


class CalculadoraModel
{
    private $_op1;
    private $_op2;
    private $_resultado;

    /**
     * CalculadoraModel constructor.
     * @param $_op1
     * @param $_op2
     * @param $_resultado
     */
    public function __construct($_op1, $_op2, $_resultado)
    {
        $this->_op1 = $_op1;
        $this->_op2 = $_op2;
        $this->_resultado = $_resultado;
    }

    /**
     * @return mixed
     */
    public function getOp1()
    {
        return $this->_op1;
    }

    /**
     * @param mixed $op1
     */
    public function setOp1($op1)
    {
        $this->_op1 = $op1;
    }

    /**
     * @return mixed
     */
    public function getOp2()
    {
        return $this->_op2;
    }

    /**
     * @param mixed $op2
     */
    public function setOp2($op2)
    {
        $this->_op2 = $op2;
    }

    /**
     * @return mixed
     */
    public function getResultado()
    {
        return $this->_resultado;
    }

    /**
     * @param mixed $resultado
     */
    public function setResultado($resultado)
    {
        $this->_resultado = $resultado;
    }

    public function Suma(){
        $this->resultado = $this->_op1 + $this->_op2;

    }

    public function Resta(){
        $this->resultado = $this->_op1 - $this->_op2;
    }

    public function Division(){
        $this->resultado = $this->_op1 / $this->_op2;
    }

    public function Multiplicacion(){
        $this->resultado = $this->_op1 * $this->_op2;
    }

}