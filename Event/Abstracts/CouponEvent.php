<?php

/*
 * This file is part of the Elcodi package.
 *
 * Copyright (c) 2014 Elcodi.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Feel free to edit as you please, and have fun.
 *
 * @author Marc Morera <yuhu@mmoreram.com>
 * @author Aldo Chiecchia <zimage@tiscali.it>
 */

namespace Elcodi\Component\Coupon\Event\Abstracts;

use Symfony\Component\EventDispatcher\Event;

use Elcodi\Component\Coupon\Entity\Interfaces\CouponInterface;

/**
 * Class CouponEvent
 */
class CouponEvent extends Event
{
    /**
     * @var CouponInterface
     *
     * Coupon
     */
    protected $coupon;

    /**
     * Build method
     *
     * @param CouponInterface $coupon Coupon
     */
    public function __construct(CouponInterface $coupon)
    {
        $this->coupon = $coupon;
    }

    /**
     * Get coupon
     *
     * @return CouponInterface Coupon
     */
    public function getCoupon()
    {
        return $this->coupon;
    }
}
