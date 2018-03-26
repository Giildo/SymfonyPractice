<?php

declare(strict_types=1);

/**
 * Created by PhpStorm.
 * User: guillaumeloulier
 * Date: 26/03/2018
 * Time: 11:33
 */

namespace App\Domain\Models;


class User
{
    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $email;

    /**
     * @var array
     */
    private $roles;

    /**
     * User constructor.
     *
     * @param string $username
     * @param string $email
     */
    public function __construct(
        string $username,
        string $email
    ) {
        $this->username = $username;
        $this->email = $email;
        $this->roles[] = 'ROLE_USER';
    }
}