<?php
// This file was auto-generated from sdk-root/src/data/mediapackage/2017-10-12/api-2.json
return [
	'metadata'   => [
		'apiVersion'          => '2017-10-12',
		'endpointPrefix'      => 'mediapackage',
		'jsonVersion'         => '1.1',
		'protocol'            => 'rest-json',
		'serviceAbbreviation' => 'MediaPackage',
		'serviceFullName'     => 'AWS Elemental MediaPackage',
		'serviceId'           => 'MediaPackage',
		'signatureVersion'    => 'v4',
		'signingName'         => 'mediapackage',
		'uid'                 => 'mediapackage-2017-10-12',
	],
	'operations' => [
		'CreateChannel'                   => [
			'errors' => [
				[ 'shape' => 'UnprocessableEntityException', ],
				[ 'shape' => 'InternalServerErrorException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
			'http'   => [ 'method' => 'POST', 'requestUri' => '/channels', 'responseCode' => 200, ],
			'input'  => [ 'shape' => 'CreateChannelRequest', ],
			'name'   => 'CreateChannel',
			'output' => [ 'shape' => 'CreateChannelResponse', ],
		],
		'CreateOriginEndpoint'            => [
			'errors' => [
				[ 'shape' => 'UnprocessableEntityException', ],
				[ 'shape' => 'InternalServerErrorException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/origin_endpoints',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'CreateOriginEndpointRequest', ],
			'name'   => 'CreateOriginEndpoint',
			'output' => [ 'shape' => 'CreateOriginEndpointResponse', ],
		],
		'DeleteChannel'                   => [
			'errors' => [
				[ 'shape' => 'UnprocessableEntityException', ],
				[ 'shape' => 'InternalServerErrorException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
			'http'   => [
				'method'       => 'DELETE',
				'requestUri'   => '/channels/{id}',
				'responseCode' => 202,
			],
			'input'  => [ 'shape' => 'DeleteChannelRequest', ],
			'name'   => 'DeleteChannel',
			'output' => [ 'shape' => 'DeleteChannelResponse', ],
		],
		'DeleteOriginEndpoint'            => [
			'errors' => [
				[ 'shape' => 'UnprocessableEntityException', ],
				[ 'shape' => 'InternalServerErrorException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
			'http'   => [
				'method'       => 'DELETE',
				'requestUri'   => '/origin_endpoints/{id}',
				'responseCode' => 202,
			],
			'input'  => [ 'shape' => 'DeleteOriginEndpointRequest', ],
			'name'   => 'DeleteOriginEndpoint',
			'output' => [ 'shape' => 'DeleteOriginEndpointResponse', ],
		],
		'DescribeChannel'                 => [
			'errors' => [
				[ 'shape' => 'UnprocessableEntityException', ],
				[ 'shape' => 'InternalServerErrorException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
			'http'   => [
				'method'       => 'GET',
				'requestUri'   => '/channels/{id}',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'DescribeChannelRequest', ],
			'name'   => 'DescribeChannel',
			'output' => [ 'shape' => 'DescribeChannelResponse', ],
		],
		'DescribeOriginEndpoint'          => [
			'errors' => [
				[ 'shape' => 'UnprocessableEntityException', ],
				[ 'shape' => 'InternalServerErrorException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
			'http'   => [
				'method'       => 'GET',
				'requestUri'   => '/origin_endpoints/{id}',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'DescribeOriginEndpointRequest', ],
			'name'   => 'DescribeOriginEndpoint',
			'output' => [ 'shape' => 'DescribeOriginEndpointResponse', ],
		],
		'ListChannels'                    => [
			'errors' => [
				[ 'shape' => 'UnprocessableEntityException', ],
				[ 'shape' => 'InternalServerErrorException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
			'http'   => [
				'method'       => 'GET',
				'requestUri'   => '/channels',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'ListChannelsRequest', ],
			'name'   => 'ListChannels',
			'output' => [ 'shape' => 'ListChannelsResponse', ],
		],
		'ListOriginEndpoints'             => [
			'errors' => [
				[ 'shape' => 'UnprocessableEntityException', ],
				[ 'shape' => 'InternalServerErrorException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
			'http'   => [
				'method'       => 'GET',
				'requestUri'   => '/origin_endpoints',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'ListOriginEndpointsRequest', ],
			'name'   => 'ListOriginEndpoints',
			'output' => [ 'shape' => 'ListOriginEndpointsResponse', ],
		],
		'ListTagsForResource'             => [
			'errors' => [],
			'http'   => [
				'method'       => 'GET',
				'requestUri'   => '/tags/{resource-arn}',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'ListTagsForResourceRequest', ],
			'name'   => 'ListTagsForResource',
			'output' => [ 'shape' => 'ListTagsForResourceResponse', ],
		],
		'RotateChannelCredentials'        => [
			'deprecated'        => true,
			'deprecatedMessage' => 'This API is deprecated. Please use RotateIngestEndpointCredentials instead',
			'errors'            => [
				[ 'shape' => 'UnprocessableEntityException', ],
				[ 'shape' => 'InternalServerErrorException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
			'http'              => [
				'method'       => 'PUT',
				'requestUri'   => '/channels/{id}/credentials',
				'responseCode' => 200,
			],
			'input'             => [ 'shape' => 'RotateChannelCredentialsRequest', ],
			'name'              => 'RotateChannelCredentials',
			'output'            => [ 'shape' => 'RotateChannelCredentialsResponse', ],
		],
		'RotateIngestEndpointCredentials' => [
			'errors' => [
				[ 'shape' => 'UnprocessableEntityException', ],
				[ 'shape' => 'InternalServerErrorException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
			'http'   => [
				'method'       => 'PUT',
				'requestUri'   => '/channels/{id}/ingest_endpoints/{ingest_endpoint_id}/credentials',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'RotateIngestEndpointCredentialsRequest', ],
			'name'   => 'RotateIngestEndpointCredentials',
			'output' => [ 'shape' => 'RotateIngestEndpointCredentialsResponse', ],
		],
		'TagResource'                     => [
			'errors' => [],
			'http'   => [
				'method'       => 'POST',
				'requestUri'   => '/tags/{resource-arn}',
				'responseCode' => 204,
			],
			'input'  => [ 'shape' => 'TagResourceRequest', ],
			'name'   => 'TagResource',
		],
		'UntagResource'                   => [
			'errors' => [],
			'http'   => [
				'method'       => 'DELETE',
				'requestUri'   => '/tags/{resource-arn}',
				'responseCode' => 204,
			],
			'input'  => [ 'shape' => 'UntagResourceRequest', ],
			'name'   => 'UntagResource',
		],
		'UpdateChannel'                   => [
			'errors' => [
				[ 'shape' => 'UnprocessableEntityException', ],
				[ 'shape' => 'InternalServerErrorException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
			'http'   => [
				'method'       => 'PUT',
				'requestUri'   => '/channels/{id}',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'UpdateChannelRequest', ],
			'name'   => 'UpdateChannel',
			'output' => [ 'shape' => 'UpdateChannelResponse', ],
		],
		'UpdateOriginEndpoint'            => [
			'errors' => [
				[ 'shape' => 'UnprocessableEntityException', ],
				[ 'shape' => 'InternalServerErrorException', ],
				[ 'shape' => 'ForbiddenException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'ServiceUnavailableException', ],
				[ 'shape' => 'TooManyRequestsException', ],
			],
			'http'   => [
				'method'       => 'PUT',
				'requestUri'   => '/origin_endpoints/{id}',
				'responseCode' => 200,
			],
			'input'  => [ 'shape' => 'UpdateOriginEndpointRequest', ],
			'name'   => 'UpdateOriginEndpoint',
			'output' => [ 'shape' => 'UpdateOriginEndpointResponse', ],
		],
	],
	'shapes'     => [
		'AdMarkers'                                   => [
			'enum' => [ 'NONE', 'SCTE35_ENHANCED', 'PASSTHROUGH', ],
			'type' => 'string',
		],
		'AdTriggers'                                  => [
			'member' => [ 'shape' => '__AdTriggersElement', ],
			'type'   => 'list',
		],
		'AdsOnDeliveryRestrictions'                   => [
			'enum' => [ 'NONE', 'RESTRICTED', 'UNRESTRICTED', 'BOTH', ],
			'type' => 'string',
		],
		'Channel'                                     => [
			'members' => [
				'Arn'         => [
					'locationName' => 'arn',
					'shape'        => '__string',
				],
				'Description' => [
					'locationName' => 'description',
					'shape'        => '__string',
				],
				'HlsIngest'   => [
					'locationName' => 'hlsIngest',
					'shape'        => 'HlsIngest',
				],
				'Id'          => [
					'locationName' => 'id',
					'shape'        => '__string',
				],
				'Tags'        => [
					'locationName' => 'tags',
					'shape'        => 'Tags',
				],
			],
			'type'    => 'structure',
		],
		'ChannelCreateParameters'                     => [
			'members'  => [
				'Description' => [
					'locationName' => 'description',
					'shape'        => '__string',
				],
				'Id'          => [
					'locationName' => 'id',
					'shape'        => '__string',
				],
				'Tags'        => [
					'locationName' => 'tags',
					'shape'        => 'Tags',
				],
			],
			'required' => [ 'Id', ],
			'type'     => 'structure',
		],
		'ChannelList'                                 => [
			'members' => [
				'Channels'  => [
					'locationName' => 'channels',
					'shape'        => '__listOfChannel',
				],
				'NextToken' => [
					'locationName' => 'nextToken',
					'shape'        => '__string',
				],
			],
			'type'    => 'structure',
		],
		'ChannelUpdateParameters'                     => [
			'members' => [
				'Description' => [
					'locationName' => 'description',
					'shape'        => '__string',
				],
			],
			'type'    => 'structure',
		],
		'CmafEncryption'                              => [
			'members'  => [
				'KeyRotationIntervalSeconds' => [
					'locationName' => 'keyRotationIntervalSeconds',
					'shape'        => '__integer',
				],
				'SpekeKeyProvider'           => [
					'locationName' => 'spekeKeyProvider',
					'shape'        => 'SpekeKeyProvider',
				],
			],
			'required' => [ 'SpekeKeyProvider', ],
			'type'     => 'structure',
		],
		'CmafPackage'                                 => [
			'members' => [
				'Encryption'             => [
					'locationName' => 'encryption',
					'shape'        => 'CmafEncryption',
				],
				'HlsManifests'           => [
					'locationName' => 'hlsManifests',
					'shape'        => '__listOfHlsManifest',
				],
				'SegmentDurationSeconds' => [
					'locationName' => 'segmentDurationSeconds',
					'shape'        => '__integer',
				],
				'SegmentPrefix'          => [
					'locationName' => 'segmentPrefix',
					'shape'        => '__string',
				],
				'StreamSelection'        => [
					'locationName' => 'streamSelection',
					'shape'        => 'StreamSelection',
				],
			],
			'type'    => 'structure',
		],
		'CmafPackageCreateOrUpdateParameters'         => [
			'members' => [
				'Encryption'             => [
					'locationName' => 'encryption',
					'shape'        => 'CmafEncryption',
				],
				'HlsManifests'           => [
					'locationName' => 'hlsManifests',
					'shape'        => '__listOfHlsManifestCreateOrUpdateParameters',
				],
				'SegmentDurationSeconds' => [
					'locationName' => 'segmentDurationSeconds',
					'shape'        => '__integer',
				],
				'SegmentPrefix'          => [
					'locationName' => 'segmentPrefix',
					'shape'        => '__string',
				],
				'StreamSelection'        => [
					'locationName' => 'streamSelection',
					'shape'        => 'StreamSelection',
				],
			],
			'type'    => 'structure',
		],
		'CreateChannelRequest'                        => [
			'members'  => [
				'Description' => [
					'locationName' => 'description',
					'shape'        => '__string',
				],
				'Id'          => [
					'locationName' => 'id',
					'shape'        => '__string',
				],
				'Tags'        => [
					'locationName' => 'tags',
					'shape'        => 'Tags',
				],
			],
			'required' => [ 'Id', ],
			'type'     => 'structure',
		],
		'CreateChannelResponse'                       => [
			'members' => [
				'Arn'         => [
					'locationName' => 'arn',
					'shape'        => '__string',
				],
				'Description' => [
					'locationName' => 'description',
					'shape'        => '__string',
				],
				'HlsIngest'   => [
					'locationName' => 'hlsIngest',
					'shape'        => 'HlsIngest',
				],
				'Id'          => [
					'locationName' => 'id',
					'shape'        => '__string',
				],
				'Tags'        => [
					'locationName' => 'tags',
					'shape'        => 'Tags',
				],
			],
			'type'    => 'structure',
		],
		'CreateOriginEndpointRequest'                 => [
			'members'  => [
				'ChannelId'              => [ 'locationName' => 'channelId', 'shape' => '__string', ],
				'CmafPackage'            => [
					'locationName' => 'cmafPackage',
					'shape'        => 'CmafPackageCreateOrUpdateParameters',
				],
				'DashPackage'            => [ 'locationName' => 'dashPackage', 'shape' => 'DashPackage', ],
				'Description'            => [ 'locationName' => 'description', 'shape' => '__string', ],
				'HlsPackage'             => [ 'locationName' => 'hlsPackage', 'shape' => 'HlsPackage', ],
				'Id'                     => [ 'locationName' => 'id', 'shape' => '__string', ],
				'ManifestName'           => [ 'locationName' => 'manifestName', 'shape' => '__string', ],
				'MssPackage'             => [ 'locationName' => 'mssPackage', 'shape' => 'MssPackage', ],
				'StartoverWindowSeconds' => [
					'locationName' => 'startoverWindowSeconds',
					'shape'        => '__integer',
				],
				'Tags'                   => [ 'locationName' => 'tags', 'shape' => 'Tags', ],
				'TimeDelaySeconds'       => [
					'locationName' => 'timeDelaySeconds',
					'shape'        => '__integer',
				],
				'Whitelist'              => [
					'locationName' => 'whitelist',
					'shape'        => '__listOf__string',
				],
			],
			'required' => [ 'ChannelId', 'Id', ],
			'type'     => 'structure',
		],
		'CreateOriginEndpointResponse'                => [
			'members' => [
				'Arn'                    => [ 'locationName' => 'arn', 'shape' => '__string', ],
				'ChannelId'              => [ 'locationName' => 'channelId', 'shape' => '__string', ],
				'CmafPackage'            => [ 'locationName' => 'cmafPackage', 'shape' => 'CmafPackage', ],
				'DashPackage'            => [ 'locationName' => 'dashPackage', 'shape' => 'DashPackage', ],
				'Description'            => [ 'locationName' => 'description', 'shape' => '__string', ],
				'HlsPackage'             => [ 'locationName' => 'hlsPackage', 'shape' => 'HlsPackage', ],
				'Id'                     => [ 'locationName' => 'id', 'shape' => '__string', ],
				'ManifestName'           => [ 'locationName' => 'manifestName', 'shape' => '__string', ],
				'MssPackage'             => [ 'locationName' => 'mssPackage', 'shape' => 'MssPackage', ],
				'StartoverWindowSeconds' => [ 'locationName' => 'startoverWindowSeconds', 'shape' => '__integer', ],
				'Tags'                   => [ 'locationName' => 'tags', 'shape' => 'Tags', ],
				'TimeDelaySeconds'       => [ 'locationName' => 'timeDelaySeconds', 'shape' => '__integer', ],
				'Url'                    => [ 'locationName' => 'url', 'shape' => '__string', ],
				'Whitelist'              => [ 'locationName' => 'whitelist', 'shape' => '__listOf__string', ],
			],
			'type'    => 'structure',
		],
		'DashEncryption'                              => [
			'members'  => [
				'KeyRotationIntervalSeconds' => [
					'locationName' => 'keyRotationIntervalSeconds',
					'shape'        => '__integer',
				],
				'SpekeKeyProvider'           => [
					'locationName' => 'spekeKeyProvider',
					'shape'        => 'SpekeKeyProvider',
				],
			],
			'required' => [ 'SpekeKeyProvider', ],
			'type'     => 'structure',
		],
		'DashPackage'                                 => [
			'members' => [
				'AdTriggers'                        => [ 'locationName' => 'adTriggers', 'shape' => 'AdTriggers', ],
				'AdsOnDeliveryRestrictions'         => [
					'locationName' => 'adsOnDeliveryRestrictions',
					'shape'        => 'AdsOnDeliveryRestrictions',
				],
				'Encryption'                        => [ 'locationName' => 'encryption', 'shape' => 'DashEncryption', ],
				'ManifestLayout'                    => [
					'locationName' => 'manifestLayout',
					'shape'        => 'ManifestLayout',
				],
				'ManifestWindowSeconds'             => [
					'locationName' => 'manifestWindowSeconds',
					'shape'        => '__integer',
				],
				'MinBufferTimeSeconds'              => [
					'locationName' => 'minBufferTimeSeconds',
					'shape'        => '__integer',
				],
				'MinUpdatePeriodSeconds'            => [
					'locationName' => 'minUpdatePeriodSeconds',
					'shape'        => '__integer',
				],
				'PeriodTriggers'                    => [
					'locationName' => 'periodTriggers',
					'shape'        => '__listOf__PeriodTriggersElement',
				],
				'Profile'                           => [ 'locationName' => 'profile', 'shape' => 'Profile', ],
				'SegmentDurationSeconds'            => [
					'locationName' => 'segmentDurationSeconds',
					'shape'        => '__integer',
				],
				'SegmentTemplateFormat'             => [
					'locationName' => 'segmentTemplateFormat',
					'shape'        => 'SegmentTemplateFormat',
				],
				'StreamSelection'                   => [
					'locationName' => 'streamSelection',
					'shape'        => 'StreamSelection',
				],
				'SuggestedPresentationDelaySeconds' => [
					'locationName' => 'suggestedPresentationDelaySeconds',
					'shape'        => '__integer',
				],
			],
			'type'    => 'structure',
		],
		'DeleteChannelRequest'                        => [
			'members'  => [
				'Id' => [
					'location'     => 'uri',
					'locationName' => 'id',
					'shape'        => '__string',
				],
			],
			'required' => [ 'Id', ],
			'type'     => 'structure',
		],
		'DeleteChannelResponse'                       => [ 'members' => [], 'type' => 'structure', ],
		'DeleteOriginEndpointRequest'                 => [
			'members'  => [
				'Id' => [
					'location'     => 'uri',
					'locationName' => 'id',
					'shape'        => '__string',
				],
			],
			'required' => [ 'Id', ],
			'type'     => 'structure',
		],
		'DeleteOriginEndpointResponse'                => [ 'members' => [], 'type' => 'structure', ],
		'DescribeChannelRequest'                      => [
			'members'  => [
				'Id' => [
					'location'     => 'uri',
					'locationName' => 'id',
					'shape'        => '__string',
				],
			],
			'required' => [ 'Id', ],
			'type'     => 'structure',
		],
		'DescribeChannelResponse'                     => [
			'members' => [
				'Arn'         => [
					'locationName' => 'arn',
					'shape'        => '__string',
				],
				'Description' => [
					'locationName' => 'description',
					'shape'        => '__string',
				],
				'HlsIngest'   => [
					'locationName' => 'hlsIngest',
					'shape'        => 'HlsIngest',
				],
				'Id'          => [
					'locationName' => 'id',
					'shape'        => '__string',
				],
				'Tags'        => [
					'locationName' => 'tags',
					'shape'        => 'Tags',
				],
			],
			'type'    => 'structure',
		],
		'DescribeOriginEndpointRequest'               => [
			'members'  => [
				'Id' => [
					'location'     => 'uri',
					'locationName' => 'id',
					'shape'        => '__string',
				],
			],
			'required' => [ 'Id', ],
			'type'     => 'structure',
		],
		'DescribeOriginEndpointResponse'              => [
			'members' => [
				'Arn'                    => [ 'locationName' => 'arn', 'shape' => '__string', ],
				'ChannelId'              => [ 'locationName' => 'channelId', 'shape' => '__string', ],
				'CmafPackage'            => [ 'locationName' => 'cmafPackage', 'shape' => 'CmafPackage', ],
				'DashPackage'            => [ 'locationName' => 'dashPackage', 'shape' => 'DashPackage', ],
				'Description'            => [ 'locationName' => 'description', 'shape' => '__string', ],
				'HlsPackage'             => [ 'locationName' => 'hlsPackage', 'shape' => 'HlsPackage', ],
				'Id'                     => [ 'locationName' => 'id', 'shape' => '__string', ],
				'ManifestName'           => [ 'locationName' => 'manifestName', 'shape' => '__string', ],
				'MssPackage'             => [ 'locationName' => 'mssPackage', 'shape' => 'MssPackage', ],
				'StartoverWindowSeconds' => [ 'locationName' => 'startoverWindowSeconds', 'shape' => '__integer', ],
				'Tags'                   => [ 'locationName' => 'tags', 'shape' => 'Tags', ],
				'TimeDelaySeconds'       => [ 'locationName' => 'timeDelaySeconds', 'shape' => '__integer', ],
				'Url'                    => [ 'locationName' => 'url', 'shape' => '__string', ],
				'Whitelist'              => [ 'locationName' => 'whitelist', 'shape' => '__listOf__string', ],
			],
			'type'    => 'structure',
		],
		'EncryptionMethod'                            => [
			'enum' => [ 'AES_128', 'SAMPLE_AES', ],
			'type' => 'string',
		],
		'ForbiddenException'                          => [
			'error'     => [ 'httpStatusCode' => 403, ],
			'exception' => true,
			'members'   => [
				'Message' => [
					'locationName' => 'message',
					'shape'        => '__string',
				],
			],
			'type'      => 'structure',
		],
		'HlsEncryption'                               => [
			'members'  => [
				'ConstantInitializationVector' => [
					'locationName' => 'constantInitializationVector',
					'shape'        => '__string',
				],
				'EncryptionMethod'             => [
					'locationName' => 'encryptionMethod',
					'shape'        => 'EncryptionMethod',
				],
				'KeyRotationIntervalSeconds'   => [
					'locationName' => 'keyRotationIntervalSeconds',
					'shape'        => '__integer',
				],
				'RepeatExtXKey'                => [
					'locationName' => 'repeatExtXKey',
					'shape'        => '__boolean',
				],
				'SpekeKeyProvider'             => [
					'locationName' => 'spekeKeyProvider',
					'shape'        => 'SpekeKeyProvider',
				],
			],
			'required' => [ 'SpekeKeyProvider', ],
			'type'     => 'structure',
		],
		'HlsIngest'                                   => [
			'members' => [
				'IngestEndpoints' => [
					'locationName' => 'ingestEndpoints',
					'shape'        => '__listOfIngestEndpoint',
				],
			],
			'type'    => 'structure',
		],
		'HlsManifest'                                 => [
			'members'  => [
				'AdMarkers'                      => [
					'locationName' => 'adMarkers',
					'shape'        => 'AdMarkers',
				],
				'Id'                             => [
					'locationName' => 'id',
					'shape'        => '__string',
				],
				'IncludeIframeOnlyStream'        => [
					'locationName' => 'includeIframeOnlyStream',
					'shape'        => '__boolean',
				],
				'ManifestName'                   => [
					'locationName' => 'manifestName',
					'shape'        => '__string',
				],
				'PlaylistType'                   => [
					'locationName' => 'playlistType',
					'shape'        => 'PlaylistType',
				],
				'PlaylistWindowSeconds'          => [
					'locationName' => 'playlistWindowSeconds',
					'shape'        => '__integer',
				],
				'ProgramDateTimeIntervalSeconds' => [
					'locationName' => 'programDateTimeIntervalSeconds',
					'shape'        => '__integer',
				],
				'Url'                            => [
					'locationName' => 'url',
					'shape'        => '__string',
				],
			],
			'required' => [ 'Id', ],
			'type'     => 'structure',
		],
		'HlsManifestCreateOrUpdateParameters'         => [
			'members'  => [
				'AdMarkers'                      => [
					'locationName' => 'adMarkers',
					'shape'        => 'AdMarkers',
				],
				'AdTriggers'                     => [
					'locationName' => 'adTriggers',
					'shape'        => 'AdTriggers',
				],
				'AdsOnDeliveryRestrictions'      => [
					'locationName' => 'adsOnDeliveryRestrictions',
					'shape'        => 'AdsOnDeliveryRestrictions',
				],
				'Id'                             => [
					'locationName' => 'id',
					'shape'        => '__string',
				],
				'IncludeIframeOnlyStream'        => [
					'locationName' => 'includeIframeOnlyStream',
					'shape'        => '__boolean',
				],
				'ManifestName'                   => [
					'locationName' => 'manifestName',
					'shape'        => '__string',
				],
				'PlaylistType'                   => [
					'locationName' => 'playlistType',
					'shape'        => 'PlaylistType',
				],
				'PlaylistWindowSeconds'          => [
					'locationName' => 'playlistWindowSeconds',
					'shape'        => '__integer',
				],
				'ProgramDateTimeIntervalSeconds' => [
					'locationName' => 'programDateTimeIntervalSeconds',
					'shape'        => '__integer',
				],
			],
			'required' => [ 'Id', ],
			'type'     => 'structure',
		],
		'HlsPackage'                                  => [
			'members' => [
				'AdMarkers'                      => [ 'locationName' => 'adMarkers', 'shape' => 'AdMarkers', ],
				'AdTriggers'                     => [ 'locationName' => 'adTriggers', 'shape' => 'AdTriggers', ],
				'AdsOnDeliveryRestrictions'      => [
					'locationName' => 'adsOnDeliveryRestrictions',
					'shape'        => 'AdsOnDeliveryRestrictions',
				],
				'Encryption'                     => [ 'locationName' => 'encryption', 'shape' => 'HlsEncryption', ],
				'IncludeIframeOnlyStream'        => [
					'locationName' => 'includeIframeOnlyStream',
					'shape'        => '__boolean',
				],
				'PlaylistType'                   => [ 'locationName' => 'playlistType', 'shape' => 'PlaylistType', ],
				'PlaylistWindowSeconds'          => [
					'locationName' => 'playlistWindowSeconds',
					'shape'        => '__integer',
				],
				'ProgramDateTimeIntervalSeconds' => [
					'locationName' => 'programDateTimeIntervalSeconds',
					'shape'        => '__integer',
				],
				'SegmentDurationSeconds'         => [
					'locationName' => 'segmentDurationSeconds',
					'shape'        => '__integer',
				],
				'StreamSelection'                => [
					'locationName' => 'streamSelection',
					'shape'        => 'StreamSelection',
				],
				'UseAudioRenditionGroup'         => [
					'locationName' => 'useAudioRenditionGroup',
					'shape'        => '__boolean',
				],
			],
			'type'    => 'structure',
		],
		'IngestEndpoint'                              => [
			'members' => [
				'Id'       => [
					'locationName' => 'id',
					'shape'        => '__string',
				],
				'Password' => [
					'locationName' => 'password',
					'shape'        => '__string',
				],
				'Url'      => [
					'locationName' => 'url',
					'shape'        => '__string',
				],
				'Username' => [
					'locationName' => 'username',
					'shape'        => '__string',
				],
			],
			'type'    => 'structure',
		],
		'InternalServerErrorException'                => [
			'error'     => [ 'httpStatusCode' => 500, ],
			'exception' => true,
			'members'   => [
				'Message' => [
					'locationName' => 'message',
					'shape'        => '__string',
				],
			],
			'type'      => 'structure',
		],
		'ListChannelsRequest'                         => [
			'members' => [
				'MaxResults' => [
					'location'     => 'querystring',
					'locationName' => 'maxResults',
					'shape'        => 'MaxResults',
				],
				'NextToken'  => [
					'location'     => 'querystring',
					'locationName' => 'nextToken',
					'shape'        => '__string',
				],
			],
			'type'    => 'structure',
		],
		'ListChannelsResponse'                        => [
			'members' => [
				'Channels'  => [
					'locationName' => 'channels',
					'shape'        => '__listOfChannel',
				],
				'NextToken' => [
					'locationName' => 'nextToken',
					'shape'        => '__string',
				],
			],
			'type'    => 'structure',
		],
		'ListOriginEndpointsRequest'                  => [
			'members' => [
				'ChannelId'  => [
					'location'     => 'querystring',
					'locationName' => 'channelId',
					'shape'        => '__string',
				],
				'MaxResults' => [
					'location'     => 'querystring',
					'locationName' => 'maxResults',
					'shape'        => 'MaxResults',
				],
				'NextToken'  => [
					'location'     => 'querystring',
					'locationName' => 'nextToken',
					'shape'        => '__string',
				],
			],
			'type'    => 'structure',
		],
		'ListOriginEndpointsResponse'                 => [
			'members' => [
				'NextToken'       => [
					'locationName' => 'nextToken',
					'shape'        => '__string',
				],
				'OriginEndpoints' => [
					'locationName' => 'originEndpoints',
					'shape'        => '__listOfOriginEndpoint',
				],
			],
			'type'    => 'structure',
		],
		'ListTagsForResourceRequest'                  => [
			'members'  => [
				'ResourceArn' => [
					'location'     => 'uri',
					'locationName' => 'resource-arn',
					'shape'        => '__string',
				],
			],
			'required' => [ 'ResourceArn', ],
			'type'     => 'structure',
		],
		'ListTagsForResourceResponse'                 => [
			'members' => [
				'Tags' => [
					'locationName' => 'tags',
					'shape'        => '__mapOf__string',
				],
			],
			'type'    => 'structure',
		],
		'ManifestLayout'                              => [ 'enum' => [ 'FULL', 'COMPACT', ], 'type' => 'string', ],
		'MaxResults'                                  => [ 'max' => 1000, 'min' => 1, 'type' => 'integer', ],
		'MssEncryption'                               => [
			'members'  => [
				'SpekeKeyProvider' => [
					'locationName' => 'spekeKeyProvider',
					'shape'        => 'SpekeKeyProvider',
				],
			],
			'required' => [ 'SpekeKeyProvider', ],
			'type'     => 'structure',
		],
		'MssPackage'                                  => [
			'members' => [
				'Encryption'             => [
					'locationName' => 'encryption',
					'shape'        => 'MssEncryption',
				],
				'ManifestWindowSeconds'  => [
					'locationName' => 'manifestWindowSeconds',
					'shape'        => '__integer',
				],
				'SegmentDurationSeconds' => [
					'locationName' => 'segmentDurationSeconds',
					'shape'        => '__integer',
				],
				'StreamSelection'        => [
					'locationName' => 'streamSelection',
					'shape'        => 'StreamSelection',
				],
			],
			'type'    => 'structure',
		],
		'NotFoundException'                           => [
			'error'     => [ 'httpStatusCode' => 404, ],
			'exception' => true,
			'members'   => [
				'Message' => [
					'locationName' => 'message',
					'shape'        => '__string',
				],
			],
			'type'      => 'structure',
		],
		'OriginEndpoint'                              => [
			'members' => [
				'Arn'                    => [ 'locationName' => 'arn', 'shape' => '__string', ],
				'ChannelId'              => [ 'locationName' => 'channelId', 'shape' => '__string', ],
				'CmafPackage'            => [ 'locationName' => 'cmafPackage', 'shape' => 'CmafPackage', ],
				'DashPackage'            => [ 'locationName' => 'dashPackage', 'shape' => 'DashPackage', ],
				'Description'            => [ 'locationName' => 'description', 'shape' => '__string', ],
				'HlsPackage'             => [ 'locationName' => 'hlsPackage', 'shape' => 'HlsPackage', ],
				'Id'                     => [ 'locationName' => 'id', 'shape' => '__string', ],
				'ManifestName'           => [ 'locationName' => 'manifestName', 'shape' => '__string', ],
				'MssPackage'             => [ 'locationName' => 'mssPackage', 'shape' => 'MssPackage', ],
				'StartoverWindowSeconds' => [ 'locationName' => 'startoverWindowSeconds', 'shape' => '__integer', ],
				'Tags'                   => [ 'locationName' => 'tags', 'shape' => 'Tags', ],
				'TimeDelaySeconds'       => [ 'locationName' => 'timeDelaySeconds', 'shape' => '__integer', ],
				'Url'                    => [ 'locationName' => 'url', 'shape' => '__string', ],
				'Whitelist'              => [ 'locationName' => 'whitelist', 'shape' => '__listOf__string', ],
			],
			'type'    => 'structure',
		],
		'OriginEndpointCreateParameters'              => [
			'members'  => [
				'ChannelId'              => [ 'locationName' => 'channelId', 'shape' => '__string', ],
				'CmafPackage'            => [
					'locationName' => 'cmafPackage',
					'shape'        => 'CmafPackageCreateOrUpdateParameters',
				],
				'DashPackage'            => [ 'locationName' => 'dashPackage', 'shape' => 'DashPackage', ],
				'Description'            => [ 'locationName' => 'description', 'shape' => '__string', ],
				'HlsPackage'             => [ 'locationName' => 'hlsPackage', 'shape' => 'HlsPackage', ],
				'Id'                     => [ 'locationName' => 'id', 'shape' => '__string', ],
				'ManifestName'           => [ 'locationName' => 'manifestName', 'shape' => '__string', ],
				'MssPackage'             => [ 'locationName' => 'mssPackage', 'shape' => 'MssPackage', ],
				'StartoverWindowSeconds' => [
					'locationName' => 'startoverWindowSeconds',
					'shape'        => '__integer',
				],
				'Tags'                   => [ 'locationName' => 'tags', 'shape' => 'Tags', ],
				'TimeDelaySeconds'       => [
					'locationName' => 'timeDelaySeconds',
					'shape'        => '__integer',
				],
				'Whitelist'              => [
					'locationName' => 'whitelist',
					'shape'        => '__listOf__string',
				],
			],
			'required' => [ 'Id', 'ChannelId', ],
			'type'     => 'structure',
		],
		'OriginEndpointList'                          => [
			'members' => [
				'NextToken'       => [
					'locationName' => 'nextToken',
					'shape'        => '__string',
				],
				'OriginEndpoints' => [
					'locationName' => 'originEndpoints',
					'shape'        => '__listOfOriginEndpoint',
				],
			],
			'type'    => 'structure',
		],
		'OriginEndpointUpdateParameters'              => [
			'members' => [
				'CmafPackage'            => [
					'locationName' => 'cmafPackage',
					'shape'        => 'CmafPackageCreateOrUpdateParameters',
				],
				'DashPackage'            => [
					'locationName' => 'dashPackage',
					'shape'        => 'DashPackage',
				],
				'Description'            => [
					'locationName' => 'description',
					'shape'        => '__string',
				],
				'HlsPackage'             => [
					'locationName' => 'hlsPackage',
					'shape'        => 'HlsPackage',
				],
				'ManifestName'           => [
					'locationName' => 'manifestName',
					'shape'        => '__string',
				],
				'MssPackage'             => [
					'locationName' => 'mssPackage',
					'shape'        => 'MssPackage',
				],
				'StartoverWindowSeconds' => [
					'locationName' => 'startoverWindowSeconds',
					'shape'        => '__integer',
				],
				'TimeDelaySeconds'       => [
					'locationName' => 'timeDelaySeconds',
					'shape'        => '__integer',
				],
				'Whitelist'              => [
					'locationName' => 'whitelist',
					'shape'        => '__listOf__string',
				],
			],
			'type'    => 'structure',
		],
		'PlaylistType'                                => [ 'enum' => [ 'NONE', 'EVENT', 'VOD', ], 'type' => 'string', ],
		'Profile'                                     => [ 'enum' => [ 'NONE', 'HBBTV_1_5', ], 'type' => 'string', ],
		'RotateChannelCredentialsRequest'             => [
			'deprecated' => true,
			'members'    => [
				'Id' => [
					'location'     => 'uri',
					'locationName' => 'id',
					'shape'        => '__string',
				],
			],
			'required'   => [ 'Id', ],
			'type'       => 'structure',
		],
		'RotateChannelCredentialsResponse'            => [
			'deprecated' => true,
			'members'    => [
				'Arn'         => [
					'locationName' => 'arn',
					'shape'        => '__string',
				],
				'Description' => [
					'locationName' => 'description',
					'shape'        => '__string',
				],
				'HlsIngest'   => [
					'locationName' => 'hlsIngest',
					'shape'        => 'HlsIngest',
				],
				'Id'          => [
					'locationName' => 'id',
					'shape'        => '__string',
				],
				'Tags'        => [
					'locationName' => 'tags',
					'shape'        => 'Tags',
				],
			],
			'type'       => 'structure',
		],
		'RotateIngestEndpointCredentialsRequest'      => [
			'members'  => [
				'Id'               => [
					'location'     => 'uri',
					'locationName' => 'id',
					'shape'        => '__string',
				],
				'IngestEndpointId' => [
					'location'     => 'uri',
					'locationName' => 'ingest_endpoint_id',
					'shape'        => '__string',
				],
			],
			'required' => [ 'IngestEndpointId', 'Id', ],
			'type'     => 'structure',
		],
		'RotateIngestEndpointCredentialsResponse'     => [
			'members' => [
				'Arn'         => [
					'locationName' => 'arn',
					'shape'        => '__string',
				],
				'Description' => [
					'locationName' => 'description',
					'shape'        => '__string',
				],
				'HlsIngest'   => [
					'locationName' => 'hlsIngest',
					'shape'        => 'HlsIngest',
				],
				'Id'          => [
					'locationName' => 'id',
					'shape'        => '__string',
				],
				'Tags'        => [
					'locationName' => 'tags',
					'shape'        => 'Tags',
				],
			],
			'type'    => 'structure',
		],
		'SegmentTemplateFormat'                       => [
			'enum' => [
				'NUMBER_WITH_TIMELINE',
				'TIME_WITH_TIMELINE',
				'NUMBER_WITH_DURATION',
			],
			'type' => 'string',
		],
		'ServiceUnavailableException'                 => [
			'error'     => [ 'httpStatusCode' => 503, ],
			'exception' => true,
			'members'   => [
				'Message' => [
					'locationName' => 'message',
					'shape'        => '__string',
				],
			],
			'type'      => 'structure',
		],
		'SpekeKeyProvider'                            => [
			'members'  => [
				'CertificateArn' => [
					'locationName' => 'certificateArn',
					'shape'        => '__string',
				],
				'ResourceId'     => [
					'locationName' => 'resourceId',
					'shape'        => '__string',
				],
				'RoleArn'        => [
					'locationName' => 'roleArn',
					'shape'        => '__string',
				],
				'SystemIds'      => [
					'locationName' => 'systemIds',
					'shape'        => '__listOf__string',
				],
				'Url'            => [
					'locationName' => 'url',
					'shape'        => '__string',
				],
			],
			'required' => [ 'Url', 'ResourceId', 'RoleArn', 'SystemIds', ],
			'type'     => 'structure',
		],
		'StreamOrder'                                 => [
			'enum' => [
				'ORIGINAL',
				'VIDEO_BITRATE_ASCENDING',
				'VIDEO_BITRATE_DESCENDING',
			],
			'type' => 'string',
		],
		'StreamSelection'                             => [
			'members' => [
				'MaxVideoBitsPerSecond' => [
					'locationName' => 'maxVideoBitsPerSecond',
					'shape'        => '__integer',
				],
				'MinVideoBitsPerSecond' => [
					'locationName' => 'minVideoBitsPerSecond',
					'shape'        => '__integer',
				],
				'StreamOrder'           => [
					'locationName' => 'streamOrder',
					'shape'        => 'StreamOrder',
				],
			],
			'type'    => 'structure',
		],
		'TagResourceRequest'                          => [
			'members'  => [
				'ResourceArn' => [
					'location'     => 'uri',
					'locationName' => 'resource-arn',
					'shape'        => '__string',
				],
				'Tags'        => [
					'locationName' => 'tags',
					'shape'        => '__mapOf__string',
				],
			],
			'required' => [ 'ResourceArn', 'Tags', ],
			'type'     => 'structure',
		],
		'Tags'                                        => [
			'key'   => [ 'shape' => '__string', ],
			'type'  => 'map',
			'value' => [ 'shape' => '__string', ],
		],
		'TagsModel'                                   => [
			'members'  => [
				'Tags' => [
					'locationName' => 'tags',
					'shape'        => '__mapOf__string',
				],
			],
			'required' => [ 'Tags', ],
			'type'     => 'structure',
		],
		'TooManyRequestsException'                    => [
			'error'     => [ 'httpStatusCode' => 429, ],
			'exception' => true,
			'members'   => [
				'Message' => [
					'locationName' => 'message',
					'shape'        => '__string',
				],
			],
			'type'      => 'structure',
		],
		'UnprocessableEntityException'                => [
			'error'     => [ 'httpStatusCode' => 422, ],
			'exception' => true,
			'members'   => [
				'Message' => [
					'locationName' => 'message',
					'shape'        => '__string',
				],
			],
			'type'      => 'structure',
		],
		'UntagResourceRequest'                        => [
			'members'  => [
				'ResourceArn' => [
					'location'     => 'uri',
					'locationName' => 'resource-arn',
					'shape'        => '__string',
				],
				'TagKeys'     => [
					'location'     => 'querystring',
					'locationName' => 'tagKeys',
					'shape'        => '__listOf__string',
				],
			],
			'required' => [ 'TagKeys', 'ResourceArn', ],
			'type'     => 'structure',
		],
		'UpdateChannelRequest'                        => [
			'members'  => [
				'Description' => [
					'locationName' => 'description',
					'shape'        => '__string',
				],
				'Id'          => [
					'location'     => 'uri',
					'locationName' => 'id',
					'shape'        => '__string',
				],
			],
			'required' => [ 'Id', ],
			'type'     => 'structure',
		],
		'UpdateChannelResponse'                       => [
			'members' => [
				'Arn'         => [
					'locationName' => 'arn',
					'shape'        => '__string',
				],
				'Description' => [
					'locationName' => 'description',
					'shape'        => '__string',
				],
				'HlsIngest'   => [
					'locationName' => 'hlsIngest',
					'shape'        => 'HlsIngest',
				],
				'Id'          => [
					'locationName' => 'id',
					'shape'        => '__string',
				],
				'Tags'        => [
					'locationName' => 'tags',
					'shape'        => 'Tags',
				],
			],
			'type'    => 'structure',
		],
		'UpdateOriginEndpointRequest'                 => [
			'members'  => [
				'CmafPackage'            => [
					'locationName' => 'cmafPackage',
					'shape'        => 'CmafPackageCreateOrUpdateParameters',
				],
				'DashPackage'            => [
					'locationName' => 'dashPackage',
					'shape'        => 'DashPackage',
				],
				'Description'            => [
					'locationName' => 'description',
					'shape'        => '__string',
				],
				'HlsPackage'             => [
					'locationName' => 'hlsPackage',
					'shape'        => 'HlsPackage',
				],
				'Id'                     => [
					'location'     => 'uri',
					'locationName' => 'id',
					'shape'        => '__string',
				],
				'ManifestName'           => [
					'locationName' => 'manifestName',
					'shape'        => '__string',
				],
				'MssPackage'             => [
					'locationName' => 'mssPackage',
					'shape'        => 'MssPackage',
				],
				'StartoverWindowSeconds' => [
					'locationName' => 'startoverWindowSeconds',
					'shape'        => '__integer',
				],
				'TimeDelaySeconds'       => [
					'locationName' => 'timeDelaySeconds',
					'shape'        => '__integer',
				],
				'Whitelist'              => [
					'locationName' => 'whitelist',
					'shape'        => '__listOf__string',
				],
			],
			'required' => [ 'Id', ],
			'type'     => 'structure',
		],
		'UpdateOriginEndpointResponse'                => [
			'members' => [
				'Arn'                    => [ 'locationName' => 'arn', 'shape' => '__string', ],
				'ChannelId'              => [ 'locationName' => 'channelId', 'shape' => '__string', ],
				'CmafPackage'            => [ 'locationName' => 'cmafPackage', 'shape' => 'CmafPackage', ],
				'DashPackage'            => [ 'locationName' => 'dashPackage', 'shape' => 'DashPackage', ],
				'Description'            => [ 'locationName' => 'description', 'shape' => '__string', ],
				'HlsPackage'             => [ 'locationName' => 'hlsPackage', 'shape' => 'HlsPackage', ],
				'Id'                     => [ 'locationName' => 'id', 'shape' => '__string', ],
				'ManifestName'           => [ 'locationName' => 'manifestName', 'shape' => '__string', ],
				'MssPackage'             => [ 'locationName' => 'mssPackage', 'shape' => 'MssPackage', ],
				'StartoverWindowSeconds' => [ 'locationName' => 'startoverWindowSeconds', 'shape' => '__integer', ],
				'Tags'                   => [ 'locationName' => 'tags', 'shape' => 'Tags', ],
				'TimeDelaySeconds'       => [ 'locationName' => 'timeDelaySeconds', 'shape' => '__integer', ],
				'Url'                    => [ 'locationName' => 'url', 'shape' => '__string', ],
				'Whitelist'              => [ 'locationName' => 'whitelist', 'shape' => '__listOf__string', ],
			],
			'type'    => 'structure',
		],
		'__AdTriggersElement'                         => [
			'enum' => [
				'SPLICE_INSERT',
				'BREAK',
				'PROVIDER_ADVERTISEMENT',
				'DISTRIBUTOR_ADVERTISEMENT',
				'PROVIDER_PLACEMENT_OPPORTUNITY',
				'DISTRIBUTOR_PLACEMENT_OPPORTUNITY',
				'PROVIDER_OVERLAY_PLACEMENT_OPPORTUNITY',
				'DISTRIBUTOR_OVERLAY_PLACEMENT_OPPORTUNITY',
			],
			'type' => 'string',
		],
		'__PeriodTriggersElement'                     => [ 'enum' => [ 'ADS', ], 'type' => 'string', ],
		'__boolean'                                   => [ 'type' => 'boolean', ],
		'__double'                                    => [ 'type' => 'double', ],
		'__integer'                                   => [ 'type' => 'integer', ],
		'__listOfChannel'                             => [ 'member' => [ 'shape' => 'Channel', ], 'type' => 'list', ],
		'__listOfHlsManifest'                         => [
			'member' => [ 'shape' => 'HlsManifest', ],
			'type'   => 'list',
		],
		'__listOfHlsManifestCreateOrUpdateParameters' => [
			'member' => [ 'shape' => 'HlsManifestCreateOrUpdateParameters', ],
			'type'   => 'list',
		],
		'__listOfIngestEndpoint'                      => [
			'member' => [ 'shape' => 'IngestEndpoint', ],
			'type'   => 'list',
		],
		'__listOfOriginEndpoint'                      => [
			'member' => [ 'shape' => 'OriginEndpoint', ],
			'type'   => 'list',
		],
		'__listOf__PeriodTriggersElement'             => [
			'member' => [ 'shape' => '__PeriodTriggersElement', ],
			'type'   => 'list',
		],
		'__listOf__string'                            => [ 'member' => [ 'shape' => '__string', ], 'type' => 'list', ],
		'__long'                                      => [ 'type' => 'long', ],
		'__mapOf__string'                             => [
			'key'   => [ 'shape' => '__string', ],
			'type'  => 'map',
			'value' => [ 'shape' => '__string', ],
		],
		'__string'                                    => [ 'type' => 'string', ],
	],
];
