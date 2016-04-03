<?php

class AdminTMMegaMenuController extends ModuleAdminController
{
	public function ajaxProcessTabupdate()
	{
		$megamenu = new MegaMenu();
		$id_tab = Tools::getValue('id_tab');
		if (Tools::isEmpty(Tools::getValue('data')))
			$data = 'empty'; // send if menu is empty for remove it from databese
		else
			$data = Tools::getValue('data');

		if (!$megamenu->addMenuItem($id_tab, $data))
			die(Tools::jsonEncode(array('error_status' => $this->l('Update Fail'))));
		die(Tools::jsonEncode(array('success_status' => $this->l('Update Success !'), 'error' => false)));
	}

	public function ajaxProcessUpdatePosition()
	{
		$items = Tools::getValue('item');
		$total = count($items);
		$id_shop = (int)$this->context->shop->id;
		$success = true;
		for ($i = 1; $i <= $total; $i++)
		{
			$success &= Db::getInstance()->update(
				'tmmegamenu',
					array('sort_order' => $i),
					'`id_item` = '.preg_replace('/(item_)([0-9]+)/', '${2}', $items[$i - 1]).'
					AND `id_shop` ='.$id_shop
				);
		}
		if (!$success)
			die(Tools::jsonEncode(array('error' => 'Update Fail')));
		die(Tools::jsonEncode(array('success' => 'Update Success !', 'error' => false)));
	}
}
