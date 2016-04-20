<?php

namespace Bisaga\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20151220114050 extends AbstractMigration
{
  /**
   * @param Schema $schema
   */
  public function up(Schema $schema)
  {
    $table = $schema->getTable('worklogtable');
    $table->dropColumn('location');
  }

  /**
   * @param Schema $schema
   */
  public function down(Schema $schema)
  {
    $table = $schema->getTable('worklogtable');
    $table->addColumn('location', 'string', ['length' => 60]);
  }
}
