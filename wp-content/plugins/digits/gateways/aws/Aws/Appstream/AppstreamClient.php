<?php

namespace Aws\Appstream;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Amazon AppStream** service.
 * @method Result associateFleet( array $args = [] )
 * @method Promise associateFleetAsync( array $args = [] )
 * @method Result batchAssociateUserStack( array $args = [] )
 * @method Promise batchAssociateUserStackAsync( array $args = [] )
 * @method Result batchDisassociateUserStack( array $args = [] )
 * @method Promise batchDisassociateUserStackAsync( array $args = [] )
 * @method Result copyImage( array $args = [] )
 * @method Promise copyImageAsync( array $args = [] )
 * @method Result createDirectoryConfig( array $args = [] )
 * @method Promise createDirectoryConfigAsync( array $args = [] )
 * @method Result createFleet( array $args = [] )
 * @method Promise createFleetAsync( array $args = [] )
 * @method Result createImageBuilder( array $args = [] )
 * @method Promise createImageBuilderAsync( array $args = [] )
 * @method Result createImageBuilderStreamingURL( array $args = [] )
 * @method Promise createImageBuilderStreamingURLAsync( array $args = [] )
 * @method Result createStack( array $args = [] )
 * @method Promise createStackAsync( array $args = [] )
 * @method Result createStreamingURL( array $args = [] )
 * @method Promise createStreamingURLAsync( array $args = [] )
 * @method Result createUsageReportSubscription( array $args = [] )
 * @method Promise createUsageReportSubscriptionAsync( array $args = [] )
 * @method Result createUser( array $args = [] )
 * @method Promise createUserAsync( array $args = [] )
 * @method Result deleteDirectoryConfig( array $args = [] )
 * @method Promise deleteDirectoryConfigAsync( array $args = [] )
 * @method Result deleteFleet( array $args = [] )
 * @method Promise deleteFleetAsync( array $args = [] )
 * @method Result deleteImage( array $args = [] )
 * @method Promise deleteImageAsync( array $args = [] )
 * @method Result deleteImageBuilder( array $args = [] )
 * @method Promise deleteImageBuilderAsync( array $args = [] )
 * @method Result deleteImagePermissions( array $args = [] )
 * @method Promise deleteImagePermissionsAsync( array $args = [] )
 * @method Result deleteStack( array $args = [] )
 * @method Promise deleteStackAsync( array $args = [] )
 * @method Result deleteUsageReportSubscription( array $args = [] )
 * @method Promise deleteUsageReportSubscriptionAsync( array $args = [] )
 * @method Result deleteUser( array $args = [] )
 * @method Promise deleteUserAsync( array $args = [] )
 * @method Result describeDirectoryConfigs( array $args = [] )
 * @method Promise describeDirectoryConfigsAsync( array $args = [] )
 * @method Result describeFleets( array $args = [] )
 * @method Promise describeFleetsAsync( array $args = [] )
 * @method Result describeImageBuilders( array $args = [] )
 * @method Promise describeImageBuildersAsync( array $args = [] )
 * @method Result describeImagePermissions( array $args = [] )
 * @method Promise describeImagePermissionsAsync( array $args = [] )
 * @method Result describeImages( array $args = [] )
 * @method Promise describeImagesAsync( array $args = [] )
 * @method Result describeSessions( array $args = [] )
 * @method Promise describeSessionsAsync( array $args = [] )
 * @method Result describeStacks( array $args = [] )
 * @method Promise describeStacksAsync( array $args = [] )
 * @method Result describeUsageReportSubscriptions( array $args = [] )
 * @method Promise describeUsageReportSubscriptionsAsync( array $args = [] )
 * @method Result describeUserStackAssociations( array $args = [] )
 * @method Promise describeUserStackAssociationsAsync( array $args = [] )
 * @method Result describeUsers( array $args = [] )
 * @method Promise describeUsersAsync( array $args = [] )
 * @method Result disableUser( array $args = [] )
 * @method Promise disableUserAsync( array $args = [] )
 * @method Result disassociateFleet( array $args = [] )
 * @method Promise disassociateFleetAsync( array $args = [] )
 * @method Result enableUser( array $args = [] )
 * @method Promise enableUserAsync( array $args = [] )
 * @method Result expireSession( array $args = [] )
 * @method Promise expireSessionAsync( array $args = [] )
 * @method Result listAssociatedFleets( array $args = [] )
 * @method Promise listAssociatedFleetsAsync( array $args = [] )
 * @method Result listAssociatedStacks( array $args = [] )
 * @method Promise listAssociatedStacksAsync( array $args = [] )
 * @method Result listTagsForResource( array $args = [] )
 * @method Promise listTagsForResourceAsync( array $args = [] )
 * @method Result startFleet( array $args = [] )
 * @method Promise startFleetAsync( array $args = [] )
 * @method Result startImageBuilder( array $args = [] )
 * @method Promise startImageBuilderAsync( array $args = [] )
 * @method Result stopFleet( array $args = [] )
 * @method Promise stopFleetAsync( array $args = [] )
 * @method Result stopImageBuilder( array $args = [] )
 * @method Promise stopImageBuilderAsync( array $args = [] )
 * @method Result tagResource( array $args = [] )
 * @method Promise tagResourceAsync( array $args = [] )
 * @method Result untagResource( array $args = [] )
 * @method Promise untagResourceAsync( array $args = [] )
 * @method Result updateDirectoryConfig( array $args = [] )
 * @method Promise updateDirectoryConfigAsync( array $args = [] )
 * @method Result updateFleet( array $args = [] )
 * @method Promise updateFleetAsync( array $args = [] )
 * @method Result updateImagePermissions( array $args = [] )
 * @method Promise updateImagePermissionsAsync( array $args = [] )
 * @method Result updateStack( array $args = [] )
 * @method Promise updateStackAsync( array $args = [] )
 */
class AppstreamClient extends AwsClient {
}
