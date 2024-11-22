<?php

namespace App\Core\User\Domain\Event;

final class UserCreatedEvent extends AbstractUserEvent
{
    public function getEmail(): string
    {
        return $this->user->getEmail();
    }
}