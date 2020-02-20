<?php
interface RechargeableInterface
{
    public function charge(int $percentage) : int;
    public function unload(int $percentage) : int;
}