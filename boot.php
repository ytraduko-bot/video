<?php
/**
 * This file is part of the videopackage.
 *
 * @author (c) Friends Of REDAXO
 * @author <friendsof@redaxo.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

$this->setProperty('author', 'Friends Of REDAXO');

if (rex::isBackend() && is_object(rex::getUser())) {
    rex_perm::register('video');
    rex_perm::register('video[config]');

    /////////////////////////
	//// init Variablen  ////
	/////////////////////////
	if($this->getConfig('player') == 'Plyr') {
		$page = $this->getProperty('page');
    	$page['subpages']['plyr'] = ['title' =>  $this->i18n('plyr_title')];
    	$page['subpages']['plyr_test'] = ['title' => $this->i18n('plyr_test')];
    	$this->setProperty('page', $page);
	}

	if($this->getConfig('player') == 'Afterglow') {
		$page = $this->getProperty('page');
    	$page['subpages']['afterglow'] = ['title' =>  $this->i18n('afterglow_title')];
    	$page['subpages']['afterglow_test'] = ['title' => $this->i18n('afterglow_test')];
    	$this->setProperty('page', $page);
	}
	if($this->getConfig('player') == 'Audio') {
		$page = $this->getProperty('page');
    	$page['subpages']['audio'] = ['title' =>  $this->i18n('audio_title')];
    	$page['subpages']['audio_test'] = ['title' => $this->i18n('audio_test')];
    	$this->setProperty('page', $page);
	}
	
	if($this->getConfig('player') == 'Plyr') {
    	rex_view::addCssFile($this->getAssetsUrl('Plyr/css/plyr.css'));
    	rex_view::addJsFile($this->getAssetsUrl('Plyr/js/plyr.js'));   
    	rex_view::addJsFile($this->getAssetsUrl('js/plyr_video_backend.js'));
	}

	if($this->getConfig('player') == 'Afterglow') {
		rex_view::addJsFile($this->getAssetsUrl('Afterglow/afterglow.min.js'));
		rex_view::addJsFile($this->getAssetsUrl('js/afterglow.js'));
	}
}
 
if (rex::isBackend()) {

}
