<?php
/**
 *  HE cPanel -- Hosting Engineers Control Panel
 *  Copyright (C) 2015  Dynamictivity LLC (http://www.hecpanel.com)
 *
 *   This program is free software: you can redistribute it and/or modify
 *   it under the terms of the GNU Affero General Public License as
 *   published by the Free Software Foundation, either version 3 of the
 *   License, or (at your option) any later version.
 *
 *   This program is distributed in the hope that it will be useful,
 *   but WITHOUT ANY WARRANTY; without even the implied warranty of
 *   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *   GNU Affero General Public License for more details.
 *
 *   You should have received a copy of the GNU Affero General Public License
 *   along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */
?>

<?php
// View
echo $this->Session->flash();

// Controller
$this->Session->setFlash(__('Alert success message testing...'), 'alert', array(
	'plugin' => 'BoostCake',
	'class' => 'alert-success'
));

$this->Session->setFlash(__('Alert info message testing...'), 'alert', array(
	'plugin' => 'BoostCake',
	'class' => 'alert-info'
));

$this->Session->setFlash(__('Alert warning message testing...'), 'alert', array(
	'plugin' => 'BoostCake',
	'class' => 'alert-warning'
));

$this->Session->setFlash(__('Alert danger message testing...'), 'alert', array(
	'plugin' => 'BoostCake',
	'class' => 'alert-danger'
));
?>