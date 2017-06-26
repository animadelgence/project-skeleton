<?php

namespace Plugin\Controller\Plugin;

use Zend\Mvc\Controller\Plugin\AbstractPlugin;

class modelplugin extends routeplugin {
    public $corporateadminsTable;
     public function getcorporate_adminsTable() {
        if (!$this->corporateadminsTable) {

            $sm = $this->getController()->getServiceLocator();
            $this->corporateadminsTable = $sm->get('Corporateadmin\Model\corporateadminsTable');
        }
        return $this->corporateadminsTable;
    }
    
    
}
