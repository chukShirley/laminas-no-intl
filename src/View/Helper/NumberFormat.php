<?php

declare(strict_types=1);

namespace NoIntl\View\Helper;

final class NumberFormat extends \Laminas\I18n\View\Helper\NumberFormat
{
    public function __construct()
    {
    }

    /**
     * Format a number
     *
     * @param  int|float   $number
     * @param  int|null    $formatStyle
     * @param  int|null    $formatType
     * @param  string|null $locale
     * @param  int|null    $decimals
     * @param  array|null  $textAttributes
     * @return string
     */
    public function __invoke(
        $number,
        $formatStyle = null,
        $formatType = null,
        $locale = null,
        $decimals = 0,
        array $textAttributes = null
    ) {
        return number_format((int)$number, $decimals);
    }
}