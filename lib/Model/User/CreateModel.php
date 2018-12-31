<?php
/**
 *  * Created by PhpStorm.
 * User: Dawid Bednarz( dawid@bednarz.pro )
 */
declare(strict_types=1);

namespace DawBed\PHPUser\Model\User;

use DawBed\PHPUser\UserInterface;

class CreateModel extends BaseModel
{
    public function make(): UserInterface
    {
        $this->entity->setPassword($this->hashPassword())
            ->setCreatedAt(new \DateTime('NOW'));

        return $this->entity;
    }
}