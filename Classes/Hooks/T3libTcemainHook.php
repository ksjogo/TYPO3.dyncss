<?php

namespace KayStrobach\Dyncss\Hooks;
use TYPO3\CMS\Core\DataHandling\DataHandler;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use KayStrobach\Dyncss\Utility\Config;

/**
 * @todo missing docblock
 */
class T3libTcemainHook {

	/**
     * Deletes DynCss cache folders
	 *
	 * @param array $params
	 * @param \TYPO3\CMS\Core\DataHandling\DataHandler $pObj
	 */
	function clearCachePostProc(array $params, DataHandler &$pObj) {
		if(!isset($params['cacheCmd'])) {
			return;
		}
		switch($params['cacheCmd']) {
        case 'dyncss':
            GeneralUtility::rmdir(
                Config::$cachePath,
                TRUE
            );
            break;
        default:

		}
	}
}
