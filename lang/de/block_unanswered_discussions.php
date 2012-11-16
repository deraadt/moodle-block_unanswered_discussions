<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.


/**
 * Unanswered Discussions block definition file
 *
 * @package    contrib
 * @subpackage block_unanswered_discussions
 * @copyright  2012 Michael de Raadt
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['config_show'] = 'Mehrere offene Diskussionen anzeigen';
$string['config_show_help'] = '
<p>Mit dieser Einstellung können Sie kontrollieren was der Nutzer sehen soll:</p>
<ul>
	<li>offene Diskussionen, die der Nutzer selbst begonnen hat,</li>
	<li>offene Diskussionen, von anderen begonnen und für längere Zeit offen und/oder</li>
	<li>zufällige offene Diskussionen, die von anderen begonnen wurden (und noch nicht im Block gezeigt werden)</li>
</ul>
<p>Die Anzahl der Diskusssionen von jedem Typ kann durch eine Zahl angegeben werden.</p>
<p>So deaktivieren Sie eine Art der Meldung, die Anzahl der angezeigten Meldungen auf Keine.</p>';
$string['config_exclude'] = 'Ausgeschlossene Foren';
$string['config_exclude_help'] = '
<p>Es gibt einige Foren, von denen Sie nicht möchten, dass sie für offene Diskussionen überprüft werden, in der Regel, weil diese Foren genutzt werden, um Nachrichten an Studenten zu schicken, deswegen wird niemand auf sie antworten.</p>
<p>Dazu gehören Nachrichten-Foren, die zunächst standardmäßig ausgeschlossen sind.</p>
<p>Sie können mehr als ein Forum  auswählen indem Sie die Strg-Taste drücken und mit der Maus die Foren mit Diskussionen wählen, von denen Sie nicht wollen, dass sie in dem Block erscheinen. (Mac-Anwender sollten Command drücken und klicken.)</p>
';
$string['excludefora'] = 'Ausgeschlossene Foren';
$string['noforatoexclude'] = 'Keine auszugrenzenden Foren vorhanden';
$string['none'] = 'Keine';
$string['nounanswereddiscussions'] = 'Keine offenen Diskussionen';
$string['oldestposts'] = 'Älteste Diskussionen';
$string['pluginname'] = 'Offene Diskussionen';
$string['randomposts'] = 'Zufällige Diskussionen';
$string['show'] = 'Anzeigen';
$string['unanswereddiscussions'] = 'Offene Diskussionen';
$string['yourposts'] = 'Ihre Diskussionen';
$string['yourpostsconfig'] = 'User\'s Discussions';
