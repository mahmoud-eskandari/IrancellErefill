<?php

namespace eskandari\IrancellErefill;

class GenericServiceWebAdapterService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array(
        'processRequest' => 'eskandari\\IrancellErefill\\processRequest',
        'clientRequest' => 'eskandari\\IrancellErefill\\clientRequest',
        'details' => 'eskandari\\IrancellErefill\\details',
        'param' => 'eskandari\\IrancellErefill\\param',
        'processRequestResponse' => 'eskandari\\IrancellErefill\\processRequestResponse',
        'clientResponse' => 'eskandari\\IrancellErefill\\clientResponse',
        'offerList' => 'eskandari\\IrancellErefill\\offerList',
        'offer' => 'eskandari\\IrancellErefill\\offer',
        'offers' => 'eskandari\\IrancellErefill\\offers',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {

        foreach (self::$classmap as $key => $value) {
            if (!isset($options['classmap'][$key])) {
                $options['classmap'][$key] = $value;
            }
        }
        $options = array_merge(array(
            'features' => 1,
        ), $options);
        if (!$wsdl) {
            $wsdl = 'https://92.42.55.16:6022/erefill_bl/GenericService?wsdl';
        }
        parent::__construct($wsdl, $options);
    }

    /**
     * @param processRequest $parameters
     * @return processRequestResponse
     */
    public function processRequest(processRequest $parameters)
    {
        return $this->__soapCall('processRequest', array($parameters));
    }

}
