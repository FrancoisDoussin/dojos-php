<?php

namespace App\CourtePaille;

use PHPUnit\Framework\TestCase;

class CourtePailleTest extends TestCase
{
    public function testGame()
    {
        $courtePaille = new CourtePaille();

        $datas = [
            "27",
            "xgyeswu 401",
            "gkisuw 971",
            "ncrczc 322",
            "kqjsiec 502",
            "wocskd 533",
            "afkxavj 172",
            "vquctzlh 664",
            "gfwxdkzmk 97",
            "ddwmeo 593",
            "wrkhlr 263",
            "hhzokxrrl 423",
            "gcarts 168",
            "gjsvhy 587",
            "fjmpzgqz 778",
            "hzbmjjq 28",
            "zmzwbzi 369",
            "rskfqnz 384",
            "ljgidc 382",
            "kopakh 750",
            "smdixlz 429",
            "eqpmb 891",
            "rqcyol 660",
            "xszhrbsfas 404",
            "ordax 908",
            "yutnvuxcrw 719",
            "nfklqax 402",
            "qlmwv 900",
        ];

        $this->assertEquals('hzbmjjq', $courtePaille->game($datas));

        $datas = [
            "8",
            "maurice 401",
            "robert 971",
            "akim 322",
            "julien 502",
            "simon 533",
            "celine 172",
            "micheline 664",
            "roberta 97",
            "michou 593",
        ];

        $this->assertEquals('roberta', $courtePaille->game($datas));
    }

}
