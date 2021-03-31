<?php

/*
 * This file is part of the yandex-pdd-api project.
 *
 * (c) AmaxLab 2017 <http://www.amaxlab.ru>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AmaxLab\YandexPddApi\Manager;

use AmaxLab\YandexPddApi\Request\Domain\DeleteDomainRequest;
use AmaxLab\YandexPddApi\Request\Domain\GetDomainSettingRequest;
use AmaxLab\YandexPddApi\Request\Domain\GetDomainsListRequest;
use AmaxLab\YandexPddApi\Request\Domain\GetDomainRegistrationStatusRequest;
use AmaxLab\YandexPddApi\Request\Domain\RegisterDomainRequest;
use AmaxLab\YandexPddApi\Request\Domain\SetDomainCountryRequest;
use AmaxLab\YandexPddApi\Response\Domain\DeleteDomainResponse;
use AmaxLab\YandexPddApi\Response\Domain\GetDomainSettingsResponse;
use AmaxLab\YandexPddApi\Response\Domain\GetDomainsListResponse;
use AmaxLab\YandexPddApi\Response\Domain\GetDomainRegistrationStatusResponse;
use AmaxLab\YandexPddApi\Response\Domain\RegisterDomainResponse;
use AmaxLab\YandexPddApi\Response\Domain\SetDomainCountryResponse;

class DomainManager extends AbstractManager
{
    /**
     * @return GetDomainsListResponse|object
     */
    public function getDomainList()
    {
        return $this->request(new GetDomainsListRequest(), GetDomainsListResponse::class);
    }

    /**
     * @param string $domainName
     *
     * @return RegisterDomainResponse|object
     */
    public function registerDomain($domainName)
    {
        return $this->request(new RegisterDomainRequest($domainName), RegisterDomainResponse::class);
    }

    /**
     * @param string $domainName
     *
     * @return GetDomainRegistrationStatusResponse|object
     */
    public function getRegistrationStatusDomain($domainName)
    {
        return $this->request(new GetDomainRegistrationStatusRequest($domainName),
            GetDomainRegistrationStatusResponse::class);
    }

    /**
     * @param string $domainName
     *
     * @return GetDomainSettingsResponse|object
     */
    public function getDomainSettings($domainName)
    {
        return $this->request(new GetDomainSettingRequest($domainName), GetDomainSettingsResponse::class);
    }

    /**
     * @param string $domainName
     *
     * @return DeleteDomainResponse|object
     */
    public function deleteDomain($domainName)
    {
        return $this->request(new DeleteDomainRequest($domainName), DeleteDomainResponse::class);
    }

    /**
     * @param string $domainName
     * @param string $country
     *
     * @return SetDomainCountryResponse|object
     */
    public function setDomainCountry($domainName, $country)
    {
        return $this->request(new SetDomainCountryRequest($domainName, $country), SetDomainCountryResponse::class);
    }
}
