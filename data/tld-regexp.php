<?php

$gTLD = "(?:academy|accountants|actor|aero|agency|airforce|archi|army|arpa|asia|associates|attorney|audio|autos|axa|bar|bargains|bayern|beer|berlin|best|bid|bike|bio|biz|black|blackfriday|blue|bmw|boutique|brussels|build|builders|buzz|bzh|cab|camera|camp|capetown|capital|cards|care|career|careers|cash|cat|catering|center|ceo|cheap|christmas|church|citic|claims|cleaning|clinic|clothing|club|codes|coffee|college|cologne|com|community|company|computer|condos|construction|consulting|contractors|cooking|cool|coop|country|credit|creditcard|cruises|dance|dating|degree|democrat|dental|dentist|desi|diamonds|digital|directory|discount|dnp|domains|durban|edu|education|email|engineer|engineering|enterprises|equipment|estate|eus|events|exchange|expert|exposed|fail|farm|feedback|finance|financial|fish|fishing|fitness|flights|florist|foo|foundation|frogans|fund|furniture|futbol|gal|gallery|gift|gives|glass|global|globo|gmo|gop|gov|graphics|gratis|green|gripe|guide|guitars|guru|hamburg|haus|hiphop|hiv|holdings|holiday|homes|horse|host|house|immobilien|industries|info|ink|institute|insure|int|international|investments|jetzt|jobs|joburg|juegos|kaufen|kim|kitchen|kiwi|koeln|kred|land|lawyer|lease|life|lighting|limited|limo|link|loans|london|lotto|luxe|luxury|maison|management|mango|market|marketing|media|meet|menu|miami|mil|mini|mobi|moda|moe|monash|mortgage|moscow|motorcycles|museum|nagoya|name|navy|net|neustar|nhk|ninja|nyc|okinawa|onl|org|organic|ovh|paris|partners|parts|photo|photography|photos|physio|pics|pictures|pink|plumbing|post|press|pro|productions|properties|pub|qpon|quebec|recipes|red|rehab|reise|reisen|ren|rentals|repair|report|republican|rest|reviews|rich|rio|rocks|rodeo|ruhr|ryukyu|saarland|schule|scot|services|sexy|shiksha|shoes|singles|social|software|sohu|solar|solutions|soy|space|supplies|supply|support|surf|surgery|systems|tattoo|tax|technology|tel|tienda|tips|tirol|today|tokyo|tools|town|toys|trade|training|travel|university|uno|vacations|vegas|ventures|versicherung|vet|viajes|villas|vision|vlaanderen|vodka|vote|voting|voto|voyage|wang|watch|webcam|website|wed|wien|wiki|works|wtc|wtf|xxx|xyz|yachts|yokohama|zone)";
$ccTLD = "(?:ac|ad|ae|af|ag|ai|al|am|an|ao|aq|ar|as|at|au|aw|ax|az|ba|bb|bd|be|bf|bg|bh|bi|bj|bl|bm|bn|bo|bq|br|bs|bt|bv|bw|by|bz|ca|cc|cd|cf|cg|ch|ci|ck|cl|cm|cn|co|cr|cu|cv|cw|cx|cy|cz|de|dj|dk|dm|do|dz|ec|ee|eg|eh|er|es|et|eu|fi|fj|fk|fm|fo|fr|ga|gb|gd|ge|gf|gg|gh|gi|gl|gm|gn|gp|gq|gr|gs|gt|gu|gw|gy|hk|hm|hn|hr|ht|hu|id|ie|il|im|in|io|iq|ir|is|it|je|jm|jo|jp|ke|kg|kh|ki|km|kn|kp|kr|kw|ky|kz|la|lb|lc|li|lk|lr|ls|lt|lu|lv|ly|ma|mc|md|me|mf|mg|mh|mk|ml|mm|mn|mo|mp|mq|mr|ms|mt|mu|mv|mw|mx|my|mz|na|nc|ne|nf|ng|ni|nl|no|np|nr|nu|nz|om|pa|pe|pf|pg|ph|pk|pl|pm|pn|pr|ps|pt|pw|py|qa|re|ro|rs|ru|rw|sa|sb|sc|sd|se|sg|sh|si|sj|sk|sl|sm|sn|so|sr|ss|st|su|sv|sx|sy|sz|tc|td|tf|tg|th|tj|tk|tl|tm|tn|to|tp|tr|tt|tv|tw|tz|ua|ug|uk|um|us|uy|uz|va|vc|ve|vg|vi|vn|vu|wf|ws|ye|yt|za|zm|zw)";
$gTLD_IDN = "(?:测试|परीक्षा|集团|在线|موقع|公益|公司|移动|我爱你|москва|испытание|онлайн|сайт|테스트|орг|삼성|商标|商城|дети|טעסט|中文网|中信|測試|آزمایشی|பரிட்சை|संगठन|网络|δοκιμή|إختبار|بازار|شبكة|机构|组织机构|みんな|世界|网址|游戏|テスト|政务)";
$ccTLD_IDN = "(?:한국|ভারত|বাংলা|қаз|срб|சிங்கப்பூர்|мкд|中国|中國|భారత్|ලංකා|ભારત|भारत|укр|香港|台湾|台灣|мон|الجزائر|عمان|ایران|امارات|پاکستان|الاردن|بھارت|المغرب|السعودية|سودان|مليسيا|გე|ไทย|سورية|рф|تونس|ਭਾਰਤ|مصر|قطر|இலங்கை|இந்தியா|新加坡|فلسطين)";
$gTLD_punycode = "(?:xn--0zwm56d|xn--11b5bs3a9aj6g|xn--3bst00m|xn--3ds443g|xn--4gbrim|xn--55qw42g|xn--55qx5d|xn--6frz82g|xn--6qq986b3xl|xn--80adxhks|xn--80akhbyknj4f|xn--80asehdb|xn--80aswg|xn--9t4b11yi5a|xn--c1avg|xn--cg4bki|xn--czr694b|xn--czru2d|xn--d1acj3b|xn--deba0ad|xn--fiq228c5hs|xn--fiq64b|xn--g6w251d|xn--hgbk6aj7f53bba|xn--hlcj6aya9esc7a|xn--i1b6b1a6a2e|xn--io0a7i|xn--jxalpdlp|xn--kgbechtv|xn--mgbab2bd|xn--ngbc5azd|xn--nqv7f|xn--nqv7fs00ema|xn--q9jyb4c|xn--rhqv96g|xn--ses554g|xn--unup4y|xn--zckzah|xn--zfr164b)";
$ccTLD_punycode = "(?:xn--3e0b707e|xn--45brj9c|xn--54b7fta0cc|xn--80ao21a|xn--90a3ac|xn--clchc0ea0b2g2a9gcd|xn--d1alf|xn--fiqs8s|xn--fiqz9s|xn--fpcrj9c3d|xn--fzc2c9e2c|xn--gecrj9c|xn--h2brj9c|xn--j1amh|xn--j6w193g|xn--kprw13d|xn--kpry57d|xn--l1acc|xn--lgbbat1ad8j|xn--mgb9awbf|xn--mgba3a4f16a|xn--mgbaam7a8h|xn--mgbai9azgqp6j|xn--mgbayh7gpa|xn--mgbbh1a71e|xn--mgbc0a9azcg|xn--mgberp4a5d4ar|xn--mgbpl2fh|xn--mgbx4cd0ab|xn--node|xn--o3cw4h|xn--ogbpf8fl|xn--p1ai|xn--pgbs0dh|xn--s9brj9c|xn--wgbh1c|xn--wgbl6a|xn--xkc2al3hye2a|xn--xkc2dl3a5ee0h|xn--yfro4i67o|xn--ygbi2ammx)";
