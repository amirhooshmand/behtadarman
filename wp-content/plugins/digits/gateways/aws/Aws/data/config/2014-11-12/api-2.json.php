<?php
// This file was auto-generated from sdk-root/src/data/config/2014-11-12/api-2.json
return [
	'version'    => '2.0',
	'metadata'   => [
		'apiVersion'          => '2014-11-12',
		'endpointPrefix'      => 'config',
		'jsonVersion'         => '1.1',
		'protocol'            => 'json',
		'serviceAbbreviation' => 'Config Service',
		'serviceFullName'     => 'AWS Config',
		'serviceId'           => 'Config Service',
		'signatureVersion'    => 'v4',
		'targetPrefix'        => 'StarlingDoveService',
		'uid'                 => 'config-2014-11-12',
	],
	'operations' => [
		'BatchGetAggregateResourceConfig'              => [
			'name'   => 'BatchGetAggregateResourceConfig',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'BatchGetAggregateResourceConfigRequest', ],
			'output' => [ 'shape' => 'BatchGetAggregateResourceConfigResponse', ],
			'errors' => [
				[ 'shape' => 'ValidationException', ],
				[ 'shape' => 'NoSuchConfigurationAggregatorException', ],
			],
		],
		'BatchGetResourceConfig'                       => [
			'name'   => 'BatchGetResourceConfig',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'BatchGetResourceConfigRequest', ],
			'output' => [ 'shape' => 'BatchGetResourceConfigResponse', ],
			'errors' => [
				[ 'shape' => 'ValidationException', ],
				[ 'shape' => 'NoAvailableConfigurationRecorderException', ],
			],
		],
		'DeleteAggregationAuthorization'               => [
			'name'   => 'DeleteAggregationAuthorization',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteAggregationAuthorizationRequest', ],
			'errors' => [ [ 'shape' => 'InvalidParameterValueException', ], ],
		],
		'DeleteConfigRule'                             => [
			'name'   => 'DeleteConfigRule',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteConfigRuleRequest', ],
			'errors' => [
				[ 'shape' => 'NoSuchConfigRuleException', ],
				[ 'shape' => 'ResourceInUseException', ],
			],
		],
		'DeleteConfigurationAggregator'                => [
			'name'   => 'DeleteConfigurationAggregator',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteConfigurationAggregatorRequest', ],
			'errors' => [ [ 'shape' => 'NoSuchConfigurationAggregatorException', ], ],
		],
		'DeleteConfigurationRecorder'                  => [
			'name'   => 'DeleteConfigurationRecorder',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteConfigurationRecorderRequest', ],
			'errors' => [ [ 'shape' => 'NoSuchConfigurationRecorderException', ], ],
		],
		'DeleteDeliveryChannel'                        => [
			'name'   => 'DeleteDeliveryChannel',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteDeliveryChannelRequest', ],
			'errors' => [
				[ 'shape' => 'NoSuchDeliveryChannelException', ],
				[ 'shape' => 'LastDeliveryChannelDeleteFailedException', ],
			],
		],
		'DeleteEvaluationResults'                      => [
			'name'   => 'DeleteEvaluationResults',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteEvaluationResultsRequest', ],
			'output' => [ 'shape' => 'DeleteEvaluationResultsResponse', ],
			'errors' => [
				[ 'shape' => 'NoSuchConfigRuleException', ],
				[ 'shape' => 'ResourceInUseException', ],
			],
		],
		'DeleteOrganizationConfigRule'                 => [
			'name'   => 'DeleteOrganizationConfigRule',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteOrganizationConfigRuleRequest', ],
			'errors' => [
				[ 'shape' => 'NoSuchOrganizationConfigRuleException', ],
				[ 'shape' => 'ResourceInUseException', ],
				[ 'shape' => 'OrganizationAccessDeniedException', ],
			],
		],
		'DeletePendingAggregationRequest'              => [
			'name'   => 'DeletePendingAggregationRequest',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeletePendingAggregationRequestRequest', ],
			'errors' => [ [ 'shape' => 'InvalidParameterValueException', ], ],
		],
		'DeleteRemediationConfiguration'               => [
			'name'   => 'DeleteRemediationConfiguration',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteRemediationConfigurationRequest', ],
			'output' => [ 'shape' => 'DeleteRemediationConfigurationResponse', ],
			'errors' => [
				[ 'shape' => 'NoSuchRemediationConfigurationException', ],
				[ 'shape' => 'RemediationInProgressException', ],
			],
		],
		'DeleteRetentionConfiguration'                 => [
			'name'   => 'DeleteRetentionConfiguration',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteRetentionConfigurationRequest', ],
			'errors' => [
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'NoSuchRetentionConfigurationException', ],
			],
		],
		'DeliverConfigSnapshot'                        => [
			'name'   => 'DeliverConfigSnapshot',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeliverConfigSnapshotRequest', ],
			'output' => [ 'shape' => 'DeliverConfigSnapshotResponse', ],
			'errors' => [
				[ 'shape' => 'NoSuchDeliveryChannelException', ],
				[ 'shape' => 'NoAvailableConfigurationRecorderException', ],
				[ 'shape' => 'NoRunningConfigurationRecorderException', ],
			],
		],
		'DescribeAggregateComplianceByConfigRules'     => [
			'name'   => 'DescribeAggregateComplianceByConfigRules',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeAggregateComplianceByConfigRulesRequest', ],
			'output' => [ 'shape' => 'DescribeAggregateComplianceByConfigRulesResponse', ],
			'errors' => [
				[ 'shape' => 'ValidationException', ],
				[ 'shape' => 'InvalidLimitException', ],
				[ 'shape' => 'InvalidNextTokenException', ],
				[ 'shape' => 'NoSuchConfigurationAggregatorException', ],
			],
		],
		'DescribeAggregationAuthorizations'            => [
			'name'   => 'DescribeAggregationAuthorizations',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeAggregationAuthorizationsRequest', ],
			'output' => [ 'shape' => 'DescribeAggregationAuthorizationsResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'InvalidNextTokenException', ],
				[ 'shape' => 'InvalidLimitException', ],
			],
		],
		'DescribeComplianceByConfigRule'               => [
			'name'   => 'DescribeComplianceByConfigRule',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeComplianceByConfigRuleRequest', ],
			'output' => [ 'shape' => 'DescribeComplianceByConfigRuleResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'NoSuchConfigRuleException', ],
				[ 'shape' => 'InvalidNextTokenException', ],
			],
		],
		'DescribeComplianceByResource'                 => [
			'name'   => 'DescribeComplianceByResource',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeComplianceByResourceRequest', ],
			'output' => [ 'shape' => 'DescribeComplianceByResourceResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'InvalidNextTokenException', ],
			],
		],
		'DescribeConfigRuleEvaluationStatus'           => [
			'name'   => 'DescribeConfigRuleEvaluationStatus',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeConfigRuleEvaluationStatusRequest', ],
			'output' => [ 'shape' => 'DescribeConfigRuleEvaluationStatusResponse', ],
			'errors' => [
				[ 'shape' => 'NoSuchConfigRuleException', ],
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'InvalidNextTokenException', ],
			],
		],
		'DescribeConfigRules'                          => [
			'name'   => 'DescribeConfigRules',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeConfigRulesRequest', ],
			'output' => [ 'shape' => 'DescribeConfigRulesResponse', ],
			'errors' => [
				[ 'shape' => 'NoSuchConfigRuleException', ],
				[ 'shape' => 'InvalidNextTokenException', ],
			],
		],
		'DescribeConfigurationAggregatorSourcesStatus' => [
			'name'   => 'DescribeConfigurationAggregatorSourcesStatus',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeConfigurationAggregatorSourcesStatusRequest', ],
			'output' => [ 'shape' => 'DescribeConfigurationAggregatorSourcesStatusResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'NoSuchConfigurationAggregatorException', ],
				[ 'shape' => 'InvalidNextTokenException', ],
				[ 'shape' => 'InvalidLimitException', ],
			],
		],
		'DescribeConfigurationAggregators'             => [
			'name'   => 'DescribeConfigurationAggregators',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeConfigurationAggregatorsRequest', ],
			'output' => [ 'shape' => 'DescribeConfigurationAggregatorsResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'NoSuchConfigurationAggregatorException', ],
				[ 'shape' => 'InvalidNextTokenException', ],
				[ 'shape' => 'InvalidLimitException', ],
			],
		],
		'DescribeConfigurationRecorderStatus'          => [
			'name'   => 'DescribeConfigurationRecorderStatus',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeConfigurationRecorderStatusRequest', ],
			'output' => [ 'shape' => 'DescribeConfigurationRecorderStatusResponse', ],
			'errors' => [ [ 'shape' => 'NoSuchConfigurationRecorderException', ], ],
		],
		'DescribeConfigurationRecorders'               => [
			'name'   => 'DescribeConfigurationRecorders',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeConfigurationRecordersRequest', ],
			'output' => [ 'shape' => 'DescribeConfigurationRecordersResponse', ],
			'errors' => [ [ 'shape' => 'NoSuchConfigurationRecorderException', ], ],
		],
		'DescribeDeliveryChannelStatus'                => [
			'name'   => 'DescribeDeliveryChannelStatus',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeDeliveryChannelStatusRequest', ],
			'output' => [ 'shape' => 'DescribeDeliveryChannelStatusResponse', ],
			'errors' => [ [ 'shape' => 'NoSuchDeliveryChannelException', ], ],
		],
		'DescribeDeliveryChannels'                     => [
			'name'   => 'DescribeDeliveryChannels',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeDeliveryChannelsRequest', ],
			'output' => [ 'shape' => 'DescribeDeliveryChannelsResponse', ],
			'errors' => [ [ 'shape' => 'NoSuchDeliveryChannelException', ], ],
		],
		'DescribeOrganizationConfigRuleStatuses'       => [
			'name'   => 'DescribeOrganizationConfigRuleStatuses',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeOrganizationConfigRuleStatusesRequest', ],
			'output' => [ 'shape' => 'DescribeOrganizationConfigRuleStatusesResponse', ],
			'errors' => [
				[ 'shape' => 'NoSuchOrganizationConfigRuleException', ],
				[ 'shape' => 'InvalidLimitException', ],
				[ 'shape' => 'InvalidNextTokenException', ],
				[ 'shape' => 'OrganizationAccessDeniedException', ],
			],
		],
		'DescribeOrganizationConfigRules'              => [
			'name'   => 'DescribeOrganizationConfigRules',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeOrganizationConfigRulesRequest', ],
			'output' => [ 'shape' => 'DescribeOrganizationConfigRulesResponse', ],
			'errors' => [
				[ 'shape' => 'NoSuchOrganizationConfigRuleException', ],
				[ 'shape' => 'InvalidNextTokenException', ],
				[ 'shape' => 'InvalidLimitException', ],
				[ 'shape' => 'OrganizationAccessDeniedException', ],
			],
		],
		'DescribePendingAggregationRequests'           => [
			'name'   => 'DescribePendingAggregationRequests',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribePendingAggregationRequestsRequest', ],
			'output' => [ 'shape' => 'DescribePendingAggregationRequestsResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'InvalidNextTokenException', ],
				[ 'shape' => 'InvalidLimitException', ],
			],
		],
		'DescribeRemediationConfigurations'            => [
			'name'   => 'DescribeRemediationConfigurations',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeRemediationConfigurationsRequest', ],
			'output' => [ 'shape' => 'DescribeRemediationConfigurationsResponse', ],
		],
		'DescribeRemediationExecutionStatus'           => [
			'name'   => 'DescribeRemediationExecutionStatus',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeRemediationExecutionStatusRequest', ],
			'output' => [ 'shape' => 'DescribeRemediationExecutionStatusResponse', ],
			'errors' => [ [ 'shape' => 'NoSuchRemediationConfigurationException', ], ],
		],
		'DescribeRetentionConfigurations'              => [
			'name'   => 'DescribeRetentionConfigurations',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeRetentionConfigurationsRequest', ],
			'output' => [ 'shape' => 'DescribeRetentionConfigurationsResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'NoSuchRetentionConfigurationException', ],
				[ 'shape' => 'InvalidNextTokenException', ],
			],
		],
		'GetAggregateComplianceDetailsByConfigRule'    => [
			'name'   => 'GetAggregateComplianceDetailsByConfigRule',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'GetAggregateComplianceDetailsByConfigRuleRequest', ],
			'output' => [ 'shape' => 'GetAggregateComplianceDetailsByConfigRuleResponse', ],
			'errors' => [
				[ 'shape' => 'ValidationException', ],
				[ 'shape' => 'InvalidLimitException', ],
				[ 'shape' => 'InvalidNextTokenException', ],
				[ 'shape' => 'NoSuchConfigurationAggregatorException', ],
			],
		],
		'GetAggregateConfigRuleComplianceSummary'      => [
			'name'   => 'GetAggregateConfigRuleComplianceSummary',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'GetAggregateConfigRuleComplianceSummaryRequest', ],
			'output' => [ 'shape' => 'GetAggregateConfigRuleComplianceSummaryResponse', ],
			'errors' => [
				[ 'shape' => 'ValidationException', ],
				[ 'shape' => 'InvalidLimitException', ],
				[ 'shape' => 'InvalidNextTokenException', ],
				[ 'shape' => 'NoSuchConfigurationAggregatorException', ],
			],
		],
		'GetAggregateDiscoveredResourceCounts'         => [
			'name'   => 'GetAggregateDiscoveredResourceCounts',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'GetAggregateDiscoveredResourceCountsRequest', ],
			'output' => [ 'shape' => 'GetAggregateDiscoveredResourceCountsResponse', ],
			'errors' => [
				[ 'shape' => 'ValidationException', ],
				[ 'shape' => 'InvalidLimitException', ],
				[ 'shape' => 'InvalidNextTokenException', ],
				[ 'shape' => 'NoSuchConfigurationAggregatorException', ],
			],
		],
		'GetAggregateResourceConfig'                   => [
			'name'   => 'GetAggregateResourceConfig',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'GetAggregateResourceConfigRequest', ],
			'output' => [ 'shape' => 'GetAggregateResourceConfigResponse', ],
			'errors' => [
				[ 'shape' => 'ValidationException', ],
				[ 'shape' => 'NoSuchConfigurationAggregatorException', ],
				[ 'shape' => 'OversizedConfigurationItemException', ],
				[ 'shape' => 'ResourceNotDiscoveredException', ],
			],
		],
		'GetComplianceDetailsByConfigRule'             => [
			'name'   => 'GetComplianceDetailsByConfigRule',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'GetComplianceDetailsByConfigRuleRequest', ],
			'output' => [ 'shape' => 'GetComplianceDetailsByConfigRuleResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'InvalidNextTokenException', ],
				[ 'shape' => 'NoSuchConfigRuleException', ],
			],
		],
		'GetComplianceDetailsByResource'               => [
			'name'   => 'GetComplianceDetailsByResource',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'GetComplianceDetailsByResourceRequest', ],
			'output' => [ 'shape' => 'GetComplianceDetailsByResourceResponse', ],
			'errors' => [ [ 'shape' => 'InvalidParameterValueException', ], ],
		],
		'GetComplianceSummaryByConfigRule'             => [
			'name'   => 'GetComplianceSummaryByConfigRule',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'output' => [ 'shape' => 'GetComplianceSummaryByConfigRuleResponse', ],
		],
		'GetComplianceSummaryByResourceType'           => [
			'name'   => 'GetComplianceSummaryByResourceType',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'GetComplianceSummaryByResourceTypeRequest', ],
			'output' => [ 'shape' => 'GetComplianceSummaryByResourceTypeResponse', ],
			'errors' => [ [ 'shape' => 'InvalidParameterValueException', ], ],
		],
		'GetDiscoveredResourceCounts'                  => [
			'name'   => 'GetDiscoveredResourceCounts',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'GetDiscoveredResourceCountsRequest', ],
			'output' => [ 'shape' => 'GetDiscoveredResourceCountsResponse', ],
			'errors' => [
				[ 'shape' => 'ValidationException', ],
				[ 'shape' => 'InvalidLimitException', ],
				[ 'shape' => 'InvalidNextTokenException', ],
			],
		],
		'GetOrganizationConfigRuleDetailedStatus'      => [
			'name'   => 'GetOrganizationConfigRuleDetailedStatus',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'GetOrganizationConfigRuleDetailedStatusRequest', ],
			'output' => [ 'shape' => 'GetOrganizationConfigRuleDetailedStatusResponse', ],
			'errors' => [
				[ 'shape' => 'NoSuchOrganizationConfigRuleException', ],
				[ 'shape' => 'InvalidLimitException', ],
				[ 'shape' => 'InvalidNextTokenException', ],
				[ 'shape' => 'OrganizationAccessDeniedException', ],
			],
		],
		'GetResourceConfigHistory'                     => [
			'name'   => 'GetResourceConfigHistory',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'GetResourceConfigHistoryRequest', ],
			'output' => [ 'shape' => 'GetResourceConfigHistoryResponse', ],
			'errors' => [
				[ 'shape' => 'ValidationException', ],
				[ 'shape' => 'InvalidTimeRangeException', ],
				[ 'shape' => 'InvalidLimitException', ],
				[ 'shape' => 'InvalidNextTokenException', ],
				[ 'shape' => 'NoAvailableConfigurationRecorderException', ],
				[ 'shape' => 'ResourceNotDiscoveredException', ],
			],
		],
		'ListAggregateDiscoveredResources'             => [
			'name'   => 'ListAggregateDiscoveredResources',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ListAggregateDiscoveredResourcesRequest', ],
			'output' => [ 'shape' => 'ListAggregateDiscoveredResourcesResponse', ],
			'errors' => [
				[ 'shape' => 'ValidationException', ],
				[ 'shape' => 'InvalidLimitException', ],
				[ 'shape' => 'InvalidNextTokenException', ],
				[ 'shape' => 'NoSuchConfigurationAggregatorException', ],
			],
		],
		'ListDiscoveredResources'                      => [
			'name'   => 'ListDiscoveredResources',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ListDiscoveredResourcesRequest', ],
			'output' => [ 'shape' => 'ListDiscoveredResourcesResponse', ],
			'errors' => [
				[ 'shape' => 'ValidationException', ],
				[ 'shape' => 'InvalidLimitException', ],
				[ 'shape' => 'InvalidNextTokenException', ],
				[ 'shape' => 'NoAvailableConfigurationRecorderException', ],
			],
		],
		'ListTagsForResource'                          => [
			'name'   => 'ListTagsForResource',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ListTagsForResourceRequest', ],
			'output' => [ 'shape' => 'ListTagsForResourceResponse', ],
			'errors' => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'ValidationException', ],
				[ 'shape' => 'InvalidLimitException', ],
				[ 'shape' => 'InvalidNextTokenException', ],
			],
		],
		'PutAggregationAuthorization'                  => [
			'name'   => 'PutAggregationAuthorization',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'PutAggregationAuthorizationRequest', ],
			'output' => [ 'shape' => 'PutAggregationAuthorizationResponse', ],
			'errors' => [ [ 'shape' => 'InvalidParameterValueException', ], ],
		],
		'PutConfigRule'                                => [
			'name'   => 'PutConfigRule',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'PutConfigRuleRequest', ],
			'errors' => [
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'MaxNumberOfConfigRulesExceededException', ],
				[ 'shape' => 'ResourceInUseException', ],
				[ 'shape' => 'InsufficientPermissionsException', ],
				[ 'shape' => 'NoAvailableConfigurationRecorderException', ],
			],
		],
		'PutConfigurationAggregator'                   => [
			'name'   => 'PutConfigurationAggregator',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'PutConfigurationAggregatorRequest', ],
			'output' => [ 'shape' => 'PutConfigurationAggregatorResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'InvalidRoleException', ],
				[ 'shape' => 'OrganizationAccessDeniedException', ],
				[ 'shape' => 'NoAvailableOrganizationException', ],
				[ 'shape' => 'OrganizationAllFeaturesNotEnabledException', ],
			],
		],
		'PutConfigurationRecorder'                     => [
			'name'   => 'PutConfigurationRecorder',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'PutConfigurationRecorderRequest', ],
			'errors' => [
				[ 'shape' => 'MaxNumberOfConfigurationRecordersExceededException', ],
				[ 'shape' => 'InvalidConfigurationRecorderNameException', ],
				[ 'shape' => 'InvalidRoleException', ],
				[ 'shape' => 'InvalidRecordingGroupException', ],
			],
		],
		'PutDeliveryChannel'                           => [
			'name'   => 'PutDeliveryChannel',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'PutDeliveryChannelRequest', ],
			'errors' => [
				[ 'shape' => 'MaxNumberOfDeliveryChannelsExceededException', ],
				[ 'shape' => 'NoAvailableConfigurationRecorderException', ],
				[ 'shape' => 'InvalidDeliveryChannelNameException', ],
				[ 'shape' => 'NoSuchBucketException', ],
				[ 'shape' => 'InvalidS3KeyPrefixException', ],
				[ 'shape' => 'InvalidSNSTopicARNException', ],
				[ 'shape' => 'InsufficientDeliveryPolicyException', ],
			],
		],
		'PutEvaluations'                               => [
			'name'   => 'PutEvaluations',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'PutEvaluationsRequest', ],
			'output' => [ 'shape' => 'PutEvaluationsResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'InvalidResultTokenException', ],
				[ 'shape' => 'NoSuchConfigRuleException', ],
			],
		],
		'PutOrganizationConfigRule'                    => [
			'name'   => 'PutOrganizationConfigRule',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'PutOrganizationConfigRuleRequest', ],
			'output' => [ 'shape' => 'PutOrganizationConfigRuleResponse', ],
			'errors' => [
				[ 'shape' => 'MaxNumberOfOrganizationConfigRulesExceededException', ],
				[ 'shape' => 'ResourceInUseException', ],
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'ValidationException', ],
				[ 'shape' => 'OrganizationAccessDeniedException', ],
				[ 'shape' => 'NoAvailableOrganizationException', ],
				[ 'shape' => 'OrganizationAllFeaturesNotEnabledException', ],
				[ 'shape' => 'InsufficientPermissionsException', ],
			],
		],
		'PutRemediationConfigurations'                 => [
			'name'   => 'PutRemediationConfigurations',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'PutRemediationConfigurationsRequest', ],
			'output' => [ 'shape' => 'PutRemediationConfigurationsResponse', ],
			'errors' => [
				[ 'shape' => 'InsufficientPermissionsException', ],
				[ 'shape' => 'InvalidParameterValueException', ],
			],
		],
		'PutRetentionConfiguration'                    => [
			'name'   => 'PutRetentionConfiguration',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'PutRetentionConfigurationRequest', ],
			'output' => [ 'shape' => 'PutRetentionConfigurationResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidParameterValueException', ],
				[ 'shape' => 'MaxNumberOfRetentionConfigurationsExceededException', ],
			],
		],
		'SelectResourceConfig'                         => [
			'name'   => 'SelectResourceConfig',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'SelectResourceConfigRequest', ],
			'output' => [ 'shape' => 'SelectResourceConfigResponse', ],
			'errors' => [
				[ 'shape' => 'InvalidExpressionException', ],
				[ 'shape' => 'InvalidLimitException', ],
				[ 'shape' => 'InvalidNextTokenException', ],
			],
		],
		'StartConfigRulesEvaluation'                   => [
			'name'   => 'StartConfigRulesEvaluation',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'StartConfigRulesEvaluationRequest', ],
			'output' => [ 'shape' => 'StartConfigRulesEvaluationResponse', ],
			'errors' => [
				[ 'shape' => 'NoSuchConfigRuleException', ],
				[ 'shape' => 'LimitExceededException', ],
				[ 'shape' => 'ResourceInUseException', ],
				[ 'shape' => 'InvalidParameterValueException', ],
			],
		],
		'StartConfigurationRecorder'                   => [
			'name'   => 'StartConfigurationRecorder',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'StartConfigurationRecorderRequest', ],
			'errors' => [
				[ 'shape' => 'NoSuchConfigurationRecorderException', ],
				[ 'shape' => 'NoAvailableDeliveryChannelException', ],
			],
		],
		'StartRemediationExecution'                    => [
			'name'   => 'StartRemediationExecution',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'StartRemediationExecutionRequest', ],
			'output' => [ 'shape' => 'StartRemediationExecutionResponse', ],
			'errors' => [
				[ 'shape' => 'InsufficientPermissionsException', ],
				[ 'shape' => 'NoSuchRemediationConfigurationException', ],
			],
		],
		'StopConfigurationRecorder'                    => [
			'name'   => 'StopConfigurationRecorder',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'StopConfigurationRecorderRequest', ],
			'errors' => [ [ 'shape' => 'NoSuchConfigurationRecorderException', ], ],
		],
		'TagResource'                                  => [
			'name'   => 'TagResource',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'TagResourceRequest', ],
			'errors' => [
				[ 'shape' => 'ValidationException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'TooManyTagsException', ],
			],
		],
		'UntagResource'                                => [
			'name'   => 'UntagResource',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'UntagResourceRequest', ],
			'errors' => [
				[ 'shape' => 'ValidationException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
			],
		],
	],
	'shapes'     => [
		'ARN'                                                  => [ 'type' => 'string', ],
		'AccountAggregationSource'                             => [
			'type'     => 'structure',
			'required' => [ 'AccountIds', ],
			'members'  => [
				'AccountIds'    => [ 'shape' => 'AccountAggregationSourceAccountList', ],
				'AllAwsRegions' => [ 'shape' => 'Boolean', ],
				'AwsRegions'    => [ 'shape' => 'AggregatorRegionList', ],
			],
		],
		'AccountAggregationSourceAccountList'                  => [
			'type'   => 'list',
			'member' => [ 'shape' => 'AccountId', ],
			'min'    => 1,
		],
		'AccountAggregationSourceList'                         => [
			'type'   => 'list',
			'member' => [ 'shape' => 'AccountAggregationSource', ],
			'max'    => 1,
			'min'    => 0,
		],
		'AccountId'                                            => [ 'type' => 'string', 'pattern' => '\\d{12}', ],
		'AggregateComplianceByConfigRule'                      => [
			'type'    => 'structure',
			'members' => [
				'ConfigRuleName' => [ 'shape' => 'ConfigRuleName', ],
				'Compliance'     => [ 'shape' => 'Compliance', ],
				'AccountId'      => [ 'shape' => 'AccountId', ],
				'AwsRegion'      => [ 'shape' => 'AwsRegion', ],
			],
		],
		'AggregateComplianceByConfigRuleList'                  => [
			'type'   => 'list',
			'member' => [ 'shape' => 'AggregateComplianceByConfigRule', ],
		],
		'AggregateComplianceCount'                             => [
			'type'    => 'structure',
			'members' => [
				'GroupName'         => [ 'shape' => 'StringWithCharLimit256', ],
				'ComplianceSummary' => [ 'shape' => 'ComplianceSummary', ],
			],
		],
		'AggregateComplianceCountList'                         => [
			'type'   => 'list',
			'member' => [ 'shape' => 'AggregateComplianceCount', ],
		],
		'AggregateEvaluationResult'                            => [
			'type'    => 'structure',
			'members' => [
				'EvaluationResultIdentifier' => [ 'shape' => 'EvaluationResultIdentifier', ],
				'ComplianceType'             => [ 'shape' => 'ComplianceType', ],
				'ResultRecordedTime'         => [ 'shape' => 'Date', ],
				'ConfigRuleInvokedTime'      => [ 'shape' => 'Date', ],
				'Annotation'                 => [ 'shape' => 'StringWithCharLimit256', ],
				'AccountId'                  => [ 'shape' => 'AccountId', ],
				'AwsRegion'                  => [ 'shape' => 'AwsRegion', ],
			],
		],
		'AggregateEvaluationResultList'                        => [
			'type'   => 'list',
			'member' => [ 'shape' => 'AggregateEvaluationResult', ],
		],
		'AggregateResourceIdentifier'                          => [
			'type'     => 'structure',
			'required' => [
				'SourceAccountId',
				'SourceRegion',
				'ResourceId',
				'ResourceType',
			],
			'members'  => [
				'SourceAccountId' => [ 'shape' => 'AccountId', ],
				'SourceRegion'    => [ 'shape' => 'AwsRegion', ],
				'ResourceId'      => [ 'shape' => 'ResourceId', ],
				'ResourceType'    => [ 'shape' => 'ResourceType', ],
				'ResourceName'    => [ 'shape' => 'ResourceName', ],
			],
		],
		'AggregatedSourceStatus'                               => [
			'type'    => 'structure',
			'members' => [
				'SourceId'         => [ 'shape' => 'String', ],
				'SourceType'       => [ 'shape' => 'AggregatedSourceType', ],
				'AwsRegion'        => [ 'shape' => 'AwsRegion', ],
				'LastUpdateStatus' => [ 'shape' => 'AggregatedSourceStatusType', ],
				'LastUpdateTime'   => [ 'shape' => 'Date', ],
				'LastErrorCode'    => [ 'shape' => 'String', ],
				'LastErrorMessage' => [ 'shape' => 'String', ],
			],
		],
		'AggregatedSourceStatusList'                           => [
			'type'   => 'list',
			'member' => [ 'shape' => 'AggregatedSourceStatus', ],
		],
		'AggregatedSourceStatusType'                           => [
			'type' => 'string',
			'enum' => [ 'FAILED', 'SUCCEEDED', 'OUTDATED', ],
		],
		'AggregatedSourceStatusTypeList'                       => [
			'type'   => 'list',
			'member' => [ 'shape' => 'AggregatedSourceStatusType', ],
			'min'    => 1,
		],
		'AggregatedSourceType'                                 => [
			'type' => 'string',
			'enum' => [ 'ACCOUNT', 'ORGANIZATION', ],
		],
		'AggregationAuthorization'                             => [
			'type'    => 'structure',
			'members' => [
				'AggregationAuthorizationArn' => [ 'shape' => 'String', ],
				'AuthorizedAccountId'         => [ 'shape' => 'AccountId', ],
				'AuthorizedAwsRegion'         => [ 'shape' => 'AwsRegion', ],
				'CreationTime'                => [ 'shape' => 'Date', ],
			],
		],
		'AggregationAuthorizationList'                         => [
			'type'   => 'list',
			'member' => [ 'shape' => 'AggregationAuthorization', ],
		],
		'AggregatorRegionList'                                 => [
			'type'   => 'list',
			'member' => [ 'shape' => 'String', ],
			'min'    => 1,
		],
		'AllSupported'                                         => [ 'type' => 'boolean', ],
		'AmazonResourceName'                                   => [ 'type' => 'string', 'max' => 256, 'min' => 1, ],
		'AvailabilityZone'                                     => [ 'type' => 'string', ],
		'AwsRegion'                                            => [ 'type' => 'string', 'max' => 64, 'min' => 1, ],
		'BaseConfigurationItem'                                => [
			'type'    => 'structure',
			'members' => [
				'version'                      => [ 'shape' => 'Version', ],
				'accountId'                    => [ 'shape' => 'AccountId', ],
				'configurationItemCaptureTime' => [ 'shape' => 'ConfigurationItemCaptureTime', ],
				'configurationItemStatus'      => [ 'shape' => 'ConfigurationItemStatus', ],
				'configurationStateId'         => [ 'shape' => 'ConfigurationStateId', ],
				'arn'                          => [ 'shape' => 'ARN', ],
				'resourceType'                 => [ 'shape' => 'ResourceType', ],
				'resourceId'                   => [ 'shape' => 'ResourceId', ],
				'resourceName'                 => [ 'shape' => 'ResourceName', ],
				'awsRegion'                    => [ 'shape' => 'AwsRegion', ],
				'availabilityZone'             => [ 'shape' => 'AvailabilityZone', ],
				'resourceCreationTime'         => [ 'shape' => 'ResourceCreationTime', ],
				'configuration'                => [ 'shape' => 'Configuration', ],
				'supplementaryConfiguration'   => [ 'shape' => 'SupplementaryConfiguration', ],
			],
		],
		'BaseConfigurationItems'                               => [
			'type'   => 'list',
			'member' => [ 'shape' => 'BaseConfigurationItem', ],
		],
		'BaseResourceId'                                       => [ 'type' => 'string', 'max' => 768, 'min' => 1, ],
		'BatchGetAggregateResourceConfigRequest'               => [
			'type'     => 'structure',
			'required' => [
				'ConfigurationAggregatorName',
				'ResourceIdentifiers',
			],
			'members'  => [
				'ConfigurationAggregatorName' => [ 'shape' => 'ConfigurationAggregatorName', ],
				'ResourceIdentifiers'         => [ 'shape' => 'ResourceIdentifiersList', ],
			],
		],
		'BatchGetAggregateResourceConfigResponse'              => [
			'type'    => 'structure',
			'members' => [
				'BaseConfigurationItems'         => [ 'shape' => 'BaseConfigurationItems', ],
				'UnprocessedResourceIdentifiers' => [ 'shape' => 'UnprocessedResourceIdentifierList', ],
			],
		],
		'BatchGetResourceConfigRequest'                        => [
			'type'     => 'structure',
			'required' => [ 'resourceKeys', ],
			'members'  => [ 'resourceKeys' => [ 'shape' => 'ResourceKeys', ], ],
		],
		'BatchGetResourceConfigResponse'                       => [
			'type'    => 'structure',
			'members' => [
				'baseConfigurationItems'  => [ 'shape' => 'BaseConfigurationItems', ],
				'unprocessedResourceKeys' => [ 'shape' => 'ResourceKeys', ],
			],
		],
		'Boolean'                                              => [ 'type' => 'boolean', ],
		'ChannelName'                                          => [ 'type' => 'string', 'max' => 256, 'min' => 1, ],
		'ChronologicalOrder'                                   => [
			'type' => 'string',
			'enum' => [ 'Reverse', 'Forward', ],
		],
		'Compliance'                                           => [
			'type'    => 'structure',
			'members' => [
				'ComplianceType'             => [ 'shape' => 'ComplianceType', ],
				'ComplianceContributorCount' => [ 'shape' => 'ComplianceContributorCount', ],
			],
		],
		'ComplianceByConfigRule'                               => [
			'type'    => 'structure',
			'members' => [
				'ConfigRuleName' => [ 'shape' => 'StringWithCharLimit64', ],
				'Compliance'     => [ 'shape' => 'Compliance', ],
			],
		],
		'ComplianceByConfigRules'                              => [
			'type'   => 'list',
			'member' => [ 'shape' => 'ComplianceByConfigRule', ],
		],
		'ComplianceByResource'                                 => [
			'type'    => 'structure',
			'members' => [
				'ResourceType' => [ 'shape' => 'StringWithCharLimit256', ],
				'ResourceId'   => [ 'shape' => 'BaseResourceId', ],
				'Compliance'   => [ 'shape' => 'Compliance', ],
			],
		],
		'ComplianceByResources'                                => [
			'type'   => 'list',
			'member' => [ 'shape' => 'ComplianceByResource', ],
		],
		'ComplianceContributorCount'                           => [
			'type'    => 'structure',
			'members' => [
				'CappedCount' => [ 'shape' => 'Integer', ],
				'CapExceeded' => [ 'shape' => 'Boolean', ],
			],
		],
		'ComplianceResourceTypes'                              => [
			'type'   => 'list',
			'member' => [ 'shape' => 'StringWithCharLimit256', ],
			'max'    => 100,
			'min'    => 0,
		],
		'ComplianceSummariesByResourceType'                    => [
			'type'   => 'list',
			'member' => [ 'shape' => 'ComplianceSummaryByResourceType', ],
		],
		'ComplianceSummary'                                    => [
			'type'    => 'structure',
			'members' => [
				'CompliantResourceCount'     => [ 'shape' => 'ComplianceContributorCount', ],
				'NonCompliantResourceCount'  => [ 'shape' => 'ComplianceContributorCount', ],
				'ComplianceSummaryTimestamp' => [ 'shape' => 'Date', ],
			],
		],
		'ComplianceSummaryByResourceType'                      => [
			'type'    => 'structure',
			'members' => [
				'ResourceType'      => [ 'shape' => 'StringWithCharLimit256', ],
				'ComplianceSummary' => [ 'shape' => 'ComplianceSummary', ],
			],
		],
		'ComplianceType'                                       => [
			'type' => 'string',
			'enum' => [
				'COMPLIANT',
				'NON_COMPLIANT',
				'NOT_APPLICABLE',
				'INSUFFICIENT_DATA',
			],
		],
		'ComplianceTypes'                                      => [
			'type'   => 'list',
			'member' => [ 'shape' => 'ComplianceType', ],
			'max'    => 3,
			'min'    => 0,
		],
		'ConfigExportDeliveryInfo'                             => [
			'type'    => 'structure',
			'members' => [
				'lastStatus'         => [ 'shape' => 'DeliveryStatus', ],
				'lastErrorCode'      => [ 'shape' => 'String', ],
				'lastErrorMessage'   => [ 'shape' => 'String', ],
				'lastAttemptTime'    => [ 'shape' => 'Date', ],
				'lastSuccessfulTime' => [ 'shape' => 'Date', ],
				'nextDeliveryTime'   => [ 'shape' => 'Date', ],
			],
		],
		'ConfigRule'                                           => [
			'type'     => 'structure',
			'required' => [ 'Source', ],
			'members'  => [
				'ConfigRuleName'            => [ 'shape' => 'StringWithCharLimit64', ],
				'ConfigRuleArn'             => [ 'shape' => 'String', ],
				'ConfigRuleId'              => [ 'shape' => 'String', ],
				'Description'               => [ 'shape' => 'EmptiableStringWithCharLimit256', ],
				'Scope'                     => [ 'shape' => 'Scope', ],
				'Source'                    => [ 'shape' => 'Source', ],
				'InputParameters'           => [ 'shape' => 'StringWithCharLimit1024', ],
				'MaximumExecutionFrequency' => [ 'shape' => 'MaximumExecutionFrequency', ],
				'ConfigRuleState'           => [ 'shape' => 'ConfigRuleState', ],
				'CreatedBy'                 => [ 'shape' => 'StringWithCharLimit256', ],
			],
		],
		'ConfigRuleComplianceFilters'                          => [
			'type'    => 'structure',
			'members' => [
				'ConfigRuleName' => [ 'shape' => 'ConfigRuleName', ],
				'ComplianceType' => [ 'shape' => 'ComplianceType', ],
				'AccountId'      => [ 'shape' => 'AccountId', ],
				'AwsRegion'      => [ 'shape' => 'AwsRegion', ],
			],
		],
		'ConfigRuleComplianceSummaryFilters'                   => [
			'type'    => 'structure',
			'members' => [
				'AccountId' => [ 'shape' => 'AccountId', ],
				'AwsRegion' => [ 'shape' => 'AwsRegion', ],
			],
		],
		'ConfigRuleComplianceSummaryGroupKey'                  => [
			'type' => 'string',
			'enum' => [ 'ACCOUNT_ID', 'AWS_REGION', ],
		],
		'ConfigRuleEvaluationStatus'                           => [
			'type'    => 'structure',
			'members' => [
				'ConfigRuleName'               => [ 'shape' => 'StringWithCharLimit64', ],
				'ConfigRuleArn'                => [ 'shape' => 'String', ],
				'ConfigRuleId'                 => [ 'shape' => 'String', ],
				'LastSuccessfulInvocationTime' => [ 'shape' => 'Date', ],
				'LastFailedInvocationTime'     => [ 'shape' => 'Date', ],
				'LastSuccessfulEvaluationTime' => [ 'shape' => 'Date', ],
				'LastFailedEvaluationTime'     => [ 'shape' => 'Date', ],
				'FirstActivatedTime'           => [ 'shape' => 'Date', ],
				'LastErrorCode'                => [ 'shape' => 'String', ],
				'LastErrorMessage'             => [ 'shape' => 'String', ],
				'FirstEvaluationStarted'       => [ 'shape' => 'Boolean', ],
			],
		],
		'ConfigRuleEvaluationStatusList'                       => [
			'type'   => 'list',
			'member' => [ 'shape' => 'ConfigRuleEvaluationStatus', ],
		],
		'ConfigRuleName'                                       => [ 'type' => 'string', 'max' => 64, 'min' => 1, ],
		'ConfigRuleNames'                                      => [
			'type'   => 'list',
			'member' => [ 'shape' => 'StringWithCharLimit64', ],
			'max'    => 25,
			'min'    => 0,
		],
		'ConfigRuleState'                                      => [
			'type' => 'string',
			'enum' => [
				'ACTIVE',
				'DELETING',
				'DELETING_RESULTS',
				'EVALUATING',
			],
		],
		'ConfigRules'                                          => [
			'type'   => 'list',
			'member' => [ 'shape' => 'ConfigRule', ],
		],
		'ConfigSnapshotDeliveryProperties'                     => [
			'type'    => 'structure',
			'members' => [ 'deliveryFrequency' => [ 'shape' => 'MaximumExecutionFrequency', ], ],
		],
		'ConfigStreamDeliveryInfo'                             => [
			'type'    => 'structure',
			'members' => [
				'lastStatus'           => [ 'shape' => 'DeliveryStatus', ],
				'lastErrorCode'        => [ 'shape' => 'String', ],
				'lastErrorMessage'     => [ 'shape' => 'String', ],
				'lastStatusChangeTime' => [ 'shape' => 'Date', ],
			],
		],
		'Configuration'                                        => [ 'type' => 'string', ],
		'ConfigurationAggregator'                              => [
			'type'    => 'structure',
			'members' => [
				'ConfigurationAggregatorName'   => [ 'shape' => 'ConfigurationAggregatorName', ],
				'ConfigurationAggregatorArn'    => [ 'shape' => 'ConfigurationAggregatorArn', ],
				'AccountAggregationSources'     => [ 'shape' => 'AccountAggregationSourceList', ],
				'OrganizationAggregationSource' => [ 'shape' => 'OrganizationAggregationSource', ],
				'CreationTime'                  => [ 'shape' => 'Date', ],
				'LastUpdatedTime'               => [ 'shape' => 'Date', ],
			],
		],
		'ConfigurationAggregatorArn'                           => [
			'type'    => 'string',
			'pattern' => 'arn:aws[a-z\\-]*:config:[a-z\\-\\d]+:\\d+:config-aggregator/config-aggregator-[a-z\\d]+',
		],
		'ConfigurationAggregatorList'                          => [
			'type'   => 'list',
			'member' => [ 'shape' => 'ConfigurationAggregator', ],
		],
		'ConfigurationAggregatorName'                          => [
			'type'    => 'string',
			'max'     => 256,
			'min'     => 1,
			'pattern' => '[\\w\\-]+',
		],
		'ConfigurationAggregatorNameList'                      => [
			'type'   => 'list',
			'member' => [ 'shape' => 'ConfigurationAggregatorName', ],
			'max'    => 10,
			'min'    => 0,
		],
		'ConfigurationItem'                                    => [
			'type'    => 'structure',
			'members' => [
				'version'                      => [ 'shape' => 'Version', ],
				'accountId'                    => [ 'shape' => 'AccountId', ],
				'configurationItemCaptureTime' => [ 'shape' => 'ConfigurationItemCaptureTime', ],
				'configurationItemStatus'      => [ 'shape' => 'ConfigurationItemStatus', ],
				'configurationStateId'         => [ 'shape' => 'ConfigurationStateId', ],
				'configurationItemMD5Hash'     => [ 'shape' => 'ConfigurationItemMD5Hash', ],
				'arn'                          => [ 'shape' => 'ARN', ],
				'resourceType'                 => [ 'shape' => 'ResourceType', ],
				'resourceId'                   => [ 'shape' => 'ResourceId', ],
				'resourceName'                 => [ 'shape' => 'ResourceName', ],
				'awsRegion'                    => [ 'shape' => 'AwsRegion', ],
				'availabilityZone'             => [ 'shape' => 'AvailabilityZone', ],
				'resourceCreationTime'         => [ 'shape' => 'ResourceCreationTime', ],
				'tags'                         => [ 'shape' => 'Tags', ],
				'relatedEvents'                => [ 'shape' => 'RelatedEventList', ],
				'relationships'                => [ 'shape' => 'RelationshipList', ],
				'configuration'                => [ 'shape' => 'Configuration', ],
				'supplementaryConfiguration'   => [ 'shape' => 'SupplementaryConfiguration', ],
			],
		],
		'ConfigurationItemCaptureTime'                         => [ 'type' => 'timestamp', ],
		'ConfigurationItemList'                                => [
			'type'   => 'list',
			'member' => [ 'shape' => 'ConfigurationItem', ],
		],
		'ConfigurationItemMD5Hash'                             => [ 'type' => 'string', ],
		'ConfigurationItemStatus'                              => [
			'type' => 'string',
			'enum' => [
				'OK',
				'ResourceDiscovered',
				'ResourceNotRecorded',
				'ResourceDeleted',
				'ResourceDeletedNotRecorded',
			],
		],
		'ConfigurationRecorder'                                => [
			'type'    => 'structure',
			'members' => [
				'name'           => [ 'shape' => 'RecorderName', ],
				'roleARN'        => [ 'shape' => 'String', ],
				'recordingGroup' => [ 'shape' => 'RecordingGroup', ],
			],
		],
		'ConfigurationRecorderList'                            => [
			'type'   => 'list',
			'member' => [ 'shape' => 'ConfigurationRecorder', ],
		],
		'ConfigurationRecorderNameList'                        => [
			'type'   => 'list',
			'member' => [ 'shape' => 'RecorderName', ],
		],
		'ConfigurationRecorderStatus'                          => [
			'type'    => 'structure',
			'members' => [
				'name'                 => [ 'shape' => 'String', ],
				'lastStartTime'        => [ 'shape' => 'Date', ],
				'lastStopTime'         => [ 'shape' => 'Date', ],
				'recording'            => [ 'shape' => 'Boolean', ],
				'lastStatus'           => [ 'shape' => 'RecorderStatus', ],
				'lastErrorCode'        => [ 'shape' => 'String', ],
				'lastErrorMessage'     => [ 'shape' => 'String', ],
				'lastStatusChangeTime' => [ 'shape' => 'Date', ],
			],
		],
		'ConfigurationRecorderStatusList'                      => [
			'type'   => 'list',
			'member' => [ 'shape' => 'ConfigurationRecorderStatus', ],
		],
		'ConfigurationStateId'                                 => [ 'type' => 'string', ],
		'CosmosPageLimit'                                      => [ 'type' => 'integer', 'max' => 100, 'min' => 0, ],
		'Date'                                                 => [ 'type' => 'timestamp', ],
		'DeleteAggregationAuthorizationRequest'                => [
			'type'     => 'structure',
			'required' => [ 'AuthorizedAccountId', 'AuthorizedAwsRegion', ],
			'members'  => [
				'AuthorizedAccountId' => [ 'shape' => 'AccountId', ],
				'AuthorizedAwsRegion' => [ 'shape' => 'AwsRegion', ],
			],
		],
		'DeleteConfigRuleRequest'                              => [
			'type'     => 'structure',
			'required' => [ 'ConfigRuleName', ],
			'members'  => [ 'ConfigRuleName' => [ 'shape' => 'StringWithCharLimit64', ], ],
		],
		'DeleteConfigurationAggregatorRequest'                 => [
			'type'     => 'structure',
			'required' => [ 'ConfigurationAggregatorName', ],
			'members'  => [ 'ConfigurationAggregatorName' => [ 'shape' => 'ConfigurationAggregatorName', ], ],
		],
		'DeleteConfigurationRecorderRequest'                   => [
			'type'     => 'structure',
			'required' => [ 'ConfigurationRecorderName', ],
			'members'  => [ 'ConfigurationRecorderName' => [ 'shape' => 'RecorderName', ], ],
		],
		'DeleteDeliveryChannelRequest'                         => [
			'type'     => 'structure',
			'required' => [ 'DeliveryChannelName', ],
			'members'  => [ 'DeliveryChannelName' => [ 'shape' => 'ChannelName', ], ],
		],
		'DeleteEvaluationResultsRequest'                       => [
			'type'     => 'structure',
			'required' => [ 'ConfigRuleName', ],
			'members'  => [ 'ConfigRuleName' => [ 'shape' => 'StringWithCharLimit64', ], ],
		],
		'DeleteEvaluationResultsResponse'                      => [ 'type' => 'structure', 'members' => [], ],
		'DeleteOrganizationConfigRuleRequest'                  => [
			'type'     => 'structure',
			'required' => [ 'OrganizationConfigRuleName', ],
			'members'  => [ 'OrganizationConfigRuleName' => [ 'shape' => 'StringWithCharLimit64', ], ],
		],
		'DeletePendingAggregationRequestRequest'               => [
			'type'     => 'structure',
			'required' => [ 'RequesterAccountId', 'RequesterAwsRegion', ],
			'members'  => [
				'RequesterAccountId' => [ 'shape' => 'AccountId', ],
				'RequesterAwsRegion' => [ 'shape' => 'AwsRegion', ],
			],
		],
		'DeleteRemediationConfigurationRequest'                => [
			'type'     => 'structure',
			'required' => [ 'ConfigRuleName', ],
			'members'  => [
				'ConfigRuleName' => [ 'shape' => 'StringWithCharLimit64', ],
				'ResourceType'   => [ 'shape' => 'String', ],
			],
		],
		'DeleteRemediationConfigurationResponse'               => [ 'type' => 'structure', 'members' => [], ],
		'DeleteRetentionConfigurationRequest'                  => [
			'type'     => 'structure',
			'required' => [ 'RetentionConfigurationName', ],
			'members'  => [ 'RetentionConfigurationName' => [ 'shape' => 'RetentionConfigurationName', ], ],
		],
		'DeliverConfigSnapshotRequest'                         => [
			'type'     => 'structure',
			'required' => [ 'deliveryChannelName', ],
			'members'  => [ 'deliveryChannelName' => [ 'shape' => 'ChannelName', ], ],
		],
		'DeliverConfigSnapshotResponse'                        => [
			'type'    => 'structure',
			'members' => [ 'configSnapshotId' => [ 'shape' => 'String', ], ],
		],
		'DeliveryChannel'                                      => [
			'type'    => 'structure',
			'members' => [
				'name'                             => [ 'shape' => 'ChannelName', ],
				's3BucketName'                     => [ 'shape' => 'String', ],
				's3KeyPrefix'                      => [ 'shape' => 'String', ],
				'snsTopicARN'                      => [ 'shape' => 'String', ],
				'configSnapshotDeliveryProperties' => [ 'shape' => 'ConfigSnapshotDeliveryProperties', ],
			],
		],
		'DeliveryChannelList'                                  => [
			'type'   => 'list',
			'member' => [ 'shape' => 'DeliveryChannel', ],
		],
		'DeliveryChannelNameList'                              => [
			'type'   => 'list',
			'member' => [ 'shape' => 'ChannelName', ],
		],
		'DeliveryChannelStatus'                                => [
			'type'    => 'structure',
			'members' => [
				'name'                       => [ 'shape' => 'String', ],
				'configSnapshotDeliveryInfo' => [ 'shape' => 'ConfigExportDeliveryInfo', ],
				'configHistoryDeliveryInfo'  => [ 'shape' => 'ConfigExportDeliveryInfo', ],
				'configStreamDeliveryInfo'   => [ 'shape' => 'ConfigStreamDeliveryInfo', ],
			],
		],
		'DeliveryChannelStatusList'                            => [
			'type'   => 'list',
			'member' => [ 'shape' => 'DeliveryChannelStatus', ],
		],
		'DeliveryStatus'                                       => [
			'type' => 'string',
			'enum' => [ 'Success', 'Failure', 'Not_Applicable', ],
		],
		'DescribeAggregateComplianceByConfigRulesRequest'      => [
			'type'     => 'structure',
			'required' => [ 'ConfigurationAggregatorName', ],
			'members'  => [
				'ConfigurationAggregatorName' => [ 'shape' => 'ConfigurationAggregatorName', ],
				'Filters'                     => [ 'shape' => 'ConfigRuleComplianceFilters', ],
				'Limit'                       => [ 'shape' => 'GroupByAPILimit', ],
				'NextToken'                   => [ 'shape' => 'NextToken', ],
			],
		],
		'DescribeAggregateComplianceByConfigRulesResponse'     => [
			'type'    => 'structure',
			'members' => [
				'AggregateComplianceByConfigRules' => [ 'shape' => 'AggregateComplianceByConfigRuleList', ],
				'NextToken'                        => [ 'shape' => 'NextToken', ],
			],
		],
		'DescribeAggregationAuthorizationsRequest'             => [
			'type'    => 'structure',
			'members' => [
				'Limit'     => [ 'shape' => 'Limit', ],
				'NextToken' => [ 'shape' => 'String', ],
			],
		],
		'DescribeAggregationAuthorizationsResponse'            => [
			'type'    => 'structure',
			'members' => [
				'AggregationAuthorizations' => [ 'shape' => 'AggregationAuthorizationList', ],
				'NextToken'                 => [ 'shape' => 'String', ],
			],
		],
		'DescribeComplianceByConfigRuleRequest'                => [
			'type'    => 'structure',
			'members' => [
				'ConfigRuleNames' => [ 'shape' => 'ConfigRuleNames', ],
				'ComplianceTypes' => [ 'shape' => 'ComplianceTypes', ],
				'NextToken'       => [ 'shape' => 'String', ],
			],
		],
		'DescribeComplianceByConfigRuleResponse'               => [
			'type'    => 'structure',
			'members' => [
				'ComplianceByConfigRules' => [ 'shape' => 'ComplianceByConfigRules', ],
				'NextToken'               => [ 'shape' => 'String', ],
			],
		],
		'DescribeComplianceByResourceRequest'                  => [
			'type'    => 'structure',
			'members' => [
				'ResourceType'    => [ 'shape' => 'StringWithCharLimit256', ],
				'ResourceId'      => [ 'shape' => 'BaseResourceId', ],
				'ComplianceTypes' => [ 'shape' => 'ComplianceTypes', ],
				'Limit'           => [ 'shape' => 'Limit', ],
				'NextToken'       => [ 'shape' => 'NextToken', ],
			],
		],
		'DescribeComplianceByResourceResponse'                 => [
			'type'    => 'structure',
			'members' => [
				'ComplianceByResources' => [ 'shape' => 'ComplianceByResources', ],
				'NextToken'             => [ 'shape' => 'NextToken', ],
			],
		],
		'DescribeConfigRuleEvaluationStatusRequest'            => [
			'type'    => 'structure',
			'members' => [
				'ConfigRuleNames' => [ 'shape' => 'ConfigRuleNames', ],
				'NextToken'       => [ 'shape' => 'String', ],
				'Limit'           => [ 'shape' => 'RuleLimit', ],
			],
		],
		'DescribeConfigRuleEvaluationStatusResponse'           => [
			'type'    => 'structure',
			'members' => [
				'ConfigRulesEvaluationStatus' => [ 'shape' => 'ConfigRuleEvaluationStatusList', ],
				'NextToken'                   => [ 'shape' => 'String', ],
			],
		],
		'DescribeConfigRulesRequest'                           => [
			'type'    => 'structure',
			'members' => [
				'ConfigRuleNames' => [ 'shape' => 'ConfigRuleNames', ],
				'NextToken'       => [ 'shape' => 'String', ],
			],
		],
		'DescribeConfigRulesResponse'                          => [
			'type'    => 'structure',
			'members' => [
				'ConfigRules' => [ 'shape' => 'ConfigRules', ],
				'NextToken'   => [ 'shape' => 'String', ],
			],
		],
		'DescribeConfigurationAggregatorSourcesStatusRequest'  => [
			'type'     => 'structure',
			'required' => [ 'ConfigurationAggregatorName', ],
			'members'  => [
				'ConfigurationAggregatorName' => [ 'shape' => 'ConfigurationAggregatorName', ],
				'UpdateStatus'                => [ 'shape' => 'AggregatedSourceStatusTypeList', ],
				'NextToken'                   => [ 'shape' => 'String', ],
				'Limit'                       => [ 'shape' => 'Limit', ],
			],
		],
		'DescribeConfigurationAggregatorSourcesStatusResponse' => [
			'type'    => 'structure',
			'members' => [
				'AggregatedSourceStatusList' => [ 'shape' => 'AggregatedSourceStatusList', ],
				'NextToken'                  => [ 'shape' => 'String', ],
			],
		],
		'DescribeConfigurationAggregatorsRequest'              => [
			'type'    => 'structure',
			'members' => [
				'ConfigurationAggregatorNames' => [ 'shape' => 'ConfigurationAggregatorNameList', ],
				'NextToken'                    => [ 'shape' => 'String', ],
				'Limit'                        => [ 'shape' => 'Limit', ],
			],
		],
		'DescribeConfigurationAggregatorsResponse'             => [
			'type'    => 'structure',
			'members' => [
				'ConfigurationAggregators' => [ 'shape' => 'ConfigurationAggregatorList', ],
				'NextToken'                => [ 'shape' => 'String', ],
			],
		],
		'DescribeConfigurationRecorderStatusRequest'           => [
			'type'    => 'structure',
			'members' => [ 'ConfigurationRecorderNames' => [ 'shape' => 'ConfigurationRecorderNameList', ], ],
		],
		'DescribeConfigurationRecorderStatusResponse'          => [
			'type'    => 'structure',
			'members' => [ 'ConfigurationRecordersStatus' => [ 'shape' => 'ConfigurationRecorderStatusList', ], ],
		],
		'DescribeConfigurationRecordersRequest'                => [
			'type'    => 'structure',
			'members' => [ 'ConfigurationRecorderNames' => [ 'shape' => 'ConfigurationRecorderNameList', ], ],
		],
		'DescribeConfigurationRecordersResponse'               => [
			'type'    => 'structure',
			'members' => [ 'ConfigurationRecorders' => [ 'shape' => 'ConfigurationRecorderList', ], ],
		],
		'DescribeDeliveryChannelStatusRequest'                 => [
			'type'    => 'structure',
			'members' => [ 'DeliveryChannelNames' => [ 'shape' => 'DeliveryChannelNameList', ], ],
		],
		'DescribeDeliveryChannelStatusResponse'                => [
			'type'    => 'structure',
			'members' => [ 'DeliveryChannelsStatus' => [ 'shape' => 'DeliveryChannelStatusList', ], ],
		],
		'DescribeDeliveryChannelsRequest'                      => [
			'type'    => 'structure',
			'members' => [ 'DeliveryChannelNames' => [ 'shape' => 'DeliveryChannelNameList', ], ],
		],
		'DescribeDeliveryChannelsResponse'                     => [
			'type'    => 'structure',
			'members' => [ 'DeliveryChannels' => [ 'shape' => 'DeliveryChannelList', ], ],
		],
		'DescribeOrganizationConfigRuleStatusesRequest'        => [
			'type'    => 'structure',
			'members' => [
				'OrganizationConfigRuleNames' => [ 'shape' => 'OrganizationConfigRuleNames', ],
				'Limit'                       => [ 'shape' => 'CosmosPageLimit', ],
				'NextToken'                   => [ 'shape' => 'String', ],
			],
		],
		'DescribeOrganizationConfigRuleStatusesResponse'       => [
			'type'    => 'structure',
			'members' => [
				'OrganizationConfigRuleStatuses' => [ 'shape' => 'OrganizationConfigRuleStatuses', ],
				'NextToken'                      => [ 'shape' => 'String', ],
			],
		],
		'DescribeOrganizationConfigRulesRequest'               => [
			'type'    => 'structure',
			'members' => [
				'OrganizationConfigRuleNames' => [ 'shape' => 'OrganizationConfigRuleNames', ],
				'Limit'                       => [ 'shape' => 'CosmosPageLimit', ],
				'NextToken'                   => [ 'shape' => 'String', ],
			],
		],
		'DescribeOrganizationConfigRulesResponse'              => [
			'type'    => 'structure',
			'members' => [
				'OrganizationConfigRules' => [ 'shape' => 'OrganizationConfigRules', ],
				'NextToken'               => [ 'shape' => 'String', ],
			],
		],
		'DescribePendingAggregationRequestsLimit'              => [ 'type' => 'integer', 'max' => 20, 'min' => 0, ],
		'DescribePendingAggregationRequestsRequest'            => [
			'type'    => 'structure',
			'members' => [
				'Limit'     => [ 'shape' => 'DescribePendingAggregationRequestsLimit', ],
				'NextToken' => [ 'shape' => 'String', ],
			],
		],
		'DescribePendingAggregationRequestsResponse'           => [
			'type'    => 'structure',
			'members' => [
				'PendingAggregationRequests' => [ 'shape' => 'PendingAggregationRequestList', ],
				'NextToken'                  => [ 'shape' => 'String', ],
			],
		],
		'DescribeRemediationConfigurationsRequest'             => [
			'type'     => 'structure',
			'required' => [ 'ConfigRuleNames', ],
			'members'  => [ 'ConfigRuleNames' => [ 'shape' => 'ConfigRuleNames', ], ],
		],
		'DescribeRemediationConfigurationsResponse'            => [
			'type'    => 'structure',
			'members' => [ 'RemediationConfigurations' => [ 'shape' => 'RemediationConfigurations', ], ],
		],
		'DescribeRemediationExecutionStatusRequest'            => [
			'type'     => 'structure',
			'required' => [ 'ConfigRuleName', ],
			'members'  => [
				'ConfigRuleName' => [ 'shape' => 'StringWithCharLimit64', ],
				'ResourceKeys'   => [ 'shape' => 'ResourceKeys', ],
				'Limit'          => [ 'shape' => 'Limit', ],
				'NextToken'      => [ 'shape' => 'StringWithCharLimit256', ],
			],
		],
		'DescribeRemediationExecutionStatusResponse'           => [
			'type'    => 'structure',
			'members' => [
				'RemediationExecutionStatuses' => [ 'shape' => 'RemediationExecutionStatuses', ],
				'NextToken'                    => [ 'shape' => 'StringWithCharLimit256', ],
			],
		],
		'DescribeRetentionConfigurationsRequest'               => [
			'type'    => 'structure',
			'members' => [
				'RetentionConfigurationNames' => [ 'shape' => 'RetentionConfigurationNameList', ],
				'NextToken'                   => [ 'shape' => 'NextToken', ],
			],
		],
		'DescribeRetentionConfigurationsResponse'              => [
			'type'    => 'structure',
			'members' => [
				'RetentionConfigurations' => [ 'shape' => 'RetentionConfigurationList', ],
				'NextToken'               => [ 'shape' => 'NextToken', ],
			],
		],
		'DiscoveredResourceIdentifierList'                     => [
			'type'   => 'list',
			'member' => [ 'shape' => 'AggregateResourceIdentifier', ],
		],
		'EarlierTime'                                          => [ 'type' => 'timestamp', ],
		'EmptiableStringWithCharLimit256'                      => [ 'type' => 'string', 'max' => 256, 'min' => 0, ],
		'Evaluation'                                           => [
			'type'     => 'structure',
			'required' => [
				'ComplianceResourceType',
				'ComplianceResourceId',
				'ComplianceType',
				'OrderingTimestamp',
			],
			'members'  => [
				'ComplianceResourceType' => [ 'shape' => 'StringWithCharLimit256', ],
				'ComplianceResourceId'   => [ 'shape' => 'BaseResourceId', ],
				'ComplianceType'         => [ 'shape' => 'ComplianceType', ],
				'Annotation'             => [ 'shape' => 'StringWithCharLimit256', ],
				'OrderingTimestamp'      => [ 'shape' => 'OrderingTimestamp', ],
			],
		],
		'EvaluationResult'                                     => [
			'type'    => 'structure',
			'members' => [
				'EvaluationResultIdentifier' => [ 'shape' => 'EvaluationResultIdentifier', ],
				'ComplianceType'             => [ 'shape' => 'ComplianceType', ],
				'ResultRecordedTime'         => [ 'shape' => 'Date', ],
				'ConfigRuleInvokedTime'      => [ 'shape' => 'Date', ],
				'Annotation'                 => [ 'shape' => 'StringWithCharLimit256', ],
				'ResultToken'                => [ 'shape' => 'String', ],
			],
		],
		'EvaluationResultIdentifier'                           => [
			'type'    => 'structure',
			'members' => [
				'EvaluationResultQualifier' => [ 'shape' => 'EvaluationResultQualifier', ],
				'OrderingTimestamp'         => [ 'shape' => 'Date', ],
			],
		],
		'EvaluationResultQualifier'                            => [
			'type'    => 'structure',
			'members' => [
				'ConfigRuleName' => [ 'shape' => 'StringWithCharLimit64', ],
				'ResourceType'   => [ 'shape' => 'StringWithCharLimit256', ],
				'ResourceId'     => [ 'shape' => 'BaseResourceId', ],
			],
		],
		'EvaluationResults'                                    => [
			'type'   => 'list',
			'member' => [ 'shape' => 'EvaluationResult', ],
		],
		'Evaluations'                                          => [
			'type'   => 'list',
			'member' => [ 'shape' => 'Evaluation', ],
			'max'    => 100,
			'min'    => 0,
		],
		'EventSource'                                          => [ 'type' => 'string', 'enum' => [ 'aws.config', ], ],
		'ExcludedAccounts'                                     => [
			'type'   => 'list',
			'member' => [ 'shape' => 'AccountId', ],
			'max'    => 1000,
			'min'    => 0,
		],
		'Expression'                                           => [ 'type' => 'string', 'max' => 4096, 'min' => 1, ],
		'FailedRemediationBatch'                               => [
			'type'    => 'structure',
			'members' => [
				'FailureMessage' => [ 'shape' => 'String', ],
				'FailedItems'    => [ 'shape' => 'RemediationConfigurations', ],
			],
		],
		'FailedRemediationBatches'                             => [
			'type'   => 'list',
			'member' => [ 'shape' => 'FailedRemediationBatch', ],
		],
		'FieldInfo'                                            => [
			'type'    => 'structure',
			'members' => [ 'Name' => [ 'shape' => 'FieldName', ], ],
		],
		'FieldInfoList'                                        => [
			'type'   => 'list',
			'member' => [ 'shape' => 'FieldInfo', ],
		],
		'FieldName'                                            => [ 'type' => 'string', ],
		'GetAggregateComplianceDetailsByConfigRuleRequest'     => [
			'type'     => 'structure',
			'required' => [
				'ConfigurationAggregatorName',
				'ConfigRuleName',
				'AccountId',
				'AwsRegion',
			],
			'members'  => [
				'ConfigurationAggregatorName' => [ 'shape' => 'ConfigurationAggregatorName', ],
				'ConfigRuleName'              => [ 'shape' => 'ConfigRuleName', ],
				'AccountId'                   => [ 'shape' => 'AccountId', ],
				'AwsRegion'                   => [ 'shape' => 'AwsRegion', ],
				'ComplianceType'              => [ 'shape' => 'ComplianceType', ],
				'Limit'                       => [ 'shape' => 'Limit', ],
				'NextToken'                   => [ 'shape' => 'NextToken', ],
			],
		],
		'GetAggregateComplianceDetailsByConfigRuleResponse'    => [
			'type'    => 'structure',
			'members' => [
				'AggregateEvaluationResults' => [ 'shape' => 'AggregateEvaluationResultList', ],
				'NextToken'                  => [ 'shape' => 'NextToken', ],
			],
		],
		'GetAggregateConfigRuleComplianceSummaryRequest'       => [
			'type'     => 'structure',
			'required' => [ 'ConfigurationAggregatorName', ],
			'members'  => [
				'ConfigurationAggregatorName' => [ 'shape' => 'ConfigurationAggregatorName', ],
				'Filters'                     => [ 'shape' => 'ConfigRuleComplianceSummaryFilters', ],
				'GroupByKey'                  => [ 'shape' => 'ConfigRuleComplianceSummaryGroupKey', ],
				'Limit'                       => [ 'shape' => 'GroupByAPILimit', ],
				'NextToken'                   => [ 'shape' => 'NextToken', ],
			],
		],
		'GetAggregateConfigRuleComplianceSummaryResponse'      => [
			'type'    => 'structure',
			'members' => [
				'GroupByKey'                => [ 'shape' => 'StringWithCharLimit256', ],
				'AggregateComplianceCounts' => [ 'shape' => 'AggregateComplianceCountList', ],
				'NextToken'                 => [ 'shape' => 'NextToken', ],
			],
		],
		'GetAggregateDiscoveredResourceCountsRequest'          => [
			'type'     => 'structure',
			'required' => [ 'ConfigurationAggregatorName', ],
			'members'  => [
				'ConfigurationAggregatorName' => [ 'shape' => 'ConfigurationAggregatorName', ],
				'Filters'                     => [ 'shape' => 'ResourceCountFilters', ],
				'GroupByKey'                  => [ 'shape' => 'ResourceCountGroupKey', ],
				'Limit'                       => [ 'shape' => 'GroupByAPILimit', ],
				'NextToken'                   => [ 'shape' => 'NextToken', ],
			],
		],
		'GetAggregateDiscoveredResourceCountsResponse'         => [
			'type'     => 'structure',
			'required' => [ 'TotalDiscoveredResources', ],
			'members'  => [
				'TotalDiscoveredResources' => [ 'shape' => 'Long', ],
				'GroupByKey'               => [ 'shape' => 'StringWithCharLimit256', ],
				'GroupedResourceCounts'    => [ 'shape' => 'GroupedResourceCountList', ],
				'NextToken'                => [ 'shape' => 'NextToken', ],
			],
		],
		'GetAggregateResourceConfigRequest'                    => [
			'type'     => 'structure',
			'required' => [
				'ConfigurationAggregatorName',
				'ResourceIdentifier',
			],
			'members'  => [
				'ConfigurationAggregatorName' => [ 'shape' => 'ConfigurationAggregatorName', ],
				'ResourceIdentifier'          => [ 'shape' => 'AggregateResourceIdentifier', ],
			],
		],
		'GetAggregateResourceConfigResponse'                   => [
			'type'    => 'structure',
			'members' => [ 'ConfigurationItem' => [ 'shape' => 'ConfigurationItem', ], ],
		],
		'GetComplianceDetailsByConfigRuleRequest'              => [
			'type'     => 'structure',
			'required' => [ 'ConfigRuleName', ],
			'members'  => [
				'ConfigRuleName'  => [ 'shape' => 'StringWithCharLimit64', ],
				'ComplianceTypes' => [ 'shape' => 'ComplianceTypes', ],
				'Limit'           => [ 'shape' => 'Limit', ],
				'NextToken'       => [ 'shape' => 'NextToken', ],
			],
		],
		'GetComplianceDetailsByConfigRuleResponse'             => [
			'type'    => 'structure',
			'members' => [
				'EvaluationResults' => [ 'shape' => 'EvaluationResults', ],
				'NextToken'         => [ 'shape' => 'NextToken', ],
			],
		],
		'GetComplianceDetailsByResourceRequest'                => [
			'type'     => 'structure',
			'required' => [ 'ResourceType', 'ResourceId', ],
			'members'  => [
				'ResourceType'    => [ 'shape' => 'StringWithCharLimit256', ],
				'ResourceId'      => [ 'shape' => 'BaseResourceId', ],
				'ComplianceTypes' => [ 'shape' => 'ComplianceTypes', ],
				'NextToken'       => [ 'shape' => 'String', ],
			],
		],
		'GetComplianceDetailsByResourceResponse'               => [
			'type'    => 'structure',
			'members' => [
				'EvaluationResults' => [ 'shape' => 'EvaluationResults', ],
				'NextToken'         => [ 'shape' => 'String', ],
			],
		],
		'GetComplianceSummaryByConfigRuleResponse'             => [
			'type'    => 'structure',
			'members' => [ 'ComplianceSummary' => [ 'shape' => 'ComplianceSummary', ], ],
		],
		'GetComplianceSummaryByResourceTypeRequest'            => [
			'type'    => 'structure',
			'members' => [ 'ResourceTypes' => [ 'shape' => 'ResourceTypes', ], ],
		],
		'GetComplianceSummaryByResourceTypeResponse'           => [
			'type'    => 'structure',
			'members' => [ 'ComplianceSummariesByResourceType' => [ 'shape' => 'ComplianceSummariesByResourceType', ], ],
		],
		'GetDiscoveredResourceCountsRequest'                   => [
			'type'    => 'structure',
			'members' => [
				'resourceTypes' => [ 'shape' => 'ResourceTypes', ],
				'limit'         => [ 'shape' => 'Limit', ],
				'nextToken'     => [ 'shape' => 'NextToken', ],
			],
		],
		'GetDiscoveredResourceCountsResponse'                  => [
			'type'    => 'structure',
			'members' => [
				'totalDiscoveredResources' => [ 'shape' => 'Long', ],
				'resourceCounts'           => [ 'shape' => 'ResourceCounts', ],
				'nextToken'                => [ 'shape' => 'NextToken', ],
			],
		],
		'GetOrganizationConfigRuleDetailedStatusRequest'       => [
			'type'     => 'structure',
			'required' => [ 'OrganizationConfigRuleName', ],
			'members'  => [
				'OrganizationConfigRuleName' => [ 'shape' => 'StringWithCharLimit64', ],
				'Filters'                    => [ 'shape' => 'StatusDetailFilters', ],
				'Limit'                      => [ 'shape' => 'CosmosPageLimit', ],
				'NextToken'                  => [ 'shape' => 'String', ],
			],
		],
		'GetOrganizationConfigRuleDetailedStatusResponse'      => [
			'type'    => 'structure',
			'members' => [
				'OrganizationConfigRuleDetailedStatus' => [ 'shape' => 'OrganizationConfigRuleDetailedStatus', ],
				'NextToken'                            => [ 'shape' => 'String', ],
			],
		],
		'GetResourceConfigHistoryRequest'                      => [
			'type'     => 'structure',
			'required' => [ 'resourceType', 'resourceId', ],
			'members'  => [
				'resourceType'       => [ 'shape' => 'ResourceType', ],
				'resourceId'         => [ 'shape' => 'ResourceId', ],
				'laterTime'          => [ 'shape' => 'LaterTime', ],
				'earlierTime'        => [ 'shape' => 'EarlierTime', ],
				'chronologicalOrder' => [ 'shape' => 'ChronologicalOrder', ],
				'limit'              => [ 'shape' => 'Limit', ],
				'nextToken'          => [ 'shape' => 'NextToken', ],
			],
		],
		'GetResourceConfigHistoryResponse'                     => [
			'type'    => 'structure',
			'members' => [
				'configurationItems' => [ 'shape' => 'ConfigurationItemList', ],
				'nextToken'          => [ 'shape' => 'NextToken', ],
			],
		],
		'GroupByAPILimit'                                      => [ 'type' => 'integer', 'max' => 1000, 'min' => 0, ],
		'GroupedResourceCount'                                 => [
			'type'     => 'structure',
			'required' => [ 'GroupName', 'ResourceCount', ],
			'members'  => [
				'GroupName'     => [ 'shape' => 'StringWithCharLimit256', ],
				'ResourceCount' => [ 'shape' => 'Long', ],
			],
		],
		'GroupedResourceCountList'                             => [
			'type'   => 'list',
			'member' => [ 'shape' => 'GroupedResourceCount', ],
		],
		'IncludeGlobalResourceTypes'                           => [ 'type' => 'boolean', ],
		'InsufficientDeliveryPolicyException'                  => [
			'type'      => 'structure',
			'members'   => [],
			'exception' => true,
		],
		'InsufficientPermissionsException'                     => [
			'type'      => 'structure',
			'members'   => [],
			'exception' => true,
		],
		'Integer'                                              => [ 'type' => 'integer', ],
		'InvalidConfigurationRecorderNameException'            => [
			'type'      => 'structure',
			'members'   => [],
			'exception' => true,
		],
		'InvalidDeliveryChannelNameException'                  => [
			'type'      => 'structure',
			'members'   => [],
			'exception' => true,
		],
		'InvalidExpressionException'                           => [
			'type'      => 'structure',
			'members'   => [],
			'exception' => true,
		],
		'InvalidLimitException'                                => [
			'type'      => 'structure',
			'members'   => [],
			'exception' => true,
		],
		'InvalidNextTokenException'                            => [
			'type'      => 'structure',
			'members'   => [],
			'exception' => true,
		],
		'InvalidParameterValueException'                       => [
			'type'      => 'structure',
			'members'   => [],
			'exception' => true,
		],
		'InvalidRecordingGroupException'                       => [
			'type'      => 'structure',
			'members'   => [],
			'exception' => true,
		],
		'InvalidResultTokenException'                          => [
			'type'      => 'structure',
			'members'   => [],
			'exception' => true,
		],
		'InvalidRoleException'                                 => [
			'type'      => 'structure',
			'members'   => [],
			'exception' => true,
		],
		'InvalidS3KeyPrefixException'                          => [
			'type'      => 'structure',
			'members'   => [],
			'exception' => true,
		],
		'InvalidSNSTopicARNException'                          => [
			'type'      => 'structure',
			'members'   => [],
			'exception' => true,
		],
		'InvalidTimeRangeException'                            => [
			'type'      => 'structure',
			'members'   => [],
			'exception' => true,
		],
		'LastDeliveryChannelDeleteFailedException'             => [
			'type'      => 'structure',
			'members'   => [],
			'exception' => true,
		],
		'LaterTime'                                            => [ 'type' => 'timestamp', ],
		'Limit'                                                => [ 'type' => 'integer', 'max' => 100, 'min' => 0, ],
		'LimitExceededException'                               => [
			'type'      => 'structure',
			'members'   => [],
			'exception' => true,
		],
		'ListAggregateDiscoveredResourcesRequest'              => [
			'type'     => 'structure',
			'required' => [
				'ConfigurationAggregatorName',
				'ResourceType',
			],
			'members'  => [
				'ConfigurationAggregatorName' => [ 'shape' => 'ConfigurationAggregatorName', ],
				'ResourceType'                => [ 'shape' => 'ResourceType', ],
				'Filters'                     => [ 'shape' => 'ResourceFilters', ],
				'Limit'                       => [ 'shape' => 'Limit', ],
				'NextToken'                   => [ 'shape' => 'NextToken', ],
			],
		],
		'ListAggregateDiscoveredResourcesResponse'             => [
			'type'    => 'structure',
			'members' => [
				'ResourceIdentifiers' => [ 'shape' => 'DiscoveredResourceIdentifierList', ],
				'NextToken'           => [ 'shape' => 'NextToken', ],
			],
		],
		'ListDiscoveredResourcesRequest'                       => [
			'type'     => 'structure',
			'required' => [ 'resourceType', ],
			'members'  => [
				'resourceType'            => [ 'shape' => 'ResourceType', ],
				'resourceIds'             => [ 'shape' => 'ResourceIdList', ],
				'resourceName'            => [ 'shape' => 'ResourceName', ],
				'limit'                   => [ 'shape' => 'Limit', ],
				'includeDeletedResources' => [ 'shape' => 'Boolean', ],
				'nextToken'               => [ 'shape' => 'NextToken', ],
			],
		],
		'ListDiscoveredResourcesResponse'                      => [
			'type'    => 'structure',
			'members' => [
				'resourceIdentifiers' => [ 'shape' => 'ResourceIdentifierList', ],
				'nextToken'           => [ 'shape' => 'NextToken', ],
			],
		],
		'ListTagsForResourceRequest'                           => [
			'type'     => 'structure',
			'required' => [ 'ResourceArn', ],
			'members'  => [
				'ResourceArn' => [ 'shape' => 'AmazonResourceName', ],
				'Limit'       => [ 'shape' => 'Limit', ],
				'NextToken'   => [ 'shape' => 'NextToken', ],
			],
		],
		'ListTagsForResourceResponse'                          => [
			'type'    => 'structure',
			'members' => [
				'Tags'      => [ 'shape' => 'TagList', ],
				'NextToken' => [ 'shape' => 'NextToken', ],
			],
		],
		'Long'                                                 => [ 'type' => 'long', ],
		'MaxNumberOfConfigRulesExceededException'              => [
			'type'      => 'structure',
			'members'   => [],
			'exception' => true,
		],
		'MaxNumberOfConfigurationRecordersExceededException'   => [
			'type'      => 'structure',
			'members'   => [],
			'exception' => true,
		],
		'MaxNumberOfDeliveryChannelsExceededException'         => [
			'type'      => 'structure',
			'members'   => [],
			'exception' => true,
		],
		'MaxNumberOfOrganizationConfigRulesExceededException'  => [
			'type'      => 'structure',
			'members'   => [],
			'exception' => true,
		],
		'MaxNumberOfRetentionConfigurationsExceededException'  => [
			'type'      => 'structure',
			'members'   => [],
			'exception' => true,
		],
		'MaximumExecutionFrequency'                            => [
			'type' => 'string',
			'enum' => [
				'One_Hour',
				'Three_Hours',
				'Six_Hours',
				'Twelve_Hours',
				'TwentyFour_Hours',
			],
		],
		'MemberAccountRuleStatus'                              => [
			'type' => 'string',
			'enum' => [
				'CREATE_SUCCESSFUL',
				'CREATE_IN_PROGRESS',
				'CREATE_FAILED',
				'UPDATE_SUCCESSFUL',
				'UPDATE_FAILED',
				'UPDATE_IN_PROGRESS',
				'DELETE_SUCCESSFUL',
				'DELETE_FAILED',
				'DELETE_IN_PROGRESS',
			],
		],
		'MemberAccountStatus'                                  => [
			'type'     => 'structure',
			'required' => [
				'AccountId',
				'ConfigRuleName',
				'MemberAccountRuleStatus',
			],
			'members'  => [
				'AccountId'               => [ 'shape' => 'AccountId', ],
				'ConfigRuleName'          => [ 'shape' => 'StringWithCharLimit64', ],
				'MemberAccountRuleStatus' => [ 'shape' => 'MemberAccountRuleStatus', ],
				'ErrorCode'               => [ 'shape' => 'String', ],
				'ErrorMessage'            => [ 'shape' => 'String', ],
				'LastUpdateTime'          => [ 'shape' => 'Date', ],
			],
		],
		'MessageType'                                          => [
			'type' => 'string',
			'enum' => [
				'ConfigurationItemChangeNotification',
				'ConfigurationSnapshotDeliveryCompleted',
				'ScheduledNotification',
				'OversizedConfigurationItemChangeNotification',
			],
		],
		'Name'                                                 => [ 'type' => 'string', ],
		'NextToken'                                            => [ 'type' => 'string', ],
		'NoAvailableConfigurationRecorderException'            => [
			'type'      => 'structure',
			'members'   => [],
			'exception' => true,
		],
		'NoAvailableDeliveryChannelException'                  => [
			'type'      => 'structure',
			'members'   => [],
			'exception' => true,
		],
		'NoAvailableOrganizationException'                     => [
			'type'      => 'structure',
			'members'   => [],
			'exception' => true,
		],
		'NoRunningConfigurationRecorderException'              => [
			'type'      => 'structure',
			'members'   => [],
			'exception' => true,
		],
		'NoSuchBucketException'                                => [
			'type'      => 'structure',
			'members'   => [],
			'exception' => true,
		],
		'NoSuchConfigRuleException'                            => [
			'type'      => 'structure',
			'members'   => [],
			'exception' => true,
		],
		'NoSuchConfigurationAggregatorException'               => [
			'type'      => 'structure',
			'members'   => [],
			'exception' => true,
		],
		'NoSuchConfigurationRecorderException'                 => [
			'type'      => 'structure',
			'members'   => [],
			'exception' => true,
		],
		'NoSuchDeliveryChannelException'                       => [
			'type'      => 'structure',
			'members'   => [],
			'exception' => true,
		],
		'NoSuchOrganizationConfigRuleException'                => [
			'type'      => 'structure',
			'members'   => [],
			'exception' => true,
		],
		'NoSuchRemediationConfigurationException'              => [
			'type'      => 'structure',
			'members'   => [],
			'exception' => true,
		],
		'NoSuchRetentionConfigurationException'                => [
			'type'      => 'structure',
			'members'   => [],
			'exception' => true,
		],
		'OrderingTimestamp'                                    => [ 'type' => 'timestamp', ],
		'OrganizationAccessDeniedException'                    => [
			'type'      => 'structure',
			'members'   => [],
			'exception' => true,
		],
		'OrganizationAggregationSource'                        => [
			'type'     => 'structure',
			'required' => [ 'RoleArn', ],
			'members'  => [
				'RoleArn'       => [ 'shape' => 'String', ],
				'AwsRegions'    => [ 'shape' => 'AggregatorRegionList', ],
				'AllAwsRegions' => [ 'shape' => 'Boolean', ],
			],
		],
		'OrganizationAllFeaturesNotEnabledException'           => [
			'type'      => 'structure',
			'members'   => [],
			'exception' => true,
		],
		'OrganizationConfigRule'                               => [
			'type'     => 'structure',
			'required' => [
				'OrganizationConfigRuleName',
				'OrganizationConfigRuleArn',
			],
			'members'  => [
				'OrganizationConfigRuleName'      => [ 'shape' => 'StringWithCharLimit64', ],
				'OrganizationConfigRuleArn'       => [ 'shape' => 'StringWithCharLimit256', ],
				'OrganizationManagedRuleMetadata' => [ 'shape' => 'OrganizationManagedRuleMetadata', ],
				'OrganizationCustomRuleMetadata'  => [ 'shape' => 'OrganizationCustomRuleMetadata', ],
				'ExcludedAccounts'                => [ 'shape' => 'ExcludedAccounts', ],
				'LastUpdateTime'                  => [ 'shape' => 'Date', ],
			],
		],
		'OrganizationConfigRuleDetailedStatus'                 => [
			'type'   => 'list',
			'member' => [ 'shape' => 'MemberAccountStatus', ],
		],
		'OrganizationConfigRuleNames'                          => [
			'type'   => 'list',
			'member' => [ 'shape' => 'StringWithCharLimit64', ],
			'max'    => 25,
			'min'    => 0,
		],
		'OrganizationConfigRuleStatus'                         => [
			'type'     => 'structure',
			'required' => [
				'OrganizationConfigRuleName',
				'OrganizationRuleStatus',
			],
			'members'  => [
				'OrganizationConfigRuleName' => [ 'shape' => 'StringWithCharLimit64', ],
				'OrganizationRuleStatus'     => [ 'shape' => 'OrganizationRuleStatus', ],
				'ErrorCode'                  => [ 'shape' => 'String', ],
				'ErrorMessage'               => [ 'shape' => 'String', ],
				'LastUpdateTime'             => [ 'shape' => 'Date', ],
			],
		],
		'OrganizationConfigRuleStatuses'                       => [
			'type'   => 'list',
			'member' => [ 'shape' => 'OrganizationConfigRuleStatus', ],
		],
		'OrganizationConfigRuleTriggerType'                    => [
			'type' => 'string',
			'enum' => [
				'ConfigurationItemChangeNotification',
				'OversizedConfigurationItemChangeNotification',
				'ScheduledNotification',
			],
		],
		'OrganizationConfigRuleTriggerTypes'                   => [
			'type'   => 'list',
			'member' => [ 'shape' => 'OrganizationConfigRuleTriggerType', ],
		],
		'OrganizationConfigRules'                              => [
			'type'   => 'list',
			'member' => [ 'shape' => 'OrganizationConfigRule', ],
		],
		'OrganizationCustomRuleMetadata'                       => [
			'type'     => 'structure',
			'required' => [
				'LambdaFunctionArn',
				'OrganizationConfigRuleTriggerTypes',
			],
			'members'  => [
				'Description'                        => [ 'shape' => 'StringWithCharLimit256Min0', ],
				'LambdaFunctionArn'                  => [ 'shape' => 'StringWithCharLimit256', ],
				'OrganizationConfigRuleTriggerTypes' => [ 'shape' => 'OrganizationConfigRuleTriggerTypes', ],
				'InputParameters'                    => [ 'shape' => 'StringWithCharLimit2048', ],
				'MaximumExecutionFrequency'          => [ 'shape' => 'MaximumExecutionFrequency', ],
				'ResourceTypesScope'                 => [ 'shape' => 'ResourceTypesScope', ],
				'ResourceIdScope'                    => [ 'shape' => 'StringWithCharLimit768', ],
				'TagKeyScope'                        => [ 'shape' => 'StringWithCharLimit128', ],
				'TagValueScope'                      => [ 'shape' => 'StringWithCharLimit256', ],
			],
		],
		'OrganizationManagedRuleMetadata'                      => [
			'type'     => 'structure',
			'required' => [ 'RuleIdentifier', ],
			'members'  => [
				'Description'               => [ 'shape' => 'StringWithCharLimit256Min0', ],
				'RuleIdentifier'            => [ 'shape' => 'StringWithCharLimit256', ],
				'InputParameters'           => [ 'shape' => 'StringWithCharLimit2048', ],
				'MaximumExecutionFrequency' => [ 'shape' => 'MaximumExecutionFrequency', ],
				'ResourceTypesScope'        => [ 'shape' => 'ResourceTypesScope', ],
				'ResourceIdScope'           => [ 'shape' => 'StringWithCharLimit768', ],
				'TagKeyScope'               => [ 'shape' => 'StringWithCharLimit128', ],
				'TagValueScope'             => [ 'shape' => 'StringWithCharLimit256', ],
			],
		],
		'OrganizationRuleStatus'                               => [
			'type' => 'string',
			'enum' => [
				'CREATE_SUCCESSFUL',
				'CREATE_IN_PROGRESS',
				'CREATE_FAILED',
				'UPDATE_SUCCESSFUL',
				'UPDATE_FAILED',
				'UPDATE_IN_PROGRESS',
				'DELETE_SUCCESSFUL',
				'DELETE_FAILED',
				'DELETE_IN_PROGRESS',
			],
		],
		'OversizedConfigurationItemException'                  => [
			'type'      => 'structure',
			'members'   => [],
			'exception' => true,
		],
		'Owner'                                                => [
			'type' => 'string',
			'enum' => [ 'CUSTOM_LAMBDA', 'AWS', ],
		],
		'PendingAggregationRequest'                            => [
			'type'    => 'structure',
			'members' => [
				'RequesterAccountId' => [ 'shape' => 'AccountId', ],
				'RequesterAwsRegion' => [ 'shape' => 'AwsRegion', ],
			],
		],
		'PendingAggregationRequestList'                        => [
			'type'   => 'list',
			'member' => [ 'shape' => 'PendingAggregationRequest', ],
		],
		'PutAggregationAuthorizationRequest'                   => [
			'type'     => 'structure',
			'required' => [
				'AuthorizedAccountId',
				'AuthorizedAwsRegion',
			],
			'members'  => [
				'AuthorizedAccountId' => [ 'shape' => 'AccountId', ],
				'AuthorizedAwsRegion' => [ 'shape' => 'AwsRegion', ],
				'Tags'                => [ 'shape' => 'TagsList', ],
			],
		],
		'PutAggregationAuthorizationResponse'                  => [
			'type'    => 'structure',
			'members' => [ 'AggregationAuthorization' => [ 'shape' => 'AggregationAuthorization', ], ],
		],
		'PutConfigRuleRequest'                                 => [
			'type'     => 'structure',
			'required' => [ 'ConfigRule', ],
			'members'  => [
				'ConfigRule' => [ 'shape' => 'ConfigRule', ],
				'Tags'       => [ 'shape' => 'TagsList', ],
			],
		],
		'PutConfigurationAggregatorRequest'                    => [
			'type'     => 'structure',
			'required' => [ 'ConfigurationAggregatorName', ],
			'members'  => [
				'ConfigurationAggregatorName'   => [ 'shape' => 'ConfigurationAggregatorName', ],
				'AccountAggregationSources'     => [ 'shape' => 'AccountAggregationSourceList', ],
				'OrganizationAggregationSource' => [ 'shape' => 'OrganizationAggregationSource', ],
				'Tags'                          => [ 'shape' => 'TagsList', ],
			],
		],
		'PutConfigurationAggregatorResponse'                   => [
			'type'    => 'structure',
			'members' => [ 'ConfigurationAggregator' => [ 'shape' => 'ConfigurationAggregator', ], ],
		],
		'PutConfigurationRecorderRequest'                      => [
			'type'     => 'structure',
			'required' => [ 'ConfigurationRecorder', ],
			'members'  => [ 'ConfigurationRecorder' => [ 'shape' => 'ConfigurationRecorder', ], ],
		],
		'PutDeliveryChannelRequest'                            => [
			'type'     => 'structure',
			'required' => [ 'DeliveryChannel', ],
			'members'  => [ 'DeliveryChannel' => [ 'shape' => 'DeliveryChannel', ], ],
		],
		'PutEvaluationsRequest'                                => [
			'type'     => 'structure',
			'required' => [ 'ResultToken', ],
			'members'  => [
				'Evaluations' => [ 'shape' => 'Evaluations', ],
				'ResultToken' => [ 'shape' => 'String', ],
				'TestMode'    => [ 'shape' => 'Boolean', ],
			],
		],
		'PutEvaluationsResponse'                               => [
			'type'    => 'structure',
			'members' => [ 'FailedEvaluations' => [ 'shape' => 'Evaluations', ], ],
		],
		'PutOrganizationConfigRuleRequest'                     => [
			'type'     => 'structure',
			'required' => [ 'OrganizationConfigRuleName', ],
			'members'  => [
				'OrganizationConfigRuleName'      => [ 'shape' => 'StringWithCharLimit64', ],
				'OrganizationManagedRuleMetadata' => [ 'shape' => 'OrganizationManagedRuleMetadata', ],
				'OrganizationCustomRuleMetadata'  => [ 'shape' => 'OrganizationCustomRuleMetadata', ],
				'ExcludedAccounts'                => [ 'shape' => 'ExcludedAccounts', ],
			],
		],
		'PutOrganizationConfigRuleResponse'                    => [
			'type'    => 'structure',
			'members' => [ 'OrganizationConfigRuleArn' => [ 'shape' => 'StringWithCharLimit256', ], ],
		],
		'PutRemediationConfigurationsRequest'                  => [
			'type'     => 'structure',
			'required' => [ 'RemediationConfigurations', ],
			'members'  => [ 'RemediationConfigurations' => [ 'shape' => 'RemediationConfigurations', ], ],
		],
		'PutRemediationConfigurationsResponse'                 => [
			'type'    => 'structure',
			'members' => [ 'FailedBatches' => [ 'shape' => 'FailedRemediationBatches', ], ],
		],
		'PutRetentionConfigurationRequest'                     => [
			'type'     => 'structure',
			'required' => [ 'RetentionPeriodInDays', ],
			'members'  => [ 'RetentionPeriodInDays' => [ 'shape' => 'RetentionPeriodInDays', ], ],
		],
		'PutRetentionConfigurationResponse'                    => [
			'type'    => 'structure',
			'members' => [ 'RetentionConfiguration' => [ 'shape' => 'RetentionConfiguration', ], ],
		],
		'QueryInfo'                                            => [
			'type'    => 'structure',
			'members' => [ 'SelectFields' => [ 'shape' => 'FieldInfoList', ], ],
		],
		'RecorderName'                                         => [ 'type' => 'string', 'max' => 256, 'min' => 1, ],
		'RecorderStatus'                                       => [
			'type' => 'string',
			'enum' => [ 'Pending', 'Success', 'Failure', ],
		],
		'RecordingGroup'                                       => [
			'type'    => 'structure',
			'members' => [
				'allSupported'               => [ 'shape' => 'AllSupported', ],
				'includeGlobalResourceTypes' => [ 'shape' => 'IncludeGlobalResourceTypes', ],
				'resourceTypes'              => [ 'shape' => 'ResourceTypeList', ],
			],
		],
		'ReevaluateConfigRuleNames'                            => [
			'type'   => 'list',
			'member' => [ 'shape' => 'StringWithCharLimit64', ],
			'max'    => 25,
			'min'    => 1,
		],
		'RelatedEvent'                                         => [ 'type' => 'string', ],
		'RelatedEventList'                                     => [
			'type'   => 'list',
			'member' => [ 'shape' => 'RelatedEvent', ],
		],
		'Relationship'                                         => [
			'type'    => 'structure',
			'members' => [
				'resourceType'     => [ 'shape' => 'ResourceType', ],
				'resourceId'       => [ 'shape' => 'ResourceId', ],
				'resourceName'     => [ 'shape' => 'ResourceName', ],
				'relationshipName' => [ 'shape' => 'RelationshipName', ],
			],
		],
		'RelationshipList'                                     => [
			'type'   => 'list',
			'member' => [ 'shape' => 'Relationship', ],
		],
		'RelationshipName'                                     => [ 'type' => 'string', ],
		'RemediationConfiguration'                             => [
			'type'     => 'structure',
			'required' => [
				'ConfigRuleName',
				'TargetType',
				'TargetId',
			],
			'members'  => [
				'ConfigRuleName' => [ 'shape' => 'StringWithCharLimit64', ],
				'TargetType'     => [ 'shape' => 'RemediationTargetType', ],
				'TargetId'       => [ 'shape' => 'StringWithCharLimit256', ],
				'TargetVersion'  => [ 'shape' => 'String', ],
				'Parameters'     => [ 'shape' => 'RemediationParameters', ],
				'ResourceType'   => [ 'shape' => 'String', ],
			],
		],
		'RemediationConfigurations'                            => [
			'type'   => 'list',
			'member' => [ 'shape' => 'RemediationConfiguration', ],
			'max'    => 25,
			'min'    => 0,
		],
		'RemediationExecutionState'                            => [
			'type' => 'string',
			'enum' => [
				'QUEUED',
				'IN_PROGRESS',
				'SUCCEEDED',
				'FAILED',
			],
		],
		'RemediationExecutionStatus'                           => [
			'type'    => 'structure',
			'members' => [
				'ResourceKey'     => [ 'shape' => 'ResourceKey', ],
				'State'           => [ 'shape' => 'RemediationExecutionState', ],
				'StepDetails'     => [ 'shape' => 'RemediationExecutionSteps', ],
				'InvocationTime'  => [ 'shape' => 'Date', ],
				'LastUpdatedTime' => [ 'shape' => 'Date', ],
			],
		],
		'RemediationExecutionStatuses'                         => [
			'type'   => 'list',
			'member' => [ 'shape' => 'RemediationExecutionStatus', ],
		],
		'RemediationExecutionStep'                             => [
			'type'    => 'structure',
			'members' => [
				'Name'         => [ 'shape' => 'String', ],
				'State'        => [ 'shape' => 'RemediationExecutionStepState', ],
				'ErrorMessage' => [ 'shape' => 'String', ],
				'StartTime'    => [ 'shape' => 'Date', ],
				'StopTime'     => [ 'shape' => 'Date', ],
			],
		],
		'RemediationExecutionStepState'                        => [
			'type' => 'string',
			'enum' => [ 'SUCCEEDED', 'PENDING', 'FAILED', ],
		],
		'RemediationExecutionSteps'                            => [
			'type'   => 'list',
			'member' => [ 'shape' => 'RemediationExecutionStep', ],
		],
		'RemediationInProgressException'                       => [
			'type'      => 'structure',
			'members'   => [],
			'exception' => true,
		],
		'RemediationParameterValue'                            => [
			'type'    => 'structure',
			'members' => [
				'ResourceValue' => [ 'shape' => 'ResourceValue', ],
				'StaticValue'   => [ 'shape' => 'StaticValue', ],
			],
		],
		'RemediationParameters'                                => [
			'type'  => 'map',
			'key'   => [ 'shape' => 'StringWithCharLimit256', ],
			'value' => [ 'shape' => 'RemediationParameterValue', ],
			'max'   => 25,
			'min'   => 0,
		],
		'RemediationTargetType'                                => [
			'type' => 'string',
			'enum' => [ 'SSM_DOCUMENT', ],
		],
		'ResourceCount'                                        => [
			'type'    => 'structure',
			'members' => [
				'resourceType' => [ 'shape' => 'ResourceType', ],
				'count'        => [ 'shape' => 'Long', ],
			],
		],
		'ResourceCountFilters'                                 => [
			'type'    => 'structure',
			'members' => [
				'ResourceType' => [ 'shape' => 'ResourceType', ],
				'AccountId'    => [ 'shape' => 'AccountId', ],
				'Region'       => [ 'shape' => 'AwsRegion', ],
			],
		],
		'ResourceCountGroupKey'                                => [
			'type' => 'string',
			'enum' => [
				'RESOURCE_TYPE',
				'ACCOUNT_ID',
				'AWS_REGION',
			],
		],
		'ResourceCounts'                                       => [
			'type'   => 'list',
			'member' => [ 'shape' => 'ResourceCount', ],
		],
		'ResourceCreationTime'                                 => [ 'type' => 'timestamp', ],
		'ResourceDeletionTime'                                 => [ 'type' => 'timestamp', ],
		'ResourceFilters'                                      => [
			'type'    => 'structure',
			'members' => [
				'AccountId'    => [ 'shape' => 'AccountId', ],
				'ResourceId'   => [ 'shape' => 'ResourceId', ],
				'ResourceName' => [ 'shape' => 'ResourceName', ],
				'Region'       => [ 'shape' => 'AwsRegion', ],
			],
		],
		'ResourceId'                                           => [ 'type' => 'string', 'max' => 768, 'min' => 1, ],
		'ResourceIdList'                                       => [
			'type'   => 'list',
			'member' => [ 'shape' => 'ResourceId', ],
		],
		'ResourceIdentifier'                                   => [
			'type'    => 'structure',
			'members' => [
				'resourceType'         => [ 'shape' => 'ResourceType', ],
				'resourceId'           => [ 'shape' => 'ResourceId', ],
				'resourceName'         => [ 'shape' => 'ResourceName', ],
				'resourceDeletionTime' => [ 'shape' => 'ResourceDeletionTime', ],
			],
		],
		'ResourceIdentifierList'                               => [
			'type'   => 'list',
			'member' => [ 'shape' => 'ResourceIdentifier', ],
		],
		'ResourceIdentifiersList'                              => [
			'type'   => 'list',
			'member' => [ 'shape' => 'AggregateResourceIdentifier', ],
			'max'    => 100,
			'min'    => 1,
		],
		'ResourceInUseException'                               => [
			'type'      => 'structure',
			'members'   => [],
			'exception' => true,
		],
		'ResourceKey'                                          => [
			'type'     => 'structure',
			'required' => [ 'resourceType', 'resourceId', ],
			'members'  => [
				'resourceType' => [ 'shape' => 'ResourceType', ],
				'resourceId'   => [ 'shape' => 'ResourceId', ],
			],
		],
		'ResourceKeys'                                         => [
			'type'   => 'list',
			'member' => [ 'shape' => 'ResourceKey', ],
			'max'    => 100,
			'min'    => 1,
		],
		'ResourceName'                                         => [ 'type' => 'string', ],
		'ResourceNotDiscoveredException'                       => [
			'type'      => 'structure',
			'members'   => [],
			'exception' => true,
		],
		'ResourceNotFoundException'                            => [
			'type'      => 'structure',
			'members'   => [],
			'exception' => true,
		],
		'ResourceType'                                         => [
			'type' => 'string',
			'enum' => [
				'AWS::EC2::CustomerGateway',
				'AWS::EC2::EIP',
				'AWS::EC2::Host',
				'AWS::EC2::Instance',
				'AWS::EC2::InternetGateway',
				'AWS::EC2::NetworkAcl',
				'AWS::EC2::NetworkInterface',
				'AWS::EC2::RouteTable',
				'AWS::EC2::SecurityGroup',
				'AWS::EC2::Subnet',
				'AWS::CloudTrail::Trail',
				'AWS::EC2::Volume',
				'AWS::EC2::VPC',
				'AWS::EC2::VPNConnection',
				'AWS::EC2::VPNGateway',
				'AWS::IAM::Group',
				'AWS::IAM::Policy',
				'AWS::IAM::Role',
				'AWS::IAM::User',
				'AWS::ACM::Certificate',
				'AWS::RDS::DBInstance',
				'AWS::RDS::DBSubnetGroup',
				'AWS::RDS::DBSecurityGroup',
				'AWS::RDS::DBSnapshot',
				'AWS::RDS::EventSubscription',
				'AWS::ElasticLoadBalancingV2::LoadBalancer',
				'AWS::S3::Bucket',
				'AWS::SSM::ManagedInstanceInventory',
				'AWS::Redshift::Cluster',
				'AWS::Redshift::ClusterSnapshot',
				'AWS::Redshift::ClusterParameterGroup',
				'AWS::Redshift::ClusterSecurityGroup',
				'AWS::Redshift::ClusterSubnetGroup',
				'AWS::Redshift::EventSubscription',
				'AWS::CloudWatch::Alarm',
				'AWS::CloudFormation::Stack',
				'AWS::DynamoDB::Table',
				'AWS::AutoScaling::AutoScalingGroup',
				'AWS::AutoScaling::LaunchConfiguration',
				'AWS::AutoScaling::ScalingPolicy',
				'AWS::AutoScaling::ScheduledAction',
				'AWS::CodeBuild::Project',
				'AWS::WAF::RateBasedRule',
				'AWS::WAF::Rule',
				'AWS::WAF::WebACL',
				'AWS::WAFRegional::RateBasedRule',
				'AWS::WAFRegional::Rule',
				'AWS::WAFRegional::WebACL',
				'AWS::CloudFront::Distribution',
				'AWS::CloudFront::StreamingDistribution',
				'AWS::WAF::RuleGroup',
				'AWS::WAFRegional::RuleGroup',
				'AWS::Lambda::Function',
				'AWS::ElasticBeanstalk::Application',
				'AWS::ElasticBeanstalk::ApplicationVersion',
				'AWS::ElasticBeanstalk::Environment',
				'AWS::ElasticLoadBalancing::LoadBalancer',
				'AWS::XRay::EncryptionConfig',
				'AWS::SSM::AssociationCompliance',
				'AWS::SSM::PatchCompliance',
				'AWS::Shield::Protection',
				'AWS::ShieldRegional::Protection',
				'AWS::Config::ResourceCompliance',
				'AWS::CodePipeline::Pipeline',
			],
		],
		'ResourceTypeList'                                     => [
			'type'   => 'list',
			'member' => [ 'shape' => 'ResourceType', ],
		],
		'ResourceTypes'                                        => [
			'type'   => 'list',
			'member' => [ 'shape' => 'StringWithCharLimit256', ],
			'max'    => 20,
			'min'    => 0,
		],
		'ResourceTypesScope'                                   => [
			'type'   => 'list',
			'member' => [ 'shape' => 'StringWithCharLimit256', ],
			'max'    => 100,
			'min'    => 0,
		],
		'ResourceValue'                                        => [
			'type'    => 'structure',
			'members' => [ 'Value' => [ 'shape' => 'ResourceValueType', ], ],
		],
		'ResourceValueType'                                    => [ 'type' => 'string', 'enum' => [ 'RESOURCE_ID', ], ],
		'Results'                                              => [
			'type'   => 'list',
			'member' => [ 'shape' => 'String', ],
		],
		'RetentionConfiguration'                               => [
			'type'     => 'structure',
			'required' => [ 'Name', 'RetentionPeriodInDays', ],
			'members'  => [
				'Name'                  => [ 'shape' => 'RetentionConfigurationName', ],
				'RetentionPeriodInDays' => [ 'shape' => 'RetentionPeriodInDays', ],
			],
		],
		'RetentionConfigurationList'                           => [
			'type'   => 'list',
			'member' => [ 'shape' => 'RetentionConfiguration', ],
		],
		'RetentionConfigurationName'                           => [
			'type'    => 'string',
			'max'     => 256,
			'min'     => 1,
			'pattern' => '[\\w\\-]+',
		],
		'RetentionConfigurationNameList'                       => [
			'type'   => 'list',
			'member' => [ 'shape' => 'RetentionConfigurationName', ],
			'max'    => 1,
			'min'    => 0,
		],
		'RetentionPeriodInDays'                                => [ 'type' => 'integer', 'max' => 2557, 'min' => 30, ],
		'RuleLimit'                                            => [ 'type' => 'integer', 'max' => 50, 'min' => 0, ],
		'Scope'                                                => [
			'type'    => 'structure',
			'members' => [
				'ComplianceResourceTypes' => [ 'shape' => 'ComplianceResourceTypes', ],
				'TagKey'                  => [ 'shape' => 'StringWithCharLimit128', ],
				'TagValue'                => [ 'shape' => 'StringWithCharLimit256', ],
				'ComplianceResourceId'    => [ 'shape' => 'BaseResourceId', ],
			],
		],
		'SelectResourceConfigRequest'                          => [
			'type'     => 'structure',
			'required' => [ 'Expression', ],
			'members'  => [
				'Expression' => [ 'shape' => 'Expression', ],
				'Limit'      => [ 'shape' => 'Limit', ],
				'NextToken'  => [ 'shape' => 'NextToken', ],
			],
		],
		'SelectResourceConfigResponse'                         => [
			'type'    => 'structure',
			'members' => [
				'Results'   => [ 'shape' => 'Results', ],
				'QueryInfo' => [ 'shape' => 'QueryInfo', ],
				'NextToken' => [ 'shape' => 'NextToken', ],
			],
		],
		'Source'                                               => [
			'type'     => 'structure',
			'required' => [ 'Owner', 'SourceIdentifier', ],
			'members'  => [
				'Owner'            => [ 'shape' => 'Owner', ],
				'SourceIdentifier' => [ 'shape' => 'StringWithCharLimit256', ],
				'SourceDetails'    => [ 'shape' => 'SourceDetails', ],
			],
		],
		'SourceDetail'                                         => [
			'type'    => 'structure',
			'members' => [
				'EventSource'               => [ 'shape' => 'EventSource', ],
				'MessageType'               => [ 'shape' => 'MessageType', ],
				'MaximumExecutionFrequency' => [ 'shape' => 'MaximumExecutionFrequency', ],
			],
		],
		'SourceDetails'                                        => [
			'type'   => 'list',
			'member' => [ 'shape' => 'SourceDetail', ],
			'max'    => 25,
			'min'    => 0,
		],
		'StartConfigRulesEvaluationRequest'                    => [
			'type'    => 'structure',
			'members' => [ 'ConfigRuleNames' => [ 'shape' => 'ReevaluateConfigRuleNames', ], ],
		],
		'StartConfigRulesEvaluationResponse'                   => [ 'type' => 'structure', 'members' => [], ],
		'StartConfigurationRecorderRequest'                    => [
			'type'     => 'structure',
			'required' => [ 'ConfigurationRecorderName', ],
			'members'  => [ 'ConfigurationRecorderName' => [ 'shape' => 'RecorderName', ], ],
		],
		'StartRemediationExecutionRequest'                     => [
			'type'     => 'structure',
			'required' => [ 'ConfigRuleName', 'ResourceKeys', ],
			'members'  => [
				'ConfigRuleName' => [ 'shape' => 'StringWithCharLimit64', ],
				'ResourceKeys'   => [ 'shape' => 'ResourceKeys', ],
			],
		],
		'StartRemediationExecutionResponse'                    => [
			'type'    => 'structure',
			'members' => [
				'FailureMessage' => [ 'shape' => 'String', ],
				'FailedItems'    => [ 'shape' => 'ResourceKeys', ],
			],
		],
		'StaticParameterValues'                                => [
			'type'   => 'list',
			'member' => [ 'shape' => 'StringWithCharLimit256', ],
			'max'    => 25,
			'min'    => 0,
		],
		'StaticValue'                                          => [
			'type'    => 'structure',
			'members' => [ 'Values' => [ 'shape' => 'StaticParameterValues', ], ],
		],
		'StatusDetailFilters'                                  => [
			'type'    => 'structure',
			'members' => [
				'AccountId'               => [ 'shape' => 'AccountId', ],
				'MemberAccountRuleStatus' => [ 'shape' => 'MemberAccountRuleStatus', ],
			],
		],
		'StopConfigurationRecorderRequest'                     => [
			'type'     => 'structure',
			'required' => [ 'ConfigurationRecorderName', ],
			'members'  => [ 'ConfigurationRecorderName' => [ 'shape' => 'RecorderName', ], ],
		],
		'String'                                               => [ 'type' => 'string', ],
		'StringWithCharLimit1024'                              => [ 'type' => 'string', 'max' => 1024, 'min' => 1, ],
		'StringWithCharLimit128'                               => [ 'type' => 'string', 'max' => 128, 'min' => 1, ],
		'StringWithCharLimit2048'                              => [ 'type' => 'string', 'max' => 2048, 'min' => 1, ],
		'StringWithCharLimit256'                               => [ 'type' => 'string', 'max' => 256, 'min' => 1, ],
		'StringWithCharLimit256Min0'                           => [ 'type' => 'string', 'max' => 256, 'min' => 0, ],
		'StringWithCharLimit64'                                => [ 'type' => 'string', 'max' => 64, 'min' => 1, ],
		'StringWithCharLimit768'                               => [ 'type' => 'string', 'max' => 768, 'min' => 1, ],
		'SupplementaryConfiguration'                           => [
			'type'  => 'map',
			'key'   => [ 'shape' => 'SupplementaryConfigurationName', ],
			'value' => [ 'shape' => 'SupplementaryConfigurationValue', ],
		],
		'SupplementaryConfigurationName'                       => [ 'type' => 'string', ],
		'SupplementaryConfigurationValue'                      => [ 'type' => 'string', ],
		'Tag'                                                  => [
			'type'    => 'structure',
			'members' => [
				'Key'   => [ 'shape' => 'TagKey', ],
				'Value' => [ 'shape' => 'TagValue', ],
			],
		],
		'TagKey'                                               => [ 'type' => 'string', 'max' => 128, 'min' => 1, ],
		'TagKeyList'                                           => [
			'type'   => 'list',
			'member' => [ 'shape' => 'TagKey', ],
			'max'    => 50,
			'min'    => 1,
		],
		'TagList'                                              => [
			'type'   => 'list',
			'member' => [ 'shape' => 'Tag', ],
			'max'    => 50,
			'min'    => 1,
		],
		'TagResourceRequest'                                   => [
			'type'     => 'structure',
			'required' => [ 'ResourceArn', 'Tags', ],
			'members'  => [
				'ResourceArn' => [ 'shape' => 'AmazonResourceName', ],
				'Tags'        => [ 'shape' => 'TagList', ],
			],
		],
		'TagValue'                                             => [ 'type' => 'string', 'max' => 256, 'min' => 0, ],
		'Tags'                                                 => [
			'type'  => 'map',
			'key'   => [ 'shape' => 'Name', ],
			'value' => [ 'shape' => 'Value', ],
		],
		'TagsList'                                             => [
			'type'   => 'list',
			'member' => [ 'shape' => 'Tag', ],
			'max'    => 50,
			'min'    => 0,
		],
		'TooManyTagsException'                                 => [
			'type'      => 'structure',
			'members'   => [],
			'exception' => true,
		],
		'UnprocessedResourceIdentifierList'                    => [
			'type'   => 'list',
			'member' => [ 'shape' => 'AggregateResourceIdentifier', ],
		],
		'UntagResourceRequest'                                 => [
			'type'     => 'structure',
			'required' => [ 'ResourceArn', 'TagKeys', ],
			'members'  => [
				'ResourceArn' => [ 'shape' => 'AmazonResourceName', ],
				'TagKeys'     => [ 'shape' => 'TagKeyList', ],
			],
		],
		'ValidationException'                                  => [
			'type'      => 'structure',
			'members'   => [],
			'exception' => true,
		],
		'Value'                                                => [ 'type' => 'string', ],
		'Version'                                              => [ 'type' => 'string', ],
	],
];
