<?php
declare(strict_types=1);

namespace App\Mailer;

use Cake\Mailer\Mailer;


/**
 * Users mailer.
 */
class UsersMailer extends Mailer
{
    /**
     * Mailer's name.
     *
     * @var string
     */
    public static $name = 'Users';

    public function welcome($user)
    {
        $this->setTo($user->nome)
        ->setProfile('teste')
        ->setSubject(sprintf('bem-vindo, %s', $user->nome));

    }
}
