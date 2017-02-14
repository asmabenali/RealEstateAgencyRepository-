<?php

namespace Front\RealBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller {

    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $ville = $em->getRepository('FrontRealBundle:Ville')->findAll();

        $query = $em->createQuery(
                'SELECT m
            FROM FrontRealBundle:Offre m
            
            order by m.datepublication DESC
            '
        );
        $entities = $query->getResult();

        return $this->render('FrontRealBundle:Default:index.html.twig', array('entities' => $entities, 'villes' => $ville));
    }

    public function avanceAction() {

        $request = $this->container->get('request');


        //nature 
        $nature = $request->request->get('nature');
        $nature = "%" . $nature . "%";
        //type
        $type1 = $request->request->get('type1');
        $type2 = $request->request->get('type2');
        $type3 = $request->request->get('type3');
        $type4 = $request->request->get('type4');

        $type = new ArrayCollection();
        $ch = "";
        if ($type1 != "") {
            $type->add("appartement");
        }
        if ($type2 != "") {
            $type->add("immeuble");
        }
        if ($type3 != "") {
            $type->add("terrain");
        }
        if ($type4 != "") {
            $type->add("villa");
        }
        //nbr piece
        $s1 = $request->request->get('s1');
        $s2 = $request->request->get('s2');
        $s3 = $request->request->get('s3');
        $s4 = $request->request->get('s4');

        $s = new ArrayCollection();
        $ch = "";
        if ($s1 != "") {
            $s->add($s1);
            $ch.=$s1;
        }
        if ($s2 != "") {
            $s->add($s2);
            $ch.=$s2;
        }
        if ($s3 != "") {
            $s->add($s3);
            $ch.=$s3;
        }
        if ($s4 != "") {
            $s->add($s4);
            $ch.=$s4;
        }

        //prix
        $prix1 = $request->request->get('prix1');
        $prix2 = $request->request->get('prix2');
        
        //ville
        $ville = $request->request->get('ville');
        $ch.="\n" . $ville;

        // m.typeimmob in (:type) and
        $em = $this->getDoctrine()->getManager();
        $villes = $em->getRepository('FrontRealBundle:Ville')->find($ville);
        $query = $em->createQuery(
                        'SELECT m
            FROM FrontRealBundle:Offre m
            WHERE 
            (m.typeimmob like :type1 or
            m.typeimmob like :type2 or
            m.typeimmob like :type3 or
            m.typeimmob like :type4) and
             m.ville = :ville
            and m.nature like :nature
            and m.prix >= :prix1 and m.prix <= :prix2
            
            
           '
                )->setParameter('type1', $type1)
                ->setParameter('type2', $type2)
                ->setParameter('type3', $type3)
                ->setParameter('type4', $type4)
                ->setParameter('nature', $nature)
                ->setParameter('prix1', $prix1)
                ->setParameter('prix2', $prix2)
                ->setParameter('ville', $villes);
                //->setParameter('type', $type);


        $entities = $query->getResult();
        /*$ch2 = "";
        
        foreach ($type as $c) {
            $ch2.=$c . "|";
        }*/
        
        //return new Response($prix1." - ".$prix2);
        return $this->render('FrontRealBundle:Default:search.html.twig', array('mot'=>"Avancee", 'entities' => $entities));
    }

    public function contactAction() {
        return $this->render('FrontRealBundle:Default:contact.html.twig', array());
    }

    public function detailAction($id) {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('FrontRealBundle:Offre')->find($id);

        return $this->render('FrontRealBundle:Default:detail.html.twig', array('entity' => $entity));
    }

    public function listeAction($type) {
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
                        'SELECT m
            FROM FrontRealBundle:Offre m
            WHERE m.typeimmob like :category 
           '
                )->setParameter('category', $type);


        $entities = $query->getResult();

        return $this->render('FrontRealBundle:Default:liste.html.twig', array('type' => $type, 'entities' => $entities));
    }

    public function searchAction() {
        $request = $this->container->get('request');
        $mot = $request->request->get('mot');

        $cle = "";
        $mot = strtolower($mot);
        if ($mot == ' ') {
            $cle = "%%";
            $mot = 'ALL';
        } else {
            $cle = '%' . $mot . '%';
        }



        $em = $this->getDoctrine()->getManager();
        $ville = $entity = $em->getRepository('FrontRealBundle:Ville')->find($mot);
        $query = $em->createQuery(
                        'SELECT m
            FROM FrontRealBundle:Offre m
            WHERE m.typeimmob like :category 
            or m.description like :category
            or m.ville = :ville
            or m.nature like :category
            
            or m.etage like :category 
           '
                )->setParameter('category', $cle)
                ->setParameter('ville', $ville);


        $entities = $query->getResult();

        return $this->render('FrontRealBundle:Default:search.html.twig', array('mot' => $mot, 'entities' => $entities));
    }
     public function nousAction() {
        return $this->render('FrontRealBundle:Default:nous.html.twig', array());
    }

}
