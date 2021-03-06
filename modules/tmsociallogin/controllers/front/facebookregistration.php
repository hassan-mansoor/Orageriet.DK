<?php

if (!defined('_PS_VERSION_'))
	exit;

class TMSocialLoginFacebookRegistrationModuleFrontController extends ModuleFrontController
{
	public function initContent()
	{
		parent::initContent();

		if ($this->context->customer->isLogged())
			Tools::redirect('index.php?controller=my-account');

		$user_id = Tools::getValue('user_id');
		$user_name = Tools::getValue('user_name');
		$email = Tools::getValue('email');
		$given_name = Tools::getValue('given_name');
		$back = Tools::getValue('back');
		$family_name = Tools::getValue('family_name');
		$gender = Tools::getValue('gender');
		$profile_url = Tools::getValue('profile_url');
		$profile_image_url = 'https://graph.facebook.com/'.Tools::getValue('user_id').'/picture';

		if (isset($user_id))
		{
			if (Db::getInstance()->getValue('
				SELECT `id_customer`
				FROM `'._DB_PREFIX_.'customer_tmsociallogin`
				WHERE `social_id` = \''.$user_id.'\'
				AND `social_type` = \'facebook\'
			'.Shop::addSqlRestriction(Shop::SHARE_CUSTOMER)))
				Tools::redirect($this->context->link->getModuleLink('tmsociallogin', 'facebooklogin', array(), true, $this->context->language->id));
		}

		if (Tools::getValue('done'))
		{
			$email = trim(Tools::getValue('email'));

			if (empty($email))
				$this->errors[] = Tools::displayError('An email address required.');
			else if (!Validate::isEmail($email))
				$this->errors[] = Tools::displayError('Invalid email address.');
			else if (Customer::customerExists($email))
			{

				$customer = new Customer();
				$customer->getByEmail($email);

				$facebook_id = Db::getInstance()->getValue('
					SELECT `social_id`
					FROM `'._DB_PREFIX_.'customer_tmsociallogin`
					WHERE `id_customer` = \''.(int)$customer->id.'\'
					AND `social_type` = \'facebook\'
				'.Shop::addSqlRestriction(Shop::SHARE_CUSTOMER));

				if ($facebook_id)
				{
					if ($facebook_id == (int)$user_id)
						Tools::redirect($this->context->link->getModuleLink('tmsociallogin', 'facebooklogin', array(), false, $this->context->language->id));
					else
						$this->errors[] = Tools::displayError('An error occurred while linking your Facebook account.');
				}
				else
				{
					if (Db::getInstance()->insert('customer_tmsociallogin',
													array(
														'id_customer' => (int)$customer->id,
														'social_id' => $user_id,
														'social_type' => 'facebook')))
						$this->errors[] = Tools::displayError('an error occurred while linking your Facebook account.');

					$customer->active = 1;
					$customer->deleted = 0;
					$this->context->cookie->id_customer = (int)$customer->id;
					$this->context->cookie->customer_lastname = $customer->lastname;
					$this->context->cookie->customer_firstname = $customer->firstname;
					$this->context->cookie->logged = 1;
					$this->context->cookie->passwd = $customer->passwd;
					$this->context->cookie->email = $customer->email;
					if (Configuration::get('PS_CART_FOLLOWING')
						&& (empty($this->context->cookie->id_cart)
						|| Cart::getNbProducts($this->context->cookie->id_cart) == 0))
						$this->context->cookie->id_cart = (int)Cart::lastNoneOrderedCart((int)$customer->id);

					Module::hookExec('authentication');

					if (($back = Tools::getValue('back')) && $back == Tools::secureReferrer($back))
						Tools::redirect(html_entity_decode($back));
					// redirection: if cart is not empty : redirection to the cart
					if (count($this->context->cart->getProducts(true)) > 0)
						Tools::redirect('index.php?controller=order&multi-shipping='.(int)Tools::getValue('multi-shipping'));
					// else : redirection to the account
					else
						Tools::redirect('index.php?controller='.(($this->authRedirection !== false) ? urlencode($this->authRedirection) : 'my-account'));
				}
			}

			if (!sizeof($this->errors))
			{
				$customer = new Customer();

				if ($gender == 'male')
					$_POST['id_gender'] = 1;
				else if ($gender == 'female')
					$_POST['id_gender'] = 2;
				else
					$_POST['id_gender'] = 0;
				$_POST['lastname'] = $family_name;
				$_POST['firstname'] = $given_name;
				$_POST['passwd'] = Tools::passwdGen();
				$_POST['email'] = $email;
				$this->errors = $customer->validateControler();

				if (!sizeof($this->errors))
				{
					$customer->active = 1;
					if (!$customer->add())
						$this->errors[] = Tools::displayError('an error occurred while creating your account');
					else
					{
						if (Db::getInstance()->insert('customer_tmsociallogin',
													array(
														'id_customer' => (int)$customer->id,
														'social_id' => $user_id,
														'id_shop' => (int)$this->context->getContext()->shop->id,
														'social_type' => 'facebook')))
							$this->errors[] = Tools::displayError('an error occurred while linking your Facebook account.');

						$this->context->smarty->assign('confirmation', 1);
						$this->context->cookie->id_customer = (int)$customer->id;
						$this->context->cookie->customer_lastname = $customer->lastname;
						$this->context->cookie->customer_firstname = $customer->firstname;
						$this->context->cookie->passwd = $customer->passwd;
						$this->context->cookie->logged = 1;
						$this->context->cookie->email = $customer->email;

						Module::hookExec('createAccount', array(
							'_POST' => $_POST,
							'newCustomer' => $customer
						));

						if (($back = Tools::getValue('back')) && $back == Tools::secureReferrer($back))
							Tools::redirect(html_entity_decode($back));
							// redirection: if cart is not empty : redirection to the cart
						if (count($this->context->cart->getProducts(true)) > 0)
							Tools::redirect('index.php?controller=order&multi-shipping='.(int)Tools::getValue('multi-shipping'));
							// else : redirection to the account
						else
							Tools::redirect('index.php?controller='.(($this->authRedirection !== false) ? urlencode($this->authRedirection) : 'my-account'));
					}
				}
			}
		}

		$this->context->smarty->assign(array(
			'user_id' => $user_id,
			'user_name' => $user_name,
			'email' => $email,
			'given_name' => $given_name,
			'back' => $back,
			'family_name' => $family_name,
			'gender' => $gender,
			'profile_url' => $profile_url,
			'profile_image_url' => $profile_image_url,
			'error' => $this->errors
		));

		$this->setTemplate('facebookregistration.tpl');
	}
}