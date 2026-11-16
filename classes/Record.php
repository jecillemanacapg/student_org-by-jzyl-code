<?php
class Record
{
    protected string $description;


    public function __construct
    (
        string $description
    ) {
        $this->description = $description;
    }
    public function getDescription(): string
    {
        return $this->description;
    }
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }
}
?>