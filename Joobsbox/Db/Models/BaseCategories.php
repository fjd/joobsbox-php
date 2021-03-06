<?php

/**
 * BaseCategories
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $name
 * @property string $link
 * @property integer $orderindex
 * @property integer $parent
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 5925 2009-06-22 21:27:17Z jwage $
 */
abstract class BaseCategories extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('categories');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'unsigned' => '1',
             'primary' => true,
             'autoincrement' => true,
             'length' => '4',
             ));
        $this->hasColumn('name', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '255',
             ));
        $this->hasColumn('link', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '255',
             ));
        $this->hasColumn('orderindex', 'integer', 1, array(
             'type' => 'integer',
             'unsigned' => 0,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '1',
             ));
        $this->hasColumn('parent', 'integer', 1, array(
             'type' => 'integer',
             'unsigned' => 0,
             'primary' => false,
             'default' => '',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '1',
             ));
    }

    public function setUp()
    {
        parent::setUp();
    
    }
}