<?php
include_once __DIR__ . '/DBRepository.php';
include_once __DIR__ . '/IEventRepository.php';
class EventRepository extends DBRepository implements IEventRepository
{

    public static function all(): array
    {
        $query = self::query("SELECT * FROM event");
        $result = [];
        foreach ($query as $e) {
            $result[] = new Event(
                $e['event_id'],
                $e['org_id'],
                $e['event_name'],
                $e['event_date'],
                $e['event_location'],
                $e['event_description'],
                $e['event_time'],
                $e['event_registered'],
            );
        }
        return $result;
    }

    public static function create(array $event)
    {
        $sql = "INSERT INTO event (event_id, org_id, event_name, event_date, event_location, event_description,
        event_time, event_registered) ";
        $sql .= "VALUES ('" . $event['event_id'] . "', '" . $event['org_id'] . "','" . $event['event_name'] . "', '" . $event['event_date'] . "',
        '" . $event['event_location'] . "', '" . $event['event_description'] . "', '" . $event['event_time'] . "', " . $event['event_registered'] . ");";
        self::connection()->query($sql);
    }

    public static function find(string $id): array
    {
        return [];
    }

    public static function update(array $event, string $id): array
    {
        return [];
    }

    public static function delete(string $id): void
    {

    }
}