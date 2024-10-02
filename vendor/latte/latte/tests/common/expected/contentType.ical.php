<?php
%A%
final class Template%a% extends Latte\Runtime\Template
{
	protected const CONTENT_TYPE = 'ical';


	public function main(): array
	{
		extract($this->params);
		if (empty($this->global->coreCaptured) && in_array($this->getReferenceType(), ["extends", null], true)) {
			header('Content-Type: text/calendar; charset=utf-8') /* line %d% */;
		}
		$start = '2011-06-06';
		$end = '2011-06-07';
		$info = "Hello \"hello\", \nWorld" /* line %d% */;
		echo 'BEGIN:VCALENDAR
VERSION:2.0
PRODID:-//example.org//iCal 4.0.3//CS
METHOD:PUBLISH
BEGIN:VEVENT
DTSTAMP:';
		echo LR\Filters::escapeIcal(($this->filters->date)($start, 'Ymd\THis')) /* line %d% */;
		echo '
DTSTART;TZID=Europe/Prague:';
		echo LR\Filters::escapeIcal(($this->filters->date)($start, 'Ymd\THis')) /* line %d% */;
		echo '
DTEND;TZID=Europe/Prague:';
		echo LR\Filters::escapeIcal(($this->filters->date)($end, 'Ymd\THis')) /* line %d% */;
		echo '
SUMMARY;LANGUAGE=cs:';
		echo LR\Filters::escapeIcal($info) /* line %d% */;
		echo '
DESCRIPTION:
CLASS:PUBLIC
END:VEVENT
END:VCALENDAR
';
		return get_defined_vars();
	}

}
