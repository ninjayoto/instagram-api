<?php

namespace NicklasW\Instagram\DTO\Messages;

use NicklasW\Instagram\DTO\Envelope;
use NicklasW\Instagram\Session\Session;
use Traits\MappableTrait;

class SessionMessage extends Envelope
{

    use MappableTrait;

    /**
     * The logged in user property.
     *
     * @var \NicklasW\Instagram\DTO\Session\User
     * @name logged_in_user
     */
    protected $loggedInUser;

    /**
     * @var Session
     */
    protected $session;

    /**
     * Returns the logged in user.
     *
     * @return \NicklasW\Instagram\DTO\Session\User
     */
    public function getLoggedInUser()
    {
        return $this->loggedInUser;
    }

    /**
     * @return Session
     */
    public function getSession(): Session
    {
        return $this->session;
    }

    /**
     * @param Session $session
     */
    public function setSession(Session $session)
    {
        $this->session = $session;
    }

}