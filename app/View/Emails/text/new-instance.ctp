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

Welcome <?php echo $username; ?>,
\r\n\r\n
Your server instance setup is completed, please log-in to the control panel to obtain the server information using the information provided below.
\r\n\r\n
Control panel login: <?php echo Configure::read(APP_CONFIG_SCOPE . '.App.appUrl'); ?>\r\n
Username: <?php echo $username; ?>\r\n
Instance Name: <?php echo $name; ?>