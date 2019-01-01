<?php
/**
 *  * Created by PhpStorm.
 * User: Dawid Bednarz( dawid@bednarz.pro )
 */
declare(strict_types=1);

namespace DawBed\PHPUser\Model\User;

use DawBed\PHPContext\ContextInterface;
use DawBed\PHPUser\UserInterface;
use DawBed\PHPUser\UserStatusInterface;

class CreateModel extends BaseModel
{
    protected $password;
    protected $passwordAlgorithm;

    function __construct(UserInterface $entity,
                         UserStatusInterface $userStatus,
                         ContextInterface $status,
                         string $passwordAlgorithm
    )
    {
        parent::__construct($entity, $userStatus, $status);
        $this->passwordAlgorithm = $passwordAlgorithm;
    }

    public function make(): UserInterface
    {
        $this->entity->setPassword($this->hashPassword())
            ->setCreatedAt(new \DateTime('NOW'));

        return $this->entity;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password)
    {
        $this->password = $password;
    }

    public function hashPassword()
    {
        return password_hash($this->password, $this->passwordAlgorithm);
    }
}