<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210714154316 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE clients (id INT AUTO_INCREMENT NOT NULL, clients_name VARCHAR(255) NOT NULL, clients_coherence VARCHAR(255) DEFAULT NULL, clients_email VARCHAR(255) DEFAULT NULL, clients_familiar VARCHAR(255) DEFAULT NULL, clients_egn_eik VARCHAR(255) NOT NULL, clients_phone INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE insurance (id INT AUTO_INCREMENT NOT NULL, insurance_number INT NOT NULL, insurance_date DATE NOT NULL, insurance_activ_from DATE NOT NULL, insurance_company VARCHAR(255) NOT NULL, insurance_type VARCHAR(255) NOT NULL, insurance_rescheduling VARCHAR(255) NOT NULL, insurance_sum NUMERIC(10, 2) NOT NULL, insurance_sum_for_company NUMERIC(10, 2) NOT NULL, insurance_bonus NUMERIC(10, 2) NOT NULL, insurance_percent_commission INT NOT NULL, insurance_commission NUMERIC(10, 2) NOT NULL, insurance_maturity DATE NOT NULL, insurance_paid_to_company TINYINT(1) NOT NULL, insurance_paid_from VARCHAR(255) NOT NULL, insurance_paid_method VARCHAR(255) NOT NULL, insurance_commission_paid TINYINT(1) NOT NULL, insurance_paid_from_client TINYINT(1) NOT NULL, insurance_note LONGTEXT DEFAULT NULL, insurance_file VARCHAR(255) DEFAULT NULL, insurance_sum_2 NUMERIC(10, 2) DEFAULT NULL, insurance_sum_for_company_2 NUMERIC(10, 2) DEFAULT NULL, insurance_bonus_2 NUMERIC(10, 2) DEFAULT NULL, insurance_percent_commission_2 INT DEFAULT NULL, insurance_commission_2 NUMERIC(10, 2) DEFAULT NULL, insurance_maturity_2 DATE DEFAULT NULL, insurance_paid_to_company_2 TINYINT(1) DEFAULT NULL, insurance_paid_from_2 VARCHAR(255) DEFAULT NULL, insurance_paid_method_2 VARCHAR(255) DEFAULT NULL, insurance_commission_paid_2 TINYINT(1) DEFAULT NULL, insurance_paid_from_client_2 TINYINT(1) DEFAULT NULL, insurance_note_2 LONGTEXT DEFAULT NULL, insurance_file_2 VARCHAR(255) DEFAULT NULL, insurance_sum_3 NUMERIC(10, 2) DEFAULT NULL, insurance_sum_for_company_3 NUMERIC(10, 2) DEFAULT NULL, insurance_bonus_3 NUMERIC(10, 2) DEFAULT NULL, insurance_percent_commission_3 INT DEFAULT NULL, insurance_commission_3 NUMERIC(10, 2) DEFAULT NULL, insurance_maturity_3 DATE DEFAULT NULL, insurance_paid_to_company_3 TINYINT(1) DEFAULT NULL, insurance_paid_from_3 VARCHAR(255) DEFAULT NULL, insurance_paid_method_3 VARCHAR(255) DEFAULT NULL, insurance_commission_paid_3 TINYINT(1) DEFAULT NULL, insurance_paid_from_client_3 TINYINT(1) DEFAULT NULL, insurance_note_3 LONGTEXT DEFAULT NULL, insurance_file_3 VARCHAR(255) DEFAULT NULL, insurance_sum_4 NUMERIC(10, 2) DEFAULT NULL, insurance_sum_for_company_4 NUMERIC(10, 2) DEFAULT NULL, insurance_bonus_4 NUMERIC(10, 2) DEFAULT NULL, insurance_percent_commission_4 INT DEFAULT NULL, insurance_commission_4 NUMERIC(10, 2) DEFAULT NULL, insurance_maturity_4 DATE DEFAULT NULL, insurance_paid_to_company_4 TINYINT(1) DEFAULT NULL, insurance_paid_from_4 VARCHAR(255) DEFAULT NULL, insurance_paid_method_4 VARCHAR(255) DEFAULT NULL, insurance_commission_paid_4 TINYINT(1) DEFAULT NULL, insurance_paid_from_client_4 TINYINT(1) DEFAULT NULL, insurance_note_4 LONGTEXT DEFAULT NULL, insurance_file_4 VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE vehicles (id INT AUTO_INCREMENT NOT NULL, vehicles_number VARCHAR(255) DEFAULT NULL, vehicles_document_number VARCHAR(255) DEFAULT NULL, vehicles_note LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE clients');
        $this->addSql('DROP TABLE insurance');
        $this->addSql('DROP TABLE vehicles');
    }
}
