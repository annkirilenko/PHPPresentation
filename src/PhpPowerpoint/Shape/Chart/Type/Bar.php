<?php
/**
 * This file is part of PHPPowerPoint - A pure PHP library for reading and writing
 * presentations documents.
 *
 * PHPPowerPoint is free software distributed under the terms of the GNU Lesser
 * General Public License version 3 as published by the Free Software Foundation.
 *
 * For the full copyright and license information, please read the LICENSE
 * file that was distributed with this source code. For the full list of
 * contributors, visit https://github.com/PHPOffice/PHPWord/contributors.
 *
 * @link        https://github.com/PHPOffice/PHPPowerPoint
 * @copyright   2009-2014 PHPPowerPoint contributors
 * @license     http://www.gnu.org/licenses/lgpl.txt LGPL version 3
 */

namespace PhpOffice\PhpPowerpoint\Shape\Chart\Type;

use PhpOffice\PhpPowerpoint\ComparableInterface;

/**
 * \PhpOffice\PhpPowerpoint\Shape\Chart\Type\Bar
 */
class Bar extends AbstractType implements ComparableInterface
{
    /** Orientation of bars */
    const DIRECTION_VERTICAL = 'col';
    const DIRECTION_HORIZONTAL = 'bar';

    /** Grouping of bars */
    const GROUPING_CLUSTERED = 'clustered'; //Chart series are drawn next to each other along the category axis.
    const GROUPING_STACKED = 'stacked'; //Chart series are drawn next to each other on the value axis.
    const GROUPING_PERCENTSTACKED = 'percentStacked'; //Chart series are drawn next to each other along the value axis and scaled to total 100%


    /**
     * Orientation of bars
     *
     * @var string
     */
    protected $barDirection = self::DIRECTION_VERTICAL;


    /**
     * Grouping of bars
     *
     * @var string
     */
    protected $barGrouping = self::GROUPING_CLUSTERED;


    /**
     * Set bar orientation
     *
     * @param string                          $value
     * @return \PhpOffice\PhpPowerpoint\Shape\Chart\Type\Bar
     */
    public function setBarDirection($value = self::DIRECTION_VERTICAL)
    {
        $this->barDirection = $value;
        return $this;
    }

    /**
     * Get orientation
     *
     * @return string
     */
    public function getBarDirection()
    {
        return $this->barDirection;
    }

    /**
     * Set bar grouping (stack or expanded style bar)
     *
     * @param string                          $value
     * @return \PhpOffice\PhpPowerpoint\Shape\Chart\Type\Bar
     */
    public function setBarGrouping($value = self::GROUPING_CLUSTERED)
    {
        $this->barGrouping = $value;
        return $this;
    }

    /**
     * Get grouping  (stack or expanded style bar)
     *
     * @return string
     */
    public function getBarGrouping()
    {
        return $this->barGrouping;
    }
    
    /**
     * Get hash code
     *
     * @return string Hash code
     */
    public function getHashCode()
    {
        $hash = '';
        foreach ($this->getData() as $series) {
            $hash .= $series->getHashCode();
        }
        return md5($hash . __CLASS__);
    }
}