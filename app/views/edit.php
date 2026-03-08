 <h2 class="mb-4">Edit Student</h2>
  <form method="POST">
    <div class="d-flex gap-2">

        <div class="mb-3 col-4">
        <label class="form-label">Full Name</label>
        <input type="text" 
            value="<?= $student['name']; ?>"
            name="name"
            class="form-control" 
            placeholder="Enter full name" required>
        </div>
        
        <div class="mb-3 col-4">
        <label class="form-label">Gender</label>
        <select class="form-select" name="gender" required>
            <option value="" disabled selected>Select gender</option>
            <option value="Male" <?=$student['gender'] === "Male" ? 'selected' :''; ?>>Male</option>
            <option value="Female" <?=$student['gender']  === "Female" ? 'selected' :''; ?>>Female</option>
        </select>
        </div>
        <div class="mb-3 col-4">
            <label class="form-label">Telephone</label>
            <input type="text" 
            value="<?= $student['tel']; ?>"
            name="tel"
            class="form-control" 
            placeholder="Enter Telephone" required>
        </div>
    </div>
    
    <div class="d-flex justify-content-end gap-2">
        <a href="index.php" class="btn btn-secondary">Cancel</a>
        <button type="submit" class="btn btn-warning">Update Student</button>
    </div>
  </form>