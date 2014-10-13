<?php

    class Saiyajin{
        public $tail = null;
        private $star = "惑星ベジータ";

        public function changeBigMonkey()
        {
            echo "大猿になりました"."<br />";
        }

        public function shotKamehameha()
        {
            echo "かめはめ波をうちました"."<br />";
        }

        public function pullTail()
        {
            $this->dropTail();
        }

        private function dropTail()
        {
            echo "尻尾を切りました"."<br />";
        }
    }
