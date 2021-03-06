<?php declare(strict_types = 1);

namespace Contributte\Events\Extra\Event\UI;

use Symfony\Component\EventDispatcher\Event;

abstract class UIEvent extends Event
{

	/** @var UI */
	private $ui;

	/** @var Changeset */
	private $changeset;

	public function getUi(): UI
	{
		if ($this->ui === null) {
			$this->ui = new UI();
		}

		return $this->ui;
	}

	public function getChangeset(): Changeset
	{
		if ($this->changeset === null) {
			$this->changeset = new Changeset();
		}

		return $this->changeset;
	}

}
