<?php

namespace Aws\ElasticLoadBalancing;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Elastic Load Balancing** service.
 *
 * @method Result addTags( array $args = [] )
 * @method Promise addTagsAsync( array $args = [] )
 * @method Result applySecurityGroupsToLoadBalancer( array $args = [] )
 * @method Promise applySecurityGroupsToLoadBalancerAsync( array $args = [] )
 * @method Result attachLoadBalancerToSubnets( array $args = [] )
 * @method Promise attachLoadBalancerToSubnetsAsync( array $args = [] )
 * @method Result configureHealthCheck( array $args = [] )
 * @method Promise configureHealthCheckAsync( array $args = [] )
 * @method Result createAppCookieStickinessPolicy( array $args = [] )
 * @method Promise createAppCookieStickinessPolicyAsync( array $args = [] )
 * @method Result createLBCookieStickinessPolicy( array $args = [] )
 * @method Promise createLBCookieStickinessPolicyAsync( array $args = [] )
 * @method Result createLoadBalancer( array $args = [] )
 * @method Promise createLoadBalancerAsync( array $args = [] )
 * @method Result createLoadBalancerListeners( array $args = [] )
 * @method Promise createLoadBalancerListenersAsync( array $args = [] )
 * @method Result createLoadBalancerPolicy( array $args = [] )
 * @method Promise createLoadBalancerPolicyAsync( array $args = [] )
 * @method Result deleteLoadBalancer( array $args = [] )
 * @method Promise deleteLoadBalancerAsync( array $args = [] )
 * @method Result deleteLoadBalancerListeners( array $args = [] )
 * @method Promise deleteLoadBalancerListenersAsync( array $args = [] )
 * @method Result deleteLoadBalancerPolicy( array $args = [] )
 * @method Promise deleteLoadBalancerPolicyAsync( array $args = [] )
 * @method Result deregisterInstancesFromLoadBalancer( array $args = [] )
 * @method Promise deregisterInstancesFromLoadBalancerAsync( array $args = [] )
 * @method Result describeAccountLimits( array $args = [] )
 * @method Promise describeAccountLimitsAsync( array $args = [] )
 * @method Result describeInstanceHealth( array $args = [] )
 * @method Promise describeInstanceHealthAsync( array $args = [] )
 * @method Result describeLoadBalancerAttributes( array $args = [] )
 * @method Promise describeLoadBalancerAttributesAsync( array $args = [] )
 * @method Result describeLoadBalancerPolicies( array $args = [] )
 * @method Promise describeLoadBalancerPoliciesAsync( array $args = [] )
 * @method Result describeLoadBalancerPolicyTypes( array $args = [] )
 * @method Promise describeLoadBalancerPolicyTypesAsync( array $args = [] )
 * @method Result describeLoadBalancers( array $args = [] )
 * @method Promise describeLoadBalancersAsync( array $args = [] )
 * @method Result describeTags( array $args = [] )
 * @method Promise describeTagsAsync( array $args = [] )
 * @method Result detachLoadBalancerFromSubnets( array $args = [] )
 * @method Promise detachLoadBalancerFromSubnetsAsync( array $args = [] )
 * @method Result disableAvailabilityZonesForLoadBalancer( array $args = [] )
 * @method Promise disableAvailabilityZonesForLoadBalancerAsync( array $args = [] )
 * @method Result enableAvailabilityZonesForLoadBalancer( array $args = [] )
 * @method Promise enableAvailabilityZonesForLoadBalancerAsync( array $args = [] )
 * @method Result modifyLoadBalancerAttributes( array $args = [] )
 * @method Promise modifyLoadBalancerAttributesAsync( array $args = [] )
 * @method Result registerInstancesWithLoadBalancer( array $args = [] )
 * @method Promise registerInstancesWithLoadBalancerAsync( array $args = [] )
 * @method Result removeTags( array $args = [] )
 * @method Promise removeTagsAsync( array $args = [] )
 * @method Result setLoadBalancerListenerSSLCertificate( array $args = [] )
 * @method Promise setLoadBalancerListenerSSLCertificateAsync( array $args = [] )
 * @method Result setLoadBalancerPoliciesForBackendServer( array $args = [] )
 * @method Promise setLoadBalancerPoliciesForBackendServerAsync( array $args = [] )
 * @method Result setLoadBalancerPoliciesOfListener( array $args = [] )
 * @method Promise setLoadBalancerPoliciesOfListenerAsync( array $args = [] )
 */
class ElasticLoadBalancingClient extends AwsClient {
}
