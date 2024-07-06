<?php
namespace Advanced_Media_Offloader\Vendor\Aws\GameLift;

use Advanced_Media_Offloader\Vendor\Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon GameLift** service.
 *
 * @method \Aws\Result acceptMatch(array $args = [])
 * @method \GuzzleHttp\Promise\Promise acceptMatchAsync(array $args = [])
 * @method \Aws\Result claimGameServer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise claimGameServerAsync(array $args = [])
 * @method \Aws\Result createAlias(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAliasAsync(array $args = [])
 * @method \Aws\Result createBuild(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createBuildAsync(array $args = [])
 * @method \Aws\Result createContainerGroupDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createContainerGroupDefinitionAsync(array $args = [])
 * @method \Aws\Result createFleet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createFleetAsync(array $args = [])
 * @method \Aws\Result createFleetLocations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createFleetLocationsAsync(array $args = [])
 * @method \Aws\Result createGameServerGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createGameServerGroupAsync(array $args = [])
 * @method \Aws\Result createGameSession(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createGameSessionAsync(array $args = [])
 * @method \Aws\Result createGameSessionQueue(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createGameSessionQueueAsync(array $args = [])
 * @method \Aws\Result createLocation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createLocationAsync(array $args = [])
 * @method \Aws\Result createMatchmakingConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createMatchmakingConfigurationAsync(array $args = [])
 * @method \Aws\Result createMatchmakingRuleSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createMatchmakingRuleSetAsync(array $args = [])
 * @method \Aws\Result createPlayerSession(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createPlayerSessionAsync(array $args = [])
 * @method \Aws\Result createPlayerSessions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createPlayerSessionsAsync(array $args = [])
 * @method \Aws\Result createScript(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createScriptAsync(array $args = [])
 * @method \Aws\Result createVpcPeeringAuthorization(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createVpcPeeringAuthorizationAsync(array $args = [])
 * @method \Aws\Result createVpcPeeringConnection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createVpcPeeringConnectionAsync(array $args = [])
 * @method \Aws\Result deleteAlias(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAliasAsync(array $args = [])
 * @method \Aws\Result deleteBuild(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteBuildAsync(array $args = [])
 * @method \Aws\Result deleteContainerGroupDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteContainerGroupDefinitionAsync(array $args = [])
 * @method \Aws\Result deleteFleet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteFleetAsync(array $args = [])
 * @method \Aws\Result deleteFleetLocations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteFleetLocationsAsync(array $args = [])
 * @method \Aws\Result deleteGameServerGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteGameServerGroupAsync(array $args = [])
 * @method \Aws\Result deleteGameSessionQueue(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteGameSessionQueueAsync(array $args = [])
 * @method \Aws\Result deleteLocation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteLocationAsync(array $args = [])
 * @method \Aws\Result deleteMatchmakingConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteMatchmakingConfigurationAsync(array $args = [])
 * @method \Aws\Result deleteMatchmakingRuleSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteMatchmakingRuleSetAsync(array $args = [])
 * @method \Aws\Result deleteScalingPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteScalingPolicyAsync(array $args = [])
 * @method \Aws\Result deleteScript(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteScriptAsync(array $args = [])
 * @method \Aws\Result deleteVpcPeeringAuthorization(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteVpcPeeringAuthorizationAsync(array $args = [])
 * @method \Aws\Result deleteVpcPeeringConnection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteVpcPeeringConnectionAsync(array $args = [])
 * @method \Aws\Result deregisterCompute(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deregisterComputeAsync(array $args = [])
 * @method \Aws\Result deregisterGameServer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deregisterGameServerAsync(array $args = [])
 * @method \Aws\Result describeAlias(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAliasAsync(array $args = [])
 * @method \Aws\Result describeBuild(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeBuildAsync(array $args = [])
 * @method \Aws\Result describeCompute(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeComputeAsync(array $args = [])
 * @method \Aws\Result describeContainerGroupDefinition(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeContainerGroupDefinitionAsync(array $args = [])
 * @method \Aws\Result describeEC2InstanceLimits(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeEC2InstanceLimitsAsync(array $args = [])
 * @method \Aws\Result describeFleetAttributes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeFleetAttributesAsync(array $args = [])
 * @method \Aws\Result describeFleetCapacity(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeFleetCapacityAsync(array $args = [])
 * @method \Aws\Result describeFleetEvents(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeFleetEventsAsync(array $args = [])
 * @method \Aws\Result describeFleetLocationAttributes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeFleetLocationAttributesAsync(array $args = [])
 * @method \Aws\Result describeFleetLocationCapacity(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeFleetLocationCapacityAsync(array $args = [])
 * @method \Aws\Result describeFleetLocationUtilization(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeFleetLocationUtilizationAsync(array $args = [])
 * @method \Aws\Result describeFleetPortSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeFleetPortSettingsAsync(array $args = [])
 * @method \Aws\Result describeFleetUtilization(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeFleetUtilizationAsync(array $args = [])
 * @method \Aws\Result describeGameServer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeGameServerAsync(array $args = [])
 * @method \Aws\Result describeGameServerGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeGameServerGroupAsync(array $args = [])
 * @method \Aws\Result describeGameServerInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeGameServerInstancesAsync(array $args = [])
 * @method \Aws\Result describeGameSessionDetails(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeGameSessionDetailsAsync(array $args = [])
 * @method \Aws\Result describeGameSessionPlacement(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeGameSessionPlacementAsync(array $args = [])
 * @method \Aws\Result describeGameSessionQueues(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeGameSessionQueuesAsync(array $args = [])
 * @method \Aws\Result describeGameSessions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeGameSessionsAsync(array $args = [])
 * @method \Aws\Result describeInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstancesAsync(array $args = [])
 * @method \Aws\Result describeMatchmaking(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMatchmakingAsync(array $args = [])
 * @method \Aws\Result describeMatchmakingConfigurations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMatchmakingConfigurationsAsync(array $args = [])
 * @method \Aws\Result describeMatchmakingRuleSets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMatchmakingRuleSetsAsync(array $args = [])
 * @method \Aws\Result describePlayerSessions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describePlayerSessionsAsync(array $args = [])
 * @method \Aws\Result describeRuntimeConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRuntimeConfigurationAsync(array $args = [])
 * @method \Aws\Result describeScalingPolicies(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeScalingPoliciesAsync(array $args = [])
 * @method \Aws\Result describeScript(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeScriptAsync(array $args = [])
 * @method \Aws\Result describeVpcPeeringAuthorizations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeVpcPeeringAuthorizationsAsync(array $args = [])
 * @method \Aws\Result describeVpcPeeringConnections(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeVpcPeeringConnectionsAsync(array $args = [])
 * @method \Aws\Result getComputeAccess(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getComputeAccessAsync(array $args = [])
 * @method \Aws\Result getComputeAuthToken(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getComputeAuthTokenAsync(array $args = [])
 * @method \Aws\Result getGameSessionLogUrl(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getGameSessionLogUrlAsync(array $args = [])
 * @method \Aws\Result getInstanceAccess(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getInstanceAccessAsync(array $args = [])
 * @method \Aws\Result listAliases(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAliasesAsync(array $args = [])
 * @method \Aws\Result listBuilds(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listBuildsAsync(array $args = [])
 * @method \Aws\Result listCompute(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listComputeAsync(array $args = [])
 * @method \Aws\Result listContainerGroupDefinitions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listContainerGroupDefinitionsAsync(array $args = [])
 * @method \Aws\Result listFleets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listFleetsAsync(array $args = [])
 * @method \Aws\Result listGameServerGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listGameServerGroupsAsync(array $args = [])
 * @method \Aws\Result listGameServers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listGameServersAsync(array $args = [])
 * @method \Aws\Result listLocations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listLocationsAsync(array $args = [])
 * @method \Aws\Result listScripts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listScriptsAsync(array $args = [])
 * @method \Aws\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Aws\Result putScalingPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putScalingPolicyAsync(array $args = [])
 * @method \Aws\Result registerCompute(array $args = [])
 * @method \GuzzleHttp\Promise\Promise registerComputeAsync(array $args = [])
 * @method \Aws\Result registerGameServer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise registerGameServerAsync(array $args = [])
 * @method \Aws\Result requestUploadCredentials(array $args = [])
 * @method \GuzzleHttp\Promise\Promise requestUploadCredentialsAsync(array $args = [])
 * @method \Aws\Result resolveAlias(array $args = [])
 * @method \GuzzleHttp\Promise\Promise resolveAliasAsync(array $args = [])
 * @method \Aws\Result resumeGameServerGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise resumeGameServerGroupAsync(array $args = [])
 * @method \Aws\Result searchGameSessions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise searchGameSessionsAsync(array $args = [])
 * @method \Aws\Result startFleetActions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startFleetActionsAsync(array $args = [])
 * @method \Aws\Result startGameSessionPlacement(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startGameSessionPlacementAsync(array $args = [])
 * @method \Aws\Result startMatchBackfill(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startMatchBackfillAsync(array $args = [])
 * @method \Aws\Result startMatchmaking(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startMatchmakingAsync(array $args = [])
 * @method \Aws\Result stopFleetActions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopFleetActionsAsync(array $args = [])
 * @method \Aws\Result stopGameSessionPlacement(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopGameSessionPlacementAsync(array $args = [])
 * @method \Aws\Result stopMatchmaking(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopMatchmakingAsync(array $args = [])
 * @method \Aws\Result suspendGameServerGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise suspendGameServerGroupAsync(array $args = [])
 * @method \Aws\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Aws\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Aws\Result updateAlias(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAliasAsync(array $args = [])
 * @method \Aws\Result updateBuild(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateBuildAsync(array $args = [])
 * @method \Aws\Result updateFleetAttributes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateFleetAttributesAsync(array $args = [])
 * @method \Aws\Result updateFleetCapacity(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateFleetCapacityAsync(array $args = [])
 * @method \Aws\Result updateFleetPortSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateFleetPortSettingsAsync(array $args = [])
 * @method \Aws\Result updateGameServer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateGameServerAsync(array $args = [])
 * @method \Aws\Result updateGameServerGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateGameServerGroupAsync(array $args = [])
 * @method \Aws\Result updateGameSession(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateGameSessionAsync(array $args = [])
 * @method \Aws\Result updateGameSessionQueue(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateGameSessionQueueAsync(array $args = [])
 * @method \Aws\Result updateMatchmakingConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateMatchmakingConfigurationAsync(array $args = [])
 * @method \Aws\Result updateRuntimeConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateRuntimeConfigurationAsync(array $args = [])
 * @method \Aws\Result updateScript(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateScriptAsync(array $args = [])
 * @method \Aws\Result validateMatchmakingRuleSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise validateMatchmakingRuleSetAsync(array $args = [])
 */
class GameLiftClient extends AwsClient {}
