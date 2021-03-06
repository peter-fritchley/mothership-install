<?php

namespace Message\Mothership\Install\Project\Directory;

/**
 * Class PublicFilesDirectory
 * @package Message\Mothership\Install\Project\Directory
 *
 * @author Thomas Marchant <thomas@message.co.uk>
 */
class PublicFilesDirectory implements DirectoryInterface
{
	/**
	 * {@inheritDoc}
	 */
	public function getPath()
	{
		return 'public/files';
	}

	/**
	 * {@inheritDoc}
	 */
	public function getPermission()
	{
		return 0777;
	}
}