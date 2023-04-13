<?php

namespace AHT\Route\Observer;

use AHT\Route\Api\PostRepositoryInterface;

class AfterRegister implements \Magento\Framework\Event\ObserverInterface
{
    protected \AHT\Route\Model\PostFactory $postFactory;
    private PostRepositoryInterface $postRepository;
    private \Magento\Framework\View\Result\PageFactory $pageFactory;

    public function __construct(
        \AHT\Route\Api\PostRepositoryInterface $postRepository,
        \Magento\Framework\View\Result\PageFactory $pageFactory,
        \AHT\Route\Model\PostFactory $postFactory,
    ) {
        $this->pageFactory = $pageFactory;
        $this->postFactory = $postFactory;
        $this->postRepository = $postRepository;
    }
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $customer = $observer->getData('customer');
        $fistName = $customer->getFirstname();
        $lastName = $customer->getLastname();
        $fullName = $fistName . ' ' . $lastName;
        $post = $this->postFactory->create();
        $post->setPostName('day la client');
        $post->setPostUrlKey('http://facebook.com');
        $post->setPostContent($fullName);
        $post->setPostTags('day la tags');
        $post->setPostStatus('0');
        $post->setPostFeatureImage('day la feature image');
        $this->postRepository->save($post);
        $collection = $post->getCollection();
        foreach ($collection as $item) {
            echo "<pre>";
            print_r($item->getData());
            echo "</pre>";
        }
        return $this->pageFactory->create();
    }
}
