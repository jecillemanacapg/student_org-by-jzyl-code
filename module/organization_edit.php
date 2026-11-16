<?php
$id = $_GET['id'];
$orgData = OrganizationRepository::find($id);

?>
<main class="content">
    <h2>Edit Organization</h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <a href="?page=edit_organizations" class="btn btn-secondary  mb-4 ">Back</a>
            </div>
        </div>
        <div class="row">

            <div class="col-lg-3"></div>
            <div class="col-lg-5">


                <form method="POST" action="module/organization_update.php?id=<?php echo $orgData['org_id']; ?>">
                    <div class="form-group">
                        <label>Organization CODE:</label>
                        <input type="text" value="<?php echo $orgData['org_code']; ?>" name="org_code"
                            class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>Organization Name:</label>
                        <input type="text" value="<?php echo $orgData['org_name']; ?>" name="org_name"
                            class="form-control" />
                    </div>

                    <div class="form-group">
                        <label>Description:</label>
                        <input type="text" value="<?php echo $orgData['org_description']; ?>" name="org_description"
                            class="form-control" />
                    </div>

                    <div class="form-group">
                        <label>Member Count:</label>
                        <input type="number" value="<?php echo $orgData['member_count']; ?>" name="member_count"
                            class="form-control" />
                    </div>


                    <button type="submit" class="btn btn-secondary mt-4">Update</button>
                </form>


            </div>
        </div>
    </div>
</main>