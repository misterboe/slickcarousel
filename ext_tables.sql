#
# Table structure for table 'tt_content'
#
CREATE TABLE tt_content (
	slickdefault int(11) unsigned DEFAULT '0' NOT NULL,
	slickheight varchar(11) DEFAULT '' NOT NULL,
	tx_slickcarouselbgimg varchar(255) DEFAULT '' NOT NULL,
);


#
# Table structure for table 'tx_slickcarouselbgimg'
#
CREATE TABLE tx_slickcarouselbgimg (
	  tt_content int(11) unsigned DEFAULT '0' NOT NULL,

	  headline varchar(255) DEFAULT '' NOT NULL,
	  subline varchar(255) DEFAULT '' NOT NULL,
	  image int(11) unsigned DEFAULT '0' NOT NULL,
);