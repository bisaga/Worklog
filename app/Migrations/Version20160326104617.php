<?php

namespace Bisaga\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20160326104617 extends AbstractMigration
{
  /**
   * @param Schema $schema
   */
  public function up(Schema $schema)
  {
    $table = $schema->getTable('worklogline');
    $table->addColumn('location', 'string', ['length' => 60]);
    $table->addColumn('milage', 'decimal', ['precision' => 8, 'scale' => 2]);

  }

  /**
   * @param Schema $schema
   */
  public function down(Schema $schema)
  {
    $table = $schema->getTable('worklogline');
    $table->dropColumn('location');
    $table->dropColumn('milage');
  }
}
