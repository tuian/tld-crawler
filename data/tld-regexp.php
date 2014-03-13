<?php

$gTLD = "(?:academy|actor|aero|agency|arpa|asia|bar|bargains|berlin|best|bid|bike|biz|blue|boutique|build|builders|buzz|cab|camera|camp|cards|careers|cat|catering|center|ceo|cheap|christmas|cleaning|clothing|club|codes|coffee|com|community|company|computer|construction|contractors|cool|coop|cruises|dance|dating|democrat|diamonds|directory|domains|edu|education|email|enterprises|equipment|estate|events|expert|exposed|farm|fish|flights|florist|foundation|futbol|gallery|gift|glass|gov|graphics|guitars|guru|holdings|holiday|house|immobilien|industries|info|institute|int|international|jobs|kaufen|kim|kitchen|kiwi|koeln|kred|land|lighting|limo|link|luxury|management|mango|marketing|menu|mil|mobi|moda|monash|museum|nagoya|name|net|neustar|ninja|okinawa|onl|org|partners|parts|photo|photography|photos|pics|pink|plumbing|post|pro|productions|properties|pub|qpon|recipes|red|rentals|repair|report|reviews|rich|ruhr|sexy|shiksha|shoes|singles|social|solar|solutions|supplies|supply|support|systems|tattoo|technology|tel|tienda|tips|today|tokyo|tools|training|travel|uno|vacations|ventures|viajes|villas|vision|vote|voting|voto|voyage|wang|watch|wed|wien|wiki|works|xxx|xyz|zone)";
$ccTLD = "(?:ac|ad|ae|af|ag|ai|al|am|an|ao|aq|ar|as|at|au|aw|ax|az|ba|bb|bd|be|bf|bg|bh|bi|bj|bl|bm|bn|bo|bq|br|bs|bt|bv|bw|by|bz|ca|cc|cd|cf|cg|ch|ci|ck|cl|cm|cn|co|cr|cu|cv|cw|cx|cy|cz|de|dj|dk|dm|do|dz|ec|ee|eg|eh|er|es|et|eu|fi|fj|fk|fm|fo|fr|ga|gb|gd|ge|gf|gg|gh|gi|gl|gm|gn|gp|gq|gr|gs|gt|gu|gw|gy|hk|hm|hn|hr|ht|hu|id|ie|il|im|in|io|iq|ir|is|it|je|jm|jo|jp|ke|kg|kh|ki|km|kn|kp|kr|kw|ky|kz|la|lb|lc|li|lk|lr|ls|lt|lu|lv|ly|ma|mc|md|me|mf|mg|mh|mk|ml|mm|mn|mo|mp|mq|mr|ms|mt|mu|mv|mw|mx|my|mz|na|nc|ne|nf|ng|ni|nl|no|np|nr|nu|nz|om|pa|pe|pf|pg|ph|pk|pl|pm|pn|pr|ps|pt|pw|py|qa|re|ro|rs|ru|rw|sa|sb|sc|sd|se|sg|sh|si|sj|sk|sl|sm|sn|so|sr|ss|st|su|sv|sx|sy|sz|tc|td|tf|tg|th|tj|tk|tl|tm|tn|to|tp|tr|tt|tv|tw|tz|ua|ug|uk|um|us|uy|uz|va|vc|ve|vg|vi|vn|vu|wf|ws|ye|yt|za|zm|zw)";
$gTLD_IDN = "(?:测试|परीक्षा|集团|在线|公益|公司|移动|我爱你|испытание|онлайн|сайт|테스트|орг|삼성|дети|טעסט|中文网|中信|測試|آزمایشی|பரிட்சை|संगठन|网络|δοκιμή|إختبار|بازار|شبكة|机构|组织机构|みんな|世界|游戏|テスト|政务)";
$ccTLD_IDN = "(?:한국|ভারত|বাংলা|қаз|срб|சிங்கப்பூர்|中国|中國|భారత్|ලංකා|ભારત|भारत|укр|香港|台湾|台灣|мон|الجزائر|عمان|ایران|امارات|پاکستان|الاردن|بھارت|المغرب|السعودية|سودان|مليسيا|გე|ไทย|سورية|рф|تونس|ਭਾਰਤ|مصر|قطر|இலங்கை|இந்தியா|新加坡|فلسطين)";
$gTLD_punycode = "(?:xn--0zwm56d|xn--11b5bs3a9aj6g|xn--3bst00m|xn--3ds443g|xn--55qw42g|xn--55qx5d|xn--6frz82g|xn--6qq986b3xl|xn--80akhbyknj4f|xn--80asehdb|xn--80aswg|xn--9t4b11yi5a|xn--c1avg|xn--cg4bki|xn--d1acj3b|xn--deba0ad|xn--fiq228c5hs|xn--fiq64b|xn--g6w251d|xn--hgbk6aj7f53bba|xn--hlcj6aya9esc7a|xn--i1b6b1a6a2e|xn--io0a7i|xn--jxalpdlp|xn--kgbechtv|xn--mgbab2bd|xn--ngbc5azd|xn--nqv7f|xn--nqv7fs00ema|xn--q9jyb4c|xn--rhqv96g|xn--unup4y|xn--zckzah|xn--zfr164b)";
$ccTLD_punycode = "(?:xn--3e0b707e|xn--45brj9c|xn--54b7fta0cc|xn--80ao21a|xn--90a3ac|xn--clchc0ea0b2g2a9gcd|xn--fiqs8s|xn--fiqz9s|xn--fpcrj9c3d|xn--fzc2c9e2c|xn--gecrj9c|xn--h2brj9c|xn--j1amh|xn--j6w193g|xn--kprw13d|xn--kpry57d|xn--l1acc|xn--lgbbat1ad8j|xn--mgb9awbf|xn--mgba3a4f16a|xn--mgbaam7a8h|xn--mgbai9azgqp6j|xn--mgbayh7gpa|xn--mgbbh1a71e|xn--mgbc0a9azcg|xn--mgberp4a5d4ar|xn--mgbpl2fh|xn--mgbx4cd0ab|xn--node|xn--o3cw4h|xn--ogbpf8fl|xn--p1ai|xn--pgbs0dh|xn--s9brj9c|xn--wgbh1c|xn--wgbl6a|xn--xkc2al3hye2a|xn--xkc2dl3a5ee0h|xn--yfro4i67o|xn--ygbi2ammx)";
