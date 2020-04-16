<?php
// This file was auto-generated from sdk-root/src/data/streams.dynamodb/2012-08-10/api-2.json
return [
	'version'    => '2.0',
	'metadata'   => [
		'apiVersion'       => '2012-08-10',
		'endpointPrefix'   => 'streams.dynamodb',
		'jsonVersion'      => '1.0',
		'protocol'         => 'json',
		'serviceFullName'  => 'Amazon DynamoDB Streams',
		'signatureVersion' => 'v4',
		'signingName'      => 'dynamodb',
		'targetPrefix'     => 'DynamoDBStreams_20120810',
		'uid'              => 'streams-dynamodb-2012-08-10',
	],
	'operations' => [
		'DescribeStream'   => [
			'name'   => 'DescribeStream',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeStreamInput', ],
			'output' => [ 'shape' => 'DescribeStreamOutput', ],
			'errors' => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InternalServerError', ],
			],
		],
		'GetRecords'       => [
			'name'   => 'GetRecords',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'GetRecordsInput', ],
			'output' => [ 'shape' => 'GetRecordsOutput', ],
			'errors' => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'InternalServerError', ],
				[ 'shape' => 'ExpiredIteratorException', ],
				[ 'shape' => 'TrimmedDataAccessException', ],
			],
		],
		'GetShardIterator' => [
			'name'   => 'GetShardIterator',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'GetShardIteratorInput', ],
			'output' => [ 'shape' => 'GetShardIteratorOutput', ],
			'errors' => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InternalServerError', ],
				[ 'shape' => 'TrimmedDataAccessException', ],
			],
		],
		'ListStreams'      => [
			'name'   => 'ListStreams',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ListStreamsInput', ],
			'output' => [ 'shape' => 'ListStreamsOutput', ],
			'errors' => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InternalServerError', ],
			],
		],
	],
	'shapes'     => [
		'AttributeMap'               => [
			'type'  => 'map',
			'key'   => [ 'shape' => 'AttributeName', ],
			'value' => [ 'shape' => 'AttributeValue', ],
		],
		'AttributeName'              => [ 'type' => 'string', 'max' => 65535, ],
		'AttributeValue'             => [
			'type'    => 'structure',
			'members' => [
				'S'    => [ 'shape' => 'StringAttributeValue', ],
				'N'    => [ 'shape' => 'NumberAttributeValue', ],
				'B'    => [ 'shape' => 'BinaryAttributeValue', ],
				'SS'   => [ 'shape' => 'StringSetAttributeValue', ],
				'NS'   => [ 'shape' => 'NumberSetAttributeValue', ],
				'BS'   => [ 'shape' => 'BinarySetAttributeValue', ],
				'M'    => [ 'shape' => 'MapAttributeValue', ],
				'L'    => [ 'shape' => 'ListAttributeValue', ],
				'NULL' => [ 'shape' => 'NullAttributeValue', ],
				'BOOL' => [ 'shape' => 'BooleanAttributeValue', ],
			],
		],
		'BinaryAttributeValue'       => [ 'type' => 'blob', ],
		'BinarySetAttributeValue'    => [ 'type' => 'list', 'member' => [ 'shape' => 'BinaryAttributeValue', ], ],
		'BooleanAttributeValue'      => [ 'type' => 'boolean', ],
		'Date'                       => [ 'type' => 'timestamp', ],
		'DescribeStreamInput'        => [
			'type'     => 'structure',
			'required' => [ 'StreamArn', ],
			'members'  => [
				'StreamArn'             => [ 'shape' => 'StreamArn', ],
				'Limit'                 => [ 'shape' => 'PositiveIntegerObject', ],
				'ExclusiveStartShardId' => [ 'shape' => 'ShardId', ],
			],
		],
		'DescribeStreamOutput'       => [
			'type'    => 'structure',
			'members' => [ 'StreamDescription' => [ 'shape' => 'StreamDescription', ], ],
		],
		'ErrorMessage'               => [ 'type' => 'string', ],
		'ExpiredIteratorException'   => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'ErrorMessage', ], ],
			'exception' => true,
		],
		'GetRecordsInput'            => [
			'type'     => 'structure',
			'required' => [ 'ShardIterator', ],
			'members'  => [
				'ShardIterator' => [ 'shape' => 'ShardIterator', ],
				'Limit'         => [ 'shape' => 'PositiveIntegerObject', ],
			],
		],
		'GetRecordsOutput'           => [
			'type'    => 'structure',
			'members' => [
				'Records'           => [ 'shape' => 'RecordList', ],
				'NextShardIterator' => [ 'shape' => 'ShardIterator', ],
			],
		],
		'GetShardIteratorInput'      => [
			'type'     => 'structure',
			'required' => [ 'StreamArn', 'ShardId', 'ShardIteratorType', ],
			'members'  => [
				'StreamArn'         => [ 'shape' => 'StreamArn', ],
				'ShardId'           => [ 'shape' => 'ShardId', ],
				'ShardIteratorType' => [ 'shape' => 'ShardIteratorType', ],
				'SequenceNumber'    => [ 'shape' => 'SequenceNumber', ],
			],
		],
		'GetShardIteratorOutput'     => [
			'type'    => 'structure',
			'members' => [ 'ShardIterator' => [ 'shape' => 'ShardIterator', ], ],
		],
		'Identity'                   => [
			'type'    => 'structure',
			'members' => [
				'PrincipalId' => [ 'shape' => 'String', ],
				'Type'        => [ 'shape' => 'String', ],
			],
		],
		'InternalServerError'        => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'ErrorMessage', ], ],
			'exception' => true,
			'fault'     => true,
		],
		'KeySchema'                  => [
			'type'   => 'list',
			'member' => [ 'shape' => 'KeySchemaElement', ],
			'max'    => 2,
			'min'    => 1,
		],
		'KeySchemaAttributeName'     => [ 'type' => 'string', 'max' => 255, 'min' => 1, ],
		'KeySchemaElement'           => [
			'type'     => 'structure',
			'required' => [ 'AttributeName', 'KeyType', ],
			'members'  => [
				'AttributeName' => [ 'shape' => 'KeySchemaAttributeName', ],
				'KeyType'       => [ 'shape' => 'KeyType', ],
			],
		],
		'KeyType'                    => [ 'type' => 'string', 'enum' => [ 'HASH', 'RANGE', ], ],
		'LimitExceededException'     => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'ErrorMessage', ], ],
			'exception' => true,
		],
		'ListAttributeValue'         => [ 'type' => 'list', 'member' => [ 'shape' => 'AttributeValue', ], ],
		'ListStreamsInput'           => [
			'type'    => 'structure',
			'members' => [
				'TableName'               => [ 'shape' => 'TableName', ],
				'Limit'                   => [ 'shape' => 'PositiveIntegerObject', ],
				'ExclusiveStartStreamArn' => [ 'shape' => 'StreamArn', ],
			],
		],
		'ListStreamsOutput'          => [
			'type'    => 'structure',
			'members' => [
				'Streams'                => [ 'shape' => 'StreamList', ],
				'LastEvaluatedStreamArn' => [ 'shape' => 'StreamArn', ],
			],
		],
		'MapAttributeValue'          => [
			'type'  => 'map',
			'key'   => [ 'shape' => 'AttributeName', ],
			'value' => [ 'shape' => 'AttributeValue', ],
		],
		'NullAttributeValue'         => [ 'type' => 'boolean', ],
		'NumberAttributeValue'       => [ 'type' => 'string', ],
		'NumberSetAttributeValue'    => [ 'type' => 'list', 'member' => [ 'shape' => 'NumberAttributeValue', ], ],
		'OperationType'              => [ 'type' => 'string', 'enum' => [ 'INSERT', 'MODIFY', 'REMOVE', ], ],
		'PositiveIntegerObject'      => [ 'type' => 'integer', 'min' => 1, ],
		'PositiveLongObject'         => [ 'type' => 'long', 'min' => 1, ],
		'Record'                     => [
			'type'    => 'structure',
			'members' => [
				'eventID'      => [ 'shape' => 'String', ],
				'eventName'    => [ 'shape' => 'OperationType', ],
				'eventVersion' => [ 'shape' => 'String', ],
				'eventSource'  => [ 'shape' => 'String', ],
				'awsRegion'    => [ 'shape' => 'String', ],
				'dynamodb'     => [ 'shape' => 'StreamRecord', ],
				'userIdentity' => [ 'shape' => 'Identity', ],
			],
		],
		'RecordList'                 => [ 'type' => 'list', 'member' => [ 'shape' => 'Record', ], ],
		'ResourceNotFoundException'  => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'ErrorMessage', ], ],
			'exception' => true,
		],
		'SequenceNumber'             => [ 'type' => 'string', 'max' => 40, 'min' => 21, ],
		'SequenceNumberRange'        => [
			'type'    => 'structure',
			'members' => [
				'StartingSequenceNumber' => [ 'shape' => 'SequenceNumber', ],
				'EndingSequenceNumber'   => [ 'shape' => 'SequenceNumber', ],
			],
		],
		'Shard'                      => [
			'type'    => 'structure',
			'members' => [
				'ShardId'             => [ 'shape' => 'ShardId', ],
				'SequenceNumberRange' => [ 'shape' => 'SequenceNumberRange', ],
				'ParentShardId'       => [ 'shape' => 'ShardId', ],
			],
		],
		'ShardDescriptionList'       => [ 'type' => 'list', 'member' => [ 'shape' => 'Shard', ], ],
		'ShardId'                    => [ 'type' => 'string', 'max' => 65, 'min' => 28, ],
		'ShardIterator'              => [ 'type' => 'string', 'max' => 2048, 'min' => 1, ],
		'ShardIteratorType'          => [
			'type' => 'string',
			'enum' => [
				'TRIM_HORIZON',
				'LATEST',
				'AT_SEQUENCE_NUMBER',
				'AFTER_SEQUENCE_NUMBER',
			],
		],
		'Stream'                     => [
			'type'    => 'structure',
			'members' => [
				'StreamArn'   => [ 'shape' => 'StreamArn', ],
				'TableName'   => [ 'shape' => 'TableName', ],
				'StreamLabel' => [ 'shape' => 'String', ],
			],
		],
		'StreamArn'                  => [ 'type' => 'string', 'max' => 1024, 'min' => 37, ],
		'StreamDescription'          => [
			'type'    => 'structure',
			'members' => [
				'StreamArn'               => [ 'shape' => 'StreamArn', ],
				'StreamLabel'             => [ 'shape' => 'String', ],
				'StreamStatus'            => [ 'shape' => 'StreamStatus', ],
				'StreamViewType'          => [ 'shape' => 'StreamViewType', ],
				'CreationRequestDateTime' => [ 'shape' => 'Date', ],
				'TableName'               => [ 'shape' => 'TableName', ],
				'KeySchema'               => [ 'shape' => 'KeySchema', ],
				'Shards'                  => [ 'shape' => 'ShardDescriptionList', ],
				'LastEvaluatedShardId'    => [ 'shape' => 'ShardId', ],
			],
		],
		'StreamList'                 => [ 'type' => 'list', 'member' => [ 'shape' => 'Stream', ], ],
		'StreamRecord'               => [
			'type'    => 'structure',
			'members' => [
				'ApproximateCreationDateTime' => [ 'shape' => 'Date', ],
				'Keys'                        => [ 'shape' => 'AttributeMap', ],
				'NewImage'                    => [ 'shape' => 'AttributeMap', ],
				'OldImage'                    => [ 'shape' => 'AttributeMap', ],
				'SequenceNumber'              => [ 'shape' => 'SequenceNumber', ],
				'SizeBytes'                   => [ 'shape' => 'PositiveLongObject', ],
				'StreamViewType'              => [ 'shape' => 'StreamViewType', ],
			],
		],
		'StreamStatus'               => [
			'type' => 'string',
			'enum' => [ 'ENABLING', 'ENABLED', 'DISABLING', 'DISABLED', ],
		],
		'StreamViewType'             => [
			'type' => 'string',
			'enum' => [ 'NEW_IMAGE', 'OLD_IMAGE', 'NEW_AND_OLD_IMAGES', 'KEYS_ONLY', ],
		],
		'String'                     => [ 'type' => 'string', ],
		'StringAttributeValue'       => [ 'type' => 'string', ],
		'StringSetAttributeValue'    => [ 'type' => 'list', 'member' => [ 'shape' => 'StringAttributeValue', ], ],
		'TableName'                  => [
			'type'    => 'string',
			'max'     => 255,
			'min'     => 3,
			'pattern' => '[a-zA-Z0-9_.-]+',
		],
		'TrimmedDataAccessException' => [
			'type'      => 'structure',
			'members'   => [ 'message' => [ 'shape' => 'ErrorMessage', ], ],
			'exception' => true,
		],
	],
];
