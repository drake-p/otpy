<?php
require_once 'Zend/Loader.php';
Zend_Loader::loadClass('Zend_Gdata');
Zend_Loader::loadClass('Zend_Gdata_HttpClient');
Zend_Loader::loadClass('Zend_Gdata_Calendar');
$service = new Zend_Gdata_Calendar();
$query = $service->newEventQuery();

$query->setUser('e.drake.p@gmail.com');

$query->setVisibility('public');
$query->setProjection('full');
$query->setStartMin(date('Y-n-j'));
$query->setStartMax(date('Y-n-j', time() + (60*60 *24*8)));
$query->setOrderby('starttime');

try { $eventFeed = $service->getCalendarEventFeed($query); }
catch (Zend_Gdata_App_Exception $e) { return; }

foreach ($eventFeed as $event) 
	echo $event; // do something real here
?>