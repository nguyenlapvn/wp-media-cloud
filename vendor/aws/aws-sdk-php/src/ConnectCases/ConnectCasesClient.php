<?php
namespace Advanced_Media_Offloader\Vendor\Aws\ConnectCases;

use Advanced_Media_Offloader\Vendor\Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon Connect Cases** service.
 * @method \Aws\Result batchGetField(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchGetFieldAsync(array $args = [])
 * @method \Aws\Result batchPutFieldOptions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchPutFieldOptionsAsync(array $args = [])
 * @method \Aws\Result createCase(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createCaseAsync(array $args = [])
 * @method \Aws\Result createDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDomainAsync(array $args = [])
 * @method \Aws\Result createField(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createFieldAsync(array $args = [])
 * @method \Aws\Result createLayout(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createLayoutAsync(array $args = [])
 * @method \Aws\Result createRelatedItem(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createRelatedItemAsync(array $args = [])
 * @method \Aws\Result createTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createTemplateAsync(array $args = [])
 * @method \Aws\Result deleteDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDomainAsync(array $args = [])
 * @method \Aws\Result deleteField(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteFieldAsync(array $args = [])
 * @method \Aws\Result deleteLayout(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteLayoutAsync(array $args = [])
 * @method \Aws\Result deleteTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteTemplateAsync(array $args = [])
 * @method \Aws\Result getCase(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCaseAsync(array $args = [])
 * @method \Aws\Result getCaseAuditEvents(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCaseAuditEventsAsync(array $args = [])
 * @method \Aws\Result getCaseEventConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCaseEventConfigurationAsync(array $args = [])
 * @method \Aws\Result getDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDomainAsync(array $args = [])
 * @method \Aws\Result getLayout(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getLayoutAsync(array $args = [])
 * @method \Aws\Result getTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTemplateAsync(array $args = [])
 * @method \Aws\Result listCasesForContact(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listCasesForContactAsync(array $args = [])
 * @method \Aws\Result listDomains(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDomainsAsync(array $args = [])
 * @method \Aws\Result listFieldOptions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listFieldOptionsAsync(array $args = [])
 * @method \Aws\Result listFields(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listFieldsAsync(array $args = [])
 * @method \Aws\Result listLayouts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listLayoutsAsync(array $args = [])
 * @method \Aws\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Aws\Result listTemplates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTemplatesAsync(array $args = [])
 * @method \Aws\Result putCaseEventConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putCaseEventConfigurationAsync(array $args = [])
 * @method \Aws\Result searchCases(array $args = [])
 * @method \GuzzleHttp\Promise\Promise searchCasesAsync(array $args = [])
 * @method \Aws\Result searchRelatedItems(array $args = [])
 * @method \GuzzleHttp\Promise\Promise searchRelatedItemsAsync(array $args = [])
 * @method \Aws\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Aws\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Aws\Result updateCase(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateCaseAsync(array $args = [])
 * @method \Aws\Result updateField(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateFieldAsync(array $args = [])
 * @method \Aws\Result updateLayout(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateLayoutAsync(array $args = [])
 * @method \Aws\Result updateTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateTemplateAsync(array $args = [])
 */
class ConnectCasesClient extends AwsClient {}
