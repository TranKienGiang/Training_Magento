<?php
namespace AHT\Route\Controller\Training;

use AHT\Route\Api\Data\PostInterface;
use AHT\Route\Api\PostRepositoryInterface;
use AHT\Route\Model\PostFactory;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\View\Result\PageFactory;

class Post extends \Magento\Framework\App\Action\Action
{
    protected \Magento\Framework\View\Result\PageFactory $_pageFactory;

    protected \AHT\Route\Model\PostFactory $_postFactory;
    private \AHT\Route\Model\ResourceModel\Post $postResource;
    private PostRepositoryInterface $postRepository;
    private PostInterface $postInterface;

    /**
     * @param Context $context
     * @param PageFactory $pageFactory
     * @param PostFactory $postFactory
     * @param PostRepositoryInterface $postRepository
     * @param \AHT\Route\Model\ResourceModel\Post $postResource
     */
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory,
        \AHT\Route\Model\PostFactory $postFactory,
        \AHT\Route\Api\PostRepositoryInterface $postRepository,
        PostInterface $postInterface,
        \AHT\Route\Model\ResourceModel\Post $postResource
    ) {
        $this->_pageFactory = $pageFactory;
        $this->_postFactory = $postFactory;
        $this->postResource = $postResource;
        $this->postRepository = $postRepository;
        $this->postInterface = $postInterface;
        return parent::__construct($context);
    }

    /**
     * @throws LocalizedException
     */
    public function execute()
    {
//
        /**
         * Begin Get one Post Record
         */
        $a =5;
        $post = $this->postRepository->get('11');
        print_r($post->getData());
        exit();
        return $this->_pageFactory->create();

        /**
         * Begin Add Post
         */
//        $post = $this->_postFactory->create();
//        $post->setPostName('day la client');
//        $post->setPostUrlKey('http://facebook.com');
//        $post->setPostContent('day la content');
//        $post->setPostTags('day la tags');
//        $post->setPostStatus('0');
//        $post->setPostFeatureImage('day la feature image');
//        $this->postRepository->save($post);
//        $collection = $post->getCollection();
//        foreach ($collection as $item) {
//            echo "<pre>";
//            print_r($item->getData());
//            echo "</pre>";
//        }
//        exit();
//        return $this->_pageFactory->create();
//
//        /**
//         * Begin Edit Post
//         */
//        $post = $this->_postFactory->create();
//        $post = $this->postRepository->get('19');
//        $post->setPostName('day la client 1');
//        $post->setPostUrlKey('http://facebook.com1');
//        $post->setPostContent('day la content1');
//        $post->setPostTags('day la tags');
//        $post->setPostStatus('0');
//        $post->setPostFeatureImage('day la feature image');
//        $this->postRepository->save($post);
//        print_r($post->getData());
//        exit();
//        return $this->_pageFactory->create();
//
//        /**
//         * Begin Delete Post
//         */
//        $post = $this->_postFactory->create();
//        $this->postRepository->deleteById('12');
//        $collection = $post->getCollection();
//        foreach ($collection as $item) {
//            echo "<pre>";
//            print_r($item->getData());
//            echo "</pre>";
//        }
//        exit();
//        return $this->_pageFactory->create();
    }
}
