<?php

namespace Aws\CodeDeploy;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with AWS CodeDeploy
 *
 * @method Result addTagsToOnPremisesInstances( array $args = [] )
 * @method Promise addTagsToOnPremisesInstancesAsync( array $args = [] )
 * @method Result batchGetApplicationRevisions( array $args = [] )
 * @method Promise batchGetApplicationRevisionsAsync( array $args = [] )
 * @method Result batchGetApplications( array $args = [] )
 * @method Promise batchGetApplicationsAsync( array $args = [] )
 * @method Result batchGetDeploymentGroups( array $args = [] )
 * @method Promise batchGetDeploymentGroupsAsync( array $args = [] )
 * @method Result batchGetDeploymentInstances( array $args = [] )
 * @method Promise batchGetDeploymentInstancesAsync( array $args = [] )
 * @method Result batchGetDeploymentTargets( array $args = [] )
 * @method Promise batchGetDeploymentTargetsAsync( array $args = [] )
 * @method Result batchGetDeployments( array $args = [] )
 * @method Promise batchGetDeploymentsAsync( array $args = [] )
 * @method Result batchGetOnPremisesInstances( array $args = [] )
 * @method Promise batchGetOnPremisesInstancesAsync( array $args = [] )
 * @method Result continueDeployment( array $args = [] )
 * @method Promise continueDeploymentAsync( array $args = [] )
 * @method Result createApplication( array $args = [] )
 * @method Promise createApplicationAsync( array $args = [] )
 * @method Result createDeployment( array $args = [] )
 * @method Promise createDeploymentAsync( array $args = [] )
 * @method Result createDeploymentConfig( array $args = [] )
 * @method Promise createDeploymentConfigAsync( array $args = [] )
 * @method Result createDeploymentGroup( array $args = [] )
 * @method Promise createDeploymentGroupAsync( array $args = [] )
 * @method Result deleteApplication( array $args = [] )
 * @method Promise deleteApplicationAsync( array $args = [] )
 * @method Result deleteDeploymentConfig( array $args = [] )
 * @method Promise deleteDeploymentConfigAsync( array $args = [] )
 * @method Result deleteDeploymentGroup( array $args = [] )
 * @method Promise deleteDeploymentGroupAsync( array $args = [] )
 * @method Result deleteGitHubAccountToken( array $args = [] )
 * @method Promise deleteGitHubAccountTokenAsync( array $args = [] )
 * @method Result deregisterOnPremisesInstance( array $args = [] )
 * @method Promise deregisterOnPremisesInstanceAsync( array $args = [] )
 * @method Result getApplication( array $args = [] )
 * @method Promise getApplicationAsync( array $args = [] )
 * @method Result getApplicationRevision( array $args = [] )
 * @method Promise getApplicationRevisionAsync( array $args = [] )
 * @method Result getDeployment( array $args = [] )
 * @method Promise getDeploymentAsync( array $args = [] )
 * @method Result getDeploymentConfig( array $args = [] )
 * @method Promise getDeploymentConfigAsync( array $args = [] )
 * @method Result getDeploymentGroup( array $args = [] )
 * @method Promise getDeploymentGroupAsync( array $args = [] )
 * @method Result getDeploymentInstance( array $args = [] )
 * @method Promise getDeploymentInstanceAsync( array $args = [] )
 * @method Result getDeploymentTarget( array $args = [] )
 * @method Promise getDeploymentTargetAsync( array $args = [] )
 * @method Result getOnPremisesInstance( array $args = [] )
 * @method Promise getOnPremisesInstanceAsync( array $args = [] )
 * @method Result listApplicationRevisions( array $args = [] )
 * @method Promise listApplicationRevisionsAsync( array $args = [] )
 * @method Result listApplications( array $args = [] )
 * @method Promise listApplicationsAsync( array $args = [] )
 * @method Result listDeploymentConfigs( array $args = [] )
 * @method Promise listDeploymentConfigsAsync( array $args = [] )
 * @method Result listDeploymentGroups( array $args = [] )
 * @method Promise listDeploymentGroupsAsync( array $args = [] )
 * @method Result listDeploymentInstances( array $args = [] )
 * @method Promise listDeploymentInstancesAsync( array $args = [] )
 * @method Result listDeploymentTargets( array $args = [] )
 * @method Promise listDeploymentTargetsAsync( array $args = [] )
 * @method Result listDeployments( array $args = [] )
 * @method Promise listDeploymentsAsync( array $args = [] )
 * @method Result listGitHubAccountTokenNames( array $args = [] )
 * @method Promise listGitHubAccountTokenNamesAsync( array $args = [] )
 * @method Result listOnPremisesInstances( array $args = [] )
 * @method Promise listOnPremisesInstancesAsync( array $args = [] )
 * @method Result listTagsForResource( array $args = [] )
 * @method Promise listTagsForResourceAsync( array $args = [] )
 * @method Result putLifecycleEventHookExecutionStatus( array $args = [] )
 * @method Promise putLifecycleEventHookExecutionStatusAsync( array $args = [] )
 * @method Result registerApplicationRevision( array $args = [] )
 * @method Promise registerApplicationRevisionAsync( array $args = [] )
 * @method Result registerOnPremisesInstance( array $args = [] )
 * @method Promise registerOnPremisesInstanceAsync( array $args = [] )
 * @method Result removeTagsFromOnPremisesInstances( array $args = [] )
 * @method Promise removeTagsFromOnPremisesInstancesAsync( array $args = [] )
 * @method Result skipWaitTimeForInstanceTermination( array $args = [] )
 * @method Promise skipWaitTimeForInstanceTerminationAsync( array $args = [] )
 * @method Result stopDeployment( array $args = [] )
 * @method Promise stopDeploymentAsync( array $args = [] )
 * @method Result tagResource( array $args = [] )
 * @method Promise tagResourceAsync( array $args = [] )
 * @method Result untagResource( array $args = [] )
 * @method Promise untagResourceAsync( array $args = [] )
 * @method Result updateApplication( array $args = [] )
 * @method Promise updateApplicationAsync( array $args = [] )
 * @method Result updateDeploymentGroup( array $args = [] )
 * @method Promise updateDeploymentGroupAsync( array $args = [] )
 */
class CodeDeployClient extends AwsClient {
}