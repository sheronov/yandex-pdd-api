<?php

/*
 * This file is part of the yandex-pdd-api project.
 *
 * (c) AmaxLab 2017 <http://www.amaxlab.ru>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AmaxLab\YandexPddApi\Request;

use AmaxLab\YandexPddApi\Curl\CurlClient;

/**
 * @author Egor Zyuskin <ezyuskin@amaxlab.ru>
 */
class RegisterDomainRequest extends AbstractRequest
{
    /**
     * @var string
     */
    private $domainName;

    /**
     * @param string $domainName
     */
    public function __construct($domainName)
    {
        $this->domainName = $domainName;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return '/domain/register';
    }

    /**
     * @return string
     */
    public function getMethod()
    {
        return CurlClient::METHOD_POST;
    }

    /**
     * @return array
     */
    public function getParams()
    {
        return ['domain' => $this->domainName];
    }
}
