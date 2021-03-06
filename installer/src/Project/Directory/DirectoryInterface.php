<?php

namespace Message\Mothership\Install\Project\Directory;

/**
 * Interface DirectoryInterface
 * @package Message\Mothership\Install\Project\Directory
 *
 * Interface for directories to be created on installation
 */
interface DirectoryInterface
{
	/**
	 * Get path of directory
	 *
	 * @return string
	 */
	public function getPath();

	/**
	 * Get permission of directory
	 *
	 * @return int
	 */
	public function getPermission();
}