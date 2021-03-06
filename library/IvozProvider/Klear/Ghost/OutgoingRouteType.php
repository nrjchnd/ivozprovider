<?php

class IvozProvider_Klear_Ghost_OutgoingRouteType extends KlearMatrix_Model_Field_Ghost_Abstract
{
    /**
     *
     * @param $model OutgoingRoute
     *            model
     * @return name of target based on outgoing route type
     */
    public function getData ($model)
    {
        $outgoingRouteType = $model->getType();

        if ($outgoingRouteType == 'group') {
            return $model->getRoutingPatternGroup()->getName();
        } elseif ($outgoingRouteType == 'pattern') {
            return $model->getRoutingPattern()->getName();
        } else {
            // Outgoing Route with unexpected Type
            return null;
        }
    }
}
