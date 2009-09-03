<?php

	Class extension_Email_Field extends Extension{
	
		public function about(){
			return array('name' => 'Field: Email',
						 'version' => '1.0',
						 'release-date' => '2009-09-03',
						 'author' => array('name' => 'Alistair Kearney',
										   'website' => 'http://www.pointybeard.com',
										   'email' => 'alistair@symphony-cms.com')
				 		);
		}
		
		public function uninstall(){
			$this->_Parent->Database->query("DROP TABLE `tbl_fields_email`");
		}

		public function install(){
			return $this->_Parent->Database->query("CREATE TABLE `tbl_fields_email` (
			  `id` int(11) unsigned NOT NULL auto_increment,
			  `field_id` int(11) unsigned NOT NULL,
			  PRIMARY KEY  (`id`),
			  KEY `field_id` (`field_id`)
			);");
		}
			
	}

