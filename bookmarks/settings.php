<?php
/**
 * Copyright (c) 2011 Marvin Thomas Rabe <mrabe@marvinrabe.de>
 * This file is licensed under the Affero General Public License version 3 or
 * later.
 * See the COPYING-README file.
 */

OCP\App::checkAppEnabled('bookmarks');

$tmpl = new OCP\Template('bookmarks', 'settings');
$tmpl->printPage();
