<main class="content">
    <h2>Add New Organization</h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <a href="?page=organizations" class="btn btn-dark  mb-4 ">Back</a>
            </div>
        </div>
        <div class="row">

            <div class="col-lg-3"></div>
            <div class="col-lg-5">


                <form method="POST" action="modules/organization_create.php">
                    <div class="form-group">
                        <label>Organization Number:</label>
                        <input type="text" name="org_number" class="form-control" />
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


                    <button type="submit" class="btn btn-primary mt-4">Submit</button>
                </form>


            </div>
        </div>
    </div>
</main>