<?php

/**
 * @package    netzmacht
 * @author     David Molineus <david.molineus@netzmacht.de>
 * @copyright  2016 netzmacht David Molineus. All rights reserved.
 * @filesource
 *
 */

namespace Netzmacht\LeafletPHP\Plugins\OverpassLayer;

use Netzmacht\LeafletPHP\Definition\HasOptions;
use Netzmacht\LeafletPHP\Definition\OptionsTrait;

/**
 * Class MinZoomIndicatorOptions.
 *
 * @package Netzmacht\LeafletPHP\Plugins\OverpassLayer
 */
class MinZoomIndicatorOptions implements HasOptions
{
    use OptionsTrait;

    /**
     * Set the position of the indicator.
     * 
     * @param string $position Position.
     *
     * @return $this
     */
    public function setPosition($position)
    {
        return $this->setOption('position', $position);
    }

    /**
     * Get the position.
     * 
     * @return string
     */
    public function getPosition()
    {
        return $this->getOption('position', 'bottomleft');
    }
    
    /**
     * Set the message of if no min zoom layer is assigned.
     *
     * @param string $minZoomMessageNoLayer MinZoomMessageNoLayer.
     *
     * @return $this
     */
    public function setMinZoomMessageNoLayer($minZoomMessageNoLayer)
    {
        return $this->setOption('minZoomMessageNoLayer', $minZoomMessageNoLayer);
    }

    /**
     * Get the minZoomMessageNoLayer.
     *
     * @return string
     */
    public function getMinZoomMessageNoLayer()
    {
        return $this->getOption('minZoomMessageNoLayer', 'no layer assigned');
    }

    /**
     * Set the message min zoom message.
     *
     * @param string $minZoomMessage Min zoom message.
     *
     * @return $this
     */
    public function setMinZoomMessage($minZoomMessage)
    {
        return $this->setOption('minZoomMessage', $minZoomMessage);
    }

    /**
     * Get the minZoomMessage.
     *
     * @return string
     */
    public function getMinZoomMessage()
    {
        return $this->getOption('minZoomMessage', 'current Zoom-Level: CURRENTZOOM all data at Level: MINZOOMLEVEL');
    }
}
