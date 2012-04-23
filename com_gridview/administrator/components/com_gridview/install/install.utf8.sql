CREATE TABLE IF NOT EXISTS `#__gridview_gridviews` (
	`gridview_gridview_id` SERIAL,

	`title` varchar (250) NOT NULL
) DEFAULT;

CREATE TABLE IF NOT EXISTS `#__gridview_pages` (
	`gridview_page_id` SERIAL,

	`title` varchar (250) NOT NULL
) DEFAULT;

CREATE TABLE IF NOT EXISTS `#__gridview_tiles` (
	`gridview_tile_id` SERIAL,

	`title` varchar (250) NOT NULL
) DEFAULT;

CREATE TABLE IF NOT EXISTS `#__gridview_images` (
	`gridview_image_id` SERIAL,

	`title` varchar (250) NOT NULL
) DEFAULT;



# url.com/gridview/GRIDVIEW/PAGE/TILE/IMAGE
# url.com/gridview/1/5/6
# url.com/ccistudios/website-design/inkspot/2
