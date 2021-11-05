<?php


use Faker\Factory;

function faker()
{
    return Faker\Factory::create();
}

function s()
{
    return faker()->sentence();
}

function p()
{
    return faker()->paragraph();
}
