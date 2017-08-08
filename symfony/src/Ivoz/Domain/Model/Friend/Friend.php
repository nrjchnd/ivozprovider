<?php

namespace Ivoz\Domain\Model\Friend;

use Doctrine\Common\Collections\Criteria;
use Ivoz\Domain\Model\CallACL\CallACL;
use Ivoz\Domain\Model\Company\Company;
use Ivoz\Domain\Model\Country\Country;
use Ivoz\Domain\Model\FriendsPattern\FriendsPattern;

/**
 * Friend
 */
class Friend extends FriendAbstract implements FriendInterface
{
    use FriendTrait;


    public function getContact()
    {
        return sprintf("sip:%s@%s",
            $this->getName(),
            $this->getDomain());
    }

    public function getSorcery()
    {
        return sprintf(
            "b%dc%df%d_%s",
            $this
                ->getCompany()
                ->getBrand()
                ->getId(),
            $this->getCompany()->getId(),
            $this->getId(),
            $this->getName()
        );
    }

    public function checkExtension($exten)
    {
        $patterns = $this->getPatterns();
        /**
         * @var FriendsPattern $pattern
         */
        foreach ($patterns as $pattern) {
            $regexp = '/' . $pattern->getRegExp() . '/';
            if (preg_match($regexp, $exten)) {

                return true;
            }
        }

        return false;
    }

    /**
     * @param string $exten
     * @return bool canCall
     */
    public function isAllowedToCall($exten)
    {
        /**
         * @var CallACL $callAcl
         */
        $callAcl = $this->getCallACL();
        if (empty($callAcl)) {
            return true;
        }
        return $callAcl->dstIsCallable($exten);
    }

    /**
     * @brief Return Friend country or company if null
     */
    public function getCountry()
    {
        $country = parent::getCountry();
        if (is_null($country)) {

            return $this->getCompany()->getCountry();
        }

        return $country;
    }

    /**
     * Convert a user dialed number to E164 form
     *
     * param string $number
     * return string number in E164
     */
    public function preferredToE164($prefNumber)
    {
        // Remove company outbound prefix
        /**
         * @var Company $company
         */
        $company = $this->getCompany();
        $prefNumber = $company->removeOutboundPrefix($prefNumber);

        // Get user country
        /**
         * @var Country $country
         */
        $country = $this->getCountry();
        // Return e164 number dialed by this user

        return $country->preferredToE164($prefNumber, $this->getAreaCode());
    }

    /**
     * Convert a received number to User prefered format
     *
     * @param unknown $number
     */
    public function E164ToPreferred($e164number)
    {
        // Get User country
        $country = $this->getCountry();
        // Convert from E164 to user country preferred format
        $prefnumber = $country->E164ToPreferred($e164number, $this->getAreaCode());
        // Add Company outbound prefix
        return $this->getCompany()->addOutboundPrefix($prefnumber);
    }

    public function getRequestDirectUri($callee)
    {
        $uri = sprintf("sip:%s@%s", $callee, $this->getIp());

        // Check if the configured port is not the standard (5060)
        $port = $this->getPort();
        if (!is_null($port) && $port != 5060) {
            $uri .= ":$port";
        }

        // Check if the configured transport is not the standard (UDP)
        $transport = $this->getTransport();
        if ($transport != 'udp') {
            $uri .= ";transport=$transport";
        }

        return $uri;
    }

    /**
     * Obtain content for X-Info-Friend header
     *
     * @param called $number
     */
    public function getRequestUri($callee)
    {
        if ($this->getDirectConnectivity() == 'yes') {

            return $this->getRequestDirectUri($callee);
        } else {
            // Only Kamailio knows this!
            return 'dynamic';
        }
    }

    public function getAstPsEndpoint()
    {
        $astPsEnpoints = $this->getPsEndpoints(
            Criteria::create()->setMaxResults(1)
        );

        return current($astPsEnpoints);
    }


    public function getLanguageCode()
    {
        $language = $this->getLanguage();
        if (!$language) {

            return $this
                ->getCompany()
                ->getLanguageCode();
        }

        return $language->getIden();
    }

    /**
     * Get Friend outgoingDDI
     * If no DDI is assigned, retrieve company's default DDI
     */
    public function getOutgoingDDI()
    {
        $ddi = parent::getOutgoingDDI();
        if (empty($ddi)) {
            $ddi = $this
                ->getCompany()
                ->getOutgoingDDI();
        }

        return $ddi;
    }
}

