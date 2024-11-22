<?php

namespace App\Core\User\Application\Query\GetInactiveUsers;

use App\Core\User\Application\DTO\UserDTO;
use App\Core\User\Domain\Repository\UserRepositoryInterface;
use App\Core\User\Domain\User;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;

#[AsMessageHandler]
final class GetInactiveUsersHandler
{
    public function __construct(private readonly UserRepositoryInterface $userRepository) {}

    public function __invoke(GetInactiveUsersQuery $query): array
    {
        $users = $this->userRepository->getInactiveUsers();

        return array_map(function (User $user) {
            return new UserDTO(
                id: $user->getId(),
                email: $user->getEmail(),
                status: $user->getStatus()
            );
        }, $users);
    }
}