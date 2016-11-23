<?php

namespace Ak\AppBundle\Entity\Pages;

use Doctrine\ORM\Mapping as ORM;
use Kunstmaan\NodeSearchBundle\Entity\AbstractSearchPage;

/**
 * @ORM\Entity()
 * @ORM\Table(name="akapp_search_page")
 */
class SearchPage extends AbstractSearchPage
{
    /*
     * return string
     */
    public function getDefaultView()
    {
        return 'AkAppBundle:Pages\SearchPage:view.html.twig';
    }
}
