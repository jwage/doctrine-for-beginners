<?php

declare(strict_types=1);

namespace App\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180713012926 extends AbstractMigration
{
    public function getDescription() : string
    {
        return 'Add phone_number column to the users table.';
    }

    public function up(Schema $schema) : void
    {
        $this->addSql('ALTER TABLE users ADD phone_number VARCHAR(22) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        $this->addSql('ALTER TABLE users DROP phone_number');
    }
}
