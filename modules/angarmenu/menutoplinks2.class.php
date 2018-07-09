<?php
/**
* @author      Krzysztof Pecak
* @copyright   2017 Krzysztof Pecak
* @license     http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*/

class MenuTopLinks2
{
    public static function gets($id_lang, $id_linksmenutop2 = null, $id_shop)
    {
        $sql = 'SELECT l.id_linksmenutop2, l.new_window, s.name, ll.link, ll.label
				FROM '._DB_PREFIX_.'linksmenutop2 l
				LEFT JOIN '._DB_PREFIX_.'linksmenutop2_lang ll ON (l.id_linksmenutop2 = ll.id_linksmenutop2 AND ll.id_lang = '.(int)$id_lang.' AND ll.id_shop='.(int)$id_shop.')
				LEFT JOIN '._DB_PREFIX_.'shop s ON l.id_shop = s.id_shop
				WHERE 1 '.((!is_null($id_linksmenutop2)) ? ' AND l.id_linksmenutop2 = "'.(int)$id_linksmenutop2.'"' : '').'
				AND l.id_shop IN (0, '.(int)$id_shop.')';

        return Db::getInstance()->executeS($sql);
    }

    public static function get($id_linksmenutop2, $id_lang, $id_shop)
    {
        return self::gets($id_lang, $id_linksmenutop2, $id_shop);
    }

    public static function getLinkLang($id_linksmenutop2, $id_shop)
    {
        $ret = Db::getInstance()->executeS('
			SELECT l.id_linksmenutop2, l.new_window, ll.link, ll.label, ll.id_lang
			FROM '._DB_PREFIX_.'linksmenutop2 l
			LEFT JOIN '._DB_PREFIX_.'linksmenutop2_lang ll ON (l.id_linksmenutop2 = ll.id_linksmenutop2 AND ll.id_shop='.(int)$id_shop.')
			WHERE 1
			'.((!is_null($id_linksmenutop2)) ? ' AND l.id_linksmenutop2 = "'.(int)$id_linksmenutop2.'"' : '').'
			AND l.id_shop IN (0, '.(int)$id_shop.')
		');

        $link = array();
        $label = array();
        $new_window = false;

        foreach ($ret as $line) {
            $link[$line['id_lang']] = Tools::safeOutput($line['link']);
            $label[$line['id_lang']] = Tools::safeOutput($line['label']);
            $new_window = (bool)$line['new_window'];
        }

        return array('link' => $link, 'label' => $label, 'new_window' => $new_window);
    }

    public static function add($link, $label, $newWindow = 0, $id_shop)
    {
        if (!is_array($label)) {
            return false;
        }
        if (!is_array($link)) {
            return false;
        }

        Db::getInstance()->insert(
            'linksmenutop2',
            array(
                'new_window'=>(int)$newWindow,
                'id_shop' => (int)$id_shop
            )
        );
        $id_linksmenutop2 = Db::getInstance()->Insert_ID();

        $result = true;

        foreach ($label as $id_lang => $label) {
            $result &= Db::getInstance()->insert(
                'linksmenutop2_lang',
                array(
                'id_linksmenutop2'=>(int)$id_linksmenutop2,
                'id_lang'=>(int)$id_lang,
                'id_shop'=>(int)$id_shop,
                'label'=>pSQL($label),
                'link'=>pSQL($link[$id_lang])
                )
            );
        }

        return $result;
    }

    public static function update($link, $labels, $newWindow = 0, $id_shop, $id_link)
    {
        if (!is_array($labels)) {
            return false;
        }
        if (!is_array($link)) {
            return false;
        }

        Db::getInstance()->update(
            'linksmenutop2',
            array(
                'new_window'=>(int)$newWindow,
                'id_shop' => (int)$id_shop
            ),
            'id_linksmenutop2 = '.(int)$id_link
        );

        foreach ($labels as $id_lang => $label) {
            Db::getInstance()->update(
                'linksmenutop2_lang',
                array(
                    'id_shop'=>(int)$id_shop,
                    'label'=>pSQL($label),
                    'link'=>pSQL($link[$id_lang])
                ),
                'id_linksmenutop2 = '.(int)$id_link.' AND id_lang = '.(int)$id_lang
            );
        }
    }


    public static function remove($id_linksmenutop2, $id_shop)
    {
        $result = true;
        $result &= Db::getInstance()->delete('linksmenutop2', 'id_linksmenutop2 = '.(int)$id_linksmenutop2.' AND id_shop = '.(int)$id_shop);
        $result &= Db::getInstance()->delete('linksmenutop2_lang', 'id_linksmenutop2 = '.(int)$id_linksmenutop2);
        
        return $result;
    }
}
