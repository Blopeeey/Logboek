<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190318131926 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE logboek (id INT AUTO_INCREMENT NOT NULL, chauffeur_id INT NOT NULL, truck_id INT NOT NULL, user_id_id INT NOT NULL, begeleidingsbrief VARCHAR(255) NOT NULL, datum DATE NOT NULL, aantalm3 NUMERIC(10, 0) NOT NULL, laadlocatie VARCHAR(255) NOT NULL, tijdvertrek TIME NOT NULL, bestemming VARCHAR(255) NOT NULL, evenement VARCHAR(255) NOT NULL, INDEX IDX_13847B9A85C0B3BE (chauffeur_id), INDEX IDX_13847B9AC6957CCE (truck_id), INDEX IDX_13847B9A9D86650F (user_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE truck (id INT AUTO_INCREMENT NOT NULL, kenteken VARCHAR(255) NOT NULL, merk VARCHAR(255) NOT NULL, bouwjaar DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE logboek ADD CONSTRAINT FK_13847B9A85C0B3BE FOREIGN KEY (chauffeur_id) REFERENCES fos_user (id)');
        $this->addSql('ALTER TABLE logboek ADD CONSTRAINT FK_13847B9AC6957CCE FOREIGN KEY (truck_id) REFERENCES truck (id)');
        $this->addSql('ALTER TABLE logboek ADD CONSTRAINT FK_13847B9A9D86650F FOREIGN KEY (user_id_id) REFERENCES fos_user (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE logboek DROP FOREIGN KEY FK_13847B9AC6957CCE');
        $this->addSql('DROP TABLE logboek');
        $this->addSql('DROP TABLE truck');
    }
}