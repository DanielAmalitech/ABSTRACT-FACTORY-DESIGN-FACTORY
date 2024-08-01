<?php

namespace Sofa;

interface SofaInterface
{
    /**
     * @param string $color
     * @return string
     */
    public function color(string $color): string;

    /**
     * @param float $width
     * @return float
     */
    public function width(float $width): float;

    /**
     * @param float $height
     * @return float
     */
    public function height(float $height): float;

    /**
     * @return string
     */
    public function getType() :string;
}