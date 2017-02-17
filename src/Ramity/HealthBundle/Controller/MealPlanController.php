<?php

namespace Ramity\HealthBundle\Controller;

use Ramity\HealthBundle\Entity\MealPlan;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Mealplan controller.
 *
 * @Route("mealplan")
 */
class MealPlanController extends Controller
{
    /**
     * Lists all mealPlan entities.
     *
     * @Route("/", name="mealplan_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $mealPlans = $em->getRepository('HealthBundle:MealPlan')->findAll();

        return $this->render('mealplan/index.html.twig', array(
            'mealPlans' => $mealPlans,
        ));
    }

    /**
     * Creates a new mealPlan entity.
     *
     * @Route("/new", name="mealplan_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $mealPlan = new Mealplan();
        $form = $this->createForm('Ramity\HealthBundle\Form\MealPlanType', $mealPlan);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($mealPlan);
            $em->flush($mealPlan);

            return $this->redirectToRoute('mealplan_show', array('id' => $mealPlan->getId()));
        }

        return $this->render('mealplan/new.html.twig', array(
            'mealPlan' => $mealPlan,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a mealPlan entity.
     *
     * @Route("/{id}", name="mealplan_show")
     * @Method("GET")
     */
    public function showAction(MealPlan $mealPlan)
    {
        $deleteForm = $this->createDeleteForm($mealPlan);

        return $this->render('mealplan/show.html.twig', array(
            'mealPlan' => $mealPlan,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing mealPlan entity.
     *
     * @Route("/{id}/edit", name="mealplan_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, MealPlan $mealPlan)
    {
        $deleteForm = $this->createDeleteForm($mealPlan);
        $editForm = $this->createForm('Ramity\HealthBundle\Form\MealPlanType', $mealPlan);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('mealplan_edit', array('id' => $mealPlan->getId()));
        }

        return $this->render('mealplan/edit.html.twig', array(
            'mealPlan' => $mealPlan,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a mealPlan entity.
     *
     * @Route("/{id}", name="mealplan_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, MealPlan $mealPlan)
    {
        $form = $this->createDeleteForm($mealPlan);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($mealPlan);
            $em->flush($mealPlan);
        }

        return $this->redirectToRoute('mealplan_index');
    }

    /**
     * Creates a form to delete a mealPlan entity.
     *
     * @param MealPlan $mealPlan The mealPlan entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(MealPlan $mealPlan)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('mealplan_delete', array('id' => $mealPlan->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
