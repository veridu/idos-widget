<?php

/*
 * Copyright (c) 2012-2016 Veridu Ltd <https://veridu.com>
 * All rights reserved.
 */

declare(strict_types=1);

namespace App\Validator;

use Respect\Validation\Validator;

/**
 * Widget Validation Rules.
 */
class Widget implements ValidatorInterface {
    /**
     * Validates if a token has allowed chars.
     *
     * @param string $token The token
     */
    public function assertToken($token) {
        Validator::prnt()->validate($token);
    }

    /**
     * Asserts a valid provider.
     *
     * @throws \Respect\Validation\Exceptions\ExceptionInterface
     *
     * @return void
     */
    public function assertProvider(string $provider, array $tokens) : bool {
        if (count($tokens))
            $providers = array_keys($tokens);

        if (! in_array($provider, $providers)) {
            throw new App\Exception\ProviderNotFound();
        }

        return true;
    }

    /**
     * Asserts a valid flashed public key.
     *
     * @throws \Respect\Validation\Exceptions\ExceptionInterface
     *
     * @return void
     */
    public function assertFlashedPubKey($flashedPubKey) : bool {
        Validator::arrayType()
            ->each(
                Validator::stringType()
            )->assert($flashedPubKey);

        return true;
    }

    /**
     * Asserts a valid flashed state.
     *
     * @throws \Respect\Validation\Exceptions\ExceptionInterface
     *
     * @return void
     */
    public function assertFlashedState($flashedState) : bool {
        Validator::arrayType()
            ->each(
                Validator::stringType()
            )->assert($flashedState);

        return true;
    }
}