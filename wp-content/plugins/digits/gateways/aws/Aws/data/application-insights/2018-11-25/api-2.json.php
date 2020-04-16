<?php
// This file was auto-generated from sdk-root/src/data/application-insights/2018-11-25/api-2.json
return [
	'version'    => '2.0',
	'metadata'   => [
		'apiVersion'          => '2018-11-25',
		'endpointPrefix'      => 'applicationinsights',
		'jsonVersion'         => '1.1',
		'protocol'            => 'json',
		'serviceAbbreviation' => 'Application Insights',
		'serviceFullName'     => 'Amazon CloudWatch Application Insights',
		'serviceId'           => 'Application Insights',
		'signatureVersion'    => 'v4',
		'signingName'         => 'applicationinsights',
		'targetPrefix'        => 'EC2WindowsBarleyService',
		'uid'                 => 'application-insights-2018-11-25',
	],
	'operations' => [
		'CreateApplication'                            => [
			'name'   => 'CreateApplication',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateApplicationRequest', ],
			'output' => [ 'shape' => 'CreateApplicationResponse', ],
			'errors' => [
				[ 'shape' => 'ResourceInUseException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'ValidationException', ],
				[ 'shape' => 'InternalServerException', ],
			],
		],
		'CreateComponent'                              => [
			'name'   => 'CreateComponent',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'CreateComponentRequest', ],
			'output' => [ 'shape' => 'CreateComponentResponse', ],
			'errors' => [
				[ 'shape' => 'ResourceInUseException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'ValidationException', ],
				[ 'shape' => 'InternalServerException', ],
			],
		],
		'DeleteApplication'                            => [
			'name'   => 'DeleteApplication',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteApplicationRequest', ],
			'output' => [ 'shape' => 'DeleteApplicationResponse', ],
			'errors' => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'ValidationException', ],
				[ 'shape' => 'BadRequestException', ],
				[ 'shape' => 'InternalServerException', ],
			],
		],
		'DeleteComponent'                              => [
			'name'   => 'DeleteComponent',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DeleteComponentRequest', ],
			'output' => [ 'shape' => 'DeleteComponentResponse', ],
			'errors' => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'ValidationException', ],
				[ 'shape' => 'InternalServerException', ],
			],
		],
		'DescribeApplication'                          => [
			'name'   => 'DescribeApplication',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeApplicationRequest', ],
			'output' => [ 'shape' => 'DescribeApplicationResponse', ],
			'errors' => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'ValidationException', ],
				[ 'shape' => 'InternalServerException', ],
			],
		],
		'DescribeComponent'                            => [
			'name'   => 'DescribeComponent',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeComponentRequest', ],
			'output' => [ 'shape' => 'DescribeComponentResponse', ],
			'errors' => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'ValidationException', ],
				[ 'shape' => 'InternalServerException', ],
			],
		],
		'DescribeComponentConfiguration'               => [
			'name'   => 'DescribeComponentConfiguration',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeComponentConfigurationRequest', ],
			'output' => [ 'shape' => 'DescribeComponentConfigurationResponse', ],
			'errors' => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'ValidationException', ],
				[ 'shape' => 'InternalServerException', ],
			],
		],
		'DescribeComponentConfigurationRecommendation' => [
			'name'   => 'DescribeComponentConfigurationRecommendation',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeComponentConfigurationRecommendationRequest', ],
			'output' => [ 'shape' => 'DescribeComponentConfigurationRecommendationResponse', ],
			'errors' => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'ValidationException', ],
				[ 'shape' => 'InternalServerException', ],
			],
		],
		'DescribeObservation'                          => [
			'name'   => 'DescribeObservation',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeObservationRequest', ],
			'output' => [ 'shape' => 'DescribeObservationResponse', ],
			'errors' => [
				[ 'shape' => 'InternalServerException', ],
				[ 'shape' => 'ValidationException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
			],
		],
		'DescribeProblem'                              => [
			'name'   => 'DescribeProblem',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeProblemRequest', ],
			'output' => [ 'shape' => 'DescribeProblemResponse', ],
			'errors' => [
				[ 'shape' => 'InternalServerException', ],
				[ 'shape' => 'ValidationException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
			],
		],
		'DescribeProblemObservations'                  => [
			'name'   => 'DescribeProblemObservations',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'DescribeProblemObservationsRequest', ],
			'output' => [ 'shape' => 'DescribeProblemObservationsResponse', ],
			'errors' => [
				[ 'shape' => 'InternalServerException', ],
				[ 'shape' => 'ValidationException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
			],
		],
		'ListApplications'                             => [
			'name'   => 'ListApplications',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ListApplicationsRequest', ],
			'output' => [ 'shape' => 'ListApplicationsResponse', ],
			'errors' => [
				[ 'shape' => 'ValidationException', ],
				[ 'shape' => 'InternalServerException', ],
			],
		],
		'ListComponents'                               => [
			'name'   => 'ListComponents',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ListComponentsRequest', ],
			'output' => [ 'shape' => 'ListComponentsResponse', ],
			'errors' => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'ValidationException', ],
				[ 'shape' => 'InternalServerException', ],
			],
		],
		'ListProblems'                                 => [
			'name'   => 'ListProblems',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'ListProblemsRequest', ],
			'output' => [ 'shape' => 'ListProblemsResponse', ],
			'errors' => [
				[ 'shape' => 'ValidationException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'InternalServerException', ],
			],
		],
		'UpdateComponent'                              => [
			'name'   => 'UpdateComponent',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'UpdateComponentRequest', ],
			'output' => [ 'shape' => 'UpdateComponentResponse', ],
			'errors' => [
				[ 'shape' => 'ResourceInUseException', ],
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'ValidationException', ],
				[ 'shape' => 'InternalServerException', ],
			],
		],
		'UpdateComponentConfiguration'                 => [
			'name'   => 'UpdateComponentConfiguration',
			'http'   => [ 'method' => 'POST', 'requestUri' => '/', ],
			'input'  => [ 'shape' => 'UpdateComponentConfigurationRequest', ],
			'output' => [ 'shape' => 'UpdateComponentConfigurationResponse', ],
			'errors' => [
				[ 'shape' => 'ResourceNotFoundException', ],
				[ 'shape' => 'ValidationException', ],
				[ 'shape' => 'InternalServerException', ],
			],
		],
	],
	'shapes'     => [
		'AffectedResource'                                     => [ 'type' => 'string', ],
		'ApplicationComponent'                                 => [
			'type'    => 'structure',
			'members' => [
				'ComponentName' => [ 'shape' => 'ComponentName', ],
				'ResourceType'  => [ 'shape' => 'ResourceType', ],
				'Tier'          => [ 'shape' => 'Tier', ],
				'Monitor'       => [ 'shape' => 'Monitor', ],
			],
		],
		'ApplicationComponentList'                             => [
			'type'   => 'list',
			'member' => [ 'shape' => 'ApplicationComponent', ],
		],
		'ApplicationInfo'                                      => [
			'type'    => 'structure',
			'members' => [
				'ResourceGroupName' => [ 'shape' => 'ResourceGroupName', ],
				'LifeCycle'         => [ 'shape' => 'LifeCycle', ],
				'Remarks'           => [ 'shape' => 'Remarks', ],
			],
		],
		'ApplicationInfoList'                                  => [
			'type'   => 'list',
			'member' => [ 'shape' => 'ApplicationInfo', ],
		],
		'BadRequestException'                                  => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'ErrorMsg', ], ],
			'exception' => true,
		],
		'ComponentConfiguration'                               => [ 'type' => 'string', ],
		'ComponentName'                                        => [ 'type' => 'string', ],
		'CreateApplicationRequest'                             => [
			'type'     => 'structure',
			'required' => [ 'ResourceGroupName', ],
			'members'  => [ 'ResourceGroupName' => [ 'shape' => 'ResourceGroupName', ], ],
		],
		'CreateApplicationResponse'                            => [
			'type'    => 'structure',
			'members' => [ 'ApplicationInfo' => [ 'shape' => 'ApplicationInfo', ], ],
		],
		'CreateComponentRequest'                               => [
			'type'     => 'structure',
			'required' => [ 'ResourceGroupName', 'ComponentName', 'ResourceList', ],
			'members'  => [
				'ResourceGroupName' => [ 'shape' => 'ResourceGroupName', ],
				'ComponentName'     => [ 'shape' => 'ComponentName', ],
				'ResourceList'      => [ 'shape' => 'ResourceList', ],
			],
		],
		'CreateComponentResponse'                              => [ 'type' => 'structure', 'members' => [], ],
		'DeleteApplicationRequest'                             => [
			'type'     => 'structure',
			'required' => [ 'ResourceGroupName', ],
			'members'  => [ 'ResourceGroupName' => [ 'shape' => 'ResourceGroupName', ], ],
		],
		'DeleteApplicationResponse'                            => [ 'type' => 'structure', 'members' => [], ],
		'DeleteComponentRequest'                               => [
			'type'     => 'structure',
			'required' => [ 'ResourceGroupName', 'ComponentName', ],
			'members'  => [
				'ResourceGroupName' => [ 'shape' => 'ResourceGroupName', ],
				'ComponentName'     => [ 'shape' => 'ComponentName', ],
			],
		],
		'DeleteComponentResponse'                              => [ 'type' => 'structure', 'members' => [], ],
		'DescribeApplicationRequest'                           => [
			'type'     => 'structure',
			'required' => [ 'ResourceGroupName', ],
			'members'  => [ 'ResourceGroupName' => [ 'shape' => 'ResourceGroupName', ], ],
		],
		'DescribeApplicationResponse'                          => [
			'type'    => 'structure',
			'members' => [ 'ApplicationInfo' => [ 'shape' => 'ApplicationInfo', ], ],
		],
		'DescribeComponentConfigurationRecommendationRequest'  => [
			'type'     => 'structure',
			'required' => [
				'ResourceGroupName',
				'ComponentName',
				'Tier',
			],
			'members'  => [
				'ResourceGroupName' => [ 'shape' => 'ResourceGroupName', ],
				'ComponentName'     => [ 'shape' => 'ComponentName', ],
				'Tier'              => [ 'shape' => 'Tier', ],
			],
		],
		'DescribeComponentConfigurationRecommendationResponse' => [
			'type'    => 'structure',
			'members' => [ 'ComponentConfiguration' => [ 'shape' => 'ComponentConfiguration', ], ],
		],
		'DescribeComponentConfigurationRequest'                => [
			'type'     => 'structure',
			'required' => [
				'ResourceGroupName',
				'ComponentName',
			],
			'members'  => [
				'ResourceGroupName' => [ 'shape' => 'ResourceGroupName', ],
				'ComponentName'     => [ 'shape' => 'ComponentName', ],
			],
		],
		'DescribeComponentConfigurationResponse'               => [
			'type'    => 'structure',
			'members' => [
				'Monitor'                => [ 'shape' => 'Monitor', ],
				'Tier'                   => [ 'shape' => 'Tier', ],
				'ComponentConfiguration' => [ 'shape' => 'ComponentConfiguration', ],
			],
		],
		'DescribeComponentRequest'                             => [
			'type'     => 'structure',
			'required' => [
				'ResourceGroupName',
				'ComponentName',
			],
			'members'  => [
				'ResourceGroupName' => [ 'shape' => 'ResourceGroupName', ],
				'ComponentName'     => [ 'shape' => 'ComponentName', ],
			],
		],
		'DescribeComponentResponse'                            => [
			'type'    => 'structure',
			'members' => [
				'ApplicationComponent' => [ 'shape' => 'ApplicationComponent', ],
				'ResourceList'         => [ 'shape' => 'ResourceList', ],
			],
		],
		'DescribeObservationRequest'                           => [
			'type'     => 'structure',
			'required' => [ 'ObservationId', ],
			'members'  => [ 'ObservationId' => [ 'shape' => 'ObservationId', ], ],
		],
		'DescribeObservationResponse'                          => [
			'type'    => 'structure',
			'members' => [ 'Observation' => [ 'shape' => 'Observation', ], ],
		],
		'DescribeProblemObservationsRequest'                   => [
			'type'     => 'structure',
			'required' => [ 'ProblemId', ],
			'members'  => [ 'ProblemId' => [ 'shape' => 'ProblemId', ], ],
		],
		'DescribeProblemObservationsResponse'                  => [
			'type'    => 'structure',
			'members' => [ 'RelatedObservations' => [ 'shape' => 'RelatedObservations', ], ],
		],
		'DescribeProblemRequest'                               => [
			'type'     => 'structure',
			'required' => [ 'ProblemId', ],
			'members'  => [ 'ProblemId' => [ 'shape' => 'ProblemId', ], ],
		],
		'DescribeProblemResponse'                              => [
			'type'    => 'structure',
			'members' => [ 'Problem' => [ 'shape' => 'Problem', ], ],
		],
		'EndTime'                                              => [ 'type' => 'timestamp', ],
		'ErrorMsg'                                             => [ 'type' => 'string', ],
		'Feedback'                                             => [
			'type'  => 'map',
			'key'   => [ 'shape' => 'FeedbackKey', ],
			'value' => [ 'shape' => 'FeedbackValue', ],
			'max'   => 10,
		],
		'FeedbackKey'                                          => [
			'type' => 'string',
			'enum' => [ 'INSIGHTS_FEEDBACK', ],
		],
		'FeedbackValue'                                        => [
			'type' => 'string',
			'enum' => [
				'NOT_SPECIFIED',
				'USEFUL',
				'NOT_USEFUL',
			],
		],
		'Insights'                                             => [ 'type' => 'string', ],
		'InternalServerException'                              => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'ErrorMsg', ], ],
			'exception' => true,
		],
		'LifeCycle'                                            => [ 'type' => 'string', ],
		'LineTime'                                             => [ 'type' => 'timestamp', ],
		'ListApplicationsRequest'                              => [
			'type'    => 'structure',
			'members' => [
				'MaxResults' => [ 'shape' => 'MaxEntities', ],
				'NextToken'  => [ 'shape' => 'PaginationToken', ],
			],
		],
		'ListApplicationsResponse'                             => [
			'type'    => 'structure',
			'members' => [
				'ApplicationInfoList' => [ 'shape' => 'ApplicationInfoList', ],
				'NextToken'           => [ 'shape' => 'PaginationToken', ],
			],
		],
		'ListComponentsRequest'                                => [
			'type'     => 'structure',
			'required' => [ 'ResourceGroupName', ],
			'members'  => [
				'ResourceGroupName' => [ 'shape' => 'ResourceGroupName', ],
				'MaxResults'        => [ 'shape' => 'MaxEntities', ],
				'NextToken'         => [ 'shape' => 'PaginationToken', ],
			],
		],
		'ListComponentsResponse'                               => [
			'type'    => 'structure',
			'members' => [
				'ApplicationComponentList' => [ 'shape' => 'ApplicationComponentList', ],
				'NextToken'                => [ 'shape' => 'PaginationToken', ],
			],
		],
		'ListProblemsRequest'                                  => [
			'type'    => 'structure',
			'members' => [
				'ResourceGroupName' => [ 'shape' => 'ResourceGroupName', ],
				'StartTime'         => [ 'shape' => 'StartTime', ],
				'EndTime'           => [ 'shape' => 'EndTime', ],
				'MaxResults'        => [ 'shape' => 'MaxEntities', ],
				'NextToken'         => [ 'shape' => 'PaginationToken', ],
			],
		],
		'ListProblemsResponse'                                 => [
			'type'    => 'structure',
			'members' => [
				'ProblemList' => [ 'shape' => 'ProblemList', ],
				'NextToken'   => [ 'shape' => 'PaginationToken', ],
			],
		],
		'LogFilter'                                            => [
			'type' => 'string',
			'enum' => [ 'ERROR', 'WARN', 'INFO', ],
		],
		'LogGroup'                                             => [ 'type' => 'string', ],
		'LogText'                                              => [ 'type' => 'string', ],
		'MaxEntities'                                          => [ 'type' => 'integer', 'max' => 40, 'min' => 1, ],
		'MetricName'                                           => [ 'type' => 'string', ],
		'MetricNamespace'                                      => [ 'type' => 'string', ],
		'Monitor'                                              => [ 'type' => 'boolean', ],
		'NewComponentName'                                     => [ 'type' => 'string', ],
		'Observation'                                          => [
			'type'    => 'structure',
			'members' => [
				'Id'              => [ 'shape' => 'ObservationId', ],
				'StartTime'       => [ 'shape' => 'StartTime', ],
				'EndTime'         => [ 'shape' => 'EndTime', ],
				'SourceType'      => [ 'shape' => 'SourceType', ],
				'SourceARN'       => [ 'shape' => 'SourceARN', ],
				'LogGroup'        => [ 'shape' => 'LogGroup', ],
				'LineTime'        => [ 'shape' => 'LineTime', ],
				'LogText'         => [ 'shape' => 'LogText', ],
				'LogFilter'       => [ 'shape' => 'LogFilter', ],
				'MetricNamespace' => [ 'shape' => 'MetricNamespace', ],
				'MetricName'      => [ 'shape' => 'MetricName', ],
				'Unit'            => [ 'shape' => 'Unit', ],
				'Value'           => [ 'shape' => 'Value', ],
			],
		],
		'ObservationId'                                        => [ 'type' => 'string', ],
		'ObservationList'                                      => [
			'type'   => 'list',
			'member' => [ 'shape' => 'Observation', ],
		],
		'PaginationToken'                                      => [ 'type' => 'string', ],
		'Problem'                                              => [
			'type'    => 'structure',
			'members' => [
				'Id'                => [ 'shape' => 'ProblemId', ],
				'Title'             => [ 'shape' => 'Title', ],
				'Insights'          => [ 'shape' => 'Insights', ],
				'Status'            => [ 'shape' => 'Status', ],
				'AffectedResource'  => [ 'shape' => 'AffectedResource', ],
				'StartTime'         => [ 'shape' => 'StartTime', ],
				'EndTime'           => [ 'shape' => 'EndTime', ],
				'SeverityLevel'     => [ 'shape' => 'SeverityLevel', ],
				'ResourceGroupName' => [ 'shape' => 'ResourceGroupName', ],
				'Feedback'          => [ 'shape' => 'Feedback', ],
			],
		],
		'ProblemId'                                            => [ 'type' => 'string', ],
		'ProblemList'                                          => [
			'type'   => 'list',
			'member' => [ 'shape' => 'Problem', ],
		],
		'RelatedObservations'                                  => [
			'type'    => 'structure',
			'members' => [ 'ObservationList' => [ 'shape' => 'ObservationList', ], ],
		],
		'Remarks'                                              => [ 'type' => 'string', ],
		'ResourceARN'                                          => [ 'type' => 'string', ],
		'ResourceGroupName'                                    => [ 'type' => 'string', ],
		'ResourceInUseException'                               => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'ErrorMsg', ], ],
			'exception' => true,
		],
		'ResourceList'                                         => [
			'type'   => 'list',
			'member' => [ 'shape' => 'ResourceARN', ],
		],
		'ResourceNotFoundException'                            => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'ErrorMsg', ], ],
			'exception' => true,
		],
		'ResourceType'                                         => [ 'type' => 'string', ],
		'SeverityLevel'                                        => [
			'type' => 'string',
			'enum' => [ 'LOW', 'MEDIUM', 'HIGH', ],
		],
		'SourceARN'                                            => [ 'type' => 'string', ],
		'SourceType'                                           => [ 'type' => 'string', ],
		'StartTime'                                            => [ 'type' => 'timestamp', ],
		'Status'                                               => [
			'type' => 'string',
			'enum' => [ 'IGNORE', 'RESOLVED', 'PENDING', ],
		],
		'Tier'                                                 => [ 'type' => 'string', ],
		'Title'                                                => [ 'type' => 'string', ],
		'Unit'                                                 => [ 'type' => 'string', ],
		'UpdateComponentConfigurationRequest'                  => [
			'type'     => 'structure',
			'required' => [
				'ResourceGroupName',
				'ComponentName',
			],
			'members'  => [
				'ResourceGroupName'      => [ 'shape' => 'ResourceGroupName', ],
				'ComponentName'          => [ 'shape' => 'ComponentName', ],
				'Monitor'                => [ 'shape' => 'Monitor', ],
				'Tier'                   => [ 'shape' => 'Tier', ],
				'ComponentConfiguration' => [ 'shape' => 'ComponentConfiguration', ],
			],
		],
		'UpdateComponentConfigurationResponse'                 => [ 'type' => 'structure', 'members' => [], ],
		'UpdateComponentRequest'                               => [
			'type'     => 'structure',
			'required' => [
				'ResourceGroupName',
				'ComponentName',
			],
			'members'  => [
				'ResourceGroupName' => [ 'shape' => 'ResourceGroupName', ],
				'ComponentName'     => [ 'shape' => 'ComponentName', ],
				'NewComponentName'  => [ 'shape' => 'NewComponentName', ],
				'ResourceList'      => [ 'shape' => 'ResourceList', ],
			],
		],
		'UpdateComponentResponse'                              => [ 'type' => 'structure', 'members' => [], ],
		'ValidationException'                                  => [
			'type'      => 'structure',
			'members'   => [ 'Message' => [ 'shape' => 'ErrorMsg', ], ],
			'exception' => true,
		],
		'Value'                                                => [ 'type' => 'double', ],
	],
];
