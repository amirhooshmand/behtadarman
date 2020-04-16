<?php

namespace Aws\Personalize;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Amazon Personalize** service.
 * @method Result createCampaign( array $args = [] )
 * @method Promise createCampaignAsync( array $args = [] )
 * @method Result createDataset( array $args = [] )
 * @method Promise createDatasetAsync( array $args = [] )
 * @method Result createDatasetGroup( array $args = [] )
 * @method Promise createDatasetGroupAsync( array $args = [] )
 * @method Result createDatasetImportJob( array $args = [] )
 * @method Promise createDatasetImportJobAsync( array $args = [] )
 * @method Result createEventTracker( array $args = [] )
 * @method Promise createEventTrackerAsync( array $args = [] )
 * @method Result createSchema( array $args = [] )
 * @method Promise createSchemaAsync( array $args = [] )
 * @method Result createSolution( array $args = [] )
 * @method Promise createSolutionAsync( array $args = [] )
 * @method Result createSolutionVersion( array $args = [] )
 * @method Promise createSolutionVersionAsync( array $args = [] )
 * @method Result deleteCampaign( array $args = [] )
 * @method Promise deleteCampaignAsync( array $args = [] )
 * @method Result deleteDataset( array $args = [] )
 * @method Promise deleteDatasetAsync( array $args = [] )
 * @method Result deleteDatasetGroup( array $args = [] )
 * @method Promise deleteDatasetGroupAsync( array $args = [] )
 * @method Result deleteEventTracker( array $args = [] )
 * @method Promise deleteEventTrackerAsync( array $args = [] )
 * @method Result deleteSchema( array $args = [] )
 * @method Promise deleteSchemaAsync( array $args = [] )
 * @method Result deleteSolution( array $args = [] )
 * @method Promise deleteSolutionAsync( array $args = [] )
 * @method Result describeAlgorithm( array $args = [] )
 * @method Promise describeAlgorithmAsync( array $args = [] )
 * @method Result describeCampaign( array $args = [] )
 * @method Promise describeCampaignAsync( array $args = [] )
 * @method Result describeDataset( array $args = [] )
 * @method Promise describeDatasetAsync( array $args = [] )
 * @method Result describeDatasetGroup( array $args = [] )
 * @method Promise describeDatasetGroupAsync( array $args = [] )
 * @method Result describeDatasetImportJob( array $args = [] )
 * @method Promise describeDatasetImportJobAsync( array $args = [] )
 * @method Result describeEventTracker( array $args = [] )
 * @method Promise describeEventTrackerAsync( array $args = [] )
 * @method Result describeFeatureTransformation( array $args = [] )
 * @method Promise describeFeatureTransformationAsync( array $args = [] )
 * @method Result describeRecipe( array $args = [] )
 * @method Promise describeRecipeAsync( array $args = [] )
 * @method Result describeSchema( array $args = [] )
 * @method Promise describeSchemaAsync( array $args = [] )
 * @method Result describeSolution( array $args = [] )
 * @method Promise describeSolutionAsync( array $args = [] )
 * @method Result describeSolutionVersion( array $args = [] )
 * @method Promise describeSolutionVersionAsync( array $args = [] )
 * @method Result getSolutionMetrics( array $args = [] )
 * @method Promise getSolutionMetricsAsync( array $args = [] )
 * @method Result listCampaigns( array $args = [] )
 * @method Promise listCampaignsAsync( array $args = [] )
 * @method Result listDatasetGroups( array $args = [] )
 * @method Promise listDatasetGroupsAsync( array $args = [] )
 * @method Result listDatasetImportJobs( array $args = [] )
 * @method Promise listDatasetImportJobsAsync( array $args = [] )
 * @method Result listDatasets( array $args = [] )
 * @method Promise listDatasetsAsync( array $args = [] )
 * @method Result listEventTrackers( array $args = [] )
 * @method Promise listEventTrackersAsync( array $args = [] )
 * @method Result listRecipes( array $args = [] )
 * @method Promise listRecipesAsync( array $args = [] )
 * @method Result listSchemas( array $args = [] )
 * @method Promise listSchemasAsync( array $args = [] )
 * @method Result listSolutionVersions( array $args = [] )
 * @method Promise listSolutionVersionsAsync( array $args = [] )
 * @method Result listSolutions( array $args = [] )
 * @method Promise listSolutionsAsync( array $args = [] )
 * @method Result updateCampaign( array $args = [] )
 * @method Promise updateCampaignAsync( array $args = [] )
 */
class PersonalizeClient extends AwsClient {
}