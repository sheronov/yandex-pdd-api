<?php

/*
 * This file is part of the yandex-pdd-api project.
 *
 * (c) AmaxLab 2017 <http://www.amaxlab.ru>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AmaxLab\YandexPddApi\Response;

/**
 * @author Egor Zyuskin <ezyuskin@amaxlab.ru>
 */
abstract class AbstractPaginationResponse extends AbstractResponse
{
    protected $direction;

    protected $on_page;

    protected $found;

    protected $total;

    protected $page;

    protected $order;
}
