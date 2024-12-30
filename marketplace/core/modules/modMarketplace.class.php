<?php
/* Copyright (C) 2004-2018  Laurent Destailleur     <eldy@users.sourceforge.net>
 * Copyright (C) 2018-2019  Nicolas ZABOURI         <info@inovea-conseil.com>
 * Copyright (C) 2019-2020  Frédéric France         <frederic.france@netlogic.fr>
 * Copyright (C) 2024 Alice Adminson
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <https://www.gnu.org/licenses/>.
 */

/**
 * 	\defgroup   marketplace     Module Marketplace
 *  \brief      Marketplace module descriptor.
 *
 *  \file       htdocs/marketplace/core/modules/modMarketplace.class.php
 *  \ingroup    marketplace
 *  \brief      Description and activation file for module Marketplace
 */
include_once DOL_DOCUMENT_ROOT.'/core/modules/DolibarrModules.class.php';
include_once DOL_DOCUMENT_ROOT.'/societe/class/societe.class.php';
include_once DOL_DOCUMENT_ROOT.'/categories/class/categorie.class.php';


/**
 *  Description and activation class for module Marketplace
 */
class modMarketplace extends DolibarrModules
{
	/**
	 * Constructor. Define names, constants, directories, boxes, permissions
	 *
	 * @param DoliDB $db Database handler
	 */
	public function __construct($db)
	{
		$this->db = $db;

		// Id for module (must be unique).
		// Use here a free id (See in Home -> System information -> Dolibarr for list of used modules id).
		$this->numero = 110000; // TODO Go on page https://wiki.dolibarr.org/index.php/List_of_modules_id to reserve an id number for your module

		// Key text used to identify module (for permissions, menus, etc...)
		$this->rights_class = 'marketplace';

		// Family can be 'base' (core modules),'crm','financial','hr','projects','products','ecm','technic' (transverse modules),'interface' (link with external tools),'other','...'
		// It is used to group modules by family in module setup page
		$this->family = "portal";

		// Module position in the family on 2 digits ('01', '10', '20', ...)
		$this->module_position = '90';

		// Gives the possibility for the module, to provide his own family info and position of this family (Overwrite $this->family and $this->module_position. Avoid this)
		//$this->familyinfo = array('myownfamily' => array('position' => '01', 'label' => $langs->trans("MyOwnFamily")));
		// Module label (no space allowed), used if translation string 'ModuleMarketplaceName' not found (Marketplace is name of module).
		$this->name = preg_replace('/^mod/i', '', get_class($this));

		// Module description, used if translation string 'ModuleMarketplaceDesc' not found (Marketplace is name of module).
		$this->description = "This module provide the features to publish an online market place. It is for example used for the v2 of dolistore.com. The module provides a ready to use template of a website that can be used with the Dolibarr website module. It also offer various tools to manage your marketplace.";
		// Used only if file README.md and README-LL.md not found.
		$this->descriptionlong = "MarketplaceDescription";

		// Author
		$this->editor_name = 'DoliCloud';
		$this->editor_url = 'https://www.dolicloud.com';

		// Possible values for version are: 'development', 'experimental', 'dolibarr', 'dolibarr_deprecated', 'experimental_deprecated' or a version string like 'x.y.z'
		$this->version = '1.0';
		// Url to the file with your last numberversion of this module
		//$this->url_last_version = 'http://www.example.com/versionmodule.txt';

		// Key used in llx_const table to save module status enabled/disabled (where MARKETPLACE is value of property name of module in uppercase)
		$this->const_name = 'MAIN_MODULE_'.strtoupper($this->name);

		// Name of image file used for this module.
		// If file is in theme/yourtheme/img directory under name object_pictovalue.png, use this->picto='pictovalue'
		// If file is in module/img directory under name object_pictovalue.png, use this->picto='pictovalue@module'
		// To use a supported fa-xxx css style of font awesome, use this->picto='xxx'
		$this->picto = 'fa-store';

		// Define some features supported by module (triggers, login, substitutions, menus, css, etc...)
		$this->module_parts = array(
			// Set this to 1 if module has its own trigger directory (core/triggers)
			'triggers' => 0,
			// Set this to 1 if module has its own login method file (core/login)
			'login' => 0,
			// Set this to 1 if module has its own substitution function file (core/substitutions)
			'substitutions' => 0,
			// Set this to 1 if module has its own menus handler directory (core/menus)
			'menus' => 0,
			// Set this to 1 if module overwrite template dir (core/tpl)
			'tpl' => 0,
			// Set this to 1 if module has its own barcode directory (core/modules/barcode)
			'barcode' => 0,
			// Set this to 1 if module has its own models directory (core/modules/xxx)
			'models' => 0,
			// Set this to 1 if module has its own printing directory (core/modules/printing)
			'printing' => 0,
			// Set this to 1 if module has its own theme directory (theme)
			'theme' => 0,
			// Set this to relative path of css file if module has its own css file
			'css' => array(
				//    '/marketplace/css/marketplace.css.php',
			),
			// Set this to relative path of js file if module must load a js on all pages
			'js' => array(
				//   '/marketplace/js/marketplace.js.php',
			),
			// Set here all hooks context managed by module. To find available hook context, make a "grep -r '>initHooks(' *" on source code. You can also set hook context to 'all'
			'hooks' => array(
				//   'data' => array(
				//       'hookcontext1',
				//       'hookcontext2',
				//   ),
				//   'entity' => '0',
			),
			// Set this to 1 if features of module are opened to external users
			'moduleforexternal' => 0,
			// Set this to 1 if the module provides a website template into doctemplates/websites/website_template-mytemplate
			'websitetemplates' => 1
		);

		// Data directories to create when module is enabled.
		// Example: this->dirs = array("/marketplace/temp","/marketplace/subdir");
		$this->dirs = array("/marketplace/temp");

		// Config pages. Put here list of php page, stored into marketplace/admin directory, to use to setup module.
		$this->config_page_url = array("setup.php@marketplace");

		// Dependencies
		// A condition to hide module
		$this->hidden = false;
		// List of module class names that must be enabled if this module is enabled. Example: array('always'=>array('modModuleToEnable1','modModuleToEnable2'), 'FR'=>array('modModuleToEnableFR')...)
		$this->depends = array('always'=>array('modSociete', 'modFournisseur', 'modProduct', 'modService', 'modCategorie', 'modCommande', 'modFacture', 'modBanque', 'modMailing', 'modWebsite'));
		// List of module class names to disable if this one is disabled. Example: array('modModuleToDisable1', ...)
		$this->requiredby = array();
		// List of module class names this module is in conflict with. Example: array('modModuleToDisable1', ...)
		$this->conflictwith = array();

		// The language file dedicated to your module
		$this->langfiles = array("marketplace@marketplace");

		// Prerequisites
		$this->phpmin = array(7, 0); // Minimum version of PHP required by module
		$this->need_dolibarr_version = array(20, -3); // Minimum version of Dolibarr required by module
		$this->need_javascript_ajax = 0;

		// Messages at activation
		$this->warnings_activation = array(); // Warning to show when we activate module. array('always'='text') or array('FR'='textfr','MX'='textmx'...)
		$this->warnings_activation_ext = array(); // Warning to show when we activate an external module. array('always'='text') or array('FR'='textfr','MX'='textmx'...)
		//$this->automatic_activation = array('FR'=>'MarketplaceWasAutomaticallyActivatedBecauseOfYourCountryChoice');
		//$this->always_enabled = true;								// If true, can't be disabled

		// Constants
		// List of particular constants to add when module is enabled (key, 'chaine', value, desc, visible, 'current' or 'allentities', deleteonunactive)
		// Example: $this->const=array(1 => array('MARKETPLACE_MYNEWCONST1', 'chaine', 'myvalue', 'This is a constant to add', 1),
		//                             2 => array('MARKETPLACE_MYNEWCONST2', 'chaine', 'myvalue', 'This is another constant to add', 0, 'current', 1)
		// );
		$this->const = array(
			1 => array('PRODUCT_USE_OTHER_FIELD_IN_TRANSLATION', 'chaine', '1', 'Constant to support multiple translation of private notes on products', 1),
		);

		// Some keys to add into the overwriting translation tables
		/*$this->overwrite_translation = array(
			'en_US:ParentCompany'=>'Parent company or reseller',
			'fr_FR:ParentCompany'=>'Maison mère ou revendeur'
		)*/

		if (!ismodEnabled('marketplace')) {
			$this->marketplace = new stdClass();
			$this->marketplace->enabled = 0;
		}

		// Array to add new pages in new tabs
		$this->tabs = array();
		// Example:
		// $this->tabs[] = array('data'=>'objecttype:+tabname1:Title1:mylangfile@marketplace:$user->rights->marketplace->read:/marketplace/mynewtab1.php?id=__ID__');  					// To add a new tab identified by code tabname1
		// $this->tabs[] = array('data'=>'objecttype:+tabname2:SUBSTITUTION_Title2:mylangfile@marketplace:$user->rights->othermodule->read:/marketplace/mynewtab2.php?id=__ID__',  	// To add another new tab identified by code tabname2. Label will be result of calling all substitution functions on 'Title2' key.
		// $this->tabs[] = array('data'=>'objecttype:-tabname:NU:conditiontoremove');                                                     										// To remove an existing tab identified by code tabname
		//
		// Where objecttype can be
		// 'categories_x'	  to add a tab in category view (replace 'x' by type of category (0=product, 1=supplier, 2=customer, 3=member)
		// 'contact'          to add a tab in contact view
		// 'contract'         to add a tab in contract view
		// 'group'            to add a tab in group view
		// 'intervention'     to add a tab in intervention view
		// 'invoice'          to add a tab in customer invoice view
		// 'invoice_supplier' to add a tab in supplier invoice view
		// 'member'           to add a tab in fundation member view
		// 'opensurveypoll'	  to add a tab in opensurvey poll view
		// 'order'            to add a tab in sale order view
		// 'order_supplier'   to add a tab in supplier order view
		// 'payment'		  to add a tab in payment view
		// 'payment_supplier' to add a tab in supplier payment view
		// 'product'          to add a tab in product view
		// 'propal'           to add a tab in propal view
		// 'project'          to add a tab in project view
		// 'stock'            to add a tab in stock view
		// 'thirdparty'       to add a tab in third party view
		// 'user'             to add a tab in user view

		// Dictionaries
		/* Example:
		 $this->dictionaries=array(
		 'langs'=>'marketplace@marketplace',
		 // List of tables we want to see into dictonnary editor
		 'tabname'=>array("table1", "table2", "table3"),
		 // Label of tables
		 'tablib'=>array("Table1", "Table2", "Table3"),
		 // Request to select fields
		 'tabsql'=>array('SELECT f.rowid as rowid, f.code, f.label, f.active FROM '.MAIN_DB_PREFIX.'table1 as f', 'SELECT f.rowid as rowid, f.code, f.label, f.active FROM '.MAIN_DB_PREFIX.'table2 as f', 'SELECT f.rowid as rowid, f.code, f.label, f.active FROM '.MAIN_DB_PREFIX.'table3 as f'),
		 // Sort orderhelp
		 'tabsqlsort'=>array("label ASC", "label ASC", "label ASC"),
		 // List of fields (result of select to show dictionary)
		 'tabfield'=>array("code,label", "code,label", "code,label"),
		 // List of fields (list of fields to edit a record)
		 'tabfieldvalue'=>array("code,label", "code,label", "code,label"),
		 // List of fields (list of fields for insert)
		 'tabfieldinsert'=>array("code,label", "code,label", "code,label"),
		 // Name of columns with primary key (try to always name it 'rowid')
		 'tabrowid'=>array("rowid", "rowid", "rowid"),
		 // Condition to show each dictionary
		 'tabcond'=>array(isModEnabled('marketplace'), isModEnabled('marketplace'), isModEnabled('marketplace')),
		 // Tooltip for every fields of dictionaries: DO NOT PUT AN EMPTY ARRAY
		 'tabhelp'=>array(array('code'=>$langs->trans('CodeTooltipHelp'), 'field2' => 'field2tooltip'), array('code'=>$langs->trans('CodeTooltipHelp'), 'field2' => 'field2tooltip'), ...),
		 );
		 */
		/* BEGIN MODULEBUILDER DICTIONARIES */
		$this->dictionaries = array();
		/* END MODULEBUILDER DICTIONARIES */

		// Boxes/Widgets
		// Add here list of php file(s) stored in marketplace/core/boxes that contains a class to show a widget.
		/* BEGIN MODULEBUILDER WIDGETS */
		$this->boxes = array(
			//  0 => array(
			//      'file' => 'marketplacewidget1.php@marketplace',
			//      'note' => 'Widget provided by Marketplace',
			//      'enabledbydefaulton' => 'Home',
			//  ),
			//  ...
		);
		/* END MODULEBUILDER WIDGETS */

		// Cronjobs (List of cron jobs entries to add when module is enabled)
		// unit_frequency must be 60 for minute, 3600 for hour, 86400 for day, 604800 for week
		/* BEGIN MODULEBUILDER CRON */
		$this->cronjobs = array(
			//  0 => array(
			//      'label' => 'MyJob label',
			//      'jobtype' => 'method',
			//      'class' => '/marketplace/class/myobject.class.php',
			//      'objectname' => 'MyObject',
			//      'method' => 'doScheduledJob',
			//      'parameters' => '',
			//      'comment' => 'Comment',
			//      'frequency' => 2,
			//      'unitfrequency' => 3600,
			//      'status' => 0,
			//      'test' => 'isModEnabled("marketplace")',
			//      'priority' => 50,
			//  ),
		);
		/* END MODULEBUILDER CRON */
		// Example: $this->cronjobs=array(
		//    0=>array('label'=>'My label', 'jobtype'=>'method', 'class'=>'/dir/class/file.class.php', 'objectname'=>'MyClass', 'method'=>'myMethod', 'parameters'=>'param1, param2', 'comment'=>'Comment', 'frequency'=>2, 'unitfrequency'=>3600, 'status'=>0, 'test'=>'isModEnabled("marketplace")', 'priority'=>50),
		//    1=>array('label'=>'My label', 'jobtype'=>'command', 'command'=>'', 'parameters'=>'param1, param2', 'comment'=>'Comment', 'frequency'=>1, 'unitfrequency'=>3600*24, 'status'=>0, 'test'=>'isModEnabled("marketplace")', 'priority'=>50)
		// );

		// Permissions provided by this module
		$this->rights = array();
		$r = 0;
		// Add here entries to declare new permissions
		/* BEGIN MODULEBUILDER PERMISSIONS */
		/*
		$o = 1;
		$this->rights[$r][0] = $this->numero . sprintf("%02d", ($o * 10) + 1); // Permission id (must not be already used)
		$this->rights[$r][1] = 'Read objects of Marketplace'; // Permission label
		$this->rights[$r][4] = 'myobject';
		$this->rights[$r][5] = 'read'; // In php code, permission will be checked by test if ($user->hasRight('marketplace', 'myobject', 'read'))
		$r++;
		$this->rights[$r][0] = $this->numero . sprintf("%02d", ($o * 10) + 2); // Permission id (must not be already used)
		$this->rights[$r][1] = 'Create/Update objects of Marketplace'; // Permission label
		$this->rights[$r][4] = 'myobject';
		$this->rights[$r][5] = 'write'; // In php code, permission will be checked by test if ($user->hasRight('marketplace', 'myobject', 'write'))
		$r++;
		$this->rights[$r][0] = $this->numero . sprintf("%02d", ($o * 10) + 3); // Permission id (must not be already used)
		$this->rights[$r][1] = 'Delete objects of Marketplace'; // Permission label
		$this->rights[$r][4] = 'myobject';
		$this->rights[$r][5] = 'delete'; // In php code, permission will be checked by test if ($user->rights->marketplace->myobject->delete)
		$r++;
		*/
		/* END MODULEBUILDER PERMISSIONS */

		// Main menu entries to add
		$this->menu = array();
		$r = 0;
		// Add here entries to declare new menus
		/* BEGIN MODULEBUILDER TOPMENU */
		$this->menu[$r++] = array(
			'fk_menu'=>'', // '' if this is a top menu. For left menu, use 'fk_mainmenu=xxx' or 'fk_mainmenu=xxx,fk_leftmenu=yyy' where xxx is mainmenucode and yyy is a leftmenucode
			'type'=>'top', // This is a Top menu entry
			'titre'=>'ModuleMarketplaceName',
			'prefix' => img_picto('', $this->picto, 'class="pictofixedwidth valignmiddle"'),
			'mainmenu'=>'marketplace',
			'leftmenu'=>'',
			'url'=>'/marketplace/marketplaceindex.php',
			'langs'=>'marketplace@marketplace', // Lang file to use (without .lang) by module. File must be in langs/code_CODE/ directory.
			'position'=>1000 + $r,
			'enabled'=>'isModEnabled("marketplace")', // Define condition to show or hide menu entry. Use 'isModEnabled("marketplace")' if entry must be visible if module is enabled.
			'perms'=>'1', // Use 'perms'=>'$user->hasRight("marketplace", "myobject", "read")' if you want your menu with a permission rules
			'target'=>'',
			'user'=>2, // 0=Menu for internal users, 1=external users, 2=both
		);
		/* END MODULEBUILDER TOPMENU */
		/* BEGIN MODULEBUILDER LEFTMENU MYOBJECT */
		/*$this->menu[$r++]=array(
			'fk_menu'=>'fk_mainmenu=marketplace',      // '' if this is a top menu. For left menu, use 'fk_mainmenu=xxx' or 'fk_mainmenu=xxx,fk_leftmenu=yyy' where xxx is mainmenucode and yyy is a leftmenucode
			'type'=>'left',                          // This is a Left menu entry
			'titre'=>'MyObject',
			'prefix' => img_picto('', $this->picto, 'class="pictofixedwidth valignmiddle paddingright"'),
			'mainmenu'=>'marketplace',
			'leftmenu'=>'myobject',
			'url'=>'/marketplace/marketplaceindex.php',
			'langs'=>'marketplace@marketplace',	        // Lang file to use (without .lang) by module. File must be in langs/code_CODE/ directory.
			'position'=>1000+$r,
			'enabled'=>'isModEnabled("marketplace")', // Define condition to show or hide menu entry. Use 'isModEnabled("marketplace")' if entry must be visible if module is enabled.
			'perms'=>'$user->hasRight("marketplace", "myobject", "read")',
			'target'=>'',
			'user'=>2,				                // 0=Menu for internal users, 1=external users, 2=both
		);
		$this->menu[$r++]=array(
			'fk_menu'=>'fk_mainmenu=marketplace,fk_leftmenu=myobject',	    // '' if this is a top menu. For left menu, use 'fk_mainmenu=xxx' or 'fk_mainmenu=xxx,fk_leftmenu=yyy' where xxx is mainmenucode and yyy is a leftmenucode
			'type'=>'left',			                // This is a Left menu entry
			'titre'=>'List_MyObject',
			'mainmenu'=>'marketplace',
			'leftmenu'=>'marketplace_myobject_list',
			'url'=>'/marketplace/myobject_list.php',
			'langs'=>'marketplace@marketplace',	        // Lang file to use (without .lang) by module. File must be in langs/code_CODE/ directory.
			'position'=>1000+$r,
			'enabled'=>'isModEnabled("marketplace")', // Define condition to show or hide menu entry. Use 'isModEnabled("marketplace")' if entry must be visible if module is enabled.
			'perms'=>'$user->hasRight("marketplace", "myobject", "read")'
			'target'=>'',
			'user'=>2,				                // 0=Menu for internal users, 1=external users, 2=both
		);
		$this->menu[$r++]=array(
			'fk_menu'=>'fk_mainmenu=marketplace,fk_leftmenu=myobject',	    // '' if this is a top menu. For left menu, use 'fk_mainmenu=xxx' or 'fk_mainmenu=xxx,fk_leftmenu=yyy' where xxx is mainmenucode and yyy is a leftmenucode
			'type'=>'left',			                // This is a Left menu entry
			'titre'=>'New_MyObject',
			'mainmenu'=>'marketplace',
			'leftmenu'=>'marketplace_myobject_new',
			'url'=>'/marketplace/myobject_card.php?action=create',
			'langs'=>'marketplace@marketplace',	        // Lang file to use (without .lang) by module. File must be in langs/code_CODE/ directory.
			'position'=>1000+$r,
			'enabled'=>'isModEnabled("marketplace")', // Define condition to show or hide menu entry. Use 'isModEnabled("marketplace")' if entry must be visible if module is enabled. Use '$leftmenu==\'system\'' to show if leftmenu system is selected.
			'perms'=>'$user->hasRight("marketplace", "myobject", "write")'
			'target'=>'',
			'user'=>2,				                // 0=Menu for internal users, 1=external users, 2=both
		);*/
		/* END MODULEBUILDER LEFTMENU MYOBJECT */
		// Exports profiles provided by this module
		$r = 1;
		/* BEGIN MODULEBUILDER EXPORT MYOBJECT */
		/*
		$langs->load("marketplace@marketplace");
		$this->export_code[$r]=$this->rights_class.'_'.$r;
		$this->export_label[$r]='MyObjectLines';	// Translation key (used only if key ExportDataset_xxx_z not found)
		$this->export_icon[$r]='myobject@marketplace';
		// Define $this->export_fields_array, $this->export_TypeFields_array and $this->export_entities_array
		$keyforclass = 'MyObject'; $keyforclassfile='/marketplace/class/myobject.class.php'; $keyforelement='myobject@marketplace';
		include DOL_DOCUMENT_ROOT.'/core/commonfieldsinexport.inc.php';
		//$this->export_fields_array[$r]['t.fieldtoadd']='FieldToAdd'; $this->export_TypeFields_array[$r]['t.fieldtoadd']='Text';
		//unset($this->export_fields_array[$r]['t.fieldtoremove']);
		//$keyforclass = 'MyObjectLine'; $keyforclassfile='/marketplace/class/myobject.class.php'; $keyforelement='myobjectline@marketplace'; $keyforalias='tl';
		//include DOL_DOCUMENT_ROOT.'/core/commonfieldsinexport.inc.php';
		$keyforselect='myobject'; $keyforaliasextra='extra'; $keyforelement='myobject@marketplace';
		include DOL_DOCUMENT_ROOT.'/core/extrafieldsinexport.inc.php';
		//$keyforselect='myobjectline'; $keyforaliasextra='extraline'; $keyforelement='myobjectline@marketplace';
		//include DOL_DOCUMENT_ROOT.'/core/extrafieldsinexport.inc.php';
		//$this->export_dependencies_array[$r] = array('myobjectline'=>array('tl.rowid','tl.ref')); // To force to activate one or several fields if we select some fields that need same (like to select a unique key if we ask a field of a child to avoid the DISTINCT to discard them, or for computed field than need several other fields)
		//$this->export_special_array[$r] = array('t.field'=>'...');
		//$this->export_examplevalues_array[$r] = array('t.field'=>'Example');
		//$this->export_help_array[$r] = array('t.field'=>'FieldDescHelp');
		$this->export_sql_start[$r]='SELECT DISTINCT ';
		$this->export_sql_end[$r]  =' FROM '.MAIN_DB_PREFIX.'myobject as t';
		//$this->export_sql_end[$r]  =' LEFT JOIN '.MAIN_DB_PREFIX.'myobject_line as tl ON tl.fk_myobject = t.rowid';
		$this->export_sql_end[$r] .=' WHERE 1 = 1';
		$this->export_sql_end[$r] .=' AND t.entity IN ('.getEntity('myobject').')';
		$r++; */
		/* END MODULEBUILDER EXPORT MYOBJECT */

		// Imports profiles provided by this module
		$r = 1;
		/* BEGIN MODULEBUILDER IMPORT MYOBJECT */
		/*
		$langs->load("marketplace@marketplace");
		$this->import_code[$r]=$this->rights_class.'_'.$r;
		$this->import_label[$r]='MyObjectLines';	// Translation key (used only if key ExportDataset_xxx_z not found)
		$this->import_icon[$r]='myobject@marketplace';
		$this->import_tables_array[$r] = array('t' => MAIN_DB_PREFIX.'marketplace_myobject', 'extra' => MAIN_DB_PREFIX.'marketplace_myobject_extrafields');
		$this->import_tables_creator_array[$r] = array('t' => 'fk_user_author'); // Fields to store import user id
		$import_sample = array();
		$keyforclass = 'MyObject'; $keyforclassfile='/marketplace/class/myobject.class.php'; $keyforelement='myobject@marketplace';
		include DOL_DOCUMENT_ROOT.'/core/commonfieldsinimport.inc.php';
		$import_extrafield_sample = array();
		$keyforselect='myobject'; $keyforaliasextra='extra'; $keyforelement='myobject@marketplace';
		include DOL_DOCUMENT_ROOT.'/core/extrafieldsinimport.inc.php';
		$this->import_fieldshidden_array[$r] = array('extra.fk_object' => 'lastrowid-'.MAIN_DB_PREFIX.'marketplace_myobject');
		$this->import_regex_array[$r] = array();
		$this->import_examplevalues_array[$r] = array_merge($import_sample, $import_extrafield_sample);
		$this->import_updatekeys_array[$r] = array('t.ref' => 'Ref');
		$this->import_convertvalue_array[$r] = array(
			't.ref' => array(
				'rule'=>'getrefifauto',
				'class'=>(!getDolGlobalString('MARKETPLACE_MYOBJECT_ADDON') ? 'mod_myobject_standard' : getDolGlobalString('MARKETPLACE_MYOBJECT_ADDON')),
				'path'=>"/core/modules/commande/".(!getDolGlobalString('MARKETPLACE_MYOBJECT_ADDON') ? 'mod_myobject_standard' : getDolGlobalString('MARKETPLACE_MYOBJECT_ADDON')).'.php'
				'classobject'=>'MyObject',
				'pathobject'=>'/marketplace/class/myobject.class.php',
			),
			't.fk_soc' => array('rule' => 'fetchidfromref', 'file' => '/societe/class/societe.class.php', 'class' => 'Societe', 'method' => 'fetch', 'element' => 'ThirdParty'),
			't.fk_user_valid' => array('rule' => 'fetchidfromref', 'file' => '/user/class/user.class.php', 'class' => 'User', 'method' => 'fetch', 'element' => 'user'),
			't.fk_mode_reglement' => array('rule' => 'fetchidfromcodeorlabel', 'file' => '/compta/paiement/class/cpaiement.class.php', 'class' => 'Cpaiement', 'method' => 'fetch', 'element' => 'cpayment'),
		);
		$this->import_run_sql_after_array[$r] = array();
		$r++; */
		/* END MODULEBUILDER IMPORT MYOBJECT */
	}

