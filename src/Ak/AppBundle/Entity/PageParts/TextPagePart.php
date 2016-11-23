<?php

namespace Ak\AppBundle\Entity\PageParts;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * TextPagePart
 *
 * @ORM\Table(name="akapp_text_page_parts")
 * @ORM\Entity
 */
class TextPagePart extends AbstractPagePart
{
    /**
     * @ORM\Column(type="text", nullable=true)
     * @Assert\NotBlank()
     */
    private $content;

    /**
     * @return string
     */
    public function getContent()
    {
	return $this->content;
    }

    /**
     * @param string $content
     *
     * @return TextPagePart
     */
    public function setContent($content)
    {
	$this->content = $content;

	return $this;
    }

    /**
     * Get the twig view.
     *
     * @return string
     */
    public function getDefaultView()
    {
	return 'AkAppBundle:PageParts:TextPagePart/view.html.twig';
    }

    /**
     * Get the admin form type.
     *
     * @return \Ak\AppBundle\Form\PageParts\TextPagePartAdminType
     */
    public function getDefaultAdminType()
    {
	return new \Ak\AppBundle\Form\PageParts\TextPagePartAdminType();
    }
}
