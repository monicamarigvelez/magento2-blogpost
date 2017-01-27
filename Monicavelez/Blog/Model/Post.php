<?php

/**
 * Created by PhpStorm.
 * User: mvelez
 * Date: 1/24/2017
 * Time: 3:24 PM
 */

namespace Monicavelez\Blog\Model;

use Monicavelez\Blog\Api\Data\PostInterface;
use Magento\Framework\DataObject\IdentityInterface;


class Post extends \Magento\Framework\Model\AbstractModel implements PostInterface, IdentityInterface
{

    /**
     * #@+
     *Post's Statuses
     */

    const STATUS_ENABLED = 1;
    const STATUS_DISABLED = 0;

    /**
     * CMS page cache tag
     */

    const CACHE_TAG = 'blog_post';

    /**
     * @var string
     */

    protected $_cacheTag = 'blog_post';

    /**
     * Prefix of model events names
     * @var string
     */
    protected $_eventPrefix = 'blog_post';

    /**
     *
     * Initialize resource model
     * @return void
     */

    public function _construct()
    {
        // TODO: Change the autogenerated stub

        $this->_init('Monicavelez\Blog\Model\ResourceModel\Post');
    }

    /**
     *
     * Check if the post url key exists
     * return post id if post exists
     *
     * @param string $url_key
     * $return int
     *
     */

    public function checkUrlKey($url_key){
        return $this->_getResource()->checkUrlKey($url_key);
    }

    /**
     *
     * Prepare post's statuses.
     * Available event blog_post_available_statuses to customize statuses
     *
     * @return array
     *
     */

    public function getAvailableStatuses(){
        return [self::STATUS_ENABLED => __('Enabled'), self::STATUS_DISABLED => __('Disabled')];
    }

    /**
     *
     * Return unique ID for each object in system
     * @return array
     */

    public function getIdentities()
    {
        // TODO: Implement getIdentities() method.

        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    /**
     * Get ID
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->getData(self::POST_ID);
    }

    /**
     * Get URL Key
     *
     * @return string
     */
    public function getUrlKey()
    {
        return $this->getData(self::URL_KEY);
    }

    /**
     * Get title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->getData(self::TITLE);
    }

    /**
     * Get content
     *
     * @return string|null
     */
    public function getContent()
    {
        return $this->getData(self::CONTENT);
    }

    /**
     * Get creation time
     *
     * @return string|null
     */
    public function getCreationTime()
    {
        return $this->getData(self::CREATION_TIME);
    }

    /**
     * Get update time
     *
     * @return string|null
     */
    public function getUpdateTime()
    {
        return $this->getData(self::UPDATE_TIME);
    }

    /**
     * Is active
     *
     * @return bool|null
     */
    public function isActive()
    {
        return (bool)$this->getData(self::IS_ACTIVE);
    }

    /**
     * Set ID
     *
     * @param int $id
     * @return \Monicavelez\Blog\Api\Data\PostInterface
     */
    public function setId($id)
    {
        return $this->setData(self::POST_ID, $id);
    }

    /**
     * Set URL Key
     *
     * @param string $url_key
     * @return \Monicavelez\Blog\Api\Data\PostInterface
     */
    public function setUrlKey($url_key)
    {
        return $this->setData(self::URL_KEY, $url_key);
    }

    /**
     * Set title
     *
     * @param string $title
     * @return \Monicavelez\Blog\Api\Data\PostInterface
     */
    public function setTitle($title)
    {
        return $this->setData(self::TITLE, $title);
    }

    /**
     * Set content
     *
     * @param string $content
     * @return \Monicavelez\Blog\Api\Data\PostInterface
     */
    public function setContent($content)
    {
        return $this->setData(self::CONTENT, $content);
    }

    /**
     * Set creation time
     *
     * @param string $creation_time
     * @return \Monicavelez\Blog\Api\Data\PostInterface
     */
    public function setCreationTime($creation_time)
    {
        return $this->setData(self::CREATION_TIME, $creation_time);
    }

    /**
     * Set update time
     *
     * @param string $update_time
     * @return \Monicavelez\Blog\Api\Data\PostInterface
     */
    public function setUpdateTime($update_time)
    {
        return $this->setData(self::UPDATE_TIME, $update_time);
    }

    /**
     * Set is active
     *
     * @param int|bool $is_active
     * @return \Monicavelez\Blog\Api\Data\PostInterface
     */
    public function setIsActive($is_active)
    {
        return $this->setData(self::IS_ACTIVE, $is_active);
    }






}