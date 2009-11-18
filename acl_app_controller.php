<?php
	class AclAppController extends AppController
	{
        var $helpers = array(
            //core
                'Html', 'Form',
            //custom
                'Button.Button'
        );

        var $components = array(
            //core
                'Session', 'Security',
            //custom
                'Config'
        );

        function beforeFilter()
        {
            parent::beforeFilter();
        }

        function counterText( $paginator )
        {
            return $paginator->counter(
                            array(
                                'format' => __( 'Page %page% of %pages%, record %start% to %end%' , true )
                        )
                    );
        }
	}
?>