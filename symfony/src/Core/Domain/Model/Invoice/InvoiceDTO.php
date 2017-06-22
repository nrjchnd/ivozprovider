<?php

namespace Core\Domain\Model\Invoice;

use Core\Application\DataTransferObjectInterface;
use Core\Application\ForeignKeyTransformerInterface;
use Core\Application\CollectionTransformerInterface;

/**
 * @codeCoverageIgnore
 */
class InvoiceDTO implements DataTransferObjectInterface
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $number;

    /**
     * @var \DateTime
     */
    private $inDate;

    /**
     * @var \DateTime
     */
    private $outDate;

    /**
     * @var string
     */
    private $total;

    /**
     * @var string
     */
    private $taxRate;

    /**
     * @var string
     */
    private $totalWithTax;

    /**
     * @var string
     */
    private $status;

    /**
     * @var integer
     */
    private $pdfFileFileSize;

    /**
     * @var string
     */
    private $pdfFileMimeType;

    /**
     * @var string
     */
    private $pdfFileBaseName;

    /**
     * @var mixed
     */
    private $invoiceTemplateId;

    /**
     * @var mixed
     */
    private $brandId;

    /**
     * @var mixed
     */
    private $companyId;

    /**
     * @var mixed
     */
    private $invoiceTemplate;

    /**
     * @var mixed
     */
    private $brand;

    /**
     * @var mixed
     */
    private $company;

    /**
     * @return array
     */
    public function __toArray()
    {
        return [
            'id' => $this->getId(),
            'number' => $this->getNumber(),
            'inDate' => $this->getInDate(),
            'outDate' => $this->getOutDate(),
            'total' => $this->getTotal(),
            'taxRate' => $this->getTaxRate(),
            'totalWithTax' => $this->getTotalWithTax(),
            'status' => $this->getStatus(),
            'pdfFileFileSize' => $this->getPdfFileFileSize(),
            'pdfFileMimeType' => $this->getPdfFileMimeType(),
            'pdfFileBaseName' => $this->getPdfFileBaseName(),
            'invoiceTemplateId' => $this->getInvoiceTemplateId(),
            'brandId' => $this->getBrandId(),
            'companyId' => $this->getCompanyId()
        ];
    }

    /**
     * @param array $data
     * @return self
     */
    public static function fromArray(array $data)
    {
        $dto = new self();
        return $dto
            ->setId(isset($data['id']) ? $data['id'] : null)
            ->setNumber(isset($data['number']) ? $data['number'] : null)
            ->setInDate(isset($data['inDate']) ? $data['inDate'] : null)
            ->setOutDate(isset($data['outDate']) ? $data['outDate'] : null)
            ->setTotal(isset($data['total']) ? $data['total'] : null)
            ->setTaxRate(isset($data['taxRate']) ? $data['taxRate'] : null)
            ->setTotalWithTax(isset($data['totalWithTax']) ? $data['totalWithTax'] : null)
            ->setStatus(isset($data['status']) ? $data['status'] : null)
            ->setPdfFileFileSize(isset($data['pdfFileFileSize']) ? $data['pdfFileFileSize'] : null)
            ->setPdfFileMimeType(isset($data['pdfFileMimeType']) ? $data['pdfFileMimeType'] : null)
            ->setPdfFileBaseName(isset($data['pdfFileBaseName']) ? $data['pdfFileBaseName'] : null)
            ->setInvoiceTemplateId(isset($data['invoiceTemplateId']) ? $data['invoiceTemplateId'] : null)
            ->setBrandId(isset($data['brandId']) ? $data['brandId'] : null)
            ->setCompanyId(isset($data['companyId']) ? $data['companyId'] : null);
    }

    public function transformForeignKeys(ForeignKeyTransformerInterface $transformer)
    {
        $this->invoiceTemplate = $transformer->transform('Core\\Domain\\Model\\InvoiceTemplate\\InvoiceTemplateInterface', $this->getInvoiceTemplateId());
        $this->brand = $transformer->transform('Core\\Domain\\Model\\Brand\\BrandInterface', $this->getBrandId());
        $this->company = $transformer->transform('Core\\Domain\\Model\\Company\\CompanyInterface', $this->getCompanyId());
    }

    public function transformCollections(CollectionTransformerInterface $transformer)
    {

    }

    /**
     * @param integer $id
     *
     * @return InvoiceDTO
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $number
     *
     * @return InvoiceDTO
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param \DateTime $inDate
     *
     * @return InvoiceDTO
     */
    public function setInDate($inDate = null)
    {
        $this->inDate = $inDate;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getInDate()
    {
        return $this->inDate;
    }

    /**
     * @param \DateTime $outDate
     *
     * @return InvoiceDTO
     */
    public function setOutDate($outDate = null)
    {
        $this->outDate = $outDate;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getOutDate()
    {
        return $this->outDate;
    }

    /**
     * @param string $total
     *
     * @return InvoiceDTO
     */
    public function setTotal($total = null)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * @return string
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @param string $taxRate
     *
     * @return InvoiceDTO
     */
    public function setTaxRate($taxRate = null)
    {
        $this->taxRate = $taxRate;

        return $this;
    }

    /**
     * @return string
     */
    public function getTaxRate()
    {
        return $this->taxRate;
    }

    /**
     * @param string $totalWithTax
     *
     * @return InvoiceDTO
     */
    public function setTotalWithTax($totalWithTax = null)
    {
        $this->totalWithTax = $totalWithTax;

        return $this;
    }

    /**
     * @return string
     */
    public function getTotalWithTax()
    {
        return $this->totalWithTax;
    }

    /**
     * @param string $status
     *
     * @return InvoiceDTO
     */
    public function setStatus($status = null)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param integer $pdfFileFileSize
     *
     * @return InvoiceDTO
     */
    public function setPdfFileFileSize($pdfFileFileSize = null)
    {
        $this->pdfFileFileSize = $pdfFileFileSize;

        return $this;
    }

    /**
     * @return integer
     */
    public function getPdfFileFileSize()
    {
        return $this->pdfFileFileSize;
    }

    /**
     * @param string $pdfFileMimeType
     *
     * @return InvoiceDTO
     */
    public function setPdfFileMimeType($pdfFileMimeType = null)
    {
        $this->pdfFileMimeType = $pdfFileMimeType;

        return $this;
    }

    /**
     * @return string
     */
    public function getPdfFileMimeType()
    {
        return $this->pdfFileMimeType;
    }

    /**
     * @param string $pdfFileBaseName
     *
     * @return InvoiceDTO
     */
    public function setPdfFileBaseName($pdfFileBaseName = null)
    {
        $this->pdfFileBaseName = $pdfFileBaseName;

        return $this;
    }

    /**
     * @return string
     */
    public function getPdfFileBaseName()
    {
        return $this->pdfFileBaseName;
    }

    /**
     * @param integer $invoiceTemplateId
     *
     * @return InvoiceDTO
     */
    public function setInvoiceTemplateId($invoiceTemplateId)
    {
        $this->invoiceTemplateId = $invoiceTemplateId;

        return $this;
    }

    /**
     * @return integer
     */
    public function getInvoiceTemplateId()
    {
        return $this->invoiceTemplateId;
    }

    /**
     * @return \Core\Domain\Model\InvoiceTemplate\InvoiceTemplateInterface
     */
    public function getInvoiceTemplate()
    {
        return $this->invoiceTemplate;
    }

    /**
     * @param integer $brandId
     *
     * @return InvoiceDTO
     */
    public function setBrandId($brandId)
    {
        $this->brandId = $brandId;

        return $this;
    }

    /**
     * @return integer
     */
    public function getBrandId()
    {
        return $this->brandId;
    }

    /**
     * @return \Core\Domain\Model\Brand\BrandInterface
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * @param integer $companyId
     *
     * @return InvoiceDTO
     */
    public function setCompanyId($companyId)
    {
        $this->companyId = $companyId;

        return $this;
    }

    /**
     * @return integer
     */
    public function getCompanyId()
    {
        return $this->companyId;
    }

    /**
     * @return \Core\Domain\Model\Company\CompanyInterface
     */
    public function getCompany()
    {
        return $this->company;
    }
}
