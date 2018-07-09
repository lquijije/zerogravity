{*
* @author	Krzysztof Pecak
* @copyright	2017 Krzysztof Pecak
* @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*}

{if isset($angarslider)}
    {addJsDef angarslider_loop=$angarslider.loop|intval}
    {addJsDef angarslider_width=$angarslider.width|intval}
    {addJsDef angarslider_speed=$angarslider.speed|intval}
    {addJsDef angarslider_pause=$angarslider.pause|intval}
{/if}