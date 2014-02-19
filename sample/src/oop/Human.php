<?php
class Human
{
    private $height = null;
    private $weight = null;
    private $age    = null;
    private $sex    = null;

    public function __construct($height, $weight, $age, $sex)
    {
        $this->height = $height;
        $this->weight = $weight;
        $this->age    = $age;
        $this->sex    = $sex;
    }

    /**
     * 身長取得
     *
     * @return integer 身長
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * 体重取得
     *
     * @return integer 体重
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * 年齢取得
     *
     * @return integer 年齢
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * 性別取得
     *
     * @return string 性別
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * 10代であるか
     *
     * @return boolean 真理値
     */
    public function isTeen()
    {
        return 10 <= $this->age && 20 > $this->age;
    }

    /**
     * 男性であるか
     *
     * @return boolean 真理値
     */
    public function isMan()
    {
        return 'man' === $this->sex;
    }

    /**
     * 女性であるか
     *
     * @return boolean 真理値
     */
    public function isWoman()
    {
        return 'woman' === $this->sex;
    }
}

// 佐々木が10代の場合に処理をする。という場合

// 悪い例
$sasaki = new Human(150, 40, 24, 'man');
if (10 <= $sasaki->getAge() && 20 > $sasaki->getAge()) {
    echo "10代だよ～\r\n";
} else {
    echo "10代じゃないよ～\r\n";
}

// 良い例
$sasaki = new Human(150, 40, 24, 'man');
if ($sasaki->isTeen()) {
    echo "10代だよ～\r\n";
} else {
    echo "10代じゃないよ～\r\n";
}

/**
 * ※豆知識
 *
 * 下記をGoogle 翻訳にかけてみよう！
 *
 * sasaki is teen
 * sasaki is man
 * sasaki is woman
 */
