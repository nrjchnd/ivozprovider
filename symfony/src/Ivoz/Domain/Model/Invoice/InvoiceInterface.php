<?php

namespace Ivoz\Domain\Model\Invoice;

use Core\Domain\Model\EntityInterface;

interface InvoiceInterface extends EntityInterface
{
    /**
     * Set number
     *
     * @param string $number
     *
     * @return InvoiceInterface
     */
    public function setNumber($number);


    /**
     * Get number
     *
     * @return string
     */
    public function getNumber();


    /**
     * Set inDate
     *
     * @param \DateTime $inDate
     *
     * @return InvoiceInterface
     */
    public function setInDate($inDate = null);


    /**
     * Get inDate
     *
     * @return \DateTime
     */
    public function getInDate();


    /**
     * Set outDate
     *
     * @param \DateTime $outDate
     *
     * @return InvoiceInterface
     */
    public function setOutDate($outDate = null);


    /**
     * Get outDate
     *
     * @return \DateTime
     */
    public function getOutDate();


    /**
     * Set total
     *
     * @param string $total
     *
     * @return InvoiceInterface
     */
    public function setTotal($total = null);


    /**
     * Get total
     *
     * @return string
     */
    public function getTotal();


    /**
     * Set taxRate
     *
     * @param string $taxRate
     *
     * @return InvoiceInterface
     */
    public function setTaxRate($taxRate = null);


    /**
     * Get taxRate
     *
     * @return string
     */
    public function getTaxRate();


    /**
     * Set totalWithTax
     *
     * @param string $totalWithTax
     *
     * @return InvoiceInterface
     */
    public function setTotalWithTax($totalWithTax = null);


    /**
     * Get totalWithTax
     *
     * @return string
     */
    public function getTotalWithTax();


    /**
     * Set status
     *
     * @param string $status
     *
     * @return InvoiceInterface
     */
    public function setStatus($status = null);


    /**
     * Get status
     *
     * @return string
     */
    public function getStatus();


    /**
     * Set invoiceTemplate
     *
     * @param \Ivoz\Domain\Model\InvoiceTemplate\InvoiceTemplateInterface $invoiceTemplate
     *
     * @return InvoiceInterface
     */
    public function setInvoiceTemplate(\Ivoz\Domain\Model\InvoiceTemplate\InvoiceTemplateInterface $invoiceTemplate = null);


    /**
     * Get invoiceTemplate
     *
     * @return \Ivoz\Domain\Model\InvoiceTemplate\InvoiceTemplateInterface
     */
    public function getInvoiceTemplate();


    /**
     * Set brand
     *
     * @param \Ivoz\Domain\Model\Brand\BrandInterface $brand
     *
     * @return InvoiceInterface
     */
    public function setBrand(\Ivoz\Domain\Model\Brand\BrandInterface $brand);


    /**
     * Get brand
     *
     * @return \Ivoz\Domain\Model\Brand\BrandInterface
     */
    public function getBrand();


    /**
     * Set company
     *
     * @param \Ivoz\Domain\Model\Company\CompanyInterface $company
     *
     * @return InvoiceInterface
     */
    public function setCompany(\Ivoz\Domain\Model\Company\CompanyInterface $company);


    /**
     * Get company
     *
     * @return \Ivoz\Domain\Model\Company\CompanyInterface
     */
    public function getCompany();


    /**
     * Set pdf
     *
     * @param Pdf $pdf
     *
     * @return InvoiceInterface
     */
    public function setPdf(Pdf $pdf);


    /**
     * Get pdf
     *
     * @return Pdf
     */
    public function getPdf();

}

