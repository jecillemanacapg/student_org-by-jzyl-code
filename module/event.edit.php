<?php
$id = $_GET['id'];
$eventData = EventRepository::find($id);

?>
<main class="content">
    <h2>Edit Event</h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <a href="?page=edit_events" class="btn btn-secondary  mb-4 ">Back</a>
            </div>
        </div>
        <div class="row">

            <div class="col-lg-3"></div>
            <div class="col-lg-5">


                <form method="POST" action="module/event_update.php?id=<?php echo $eventData['event_id']; ?>">
                    <div class="form-group">
                        <label>Organization ID:</label>
                        <input type="number" value="<?php echo $eventData['org_id']; ?>" name="org_id"
                            class="form-control" />
                    </div>

                    <div class="form-group">
                        <label>Event Name:</label>
                        <input type="text" value="<?php echo $eventData['event_name']; ?>" name="event_name"
                            class="form-control" />
                    </div>

                    <div class="form-group">
                        <label>Event Date:</label>
                        <input type="text" value="<?php echo $eventData['event_date']; ?>" name="event_date"
                            class="form-control" />
                    </div>

                    <div class="form-group">
                        <label>Event Location:</label>
                        <input type="text" value="<?php echo $eventData['event_location']; ?>" name="event_location"
                            class="form-control" />
                    </div>

                    <div class="form-group">
                        <label>Event Time:</label>
                        <input type="text" value="<?php echo $eventData['event_time']; ?>" name="event_time"
                            class="form-control" />
                    </div>

                    <div class="form-group">
                        <label>Event Description:</label>
                        <input type="text" value="<?php echo $eventData['event_description']; ?>"
                            name="event_description" class="form-control" />
                    </div>

                    <div class="form-group">
                        <label>Event Registered:</label>
                        <input type="text" value="<?php echo $eventData['event_registered']; ?>" name="event_registered"
                            class="form-control" />
                    </div>


                    <button type="submit" class="btn btn-secondary mt-4">Update</button>
                </form>


            </div>
        </div>
    </div>
</main>