<?php

class MetaphoneBarChart extends BarChart {

    function getValue($point)
    {
        return 100 * $point->getCount() / $point->getTotal();
    }

    function getLabel($point)
    {
        return $point->getName();
    }

    function getTitle($point)
    {
        return $point->getName() . ": " . number_format($this->getValue($point), 4);
    }

    function getAnchor($point)
    {
        return 'name.php?' . NAME_KEY . '=' . $point->getName() . '&' . GENDER_KEY . '=' . $point->getGender();
    }

}
