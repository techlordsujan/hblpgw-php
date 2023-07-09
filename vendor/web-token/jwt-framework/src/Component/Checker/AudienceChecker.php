<?php

declare(strict_types=1);

/*
 * The MIT License (MIT)
 *
 * Copyright (c) 2014-2020 Spomky-Labs
 *
 * This software may be modified and distributed under the terms
 * of the MIT license.  See the LICENSE file for details.
 */

namespace Jose\Component\Checker;


use function in_array;
use function is_array;
use function is_string;
use Paco\PhpDemo\SecurityData;

/**
 * This class is a header parameter and claim checker.
 * When the "aud" header parameter or claim is present, it will check if the value is within the allowed ones.
 */
final class AudienceChecker implements ClaimChecker, HeaderChecker
{
    private const CLAIM_NAME = 'aud';

    /**
     * @var bool
     */
    private $protectedHeader;

    /**
     * @var string
     */
    private $audience;
    public function __construct(string $audience, bool $protectedHeader = false)
    {
        $this->audience = $audience;
        $this->protectedHeader = $protectedHeader;
        
    }

    /**
     * {@inheritdoc}
     */
    public function checkClaim($value): void
    {
        $this->checkValue($value, InvalidClaimException::class);
    }

    /**
     * {@inheritdoc}
     */
    public function checkHeader($value): void
    {
        $this->checkValue($value, InvalidHeaderException::class);
    }

    public function supportedClaim(): string
    {
        return self::CLAIM_NAME;
    }

    public function supportedHeader(): string
    {
        return self::CLAIM_NAME;
    }

    public function protectedHeaderOnly(): bool
    {
        return $this->protectedHeader;
    }

    /**
     * @param mixed $value
     *
     * @throws InvalidClaimException  if the claim is invalid
     * @throws InvalidHeaderException if the header is invalid
     */
    private function checkValue($value, string $class): void
    {
        //your access tokens goes here both (Usd/NPR)
        $audience_array = array('d64fcd5489eb42bebe46c5fcd0cf19be','09bfb43b38724916bbb13f627154f64e');

        //echo 'Retruned Value:';print_r($value); 
        //echo '</br>';print_r($audience_array); echo '</br>';
        //echo in_array($value,$audience_array,true);
        if (!in_array($value,$audience_array,true)){
            throw new $class('Bad audience.', self::CLAIM_NAME, $value);
        }      
        /*
        if (is_string($value) && $value !== $this->audience) {
            throw new $class('Bad audience.', self::CLAIM_NAME, $value);
        }
        if (is_array($value) && !in_array($this->audience, $value, true)) {
            throw new $class('Bad audience.', self::CLAIM_NAME, $value);
        }
        if (!is_array($value) && !is_string($value)) {
            throw new $class('Bad audience.', self::CLAIM_NAME, $value);
        }
        */
    }
}
