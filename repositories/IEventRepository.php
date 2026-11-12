<?php

interface IEventRepository
{

    public static function all();

    public static function find(string $id);

    public static function create(array $event);

    public static function update(array $event, string $id);

    public static function delete(string $id);

}