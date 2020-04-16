<?php
// This file was auto-generated from sdk-root/src/data/personalize-events/2018-03-22/api-2.json
return [
	'version'    => '2.0',
	'metadata'   => [
		'apiVersion'       => '2018-03-22',
		'endpointPrefix'   => 'personalize-events',
		'jsonVersion'      => '1.1',
		'protocol'         => 'rest-json',
		'serviceFullName'  => 'Amazon Personalize Events',
		'serviceId'        => 'Personalize Events',
		'signatureVersion' => 'v4',
		'signingName'      => 'personalize',
		'uid'              => 'personalize-events-2018-03-22',
	],
	'operations' => [
		'PutEvents' => [
			'name'   => 'PutEvents',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/events', ],
			'input'  => [ 'shape' => 'PutEventsRequest', ],
			'errors' => [ [ 'shape' => 'InvalidInputException', ], ],
		],
	],
	'shapes'     => [
		'Date'                  => [ 'type' => 'timestamp', ],
		'ErrorMessage'          => [ 'type' => 'string', ],
		'Event'                 => [
			'type'     => 'structure',
			'required' => [ 'eventType', 'properties', 'sentAt', ],
			'members'  => [
				'eventId'    => [ 'shape' => 'StringType', ],
				'eventType'  => [ 'shape' => 'StringType', ],
				'properties' => [ 'shape' => 'EventPropertiesJSON', 'jsonvalue' => true, ],
				'sentAt'     => [ 'shape' => 'Date', ],
			],
		],
		'EventList'             => [ 'type' => 'list', 'member' => [ 'shape' => 'Event', ], 'max' => 10, 'min' => 1, ],
		'EventPropertiesJSON'   => [ 'type' => 'string', 'max' => 1024, 'min' => 1, ],
		'InvalidInputException' => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'ErrorMessage', ], ],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'PutEventsRequest'      => [
			'type'     => 'structure',
			'required' => [ 'trackingId', 'sessionId', 'eventList', ],
			'members'  => [
				'trackingId' => [ 'shape' => 'StringType', ],
				'userId'     => [ 'shape' => 'UserId', ],
				'sessionId'  => [ 'shape' => 'StringType', ],
				'eventList'  => [ 'shape' => 'EventList', ],
			],
		],
		'StringType'            => [ 'type' => 'string', 'max' => 256, 'min' => 1, ],
		'UserId'                => [ 'type' => 'string', 'max' => 256, 'min' => 1, ],
	],
];
