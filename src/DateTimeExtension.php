<?php

use SilverStripe\View\Requirements;
use SilverStripe\Core\Extension;
use SilverStripe\Admin\LeftAndMain;
use SilverStripe\i18n\i18n;

namespace Intwebg\DateTimeFieldExtension {

	class DateTimeFieldExtension extends Extension {

		public function init() {

			Requirements::css('intwebg/datetimepicker: thirdparty/datetimepicker/build/jquery.datetimepicker.min.css');
			Requirements::javascript('intwebg/datetimepicker: thirdparty/datetimepicker/build/jquery.datetimepicker.full.min.js');
			Requirements::javascript('intwebg/datetimepicker: client/javascript/DateTime.js');
			Requirements::customScript("
				jQuery.datetimepicker.setLocale('".substr(i18n::get_locale(), 0, 2)."');
			");
		}
	}
}
