<?php

namespace Advanced_Media_Offloader\Abstracts;

abstract class S3_Provider
{

	protected $s3Client;

	/**
	 * Get the client instance.
	 *
	 * @return mixed
	 */
	abstract protected function getClient();

	/**
	 * Get the credentials field for the UI.
	 *
	 * @return mixed
	 */
	abstract public function credentialsField();

	/**
	 * Check for required constants and return any that are missing.
	 *
	 * @param array $constants Associative array of constant names and messages.
	 * @return array Associative array of missing constants and their messages.
	 */
	protected function checkRequiredConstants(array $constants)
	{
		$missingConstants = [];
		foreach ($constants as $constant => $message) {
			if (!defined($constant)) {
				$missingConstants[$constant] = $message;
			}
		}
		return $missingConstants;
	}

	abstract function getBucket();

	abstract function getProviderName();

	abstract function getDomain();

	/**
	 * Upload a file to the specified bucket.
	 *
	 * @param string $file Path to the file to upload.
	 * @param string $key The key to store the file under in the bucket.
	 * @param string $bucket The bucket to upload the file to.
	 * @return string URL of the uploaded object.
	 */
	public function uploadFile($file, $key)
	{
		$client = $this->getClient();
		try {
			$client->putObject([
				'Bucket' => $this->getBucket(),
				'Key' => $key,
				'SourceFile' => $file,
				'ACL' => 'public-read',
			]);
			return $client->getObjectUrl($this->getBucket(), $key);
		} catch (\Exception $e) {
			error_log("Advanced Media Offloader: Error uploading file to S3: {$e->getMessage()}");
			return false;
		}
	}

	/**
	 * Check the connection to the service.
	 *
	 * @return mixed
	 */
	public function checkConnection()
	{
		$client = $this->getClient();
		try {
			# get bucket info
			$result = $client->listObjects([
				'Bucket' => $this->getBucket(),
			]);
			return true;
		} catch (\Exception $e) {
			error_log("Advanced Media Offloader: Error checking connection to S3: {$e->getMessage()}");
			return false;
		}
	}
}
