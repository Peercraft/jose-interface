<?php

/*
 * The MIT License (MIT)
 *
 * Copyright (c) 2014-2015 Spomky-Labs
 *
 * This software may be modified and distributed under the terms
 * of the MIT license.  See the LICENSE file for details.
 */

namespace Jose\Operation;

use Jose\JWAInterface;
use Jose\JWKInterface;

/**
 * This interface is used by algorithms that have capabilities to sign data and verify a signature.
 */
interface SignatureInterface extends JWAInterface
{
    /**
     * Sign the input.
     *
     * @param \Jose\JWKInterface $key   The private key used to sign the data
     * @param string             $input The input
     *
     * @throws \Exception If key does not support the algorithm or if the key usage does not authorize the operation
     *
     * @return string
     */
    public function sign(JWKInterface $key, $input);

    /**
     * Verify the signature of data.
     *
     * @param \Jose\JWKInterface $key       The private key used to sign the data
     * @param string             $input     The input
     * @param string             $signature The signature to verify
     *
     * @throws \Exception If key does not support the algorithm or if the key usage does not authorize the operation
     *
     * @return bool
     */
    public function verify(JWKInterface $key, $input, $signature);
}
