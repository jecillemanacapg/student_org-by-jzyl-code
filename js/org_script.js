    function deleteData(orgId) {
        if (confirm('Are you sure you want to delete this organization?')) {
            window.location  = "module/organization_delete.php?id=" + orgId;
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
