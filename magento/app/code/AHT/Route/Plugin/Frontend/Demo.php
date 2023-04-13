<?php

namespace AHT\Route\Plugin\Frontend;

class Demo
{
    public function beforeGetName(
        \Demo $subject,
        \Closure $proceed,
        //$functionParam
    ) {
        //Your plugin code
        $result = $proceed();
        return $result;
    }
}
