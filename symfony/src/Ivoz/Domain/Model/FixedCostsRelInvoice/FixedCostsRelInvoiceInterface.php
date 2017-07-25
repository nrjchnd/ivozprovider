<?php

namespace Ivoz\Domain\Model\FixedCostsRelInvoice;

use Core\Domain\Model\EntityInterface;

interface FixedCostsRelInvoiceInterface extends EntityInterface
{
    /**
     * Set quantity
     *
     * @param integer $quantity
     *
     * @return FixedCostsRelInvoiceInterface
     */
    public function setQuantity($quantity = null);


    /**
     * Get quantity
     *
     * @return integer
     */
    public function getQuantity();


    /**
     * Set brand
     *
     * @param \Ivoz\Domain\Model\Brand\BrandInterface $brand
     *
     * @return FixedCostsRelInvoiceInterface
     */
    public function setBrand(\Ivoz\Domain\Model\Brand\BrandInterface $brand);


    /**
     * Get brand
     *
     * @return \Ivoz\Domain\Model\Brand\BrandInterface
     */
    public function getBrand();


    /**
     * Set fixedCost
     *
     * @param \Ivoz\Domain\Model\FixedCost\FixedCostInterface $fixedCost
     *
     * @return FixedCostsRelInvoiceInterface
     */
    public function setFixedCost(\Ivoz\Domain\Model\FixedCost\FixedCostInterface $fixedCost);


    /**
     * Get fixedCost
     *
     * @return \Ivoz\Domain\Model\FixedCost\FixedCostInterface
     */
    public function getFixedCost();


    /**
     * Set invoice
     *
     * @param \Ivoz\Domain\Model\Invoice\InvoiceInterface $invoice
     *
     * @return FixedCostsRelInvoiceInterface
     */
    public function setInvoice(\Ivoz\Domain\Model\Invoice\InvoiceInterface $invoice);


    /**
     * Get invoice
     *
     * @return \Ivoz\Domain\Model\Invoice\InvoiceInterface
     */
    public function getInvoice();



}

