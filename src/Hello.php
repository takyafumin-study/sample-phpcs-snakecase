<?php

namespace App;

/**
 * @package App
 */
class Hello
{
    /**
     * @var string $my_name
     */
    public function __construct(string $my_name)
    {
        $this->my_name = $my_name;
    }

    /**
     * 挨拶する
     *
     * @param  string $user_name
     * @return string
     */
    public function hello(string $user_name)
    {
        return "hello $user_name";
    }
}
