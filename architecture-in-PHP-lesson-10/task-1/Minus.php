<?php

class Minus extends ATerm
{
    public function calc()
    {
        return $this->childrenLeft->calc() - $this->childrenRight->calc();
    }
}