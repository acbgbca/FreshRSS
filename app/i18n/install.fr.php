<?php
return array (
	'freshrss_installation'		=> 'Installation · FreshRSS',
	'freshrss'			=> 'FreshRSS',
	'installation_step'		=> 'Installation — étape %d · FreshRSS',
	'steps'				=> 'Étapes',
	'checks'			=> 'Vérifications',
	'general_configuration'	=> 'Configuration générale',
	'bdd_configuration'		=> 'Base de données',
	'bdd_type'		=> 'Type de base de données',
	'version_update'		=> 'Mise à jour',
	'this_is_the_end'		=> 'This is the end',

	'ok'				=> 'Ok !',
	'congratulations'		=> 'Félicitations !',
	'attention'			=> 'Attention !',
	'damn'				=> 'Arf !',
	'oops'				=> 'Oups !',
	'next_step'			=> 'Passer à l’étape suivante',

	'language_defined'		=> 'La langue a bien été définie.',
	'choose_language'		=> 'Choisissez la langue pour FreshRSS',

	'javascript_is_better'		=> 'FreshRSS est plus agréable à utiliser avec JavaScript activé',
	'php_is_ok'			=> 'Votre version de PHP est la %s, qui est compatible avec FreshRSS',
	'php_is_nok'			=> 'Votre version de PHP est la %s mais FreshRSS requiert au moins la version %s',
	'minz_is_ok'			=> 'Vous disposez du framework Minz',
	'minz_is_nok'			=> 'Vous ne disposez pas de la librairie Minz. Vous devriez exécuter le script <em>build.sh</em> ou bien <a href="https://github.com/marienfressinaud/MINZ">la télécharger sur Github</a> et installer dans le répertoire <em>%s</em> le contenu de son répertoire <em>/lib</em>.',
	'curl_is_ok'			=> 'Vous disposez de cURL dans sa version %s',
	'curl_is_nok'			=> 'Vous ne disposez pas de cURL (paquet php5-curl)',
	'pdomysql_is_ok'		=> 'Vous disposez de PDO et de son driver pour MySQL (paquet php5-mysql)',
	'pdomysql_is_nok'		=> 'Vous ne disposez pas de PDO ou de son driver pour MySQL',
	'dom_is_ok'			=> 'Vous disposez du nécessaire pour parcourir le DOM',
	'dom_is_nok'			=> 'Il manque une librairie pour parcourir le DOM (paquet php-xml)',
	'pcre_is_ok'			=> 'Vous disposez du nécessaire pour les expressions régulières (PCRE)',
	'pcre_is_nok'			=> 'Il manque une librairie pour les expressions régulières (php-pcre)',
	'ctype_is_ok'			=> 'Vous disposez du nécessaire pour la vérification des types de caractères (ctype)',
	'ctype_is_nok'			=> 'Il manque une librairie pour la vérification des types de caractères (php-ctype)',
	'cache_is_ok'			=> 'Les droits sur le répertoire de cache sont bons',
	'log_is_ok'			=> 'Les droits sur le répertoire des logs sont bons',
	'favicons_is_ok'		=> 'Les droits sur le répertoire des favicons sont bons',
	'data_is_ok'			=> 'Les droits sur le répertoire de data sont bons',
	'persona_is_ok'			=> 'Les droits sur le répertoire de Mozilla Persona sont bons',
	'file_is_nok'			=> 'Veuillez vérifier les droits sur le répertoire <em>%s</em>. Le serveur HTTP doit être capable d’écrire dedans',
	'fix_errors_before'		=> 'Veuillez corriger les erreurs avant de passer à l’étape suivante.',

	'general_conf_is_ok'		=> 'La configuration générale a été enregistrée.',
	'random_string'			=> 'Chaîne aléatoire',
	'change_value'			=> 'Vous devriez changer cette valeur par n’importe quelle autre',
	'base_url'			=> 'Base de l’URL',
	'do_not_change_if_doubt'	=> 'Laissez tel quel dans le doute',

	'bdd_conf_is_ok'		=> 'La configuration de la base de données a été enregistrée.',
	'bdd_conf_is_ko'		=> 'Vérifiez les informations d’accès à la base de données.',
	'host'				=> 'Hôte',
	'bdd'				=> 'Base de données',
	'prefix'			=> 'Préfixe des tables',

	'update_start'			=> 'Lancer la mise à jour',
	'update_long'			=> 'Ce processus peut prendre longtemps, selon la taille de votre base de données. Vous aurez peut-être à attendre que cette page dépasse son temps maximum d’exécution (~5 minutes) puis à la recharger.',

	'installation_is_ok'		=> 'L’installation s’est bien passée.<br />La dernière étape va maintenant tenter de supprimer le fichier <kbd>./p/i/install.php</kbd>, ainsi que d’éventuelles copies de base de données créées durant le processus de mise à jour.<br />Vous pouvez choisir de sauter cette étape et de supprimer <kbd>./p/i/install.php</kbd> manuellement.',
	'finish_installation'		=> 'Terminer l’installation',
	'install_not_deleted'		=> 'Quelque chose s’est mal passé, vous devez supprimer le fichier <em>%s</em> à la main.',
);
