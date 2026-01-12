<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260108081756 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE server (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, map VARCHAR(255) NOT NULL, players INT NOT NULL, max_players INT NOT NULL, ping INT NOT NULL, ip_adress VARCHAR(50) NOT NULL, PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE skin (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, weapon VARCHAR(255) NOT NULL, rarity VARCHAR(255) NOT NULL, `float` DOUBLE PRECISION NOT NULL, pattern INT NOT NULL, stattrak VARCHAR(255) DEFAULT NULL, coleccion VARCHAR(255) NOT NULL, souvenir VARCHAR(255) DEFAULT NULL, seed INT NOT NULL, price DOUBLE PRECISION NOT NULL, image VARCHAR(255) NOT NULL, PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE server');
        $this->addSql('DROP TABLE skin');
    }
}
