<?php

namespace Intwebg\Fields;

use SilverStripe\View\Requirements;
use SilverStripe\Core\Extension;
use SilverStripe\Admin\LeftAndMain;
use SilverStripe\i18n\i18n;


class DateTimeFieldExtension extends Extension {

	public function init() {

		Requirements::css('intwebg/silverstripe-datetimepicker: thirdparty/datetimepicker/build/jquery.datetimepicker.min.css');
		Requirements::javascript('intwebg/silverstripe-datetimepicker: thirdparty/datetimepicker/build/jquery.datetimepicker.full.min.js');
		Requirements::javascript('intwebg/silverstripe-datetimepicker: client/javascript/DateTime.js');
		Requirements::customScript("
			jQuery.datetimepicker.setLocale('".substr(i18n::get_locale(), 0, 2)."');
		");
	}
}
