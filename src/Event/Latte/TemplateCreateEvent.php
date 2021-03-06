<?php declare(strict_types = 1);

namespace Contributte\Events\Extra\Event\Latte;

use Nette\Bridges\ApplicationLatte\Template;
use Symfony\Component\EventDispatcher\Event;

class TemplateCreateEvent extends Event
{

	public const NAME = LatteEvents::ON_TEMPLATE_CREATE;

	/** @var Template */
	private $template;

	public function __construct(Template $template)
	{
		$this->template = $template;
	}

	public function getTemplate(): Template
	{
		return $this->template;
	}

}
