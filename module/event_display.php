<main class="content">
    <div class="container-fluid">
        <div class="col-lg-12 m-6">
            <h2>Upcoming Events</h2>
            <div class="d-flex justify-content-end mb-4">
                <button class="btn btn-Secondary">+ Add Event</button>
            </div>
            <table class="table">
                <thead class="table-active">
                    <tr>
                        <th>Event ID</th>
                        <th>Org ID</th>
                        <th>Event Name</th>
                        <th>Date</th>
                        <th>Location</th>
                        <th>Description</th>
                        <th>Time</th>
                        <th>Registered</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach (EventRepository::all() as $e) { ?>
                        <tr>
                            <td><?php echo $e->getEventId(); ?></td>
                            <td><?php echo $e->getOrgId(); ?></td>
                            <td><?php echo $e->getEventName(); ?></td>
                            <td><?php echo $e->getEventDate(); ?></td>
                            <td><?php echo $e->getEventLocation(); ?></td>
                            <td><?php echo $e->getDescription(); ?></td>
                            <td><?php echo $e->getEventTime(); ?></td>
                            <td><?php echo $e->getEventRegistered(); ?></td>
                            <td>
                                <button class="btn btn-info"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                        <path
                                            d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0_
                                    </svg></button>
                            </td>

                        </tr>
                    <?php } ?>
                </tbody>
            </table>

        </div>
    </div>

    </div>

</main>
<!--non-semantic jz-->