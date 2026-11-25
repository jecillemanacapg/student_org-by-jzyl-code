    function deleteData(eventId) {
        if (confirm('do you want to delete the data?')) {
            window.location = " module/event_delete.php?id=" + eventId;
        } else {
            alert(" data cannot be deleted");
        };
    }
     setTimeout(function() {
        const message = document.querySelector('.message');
        if (message) {
            message.style.display = 'none';
        }
    }, 3000);
