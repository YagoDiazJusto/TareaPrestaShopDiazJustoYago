<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.form.choice_provider.configurable_country_by_id' shared service.

return $this->services['prestashop.core.form.choice_provider.configurable_country_by_id'] = new \PrestaShop\PrestaShop\Core\Form\ChoiceProvider\CountryByIdConfigurableChoiceProvider(($this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? $this->getLegacyContextService())->getLanguage()->id, ($this->services['prestashop.adapter.data_provider.country'] ?? ($this->services['prestashop.adapter.data_provider.country'] = new \PrestaShop\PrestaShop\Adapter\Country\CountryDataProvider())));
