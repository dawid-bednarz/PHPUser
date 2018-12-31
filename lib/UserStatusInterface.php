<?php
/**
 *  * Dawid Bednarz( dawid@bednarz.pro )
 * Read README.md file for more information and licence uses
 */
declare(strict_types=1);

namespace DawBed\PHPUser;

use DawBed\PHPContext\ContextInterface;

interface UserStatusInterface
{
    public function setUser(UserInterface $user): UserStatusInterface;

    public function getUser(): UserInterface;

    public function getStatus(): ContextInterface;

    public function setStatus(ContextInterface $status) : UserStatusInterface;

    public function getId(): int;

    public function setId(int $id): UserStatusInterface;
}