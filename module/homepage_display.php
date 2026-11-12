<?php
include_once __DIR__ . "/../repositories/EventRepository.php";
$events = EventRepository::all();
?>

<div class="card mb-4">
    <div class="card-header fw-bold">Coming Up</div>
    <div class="card-body">
        <p class="text-muted small mb-3">Next 15 organization events</p>
        <?php foreach ($events as $e): ?>
            <div class="p-3 rounded mb-3" style="background: linear-gradient(135deg, #57366f, #7b5294); color: white;">
                <div class="d-flex justify-content-between">
                    <div>
                        <h6 class="mb-1 fw-bold"><?= htmlspecialchars($e->getEventName()) ?></h6>
                        <p class="small mb-0"><?= htmlspecialchars($e->getOrgId()) ?> .
                            <?= htmlspecialchars($e->getEventDate()) ?>
                        </p>
                    </div>
                    <span class="badge bg-light text-dark"> <?= date('d M', strtotime($e->getEventDate())) ?></span>
                </div>
            </div>
        <?php endforeach; ?>
        <a href="?page=event" class="btn btn-light w-100 mt-2">View all events →</a>
    </div>
</div>