<?php
namespace AHT\Route\Block;

class Display extends \Magento\Framework\View\Element\Template
{
    public function getHelloWorldTxt()
    {
        return 'Hello world!';
    }

    public function getPostById($id){
        return [];
    }
}
