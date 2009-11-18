<?php
class AcosController extends AclAppController
{
    var $name = 'Acos';
    var $paginate = array(
        'order' => array(
            'Aco.lft' => 'ASC'
        ),
        'conditions' => array(
            'Aco.parent_id' => 1
        )
    );

    function index()
    {
        $this->Aco->recursive = 0;
        $this->set( 'acos', $this->paginate() );
    }

    function view( $id = null )
    {
        if ( !$id )
        {
            $this->Session->setFlash( __( 'Invalid Aco.', true ) );
            $this->redirect( array( 'action' => 'index' ) );
        }
        $this->set( 'aco', $this->Aco->read( null, $id ) );
    }

    function add()
    {
        if ( !empty( $this->data ) )
        {
            $this->Aco->create();
            if ( $this->Aco->save( $this->data ) )
            {
                $this->Session->setFlash( __( 'The Aco has been saved', true ) );
                $this->redirect( array( 'action' => 'index' ) );
            }
            else
            {
                $this->Session->setFlash( __( 'The Aco could not be saved. Please, try again.', true ) );
            }
        }
        $aros = $this->Aco->Aro->find( 'list' );
        $this->set( compact( 'aros' ) );
    }

    function edit( $id = null )
    {
        if ( !$id && empty( $this->data ) )
        {
            $this->Session->setFlash( __( 'Invalid Aco', true ) );
            $this->redirect( array( 'action' => 'index' ) );
        }
        if ( !empty( $this->data ) )
        {
            if ( $this->Aco->save( $this->data ) )
            {
                $this->Session->setFlash( __( 'The Aco has been saved', true ) );
                $this->redirect( array( 'action' => 'index' ) );
            }
            else
            {
                $this->Session->setFlash( __( 'The Aco could not be saved. Please, try again.', true ) );
            }
        }
        if ( empty( $this->data ) )
        {
            $this->data = $this->Aco->read( null, $id );
        }
        $aros = $this->Aco->Aro->find( 'list' );
        $this->set( compact( 'aros' ) );
    }

    function delete( $id = null )
    {
        if ( !$id )
        {
            $this->Session->setFlash( __( 'Invalid id for Aco', true ) );
            $this->redirect( array( 'action' => 'index' ) );
        }
        if ( $this->Aco->del( $id ) )
        {
            $this->Session->setFlash( __( 'Aco deleted', true ) );
            $this->redirect( array( 'action' => 'index' ) );
        }
    }
}

?>