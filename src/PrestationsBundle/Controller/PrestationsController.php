<?php

namespace PrestationsBundle\Controller;
use PrestationsBundle\Entity\FosUser;
use PrestationsBundle\Entity\Prestations;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Prestation controller.
 *
 */
class PrestationsController extends Controller
{
    /**
     * Lists all prestation entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.token_storage')->getToken()->getUser() ;
        $prestations = $em->getRepository('PrestationsBundle:Prestations')->findBy(array('idClient' =>$user->getId()));

        return $this->render('@Prestations/prestations/index.html.twig', array(
            'prestations' => $prestations,
        ));
    }

    /**
     * Creates a new prestation entity.
     *
     */
    public function newAction(Request $request)
    {
        $prestations = new Prestations();
        $form = $this->createForm('PrestationsBundle\Form\PrestationsType', $prestations);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $prestations->setIdClient($this->container->get('security.token_storage')->getToken()->getUser());
            $em = $this->getDoctrine()->getManager();

            $em->persist($prestations);
            $em->flush();

            return $this->redirectToRoute('prestations_show', array('idPrestation' => $prestations->getIdprestation()));
        }

        return $this->render('@Prestations/prestations/new.html.twig', array(
            'prestation' => $prestations,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a prestation entity.
     *
     */
    public function showAction(Prestations $prestation)
    {
        $deleteForm = $this->createDeleteForm($prestation);

        return $this->render('@Prestations/prestations/show.html.twig', array(
            'prestation' => $prestation,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing prestation entity.
     *
     */
    public function editAction(Request $request, Prestations $prestation)
    {
        $deleteForm = $this->createDeleteForm($prestation);
        $editForm = $this->createForm('PrestationsBundle\Form\PrestationsType', $prestation);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('prestations_show', array('idPrestation' => $prestation->getIdprestation()));
        }

        return $this->render('@Prestations/prestations/edit.html.twig', array(
            'prestation' => $prestation,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a prestation entity.
     *
     */
    public function deleteAction(Request $request, Prestations $prestation)
    {
        $form = $this->createDeleteForm($prestation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($prestation);
            $em->flush();
        }

        return $this->redirectToRoute('prestations_index');
    }

    /**
     * Creates a form to delete a prestation entity.
     *
     * @param Prestations $prestation The prestation entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Prestations $prestation)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('prestations_delete', array('idPrestation' => $prestation->getIdprestation())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
