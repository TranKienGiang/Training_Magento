<?php
declare(strict_types=1);

namespace AHT\Route\Api\Data;

interface PostInterface
{
    const POST_ID = 'postId';
    const NAME = 'name';
    const POST_CONTENT = 'postContent';
    const URL_KEY = 'urlKey';
    const TAGS = 'tags';
    const STATUS = 'status';
    const FEATURED_IMAGE = 'featureImage';


    /**
     * @getPostId
     */
    public function getPostId();

    /**
     * @setPostId
     * Parameters:int $postId
     * Returns:PostInterface
     */
    public function setPostId($postId);

    /**
     * @getPostName
     */
    public function getPostName();

    /**
     * @setPostName
     * Parameters:string $name
     * Returns:PostInterface
     */
    public function setPostName($name);

    /**
     * @getPostUrlKey
     */
    public function getPostUrlKey();

    /**
     * @setPostUrlKey
     * Parameters:string $url_key
     * Returns:PostInterface
     */
    public function setPostUrlKey($urlKey);

    /**
     * @getPostContent
     */
    public function getPostContent();
    /**
     * @setPostContent
     * Parameters:string $post_content
     * Returns:PostInterface
     */
    public function setPostContent($postContent);

    /**
     * @getPostTags
     */
    public function getPostTags();

    /**
     * @setPostTags
     * Parameters:string $tags
     * Returns:PostInterface
     */
    public function setPostTags($tags);

    /**
     * @getPostStatus
     */
    public function getPostStatus();

    /**
     * @setPostStatus
     * Parameters:int $status
     * Returns:PostInterface
     */
    public function setPostStatus($status);

    /**
     * @getPostFeatureImage
     */
    public function getPostFeatureImage();

    /**
     * @setPostFeatureImage
     * Parameters:string $feature_image
     * Returns:PostInterface
     */
    public function setPostFeatureImage($featureImage);
}
