<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260201124841 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP SEQUENCE graphql.seq_schema_version CASCADE');
        $this->addSql('DROP INDEX uniq_steam_id');
        $this->addSql('ALTER TABLE app_user DROP steam_id');
        $this->addSql('ALTER TABLE app_user DROP steam_avatar');
        $this->addSql('ALTER INDEX uniq_app_user_email RENAME TO UNIQ_IDENTIFIER_EMAIL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA pgbouncer');
        $this->addSql('CREATE SCHEMA realtime');
        $this->addSql('CREATE SCHEMA extensions');
        $this->addSql('CREATE SCHEMA vault');
        $this->addSql('CREATE SCHEMA graphql_public');
        $this->addSql('CREATE SCHEMA graphql');
        $this->addSql('CREATE SCHEMA auth');
        $this->addSql('CREATE SCHEMA storage');
        $this->addSql('CREATE SEQUENCE graphql.seq_schema_version INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('ALTER TABLE app_user ADD steam_id VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE app_user ADD steam_avatar VARCHAR(255) DEFAULT NULL');
        $this->addSql('CREATE UNIQUE INDEX uniq_steam_id ON app_user (steam_id)');
        $this->addSql('ALTER INDEX uniq_identifier_email RENAME TO uniq_app_user_email');
    }
}
