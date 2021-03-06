<?php

namespace Aws\Kinesis;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Amazon Kinesis** service.
 *
 * @method Result addTagsToStream( array $args = [] )
 * @method Promise addTagsToStreamAsync( array $args = [] )
 * @method Result createStream( array $args = [] )
 * @method Promise createStreamAsync( array $args = [] )
 * @method Result decreaseStreamRetentionPeriod( array $args = [] )
 * @method Promise decreaseStreamRetentionPeriodAsync( array $args = [] )
 * @method Result deleteStream( array $args = [] )
 * @method Promise deleteStreamAsync( array $args = [] )
 * @method Result deregisterStreamConsumer( array $args = [] )
 * @method Promise deregisterStreamConsumerAsync( array $args = [] )
 * @method Result describeLimits( array $args = [] )
 * @method Promise describeLimitsAsync( array $args = [] )
 * @method Result describeStream( array $args = [] )
 * @method Promise describeStreamAsync( array $args = [] )
 * @method Result describeStreamConsumer( array $args = [] )
 * @method Promise describeStreamConsumerAsync( array $args = [] )
 * @method Result describeStreamSummary( array $args = [] )
 * @method Promise describeStreamSummaryAsync( array $args = [] )
 * @method Result disableEnhancedMonitoring( array $args = [] )
 * @method Promise disableEnhancedMonitoringAsync( array $args = [] )
 * @method Result enableEnhancedMonitoring( array $args = [] )
 * @method Promise enableEnhancedMonitoringAsync( array $args = [] )
 * @method Result getRecords( array $args = [] )
 * @method Promise getRecordsAsync( array $args = [] )
 * @method Result getShardIterator( array $args = [] )
 * @method Promise getShardIteratorAsync( array $args = [] )
 * @method Result increaseStreamRetentionPeriod( array $args = [] )
 * @method Promise increaseStreamRetentionPeriodAsync( array $args = [] )
 * @method Result listShards( array $args = [] )
 * @method Promise listShardsAsync( array $args = [] )
 * @method Result listStreamConsumers( array $args = [] )
 * @method Promise listStreamConsumersAsync( array $args = [] )
 * @method Result listStreams( array $args = [] )
 * @method Promise listStreamsAsync( array $args = [] )
 * @method Result listTagsForStream( array $args = [] )
 * @method Promise listTagsForStreamAsync( array $args = [] )
 * @method Result mergeShards( array $args = [] )
 * @method Promise mergeShardsAsync( array $args = [] )
 * @method Result putRecord( array $args = [] )
 * @method Promise putRecordAsync( array $args = [] )
 * @method Result putRecords( array $args = [] )
 * @method Promise putRecordsAsync( array $args = [] )
 * @method Result registerStreamConsumer( array $args = [] )
 * @method Promise registerStreamConsumerAsync( array $args = [] )
 * @method Result removeTagsFromStream( array $args = [] )
 * @method Promise removeTagsFromStreamAsync( array $args = [] )
 * @method Result splitShard( array $args = [] )
 * @method Promise splitShardAsync( array $args = [] )
 * @method Result startStreamEncryption( array $args = [] )
 * @method Promise startStreamEncryptionAsync( array $args = [] )
 * @method Result stopStreamEncryption( array $args = [] )
 * @method Promise stopStreamEncryptionAsync( array $args = [] )
 * @method Result updateShardCount( array $args = [] )
 * @method Promise updateShardCountAsync( array $args = [] )
 */
class KinesisClient extends AwsClient {
}
