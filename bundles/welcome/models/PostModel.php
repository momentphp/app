<?php

namespace bundles\welcome\models;

/**
 * PostModel
 */
class PostModel extends \momentphp\Model
{
    /**
     * Return all posts
     *
     * @return array
     */
    public function findAll()
    {
        return $this->db()->table('posts')->get();
    }
}
