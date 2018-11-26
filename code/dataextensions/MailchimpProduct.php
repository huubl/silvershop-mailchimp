<?php

namespace SilverShop\Mailchimp\Dataextensions;

class MailchimpProduct extends \DataExtension
{
	private static $db = array(
		'MailchimpSyncStatus'     => 'Enum("Synced, Failed sync, Failed create, Initial, Waiting","Initial")',
		'MailchimpLastSync'       => 'SS_Datetime',
	);

	public function onBeforeWrite()
	{
		parent::onBeforeWrite(); // TODO: Change the autogenerated stub

		if($this->ID){
			$this->MailchimSyncStatus = 'Waiting';
		}else{
			$this->MailchimSyncStatus = 'Initial';
		}

	}
}
