<?php

namespace App\Enums;

enum SupportStatus: string
{
    case A = 'open';
    case C = 'closed';
    case P = 'pending';

    public static function fromValue(string $name): string
    {
        foreach (self::cases() as $status) {
            if ($name === $status->name) {
                return $status->value;
            }
        }

        throw new \ValueError('this $status is not valid');
    }
}