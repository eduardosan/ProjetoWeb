<?php

namespace Grupo\ProjetoBundle\Controller;

use Grupo\ProjetoBundle\Entity\Relatos;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Relato controller.
 *
 * @Route("/")
 */
class RelatosController extends Controller
{
    /**
     * Lists all relato entities.
     *
     * @Route("/", name="relatos_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $relatos = $em->getRepository('GrupoProjetoBundle:Relatos')->findAll();

        return $this->render('relatos/index.html.twig', array(
            'relatos' => $relatos,
        ));
    }

    /**
     * Creates a new relato entity.
     *
     * @Route("/new", name="relatos_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $relato = new Relatos();
        $form = $this->createForm('Grupo\ProjetoBundle\Form\RelatosType', $relato);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($relato);
            $em->flush();

            return $this->redirectToRoute('relatos_show', array('id' => $relato->getId()));
        }

        return $this->render('relatos/new.html.twig', array(
            'relato' => $relato,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a relato entity.
     *
     * @Route("/{id}", name="relatos_show")
     * @Method("GET")
     */
    public function showAction(Relatos $relato)
    {
        $deleteForm = $this->createDeleteForm($relato);

        return $this->render('relatos/show.html.twig', array(
            'relato' => $relato,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing relato entity.
     *
     * @Route("/{id}/edit", name="relatos_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Relatos $relato)
    {
        $deleteForm = $this->createDeleteForm($relato);
        $editForm = $this->createForm('Grupo\ProjetoBundle\Form\RelatosType', $relato);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('relatos_edit', array('id' => $relato->getId()));
        }

        return $this->render('relatos/edit.html.twig', array(
            'relato' => $relato,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a relato entity.
     *
     * @Route("/{id}", name="relatos_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Relatos $relato)
    {
        $form = $this->createDeleteForm($relato);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($relato);
            $em->flush();
        }

        return $this->redirectToRoute('relatos_index');
    }

    /**
     * Creates a form to delete a relato entity.
     *
     * @param Relatos $relato The relato entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Relatos $relato)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('relatos_delete', array('id' => $relato->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
    
    /**
     * Deletes a relato entity.
     *
     * @Route("/images/{id}", name="relatos_image")
     * @Method("POST")
     */
    public function imageAction(Request $request, Relatos $relato)
    {
        $images = $request->get('files');
        
        
        // Precisa salvar as imagens em algum lugar

        return $this->redirectToRoute('relatos_index');
    }
}
