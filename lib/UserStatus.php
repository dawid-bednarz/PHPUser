<?php
/**
 *  * Created by PhpStorm.
 * User: Dawid Bednarz( dawid@bednarz.pro )
 */
declare(strict_types=1);

namespace DawBed\PHPUser;

use DawBed\PHPContext\ContextInterface;

class UserStatus implements UserStatusInterface
{
    protected $id;
    protected $status;
    protected $user;

    public function setUser(UserInterface $user): UserStatusInterface
    {
        $this->user = $user;

        return $this;
    }

    public function getUser(): UserInterface
    {
        return $this->user;
    }

    public function getStatus(): ContextInterface
    {
        return $this->status;
    }

    public function setStatus(ContextInterface $status): UserStatusInterface
    {
        $this->status = $status;

        return $this;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): UserStatusInterface
    {
        $this->id = $id;
        return $this;
    }
}