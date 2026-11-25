<?php
include_once __DIR__ . '/../repositories/OrganizationRepository.php';
include_once __DIR__ . '/../repositories/EventRepository.php';
include_once __DIR__ . '/../repositories/AdminRepository.php';

$organizations = OrganizationRepository::all();
$events = EventRepository::all();
$admin = AdminRepository::all()[0];

$orgCount = count($organizations);
$eventCount = count($events);
$orgList = [];
foreach ($organizations as $org)
    $orgList[$org->getOrgId()] = $org;
$latestOrg = $organizations[count($organizations) - 1];
$latestEvent = $events[count($events) - 1];
?>

<div class="container my-4">
    <h2>Welcome, <?php echo $admin->getUsername(); ?>!</h2>
    <p>A quick overview of organizations, membership, and upcoming activities.</p>
    <div class="row mb-4">
        <div class="col">
            <div class="card p-3 shadow-sm">
                <h2><?php echo $orgCount; ?></h2>
                <p>Organizations</p>
            </div>
        </div>
        <div class="col">
            <div class="card p-3 shadow-sm">
                <h2><?php echo $eventCount; ?></h2>
                <p>Upcoming Events</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 mb-3">
            <div class="card p-4 shadow-sm">
                <h3>IS Department Activities</h3>
                <p class="text-muted">Latest updates across the community</p>
                <p><strong>New organization created</strong><br><span
                        class="text-muted small"><?php echo $latestOrg->getOrgName(); ?></span></p>
                <p><strong>New event added</strong><br><span
                        class="text-muted small"><?php echo $latestEvent->getEventName(); ?></span></p>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card text-white p-4 shadow-sm" style="background-color:#57366f;">
                <h3>Coming Up</h3>
                <p>Next upcoming IS events</p>
                <?php foreach ($events as $e) {
                    $org = $orgList[$e->getOrgId()]; ?>
                    <div class="bg-white bg-opacity-25 rounded p-3 mb-2">
                        <strong><?php echo $e->getEventName(); ?></strong>
                        <p class="mb-0 small"><?php echo $org->getOrgCode(); ?> · <?php echo $e->getEventDate(); ?></p>
                    </div>
                <?php } ?>
                <a href="?page=event" class="btn btn-light w-100 mt-3" style="color:#57366f;">View all events →</a>
            </div>
        </div>
    </div>
</div>