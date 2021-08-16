<?php

namespace App\Entity;

use App\Repository\InsuranceRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=InsuranceRepository::class)
 */
class Insurance
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $insurance_number;

    /**
     * @ORM\Column(type="date")
     */
    private $insurance_date;

    /**
     * @ORM\Column(type="date")
     */
    private $insurance_activ_from;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $insurance_company;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $insurance_type;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $insurance_rescheduling;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2)
     */
    private $insurance_sum;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2)
     */
    private $insurance_sum_for_company;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2)
     */
    private $insurance_bonus;

    /**
     * @ORM\Column(type="integer")
     */
    private $insurance_percent_commission;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2)
     */
    private $insurance_commission;

    /**
     * @ORM\Column(type="date")
     */
    private $insurance_maturity;

    /**
     * @ORM\Column(type="boolean")
     */
    private $insurance_paid_to_company;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $insurance_paid_from;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $insurance_paid_method;

    /**
     * @ORM\Column(type="boolean")
     */
    private $insurance_commission_paid;

    /**
     * @ORM\Column(type="boolean")
     */
    private $insurance_paid_from_client;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $insurance_note;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $insurance_file;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     */
    private $insurance_sum_2;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     */
    private $insurance_sum_for_company_2;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     */
    private $insurance_bonus_2;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $insurance_percent_commission_2;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     */
    private $insurance_commission_2;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $insurance_maturity_2;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $insurance_paid_to_company_2;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $insurance_paid_from_2;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $insurance_paid_method_2;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $insurance_commission_paid_2;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $insurance_paid_from_client_2;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $insurance_note_2;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $insurance_file_2;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     */
    private $insurance_sum_3;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     */
    private $insurance_sum_for_company_3;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     */
    private $insurance_bonus_3;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $insurance_percent_commission_3;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     */
    private $insurance_commission_3;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $insurance_maturity_3;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $insurance_paid_to_company_3;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $insurance_paid_from_3;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $insurance_paid_method_3;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $insurance_commission_paid_3;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $insurance_paid_from_client_3;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $insurance_note_3;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $insurance_file_3;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     */
    private $insurance_sum_4;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     */
    private $insurance_sum_for_company_4;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     */
    private $insurance_bonus_4;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $insurance_percent_commission_4;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     */
    private $insurance_commission_4;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $insurance_maturity_4;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $insurance_paid_to_company_4;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $insurance_paid_from_4;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $insurance_paid_method_4;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $insurance_commission_paid_4;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $insurance_paid_from_client_4;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $insurance_note_4;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $insurance_file_4;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getInsuranceNumber(): ?int
    {
        return $this->insurance_number;
    }

    public function setInsuranceNumber(int $insurance_number): self
    {
        $this->insurance_number = $insurance_number;

        return $this;
    }

    public function getInsuranceDate(): ?\DateTimeInterface
    {
        return $this->insurance_date;
    }

    public function setInsuranceDate(\DateTimeInterface $insurance_date): self
    {
        $this->insurance_date = $insurance_date;

        return $this;
    }

    public function getInsuranceActivFrom(): ?\DateTimeInterface
    {
        return $this->insurance_activ_from;
    }

    public function setInsuranceActivFrom(\DateTimeInterface $insurance_activ_from): self
    {
        $this->insurance_activ_from = $insurance_activ_from;

        return $this;
    }

    public function getInsuranceCompany(): ?string
    {
        return $this->insurance_company;
    }

    public function setInsuranceCompany(string $insurance_company): self
    {
        $this->insurance_company = $insurance_company;

        return $this;
    }

    public function getInsuranceType(): ?string
    {
        return $this->insurance_type;
    }

    public function setInsuranceType(string $insurance_type): self
    {
        $this->insurance_type = $insurance_type;

        return $this;
    }

    public function getInsuranceRescheduling(): ?string
    {
        return $this->insurance_rescheduling;
    }

    public function setInsuranceRescheduling(string $insurance_rescheduling): self
    {
        $this->insurance_rescheduling = $insurance_rescheduling;

        return $this;
    }

    public function getInsuranceSum(): ?string
    {
        return $this->insurance_sum;
    }

    public function setInsuranceSum(string $insurance_sum): self
    {
        $this->insurance_sum = $insurance_sum;

        return $this;
    }

    public function getInsuranceSumForCompany(): ?string
    {
        return $this->insurance_sum_for_company;
    }

    public function setInsuranceSumForCompany(string $insurance_sum_for_company): self
    {
        $this->insurance_sum_for_company = $insurance_sum_for_company;

        return $this;
    }

    public function getInsuranceBonus(): ?string
    {
        return $this->insurance_bonus;
    }

    public function setInsuranceBonus(string $insurance_bonus): self
    {
        $this->insurance_bonus = $insurance_bonus;

        return $this;
    }

    public function getInsurancePercentCommission(): ?int
    {
        return $this->insurance_percent_commission;
    }

    public function setInsurancePercentCommission(int $insurance_percent_commission): self
    {
        $this->insurance_percent_commission = $insurance_percent_commission;

        return $this;
    }

    public function getInsuranceCommission(): ?string
    {
        return $this->insurance_commission;
    }

    public function setInsuranceCommission(string $insurance_commission): self
    {
        $this->insurance_commission = $insurance_commission;

        return $this;
    }

    public function getInsuranceMaturity(): ?\DateTimeInterface
    {
        return $this->insurance_maturity;
    }

    public function setInsuranceMaturity(\DateTimeInterface $insurance_maturity): self
    {
        $this->insurance_maturity = $insurance_maturity;

        return $this;
    }

    public function getInsurancePaidToCompany(): ?bool
    {
        return $this->insurance_paid_to_company;
    }

    public function setInsurancePaidToCompany(bool $insurance_paid_to_company): self
    {
        $this->insurance_paid_to_company = $insurance_paid_to_company;

        return $this;
    }

    public function getInsurancePaidFrom(): ?string
    {
        return $this->insurance_paid_from;
    }

    public function setInsurancePaidFrom(string $insurance_paid_from): self
    {
        $this->insurance_paid_from = $insurance_paid_from;

        return $this;
    }

    public function getInsurancePaidMethod(): ?string
    {
        return $this->insurance_paid_method;
    }

    public function setInsurancePaidMethod(string $insurance_paid_method): self
    {
        $this->insurance_paid_method = $insurance_paid_method;

        return $this;
    }

    public function getInsuranceCommissionPaid(): ?bool
    {
        return $this->insurance_commission_paid;
    }

    public function setInsuranceCommissionPaid(bool $insurance_commission_paid): self
    {
        $this->insurance_commission_paid = $insurance_commission_paid;

        return $this;
    }

    public function getInsurancePaidFromClient(): ?bool
    {
        return $this->insurance_paid_from_client;
    }

    public function setInsurancePaidFromClient(bool $insurance_paid_from_client): self
    {
        $this->insurance_paid_from_client = $insurance_paid_from_client;

        return $this;
    }

    public function getInsuranceNote(): ?string
    {
        return $this->insurance_note;
    }

    public function setInsuranceNote(?string $insurance_note): self
    {
        $this->insurance_note = $insurance_note;

        return $this;
    }

    public function getInsuranceFile(): ?string
    {
        return $this->insurance_file;
    }

    public function setInsuranceFile(?string $insurance_file): self
    {
        $this->insurance_file = $insurance_file;

        return $this;
    }

    public function getInsuranceSum2(): ?string
    {
        return $this->insurance_sum_2;
    }

    public function setInsuranceSum2(?string $insurance_sum_2): self
    {
        $this->insurance_sum_2 = $insurance_sum_2;

        return $this;
    }

    public function getInsuranceSumForCompany2(): ?string
    {
        return $this->insurance_sum_for_company_2;
    }

    public function setInsuranceSumForCompany2(?string $insurance_sum_for_company_2): self
    {
        $this->insurance_sum_for_company_2 = $insurance_sum_for_company_2;

        return $this;
    }

    public function getInsuranceBonus2(): ?string
    {
        return $this->insurance_bonus_2;
    }

    public function setInsuranceBonus2(?string $insurance_bonus_2): self
    {
        $this->insurance_bonus_2 = $insurance_bonus_2;

        return $this;
    }

    public function getInsurancePercentCommission2(): ?int
    {
        return $this->insurance_percent_commission_2;
    }

    public function setInsurancePercentCommission2(?int $insurance_percent_commission_2): self
    {
        $this->insurance_percent_commission_2 = $insurance_percent_commission_2;

        return $this;
    }

    public function getInsuranceCommission2(): ?string
    {
        return $this->insurance_commission_2;
    }

    public function setInsuranceCommission2(?string $insurance_commission_2): self
    {
        $this->insurance_commission_2 = $insurance_commission_2;

        return $this;
    }

    public function getInsuranceMaturity2(): ?\DateTimeInterface
    {
        return $this->insurance_maturity_2;
    }

    public function setInsuranceMaturity2(?\DateTimeInterface $insurance_maturity_2): self
    {
        $this->insurance_maturity_2 = $insurance_maturity_2;

        return $this;
    }

    public function getInsurancePaidToCompany2(): ?bool
    {
        return $this->insurance_paid_to_company_2;
    }

    public function setInsurancePaidToCompany2(?bool $insurance_paid_to_company_2): self
    {
        $this->insurance_paid_to_company_2 = $insurance_paid_to_company_2;

        return $this;
    }

    public function getInsurancePaidFrom2(): ?string
    {
        return $this->insurance_paid_from_2;
    }

    public function setInsurancePaidFrom2(?string $insurance_paid_from_2): self
    {
        $this->insurance_paid_from_2 = $insurance_paid_from_2;

        return $this;
    }

    public function getInsurancePaidMethod2(): ?string
    {
        return $this->insurance_paid_method_2;
    }

    public function setInsurancePaidMethod2(?string $insurance_paid_method_2): self
    {
        $this->insurance_paid_method_2 = $insurance_paid_method_2;

        return $this;
    }

    public function getInsuranceCommissionPaid2(): ?bool
    {
        return $this->insurance_commission_paid_2;
    }

    public function setInsuranceCommissionPaid2(?bool $insurance_commission_paid_2): self
    {
        $this->insurance_commission_paid_2 = $insurance_commission_paid_2;

        return $this;
    }

    public function getInsurancePaidFromClient2(): ?bool
    {
        return $this->insurance_paid_from_client_2;
    }

    public function setInsurancePaidFromClient2(?bool $insurance_paid_from_client_2): self
    {
        $this->insurance_paid_from_client_2 = $insurance_paid_from_client_2;

        return $this;
    }

    public function getInsuranceNote2(): ?string
    {
        return $this->insurance_note_2;
    }

    public function setInsuranceNote2(?string $insurance_note_2): self
    {
        $this->insurance_note_2 = $insurance_note_2;

        return $this;
    }

    public function getInsuranceFile2(): ?string
    {
        return $this->insurance_file_2;
    }

    public function setInsuranceFile2(?string $insurance_file_2): self
    {
        $this->insurance_file_2 = $insurance_file_2;

        return $this;
    }

    public function getInsuranceSum3(): ?string
    {
        return $this->insurance_sum_3;
    }

    public function setInsuranceSum3(?string $insurance_sum_3): self
    {
        $this->insurance_sum_3 = $insurance_sum_3;

        return $this;
    }

    public function getInsuranceSumForCompany3(): ?string
    {
        return $this->insurance_sum_for_company_3;
    }

    public function setInsuranceSumForCompany3(?string $insurance_sum_for_company_3): self
    {
        $this->insurance_sum_for_company_3 = $insurance_sum_for_company_3;

        return $this;
    }

    public function getInsuranceBonus3(): ?string
    {
        return $this->insurance_bonus_3;
    }

    public function setInsuranceBonus3(?string $insurance_bonus_3): self
    {
        $this->insurance_bonus_3 = $insurance_bonus_3;

        return $this;
    }

    public function getInsurancePercentCommission3(): ?int
    {
        return $this->insurance_percent_commission_3;
    }

    public function setInsurancePercentCommission3(?int $insurance_percent_commission_3): self
    {
        $this->insurance_percent_commission_3 = $insurance_percent_commission_3;

        return $this;
    }

    public function getInsuranceCommission3(): ?string
    {
        return $this->insurance_commission_3;
    }

    public function setInsuranceCommission3(?string $insurance_commission_3): self
    {
        $this->insurance_commission_3 = $insurance_commission_3;

        return $this;
    }

    public function getInsuranceMaturity3(): ?\DateTimeInterface
    {
        return $this->insurance_maturity_3;
    }

    public function setInsuranceMaturity3(?\DateTimeInterface $insurance_maturity_3): self
    {
        $this->insurance_maturity_3 = $insurance_maturity_3;

        return $this;
    }

    public function getInsurancePaidToCompany3(): ?bool
    {
        return $this->insurance_paid_to_company_3;
    }

    public function setInsurancePaidToCompany3(?bool $insurance_paid_to_company_3): self
    {
        $this->insurance_paid_to_company_3 = $insurance_paid_to_company_3;

        return $this;
    }

    public function getInsurancePaidFrom3(): ?string
    {
        return $this->insurance_paid_from_3;
    }

    public function setInsurancePaidFrom3(?string $insurance_paid_from_3): self
    {
        $this->insurance_paid_from_3 = $insurance_paid_from_3;

        return $this;
    }

    public function getInsurancePaidMethod3(): ?string
    {
        return $this->insurance_paid_method_3;
    }

    public function setInsurancePaidMethod3(?string $insurance_paid_method_3): self
    {
        $this->insurance_paid_method_3 = $insurance_paid_method_3;

        return $this;
    }

    public function getInsuranceCommissionPaid3(): ?bool
    {
        return $this->insurance_commission_paid_3;
    }

    public function setInsuranceCommissionPaid3(?bool $insurance_commission_paid_3): self
    {
        $this->insurance_commission_paid_3 = $insurance_commission_paid_3;

        return $this;
    }

    public function getInsurancePaidFromClient3(): ?bool
    {
        return $this->insurance_paid_from_client_3;
    }

    public function setInsurancePaidFromClient3(?bool $insurance_paid_from_client_3): self
    {
        $this->insurance_paid_from_client_3 = $insurance_paid_from_client_3;

        return $this;
    }

    public function getInsuranceNote3(): ?string
    {
        return $this->insurance_note_3;
    }

    public function setInsuranceNote3(?string $insurance_note_3): self
    {
        $this->insurance_note_3 = $insurance_note_3;

        return $this;
    }

    public function getInsuranceFile3(): ?string
    {
        return $this->insurance_file_3;
    }

    public function setInsuranceFile3(?string $insurance_file_3): self
    {
        $this->insurance_file_3 = $insurance_file_3;

        return $this;
    }

    public function getInsuranceSum4(): ?string
    {
        return $this->insurance_sum_4;
    }

    public function setInsuranceSum4(?string $insurance_sum_4): self
    {
        $this->insurance_sum_4 = $insurance_sum_4;

        return $this;
    }

    public function getInsuranceSumForCompany4(): ?string
    {
        return $this->insurance_sum_for_company_4;
    }

    public function setInsuranceSumForCompany4(?string $insurance_sum_for_company_4): self
    {
        $this->insurance_sum_for_company_4 = $insurance_sum_for_company_4;

        return $this;
    }

    public function getInsuranceBonus4(): ?string
    {
        return $this->insurance_bonus_4;
    }

    public function setInsuranceBonus4(?string $insurance_bonus_4): self
    {
        $this->insurance_bonus_4 = $insurance_bonus_4;

        return $this;
    }

    public function getInsurancePercentCommission4(): ?int
    {
        return $this->insurance_percent_commission_4;
    }

    public function setInsurancePercentCommission4(?int $insurance_percent_commission_4): self
    {
        $this->insurance_percent_commission_4 = $insurance_percent_commission_4;

        return $this;
    }

    public function getInsuranceCommission4(): ?string
    {
        return $this->insurance_commission_4;
    }

    public function setInsuranceCommission4(?string $insurance_commission_4): self
    {
        $this->insurance_commission_4 = $insurance_commission_4;

        return $this;
    }

    public function getInsuranceMaturity4(): ?\DateTimeInterface
    {
        return $this->insurance_maturity_4;
    }

    public function setInsuranceMaturity4(?\DateTimeInterface $insurance_maturity_4): self
    {
        $this->insurance_maturity_4 = $insurance_maturity_4;

        return $this;
    }

    public function getInsurancePaidToCompany4(): ?bool
    {
        return $this->insurance_paid_to_company_4;
    }

    public function setInsurancePaidToCompany4(?bool $insurance_paid_to_company_4): self
    {
        $this->insurance_paid_to_company_4 = $insurance_paid_to_company_4;

        return $this;
    }

    public function getInsurancePaidFrom4(): ?string
    {
        return $this->insurance_paid_from_4;
    }

    public function setInsurancePaidFrom4(?string $insurance_paid_from_4): self
    {
        $this->insurance_paid_from_4 = $insurance_paid_from_4;

        return $this;
    }

    public function getInsurancePaidMethod4(): ?string
    {
        return $this->insurance_paid_method_4;
    }

    public function setInsurancePaidMethod4(?string $insurance_paid_method_4): self
    {
        $this->insurance_paid_method_4 = $insurance_paid_method_4;

        return $this;
    }

    public function getInsuranceCommissionPaid4(): ?bool
    {
        return $this->insurance_commission_paid_4;
    }

    public function setInsuranceCommissionPaid4(?bool $insurance_commission_paid_4): self
    {
        $this->insurance_commission_paid_4 = $insurance_commission_paid_4;

        return $this;
    }

    public function getInsurancePaidFromClient4(): ?bool
    {
        return $this->insurance_paid_from_client_4;
    }

    public function setInsurancePaidFromClient4(?bool $insurance_paid_from_client_4): self
    {
        $this->insurance_paid_from_client_4 = $insurance_paid_from_client_4;

        return $this;
    }

    public function getInsuranceNote4(): ?string
    {
        return $this->insurance_note_4;
    }

    public function setInsuranceNote4(?string $insurance_note_4): self
    {
        $this->insurance_note_4 = $insurance_note_4;

        return $this;
    }

    public function getInsuranceFile4(): ?string
    {
        return $this->insurance_file_4;
    }

    public function setInsuranceFile4(?string $insurance_file_4): self
    {
        $this->insurance_file_4 = $insurance_file_4;

        return $this;
    }
}
