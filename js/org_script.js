    function deleteData(orgId) {
        if (confirm('do you want to delete the data?')) {
            window.location = " module/organization_delete.php?id=" + orgId;
        } else {
            alert(" data cannot be deleted");
        };
    }
