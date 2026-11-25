<?php
if (isset($_GET['message'])) {
    if ($_GET['message'] == "org_added") {
        echo "<p>Organization added successfully.</p>";
    }
    if ($_GET['message'] == "org_deleted") {
        echo "<p>Organization deleted successfully.</p>";
    }
    if ($_GET['message'] == "event_added") {
        echo "<p>Event added successfully.</p>";
    }
    if ($_GET['message'] == "event_deleted") {
        echo "<p>Event deleted successfully.</p>";
    }
    if ($_GET['message'] == "event_updated") {
        echo "<p>Event updated successfully.</p>";
    }
    if ($_GET['message'] == "org_updated") {
        echo "<p>Organization updated successfully.</p>";
    }
} ?>