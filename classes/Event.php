<?php
include_once __DIR__ . '/Record.php';

class Event extends Record
{
    protected int $event_id;
    protected int $org_id;
    protected string $event_name;
    protected string $event_date;
    protected string $event_location;
    protected string $event_time;
    protected int $event_registered;

    public function __construct(
        int $event_id,
        int $org_id,
        string $event_name,
        string $event_date,
        string $event_location,
        string $event_time,
        string $event_description,
        int $event_registered
    ) {
        $this->event_id = $event_id;
        $this->org_id = $org_id;
        $this->event_name = $event_name;
        $this->event_date = $event_date;
        $this->event_location = $event_location;
        $this->event_time = $event_time;
        $this->event_registered = $event_registered;
        parent::__construct($event_description);
    }
    public function getEventId(): int
    {
        return $this->event_id;
    }
    public function getOrgId(): int
    {
        return $this->org_id;
    }

    public function getEventName(): string
    {
        return $this->event_name;
    }

    public function getEventDate(): string
    {
        return $this->event_date;
    }

    public function getEventLocation(): string
    {
        return $this->event_location;
    }
    public function getEventTime(): string
    {
        return $this->event_time;
    }

    public function getEventRegistered(): int
    {
        return $this->event_registered;
    }
}