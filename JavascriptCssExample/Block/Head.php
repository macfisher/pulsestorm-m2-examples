<?php

namespace Pulsestorm\JavascriptCssExample\Block;

use \Magento\Framework\View\Element\Template\Context;
use \Magento\Framework\View\Asset\Repository;

class Head extends \Magento\Framework\View\Element\Template {
	public $assetRepository;

	public function __construct(Context $context, array $data = [],
		Repository $assetRepository)
	{
		$this->assetRepository = $assetRepository;
		return parent::__construct($context, $data);
	}
}
