<?php
/**
 * This file is part of the OpenTrans php library
 *
 * (c) Sven Eisenschmidt <sven.eisenschmidt@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SE\Component\OpenTrans\Node\Order;

use \JMS\Serializer\Annotation as Serializer;

use \SE\Component\OpenTrans\Node\AbstractNode;
use \SE\Component\OpenTrans\Node\Order\Remark;
use \SE\Component\OpenTrans\Node\Order\OrderPartiesNode;

/**
 *
 * @package SE\Component\OpenTrans
 * @author Sven Eisenschmidt <sven.eisenschmidt@gmail.com>
 *
 * @Serializer\XmlRoot("ORDER_INFO")
 * @Serializer\ExclusionPolicy("all")
 */
class OrderInfoNode extends AbstractNode
{
    /**
     *
     * @Serializer\Expose
     * @Serializer\SerializedName("ORDER_ID")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $orderId;
    /**
     *
     * @Serializer\Expose
     * @Serializer\SerializedName("ORDER_DATE")
     * @Serializer\Type("DateTime")
     * @Serializer\XmlElement(cdata=false)
     *
     * @var string
     */
    protected $orderDate;

    /**
     *
     * @Serializer\Expose
     * @Serializer\SerializedName("PRICE_CURRENCY")
     * @Serializer\Type("string")
     *
     * @var string
     */
    protected $currency;

    /**
     *
     * @Serializer\Expose
     * @Serializer\Type("array<SE\Component\OpenTrans\Node\Order\RemarkNode>")
     * @Serializer\XmlList(inline=true, entry="REMARK")
     *
     * @var array|\SE\Component\OpenTrans\Node\Order\RemarkNode
     */
    protected $remarks;

    /**
     *
     * @Serializer\Expose
     * @Serializer\SerializedName("ORDER_PARTIES")
     * @Serializer\Type("SE\Component\OpenTrans\Node\Order\OrderPartiesNode")
     *
     * @var \SE\Component\OpenTrans\Node\Order\OrderPartiesNode
     */
    protected $orderParties;

    /**
     * @Serializer\Expose
     * @Serializer\SerializedName("PARTIES")
     * @Serializer\Type("SE\Component\OpenTrans\Node\Order\PartyCollectionNode")
     *
     * @var PartyCollectionNode
     */
    protected $parties;

    /**
     *
     * @param \SE\Component\OpenTrans\Node\Order\RemarkNode $remark
     */
    public function addRemark(RemarkNode $remark)
    {
        $this->remarks[] = $remark;
    }

    /**
     *
     * @param array|\SE\Component\OpenTrans\Node\Order\RemarkNode $remarks
     */
    public function setRemarks(array $remarks)
    {
        $this->remarks = $remarks;
    }

    /**
     *
     * @return array|\SE\Component\OpenTrans\Node\Order\RemarkNode
     */
    public function getRemarks()
    {
        return $this->remarks;
    }

    /**
     *
     * @param string $orderId
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
    }

    /**
     *
     * @return string
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     *
     * @param \DateTime $orderDate
     */
    public function setOrderDate(\DateTime $orderDate)
    {
        $this->orderDate = $orderDate;
    }

    /**
     *
     * @return string
     */
    public function getOrderDate()
    {
        return $this->orderDate;
    }

    /**
     *
     * @param \SE\Component\OpenTrans\Node\Order\OrderPartiesNode $orderParties
     */
    public function setOrderParties(OrderPartiesNode $orderParties)
    {
        $this->orderParties = $orderParties;
    }

    /**
     * @param PartyCollectionNode $parties
     */
    public function setParties(PartyCollectionNode $parties)
    {
        $this->parties = $parties;
    }

    /**
     *
     * @return \SE\Component\OpenTrans\Node\Order\OrderPartiesNode
     */
    public function getOrderParties()
    {
        return $this->orderParties;
    }

    /**
     *
     * @param string $currency
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    /**
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }
}
