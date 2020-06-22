<?php
/**
 * @author Ann Kirilenko <ann.kirilenko.dev@gmail.com>
 */

namespace PhpOffice\PhpPresentation\Shape\Chart\Type;

use PhpOffice\PhpPresentation\ComparableInterface;

/**
 * \PhpOffice\PhpPresentation\Shape\Chart\Type\Bar
 */
class Radar extends AbstractType implements ComparableInterface
{
    /**
     * Specifies that the radar chart shall have lines but no markers and no fill.
     */
    const STYLE_STANDART = 'standard';
    /**
     * Specifies that the radar chart shall be filled and have lines but no markers.
     */
    const STYLE_FILLED = 'filled';
    /**
     * Specifies that the radar chart shall have lines and markers but no fill.
     */
    const STYLE_MARKER = 'marker';

    /**
     * Radar style
     *
     * @var string
     */
    protected $style = self::STYLE_STANDART;

    /**
     * Get radar style
     *
     * @return string
     */
    public function getStyle()
    {
        $this->style;
    }

    /**
     * Set radar style
     *
     * @param string $value
     * @return \PhpOffice\PhpPresentation\Shape\Chart\Type\Radar
     */
    public function setStyle($value = self::STYLE_STANDART)
    {
        $this->style = $value;
        return $this;
    }

    /**
     * Get hash code
     *
     * @return string Hash code
     */
    public function getHashCode()
    {
        $hash = '';
        foreach ($this->getSeries() as $series) {
            $hash .= $series->getHashCode();
        }
        return md5($hash . __CLASS__);
    }
}
