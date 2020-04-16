<?php
// This file was auto-generated from sdk-root/src/data/kinesis-video-archived-media/2017-09-30/api-2.json
return [
	'version'    => '2.0',
	'metadata'   => [
		'apiVersion'          => '2017-09-30',
		'endpointPrefix'      => 'kinesisvideo',
		'protocol'            => 'rest-json',
		'serviceAbbreviation' => 'Kinesis Video Archived Media',
		'serviceFullName'     => 'Amazon Kinesis Video Streams Archived Media',
		'serviceId'           => 'Kinesis Video Archived Media',
		'signatureVersion'    => 'v4',
		'uid'                 => 'kinesis-video-archived-media-2017-09-30',
	],
	'operations' => [
		'GetDASHStreamingSessionURL' => [
			'name'   => 'GetDASHStreamingSessionURL',
			'http'   => [
				'method'     => 'POST',
				'requestUri' => '/getDASHStreamingSessionURL',
			],
			'input'  => [ 'shape' => 'GetDASHStreamingSessionURLInput', ],
			'output' => [ 'shape' => 'GetDASHStreamingSessionURLOutput', ],
			'errors' => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidArgumentException', ],
				[ 'shape' => 'ClientLimitExceededException', ],
				[ 'shape' => 'NotAuthorizedException', ],
				[ 'shape' => 'UnsupportedStreamMediaTypeException', ],
				[ 'shape' => 'NoDataRetentionException', ],
				[ 'shape' => 'MissingCodecPrivateDataException', ],
				[ 'shape' => 'InvalidCodecPrivateDataException', ],
			],
		],
		'GetHLSStreamingSessionURL'  => [
			'name'   => 'GetHLSStreamingSessionURL',
			'http'   => [
				'method'     => 'POST',
				'requestUri' => '/getHLSStreamingSessionURL',
			],
			'input'  => [ 'shape' => 'GetHLSStreamingSessionURLInput', ],
			'output' => [ 'shape' => 'GetHLSStreamingSessionURLOutput', ],
			'errors' => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidArgumentException', ],
				[ 'shape' => 'ClientLimitExceededException', ],
				[ 'shape' => 'NotAuthorizedException', ],
				[ 'shape' => 'UnsupportedStreamMediaTypeException', ],
				[ 'shape' => 'NoDataRetentionException', ],
				[ 'shape' => 'MissingCodecPrivateDataException', ],
				[ 'shape' => 'InvalidCodecPrivateDataException', ],
			],
		],
		'GetMediaForFragmentList'    => [
			'name'   => 'GetMediaForFragmentList',
			'http'   => [
				'method'     => 'POST',
				'requestUri' => '/getMediaForFragmentList',
			],
			'input'  => [ 'shape' => 'GetMediaForFragmentListInput', ],
			'output' => [ 'shape' => 'GetMediaForFragmentListOutput', ],
			'errors' => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidArgumentException', ],
				[ 'shape' => 'ClientLimitExceededException', ],
				[ 'shape' => 'NotAuthorizedException', ],
			],
		],
		'ListFragments'              => [
			'name'   => 'ListFragments',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/listFragments', ],
			'input'  => [ 'shape' => 'ListFragmentsInput', ],
			'output' => [ 'shape' => 'ListFragmentsOutput', ],
			'errors' => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InvalidArgumentException', ],
				[ 'shape' => 'ClientLimitExceededException', ],
				[ 'shape' => 'NotAuthorizedException', ],
			],
		],
	],
	'shapes'     => [
		'ClientLimitExceededException'        => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'ContainerFormat'                     => [ 'type' => 'string', 'enum' => [ 'FRAGMENTED_MP4', 'MPEG_TS', ], ],
		'ContentType'                         => [
			'type'    => 'string',
			'max'     => 128,
			'min'     => 1,
			'pattern' => '^[a-zA-Z0-9_\\.\\-]+$',
		],
		'DASHDisplayFragmentNumber'           => [ 'type' => 'string', 'enum' => [ 'ALWAYS', 'NEVER', ], ],
		'DASHDisplayFragmentTimestamp'        => [ 'type' => 'string', 'enum' => [ 'ALWAYS', 'NEVER', ], ],
		'DASHFragmentSelector'                => [
			'type'    => 'structure',
			'members' => [
				'FragmentSelectorType' => [ 'shape' => 'DASHFragmentSelectorType', ],
				'TimestampRange'       => [ 'shape' => 'DASHTimestampRange', ],
			],
		],
		'DASHFragmentSelectorType'            => [
			'type' => 'string',
			'enum' => [ 'PRODUCER_TIMESTAMP', 'SERVER_TIMESTAMP', ],
		],
		'DASHPlaybackMode'                    => [
			'type' => 'string',
			'enum' => [ 'LIVE', 'LIVE_REPLAY', 'ON_DEMAND', ],
		],
		'DASHStreamingSessionURL'             => [ 'type' => 'string', ],
		'DASHTimestampRange'                  => [
			'type'    => 'structure',
			'members' => [
				'StartTimestamp' => [ 'shape' => 'Timestamp', ],
				'EndTimestamp'   => [ 'shape' => 'Timestamp', ],
			],
		],
		'ErrorMessage'                        => [ 'type' => 'string', ],
		'Expires'                             => [ 'type' => 'integer', 'max' => 43200, 'min' => 300, ],
		'Fragment'                            => [
			'type'    => 'structure',
			'members' => [
				'FragmentNumber'               => [ 'shape' => 'String', ],
				'FragmentSizeInBytes'          => [ 'shape' => 'Long', ],
				'ProducerTimestamp'            => [ 'shape' => 'Timestamp', ],
				'ServerTimestamp'              => [ 'shape' => 'Timestamp', ],
				'FragmentLengthInMilliseconds' => [ 'shape' => 'Long', ],
			],
		],
		'FragmentList'                        => [ 'type' => 'list', 'member' => [ 'shape' => 'Fragment', ], ],
		'FragmentNumberList'                  => [
			'type'   => 'list',
			'member' => [ 'shape' => 'FragmentNumberString', ],
			'max'    => 1000,
			'min'    => 1,
		],
		'FragmentNumberString'                => [
			'type'    => 'string',
			'max'     => 128,
			'min'     => 1,
			'pattern' => '^[0-9]+$',
		],
		'FragmentSelector'                    => [
			'type'     => 'structure',
			'required' => [ 'FragmentSelectorType', 'TimestampRange', ],
			'members'  => [
				'FragmentSelectorType' => [ 'shape' => 'FragmentSelectorType', ],
				'TimestampRange'       => [ 'shape' => 'TimestampRange', ],
			],
		],
		'FragmentSelectorType'                => [
			'type' => 'string',
			'enum' => [ 'PRODUCER_TIMESTAMP', 'SERVER_TIMESTAMP', ],
		],
		'GetDASHStreamingSessionURLInput'     => [
			'type'    => 'structure',
			'members' => [
				'StreamName'                 => [ 'shape' => 'StreamName', ],
				'StreamARN'                  => [ 'shape' => 'ResourceARN', ],
				'PlaybackMode'               => [ 'shape' => 'DASHPlaybackMode', ],
				'DisplayFragmentTimestamp'   => [ 'shape' => 'DASHDisplayFragmentTimestamp', ],
				'DisplayFragmentNumber'      => [ 'shape' => 'DASHDisplayFragmentNumber', ],
				'DASHFragmentSelector'       => [ 'shape' => 'DASHFragmentSelector', ],
				'Expires'                    => [ 'shape' => 'Expires', ],
				'MaxManifestFragmentResults' => [ 'shape' => 'PageLimit', ],
			],
		],
		'GetDASHStreamingSessionURLOutput'    => [
			'type'    => 'structure',
			'members' => [ 'DASHStreamingSessionURL' => [ 'shape' => 'DASHStreamingSessionURL', ], ],
		],
		'GetHLSStreamingSessionURLInput'      => [
			'type'    => 'structure',
			'members' => [
				'StreamName'                      => [ 'shape' => 'StreamName', ],
				'StreamARN'                       => [ 'shape' => 'ResourceARN', ],
				'PlaybackMode'                    => [ 'shape' => 'HLSPlaybackMode', ],
				'HLSFragmentSelector'             => [ 'shape' => 'HLSFragmentSelector', ],
				'ContainerFormat'                 => [ 'shape' => 'ContainerFormat', ],
				'DiscontinuityMode'               => [ 'shape' => 'HLSDiscontinuityMode', ],
				'DisplayFragmentTimestamp'        => [ 'shape' => 'HLSDisplayFragmentTimestamp', ],
				'Expires'                         => [ 'shape' => 'Expires', ],
				'MaxMediaPlaylistFragmentResults' => [ 'shape' => 'PageLimit', ],
			],
		],
		'GetHLSStreamingSessionURLOutput'     => [
			'type'    => 'structure',
			'members' => [ 'HLSStreamingSessionURL' => [ 'shape' => 'HLSStreamingSessionURL', ], ],
		],
		'GetMediaForFragmentListInput'        => [
			'type'     => 'structure',
			'required' => [ 'StreamName', 'Fragments', ],
			'members'  => [
				'StreamName' => [ 'shape' => 'StreamName', ],
				'Fragments'  => [ 'shape' => 'FragmentNumberList', ],
			],
		],
		'GetMediaForFragmentListOutput'       => [
			'type'    => 'structure',
			'members' => [
				'ContentType' => [
					'shape'        => 'ContentType',
					'location'     => 'header',
					'locationName' => 'Content-Type',
				],
				'Payload'     => [ 'shape' => 'Payload', ],
			],
			'payload' => 'Payload',
		],
		'HLSDiscontinuityMode'                => [ 'type' => 'string', 'enum' => [ 'ALWAYS', 'NEVER', ], ],
		'HLSDisplayFragmentTimestamp'         => [ 'type' => 'string', 'enum' => [ 'ALWAYS', 'NEVER', ], ],
		'HLSFragmentSelector'                 => [
			'type'    => 'structure',
			'members' => [
				'FragmentSelectorType' => [ 'shape' => 'HLSFragmentSelectorType', ],
				'TimestampRange'       => [ 'shape' => 'HLSTimestampRange', ],
			],
		],
		'HLSFragmentSelectorType'             => [
			'type' => 'string',
			'enum' => [ 'PRODUCER_TIMESTAMP', 'SERVER_TIMESTAMP', ],
		],
		'HLSPlaybackMode'                     => [
			'type' => 'string',
			'enum' => [ 'LIVE', 'LIVE_REPLAY', 'ON_DEMAND', ],
		],
		'HLSStreamingSessionURL'              => [ 'type' => 'string', ],
		'HLSTimestampRange'                   => [
			'type'    => 'structure',
			'members' => [
				'StartTimestamp' => [ 'shape' => 'Timestamp', ],
				'EndTimestamp'   => [ 'shape' => 'Timestamp', ],
			],
		],
		'InvalidArgumentException'            => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'InvalidCodecPrivateDataException'    => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'ListFragmentsInput'                  => [
			'type'     => 'structure',
			'required' => [ 'StreamName', ],
			'members'  => [
				'StreamName'       => [ 'shape' => 'StreamName', ],
				'MaxResults'       => [ 'shape' => 'PageLimit', ],
				'NextToken'        => [ 'shape' => 'String', ],
				'FragmentSelector' => [ 'shape' => 'FragmentSelector', ],
			],
		],
		'ListFragmentsOutput'                 => [
			'type'    => 'structure',
			'members' => [
				'Fragments' => [ 'shape' => 'FragmentList', ],
				'NextToken' => [ 'shape' => 'String', ],
			],
		],
		'Long'                                => [ 'type' => 'long', ],
		'MissingCodecPrivateDataException'    => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'NoDataRetentionException'            => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
		'NotAuthorizedException'              => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ],
			'error'     => [ 'httpStatusCode' => 401, ],
			'exception' => true,
		],
		'PageLimit'                           => [ 'type' => 'long', 'max' => 1000, 'min' => 1, ],
		'Payload'                             => [ 'type' => 'blob', 'streaming' => true, ],
		'ResourceARN'                         => [
			'type'    => 'string',
			'max'     => 1024,
			'min'     => 1,
			'pattern' => 'arn:aws:kinesisvideo:[a-z0-9-]+:[0-9]+:[a-z]+/[a-zA-Z0-9_.-]+/[0-9]+',
		],
		'ResourceNotFoundException'           => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ],
			'error'     => [ 'httpStatusCode' => 404, ],
			'exception' => true,
		],
		'StreamName'                          => [
			'type'    => 'string',
			'max'     => 256,
			'min'     => 1,
			'pattern' => '[a-zA-Z0-9_.-]+',
		],
		'String'                              => [ 'type' => 'string', 'min' => 1, ],
		'Timestamp'                           => [ 'type' => 'timestamp', ],
		'TimestampRange'                      => [
			'type'     => 'structure',
			'required' => [ 'StartTimestamp', 'EndTimestamp', ],
			'members'  => [
				'StartTimestamp' => [ 'shape' => 'Timestamp', ],
				'EndTimestamp'   => [ 'shape' => 'Timestamp', ],
			],
		],
		'UnsupportedStreamMediaTypeException' => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ],
			'error'     => [ 'httpStatusCode' => 400, ],
			'exception' => true,
		],
	],
];
