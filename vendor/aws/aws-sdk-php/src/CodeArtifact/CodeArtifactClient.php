<?php
namespace Advanced_Media_Offloader\Vendor\Aws\CodeArtifact;

use Advanced_Media_Offloader\Vendor\Aws\AwsClient;

/**
 * This client is used to interact with the **CodeArtifact** service.
 * @method \Aws\Result associateExternalConnection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateExternalConnectionAsync(array $args = [])
 * @method \Aws\Result copyPackageVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise copyPackageVersionsAsync(array $args = [])
 * @method \Aws\Result createDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDomainAsync(array $args = [])
 * @method \Aws\Result createPackageGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createPackageGroupAsync(array $args = [])
 * @method \Aws\Result createRepository(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createRepositoryAsync(array $args = [])
 * @method \Aws\Result deleteDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDomainAsync(array $args = [])
 * @method \Aws\Result deleteDomainPermissionsPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDomainPermissionsPolicyAsync(array $args = [])
 * @method \Aws\Result deletePackage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deletePackageAsync(array $args = [])
 * @method \Aws\Result deletePackageGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deletePackageGroupAsync(array $args = [])
 * @method \Aws\Result deletePackageVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deletePackageVersionsAsync(array $args = [])
 * @method \Aws\Result deleteRepository(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRepositoryAsync(array $args = [])
 * @method \Aws\Result deleteRepositoryPermissionsPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRepositoryPermissionsPolicyAsync(array $args = [])
 * @method \Aws\Result describeDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDomainAsync(array $args = [])
 * @method \Aws\Result describePackage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describePackageAsync(array $args = [])
 * @method \Aws\Result describePackageGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describePackageGroupAsync(array $args = [])
 * @method \Aws\Result describePackageVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describePackageVersionAsync(array $args = [])
 * @method \Aws\Result describeRepository(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRepositoryAsync(array $args = [])
 * @method \Aws\Result disassociateExternalConnection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateExternalConnectionAsync(array $args = [])
 * @method \Aws\Result disposePackageVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disposePackageVersionsAsync(array $args = [])
 * @method \Aws\Result getAssociatedPackageGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAssociatedPackageGroupAsync(array $args = [])
 * @method \Aws\Result getAuthorizationToken(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAuthorizationTokenAsync(array $args = [])
 * @method \Aws\Result getDomainPermissionsPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDomainPermissionsPolicyAsync(array $args = [])
 * @method \Aws\Result getPackageVersionAsset(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getPackageVersionAssetAsync(array $args = [])
 * @method \Aws\Result getPackageVersionReadme(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getPackageVersionReadmeAsync(array $args = [])
 * @method \Aws\Result getRepositoryEndpoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRepositoryEndpointAsync(array $args = [])
 * @method \Aws\Result getRepositoryPermissionsPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRepositoryPermissionsPolicyAsync(array $args = [])
 * @method \Aws\Result listAllowedRepositoriesForGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAllowedRepositoriesForGroupAsync(array $args = [])
 * @method \Aws\Result listAssociatedPackages(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAssociatedPackagesAsync(array $args = [])
 * @method \Aws\Result listDomains(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDomainsAsync(array $args = [])
 * @method \Aws\Result listPackageGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPackageGroupsAsync(array $args = [])
 * @method \Aws\Result listPackageVersionAssets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPackageVersionAssetsAsync(array $args = [])
 * @method \Aws\Result listPackageVersionDependencies(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPackageVersionDependenciesAsync(array $args = [])
 * @method \Aws\Result listPackageVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPackageVersionsAsync(array $args = [])
 * @method \Aws\Result listPackages(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPackagesAsync(array $args = [])
 * @method \Aws\Result listRepositories(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRepositoriesAsync(array $args = [])
 * @method \Aws\Result listRepositoriesInDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRepositoriesInDomainAsync(array $args = [])
 * @method \Aws\Result listSubPackageGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSubPackageGroupsAsync(array $args = [])
 * @method \Aws\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Aws\Result publishPackageVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise publishPackageVersionAsync(array $args = [])
 * @method \Aws\Result putDomainPermissionsPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putDomainPermissionsPolicyAsync(array $args = [])
 * @method \Aws\Result putPackageOriginConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putPackageOriginConfigurationAsync(array $args = [])
 * @method \Aws\Result putRepositoryPermissionsPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putRepositoryPermissionsPolicyAsync(array $args = [])
 * @method \Aws\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Aws\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Aws\Result updatePackageGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updatePackageGroupAsync(array $args = [])
 * @method \Aws\Result updatePackageGroupOriginConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updatePackageGroupOriginConfigurationAsync(array $args = [])
 * @method \Aws\Result updatePackageVersionsStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updatePackageVersionsStatusAsync(array $args = [])
 * @method \Aws\Result updateRepository(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateRepositoryAsync(array $args = [])
 */
class CodeArtifactClient extends AwsClient {}
