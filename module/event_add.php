<main class="content">
    <h2>Add New Event</h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <a href="?page=event" class="btn btn-secondary  mb-4 ">Back</a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-5">
                <form method="POST" action="module/event_create.php">
                    <div class="form-group">
                        <label>Event ID:</label>
                        <input type="number" name="event_id" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>Organization ID:</label>
                        <input type="number" name="org_id" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>Event Name:</label>
                        <input type="text" name="event_name" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>Event Date:</label>
                        <input type="date" name="event_date" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>Event Location:</label>
                        <input type="text" name="event_location" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>Event Time:</label>
                        <input type="time" name="event_time" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>Event Registered:</label>
                        <input type="number" name="event_registered" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>Event Description:</label>
                        <input type="varchar(255)" name="event_description" class="form-control" />
                    </div>
                    <button type="submit" class="btn btn-secondary mt-4">Save</button>
                </form>
            </div>
        </div>
    </div>
</main>