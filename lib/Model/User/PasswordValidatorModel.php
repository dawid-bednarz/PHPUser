<?php
/**
 *  * Dawid Bednarz( dawid@bednarz.pro )
 * Read README.md file for more information and licence uses
 */
declare(strict_types=1);

namespace DawBed\PHPUser\Model\User;

use DawBed\PHPUser\UserInterface;

class PasswordValidatorModel
{
    public function valid(UserInterface $user, string $password): bool
    {
        if (password_verify($password, $user->getPassword()) !== false) {
            return true;
        }
        return false;
    }
}