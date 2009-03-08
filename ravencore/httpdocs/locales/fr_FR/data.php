<?php

// the $trans array key is first two letters as ISO 639 language code, underscore,
// and the last two letters ISO 3166 country code.
// ex: en_US  ru_RU  nb_NO  etc

$trans['fr_FR'] = array(

   'Name' =>
   'Nom',
   'Add Database' =>
   'Ajouter BDD',
   'Invalid password. Must only contain letters and numbers, must be atleast 5 characters, and not a dictionary word' =>
   'Mot de passe incorrect. (seul. des lettres et nombres, au moins 5 caract. et ne pas �tre un mot du dictionnaire).',
   'Adding a user for database' =>
   'Ajouter un usag� pour la BDD',
   'Login' =>
   'Identification',
   'Password' =>
   'Mot de passe',
   'Add User' =>
   'Ajouter un usager',
   'Your record name and target cannot be the same.' =>
   'Le nom RECORD et la destination ne peuvent �tre le m�me.',
   'You cannot enter in a full domain as the record name.' =>
   'Vous ne pouvez entrer un domaine entier comme nom RECORD.',
   'You already have a default SOA record set' =>
   'Vous avez d�j� un SOA enregistr�',
   'Default Start of Authority' =>
   'Start of Authority par d�faut',
   'Record Name' =>
   'Nom RECORD',
   'Target IP' =>
   'IP de destination',
   'Nameserver' =>
   'Serveur de nom',
   'Mail for the domain' =>
   'Courriel pour le domaine',
   'MX Preference' =>
   'Pr�f�rence MX',
   'Mail Server' =>
   'Serveur de courriel',
   'Alias name' =>
   'Nom d\'alias',
   'Target name' =>
   'Nom de destination',
   'Reverse pointer records are not yet available' =>
   'Les pointeurs invers�s ne sont pas encore disponibles',
   'Invalid DNS record type' =>
   'Type de RECORD DNS invalide',
   'Add Record' =>
   'Ajouter un RECORD',
   'Start of Authority for' =>
   'Start of Authority pour',
   'Mail for' =>
   'Courriel pour',
   'must not be an IP!' =>
   '',
   'The server doesn\'t have PHP session functions available.<p>Please recompile PHP with sessions enabled.' =>
   'Le serveur n\'a pas les fonctions PHP. Veuillez recompiler PHP avec les sessions activ�es.',
   'You are missing the database configuration file:' =>
   'Il manque le fichier de configuration de la BDD',
   '/database.cfg<p>Please run the following script as root:<p>' =>
   '/database.php<p>Veuillez, en ROOT, ex�cuter:<p>',
   '/sbin/database_reconfig' =>
   '/sbin/database_reconfig',
   '' =>
   '',
   'Your system is unable to set uid to root with the wrapper. This is required for ravencore to function. To correct this:<p>' =>
   'Votre syst�me ne peut, m�me avec le WRAPPER, changer le UID � root. Ceci est obligatoire pour Ravencore. Pour corriger:<p>',
   'the file: <b>/usr/local/ravencore/sbin/wrapper</b><p>' =>
   'le fichier <b>/usr/local/ravencore/sbin/wrapper</b><p>',
   'do one of the following:<p>' =>
   'faite l\'un des choix suivants',
   'Install <b>gcc</b> and the package that includes <b>/usr/include/sys/types.h</b> and restart ravencore<br />\n' =>
   'Installer <b>GCC</b>, le paquetage qui inclue <b>/usr/include/sys/types.h</b> et red�marrez Ravencore',
   '/>\n' =>
   '/>\n',
   'Install the <b>perl-suidperl</b> package and restart ravencore<br />\n' =>
   'Installer le paquetage <b>perl-suidperl</b> et red�marrer Ravencore<br />\n',
   '/>\n' =>
   '/>\n',
   'Copy the wrapper binary from another server with ravencore installed into ravencore\'s sbin/ on this server' =>
   'Copiez le binaire du WRAPPER d\'un autre serveur Ravencore dans le dossier sbin de Ravencore sur le pr�sent serveur',
   '' =>
   '',
   'to call the mysql_connect function. \n' =>
   'pour appeler la fonction mysql_connect.',
   '\t\t\tPlease install the php-mysql package or recompile PHP with mysql support, and restart the control panel.<p>\n' =>
   '\t\t\tVeuillez installer php-mysql ou recompiler PHP avec le support MySQL. Ensuite, red�marrez Ravencore.<p>\n',
   'php-mysql is installed on the server, check to make sure that the mysql.so extention is getting loaded in your system\'s php.ini file' =>
   'php-mysql est install� sur le serveur: V�rifiez que l\'extension mysql.so est charg�e par votre php.ini',
   'Unable to get a database connection.' =>
   'Incapable de connecter � une BDD.',
   'Login locked.' =>
   'Identification v�rouill�e.',
   'Login failure.' =>
   '�chec de l\'identification',
   'Control panel is locked for users, because your \"lock if outdated\" setting is active, and we appear to be outdated.' =>
   'Panneau de contr�le verrouill� pour les usagers pcq "V�rouill� si plus � jour" activ�. Et nous ne sommes plus � jour',
   'Login locked because control panel is outdated.' =>
   'Identification impossible Panneau de contr�le plus � jour.',
   'API command failed. This server is configured as a master server.' =>
   '�chec de commande API. Ce serveur est configur� comme ma�tre.',
   'You must agree to the GPL License to use RavenCore.' =>
   'Vous devez accepter la license GPL pour utiliser Ravencore.',
   'Please read the GPL License and select the \"I agree\" checkbox below' =>
   'Veuillez lire la license GPL et cocher \"J\'accepte\" ci-dessous',
   'The GPL License should appear in the frame below' =>
   'La license GPL devrait para�tre dans le c�dre ci-dessous',
   'I agree to these terms and conditions.' =>
   'J\'accepte ces termes et conditions.',
   'Welcome, and thank you for using RavenCore!' =>
   'Bienvenue et merci d\'utiliser Ravencore!',
   '' =>
   '',
   'installed and/or upgraded some packages that require new configuration settings. \n' =>
   'a install�/mis � jour des paquetages qui requierent des nouvelles configurations. \n',
   'take a moment to review these settings. We recomend that you keep the default values, \n' =>
   'prennez un moment pour revoir ces configs. Nous recommandons de garder les valeurs par d�faut, \n',
   'if you know what you are doing, you may adjust them to your liking.\n' =>
   'si vous savez ce que vous faites, vous pouvez les ajuster � souhait.\n',
   '' =>
   '',
   'configuration' =>
   'configuration',
   'Submit' =>
   'Soumettre',
   'Control Panel is being upgraded. Login Locked.' =>
   'Panneau de contr�le en cours de mise � niveau. Identification verrouill�e.',
   'The password is incorrect!' =>
   'Mot de passe incorrect!',
   'The new password must be greater than 4 characters and not a dictionary word' =>
   'Le nouveau MDP doit avoir + de 4 caract�res et ne pas �tre un mot de dictionnaire',
   'Cannot select MySQL database' =>
   'Ne peut connecter � MySQL DB',
   'Cannot change database password' =>
   'Ne peut changer mot de passe de DB',
   'Unable to flush database privileges' =>
   'Incapable de flusher les privil�ges de DB',
   'Cannot open .shadow file' =>
   'Ne peut ouvrir le fichier shadow',
   'Your passwords are not the same!' =>
   'Vos MDP diff�rent',
   'Please change the password for' =>
   'Veuillez changer le MDP pour',
   'Changing' =>
   'Change',
   'password!' =>
   'mot de passe!',
   'Old Password' =>
   'Ancien MDP',
   'New Password' =>
   'Nouveau MDP',
   'Confirm New' =>
   'Confirmez nouveau',
   'Change Password' =>
   'Changer MDP',
   'Add a crontab' =>
   'Ajouter un CRONTAB',
   'There are no crontabs.' =>
   'Il n\'y a pas de CRONTAB.',
   'User' =>
   'Usag�',
   'Choose a user' =>
   'Choisissez un usag�',
   'Delete Selected' =>
   'Effacer la s�lection',
   'Entry' =>
   'Entr�e',
   'Add Crontab' =>
   'Ajouter CRONTAB',
   'Unable to use mysql database' =>
   'Incapable d\'utilise la DB MySQL',
   'That database does not exist' =>
   'La DB n\'existe pas',
   'Add a Database' =>
   'Ajouter un DB',
   'No databases setup' =>
   'Aucune DB configur�e',
   'Databases for' =>
   'DB pour',
   'Are you sure you wish to delete this database?' =>
   'Vous d�sirez vraiment effacer cette DB?',
   'delete' =>
   'effacer',
   'Users for the' =>
   'Usagers pour la',
   'database' =>
   'DB',
   'Add a database user' =>
   'Ajouter un usager pour cette DB',
   'No users for this database' =>
   'Aucun usag� pour cette DB',
   'Delete' =>
   'Effacer',
   'Are you sure you wish to delete this database user?' =>
   'D�sirez-vous vraiment effacer cet usag� de DB?',
   'Note: You may only manage one database user at a time with the phpmyadmin' =>
   'Note: phpmyadmin ne permet le gestion que d\'un usag� � la fois',
   'Search' =>
   'Recherche',
   'Please enter in a search value!' =>
   'Entrez une valeur � chercher!',
   'Show All' =>
   'Montrer tout',
   'There are no databases setup' =>
   'Il n\'y a pas de DB configur�e',
   'Your search returned' =>
   'Votre recherche a retourn�',
   'results' =>
   'r�sultats',
   'Domain' =>
   'Domaine',
   'Database' =>
   'BDD',
   'No DNS records setup on the server' =>
   'aucune entr�e DNS configur�e sur le serveur',
   'The following domains are setup for DNS' =>
   'Les domaines suivants ont des entr�es DNS',
   'Records' =>
   'Entr�es',
   'No SOA record setup for this domain' =>
   'Aucun SOA configur� pour ce domaine',
   'Add SOA record' =>
   'Ajouter un SOA',
   'DNS for' =>
   'DNS pour',
   'Start of Authority for' =>
   'Start of Authority pour',
   'is' =>
   'est',
   'No DNS records setup for this domain' =>
   'Aucun DNS configur� pour ce domaine',
   'Record Type' =>
   'Type de RECORD',
   'Record Target' =>
   'Destination RECORD',
   'Add record' =>
   'Ajouter RECORD',
   'Add' =>
   'Ajouter',
   'No default DNS records setup for this server' =>
   'Aucun DNS par d�faut n\'est configur� pour ce serveur',
   'Default DNS for domains setup on this server' =>
   'DNS par d�faut configur�s sur ce serveur',
   'Domains for' =>
   'Domaines pour',
   'There are no domains setup' =>
   'Il n\'y a pas de domaine',
   'Add a Domain' =>
   'Ajouter un domaine',
   'Go' =>
   'Envoyer',
   'Please enter a search value!' =>
   'Entrez une valeur � chercher!',
   'Space usage' =>
   'Espace utilis�',
   'Traffic usage' =>
   'Bande passante utilis�e',
   'View setup information for' =>
   'Voir les infos de config pour',
   'Totals' =>
   'Totaux',
   'You are at your limit for the number of domains you can have' =>
   'Vous avez atteint la limite permise pour le nombre de domaines',
   'Add a domain to the server' =>
   'Ajouter un domaine',
   'Domain does not exist' =>
   'Domaine inexistant',
   'This domain belongs to' =>
   'Ce domaine appartient �',
   'No One' =>
   'Personne',
   'Change' =>
   'Changer',
   'Info for' =>
   'Infos pour',
   'Delete this domain off the server' =>
   'Effacer ce domaine du serveur',
   'Are you sure you wish to delete this domain' =>
   'D�sirez-vous vraiement effacer ce domaine',
   'Created' =>
   'Cr�� le',
   'Status' =>
   'Statut',
   'ON' =>
   'ON',
   'Are you sure you wish to turn off hosting for this domain' =>
   'D�sirez-vous vraiment d�sactiver l\'h�bergement de ce domaine',
   'Turn OFF hosting for this domain' =>
   'D�sactiver l\'h�bergement du domaine',
   'OFF' =>
   'OFF',
   'Turn ON hosting for this domain' =>
   'Activer l\'h�bergement du domaine',
   'Physical Hosting' =>
   'H�bergement physique',
   'View/Edit Physical hosting for this domain' =>
   'Voir/modifier l\'h�bergement physique du domaine',
   'edit' =>
   '�diter',
   'Redirect' =>
   'Redirection',
   'View/Edit where this domain redirects to' =>
   'Voir/modifier la redirection du domaine',
   'Alias of' =>
   'Alias de',
   'View/Edit what this domain is a server alias of' =>
   'Voir/modifier l\'alias du domaine',
   'No Hosting' =>
   'Pas d\'h�bergement',
   'Setup hosting for this domain' =>
   'Configurer l\'h�bergement de ce domaine',
   'Go to the File Manager for this domain' =>
   'Aller au gestionnaire de fichiers du domaine',
   'The file manager is currently offline' =>
   'Gestionnaire de fichiers d�sactiv�',
   'File Manager' =>
   'Gestionnaire de fichiers',
   'View/Edit Custom Error Documents for this domain' =>
   'Voir/modifier les documents d\'erreurs personnalis�s',
   'Error Documents' =>
   'Documents d\'erreurs',
   'View/Edit Mail for this domain' =>
   'Voir/modifier courriel du domaine',
   'Mail' =>
   'Courriel',
   '( off )' =>
   '( off )',
   'View/Edit databases for this domain' =>
   'Voir/modifier les BDD du domaine',
   'Databases' =>
   'BDD',
   'Manage DNS for this domain' =>
   'Configurer les DNS du domaine',
   'DNS Records' =>
   'Entr�es DNS',
   'View Webstats for this domain' =>
   'Voir statistiques d\'achalandages',
   'Webstats' =>
   'Stats Web',
   'Domain Usage' =>
   'Statistiques d\'utilisation du domaine',
   'Disk space usage' =>
   'Espace disque utilis�',
   'This month\'s bandwidth' =>
   'Bande passante du mois',
   'Illegal argument' =>
   'Argument ill�gal',
   'Please enter the domain name you wish to setup' =>
   'Veuillez entrer le nom de domaine � configurer',
   'Invalid domain name. Please re-enter the domain name without the www.' =>
   'Nom de domaine invalide. Veuillez recommencer sans le www.',
   'Invalid domain name. May only contain letters, numbers, dashes and dots. Must not start or end with a dash or a dot, and a dash and a dot cannot be next to each other' =>
   'Nom de domaine invalide. Ne peut contenir que: lettres, nombres, traits d\'union et points. Doit commencer par une lettre/nombre. 2 traits ou points ne peuvent se suivre',
   'Control Panel User' =>
   'Usag� du panneau de contr�le',
   'Select One' =>
   'Choisissez',
   'Add domain' =>
   'Ajouter domaine',
   'Add Domain' =>
   'Ajouter domaine',
   'Proceed to hosting setup' =>
   'Ex�cuter les configs d\'h�bergement',
   'Add default DNS to this domain' =>
   'Ajouter les DNS par d�faut',
   'That email address already exists' =>
   'L\'adresse courriel existe d�j�',
   'Your passwords do not match' =>
   'Vos mots de passe diff�rent',
   'You selected you wanted a redirect, but left the address blank' =>
   'Vous d�sirez une redirection, mais le champ destination est vide',
   'Invalid password. Must only contain letters and numbers.' =>
   'MDP incorrect. Doit contenir lettres et nombres seulement.',
   'The redirect list contains an invalid email address.' =>
   'La liste contient une adresse courriel invalide.',
   'Invalid mailname. It may only contain letters, number, dashes, dots, and underscores. Must both start and end with either a letter or number.' =>
   'MAILNAME invalide. Doit contenir lettres, nombres, trait d\'union ou soulignement et point. Doit d�buter ET terminer par une lettre ou un nombre.',
   'Mail is disabled for' =>
   'Courriel d�sactiv� pour',
   '. You can not add an email address for it.' =>
   '. Vous ne pouvez ajouter un courriel pour lui.',
   'Edit' =>
   'Modifier',
   'mail' =>
   'courriel',
   'Mail Name' =>
   'Nom courriel',
   'Confirm' =>
   'Confirmez',
   'Mailbox' =>
   'Bo�te de courriel',
   'Mail will not be stored on the server if you disable this option. Are you sure you wish to do this?' =>
   'Les courriels ne seront pas livr� sur ce serveir avec cette option. �tes-vous certain de vouloir ceci?',
   'List email addresses here, seperate each with a comma and a space' =>
   'Listez les courriels ici, s�par�s chacun d\une virgule ET d\'un espace',
   'Add Mail' =>
   'Ajouter courriel',
   'Update' =>
   'Mise � jour',
   'You must enter a name for this user' =>
   'Vous devez entrer un nom d\'usag�',
   'You must enter a password for this user' =>
   'Vous devez entrer un MDP pour cet usag�',
   'Your password must be atleast 5 characters long, and not a dictionary word.' =>
   'Votre MDP doit contenir au moins 5 caract. et ne pas �tre un mot du dictionnaire.',
   'The email address entered is invalid' =>
   'Le courriel saisi est invalide',
   'info' =>
   'infos',
   'Full Name' =>
   'Nom complet',
   'Email Address' =>
   'Adresse courriel',
   'Edit Info' =>
   'Modifier infos',
   'Proceed to Permissions Setup' =>
   'Continuer avec les permissions',
   'Required fields' =>
   'Champs requis',
   'Are you sure you wish to delete this user?' =>
   'D�sirez-vous vraiment effacet cet usag�?',
   'No custom error documents setup.' =>
   'Aucun documents d\'erreurs personnalis�s.',
   'Add Custom Error Document' =>
   'Ajouter un document d\'erreur personnalis�',
   'Code' =>
   'Code',
   'File' =>
   'Fichier',
   'List HTTP Status Codes' =>
   'Lister les codes HTTP',
   'This server does not have' =>
   'Ce serveur n\'a pas',
   'installed. Page cannot be displayed.' =>
   'install�. Impossible d\'afficher la page.',
   'Unable to connect to DB server! Attempting to restart mysql' =>
   'Incapable de connecter � la BDD! Essai de red�marrage de MySQL',
   'Restart command completed. Please refresh the page.' =>
   'Red�marrage compl�t�. Veuillez rafra�chir la page.',
   'If the problem persists, contact the system administrator' =>
   'Si le probl�me persiste, contactez l\'administrateur',
   'You are not authorized to view this page' =>
   'Vous n\'�tes pas autoris� � voir cette page',
   'List control panel users' =>
   'Lister les usag�s du panneau de contr�le',
   'Users' =>
   'Usagers',
   'List domains' =>
   'Lister les domaines',
   'Domains' =>
   'Domaines',
   'List email addresses' =>
   'Lister les adresses courriel',
   'List databases' =>
   'Lister les BDD',
   'DNS for domains on this server' =>
   'Domaines avec DNS sur ce serveur',
   'DNS' =>
   'DNS',
   'Manage system settings' =>
   'G�rer les pr�f�rences syst�me',
   'System' =>
   'Syst�me',
   'Goto main server index page' =>
   'Aller � la page d\'accueil',
   'Main Menu' =>
   'Menu principal',
   'List your domains' =>
   'Lister vos domaines',
   'My Domains' =>
   'Mes domaines',
   'List all your email accounts' =>
   'Lister tous les comptes courriels',
   'My email accounts' =>
   'Mes comptes courriels',
   'Logout' =>
   'Quitter',
   'Are you sure you wish to logout?' =>
   'D�sirez-vous vraiment quitter?',
   'Are you sure you wish to delete hosting for this domain?' =>
   'D�sirez-vous vraiment effacer l\'h�bergement de ce domaine?',
   'delete hosting' =>
   'effacer h�bergement',
   'www prefix' =>
   'pr�fixe www',
   'Yes' =>
   'Oui',
   'No' =>
   'Non',
   'FTP Username' =>
   'Usag� FTP',
   'FTP Password' =>
   'MDP FTP',
   'Shell' =>
   'Console',
   'SSL Support' =>
   'Support SSL',
   'If you disable ssl support, you will not be able to enable it again.\\rAre you sure you wish to do this?' =>
   'Si vous d�sactivez le support SSL, vous ne pourrez le remettre.\\r�tes-vous certains de vouloir ceci?',
   'PHP Support' =>
   'Support PHP',
   'If you disable php support, you will not be able to enable it again.\\rAre you sure you wish to do this?' =>
   'Si vous d�sactivez le support PHP, vous ne pourrez le remettre.\\r�tes-vous certains de vouloir ceci?',
   'CGI Support' =>
   'Support CGI',
   'If you disable cgi support, you will not be able to enable it again.\\rAre you sure you wish to do this?' =>
   'Si vous d�sactivez le support CGI, vous ne pourrez le remettre.\\r�tes-vous certains de vouloir ceci?',
   'Directory indexing' =>
   'Index des r�pertoires',
   'This domain is an alias of' =>
   'Ce domaine est un alias de',
   'Host on this server' =>
   'H�berger sur ce serveur',
   'Redirect to another domain' =>
   'Rediriger vers un autre domaine',
   'Show contents of another site on this server' =>
   'Afficher le contenu d\'un autre domaine sur ce serveur',
   'Continue' =>
   'Continuer',
   'Are you sure you wish to delete this log file?' =>
   'D�sirez-vous vraiment effacer ce ficher LOG?',
   'Log files for' =>
   'Fichiers LOG pour',
   'Manage' =>
   'G�rer',
   'Go to log rotation manager for' =>
   'Aller � la gestion de rotation des LOGS pour',
   'Log Rotation' =>
   'Rotation des LOGS',
   'Log Name' =>
   'Nom du LOG',
   'Compression' =>
   'Compression',
   'File Size' =>
   'Taille du fichier',
   'Download the' =>
   'T�l�charger le',
   'Custom log rotation for' =>
   'Rotation perso des LGOS pour',
   'is' =>
   'est',
   'Are you sure you wish to turn off the custom log rotation for' =>
   'D�sirez-vous vraiment d�sactiver la rotation perso des LOGS pour',
   'Turn OFF log rotation for' =>
   'D�sactiver la rotation des LOGS pour',
   'Turn ON log rotation for' =>
   'Activer la rotation des LOGS pour',
   'You must choose how many log files you wish to keep!' =>
   'Vous devez indiquer combien de ficheirs LOGS garder!',
   'You must make a rotation selection: filesize, date, or both' =>
   'Vous devez dire comment faire la rotation: taille, date ou les 2',
   'Keep' =>
   'Garder',
   'log files' =>
   'fichiers LOGS',
   'Rotate by' =>
   'Faire la rotation par',
   'Filesize' =>
   'Taille de fichier',
   'Date' =>
   'Date',
   'Daily' =>
   'Quotidiennement',
   'Weekly' =>
   'Hebdomadairement',
   'Monthly' =>
   'Mensuellement',
   'Email about-to-expire files to' =>
   'Envoyer les fichier � expirer par courriel �',
   'Compress log files' =>
   'Compresser les LOGS',
   'No domains setup, so there are no Log files' =>
   'Aucun domaine configur�... Donc, aucun LOG',
   'Please Login' =>
   'Veuillez vous identifier',
   'Username' =>
   'Usag�',
   'Language' =>
   'Langue',
   'English' =>
   'Anglais',
   'Your login is secure' =>
   'Identification s�curis�e',
   'Go to Secure Login' =>
   'Aller � l\'identification s�curis�e',
   'Goto' =>
   'Aller �',
   'Turn ON mail for' =>
   'Activer le courriel pour',
   'Turn OFF mail for' =>
   'D�sactiver le courriel pour',
   'Are you sure you wish to disable mail for this domain?' =>
   'D�sirez-vous vraiment d�sactiver le courriel pour ce domaine?',
   'Mail sent to email accounts not set up for this domain ( catchall address )' =>
   'Courriels envoy�s aux adresses inexistantes de ce domaine (attrape tout)',
   'Send to' =>
   'Envoyer �',
   'Bounce with' =>
   'Rebondir avec',
   'Delete it' =>
   'Effacer',
   'Forward to that user' =>
   'Rediriger vers',
   'You need at least two domains in the account with mail turned on to be able to alias mail' =>
   'Vous devez avour au moins 2 domaines votre compte ayant les courriels activ�s pour pouvoir aliasser',
   'No mail for this domain.' =>
   'Aucun courriel pour ce domaine.',
   'Mail for this domain' =>
   'Courriel pour ce domaine',
   'Webmail' =>
   'Courriel Web',
   'Webmail is currently offline' =>
   'Courriel Web d�sactiv�',
   'offline' =>
   'd�sactiv�',
   'If you delete this email, you may not be able to add it again.\\rAre you sure you wish to do this?' =>
   'Si vous effacez ce courriel, vous nepourez le r�-ajouter.\\rD�sirez-vous vraiment ceci?',
   'Are you sure you wish to delete this email?' =>
   'D�sirez-vous vraiment effacer ce courriel?',
   'This user is only allowed to create' =>
   'Ce compte ne peut cr�er que',
   'email accounts. Are you sure you want to add another?' =>
   'compte de courriels. D�sirez-vous en ajouter un autre?',
   'Add an email account' =>
   'Ajouter un compte courriel',
   'You have no domains setup.' =>
   'Aucun domaine configur�.',
   'Create a new email account' =>
   'Cr�er un compte courriel',
   'Add an email address' =>
   'Ajouter une adresse courriel',
   'There are no mail users setup' =>
   'Aucun usag� courriel configur�',
   'Email Addresses' =>
   'Adresses courriel',
   'Service' =>
   'Service',
   'Running' =>
   'Activ�',
   'Start' =>
   'D�marrer',
   'Stop' =>
   'Arr�ter',
   'Restart' =>
   'Red�marrer',
   'IP Address' =>
   'Adresse IP',
   'Session Time' =>
   'Dur�e de session',
   'Idle Time' =>
   'Dur�e inactive',
   'Remove' =>
   'D�truire',
   'Stop/Start system services such as httpd, mail, etc' =>
   'Arr�ter/d�marrer les services tels HTTP, courriel, etc',
   'System Services' =>
   'Services syst�me',
   'View who is logged into the server, and where from' =>
   'Voyez qui est identifi� au serveur, et d\'o�',
   'Login Sessions' =>
   'Sessions identifi�es',
   'Services that automatically start when the server boots up' =>
   'Services d�marrant automatiquement avec le serveur',
   'Startup Services' =>
   'D�marrage automatique',
   'The DNS records that are setup for a domain by default when one is added to the server' =>
   'Les entr�es DNS par d�faut �tant configur�es lors de la cr�ation d\'un nouveau domaine',
   'Default DNS' =>
   'DNS par d�faut',
   'Change the admin password' =>
   'Changer le MDP admin',
   'Change Admin Password' =>
   'Changer le MDP admin',
   'Load phpMyAdmin for all with MySQL admin user' =>
   'Charger phpMyAdmin pour tous avec les privil�ges admin MySQL',
   'Admin MySQL Databases' =>
   'Administrer les BDD MySQL',
   'View general system information' =>
   'Infos syst�me g�n�rales',
   'System Info' =>
   'Infos syst�me',
   'View output from the phpinfo() function' =>
   'Voir phpinfo()',
   'PHP Info' =>
   'PHP info',
   'View Mail Queue' =>
   'Voir la queue de courriel',
   'Are you sure you wish to reboot the system?' =>
   'D�sirez-vous vraiment red�marrer le serveur?',
   'Reboot the server' =>
   'Red�marrer le serveur',
   'Reboot Server' =>
   'Red�marrer le serveur',
   'You are about to shutdown the system. There is no way to bring the server back online with this software. Are you sure you wish to shutdown the system?' =>
   'Vous allez �teindre le serveur. Il n\'existe aucun moyen de le rallumer avec ce logiciel. D�sirez-vous vraiment mettre le serveur hors tension?',
   'Shutdown the server' =>
   '�teindre le serveur',
   'Shutdown Server' =>
   '�teindre le serveur',
   'This user can' =>
   'Cet usager peut',
   'Create' =>
   'Cr�er',
   'Note: A negative limit mean unlimited' =>
   'Note: un nombre n�gatif signifie sans limite',
   'You can\'t add domains' =>
   'Vous ne pouvez pas ajouter un domaine',
   'You can\'t add databases' =>
   'Vous ne pouvez pas ajouter une BDD',
   'You can\'t add cron jobs' =>
   'Vous ne pouvez pas ajouter une t�che CRON',
   'You can\'t add email addresses' =>
   'Vous ne pouvez pas ajouter des comptes courriel',
   'You can\'t add DNS records' =>
   'Vous ne pouvez pas ajouter des entr�es DNS',
   'You can\'t add cgi to hosting on any domains' =>
   'Vous ne pouvez pas activer CGI sur un domaine',
   'You can\'t add php to hosting on any domains' =>
   'Vous ne pouvez pas activer PHP sur un domaine',
   'You can\'t add ssl to hosting on any domains' =>
   'Vous ne pouvez pas activer le SSL sur un domaine',
   'You can\'t add shell users' =>
   'Vous ne pouvez pas ajouter un usag� de console',
   'There are no users setup' =>
   'Il n\'y a pas d\'usager',
   'View user data for' =>
   'Voyez les infos pour',
   'Add a user to the control panel' =>
   'Ajouter un usager au syst�me',
   'Add a Control Panel user' =>
   'Ajouter un usager au syst�me',
   'User does not exist' =>
   'Usag� inexistant',
   'This user is locked out due to failed login attempts' =>
   'Usag� verrouill� pour cause d\'�chec d\'identification',
   'Unlock' =>
   'D�v�rouiller',
   'Company' =>
   'Compagnie',
   'Contact email' =>
   'Courriel de contact',
   'Login ID' =>
   'Compte d\'usag�',
   'Edit account info' =>
   'Modifier le compte',
   'See what you can and can not do' =>
   'Voyez ce que vous pouvez et ne pouvez faire',
   'View/Edit Permissions' =>
   'Voir/modifier les permissions',
   'View Permissions' =>
   'Voir les permissions',
   'Options' =>
   'Options',
   'You have no domains setup' =>
   'Aucun domaine configur�',
   'No domains setup' =>
   'Aucun domaine configur�',
   'For which domain' =>
   'Pour quel domaine',
   'Back' =>
   'Retour',
   'Add a MySQL database' =>
   'Ajouter une BDD MySQL',
   'Add E-Mail Account' =>
   'Ajouter un compte courriel',
   'Add/Edit DNS records' =>
   'Ajouter/modifier une entr�e DNS',
   'View Webstatistics' =>
   'Voir les statistiques d\'achalandages',
   'List all of your domain names' =>
   'Lister tous vos domaines',
   'List Domains' =>
   'Lister les domaines',
   'This user is at his/her domain limit' =>
   'Cet usag� a atteint sa limite de domaines',
   'Add one anyway' =>
   'Ajouter quand m�me',
   'Domain usage' =>
   'Statistiques d\'utilisation du domaine',
   'Traffic usage (This month)' =>
   'Bande passante ce mois-ci',
   'is not setup for physical hosting. Webstats are not available' =>
   'n\'est pas configur� pour h�bergement physique. Aucune Statistique disponible',
   'OK' =>
   'OK'

   );

?>
