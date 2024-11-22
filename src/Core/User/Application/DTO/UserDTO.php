<?php

namespace App\Core\User\Application\DTO;

use App\Core\User\Domain\Status\UserStatus;

final class UserDTO
{
    public function __construct(
        public readonly string $id,
        public readonly string $email,
        public readonly UserStatus $status
    )
    {}
}