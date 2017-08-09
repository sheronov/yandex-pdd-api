<?php

/*
 * This file is part of the yandex-pdd-api project.
 *
 * (c) AmaxLab 2017 <http://www.amaxlab.ru>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AmaxLab\YandexPddApi\Request\MailBox;

use AmaxLab\YandexPddApi\Curl\CurlClient;
use AmaxLab\YandexPddApi\Request\AbstractRequest;

/**
 * @author Egor Zyuskin <ezyuskin@amaxlab.ru>
 */
class SetPasswordMailBoxRequest extends AbstractRequest
{
    /**
     * @var string
     */
    private $domain;

    /**
     * @var string
     */
    private $uid;

    /**
     * @var string
     */
    private $password;

    /**
     * @param string $domain
     * @param string $uid
     * @param string $password
     */
    public function __construct($domain, $uid, $password)
    {
        $this->domain = $domain;
        $this->uid = $uid;
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return '/email/edit';
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
        return [
            'domain' => $this->domain,
            'uid' => $this->uid,
            'password' => $this->password,
        ];
    }
}
