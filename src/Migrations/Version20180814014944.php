<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180814014944 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE etude (id INT AUTO_INCREMENT NOT NULL, num VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, latitude DOUBLE PRECISION DEFAULT NULL, longitude DOUBLE PRECISION DEFAULT NULL, date VARCHAR(32) DEFAULT NULL, departement INT DEFAULT NULL, nom_departement VARCHAR(255) DEFAULT NULL, region VARCHAR(255) DEFAULT NULL, resume_court LONGTEXT DEFAULT NULL, resume_long LONGTEXT DEFAULT NULL, type_donnee VARCHAR(255) DEFAULT NULL, categorie_pan VARCHAR(12) DEFAULT NULL, date_modif VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE temoignage (id INT AUTO_INCREMENT NOT NULL, num_etude VARCHAR(255) NOT NULL, num_sepra INT DEFAULT NULL, num_pv INT DEFAULT NULL, num_temoignage INT DEFAULT NULL, type_temoignage VARCHAR(255) DEFAULT NULL, date_observation VARCHAR(255) DEFAULT NULL, age VARCHAR(255) DEFAULT NULL, profession VARCHAR(255) DEFAULT NULL, sexe VARCHAR(32) DEFAULT NULL, reaction VARCHAR(255) DEFAULT NULL, environnement VARCHAR(255) DEFAULT NULL, meteo VARCHAR(255) DEFAULT NULL, heure_observation VARCHAR(255) DEFAULT NULL, cadre VARCHAR(255) DEFAULT NULL, distance VARCHAR(255) DEFAULT NULL, localisation_spatiale VARCHAR(255) DEFAULT NULL, direction_observation VARCHAR(255) DEFAULT NULL, cap_phenomene VARCHAR(255) DEFAULT NULL, trajectoire_phenomene VARCHAR(255) DEFAULT NULL, nature_observation VARCHAR(255) DEFAULT NULL, caractere_observation VARCHAR(255) DEFAULT NULL, forme VARCHAR(255) DEFAULT NULL, couleur VARCHAR(255) DEFAULT NULL, taille VARCHAR(255) DEFAULT NULL, vitesse VARCHAR(255) DEFAULT NULL, bruit VARCHAR(255) DEFAULT NULL, effet_environnement VARCHAR(255) DEFAULT NULL, nombre_objet INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE etude');
        $this->addSql('DROP TABLE temoignage');
    }
}
