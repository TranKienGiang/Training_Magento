<?php
namespace AHT\Route\Model;

use AHT\Route\Api\Data\PostInterface;
use Magento\Framework\Model\AbstractModel;

class Post extends AbstractModel implements PostInterface
{
    const CACHE_TAG = 'aht_route_post';

    protected $_cacheTag = 'aht_route_post';

    protected $_eventPrefix = 'aht_route_post';

    protected function _construct()
    {
        $this->_init('AHT\Route\Model\ResourceModel\Post');
    }

    public function getIdentities(): array
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    public function getDefaultValues(): array
    {
        $values = [];

        return $values;
    }

    /**
     * @getPostId
     */
    public function getPostId()
    {
        return $this->getData('post_id');
    }

    /**
     * @setPostId
     */
    public function setPostId($postId): Post
    {
        return $this->setData('post_id', $postId);
    }

    /**
     * @getPostName
     */
    public function getPostName()
    {
        return $this->getData('name');
    }

    /**
     * @setPostName
     */
    public function setPostName($name): Post
    {
        return $this->setData('name', $name);
    }

    /**
     * @getPostUrlKey
     */
    public function getPostUrlKey()
    {
        return $this->getData('url_key');
    }

    /**
     * @setPostUrlKey
     */
    public function setPostUrlKey($urlKey): Post
    {
        return $this->setData('url_key', $urlKey);
    }

    /**
     * @getPostContent
     */
    public function getPostContent()
    {
        return $this->getData('post_content');
    }

    /**
     * @setPostContent
     */
    public function setPostContent($postContent): Post
    {
        return $this->setData('post_content', $postContent);
    }

    /**
     * @getPostTags
     */
    public function getPostTags()
    {
        return $this->getData('tags');
    }

    /**
     * @setPostTags
     */
    public function setPostTags($tags): Post
    {
        return $this->setData('tags', $tags);
    }

    /**
     * @getPostStatus
     */
    public function getPostStatus()
    {
        return $this->getData('status');
    }

    /**
     * @setPostStatus
     */
    public function setPostStatus($status): Post
    {
        return $this->setData('status', $status);
    }

    /**
     * @getPostFeatureImage
     */
    public function getPostFeatureImage()
    {
        return $this->getData('featured_image');
    }

    /**
     * @setPostFeatureImage
     */
    public function setPostFeatureImage($featureImage): Post
    {
        return $this->setData('featured_image', $featureImage);
    }
}