	/**
	 *  Function called when module is enabled.
	 *  The init function add constants, boxes, permissions and menus (defined in constructor) into Dolibarr database.
	 *  It also creates data directories
	 *
	 *  @param      string  $options    Options when enabling module ('', 'noboxes')
	 *  @return     int             	1 if OK, 0 if KO
	 */
	public function init($options = '')
	{
		global $conf, $langs, $user;

		$langs->loadLangs(array("marketplace@marketplace"));

		$action = GETPOST('action', 'aZ09');

		//$result = $this->_load_tables('/install/mysql/', 'marketplace');
		$result = $this->_load_tables('/marketplace/sql/');
		if ($result < 0) {
			return -1; // Do not activate module if error 'not allowed' returned when loading module SQL queries (the _load_table run sql with run_sql with the error allowed parameter set to 'default')
		}

		// Create extrafields during init
		include_once DOL_DOCUMENT_ROOT.'/core/class/extrafields.class.php';
		$extrafields = new ExtraFields($this->db);
		$result1=$extrafields->addExtraField('marketplace_separator',            "Marketplace", 'separator', 1,  0, 'product',   0, 0, '', array('options'=>array(1=>1)), 1, '', 1, 0, '', '', 'marketplace@marketplace', 'isModEnabled("marketplace")');
		$result2=$extrafields->addExtraField('marketplace_module_version',       "ModuleVersion", 'varchar', 10,  12, 'product',   0, 0, '', '', 1, '', -1, 0, '', '', 'marketplace@marketplace', 'isModEnabled("marketplace")');
		$result3=$extrafields->addExtraField('marketplace_min_version',          "DolibarrMin", 'varchar', 20,  12, 'product',   0, 0, '', '', 1, '', -1, 0, '', '', 'marketplace@marketplace', 'isModEnabled("marketplace")');
		$result4=$extrafields->addExtraField('marketplace_max_version',          "DolibarrMax", 'varchar', 30,  12, 'product',   0, 0, '', '', 1, '', -1, 0, '', '', 'marketplace@marketplace', 'isModEnabled("marketplace")');
		$result5=$extrafields->addExtraField('marketplace_allow_source_in_core', "WantToIncludeSourceInCore", 'boolean', 40,  3, 'product',   0, 0, '', '', 1, '', -1, 0, '', '', 'marketplace@marketplace', 'isModEnabled("marketplace")');
		$result6=$extrafields->addExtraField('marketplace_contact_support',      "HowtoContactSupport", 'varchar', 50,  255, 'product',   0, 0, '', '', 1, '', -1, 0, '', '', 'marketplace@marketplace', 'isModEnabled("marketplace")');
		$result6=$extrafields->addExtraField('marketplace_reason_disabled',      "LastReasonDisabled", 'varchar', 60,  255, 'product',   0, 0, '', '', 1, '', -1, 0, '', '', 'marketplace@marketplace', 'isModEnabled("marketplace")');
		$result6=$extrafields->addExtraField('marketplace_old_url',              "OldSystemUrl", 'varchar', 70,  255, 'product',   0, 0, '', '', 1, '', -1, 0, '', '', 'marketplace@marketplace', 'isModEnabled("marketplace")');
		$result7=$extrafields->addExtraField('marketplace_module_keywords',    	 "ModuleKeywords", 'varchar', 80,  2555, 'product',   0, 0, '', '', 1, '', -1, 0, '', '', 'marketplace@marketplace', 'isModEnabled("marketplace")');

		// Permissions
		$this->remove($options);

		$sql = array();

		// Document templates
		/*
		$moduledir = dol_sanitizeFileName('marketplace');
		$myTmpObjects = array();
		$myTmpObjects['MyObject'] = array('includerefgeneration'=>0, 'includedocgeneration'=>0);

		foreach ($myTmpObjects as $myTmpObjectKey => $myTmpObjectArray) {
			if ($myTmpObjectArray['includerefgeneration']) {
				$src = DOL_DOCUMENT_ROOT.'/install/doctemplates/'.$moduledir.'/template_myobjects.odt';
				$dirodt = DOL_DATA_ROOT.'/doctemplates/'.$moduledir;
				$dest = $dirodt.'/template_myobjects.odt';

				if (file_exists($src) && !file_exists($dest)) {
					require_once DOL_DOCUMENT_ROOT.'/core/lib/files.lib.php';
					dol_mkdir($dirodt);
					$result = dol_copy($src, $dest, 0, 0);
					if ($result < 0) {
						$langs->load("errors");
						$this->error = $langs->trans('ErrorFailToCopyFile', $src, $dest);
						return 0;
					}
				}

				$sql = array_merge($sql, array(
					"DELETE FROM ".MAIN_DB_PREFIX."document_model WHERE nom = 'standard_".strtolower($myTmpObjectKey)."' AND type = '".$this->db->escape(strtolower($myTmpObjectKey))."' AND entity = ".((int) $conf->entity),
					"INSERT INTO ".MAIN_DB_PREFIX."document_model (nom, type, entity) VALUES('standard_".strtolower($myTmpObjectKey)."', '".$this->db->escape(strtolower($myTmpObjectKey))."', ".((int) $conf->entity).")",
					"DELETE FROM ".MAIN_DB_PREFIX."document_model WHERE nom = 'generic_".strtolower($myTmpObjectKey)."_odt' AND type = '".$this->db->escape(strtolower($myTmpObjectKey))."' AND entity = ".((int) $conf->entity),
					"INSERT INTO ".MAIN_DB_PREFIX."document_model (nom, type, entity) VALUES('generic_".strtolower($myTmpObjectKey)."_odt', '".$this->db->escape(strtolower($myTmpObjectKey))."', ".((int) $conf->entity).")"
				));
			}
		}
		*/


		// Default customer
		$categories = new Categorie($this->db);
		$cate_arbo = $categories->get_full_arbo('customer', 0, 1);
		if (!getDolGlobalInt('MARKETPLACE_PROSPECTCUSTOMER_ID')) {	// If a category was already set into the setup page
			if (!count($cate_arbo) || !getDolGlobalString('MARKETPLACE_PROSPECTCUSTOMER_ID')) {
				$category = new Categorie($this->db);
				$category->label = $langs->trans("DefaultMarketPlaceCustomersCatLabel");
				$category->type = Categorie::TYPE_CUSTOMER;

				$result = $category->create($user);

				if ($result > 0) {
					dolibarr_set_const($this->db, 'MARKETPLACE_PROSPECTCUSTOMER_ID', $result, 'chaine', 0, 'Id of category for marketplace customers', $conf->entity);

					/* TODO Create a generic product only if there is no product yet. If 0 product,  we create 1. If there is already product, it is better to show a message to ask to add product in the category */
					/*
					 $product = new Product($this->db);
					 $product->status = 1;
					 $product->ref = "takepos";
					 $product->label = $langs->trans("DefaultMarketPlaceCatLabel");
					 $product->create($user);
					 $product->setCategories($result);
					 */
				} else {
					setEventMessages($category->error, $category->errors, 'errors');
				}
			}
		}

		// Default sellers
		$categories = new Categorie($this->db);
		$cate_arbo = $categories->get_full_arbo('supplier', 0, 1);
		if (!getDolGlobalInt('MARKETPLACE_VENDOR_ID')) {	// If a category was already set into the setup page
			if (!count($cate_arbo) || !getDolGlobalString('MARKETPLACE_VENDOR_ID')) {
				$category = new Categorie($this->db);
				$category->label = $langs->trans("DefaultMarketPlaceVendorsCatLabel");
				$category->type = Categorie::TYPE_SUPPLIER;

				$result = $category->create($user);

				if ($result > 0) {
					dolibarr_set_const($this->db, 'MARKETPLACE_VENDOR_ID', $result, 'chaine', 0, 'Id of category for marketplace vendors', $conf->entity);

					/* TODO Create a generic product only if there is no product yet. If 0 product,  we create 1. If there is already product, it is better to show a message to ask to add product in the category */
					/*
					 $product = new Product($this->db);
					 $product->status = 1;
					 $product->ref = "takepos";
					 $product->label = $langs->trans("DefaultMarketPlaceCatLabel");
					 $product->create($user);
					 $product->setCategories($result);
					 */
				} else {
					setEventMessages($category->error, $category->errors, 'errors');
				}
			}
		}

		// Create Preferred customer category if not exists
		$categories = new Categorie($this->db);
		$cate_arbo = $categories->get_full_arbo('customer', 0, 1);
		if (!getDolGlobalInt('MARKETPLACE_PROSPECTCUSTOMER_PREFERRED_ID')) {	// If a category was already set into the setup page
			if (!count($cate_arbo) || !getDolGlobalString('MARKETPLACE_PROSPECTCUSTOMER_PREFERRED_ID')) {
				$category = new Categorie($this->db);
				$category->label = $langs->trans("DefaultMarketPlacePreferredCustomersCatLabel");
				$category->type = Categorie::TYPE_CUSTOMER;

				$result = $category->create($user);

				if ($result > 0) {
					dolibarr_set_const($this->db, 'MARKETPLACE_PROSPECTCUSTOMER_PREFERRED_ID', $result, 'chaine', 0, 'Id of category for marketplace preferred customers', $conf->entity);
				} else {
					setEventMessages($category->error, $category->errors, 'errors');
				}
			}
		}

		// Create products category to exclude from discounts if not exists
		$categories = new Categorie($this->db);
		$cate_arbo = $categories->get_full_arbo('product', 0, 1);
		if (!getDolGlobalInt('MARKETPLACE_DISCOUNT_EXCLUDE_PRODUCTS_CATEGORY_ID')) {	// If a category was already set into the setup page
			if (!count($cate_arbo) || !getDolGlobalString('MARKETPLACE_DISCOUNT_EXCLUDE_PRODUCTS_CATEGORY_ID')) {
				$category = new Categorie($this->db);
				$category->label = $langs->trans("DefaultMarketPlaceProductsCatDiscountExcludeLabel");
				$category->type = Categorie::TYPE_PRODUCT;

				$result = $category->create($user);

				if ($result > 0) {
					dolibarr_set_const($this->db, 'MARKETPLACE_DISCOUNT_EXCLUDE_PRODUCTS_CATEGORY_ID', $result, 'chaine', 0, 'Category ID of products to exclude from discounts for preferred marketplace customers', $conf->entity);
				} else {
					setEventMessages($category->error, $category->errors, 'errors');
				}
			}
		}


		// Create product category DefaultMarketPlaceCatLabel if not exists
		$categories = new Categorie($this->db);
		$cate_arbo = $categories->get_full_arbo('product', 0, 1);
		if (is_array($cate_arbo)) {
			if (!count($cate_arbo) || !getDolGlobalString('MARKETPLACE_ROOT_CATEGORY_ID')) {
				$category = new Categorie($this->db);
				$category->label = $langs->trans("DefaultMarketPlaceCatLabel");
				$category->type = Categorie::TYPE_PRODUCT;

				$result = $category->create($user);

				if ($result > 0) {
					dolibarr_set_const($this->db, 'MARKETPLACE_ROOT_CATEGORY_ID', $result, 'chaine', 0, 'Id of category for products visible in marketplace', $conf->entity);

					/* TODO Create a generic product only if there is no product yet. If 0 product,  we create 1. If there is already product, it is better to show a message to ask to add product in the category */
					/*
					 $product = new Product($this->db);
					 $product->status = 1;
					 $product->ref = "takepos";
					 $product->label = $langs->trans("DefaultMarketPlaceCatLabel");
					 $product->create($user);
					 $product->setCategories($result);
					 */
				} else {
					setEventMessages($category->error, $category->errors, 'errors');
				}
			}
		}

		// Create product category Versions if not exists
		$categories = new Categorie($this->db);
		$cate_arbo = $categories->get_full_arbo('product', 0, 1);
		if (is_array($cate_arbo)) {
			if (!count($cate_arbo) || !getDolGlobalString('MARKETPLACE_VERSIONS_CATEGORY_ID')) {
				$category = new Categorie($this->db);
				$category->label = $langs->trans("Versions");
				$category->type = Categorie::TYPE_PRODUCT;

				$result = $category->create($user);

				if ($result > 0) {
					dolibarr_set_const($this->db, 'MARKETPLACE_VERSIONS_CATEGORY_ID', $result, 'chaine', 0, 'Id of category for products versions in marketplace', $conf->entity);

					/* TODO Create a generic product only if there is no product yet. If 0 product,  we create 1. If there is already product, it is better to show a message to ask to add product in the category */
					/*
					 $product = new Product($this->db);
					 $product->status = 1;
					 $product->ref = "takepos";
					 $product->label = $langs->trans("Versions");
					 $product->create($user);
					 $product->setCategories($result);
					 */
				} else {
					setEventMessages($category->error, $category->errors, 'errors');
				}
			}
		}

		// Create product category DefaultSpecialCatLabel if not exists
		$categories = new Categorie($this->db);
		$cate_arbo = $categories->get_full_arbo('product', 0, 1);
		if (is_array($cate_arbo)) {
			if (!count($cate_arbo) || !getDolGlobalString('MARKETPLACE_SPECIAL_CATEGORY_ID')) {
				$category = new Categorie($this->db);
				$category->label = $langs->trans("Discounts");
				$category->type = Categorie::TYPE_PRODUCT;

				$result = $category->create($user);

				if ($result > 0) {
					dolibarr_set_const($this->db, 'MARKETPLACE_SPECIAL_CATEGORY_ID', $result, 'chaine', 0, 'Id of category for products in promotions in marketplace', $conf->entity);

					/* TODO Create a generic product only if there is no product yet. If 0 product,  we create 1. If there is already product, it is better to show a message to ask to add product in the category */
					/*
					 $product = new Product($this->db);
					 $product->status = 1;
					 $product->ref = "takepos";
					 $product->label = $langs->trans("DefaultSpecialCatLabel");
					 $product->create($user);
					 $product->setCategories($result);
					 */
				} else {
					setEventMessages($category->error, $category->errors, 'errors');
				}
			}
		}

		// Delete email templates if action is reload
		if ($action == 'reload') {
			if (!empty(getDolGlobalInt("MARKETPLACE_WELCOME_EMAIL_TEMPLATE"))) {
				$delete_email_sql = "DELETE FROM ".MAIN_DB_PREFIX."c_email_templates WHERE label = '(welcomeToMarketplace)' AND module = 'marketplace'";
				$result = $this->db->query($delete_email_sql);
				if ($result) {
					dolibarr_del_const($this->db, 'MARKETPLACE_WELCOME_EMAIL_TEMPLATE', $conf->entity);
				} else {
					$this->error = $this->db->lasterror();
				}
			}
			if (!empty(getDolGlobalInt("MARKETPLACE_FORGOT_PASSWORD_EMAIL_TEMPLATE"))) {
				$delete_email_sql = "DELETE FROM ".MAIN_DB_PREFIX."c_email_templates WHERE label = '(resetPasswordMarketplace)' AND module = 'marketplace'";
				$result = $this->db->query($delete_email_sql);
				if ($result) {
					dolibarr_del_const($this->db, 'MARKETPLACE_FORGOT_PASSWORD_EMAIL_TEMPLATE', $conf->entity);
				} else {
					$this->error = $this->db->lasterror();
				}
			}
			if (!empty(getDolGlobalInt("MARKETPLACE_BUYER_ORDER_CONFIRMATION_TEMPLATE"))) {
				$delete_email_sql = "DELETE FROM ".MAIN_DB_PREFIX."c_email_templates WHERE label = '(BuyerOrderConfirmation)' AND module = 'marketplace'";
				$result = $this->db->query($delete_email_sql);
				if ($result) {
					dolibarr_del_const($this->db, 'MARKETPLACE_BUYER_ORDER_CONFIRMATION_TEMPLATE', $conf->entity);
				} else {
					$this->error = $this->db->lasterror();
				}
			}
			if (!empty(getDolGlobalInt("MARKETPLACE_SELLERS_ORDER_CONFIRMATION_TEMPLATE"))) {
				$delete_email_sql = "DELETE FROM ".MAIN_DB_PREFIX."c_email_templates WHERE label = '(SellerOrderNotification)' AND module = 'marketplace'";
				$result = $this->db->query($delete_email_sql);
				if ($result) {
					dolibarr_del_const($this->db, 'MARKETPLACE_SELLERS_ORDER_CONFIRMATION_TEMPLATE', $conf->entity);
				} else {
					$this->error = $this->db->lasterror();
				}
			}
		}

		require_once DOL_DOCUMENT_ROOT.'/core/class/html.formmail.class.php';
		$tmpmailtemplate = new ModelMail($this->db);

		// Create MARKETPLACE_WELCOME_EMAIL_TEMPLATE
		$id_template = $tmpmailtemplate->fetch(0, '(welcomeToMarketplace)');
		if ($id_template <= 0) {
			$email_sql = "INSERT INTO ".MAIN_DB_PREFIX."c_email_templates (label, lang, module, type_template, fk_user, private, position, topic, email_from, joinfiles, defaultfortype, content, entity, active, enabled) VALUES ('(welcomeToMarketplace)', '', 'marketplace', 'thirdparty', null, 0, 110, '__(welcomeTo)__ __[MAIN_INFO_SOCIETE_NOM]__ __(marketplace)__', null, 0, 0, '__(marketplaceWelcomeEmailContent)__', ".((int) $conf->entity).", 1, 1);";
			$result = $this->db->query($email_sql);
			if ($result) {
				$id_template = $this->db->last_insert_id(MAIN_DB_PREFIX."c_email_templates");
			} else {
				$this->error = $this->db->lasterror();
			}
		}
		if (!getDolGlobalInt("MARKETPLACE_WELCOME_EMAIL_TEMPLATE") && $id_template > 0) {
			dolibarr_set_const($this->db, 'MARKETPLACE_WELCOME_EMAIL_TEMPLATE', $id_template, 'chaine', 0, 'Name of welcome email template', $conf->entity);
			//setEventMessages($langs->trans("emailTemplateLoaded", $langs->transnoentitiesnoconv("MARKETPLACE_WELCOME_EMAIL_TEMPLATE"), $emailAction), null, 'warnings');
		}

		// Create MARKETPLACE_FORGOT_PASSWORD_EMAIL_TEMPLATE
		$id_template = $tmpmailtemplate->fetch(0, '(resetPasswordMarketplace)');
		if ($id_template <= 0) {
			$email_sql = "INSERT INTO ".MAIN_DB_PREFIX."c_email_templates (label, lang, module, type_template, fk_user, private, position, topic, email_from, joinfiles, defaultfortype, content, entity, active, enabled) VALUES ('(resetPasswordMarketplace)', '', 'marketplace', 'thirdparty', null, 0, 120, '__(passwordResetRequest)__ [__[MAIN_INFO_SOCIETE_NOM]__]', null, 0, 0,'__(marketplaceResetPasswordEmailContent)__', ".((int) $conf->entity).", 1, 1);";
			$result = $this->db->query($email_sql);
			if ($result) {
				$id_template = $this->db->last_insert_id(MAIN_DB_PREFIX."c_email_templates");
			} else {
				$this->error = $this->db->lasterror();
			}
		}
		if (!getDolGlobalInt("MARKETPLACE_FORGOT_PASSWORD_EMAIL_TEMPLATE") && $id_template > 0) {
			dolibarr_set_const($this->db, 'MARKETPLACE_FORGOT_PASSWORD_EMAIL_TEMPLATE', $id_template, 'chaine', 0, 'Name of forgot password email template', $conf->entity);
			//setEventMessages($langs->trans("emailTemplateLoaded", $langs->transnoentitiesnoconv("MARKETPLACE_FORGOT_PASSWORD_EMAIL_TEMPLATE"), $emailAction), null, 'warnings');
		}

		// Create MARKETPLACE_BUYER_ORDER_CONFIRMATION_TEMPLATE
		$id_template = $tmpmailtemplate->fetch(0, '(BuyerOrderConfirmation)');
		if ($id_template <= 0) {
			$email_sql = "INSERT INTO ".MAIN_DB_PREFIX."c_email_templates (label, lang, module, type_template, fk_user, private, position, topic, email_from, joinfiles, defaultfortype, content, entity, active, enabled) VALUES ('(BuyerOrderConfirmation)', '', 'marketplace', 'order_send', null, 0, 140, '__(BuyerOrderConfirmation)__ __[MAIN_INFO_SOCIETE_NOM]__ __(marketplace)__', null, 0, 0, '__(marketplaceBuyerOrderConfirmationContent)__', ".((int) $conf->entity).", 1, 1);";
			$result = $this->db->query($email_sql);
			if ($result) {
				$id_template = $this->db->last_insert_id(MAIN_DB_PREFIX."c_email_templates");
			} else {
				$this->error = $this->db->lasterror();
			}
		}
		if (!getDolGlobalInt("MARKETPLACE_BUYER_ORDER_CONFIRMATION_TEMPLATE") && $id_template > 0) {
			dolibarr_set_const($this->db, 'MARKETPLACE_FORGOT_PASSWORD_EMAIL_TEMPLATE', $id_template, 'chaine', 0, 'Name of forgot password email template', $conf->entity);
			//setEventMessages($langs->trans("emailTemplateLoaded", $langs->transnoentitiesnoconv("MARKETPLACE_BUYER_ORDER_CONFIRMATION_TEMPLATE"), $emailAction), null, 'warnings');
		}

		// Create MARKETPLACE_SELLERS_ORDER_CONFIRMATION_TEMPLATE
		$id_template = $tmpmailtemplate->fetch(0, '(SellerOrderNotification)');
		if ($id_template <= 0) {
			$email_sql = "INSERT INTO ".MAIN_DB_PREFIX."c_email_templates (label, lang, module, type_template, fk_user, private, position, topic, email_from, joinfiles, defaultfortype, content, entity, active, enabled) VALUES ('(SellerOrderNotification)', '', 'marketplace', 'order_send', null, 0, 130, '__(SellerOrderNotification)__ __[MAIN_INFO_SOCIETE_NOM]__ __(marketplace)__', null, 0, 0, '__(marketplaceSellersOrderConfirmationContent)__', ".((int) $conf->entity).", 1, 1);";
			$result = $this->db->query($email_sql);
			if ($result) {
				$id_template = $this->db->last_insert_id(MAIN_DB_PREFIX."c_email_templates");
			} else {
				$this->error = $this->db->lasterror();
			}
		}
		if (!getDolGlobalInt("MARKETPLACE_SELLERS_ORDER_CONFIRMATION_TEMPLATE") && $id_template > 0) {
			dolibarr_set_const($this->db, 'MARKETPLACE_SELLERS_ORDER_CONFIRMATION_TEMPLATE', $id_template, 'chaine', 0, 'Name of sellers order confirmation email template', $conf->entity);
			//setEventMessages($langs->trans("emailTemplateLoaded", $langs->transnoentitiesnoconv("MARKETPLACE_SELLERS_ORDER_CONFIRMATION_TEMPLATE"), $emailAction), null, 'warnings');
		}

		// Create default website
		include_once DOL_DOCUMENT_ROOT.'/website/class/website.class.php';
		include_once DOL_DOCUMENT_ROOT.'/website/class/websitepage.class.php';
		require_once DOL_DOCUMENT_ROOT.'/core/lib/website.lib.php';
		require_once DOL_DOCUMENT_ROOT.'/core/lib/website2.lib.php';

		if ($action == 'reload' && !empty(getDolGlobalInt("MARKETPLACE_WEBSITE_ID"))) {
			$website = new Website($this->db);
			$website_id = getDolGlobalInt("MARKETPLACE_WEBSITE_ID");
			$result = $website->fetch($website_id);
			if ($result < 0) {
				setEventMessages($website->error, $website->errors, 'errors');
			} else {
				$result = $website->purge($user);
				if ($result < 0) {
					setEventMessages($website->error, $website->errors, 'errors');
				} else {
					setEventMessages($langs->trans("websitePurged", $website->ref), null, 'warnings');
					// Activate marketplace template
					$website->setTemplateName("website_template-dolistore");

					$templateZip = DOL_DATA_ROOT.'/doctemplates/websites/website_template-dolistore.zip';
					$result = $website->importWebSite($templateZip);
					if ($result < 0) {
						setEventMessages($website->error, $website->errors, 'errors');
					} else {
						setEventMessages($langs->trans("templateImported", $website->ref), null, 'warnings');
					}
				}
			}
		}

		if (getDolGlobalInt("MARKETPLACE_WEBSITE_ID") <= 0) {
			$website = new Website($this->db);

			// Get free ref for insert
			$baseRef = "marketplace";
			$ref = $baseRef;
			$i = 1;

			// Loop until an available reference is found
			while ($website->fetch(0, $ref) > 0) {
				$ref = $baseRef . str_pad($i++, 2, '0', STR_PAD_LEFT);
			}

			// Create a website for marketplace module
			$website = new Website($this->db);
			$website->ref = $ref;
			$website->description = $langs->trans("marketplaceDesc", getDolGlobalString('MAIN_INFO_SOCIETE_NOM'));
			$website->lang = $langs->getDefaultLang();
			if (getDolGlobalInt('MAIN_MULTILANGS')) {
				$website->otherlang = "en,fr,de,it,es";
			}
			$result = $website->create($user);
			if ($result <= 0) {
				setEventMessages($website->error, $website->errors, 'errors');
			} else {
				setEventMessages($langs->trans("websiteCreated", $website->ref), null, 'warnings');
				$website_id = $result;
				// Activate marketplace template
				$website->setTemplateName("website_template-dolistore");

				$templateZip = DOL_DATA_ROOT.'/doctemplates/websites/website_template-dolistore.zip';
				$result = $website->importWebSite($templateZip);

				if ($result < 0) {
					setEventMessages($website->error, $website->errors, 'errors');
				} else {
					// Force mode dynamic on
					dolibarr_set_const($this->db, 'WEBSITE_SUBCONTAINERSINLINE', 1, 'chaine', 0, '', $conf->entity);

					dolibarr_set_const($this->db, 'MARKETPLACE_WEBSITE_ID', $website_id, 'chaine', 0, 'Marketplace website id', $conf->entity);

					setEventMessages($langs->trans("templateImported", $website->ref), null, 'warnings');

					// TODO Create welcome page AND Static pages
				}

			}
		}

		if (!getDolGlobalInt("MARKETPLACE_MINIMUM_PAYOUT_AMOUNT")) {
			dolibarr_set_const($this->db, 'MARKETPLACE_MINIMUM_PAYOUT_AMOUNT', '50' , 'chaine', 0, 'Marketplace minimum payout amount for vendors', $conf->entity);
		}

		/*
		// Create cash account CASH-POS / DefaultCashPOSLabel if not exists
		if (!getDolGlobalInt('MARKETPLACE_ID_BANKACCOUNT_CASH')) {
			require_once DOL_DOCUMENT_ROOT.'/compta/bank/class/account.class.php';
			$cashaccount = new Account($this->db);
			$searchaccountid = $cashaccount->fetch(0, "CASH-POS");
			if ($searchaccountid == 0) {
				$cashaccount->ref = "CASH-MARKETPLACE";
				$cashaccount->label = $langs->trans("DefaultCashPOSLabel");
				$cashaccount->courant = 2;
				$cashaccount->country_id = $mysoc->country_id ? $mysoc->country_id : 1;
				$cashaccount->date_solde = dol_now();
				$searchaccountid = $cashaccount->create($user);
			}
			if ($searchaccountid > 0) {
				dolibarr_set_const($this->db, "MARKETPLACE_ID_BANKACCOUNT_CASH", $searchaccountid, 'chaine', 0, '', $conf->entity);
			} else {
				setEventMessages($cashaccount->error, $cashaccount->errors, 'errors');
			}
		}
		*/

		$result = $this->_init($sql, $options);

		if (! empty($result)) {
			$messageontemplatecopy = $langs->trans("WebsiteTemplateWasCopied", 'dolistore');
			setEventMessages($messageontemplatecopy, null, 'warnings');
		}
		return $result;
	}

	/**
	 *  Function called when module is disabled.
	 *  Remove from database constants, boxes and permissions from Dolibarr database.
	 *  Data directories are not deleted
	 *
	 *  @param      string	$options    Options when enabling module ('', 'noboxes')
	 *  @return     int                 1 if OK, 0 if KO
	 */
	public function remove($options = '')
	{
		$sql = array();
		return $this->_remove($sql, $options);
	}
}
