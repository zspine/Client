<?php

declare(strict_types=1);

/*
 * This file is part of the DigitalOceanV2 library.
 *
 * (c) Antoine Corcy <contact@sbin.dk>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DigitalOceanV2\Api;

use DigitalOceanV2\Entity\Size as SizeEntity;
use DigitalOceanV2\Exception\ExceptionInterface;
use DigitalOceanV2\HttpClient\Util\JsonObject;

/**
 * @author Yassir Hannoun <yassir.hannoun@gmail.com>
 * @author Graham Campbell <graham@alt-three.com>
 */
class Size extends AbstractApi
{
    /**
     * @throws ExceptionInterface
     *
     * @return SizeEntity[]
     */
    public function getAll()
    {
        $sizes = $this->get('sizes');

        return array_map(function ($size) {
            return new SizeEntity($size);
        }, $sizes->sizes);
    }
}
