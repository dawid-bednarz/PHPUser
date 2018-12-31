<?php
/**
 *  * Created by PhpStorm.
 * User: Dawid Bednarz( dawid@bednarz.pl )
 */
declare(strict_types=1);

namespace DawBed\PHPUser;

use DateTime;
use Doctrine\Common\Collections\ArrayCollection;

interface UserInterface
{
    public function getId():?int;

    public function getEmail(): ?string;

    public function getPassword(): ?string;

    public function setEmail(string $email): UserInterface;

    public function setPassword(string $password): UserInterface;

    public function getCreatedAt(): ?DateTime;

    public function setCreatedAt(DateTime $createdAt): UserInterface;

    public function getStatuses() : ?ArrayCollection;

    public function addStatus(UserStatusInterface $status): UserInterface;

    public function removeStatus(UserStatusInterface $status): UserInterface;

}