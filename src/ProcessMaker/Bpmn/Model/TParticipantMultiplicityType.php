<?php

namespace ProcessMaker\Bpmn\Model;

/**
 * Class representing TParticipantMultiplicityType
 *
 *
 * XSD Type: tParticipantMultiplicity
 */
class TParticipantMultiplicityType extends TBaseElementType
{

    /**
     * @property integer $minimum
     */
    private $minimum = null;

    /**
     * @property integer $maximum
     */
    private $maximum = null;

    /**
     * Gets as minimum
     *
     * @return integer
     */
    public function getMinimum()
    {
        return $this->minimum;
    }

    /**
     * Sets a new minimum
     *
     * @param integer $minimum
     * @return self
     */
    public function setMinimum($minimum)
    {
        $this->minimum = $minimum;
        return $this;
    }

    /**
     * Gets as maximum
     *
     * @return integer
     */
    public function getMaximum()
    {
        return $this->maximum;
    }

    /**
     * Sets a new maximum
     *
     * @param integer $maximum
     * @return self
     */
    public function setMaximum($maximum)
    {
        $this->maximum = $maximum;
        return $this;
    }


}

