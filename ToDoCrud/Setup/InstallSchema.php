<?php

namespace Pulsestorm\ToDoCrud\Setup;

use \Magento\Framework\Setup\SchemaSetupInterface;
use \Magento\Framework\Setup\ModuleContextInterface;
use \Magento\Framework\Setup\InstallSchemaInterface;

class InstallSchema implements InstallSchemaInterface {
    public function install(SchemaSetupInterface $setup,
        ModuleContextInterface $context)
    {
        $installer = $setup;
        $installer->startSetup();
        //START: install stuff
        //END:   install stuff
        
        //START table setup
        $table = $installer->getConnection()->newTable(
            $installer->getTable('pulsestorm_todocrud_todoitem'))
        ->addColumn(
            'pulsestorm_todocrud_todoitem_id',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            null,
            [
                'identity' => true,
                'nullable' => false,
                'primary' => true,
                'unsigned' => true
            ],
            'Entity ID'
        )
        ->addColumn(
            'item_text',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            255,
            [ 'nullable' => false ],
            'Text of the to do item'
        )
        ->addColumn(
            'date_completed',
            \Magento\Framework\DB\Ddl\Table::TYPE_DATETIME,
            null,
            [ 'nullable' => true ],
            'Date the item was completed'
        )
        ->addColumn(
            'creation_time',
            \Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP,
            null,
            [],
            'Creation Time'
        )
        ->addColumn(
            'update_time',
            \Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP,
            null,
            [],
            'Modification Time'
        )
        ->addColumn(
            'is_active',
            \Magento\Framework\DB\Ddl\Table::TYPE_SMALLINT,
            null,
            [ 'nullable' => false, 'default' => '1' ],
            'Is Active'
        );

        $installer->getConnection()->createTable($table);

        //END   table setup
        $installer->endSetup();
    }
}
