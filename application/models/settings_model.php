<?php
class Settings_model extends Master_model
{
    protected $_tablename = 'settings';
    
    function getSettingsValue( $store )
    {
        $return = array();
        
        $query = $this->db->get_where( $this->_tablename, 'shop = \'' . $store . '\'');
        $result = $query->result();
        
        if( count( $result ) <= 0 )
            return false;
        else
            return $result[0];
    }
    
    function install()
    {
        // Check the default user is exist
        $query = parent::getList();
        
        if( $query->num_rows() == 0 )
        {
            $data = array(
                'name' => 'popup_seconds',
                'description' => 'Seconds to show discount popup after checkout',
                'value' => '5',
                'value_type' => 'text',
                'value_scope'=> '',
            );
            parent::add($data);
            $data = array(
                'name' => 'popup_message',
                'description' => 'Message in coupon popup after checkout (HTML)',
                'value' => 'Thanks so much for filling out our survey!<BR> Use coupon code "{code}" on your next purchase for 20% off!',
                'value_type' => 'text',
                'value_scope'=> '',
            );
            parent::add($data);
            $data = array(
                'name' => 'popup_enabled',
                'description' => 'Only when it is \'ON\', the survey will be shown in Thank you page.',
                'value' => '1',
                'value_type' => 'select',
                'value_scope'=> '{"0":"OFF", "1":"ON"}',
            );
            parent::add($data);
            $data = array(
                'name' => 'popup_welcome',
                'description' => 'Survey popup welcome message',
                'value' => 'Please help us improve and save<br> 25% on your next order',
                'value_type' => 'text',
                'value_scope'=> '',
            );
            parent::add($data);
        }
    }    
    
    function update($data)
    {
        $query = $this->db->get_where( $this->_tablename, 'shop = \'' . $data['shop'] . '\'');
        $result = $query->result();
        
        if( count( $result ) <= 0 )
            $this->db->insert( $this->_tablename, $data);
        else
            $this->db->update( $this->_tablename, $data);
        
        if($this->db->affected_rows()>0){
            return true;
        }
        else{
            return false;
        }
    }
}  
?>