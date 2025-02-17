<?php

// Generated file. Do not edit by hand. Use update.php in project root.

namespace PHPFUI\ConstantContact\Definition;

/**
 * @property \PHPFUI\ConstantContact\UUID $contact_id The ID that uniquely identifies a contact.
 * @property \PHPFUI\ConstantContact\UUID $campaign_activity_id The ID that uniquely identifies the email campaign activity.
 * @property string $tracking_activity_type The type of report tracking activity that is associated with the specified <code>campaign_activity_id</code>.
 * @property string $email_address The contact's email address.
 * @property string $first_name The first name of the contact.
 * @property string $last_name The last name of the contact.
 * @property string $opt_out_reason The opt-out reason, if the contact entered a reason.
 * @property \PHPFUI\ConstantContact\DateTime $created_time The time that the contact chose to opt-out from receiving future email campaign activities.
 * @property \PHPFUI\ConstantContact\Date $deleted_at If applicable, displays the date that the contact was deleted.
 */
class OptoutsTrackingActivity extends \PHPFUI\ConstantContact\Definition\Base
	{
	protected $fields = [
		'contact_id' => '\PHPFUI\ConstantContact\UUID',
		'campaign_activity_id' => '\PHPFUI\ConstantContact\UUID',
		'tracking_activity_type' => 'string',
		'email_address' => 'string',
		'first_name' => 'string',
		'last_name' => 'string',
		'opt_out_reason' => 'string',
		'created_time' => '\PHPFUI\ConstantContact\DateTime',
		'deleted_at' => '\PHPFUI\ConstantContact\Date',

	];
	}
