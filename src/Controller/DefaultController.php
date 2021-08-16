<?php

namespace App\Controller;

use App\Entity\Insurance;
use App\Entity\Vehicles;
use App\Entity\Clients;
use App\Repository\ClientsRepository;
use App\Repository\InsuranceRepository;
use App\Repository\VehiclesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Form\Type\InsuranceType;

class DefaultController extends AbstractController
{
    /**
     * @Route ("/addInsurance")
     */
    public function addInsurance(Request $request): Response
    {

        $insurance = new Insurance();
        $clients = new Clients();
        $vehicles = new Vehicles();
        $insurance_form = $this->createForm(InsuranceType::class, [$insurance,$clients,$vehicles]);
       // if ($request->isMethod('POST')) {
     //       $insurance_form->submit($request->request->all());
         $insurance_form->handleRequest($request);
            if ($insurance_form->isSubmitted() && $insurance_form->isValid()) {
//                $insurance=$insurance_form->getData();
//                $clients=$insurance_form->getData();
//                $vehicles=$insurance_form->getData();
//                $clients->setClientsName($insurance_form ['clients_name']);
//                $clients->setClientsCoherence($insurance_form ['clients_coherence']);
//                $clients->setClientsEmail($insurance_form ['clients_email']);
//                $clients->setClientsFamiliar($insurance_form ['clients_familiar']);
//                $clients->setClientsEGNEIK($insurance_form ['clients_EGN_EIK']);
//                $clients->setClientsPhone($insurance_form ['clients_phone']);
//
//                $insurance->setInsuranceNumber($insurance_form ['insurance_number']);
//                $insurance->setInsuranceDate($insurance_form ['insurance_date']);
//                $insurance->setInsuranceActivFrom($insurance_form ['insurance_active_from']);
//                $insurance->setInsuranceCompany($insurance_form ['insurance_company']);
//                $insurance->setInsuranceType($insurance_form ['insurance_type']);
//                $insurance->setInsuranceRescheduling($insurance_form ['insurance_rescheduling']);
//                $insurance->setInsuranceSum($insurance_form ['insurance_sum']);
//                $insurance->setInsuranceSumForCompany($insurance_form ['insurance_sum_for_company']);
//                $insurance->setInsuranceBonus($insurance_form ['insurance_bonus']);
//                $insurance->setInsurancePercentCommission($insurance_form ['insurance_percent_commission']);
//                $insurance->setInsuranceCommission($insurance_form ['insurance_commission']);
//                $insurance->setInsuranceMaturity($insurance_form ['insurance_maturity']);
//                $insurance->setInsurancePaidToCompany($insurance_form ['insurance_paid_to_company']);
//                $insurance->setInsurancePaidFrom($insurance_form ['insurance_paid_from']);
//                $insurance->setInsurancePaidMethod($insurance_form ['insurance_paid_method']);
//                $insurance->setInsuranceCommissionPaid($insurance_form ['insurance_commission_paid']);
//                $insurance->setInsurancePaidFromClient($insurance_form ['insurance_paid_from_client']);
//                $insurance->setInsuranceNote($insurance_form ['insurance_note']);
//                $insurance->setInsuranceFile($insurance_form['insurance_file']);
//
//                $insurance->setInsuranceSum2($insurance_form ['insurance_sum-2']);
//                $insurance->setInsuranceSumForCompany2($insurance_form ['insurance_sum_for_company-2']);
//                $insurance->setInsuranceBonus2($insurance_form ['insurance_bonus-2']);
//                $insurance->setInsurancePercentCommission2($insurance_form['insurance_percent_commission-2']);
//                $insurance->setInsuranceCommission2($insurance_form ['insurance_commission-2']);
//                $insurance->setInsuranceMaturity2($insurance_form ['insurance_maturity-2']);
//                $insurance->setInsurancePaidToCompany2($insurance_form ['insurance_paid_to_company-2']);
//                $insurance->setInsurancePaidFrom2($insurance_form ['insurance_paid_from-2']);
//                $insurance->setInsurancePaidMethod2($insurance_form ['insurance_paid_method-2']);
//                $insurance->setInsuranceCommissionPaid2($insurance_form ['insurance_commission_paid-2']);
//                $insurance->setInsurancePaidFromClient2($insurance_form ['insurance_paid_from_client-2']);
//                $insurance->setInsuranceNote2($insurance_form ['insurance_note-2']);
//                $insurance->setInsuranceFile2($insurance_form ['insurance_file-2']);
//
//                $insurance->setInsuranceSum3($insurance_form ['insurance_sum-3']);
//                $insurance->setInsuranceSumForCompany3($insurance_form ['insurance_sum_for_company-3']);
//                $insurance->setInsuranceBonus2($insurance_form ['insurance_bonus-3']);
//                $insurance->setInsurancePercentCommission3($insurance_form ['insurance_percent_commission-3']);
//                $insurance->setInsuranceCommission3($insurance_form ['insurance_commission-3']);
//                $insurance->setInsuranceMaturity3($insurance_form ['insurance_maturity-3']);
//                $insurance->setInsurancePaidToCompany3($insurance_form ['insurance_paid_to_company-3']);
//                $insurance->setInsurancePaidFrom2($insurance_form ['insurance_paid_from-3']);
//                $insurance->setInsurancePaidMethod3($insurance_form ['insurance_paid_method-3']);
//                $insurance->setInsuranceCommissionPaid3($insurance_form ['insurance_commission_paid-3']);
//                $insurance->setInsurancePaidFromClient3($insurance_form ['insurance_paid_from_client-3']);
//                $insurance->setInsuranceNote3($insurance_form ['insurance_note-3']);
//                $insurance->setInsuranceFile3($insurance_form ['insurance_file-3']);
//
//                $insurance->setInsuranceSum4($insurance_form ['insurance_sum-4']);
//                $insurance->setInsuranceSumForCompany4($insurance_form ['insurance_sum_for_company-4']);
//                $insurance->setInsuranceBonus4($insurance_form ['insurance_bonus-4']);
//                $insurance->setInsurancePercentCommission4($insurance_form ['insurance_percent_commission-4']);
//                $insurance->setInsuranceCommission4($insurance_form ['insurance_commission-4']);
//                $insurance->setInsuranceMaturity4($insurance_form ['insurance_maturity-4']);
//                $insurance->setInsurancePaidToCompany4($insurance_form ['insurance_paid_to_company-4']);
//                $insurance->setInsurancePaidFrom4($insurance_form ['insurance_paid_from-4']);
//                $insurance->setInsurancePaidMethod4($insurance_form ['insurance_paid_method-4']);
//                $insurance->setInsuranceCommissionPaid4($insurance_form ['insurance_commission_paid-4']);
//                $insurance->setInsurancePaidFromClient4($insurance_form ['insurance_paid_from_client-4']);
//                $insurance->setInsuranceNote4($insurance_form ['insurance_note-4']);
//                $insurance->setInsuranceFile4($insurance_form ['insurance_file-4']);
//
//                $vehicles->setVehiclesNumber($insurance_form ['vehicles_number']);
//                $vehicles->setVehiclesDocumentNumber($insurance_form ['vehicles_document_number']);
//                $vehicles->setVehiclesNote($insurance_form ['vehicles_note']);

                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($insurance);
//                $entityManager->persist($clients);
//                $entityManager->persist($vehicles);
                $entityManager->flush();
                return $this->redirectToRoute('listInsurance');
            }
       //}

        return $this->render( "new.html.twig", ['form' => $insurance_form->createView()]);
    }

    /**
     * @Route ("/listInsurance")
     */
    public function listInsurance(InsuranceRepository $insuranceRepository, ClientsRepository $clientsRepository, VehiclesRepository $vehiclesRepository): Response
    {
        $insurances = $insuranceRepository->findAll();
        $clients = $clientsRepository->findAll();
        $vehicles = $vehiclesRepository->findAll();
        return $this->render('base.html.twig', ['insurances' => $insurances, 'clients' => $clients, 'vehicles' => $vehicles]);
    }
    /**
     * @Route ("/test")
     */
    public function test(Request $request): Response

    {
        $task = new Task();
        $form = $this->createForm(TaskType::class, $task);

        if ($request->isMethod('POST')) {
            $form->submit($request->request->get($form->getName()));

            if ($form->isSubmitted() && $form->isValid()) {
// perform some action...

                return $this->redirectToRoute('task_success');
            }
        }
    }
}
