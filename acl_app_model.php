<?php
	class AclAppModel extends AppModel
	{
    	function notSelf( $data )
        {
            $id = $this->getFollowerId( $data[key($data)] );

        	if ( (int)$id == (int)$this->ModelAuth['User']['id'] )
            {
                return false;
    	    }

            return true;
    	}
	}
?>