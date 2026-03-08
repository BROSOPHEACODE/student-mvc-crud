<h2 class="mb-4">Add Student</h2>
  <form class="" method="POST">
    <div class="d-flex gap-2">

        <div class="mb-3 col-4">
            <label class="form-label">Full Name</label>
            <input type="text" name="name" class="form-control" placeholder="Enter full name" required>
        </div>

        <div class="mb-3 col-4">
            <label class="form-label">Gender</label>
            <select class="form-select" name="gender" required>
                <option value="" disabled selected>Select gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
        </div>

        <div class="mb-4 col-4">
            <label class="form-label">Telephone</label>
            <input type="text" name="tel" class="form-control" placeholder="Enter Telephone" required>
        </div>
    </div>
    
    <div class="d-flex justify-content-end gap-2">
        <a href="index.php" class="btn btn-secondary">Cancel</a>
        <button type="submit" class="btn btn-success">Add Student</button>
    </div>
  </form>