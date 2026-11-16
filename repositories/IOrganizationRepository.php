<?php

interface IOrganizationRepository
{

    public static function all();

    public static function find(string $id);

    public static function create(array $organization);

    public static function update(array $organization, string $id);

    public static function delete(string $id);

    public static function save(string $id);


}