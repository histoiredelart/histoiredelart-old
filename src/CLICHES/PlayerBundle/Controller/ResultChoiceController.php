<?php

namespace CLICHES\PlayerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ResultChoiceController extends Controller
{
    public function resultAction($playerProposal_id)
    {
        $em = $this->getDoctrine()->getManager();
        $playerProposal = $em->getRepository('CLICHESPlayerBundle:PlayerProposal')->findOneById($playerProposal_id);
        if ($playerProposal === null) { throw $this->createNotFoundException('Session : [id='.$playerProposal_id.'] inexistante.'); }

        $image = $em->getRepository('DATAImageBundle:Image')->findOneByView($playerProposal->getPlayerOeuvre()->getView());
        $seoPage = $this->container->get('sonata.seo.page');
        $seoPage
            ->addMeta('property', 'og:title', 'Clichés!')
            ->addMeta('property', 'og:description', 'Aidez-moi à reconnaitre ce cliché !')
            ->addMeta('property', 'og:image', $this->get('templating.helper.assets')->getUrl('uploads/gallery/'.$image->getFileImage()->getImageName()))
        ;

        $playerProposalChoices = $em->getRepository('CLICHESPlayerBundle:PlayerProposalChoice')->findByPlayerProposal($playerProposal);
        $sources = $this->container->get('data_data.entity')->getSources($playerProposal->getPlayerOeuvre()->getView()->getEntity());

        foreach($playerProposalChoices as $playerProposalChoice) {
            if($playerProposalChoice->getPlayerProposalChoiceValueSelected() == null or $playerProposalChoice->getPlayerProposalChoiceValueSelected()->getIsTrue() == false) {
                $playerProposalChoice->setCorrectAnswer(false);
            } elseif($playerProposalChoice->getPlayerProposalChoiceValueSelected()->getIsTrue() == true) {
                $playerProposalChoice->setCorrectAnswer(true);
            }
        }
        $em->flush();

        return $this->render('CLICHESPlayerBundle:Result:result.html.twig', array(
            'isSuggest' => false,
            'isVote' => false,
            'isError' => false,
            'playerProposal' => $playerProposal,
            'playerProposalChoices' => $playerProposalChoices,
            'sources' => $sources
        ));
    }
}
