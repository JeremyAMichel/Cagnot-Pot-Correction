<?php

namespace App\Controller;

use App\Repository\CampaignRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(CampaignRepository $campaignRepository): Response
    {
        $trendingCampaigns = $campaignRepository->findFiveCampaignOrderByUpdateAtDesc();

        return $this->render('home/index.html.twig', [
            'trendingCampaigns' => $trendingCampaigns
        ]);
    }
}
