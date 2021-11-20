<?php

abstract class Pessoa {
    private $id;
    protected $documento;

    public function __construct($id)
    {
        $this->id = $id;
    }

    public abstract function getSaudacao(): string;
}