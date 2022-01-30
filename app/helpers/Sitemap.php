<?php

namespace App\Helpers;

/**
 * Para añadir, modificar o borrar urls de un archivo xml (sitemap).
 */
class Sitemap
{

	private static string $sitemapName = 'sitemap.xml';

	private static $sitemapFile;

	/**
	 * Cargar archivo.
	 */
	private static function loadSitemap()
	{
		if (file_exists(self::$sitemapName)) {
			self::$sitemapFile = simplexml_load_file(self::$sitemapName);
		}
	}

	/**
	 * Añadir una url nueva al archivo xml.
	 */
	public static function add($new, $lastmod, $changefreg)
	{
		self::loadSitemap();
		$loc = url('') . $new;

		$item = self::$sitemapFile->addChild('url');
		$item->addChild('loc', $loc);
		$item->addChild('lastmod', $lastmod);
		$item->addChild('changefreg', $changefreg);
		self::save();
	}

	/**
	 * Borrar un objeto del archivo, buscando por el nombre de url de la publicación.
	 */
	public static function remove($search)
	{
		self::loadSitemap();
		$seachUrl = url('') . $search;

		foreach (self::$sitemapFile->url as $lineXml) {

			if ($seachUrl == $lineXml->loc) {
				$dom = dom_import_simplexml($lineXml);
				$dom->parentNode->removeChild($dom);
				break;
			}
		}
		self::save();
	}

	/**
	 * Modificar un objeto del archivo, buscando por el nombre de url de la publicación.
	 */
	public static function modify($search, $new, $lastmod = '', $changefreg)
	{
		self::loadSitemap();
		$loc = url('') . $search;

		foreach (self::$sitemapFile->url as $lineXml) {

			if ($loc == $lineXml->loc) {

				$lineXml->loc = url('') . $new;

				if (!empty($lastmod)) {
					$lineXml->lastmod = $lastmod;
				}

				if (!empty($frec)) {
					$lineXml->changefreg = $changefreg;
				}
				break;
			}
		}
		self::save();
	}

	/**
	 * Sobrescribe el archivo xml.
	 */
	private static function save()
	{
		self::$sitemapFile->asXml(self::$sitemapName);
	}
}
