<?php

/**
 * This file is part of the FOSCommentBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace FOS\CommentBundle\Event;

use FOS\CommentBundle\Model\CommentInterface;
use Symfony\Component\EventDispatcher\Event;

class CommentPersistEvent extends CommentEvent
{
    private $abortPersist = false;

    public function abortPersist()
    {
        $this->abortPersist = true;
    }

    public function isAbortPersist()
    {
        return $this->abortPersist;
    }
}