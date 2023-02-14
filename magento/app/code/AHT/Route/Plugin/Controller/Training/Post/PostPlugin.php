<?php

namespace AHT\Route\Plugin\Controller\Training\Post;

class PostPlugin
{
//    public function beforeSumNumber(\AHT\Route\Controller\Training\Post\Post $subject, $a, $b)
//    {
//        $a = 8;
//        $b = 15;
//        return[$a,$b];
//    }

    public function afterSumNumber(\AHT\Route\Controller\Training\Post\Post $subject, $result, $a)
    {
        $a = $a +5;
        return $a;
    }

//    public function aroundSumNumber(\AHT\Route\Controller\Training\Post\Post $subject, callable $proceed, $a, $b)
//    {
//        $result = $proceed($a, $b);
//        echo 'result :' . $result;
////        return $result;
//    }
}
