<?php

namespace App\Models\Scraped;

abstract class Item extends \Katu\Model {

	abstract public function scrape();
	abstract public function import();
	abstract public function getName();

	public function getOrCreateScrapedIngredent() {
		return \App\Models\ScrapedIngredient::make(static::SOURCE, $this->getName());
	}

}
