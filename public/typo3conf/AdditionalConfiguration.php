<?php
defined('TYPO3_MODE') || die();

$additionalConfig = dirname(__DIR__, 2) . '/config/env/' . strtolower(str_replace('/', '-', getenv('ENVIRONMENT_NAME'))) . '/config.php';

if (is_file($additionalConfig)) {
    $GLOBALS['TYPO3_CONF_VARS'] = array_replace_recursive(
        $GLOBALS['TYPO3_CONF_VARS'],
        require $additionalConfig
    );
} else {
    die($additionalConfig.' .env file, helhum/dotenv-connector, /config/env/* is/are missing, invalid or incomplete. Terminating.');
}
