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

class GetOauthTokenRequest extends AbstractRequest
{
    /**
     * @var string
     */
    private $domain;

    /**
     * @var string
     */
    private $login;

    /**
     * @var boolean
     */
    private $loginIsUid;

    /**
     * @param  string  $domain
     * @param  string|integer  $login
     * @param  bool  $loginIsUid
     */
    public function __construct($domain, $login, $loginIsUid = false)
    {
        $this->domain = $domain;
        $this->login = $login;
        $this->loginIsUid = $loginIsUid;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return '/email/get_oauth_token';
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
            'domain'                            => $this->domain,
            $this->loginIsUid ? 'uid' : 'login' => $this->loginIsUid ? (int)$this->login : $this->login,
        ];
    }
}
