<?php
class jayson_copyrightNotice_helperPack
{
        public static function copyrightNotice(array $matches)
        {
                return $matches[0] .
                        '<xen:if is="!{$jfcopyright}">' .
                        '<xen:set var="$jfcopyright">1</xen:set>' .
                        'Some Modificatations by <a href="https://jaysonfong.me/" title="Jayson Fong" target="_blank">Jayson Fong</a>' .
                        '</xen:if>';
        }
}
