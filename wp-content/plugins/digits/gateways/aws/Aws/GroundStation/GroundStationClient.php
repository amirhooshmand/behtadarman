<?php

namespace Aws\GroundStation;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **AWS Ground Station** service.
 * @method Result cancelContact( array $args = [] )
 * @method Promise cancelContactAsync( array $args = [] )
 * @method Result createConfig( array $args = [] )
 * @method Promise createConfigAsync( array $args = [] )
 * @method Result createDataflowEndpointGroup( array $args = [] )
 * @method Promise createDataflowEndpointGroupAsync( array $args = [] )
 * @method Result createMissionProfile( array $args = [] )
 * @method Promise createMissionProfileAsync( array $args = [] )
 * @method Result deleteConfig( array $args = [] )
 * @method Promise deleteConfigAsync( array $args = [] )
 * @method Result deleteDataflowEndpointGroup( array $args = [] )
 * @method Promise deleteDataflowEndpointGroupAsync( array $args = [] )
 * @method Result deleteMissionProfile( array $args = [] )
 * @method Promise deleteMissionProfileAsync( array $args = [] )
 * @method Result describeContact( array $args = [] )
 * @method Promise describeContactAsync( array $args = [] )
 * @method Result getMissionProfileConfig( array $args = [] )
 * @method Promise getMissionProfileConfigAsync( array $args = [] )
 * @method Result getDataflowEndpointGroup( array $args = [] )
 * @method Promise getDataflowEndpointGroupAsync( array $args = [] )
 * @method Result getMissionProfile( array $args = [] )
 * @method Promise getMissionProfileAsync( array $args = [] )
 * @method Result listConfigs( array $args = [] )
 * @method Promise listConfigsAsync( array $args = [] )
 * @method Result listContacts( array $args = [] )
 * @method Promise listContactsAsync( array $args = [] )
 * @method Result listDataflowEndpointGroups( array $args = [] )
 * @method Promise listDataflowEndpointGroupsAsync( array $args = [] )
 * @method Result listMissionProfiles( array $args = [] )
 * @method Promise listMissionProfilesAsync( array $args = [] )
 * @method Result reserveContact( array $args = [] )
 * @method Promise reserveContactAsync( array $args = [] )
 * @method Result updateConfig( array $args = [] )
 * @method Promise updateConfigAsync( array $args = [] )
 * @method Result updateMissionProfile( array $args = [] )
 * @method Promise updateMissionProfileAsync( array $args = [] )
 * @method Result getMinuteUsage( array $args = [] )
 * @method Promise getMinuteUsageAsync( array $args = [] )
 * @method Result getSatellite( array $args = [] )
 * @method Promise getSatelliteAsync( array $args = [] )
 * @method Result listGroundStations( array $args = [] )
 * @method Promise listGroundStationsAsync( array $args = [] )
 * @method Result listSatellites( array $args = [] )
 * @method Promise listSatellitesAsync( array $args = [] )
 * @method Result listTagsForResource( array $args = [] )
 * @method Promise listTagsForResourceAsync( array $args = [] )
 * @method Result tagResource( array $args = [] )
 * @method Promise tagResourceAsync( array $args = [] )
 * @method Result untagResource( array $args = [] )
 * @method Promise untagResourceAsync( array $args = [] )
 */
class GroundStationClient extends AwsClient {
}
