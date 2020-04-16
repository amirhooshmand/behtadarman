<?php
// This file was auto-generated from sdk-root/src/data/pricing/2017-10-15/api-2.json
return [
	'version'    => '2.0',
	'metadata'   => [
		'apiVersion'          => '2017-10-15',
		'endpointPrefix'      => 'api.pricing',
		'jsonVersion'         => '1.1',
		'protocol'            => 'json',
		'serviceAbbreviation' => 'AWS Pricing',
		'serviceFullName'     => 'AWS Price List Service',
		'signatureVersion'    => 'v4',
		'signingName'         => 'pricing',
		'targetPrefix'        => 'AWSPriceListService',
		'uid'                 => 'pricing-2017-10-15',
	],
	'operations' => [
		'DescribeServices'   => [
			'name'   => 'DescribeServices',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeServicesRequest', ],
			'output' => [ 'shape' => 'DescribeServicesResponse', ],
			'errors' => [
				[ 'shape' => 'InternalErrorException', ],
				[ 'shape' => 'InvalidParameterException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'InvalidNextTokenException', ],
				[ 'shape' => 'ExpiredNextTokenException', ],
			],
		],
		'GetAttributeValues' => [
			'name'   => 'GetAttributeValues',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'GetAttributeValuesRequest', ],
			'output' => [ 'shape' => 'GetAttributeValuesResponse', ],
			'errors' => [
				[ 'shape' => 'InternalErrorException', ],
				[ 'shape' => 'InvalidParameterException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'InvalidNextTokenException', ],
				[ 'shape' => 'ExpiredNextTokenException', ],
			],
		],
		'GetProducts'        => [
			'name'   => 'GetProducts',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'GetProductsRequest', ],
			'output' => [ 'shape' => 'GetProductsResponse', ],
			'errors' => [
				[ 'shape' => 'InternalErrorException', ],
				[ 'shape' => 'InvalidParameterException', ],
				[ 'shape' => 'NotFoundException', ],
				[ 'shape' => 'InvalidNextTokenException', ],
				[ 'shape' => 'ExpiredNextTokenException', ],
			],
		],
	],
	'shapes'     => [
		'AttributeNameList'          => [ 'type' => 'list', 'member' => [ 'shape' => 'String', ], ],
		'AttributeValue'             => [
			'type'    => 'structure',
			'members' => [ 'Value' => [ 'shape' => 'String', ], ],
		],
		'AttributeValueList'         => [ 'type' => 'list', 'member' => [ 'shape' => 'AttributeValue', ], ],
		'BoxedInteger'               => [ 'type' => 'integer', 'max' => 100, 'min' => 1, ],
		'DescribeServicesRequest'    => [
			'type'    => 'structure',
			'members' => [
				'ServiceCode'   => [ 'shape' => 'String', ],
				'FormatVersion' => [ 'shape' => 'String', ],
				'NextToken'     => [ 'shape' => 'String', ],
				'MaxResults'    => [ 'shape' => 'BoxedInteger', 'box' => true, ],
			],
		],
		'DescribeServicesResponse'   => [
			'type'    => 'structure',
			'members' => [
				'Services'      => [ 'shape' => 'ServiceList', ],
				'FormatVersion' => [ 'shape' => 'String', ],
				'NextToken'     => [ 'shape' => 'String', ],
			],
		],
		'ExpiredNextTokenException'  => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'errorMessage', ], ],
			'exception' => true,
		],
		'Filter'                     => [
			'type'     => 'structure',
			'required' => [ 'Type', 'Field', 'Value', ],
			'members'  => [
				'Type'  => [ 'shape' => 'FilterType', ],
				'Field' => [ 'shape' => 'String', ],
				'Value' => [ 'shape' => 'String', ],
			],
		],
		'FilterType'                 => [ 'type' => 'string', 'enum' => [ 'TERM_MATCH', ], ],
		'Filters'                    => [ 'type' => 'list', 'member' => [ 'shape' => 'Filter', ], ],
		'GetAttributeValuesRequest'  => [
			'type'     => 'structure',
			'required' => [ 'ServiceCode', 'AttributeName', ],
			'members'  => [
				'ServiceCode'   => [ 'shape' => 'String', ],
				'AttributeName' => [ 'shape' => 'String', ],
				'NextToken'     => [ 'shape' => 'String', ],
				'MaxResults'    => [
					'shape' => 'BoxedInteger',
					'box'   => true,
				],
			],
		],
		'GetAttributeValuesResponse' => [
			'type'    => 'structure',
			'members' => [
				'AttributeValues' => [ 'shape' => 'AttributeValueList', ],
				'NextToken'       => [ 'shape' => 'String', ],
			],
		],
		'GetProductsRequest'         => [
			'type'    => 'structure',
			'members' => [
				'ServiceCode'   => [ 'shape' => 'String', ],
				'Filters'       => [ 'shape' => 'Filters', ],
				'FormatVersion' => [ 'shape' => 'String', ],
				'NextToken'     => [ 'shape' => 'String', ],
				'MaxResults'    => [
					'shape' => 'BoxedInteger',
					'box'   => true,
				],
			],
		],
		'GetProductsResponse'        => [
			'type'    => 'structure',
			'members' => [
				'FormatVersion' => [ 'shape' => 'String', ],
				'PriceList'     => [ 'shape' => 'PriceList', ],
				'NextToken'     => [ 'shape' => 'String', ],
			],
		],
		'InternalErrorException'     => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'errorMessage', ], ],
			'exception' => true,
		],
		'InvalidNextTokenException'  => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'errorMessage', ], ],
			'exception' => true,
		],
		'InvalidParameterException'  => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'errorMessage', ], ],
			'exception' => true,
		],
		'NotFoundException'          => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'errorMessage', ], ],
			'exception' => true,
		],
		'PriceList'                  => [
			'type'   => 'list',
			'member' => [ 'shape' => 'PriceListItemJSON', 'jsonvalue' => true, ],
		],
		'PriceListItemJSON'          => [ 'type' => 'string', ],
		'Service'                    => [
			'type'    => 'structure',
			'members' => [
				'ServiceCode'    => [ 'shape' => 'String', ],
				'AttributeNames' => [ 'shape' => 'AttributeNameList', ],
			],
		],
		'ServiceList'                => [ 'type' => 'list', 'member' => [ 'shape' => 'Service', ], ],
		'String'                     => [ 'type' => 'string', ],
		'errorMessage'               => [ 'type' => 'string', ],
	],
];
