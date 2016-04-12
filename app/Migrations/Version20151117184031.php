<?php

namespace Bisaga\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20151117184031 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        
        $worklogtable = $schema->createTable('worklogtable');
        
        $worklogtable->addColumn('id', 'integer', ['unsigned' => true, 'autoincrement'=>true]);
        $worklogtable->addColumn('workdate', 'date', ['notnull'=>true]);
        $worklogtable->addColumn('location', 'string', ['length' => 60]);
        $worklogtable->addColumn('milage', 'decimal', ['precision' => 8, 'scale'=>2]);
        $worklogtable->addColumn('starttime', 'time');
        $worklogtable->addColumn('endtime','time');
        $worklogtable->addColumn('totaltime','time');
        $worklogtable->addColumn('status', 'string', ['length' => 30]);
        $worklogtable->setPrimaryKey(['id']);        
        
        // 
        $worklogline = $schema->createTable('worklogline');
        
        $worklogline->addColumn('id', 'integer', ['unsigned' => true, 'autoincrement'=>true]);
        $worklogline->addColumn('fromtime', 'time');
        $worklogline->addColumn('totime', 'time');
        $worklogline->addColumn('logtime', 'time');
        $worklogline->addColumn('description', 'string', ['length' => 250]);
        $worklogline->addColumn('taskcode', 'string', ['length' => 150]);
        $worklogline->addColumn('worklogid', 'integer', ['unsigned'=>true]);
        $worklogline->setPrimaryKey(['id']);                
        $worklogline->addForeignKeyConstraint($worklogtable, array('worklogid'), 
                        array('id'), array('onUpdate'=>'CASCADE', 'onDelete'=>'CASCADE'));
        
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $schema->dropTable('worklogline');
        $schema->dropTable('worklogtable');
    }
}
