<main class="content">
    <h2>Add New Organization</h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <a href="?page=organization" class="btn btn-secondary  mb-4 ">Back</a>
            </div>
        </div>
        <div class="row">

            <div class="col-lg-3"></div>
            <div class="col-lg-5">


                <form method="POST" action="module/organization_create.php">
                    <div class="form-group">
                        <label>Organization ID:</label>
                        <input type="text" name="org_id" class="form-control" />
                    </div>

                    <div class="form-group">
                        <label>Organization CODE:</label>
                        <input type="text" name="org_code" class="form-control" />
                    </div>

                    <div class="form-group">
                        <label>Organization Name:</label>
                        <input type="text" name="org_name" class="form-control" />
                    </div>

                    <div class="form-group">
                        <label>Organization Description:</label>
                        <input type="text" name="org_description" class="form-control" />
                    </div>

                    <div class="form-group">
                        <label>Member Count:</label>
                        <input type="number" name="member_count" class="form-control" />
                    </div>


                    <button type="submit" class="btn btn-secondary mt-4">Save</button>
                </form>


            </div>
        </div>
    </div>
</main>