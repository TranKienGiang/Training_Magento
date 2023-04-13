<?php

namespace AHT\Route\Controller\Training\Post;

use Magento\Customer\Controller\AbstractAccount;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\Action\HttpPostActionInterface;

class Post extends AbstractAccount implements HttpGetActionInterface, HttpPostActionInterface
{
    public function execute()
    {
        echo $this->sumNumber(5);
    }

    public function sumNumber($a)
    {
        $a = $a;
        return $a;
    }
}
