<?php
defined('PHPFOX') or exit('NO DICE!');

/**
 * @copyright [PHPFOX_COPYRIGHT]
 * @author phpFox LLC
 * Class Friend_Component_Controller_Admincp_Index
 */
class Friend_Component_Controller_Admincp_Index extends Phpfox_Component
{
    /**
     * Controller
     */
    public function process()
    {
        $this->url()->send('admincp.setting.edit', ['module-id' => 'friend']);
    }
}